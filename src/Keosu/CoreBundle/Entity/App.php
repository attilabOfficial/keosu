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
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/
namespace Keosu\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Keosu\CoreBundle\Util\ThemeUtil;

/**
 * App
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class App
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="privateApp", type="boolean")
     */
    private $privateApp;
    
    /**
     * @var string
     *
     * @ORM\Column(name="packageName", type="string", length=255)
     */
    private $packageName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookAppId", type="string", length=1024, nullable=true)
     */
    private $facebookAppId;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookAppName", type="string", length=1024, nullable=true)
     */
    private $facebookAppName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebookAppSecret", type="string", length=1024, nullable=true)
     */
    private $facebookAppSecret;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="debugMode", type="boolean")
     */
    private $debugMode;
    
    //////////////////////////////////
    // Preferences for config.xml
    //////////////////////////////////
    
    /**
     * @var string
     *
     * @ORM\Column(name="permissions", type="string", length=1024)
     */
    private $permissions;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phonegap_version", type="string", length=1024)
     */
    private $phonegap_version;
    
    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=1024)
     */
    private $orientation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="target_device", type="string", length=1024)
     */
    private $target_device;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="fullscreen", type="boolean")
     */
    private $fullscreen;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="webviewbounce", type="boolean")
     */
    private $webviewbounce;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="prerendered_icon", type="boolean")
     */
    private $prerendered_icon;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="stay_in_webview", type="boolean")
     */
    private $stay_in_webview;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ios_statusbarstyle", type="string", length=1024)
     */
    private $ios_statusbarstyle;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="detect_data_types", type="boolean")
     */
    private $detect_data_types;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="exit_on_suspend", type="boolean")
     */
    private $exit_on_suspend;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="show_splash_screen_spinner", type="boolean")
     */
    private $show_splash_screen_spinner;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="auto_hide_splash_screen", type="boolean")
     */
    private $auto_hide_splash_screen;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disable_cursor", type="boolean")
     */
    private $disable_cursor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="android_minSdkVersion", type="string", length=1024)
     */
    private $android_minSdkVersion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="android_installLocation", type="string", length=1024)
     */
    private $android_installLocation;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="DisallowOverscroll", type="boolean")
     */
    private $disallowOverscroll;
    
    /**
     * @var string
     *
     * @ORM\Column(name="splash_screen_duration", type="string", length=1024)
     */
    private $splash_screen_duration;
    
    
    /**
     * Set default data for the form.
     */
    public function __construct(){
    	$this->packageName = 'com.keosu.demo';
    	$this->description = 'Keosu demo';
    	$this->author = 'keosu team';
    	$this->website = 'http://keosu.com';
    	$this->email = 'vleborgne@keosu.com';
    	$this->theme = array_keys(ThemeUtil::getThemeList())[0];
    	$this->permissions = 'none';
    	$this->phonegap_version = '3.1.0';
    	$this->orientation = "default";
    	$this->target_device = "universal";
    	$this->fullscreen = true ;
    	$this->webviewbounce = true ;
    	$this->prerendered_icon = true ;
    	$this->stay_in_webview = false ;
    	$this->ios_statusbarstyle = 'black-opaque' ;
    	$this->detect_data_types = true ;
    	$this->exit_on_suspend = true ;
    	$this->Show_splash_screen_spinner = true ;
    	$this->auto_hide_splash_screen = false ;
    	$this->disable_cursor = false ;
    	$this->android_minSdkVersion = '7' ;
    	$this->android_installLocation = 'auto' ;
    	$this->DisallowOverscroll = true ;
    	$this->splash_screen_duration ='10000' ;

    	
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return App
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return App
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }
    
    /**
     * Set privateApp
     *
     * @param boolean $privateApp
     * @return App
     */
    public function setPrivateApp($privateApp)
    {
        $this->privateApp = $privateApp;
    
        return $this;
    }

    /**
     * Get privateApp
     *
     * @return boolean
     */
    public function getPrivateApp()
    {
        return $this->privateApp;
    }
    
    public function isPrivate() {
        return $this->privateApp;
    }
    
    /**
     * Set packageName
     *
     * @param string $packageName
     * @return App
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    
        return $this;
    }

    /**
     * Get packageName
     *
     * @return string 
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return App
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return App
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return App
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return App
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facebookAppId
     *
     * @param string $facebookAppId
     * @return App
     */
    public function setFacebookAppId($facebookAppId)
    {
        $this->facebookAppId = $facebookAppId;
    
        return $this;
    }

    /**
     * Get facebookAppId
     *
     * @return string 
     */
    public function getFacebookAppId()
    {
        return $this->facebookAppId;
    }

    /**
     * Set facebookAppName
     *
     * @param string $facebookAppName
     * @return App
     */
    public function setFacebookAppName($facebookAppName)
    {
        $this->facebookAppName = $facebookAppName;
    
        return $this;
    }

    /**
     * Get facebookAppName
     *
     * @return string 
     */
    public function getFacebookAppName()
    {
        return $this->facebookAppName;
    }
    
    /**
     * Set facebookAppSecret
     *
     * @param string $facebookAppSecret
     * @return App
     */
    public function setFacebookAppSecret($facebookAppSecret)
    {
        $this->facebookAppSecret = $facebookAppSecret;
    
        return $this;
    }

    /**
     * Get facebookAppSecret
     *
     * @return string 
     */
    public function getFacebookAppSecret()
    {
        return $this->facebookAppSecret;
    }
    
    /**
     * Set debugMode
     *
     * @param boolean $debugMode
     * @return App
     */
    public function setDebugMode($debugMode)
    {
        $this->debugMode = $debugMode;
    
        return $this;
    }

    /**
     * Get debugMode
     *
     * @return string 
     */
    public function getDebugMode()
    {
        return $this->debugMode;
    }
    
    ////////////////////////////////////////////////////
    // Preferences getters / setters
    ////////////////////////////////////////////////////
    
    /**
     * Set permissions
     *
     * @param string $permissions
     * @return App
     */
    public function setPermissions($permissions){
    	$this->permissions = $permissions;
    
    	return $this;
    }
    
    /**
     * Get permissions
     *
     * @return string
     */
    public function getPermissions(){
    	return $this->permissions;
    }
    
    /**
     * Set phonegap_version
     *
     * @param string $phonegap_version
     * @return App
     */   
	public function setPhonegapVersion($phonegap_version){
		 $this->phonegap_version = $phonegap_version;
    
        return $this;
	}
	
	/**
	 * Get phonegap_version
	 *
	 * @return string
	 */
	public function getPhonegapVersion(){
		return $this->phonegap_version;
	}	
	
	/**
	 * Set orientation
	 *
	 * @param string $orientation
	 * @return App
	 */
	public function setOrientation($orientation){
		$this->orientation = $orientation;
	
		return $this;
	}
	
	/**
	 * Get orientation
	 *
	 * @return string
	 */
	public function getOrientation(){
		return $this->orientation;
	}
	
	/**
	 * Set fullscreen
	 *
	 * @param strin $fullscreen
	 * @return App
	 */
	public function setFullscreen($fullscreen){
		$this->fullscreen = $fullscreen;
	
		return $this;
	}
	
	/**
	 * Get fullscreen
	 *
	 * @return string
	 */
	public function getFullscreen(){
		return $this->fullscreen;
	}
	
	/**
	 * Set target_device
	 *
	 * @param string $target_device
	 * @return App
	 */
	public function setTargetDevice($target_device){
		$this->fullscreen = $target_device;
	
		return $this;
	}
	
	/**
	 * Get target_device
	 *
	 * @return string
	 */
	public function getTargetDevice(){
		return $this->target_device;
	}
	
	/**
	 * Set webviewbounce
	 *
	 * @param boolean $webviewbounce
	 * @return App
	 */
	public function setWebviewbounce($webviewbounce){
		$this->webviewbounce = $webviewbounce;
	
		return $this;
	}
	
	/**
	 * Get webviewbounce
	 *
	 * @return boolean
	 */
	public function getWebviewbounce(){
		return $this->webviewbounce;
	}
	
	/**
	 * Set prerendered_icon
	 *
	 * @param boolean $prerendered_icon
	 * @return App
	 */
	public function setPrerenderedIcon($prerendered_icon){
		$this->prerendered_icon = $prerendered_icon;
	
		return $this;
	}
	
	/**
	 * Get prerendered_icon
	 *
	 * @return boolean
	 */
	public function getPrerenderedIcon(){
		return $this->prerendered_icon;
	}
	
	/**
	 * Set stay_in_webview
	 *
	 * @param boolean $stay_in_webview
	 * @return App
	 */
	public function setStayInWebview($stay_in_webview){
		$this->stay_in_webview = $stay_in_webview;
	
		return $this;
	}
	
	/**
	 * Get stay_in_webview
	 *
	 * @return boolean
	 */
	public function getStayInWebview(){
		return $this->stay_in_webview;
	}
    
	/**
	 * Set ios_statusbarstyle
	 *
	 * @param string $ios_statusbarstyle
	 * @return App
	 */
	public function setIosStatusbarstyle($ios_statusbarstyle){
		$this->ios_statusbarstyle = $ios_statusbarstyle;
	
		return $this;
	}
	
	/**
	 * Get ios_statusbarstyle
	 *
	 * @return string
	 */
	public function getIosStatusbarstyle(){
		return $this->ios_statusbarstyle;
	}
	
	/**
	 * Set detect_data_types
	 *
	 * @param string $detect_data_types
	 * @return App
	 */
	public function setDetectDataTypes($detect_data_types){
		$this->detect_data_types = $detect_data_types;
	
		return $this;
	}
	
	/**
	 * Get detect_data_types
	 *
	 * @return boolean
	 */
	public function getDetectDataTypes(){
		return $this->detect_data_types;
	}
	
	/**
	 * Set exit_on_suspend
	 *
	 * @param boolean $exit_on_suspend
	 * @return App
	 */
	public function setExitOnSuspend($exit_on_suspend){
		$this->exit_on_suspend = $exit_on_suspend;
	
		return $this;
	}
	
	/**
	 * Get exit_on_suspend
	 *
	 * @return boolean
	 */
	public function getExitOnSuspend(){
		return $this->exit_on_suspend;
	}
	
	/**
	 * Set show_splash_screen_spinner
	 *
	 * @param boolean $show_splash_screen_spinner
	 * @return App
	 */
	public function setShowSplashScreenSpinner($show_splash_screen_spinner){
		$this->show_splash_screen_spinner = $show_splash_screen_spinner;
	
		return $this;
	}
	
	/**
	 * Get show_splash_screen_spinner
	 *
	 * @return boolean
	 */
	public function getShowSplashScreenSpinner(){
		return $this->show_splash_screen_spinner;
	}
	
	/**
	 * Set auto_hide_splash_screen
	 *
	 * @param boolean $auto_hide_splash_screen
	 * @return App
	 */
	public function setAutoHideSplashScreen($auto_hide_splash_screen){
		$this->auto_hide_splash_screen = $auto_hide_splash_screen;
	
		return $this;
	}
	
	/**
	 * Get auto_hide_splash_screen
	 *
	 * @return boolean
	 */
	public function getAutoHideSplashScreen(){
		return $this->auto_hide_splash_screen;
	}
	
	/**
	 * Set disable_cursor
	 *
	 * @param boolean $disable_cursor
	 * @return App
	 */
	public function setDisableCursor($disable_cursor){
		$this->disable_cursor = $autdisable_cursor;
	
		return $this;
	}
	
	/**
	 * Get disable_cursor
	 *
	 * @return boolean
	 */
	public function getDisableCursor(){
		return $this->disable_cursor;
	}
	
	/**
	 * Set android_minSdkVersion
	 *
	 * @param string $android_minSdkVersion
	 * @return App
	 */
	public function setAndroidMinSdkVersion($android_minSdkVersion){
		$this->android_minSdkVersion = $android_minSdkVersion;
	
		return $this;
	}
	
	/**
	 * Get android_minSdkVersion
	 *
	 * @return string
	 */
	public function getAndroidMinSdkVersion(){
		return $this->android_minSdkVersion;
	}
	
	/**
	 * Set android_installLocation
	 *
	 * @param string $android_installLocation
	 * @return App
	 */
	public function setAndroidInstallLocation($android_installLocation){
		$this->android_installLocation = $android_installLocation;
	
		return $this;
	}
	
	/**
	 * Get android_installLocation
	 *
	 * @return string
	 */
	public function getAndroidInstallLocation(){
		return $this->android_installLocation;
	}
	
	/**
	 * Set disallowOverscroll
	 *
	 * @param boolean $DisallowOverscroll
	 * @return App
	 */
	public function setDisallowOverscroll($disallowOverscroll){
		$this->disallowOverscroll = $disallowOverscroll;
	
		return $this;
	}
	
	/**
	 * Get disallowOverscroll
	 *
	 * @return boolean
	 */
	public function getDisallowOverscroll(){
		return $this->disallowOverscroll;
	}
	
	/**
	 * Set splash_screen_duration
	 *
	 * @param string $splash_screen_duration
	 * @return App
	 */
	public function setSplashScreenDuration($splash_screen_duration){
		$this->splash_screen_duration = $splash_screen_duration;
	
		return $this;
	}
	
	/**
	 * Get splash_screen_duration
	 *
	 * @return string
	 */
	public function getSplashScreenDuration(){
		return $this->splash_screen_duration;
	}
	
}
