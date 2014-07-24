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
namespace Keosu\Gadget\MyAccountGadgetBundle;
use Keosu\CoreBundle\GadgetParent;

use Keosu\CoreBundle\iGadget;

class MyAccountGadget extends GadgetParent implements iGadget {

	//TODO
	/**
	 * Gadget Name
	 * Used to find the gadget template path and routs
	 */
	public function getGadgetName() {
		return "my_account_gadget";
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
		// TODO $instance->articleId = $gadgetConfig['article-id'];
		return $instance;
	}

	/**
	 * Get a specific gadget as a common gadget (Keosu\CoreBundle\Entity\Gadget)
	 */
	public function getAsCommonGadget() {
		$commonGadget = parent::getAsCommonGadget();
		//Specific conf for article
		/* TODO
		if ($this->articleId != null) {
			$config = array();
			$config['article-id'] = $this->articleId;
			$commonGadget->setConfig($config);
		}*/
		return $commonGadget;
	}

	/**
	 * Convert a commonGadget (Keosu\CoreBundle\Entity\Gadget) to specific
	 */
	public function convertAsExistingCommonGadget($commonGadget) {
		parent::convertAsExistingCommonGadget($commonGadget);	
		//Specific conf for articleId
		/* TODO
		if ($this->articleId != null) {
			$config = array();
			$config['article-id'] = $this->articleId;
			$commonGadget->setConfig($config);
		}*/
	}
	
	/* TODO
	public function getArticleId() {
		return $this->articleId;
	}
	public function setArticleId($articleId) {
		$this->articleId = $articleId;
	}*/
}
