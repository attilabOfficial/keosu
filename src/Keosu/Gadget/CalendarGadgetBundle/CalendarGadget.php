<?php

/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne

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

namespace Keosu\Gadget\CalendarGadgetBundle;
use Keosu\CoreBundle\iGadget;
use Keosu\CoreBundle\GadgetParent;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CalendarGadget extends GadgetParent implements iGadget {

	private $eventsPerPage;

	/**
	 * Gadget Name
	 * Used to find the gadget template path and roots
	 */
	public function getGadgetName() {
		return "calendar_gadget";
	}
	
	public function isStatic() {
		return false;
	}
	
	/**
	 * Construct a specific Gadget from a common Gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public static function constructfromGadget($gadget) {
		$instance = new self();
		parent::constructParentFromGadget($gadget,$instance);
		//Specific conf for this gadget
		$gadgetConfig = $gadget->getConfig();
		$instance->eventsPerPage = $gadgetConfig['events-per-page'];
		return $instance;
	}
	
	/**
	 * Get a specific gadget as a common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = parent::getAsCommonGadget();
		//Specific conf for article
		if ($this->eventsPerPage != null) {
			$config = array();
			$config['events-per-page'] = $this->eventsPerPage;
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
		if ($this->eventsPerPage != null) {
			$config = array();
			$config['events-per-page'] = $this->eventsPerPage;
			$commonGadget->setConfig($config);
		}
	}
	
	public function getEventsPerPage() {
		return $this->eventsPerPage;
	}
	public function setEventsPerPage($eventsPerPage) {
		$this->eventsPerPage = $eventsPerPage;
	}
	
	public function getRequieredPermissions() {
		return array(
			$this::PERMISSION_NATIVE_CALENDAR,
			$this::PERMISSION_NATIVE_SOCIAL_SHARING,
			$this::PERMISSION_GOOGLE_MAP_API);
	}
	public function getExtraJsToImport() {
		return array("components/underscore/underscore-min.js",
						"components/bootstrap2/js/bootstrap.min.js",
						"js/calendar.js",
						"js/app_calendar.js");
	}




}
