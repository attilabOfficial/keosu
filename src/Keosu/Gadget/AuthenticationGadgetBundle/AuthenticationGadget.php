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
namespace Keosu\Gadget\AuthenticationGadgetBundle;
use Keosu\CoreBundle\GadgetParent;

use Keosu\CoreBundle\iGadget;

class AuthenticationGadget extends GadgetParent implements iGadget {

	private $pageToGoAfterLogin;
	private $facebookConnect;
	/**
	 * Gadget Name
	 * Used to find the gadget template path and routs
	 */
	public function getGadgetName() {
		return "authentication_gadget";
	}
	
	public function isStatic() {
		return false;
	}

	/**
	 * Construct a specific Gadget from a common Gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public static function constructFromGadget($gadget) {
		$instance = new self();
		parent::constructParentFromGadget($gadget,$instance);
		$gadgetConfig = $gadget->getConfig();
		if (array_key_exists('pageToGoAfterLogin', $gadgetConfig)) 
			$instance->pageToGoAfterLogin = $gadgetConfig['pageToGoAfterLogin'];
		if (array_key_exists('facebookConnect', $gadgetConfig))
			$instance->facebookConnect = $gadgetConfig['facebookConnect'];
		return $instance;
	}

	/**
	 * Get a specific gadget as a common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = parent::getAsCommonGadget();
		if($this->pageToGoAfterLogin != null)
			$config['pageToGoAfterLogin'] = $this->pageToGoAfterLogin;
		if($this->facebookConnect != null)
			$config['facebookConnect'] = $this->facebookConnect;
		$commonGadget->setConfig($config);
		return $commonGadget;
	}

	/**
	 * Convert a commonGadget (Keosu\CoreBundle\Entity\Gadget) to specific
	 */
	public function convertAsExistingCommonGadget($commonGadget) {
		parent::convertAsExistingCommonGadget($commonGadget);
		$config = array();
		if ($this->pageToGoAfterLogin != null)
			$config['pageToGoAfterLogin'] = $this->pageToGoAfterLogin;
		if ($this->facebookConnect != null)
			$config['facebookConnect'] = $this->facebookConnect;
		$commonGadget->setConfig($config);
	}
	
	public function getpageToGoAfterLogin() {
		return $this->pageToGoAfterLogin;
	}
	
	public function setpageToGoAfterLogin($page) {
		$this->pageToGoAfterLogin = $page;
		return $this;
	}
	
	public function getFacebookConnect() {
		return $this->facebookConnect;
	}
	
	public function setFacebookConnect($facebookConnect) {
		$this->facebookConnect = $facebookConnect;
		return $this;
	}
	
	
	public function getRequieredPermissions() {
		$ret = array();
		if($this->facebookConnect) {
			$ret[] = $this::PERMISSION_FACEBOOK_API;
		}
		return $ret;
	}
}
