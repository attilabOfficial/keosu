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
namespace Keosu\Gadget\MapGadgetBundle;
use Keosu\CoreBundle\iGadget;
use Keosu\CoreBundle\GadgetParent;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MapGadget extends GadgetParent implements iGadget {

	private $poiId;

	/**
	 * Gadget Name
	 * Used to find the gadget template path and routs
	 */
	public function getGadgetName() {
		return "map_gadget";
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
		//Specific conf for this gadget
		$gadgetConfig = $gadget->getConfig();
		$instance->poiIdId = $gadgetConfig['poi-id'];
		return $instance;
	}
	
	/**
	 * Get a specific gadget as a common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = parent::getAsCommonGadget();
		//Specific conf for article
		if ($this->poiId != null) {
			$config = array();
			$config['poi-id'] = $this->poiId;
			$commonGadget->setConfig($config);
		}
		return $commonGadget;
	}
	/**
	 * Convert a commonGadget (Keosu\CoreBundle\Entity\Gadget) to specific
	 */
	public function convertAsExistingCommonGadget($commonGadget) {
		parent::convertAsExistingCommonGadget($commonGadget);
		//Specific conf for articleId
		if ($this->poiId != null) {
			$config = array();
			$config['poi-id'] = $this->poiId;
			$commonGadget->setConfig($config);
		}
	}
	

	public function getPoiId() {
		return $this->poiId;
	}

	public function setPoiId($poiId) {
		$this->poiId = $poiId;
	}
}
