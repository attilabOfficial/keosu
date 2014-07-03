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
namespace Keosu\CoreBundle\Controller;

use Keosu\CoreBundle\Entity\Gadget;

use Keosu\CoreBundle\Entity\Page;

use Keosu\CoreBundle\Util\TemplateUtil;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Common class for editing gadget
 * This class will be wall by specific gadget controller
 * @author vleborgne
 *
 */
class GadgetEditController extends Controller {
	/**
	 * Clean a zone and delete all the gadgets inside
	 * @param  $page where we want to delete the gadget
	 * @param $zone where we want to delete the gadget
	 */
	public function deleteAction($page, $zone) {
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		
		$pageObject = $em->getRepository('KeosuCoreBundle:Page')->find($page);
		
		// We don't allow to delete authenticationGadget on private app
		if($pageObject->getTemplateId() != TemplateUtil::getAuthenticationTemplateId() &&
				$pageObject->getName() != TemplateUtil::getAuthenticationPageName()) {
			//Look if there is a shared gadget in this zone
			$commonGadget=$em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zone,$appid);
			//If there is no share gadget we try to find the specific one
			if($commonGadget == null){
				$commonGadget = $em->getRepository('KeosuCoreBundle:Gadget')
					->findOneBy(array('zone' => $zone, 'page' => $page));
			}
			//Delete the gadget
			$em->remove($commonGadget);
			$em->flush();
		
			//Export app
			$this->container->get('keosu_core.exporter')->exportApp();
		}
		
		//Redirect to the last page
		return $this->redirect(
						$this->generateUrl('keosu_core_views_page',array(
												'id' => $page))
							);
	}
	/**
	 * Ading a new Gadget in a zone
	 * @param  $page where we want to add the gadget
	 * @param $zone where we want to add the gadget
	 */
	public function addAction($page, $zone) {
	
		$em = $this->get('doctrine')->getManager();
		$pageObject = $em->getRepository('KeosuCoreBundle:Page')->find($page);
		
		// We don't allow to delete authenticationGadget on private app
		if($pageObject->getTemplateId() != TemplateUtil::getAuthenticationTemplateId() &&
				$pageObject->getName() != TemplateUtil::getAuthenticationPageName()) {
			//Call the common gadget function with gadget class in parameter
			//$this->getGadgetClass() is defined in the child object it return the full package of the gadget class
			// (for exemple Keosu\Gadget\ArticleGadgetBundle\ArticleGadget)
			$gadgetArray = $this::addGadgetCommonAction($page, $zone,
					$this->getGadgetClass());
			//Specific gadget witch is an instance of getGadgetClass
			$specificGadget = $gadgetArray['specific'];
			//Common gadget witch is an instance of Gadget Entity
			$commonGadget = $gadgetArray['common']; 
			$oldGadget = $gadgetArray['old'];
			return $this->formGadget($specificGadget, $commonGadget, $oldGadget);//Create form
		}
		
		//Redirect to the last page
		return $this->redirect(
						$this->generateUrl('keosu_core_views_page',array(
												'id' => $page))
							);

	}
	/**
	 * Adding gadget process
	 */
	private function addGadgetCommonAction($page, $zone, $gadgetClass) {
	
		$em = $this->get('doctrine')->getManager();

		$commonGadget = $em->getRepository('KeosuCoreBundle:Gadget')
			->findOneBy(array('zone' => $zone, 'page' => $page));
	
		$oldGadget = null;
		if ($commonGadget != null) {
			$oldGadget = $commonGadget;
		}
		
		//Create a instance of the common gadget class and the specific one
		$commonGadget = new Gadget();
		$gadget = new $gadgetClass();
		$commonGadget->setStatic($gadget->isStatic());
		
		//Finding curent page and zone to store it in gadget object
		$pageObject = $em->getRepository('KeosuCoreBundle:Page')->find($page);
		$gadget->setPage($pageObject);
		$gadget->setZone($zone);
	
		//Returning a array of 3 gadgets
		$gadgetArray = Array();
		$gadgetArray['specific'] = $gadget;
		$gadgetArray['common'] = $commonGadget;
		$gadgetArray['old'] = $oldGadget;
		return $gadgetArray;
	}
	/**
	 * Edit an existing gadget
	 * Same process as Add
	 */
	public function editAction($page, $zone) {
		//Call the common gadget function with gadget class in parameter
		$gadgetArray = $this::editGadgetCommonAction($page, $zone,
				$this->getGadgetClass());
		$specificGadget = $gadgetArray['specific'];
		$commonGadget = $gadgetArray['common'];
		return $this->formGadget($specificGadget, $commonGadget, null);
	}
	
	/**
	 * Editing gadget process
	 */
	private function editGadgetCommonAction($page, $zone, $gadgetClass) {
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		//Look if there is a shared gadget in this zone
		$commonGadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zone,$appid);
		//If there is no share gadget we try to find the specific one
		if($commonGadget == null){
			$commonGadget = $em->getRepository('KeosuCoreBundle:Gadget')
				->findOneBy(array('zone' => $zone, 'page' => $page));
		}
	
		//Convert the common gadget to a specific gadget object
		$gadget = $gadgetClass::constructfromGadget($commonGadget);
		$gadgetArray = Array();
		$gadgetArray['specific'] = $gadget;
		$gadgetArray['common'] = $commonGadget;
		$gadgetArray['old'] = null;
		return $gadgetArray;
	}
	
	/**
	 * Create the form to edit/add the gadget
	 */
	private function formGadget($specificGadget, $commonGadget, $oldGadget) {
		$formBuilder = $this->createFormBuilder($specificGadget);
		//Build gadget form is defined in child class (the specific controller one)
		$this->buildGadgetForm($formBuilder, $specificGadget->getChildGadgetName());
		$form = $formBuilder->getForm();
		return $this::formCommonGadget($form, $specificGadget, $commonGadget,
				$oldGadget);
	}
	/**
	 * Form submit process
	 * Store the gadget in database
	 */
	public function formCommonGadget($form, $gadget, $commonGadget, $oldGadget) {
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->get('doctrine')->getManager();
				//If there is an existing gadget in the same page/zone we delete it
				if ($oldGadget != null) {
					$em->remove($oldGadget);
				}
				
				//Store config in two times to prevent Cache error
				$gadget->convertAsExistingCommonGadget($commonGadget);  
				$config=$commonGadget->getConfig();
				$commonGadget->setConfig(null);
				$commonGadget->setStatic($gadget->isStatic());
				$em->persist($commonGadget);
				$em->flush();
				$commonGadget->setConfig($config);
				$em->persist($commonGadget);
				$em->flush();
				$idPage = $commonGadget->getPage()->getId();

				$exporter = $this->container->get('keosu_core.exporter')->exportApp();

				return $this->redirect(
							$this->generateUrl('keosu_core_views_page',
									array('id' => $idPage)
									));
			}
		}	
		return $this
				->render($this->getRenderEditTemplate(),
						array('form' => $form->createView(),
							  'gadgetDir'=>TemplateUtil::getTemplatePath($gadget->getGadgetName())));
	}
	
	/**
	 * Can be overrided
	 */
	public function getRenderEditTemplate(){
		return 'KeosuCoreBundle:Page:editGadget.html.twig';
	}

}
