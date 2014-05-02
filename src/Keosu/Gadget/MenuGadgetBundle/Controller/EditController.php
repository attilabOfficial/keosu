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
namespace Keosu\Gadget\MenuGadgetBundle\Controller;

use Keosu\CoreBundle\Controller\iGadgetController;

use Keosu\CoreBundle\Controller\GadgetEditController;

use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\CoreBundle\Entity\Gadget;

use Keosu\Gadget\LinkGadgetBundle\LinkGadget;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Specific gadget controller
 * extends Keosu\CoreBundle\Controller\GadgetEditController
 * implements
 * @author vleborgne
 *
 */
class EditController extends GadgetEditController  implements iGadgetController {
	private $pageImg = array ('home', 'chrono', 'news', 'map');
	
	public function getListImg() {
		return $this->pageImg;
	}
	
	public function getGadgetClass(){
		return "Keosu\Gadget\MenuGadgetBundle\MenuGadget";
	}
	
	//Specific form for the gadget
	public function buildGadgetForm($formBuilder, $gadgetName) {	
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		$pages = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);
		$pageList = Array();
		foreach ($pages as $page) {
			$pageList[$page->getId()] = $page->getName();
		}
		$formBuilder
				->add('page1', 'choice',
						array('choices' => $pageList, 'required' => true,))
				/*->add('icon', 'choice',
						array('choices' => $this->pageImg, 'required' => true,))*/
				->add('page2', 'choice',
						array('choices' => $pageList, 'required' => false,))
				/*->add('icon', 'choice',
						array('choices' => $this->pageImg, 'required' => false,))*/
				->add('page3', 'choice',
						array('choices' => $pageList, 'required' => false,))
				/*->add('icon', 'choice',
						array('choices' => $this->pageImg, 'required' => false,))*/
				->add('page4', 'choice',
						array('choices' => $pageList, 'required' => false,))
				->add('page5', 'choice',
						array('choices' => $pageList, 'required' => false,))
				->add('page6', 'choice',
						array('choices' => $pageList, 'required' => false,))
				->add('shared', 'checkbox', array(
    					'label'     => 'Shared with all pages',
    					'required'  => false,))
    			->add('gadgetTemplate', 'choice',
    					array(
    						'choices' => TemplateUtil::getTemplateGadgetList(
    							$gadgetName), 'required' => true,'expanded'=>true))
		;

	}

}
