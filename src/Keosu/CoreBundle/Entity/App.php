<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

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

use Keosu\CoreBundle\Model\Icons;
use Keosu\CoreBundle\Model\Splashscreens;

use Keosu\CoreBundle\Util\ThemeUtil;

/**
 * App
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Table(name="App")
 */
class App
{

    /**
     * Set default data for the form.
     */
    public function __construct(){
        $this->packageName = 'com.keosu.demo';
        $this->description = 'Keosu demo';
        $this->author = 'keosu team';
        $this->website = 'http://keosu.com';
        $this->email = 'mail@localhost.com';
        $this->version = '1';
        $this->theme = array_keys(ThemeUtil::getThemeList())[0];
        $this->preferences = array(
                // If you do not want any permissions to be added to your app, add the
                // following tag to your config.xml; you will still have the INTERNET
                // permission on your app, which PhoneGap requires.
                array("key" => "permissions"                ,"value" => "none"),
                array("key" => "phonegap-version"           ,"value" => "cli-6.3.0" ), // all: current version of PhoneGap
                array("key" => "orientation"                ,"value" => "default" ), // all: default means both landscape and portrait are enabled
                array("key" => "target-device"              ,"value" => "universal" ), // all: possible values handset, tablet, or universal
                array("key" => "Fullscreen"                 ,"value" => "true" ), // all: hides the status bar at the top of the screen
                array("key" => "webviewbounce"              ,"value" => "true" ), // ios: control whether the screen 'bounces' when scrolled beyond the top
                array("key" => "prerendered-icon"           ,"value" => "true" ), // ios: if icon is prerendered, iOS will not apply it's gloss to the app's icon on the user's home screen
                array("key" => "stay-in-webview"            ,"value" => "false" ), // ios: external links should open in the default browser, 'true' would use the webview the app lives in
                array("key" => "ios-statusbarstyle"         ,"value" => "black-opaque"), // ios: black-translucent will appear black because the PhoneGap webview doesn't go beneath the status bar
                array("key" => "detect-data-types"          ,"value" => "true" ), // ios: controls whether data types (such as phone no. and dates) are automatically turned into links by the system
                array("key" => "exit-on-suspend"            ,"value" => "false" ), // ios: if set to true, app will terminate when home button is pressed
                array("key" => "Show-splash-screen-spinner" ,"value" => "true" ), // ios: if set to false, the spinner won't appear on the splash screen during app loading
                array("key" => "auto-hide-splash-screen"    ,"value" => "false" ), // ios: if set to false, the splash screen must be hidden using a JavaScript API
                array("key" => "disable-cursor"             ,"value" => "false" ), // blackberry: prevents a mouse-icon/cursor from being displayed on the app
                array("key" => "android-minSdkVersion"      ,"value" => "14" ), // android: MIN SDK version supported on the target device. MAX version is blank by default.
                array("key" => "android-installLocation"    ,"value" => "auto" ), // android: app install location. 'auto' will choose. 'internalOnly' is device memory. 'preferExternal' is SDCard.
                array("key" => "disallowOverscroll"         ,"value" => "true" ),
                array("key" => "SplashScreenDelay"     ,"value" => "3000")
        );
    }

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
     * @var string
     *
     * @ORM\Column(name="version", type="text")
     */

    private $version;


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
     * @var boolean
     *
     * @ORM\Column(name="debugMode", type="boolean")
     */
    private $debugMode;

    /**
     * @var array
     *
     * @ORM\Column(name="configPackages", type="array",nullable=true)
     */
    private $configPackages;

    /**
     * @var array
     *
     * @ORM\Column(name="preferences", type="array",nullable=true)
     */
    private $preferences;

    private $splashscreens;

    private $icons;


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
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return string
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;

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

    /**
     * Set configPackages
     *
     * @param array $configPackages
     * @return App
     */
    public function setConfigPackages($configPackages)
    {
        $this->configPackages = $configPackages;

        return $this;
    }

    /**
     * Get configPackages
     *
     * @return array
     */
    public function getConfigPackages()
    {
        return $this->configPackages;
    }

    /**
     * Get preferences
     *
     * @return array
     */
    public function getPreferences(){
        return $this->preferences;
    }

    /**
     * Set preferences
     *
     * @param array $preferences
     * @return App
     */
    public function setPreferences($preferences) {
        $this->preferences = $preferences;
        return $this;
    }

    /**
     * Get splashscreens
     *
     * @return Splashscreens
     */
    public function getSplashscreens(){
        return $this->splashscreens;
    }


    /**
     * Set splashscreens
     *
     * @param Splashscreens $splashscreens
     * @return App
     */
    public function setSplashscreens(Splashscreens $splashscreens){
        $this->splashscreens = $splashscreens;
        return $this;
    }

    /**
     * Get icons
     *
     * @return Icons
     */
    public function getIcons(){
        return $this->icons;
    }


    /**
     * Set icons
     *
     * @param Icons $icons
     * @return App
     */
    public function setIcons(Icons $icons){
        $this->icons = $icons;
        return $this;
    }
}
