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
namespace Keosu\Gadget\MyAccountGadgetBundle\Controller;

use Keosu\CoreBundle\Controller\iGadgetController;
use Keosu\CoreBundle\Controller\GadgetEditController;
use Keosu\CoreBundle\Util\TemplateUtil;
use Keosu\CoreBundle\Entity\Gadget;

use Keosu\Gadget\ArticleGadgetBundle\ArticleGadget;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Specific gadget controller 
 * extends Keosu\CoreBundle\Controller\GadgetEditController
 * implements 
 * @author vleborgne
 *
 */
class EditController extends GadgetEditController implements iGadgetController {

	
	public function getGadgetClass(){
		return "Keosu\Gadget\MyAccountGadgetBundle\MyAccountGadget";
	}
	
	//Specific form for articleGadget
	public function buildGadgetForm($formBuilder, $gadgetName) {
		$articles = $this->get('doctrine')->getManager()
				->getRepository(
						'KeosuDataModelArticleModelBundle:ArticleBody')
				->findAll();
		$articleList = Array();
		foreach ($articles as $article) {
			$articleList[$article->getId()] = $article->getTitle();
		}
		$formBuilder
				->add('gadgetTemplate', 'choice',
						array(
								'choices' => TemplateUtil::getTemplateGadgetList(
										$gadgetName), 'required' => true, 'expanded'=>true))
				->add('shared', 'checkbox', array(
						'label'     => 'Shared with all pages',
						'required'  => false,))
		;
	}

}
