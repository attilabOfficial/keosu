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
namespace Keosu\Gadget\MenuGadgetBundle;
use Keosu\CoreBundle\iGadget;
use Keosu\CoreBundle\GadgetParent;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MenuGadget extends GadgetParent implements iGadget {

	//TODO Change this to an infinite list
	private $page1;
	private $page2;
	private $page3;
	private $page4;
	private $page5;
	private $page6;


	/**
	 * Gadget Name
	 * Used to find the gadget template path and routs
	 */
	public function getGadgetName() {
		return "menu_gadget";
	}
	
	public function isStatic() {
		return true;
	}
	
	/**
	 * Construct a specific Gadget from a common Gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public static function constructFromGadget($gadget) {
		$instance = new self();
		parent::constructParentFromGadget($gadget,$instance);
		//Specific conf for this gadget
		$gadgetConfig = $gadget->getConfig();
		if (array_key_exists('page1', $gadgetConfig)) 
			$instance->page1 = $gadgetConfig['page1'];
		if (array_key_exists('page2', $gadgetConfig))
			$instance->page2 = $gadgetConfig['page2'];
		if (array_key_exists('page3', $gadgetConfig))
			$instance->page3 = $gadgetConfig['page3'];
		if (array_key_exists('page4', $gadgetConfig))
			$instance->page4 = $gadgetConfig['page4'];
		if (array_key_exists('page5', $gadgetConfig))
			$instance->page5 = $gadgetConfig['page5'];
		if (array_key_exists('page6', $gadgetConfig))
			$instance->page5 = $gadgetConfig['page6'];
		return $instance;
	}
	/**
	 * Get a specific gadget as a common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = parent::getAsCommonGadget();
		//Specific conf for this gadget
		$config = array();
		if ($this->page1 != null) {
			$config['page1'] = $this->page1;
		}
		if ($this->page2 != null) {
			$config['page2'] = $this->page2;
		}
		if ($this->page3 != null) {
			$config['page3'] = $this->page3;
		}
		if ($this->page4 != null) {
			$config['page4'] = $this->page4;
		}
		if ($this->page5 != null) {
			$config['page5'] = $this->page5;
		}
		if ($this->page6 != null) {
			$config['page6'] = $this->page5;
		}
		$commonGadget->setConfig($config);
		
		return $commonGadget;
	}
	/**
	 * Convert a commonGadget (Keosu\CoreBundle\Entity\Gadget) to specific
	 */
	public function convertAsExistingCommonGadget($commonGadget) {
		parent::convertAsExistingCommonGadget($commonGadget);
		//Specific conf for articleId
		$config = array();
		if ($this->page1 != null) {
			$config['page1'] = $this->page1;
		}
		if ($this->page2 != null) {
			$config['page2'] = $this->page2;
		}
		if ($this->page3 != null) {
			$config['page3'] = $this->page3;
		}
		if ($this->page4 != null) {
			$config['page4'] = $this->page4;
		}
		if ($this->page5 != null) {
			$config['page5'] = $this->page5;
		}
		if ($this->page6 != null) {
			$config['page6'] = $this->page6;
		}
		$commonGadget->setConfig($config);
	}
	
	public function getpage1() {
		return $this->page1;
	}
	public function setpage1($page) {
		$this->page1 = $page;
		return $this;
	}
	public function getpage2() {
		return $this->page2;
	}
	public function setpage2($page) {
		$this->page2 = $page;
		return $this;
	}
	public function getpage3() {
		return $this->page3;
	}
	public function setpage3($page) {
		$this->page3 = $page;
		return $this;
	}
	public function getpage4() {
		return $this->page4;
	}
	public function setpage4($page) {
		$this->page4 = $page;
		return $this;
	}
	public function getpage5() {
		return $this->page5;
	}
	public function setpage5($page) {
		$this->page5 = $page;
		return $this;
	}
	
	public function getpage6() {
		return $this->page6;
	}
	public function setpage6($page) {
		$this->page6 = $page;
		return $this;
	}

}
