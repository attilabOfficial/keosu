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
use Keosu\CoreBundle\Entity\Model\MediaDataModel;
use Keosu\CoreBundle\Entity\ConfigParameters;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * App
 *
 * @ORM\Table()
 * @ORM\Entity
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
		$this->email = 'vleborgne@keosu.com';
		$this->theme = array_keys(ThemeUtil::getThemeList())[0];
		$this->configParam = new ConfigParameters();
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

    
    /**
     * @var ConfigParameters
     * 
     * @ORM\OneToOne(targetEntity="Keosu\CoreBundle\Entity\ConfigParameters", cascade={"persist"})
     */
    private $configParam;
    
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
	
    /**
     * Get configParam
     *
     * @return ConfigParam
     */
    public function getConfigParam(){
    	return $this->configParam;
    }
    
    
    /**
     * Set configParam
     *
     * @param ConfigParam $configParam
     * @return App
     */
    public function setConfigParam(ConfigParameters $configParam){
    	$this->configParam = $configParam;
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
