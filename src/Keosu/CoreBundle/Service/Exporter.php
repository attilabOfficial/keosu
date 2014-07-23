<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses,.
************************************************************************/
namespace Keosu\CoreBundle\Service;

use Keosu\CoreBundle\KeosuExtension;
use Keosu\CoreBundle\GadgetParent;

use Keosu\CoreBundle\Util\ZipUtil;
use Keosu\CoreBundle\Util\ThemeUtil;
use Keosu\CoreBundle\Util\FilesUtil;
use Keosu\CoreBundle\Util\ExporterUtil;
use Keosu\CoreBundle\Util\StringUtil;
use Keosu\CoreBundle\Util\TemplateUtil;

class Exporter {

	private $doctrine;

	private $container;

	public function __construct($doctrine,$container) {
		$this->doctrine = $doctrine;
		$this->container = $container;
	}

	public function exportApp() {
		
		$em = $this->doctrine->getManager();
		$baseurl = $this->container->getParameter('url_base');
		$param = $this->container->getParameter('url_param');
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		
		
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appId);

		$this->cleanDir();

		//Export theme
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		$json = json_encode(array('name' => $app->getName()));
		
		FilesUtil::copyContent($json, ExporterUtil::getAbsolutePath() . '/simulator/www/data/appName.json');
		
		FilesUtil::copyFolder(ThemeUtil::getAbsolutePath() . $app->getTheme().'/style',
				ExporterUtil::getAbsolutePath() . '/simulator/www/theme');
				
		//Copy all web/templates/export/js dir to web/export/www/js
		FilesUtil::copyFolder(TemplateUtil::getAbsolutePath() . '/main-header/js',
				ExporterUtil::getAbsolutePath() . '/simulator/www/js');
		
		//cordova_plugins.json
		copy(TemplateUtil::getAbsolutePath() . '/main-header/cordova_plugins.js',
			ExporterUtil::getAbsolutePath() . '/simulator/www/cordova_plugins.js');
		
		copy(TemplateUtil::getAbsolutePath() . '/main-header/index.html',
			ExporterUtil::getAbsolutePath() . '/simulator/www/index.html');

		
		//Copy all theme/header/js dir to web/export/www/js
		FilesUtil::copyFolder(ThemeUtil::getAbsolutePath() . $app->getTheme().'/header/js',
		ExporterUtil::getAbsolutePath() . '/simulator/www/js');

		
		//Copy Splashcreens and icons
		FilesUtil::copyFolder(ExporterUtil::getSplashsIconesDir($app->getId()), ExporterUtil::getAbsolutePath().'/simulator/www/res/');	
		
		
		
		// list of imported gadgets
		$importedGadget = array();
		// list of permissions requiered for the application
		$permissions = array();
		$jsToImport = array();
		$mainPage = null;
		
		////////////////////////////////////////
		// Generate view for each page
		////////////////////////////////////////
		foreach ($pages as $page) {
		
			if($mainPage == null) {
				$mainPage = $page->getId();
			}
			if($page->getIsMain()) {
				$mainPage = $page->getId();
			}

			//All page content will be put in $document
			$document = new \DOMDocument();

			//For all zones in page template
			$classname = "zone";//Find all the zone div in page template
			//Disallow errors to allow HTML5 parsing
			@$document->loadHtmlFile(TemplateUtil::getPageTemplateAbsolutePath().$page->getTemplateId());

			$finder = new \DOMXPath($document);
			$zones = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");

			$gadgetRepo = $em->getRepository('KeosuCoreBundle:Gadget');
			foreach ($zones as $zone) {
				$zoneId = $zone->getAttribute('id');
				//Look if there is a shared gadget in this zone
				$gadget = $gadgetRepo->findSharedByZoneAndApp($zoneId,$appId);
				//If there is no share gadget we try to find the specific one
				if($gadget == null){
					//Find the gadget associated with page and zone
					$gadget = $gadgetRepo->findOneBy(array('zone' => $zoneId, 'page' => $page->getId()));
				}

				if ($gadget != null) {
					//Add gadget html template
					$gadgetTemplateHtml = file_get_contents(
							TemplateUtil::getGadgetAbsolutePath() . '/'
									. $gadget->getGadgetName() . '/'
									. $gadget->getGadgetTemplate());
					$gadgetTemplateHtml = utf8_encode($gadgetTemplateHtml);
					$zone->nodeValue = $gadgetTemplateHtml;
					//Add the angularJS directive to zone
					// TODO keep this ?
					$zone->setAttribute("ng-controller", $gadget->getGadgetName()."Controller");
					$zone->setAttribute("ng-init","init('".$baseurl."','".$param."','".$page->getFileName()."','".$gadget->getId() ."','".$zoneId."')");
					//Saving node
					$zone->ownerDocument->saveXML($zone);

					//If gadget isStatic we copy static data in a local file
					if($gadget->isStatic()){
						//Gadget name without suffix
						$shortGadgetName = str_replace("_gadget", "", $gadget->getGadgetName());
						//CURL the gadget service
						$serviceurl=$baseurl.$param."service/gadget/".$shortGadgetName."/".$gadget->getId()."/json";
						$curl = curl_init($serviceurl);
						curl_setopt($curl, CURLOPT_HTTPHEADER,
							array('Content-Type: text/xml',
							'User-Agent: Keosu-UA'));
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
						$feedstring = utf8_decode(curl_exec($curl));
						$this->writeFile($feedstring, $gadget->getId().".json","/simulator/www/data/");
					}

					// permission part
					$class = KeosuExtension::$gadgetList[$gadget->getGadgetName()];
					$instance = new $class();
					$instance = $instance->constructFromGadget($gadget);
					$permissions = array_merge($permissions,$instance->getRequieredPermissions());
					
					//JS file to import
					$jsToImport=array_merge($jsToImport,$instance->getExtraJsToImport());
					
					// import folder part
					$importedGadget[] = $gadget->getGadgetName();
				}
			}

			$bodyEl = $document->getElementsByTagName("body")->item(0);
			$html = $this->DomInnerHTML($bodyEl);
			$html = StringUtil::decodeString($html);
			$this->writeFile($html, $page->getFileName(),"/simulator/www/");
		}
		
		$importedGadget = array_unique($importedGadget);
		$permissions = array_unique($permissions);
		$jsToImport = array_unique($jsToImport);

		///////////////////////////////////////////////////
		// Generate main view index.html
		///////////////////////////////////////////////////

		// load index.html (main template)
		$document = new \DOMDocument();
		@$document->loadHtmlFile(ExporterUtil::getAbsolutePath() . '/simulator/www/index.html');

		// TODO import theme in index.html
		$tmpthemeHeader = new \DOMDocument();
		@$tmpthemeHeader->loadHtmlFile(ThemeUtil::getAbsolutePath() .$app->getTheme().'/header/header.html');
		
		$children = $tmpthemeHeader->getElementsByTagName("head")->item(0)->childNodes;
		foreach($children as $child) {
			$document->getElementsByTagName("head")->item(0)->appendChild($document->importNode($child));
		}
		
		// facebook api js part
		if( array_search(GadgetParent::PERMISSION_FACEBOOK_API,$permissions) !== false 
					&& $app->getFacebookAppId() != null && $app->getFacebookAppName() && $app->getFacebookAppSecret() != null) {
			$script = $document->createElement("script");
			$script->setAttribute("src","js/cdv-plugin-fb-connect.js");
			$document->getElementsByTagName("head")->item(0)->appendChild($script);
			
			$script = $document->createElement("script");
			$script->setAttribute("src","js/facebook-js-sdk.js");
			$document->getElementsByTagName("head")->item(0)->appendChild($script);
			
			copy(TemplateUtil::getAbsolutePath() . '/main-header/plugins/facebook/cdv-plugin-fb-connect.js',
			ExporterUtil::getAbsolutePath() . '/simulator/www/js/cdv-plugin-fb-connect.js');
			
			copy(TemplateUtil::getAbsolutePath() . '/main-header/plugins/facebook/facebook-js-sdk.js',
			ExporterUtil::getAbsolutePath() . '/simulator/www/js/facebook-js-sdk.js');
		}

		//Ading the script TAG in document head
		//This is used to import custom JS file for gadgets
		foreach ($jsToImport as $jsURl){
			$script = $document->createElement("script");
			$script->setAttribute("src",$jsURl);
			$document->getElementsByTagName("head")->item(0)->appendChild($script);
		}
		// import weinre if the app is in debug mode
		// @see https://people.apache.org/~pmuellr/weinre/docs/latest/Home.html
		if($app->getDebugMode() == true) {
			$script = $document->createElement("script");
			$script->setAttribute("src",\substr($baseurl,0,\strlen($baseurl)-10).":8080/target/target-script-min.js#anonymous");
			$document->getElementsByTagName("head")->item(0)->appendChild($script);
		}

		// this should always be at the end
		$script = $document->createElement("script");
		$script->setAttribute("src","js/app.js");
		$document->getElementsByTagName("head")->item(0)->appendChild($script);


		$this->writeFile(StringUtil::decodeString($document->saveHTML()),'index.html','/simulator/www/');

		////////////////////////////////////////////////////
		// import all gadget requiered controller
		////////////////////////////////////////////////////
		$appJs = \file_get_contents(ExporterUtil::getAbsolutePath() . '/simulator/www/js/app.js');
		$appJs .= '
app.config(function($routeProvider,$locationProvider){
	$routeProvider.when("/Page/:pageName",{
		templateUrl: function(params) {
			return params.pageName+".html";
		}
	})
	.otherwise({redirectTo:"/Page/'.$mainPage.'"});
});';

		if( array_search(GadgetParent::PERMISSION_FACEBOOK_API,$permissions) !== false 
					&& $app->getFacebookAppId() != null && $app->getFacebookAppName() && $app->getFacebookAppSecret() != null) {
			$appJs .= "
document.addEventListener('deviceready', function() {
	FB.init({
		appId: '".$app->getFacebookAppId()."',
		nativeInterface: CDV.FB,
		useCachedDialogs: false
	});
});";
		}

		foreach($importedGadget as $ig) {
			$appJs .= "\n".\file_get_contents(TemplateUtil::getGadgetAbsolutePath().$ig .'/'.$ig.'Controller.js');
		}
		$this->writeFile($appJs,'app.js','/simulator/www/js/');
		
		////////////////////////////////////////////////////
		// import folder if they exist
		////////////////////////////////////////////////////
		foreach($importedGadget as $gadget) {
		
			$path = TemplateUtil::getAbsolutePath().DIRECTORY_SEPARATOR.'gadget'.DIRECTORY_SEPARATOR.$gadget;
			$dirs = scandir($path);
			foreach($dirs as $dir) {
				if($dir != '.' && $dir != '..' && is_dir($path. DIRECTORY_SEPARATOR .$dir)) {
					FilesUtil::copyFolder($path. DIRECTORY_SEPARATOR .$dir,
						ExporterUtil::getAbsolutePath() . DIRECTORY_SEPARATOR .'simulator'. DIRECTORY_SEPARATOR .'www'. DIRECTORY_SEPARATOR .$dir);
				}
			}
		}

		///////////////////////////////////////////////////
		// Generate config.xml
		//////////////////////////////////////////////////
		$configXml = new \DOMDocument("1.0","UTF-8");
		$configXml->formatOutput = true;//TODO remove after debug
		$widget = $configXml->createElement('widget');
		$widget->setAttribute("xmlns","http://www.w3.org/ns/widgets");
		$widget->setAttribute("xmlns:gap","http://phonegap.com/ns/1.0");
		$widget->setAttribute("id",$app->getPackageName());
		$widget->setAttribute("version","1.0");

		$configXml->appendChild($widget);

		$widget->appendChild($configXml->createElement("name",$app->getName()));
		$widget->appendChild($configXml->createElement("description",$app->getDescription()));
		$author = $configXml->createElement("author",$app->getAuthor());
		$author->setAttribute("href",$app->getWebsite());
		$author->setAttribute("email",$app->getEmail());
		$widget->appendChild($author);

		//Enable individual API permissions here.
		//The "device" permission is required for the 'deviceready' event.
		$device = $configXml->createElement("feature");
		$device->setAttribute("name","http://api.phonegap.com/1.0/device");
		$widget->appendChild($device);
		
		if( array_search(GadgetParent::PERMISSION_GOOGLE_MAP_API,$permissions) !== false) {
			$feature = $configXml->createElement("feature");
			$feature->setAttribute("name","http://api.phonegap.com/1.0/geolocation");
			$widget->appendChild($feature);
		}
		
		$preferences = array(
			// If you do not want any permissions to be added to your app, add the
			// following tag to your config.xml; you will still have the INTERNET
			// permission on your app, which PhoneGap requires.
			"permissions"                => $app->getConfigParam()->getPermissions(),
			"phonegap-version"           => $app->getConfigParam()->getPhonegapVersion() , // all: current version of PhoneGap 
			"orientation"                => $app->getConfigParam()->getOrientation() , // all: default means both landscape and portrait are enabled 
			"target-device"              => $app->getConfigParam()->getTargetDevice() , // all: possible values handset, tablet, or universal 
			"Fullscreen"                 => ExporterUtil::boolToString($app->getConfigParam()->getFullscreen()) , // all: hides the status bar at the top of the screen 
			"webviewbounce"              => ExporterUtil::boolToString($app->getConfigParam()->getWebviewbounce()) , // ios: control whether the screen 'bounces' when scrolled beyond the top 
			"prerendered-icon"           => ExporterUtil::boolToString($app->getConfigParam()->getPrerenderedIcon()) , // ios: if icon is prerendered, iOS will not apply it's gloss to the app's icon on the user's home screen 
			"stay-in-webview"            => ExporterUtil::boolToString($app->getConfigParam()->getStayInWebview()) , // ios: external links should open in the default browser, 'true' would use the webview the app lives in 
			"ios-statusbarstyle"         => $app->getConfigParam()->getIosStatusbarstyle() , // ios: black-translucent will appear black because the PhoneGap webview doesn't go beneath the status bar 
			"detect-data-types"          => ExporterUtil::boolToString($app->getConfigParam()->getDetectDataTypes()) , // ios: controls whether data types (such as phone no. and dates) are automatically turned into links by the system 
			"exit-on-suspend"            => ExporterUtil::boolToString($app->getConfigParam()->getExitOnSuspend()) , // ios: if set to true, app will terminate when home button is pressed 
			"Show-splash-screen-spinner" => ExporterUtil::boolToString($app->getConfigParam()->getShowSplashScreenSpinner()) , // ios: if set to false, the spinner won't appear on the splash screen during app loading 
			"auto-hide-splash-screen"    => ExporterUtil::boolToString($app->getConfigParam()->getAutoHideSplashScreen()) , // ios: if set to false, the splash screen must be hidden using a JavaScript API 
			"disable-cursor"             => ExporterUtil::boolToString($app->getConfigParam()->getDisableCursor()) , // blackberry: prevents a mouse-icon/cursor from being displayed on the app 
			"android-minSdkVersion"      => $app->getConfigParam()->getAndroidMinSdkVersion() , // android: MIN SDK version supported on the target device. MAX version is blank by default. 
			"android-installLocation"    => $app->getConfigParam()->getAndroidInstallLocation() , // android: app install location. 'auto' will choose. 'internalOnly' is device memory. 'preferExternal' is SDCard. 
			"DisallowOverscroll"         => ExporterUtil::boolToString($app->getConfigParam()->getDisallowOverscroll()) ,
			"splash-screen-duration"     => $app->getConfigParam()->getSplashScreenDuration(),
		);
		
		foreach($preferences as $k => $v) {
			$preference = $configXml->createElement("preference");
			$preference->setAttribute($k,$v);
			$widget->appendChild($preference);
		}
		

		if( array_search(GadgetParent::PERMISSION_NATIVE_CALENDAR,$permissions) !== false) {
			$plugin = $configXml->createElement("gap:plugin");
			$plugin->setAttribute("name","nl.x-services.plugins.calendar");
			$plugin->setAttribute("version","4.2.2");
			$widget->appendChild($plugin);
		}
		
		if( array_search(GadgetParent::PERMISSION_NATIVE_SOCIAL_SHARING,$permissions) !== false) {
			$plugin = $configXml->createElement("gap:plugin");
			$plugin->setAttribute("name","nl.x-services.plugins.socialsharing");
			$plugin->setAttribute("version","4.0.8");
			$widget->appendChild($plugin);
		}
		
		if( array_search(GadgetParent::PERMISSION_FACEBOOK_API,$permissions) !== false 
			&& $app->getFacebookAppId() != null && $app->getFacebookAppName() && $app->getFacebookAppSecret() != null) {
			$plugin = $configXml->createElement("gap:plugin");
			$plugin->setAttribute("name","com.phonegap.plugins.facebookconnect");
			$plugin->setAttribute("version","0.4.0");
				$param = $configXml->createElement("param");
				$param->setAttribute("name","APP_ID");
				$param->setAttribute("value",$app->getFacebookAppId());
				$plugin->appendChild($param);
				
				$param = $configXml->createElement("param");
				$param->setAttribute("name","APP_NAME");
				$param->setAttribute("value",$app->getFacebookAppName());
				$plugin->appendChild($param);
			$widget->appendChild($plugin);
			
		}
		// Define app icon for each platform.
		$icons = array(
			array( "src"=>"icon.png"),
			// ANDROID
			array( "src"=>"res/icons/android/iconA36.png" ,"gap:platform"=>"android","gap:density"=>"ldpi"),
			array( "src"=>"res/icons/android/iconA48.png" ,"gap:platform"=>"android","gap:density"=>"mdpi"),
			array( "src"=>"res/icons/android/iconA72.png" ,"gap:platform"=>"android","gap:density"=>"hdpi"),
			array( "src"=>"res/icons/android/iconA96.png" ,"gap:platform"=>"android","gap:density"=>"xhdpi"),
			// IOS
			array( "src"=>"res/icons/ios/iconI57.png" ,"gap:platform"=>"ios","width"=>"57","height"=>"57"),
			array( "src"=>"res/icons/ios/iconI72.png" ,"gap:platform"=>"ios","width"=>"72","height"=>"72"),
			array( "src"=>"res/icons/ios/iconI114.png" ,"gap:platform"=>"ios","width"=>"114","height"=>"114"),
			array( "src"=>"res/icons/ios/iconI120.png" ,"gap:platform"=>"ios","width"=>"120","height"=>"120"),
			array( "src"=>"res/icons/ios/iconI76.png" ,"gap:platform"=>"ios","width"=>"76","height"=>"76"),
			array( "src"=>"res/icons/ios/iconI152.png" ,"gap:platform"=>"ios","width"=>"152","height"=>"152"),
			array( "src"=>"res/icons/ios/iconI144.png" ,"gap:platform"=>"ios","width"=>"144","height"=>"144"),
		);
		
		foreach($icons as $i) {
			$icon = $configXml->createElement('icon');
			foreach($i as $k => $v) {
				$icon->setAttribute($k,$v);
			}
			$widget->appendChild($icon);
		}
		
		
		// Define app splash screen for each platform.
		$splashScreen = array(
			// ANDROID
			array( "src"=>"res/screen/android/splashscreenA320x436.png" ,"gap:platform"=>"android" ,"gap:density"=>"ldpi"),
			array( "src"=>"res/screen/android/splashscreenA320x470.png" ,"gap:platform"=>"android" ,"gap:density"=>"mdpi"),
			array( "src"=>"res/screen/android/splashscreenA640x480.png" ,"gap:platform"=>"android" ,"gap:density"=>"hdpi"),
			array( "src"=>"res/screen/android/splashscreenA960x720.png" ,"gap:platform"=>"android" ,"gap:density"=>"xhdpi"),
			// IOS
			array( "src"=>"res/screen/ios/splashscreenI320x480.png" ,"gap:platform"=>"ios" ,"width"=>"320" ,"height"=>"480"),
			array( "src"=>"res/screen/ios/splashscreenI640x960.png" ,"gap:platform"=>"ios" ,"width"=>"640" ,"height"=>"960"),
			array( "src"=>"res/screen/ios/splashscreenI640x1136.png" ,"gap:platform"=>"ios" ,"width"=>"640" ,"height"=>"1136"),
			array( "src"=>"res/screen/ios/splashscreenI1024x748.png" ,"gap:platform"=>"ios" ,"width"=>"1024" ,"height"=>"748"),
			array( "src"=>"res/screen/ios/splashscreenI768x1004.png" ,"gap:platform"=>"ios" ,"width"=>"768" ,"height"=>"1004"),
			array( "src"=>"res/screen/ios/splashscreenI2048x1496.png" ,"gap:platform"=>"ios" ,"width"=>"2048" ,"height"=>"1496"),
			array( "src"=>"res/screen/ios/splashscreenI1536x2008.png" ,"gap:platform"=>"ios" ,"width"=>"1536" ,"height"=>"2008"),
		);
		
		foreach($splashScreen as $asplash) {
			$splash = $configXml->createElement("gap:splash");
			foreach($asplash as $k=>$v)
				$splash->setAttribute($k,$v);
			$widget->appendChild($splash);
		}
		
		// Define access to external domains.
		// <access), - a blank access tag denies access to all external resources.
		// <access origin="*"), - a wildcard access tag allows access to all external resource.
		// Otherwise, you can specify specific domains:
		// <access origin="http://phonegap.com"), - allow any secure requests to http://phonegap.com/
		// <access origin="http://phonegap.com" subdomains="true"), - same as above, but including subdomains, such as http://build.phonegap.com/
		// <access origin="http://phonegap.com" browserOnly="true"), - only allows http://phonegap.com to be opened by the child browser.
		$access = array(
			array("origin"=>"*")
		);
		foreach($access as $a) {
			$accesses = $configXml->createElement("access");
			foreach($a as $k => $v)
				$accesses->setAttribute($k,$v);
			$widget->appendChild($accesses);
		}

		$configXml->save(ExporterUtil::getAbsolutePath().DIRECTORY_SEPARATOR.'simulator'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'config.xml');

		/**
		 * Duplicate Export for ios, android and phonegapbuild
		 */
		//For ios
		FilesUtil::copyFolder(ExporterUtil::getAbsolutePath() . '/simulator/www',
			ExporterUtil::getAbsolutePath() . '/ios/www');
		
		copy(TemplateUtil::getAbsolutePath() . '/main-header/ios/cordova.js',
			ExporterUtil::getAbsolutePath() . '/ios/www/cordova.js');
		
		//For Android
		
		FilesUtil::copyFolder(ExporterUtil::getAbsolutePath() . '/simulator/www',
			ExporterUtil::getAbsolutePath() . '/android/www');
		
		copy(TemplateUtil::getAbsolutePath() . '/main-header/android/cordova.js',
		ExporterUtil::getAbsolutePath() . '/android/www/cordova.js');
		
		//For phonegapbuild
		FilesUtil::copyFolder(ExporterUtil::getAbsolutePath() . '/simulator/www',
			ExporterUtil::getAbsolutePath() . '/phonegapbuild/www');
		//No cordova.js in phonegapbuild
		
		copy(TemplateUtil::getAbsolutePath() . '/main-header/ios/cordova.js',
		ExporterUtil::getAbsolutePath() . '/simulator/www/cordova.js');
		
		
		//Generate ZIP files for all

		//ios
		ZipUtil::ZipFolder(ExporterUtil::getAbsolutePath() . '/ios/www',
			ExporterUtil::getAbsolutePath() . '/ios/export.zip');
		//android
		ZipUtil::ZipFolder(ExporterUtil::getAbsolutePath() . '/android/www',
			ExporterUtil::getAbsolutePath() . '/android/export.zip');
		//Phonegapbuild
		ZipUtil::ZipFolder(ExporterUtil::getAbsolutePath() . '/phonegapbuild/www',
			ExporterUtil::getAbsolutePath() . '/phonegapbuild/export.zip');

		// Remove cache for simulator
		$document = new \DOMDocument();
		@$document->loadHtmlFile(ExporterUtil::getAbsolutePath() . '/simulator/www/index.html');

		$meta = $document->createElement("meta");
		$meta->setAttribute("http-equiv","Pragma");
		$meta->setAttribute("content","no-cache");
		$document->getElementsByTagName("head")->item(0)->appendChild($meta);
		
		$meta = $document->createElement("meta");
		$meta->setAttribute("http-equiv","Expires");
		$meta->setAttribute("content","-1");
		$document->getElementsByTagName("head")->item(0)->appendChild($meta);
		
		$this->writeFile(StringUtil::decodeString($document->saveHTML()),'index.html','/simulator/www/');
	}

	private function cleanDir() {
		//Clean existing export dir
		FilesUtil::deleteDir(ExporterUtil::getAbsolutePath() .'/simulator/www');
		FilesUtil::deleteDir(ExporterUtil::getAbsolutePath() .'/ios/www');
		FilesUtil::deleteDir(ExporterUtil::getAbsolutePath() .'/android/www');
		FilesUtil::deleteDir(ExporterUtil::getAbsolutePath() .'/phonegapbuild/www');
		
		//Creating dir www and js
		mkdir(ExporterUtil::getAbsolutePath() . '/simulator/www/gadget', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/simulator/www/theme', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/simulator/www/js', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/simulator/www/data', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/simulator/www/res', 0777, true);
		
		mkdir(ExporterUtil::getAbsolutePath() . '/ios/www', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/android/www', 0777, true);
		mkdir(ExporterUtil::getAbsolutePath() . '/phonegapbuild/www', 0777, true);
	}

	//write a file
	private function writeFile($html, $fileName, $path) {
		//Writting the html content in file
		$destiPath = ExporterUtil::getAbsolutePath() . $path;
	
		$fileName = $destiPath . $fileName;
	
		if (file_exists($fileName)) {
			unlink($fileName);
		}
		$file = fopen($fileName, "x+");
		fwrite($file, $html);
		fclose($file);
	}
	
	/**
	 * Allow to have innerhtml of a DomNode
	 * @see https://stackoverflow.com/questions/2087103/innerhtml-in-phps-domdocument
	 */
	private function DOMinnerHTML($element) 
	{ 
		$innerHTML = ""; 
		$children = $element->childNodes;

		foreach ($children as $child) 
			$innerHTML .= $element->ownerDocument->saveHTML($child);

		return $innerHTML; 
	}
}
?>
