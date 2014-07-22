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
use Keosu\CoreBundle\Util\StringUtil;

use Keosu\Gadget\MenuGadgetBundle\Form\MenuPageType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

/**
 * Controller that allow to add, edit and delete a gadget
 */
class ManageGadgetsController extends Controller {

	/**
	 * Clean a zone and delete all the gadgets inside
	 * @param  $page where we want to delete the gadget
	 * @param $zone where we want to delete the gadget
	 */
	public function deleteAction($pageId, $zoneId) {
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();

		//Look if there is a shared gadget in this zone
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zone,$appid);
		//If there is no share gadget we try to find the specific one
		if($gadget == null){
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
																			'zone' => $zone,
																			'page' => $page
																			));
		}
		
		// TODO event

		//Delete the gadget
		if($gadget !== null) {
			$em->remove($gadget);
			$em->flush();
		}

		//Export app
		// TODO $this->container->get('keosu_core.exporter')->exportApp();

		//Redirect to the last page
		return $this->redirect(
						$this->generateUrl('keosu_core_views_page',array(
												'id' => $page))
							);
	}
	/**
	 * Ading a new Gadget in a zone
	 * @param $page where we want to add the gadget
	 * @param $zone where we want to add the gadget
	 * @param $gadget name of the gadget
	 */
	public function addAction($pageId, $zoneId, $gadgetName) {

		$em = $this->get('doctrine')->getManager();

		// search if there is allready a gadget
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
																				'zone' => $zoneId,
																				'page' => $pageId
																			));

		if($gadget == null) {
			$gadget = new Gadget();
			$page = $em->getRepository('KeosuCoreBundle:Page')->find($pageId);
			$gadget->setPage($page);
			$gadget->setZone($zone);
		}
		
		if(!$this->get('keosu_core.packagemanager')->isGadgetExist($gadgetName))
			throw new \LogicException("Gadget : ".$gadgetName." Not Found");
		
		$gadget->setName($gadgetName);
		
		// TODO event
		
		return $this->formGadget($gadget);
	}

	/**
	 * Edit an existing gadget
	 * Same process as Add
	 */
	public function editAction($pageId, $zoneId) {
	
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		
		//Look if there is a shared gadget in this zone
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zoneId,$appId);
		//If there is no share gadget we try to find the specific one
		if($gadget == null){
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
				'zone' => $zoneId,
				'page' => $pageId
			));
		}
		
		// TODO event
		
		return $this->formGadget($gadget);
	}

	/**
	 * Create the form to edit/add the gadget
	 */
	private function formGadget($gadget) {

		$em = $this->get('doctrine')->getManager();
		$request = $this->get('request');

		$formBuilder = $this->createFormBuilder($gadget);

		$formBuilder->add('template', 'choice',array(
							'choices'  => $this->get('keosu_core.packagemanager')->getListTemplateForGadget($gadget->getName()),
							'required' => true,
							'expanded' => true))
					->add('shared', 'checkbox', array(
							'label'    => 'Shared with all pages',
							'required' => false));

		// TODO event

		//Build gadget form is defined in child class (the specific controller one)
		//$this->buildGadgetForm($formBuilder);
		$form = $formBuilder->getForm();

		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {

				// TODO event

				$em->persist($gadget);
				$em->flush();
				//TODO
				//$this->container->get('keosu_core.exporter')->exportApp();

				return $this->redirect($this->generateUrl('keosu_core_views_page',array(
													'id' => $gadget->getPage()->getId())
									));
			}
		}
		
		// TODO event
		
		
		return $this->render('KeosuCoreBundle:Page:editGadget.html.twig', array(
								'form'      => $form->createView(),
								'gadgetDir' => $this->get('keosu_core.packagemanager')->getListTemplateForGadget($gadget->getName())
							));
	}

	//Specific form for the gadget
	/* For menu gadget
	public function buildGadgetForm($formBuilder) {
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();

		$em = $this->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$pageList = array();
		$value = array();
		foreach ($pages as $page) {
			$value['id'] = $page->getId();
			$value['icon'] = $page->getIcon();
			$pageList[\json_encode($value)] = $page->getName();
		}

		$formBuilder->add('config', 'collection',array(
						'type'         => 'choice',
						'required'     => false,
						'label'        => true,
						'allow_add'    => true,
						'allow_delete' => true,
						'by_reference' => true,
						'options'      => array(
							'choices' => $pageList,
							'label'   => false
						)
				));
	}*/

}
