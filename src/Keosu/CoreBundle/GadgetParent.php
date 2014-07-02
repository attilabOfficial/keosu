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
namespace Keosu\CoreBundle;

class GadgetParent {

	private $page;
	private $zone;
	private $gadgetTemplate;
	private $shared;

	/****************
	 * Part permission for gadgets
	 ****************/
	const PERMISSION_FACEBOOK_API = 1;
	const PERMISSION_GOOGLE_MAP_API = 2;
	const PERMISSION_NATIVE_CALENDAR = 3;
	const PERMISSION_GEOLOCATION = 4;
	const PERMISSION_NATIVE_SOCIAL_SHARING = 5;

	/**
	 * Gadget Name (call to child function)
	 * Used to find the gadget template path and routs
	 */
	public function getChildGadgetName() {
		return $this->getGadgetName();
	}

	/**
	 * Construct a specific Gadget from a common Gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public static function constructParentFromGadget($gadget, $instance) {
		if (is_a($gadget, 'Keosu\CoreBundle\Entity\Gadget')) {
			$instance->page = $gadget->getPage();
			$instance->zone = $gadget->getZone();
			$instance->gadgetTemplate = $gadget->getGadgetTemplate();
			$instance->shared = $gadget->isShared();
		}
		return $instance;
	}

	/**
	 * Get a specific gadget as a new common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = new Gadget();
		$this->convertAsExistingCommonGadget($commonGadget);
		$commonGadget->setConfig($config);
		return $commonGadget;
	}

	/**
	 * Convert a specificGadget to existing common one
	 */
	public function convertAsExistingCommonGadget($commonGadget) {
		$commonGadget->setPage($this->page);
		$commonGadget->setZone($this->zone);
		$commonGadget->setGadgetTemplate($this->gadgetTemplate);
		$commonGadget->setShared($this->shared);
		$commonGadget->setGadgetName($this->getChildGadgetName());
	}
	/**
	 * Required Cordova plugin to use the gadget
	 */
	public function getRequieredPermissions() {
		return array();
	}
	/**
	 * Required JS file to use the gadget
	*/
	public function getExtraJsToImport() {
		return array();
	}

	public function getPage() {
		return $this->page;
	}
	public function setPage($page) {
		$this->page = $page;
		return $this;
	}
	public function getZone() {
		return $this->zone;
	}	
	public function setZone($zone) {
		$this->zone = $zone;
		return $this;
	}
	public function setGadgetTemplate($gadgetTemplate) {
		$this->gadgetTemplate = $gadgetTemplate;
		return $this;
	}
	public function getGadgetTemplate() {
		return $this->gadgetTemplate;
	}
	public function setShared($shared) {
		$this->shared = $shared;
		return $this;
	}
	public function isShared() {
		return $this->shared;
	}

}
