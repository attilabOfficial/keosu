<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

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

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Entity\Gadget;

use Keosu\CoreBundle\Event\FormEvent;
use Keosu\CoreBundle\Event\GadgetActionEvent;
use Keosu\CoreBundle\Event\GadgetSaveConfigEvent;

use Keosu\CoreBundle\Form\ConfigGadgetType;

use Keosu\CoreBundle\Service\PackageManager;

use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Controller that allow to add, edit and delete a gadget
 */
class ManageGadgetsController extends Controller {

	/**
	 * Display a page in studio and allow to add/edit gadget
	 * @param $id id of the page to display
	 */
	public function viewAction($id) {
		//Curent app id
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();

		//Get the page we want to edit
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		
		//Page Template content as String
		$templateHtml = 
				file_get_contents(
					TemplateUtil::getPageTemplateAbsolutePath()
						. $page->getTemplateId());
		//Get all the elements of class "zone" in template dom
		$crawler = new Crawler($templateHtml);
		$zones = $crawler->filter('.zone')->extract(array('id'));
		
		//Initiate an Array to store all zone in page
		$zoneModelList = array();
		
		foreach ($zones as $zone) {
			//Look if there is a shared gadget in this zone
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zone,$appid);
			//If there is no share gadget we try to find the specific one
			if($gadget == null){
				//Find the gadget associated with page and zone
				$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array('zone' => $zone, 'page' => $id));
			}

			$zoneModel = array();
			$zoneModel['gadget'] = $gadget;
			$zoneModel['zoneId'] = $zone;
			$zoneModelList[] = $zoneModel;
		}

		$gadgetList = array();
		$packageList = $this->get('keosu_core.package_manager')->getPackageList(PackageManager::TYPE_PACKAGE_GADGET);
		foreach($packageList as $p)
			$gadgetList[] = $p->getName();

		return $this->render('KeosuCoreBundle:Page:studio.html.twig', array(
								'page'         => $page,
								'zones'        => $zoneModelList,
								'templatehtml' => $templateHtml,
								'gadgets'      => $gadgetList));
	}

	/**
	 * Add a new Gadget in a zone
	 * @param $pageId where we want to add the gadget
	 * @param $zoneName where we want to add the gadget
	 * @param $gadgetName name of the gadget
	 */
	public function addAction($pageId, $zoneName, $gadgetName, Request $request) {

		$em = $this->get('doctrine')->getManager();
		$dispatch = $this->get('event_dispatcher');

		// search if there is allready a gadget
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
																				'zone' => $zoneName,
																				'page' => $pageId
																			));

		if($gadget == null) {
			$gadget = new Gadget();
			$page = $em->getRepository('KeosuCoreBundle:Page')->find($pageId);
			$gadget->setPage($page);
			$gadget->setZone($zoneName);
		}
		
		if(!$this->get('keosu_core.package_manager')->isGadgetExist($gadgetName))
			throw new \LogicException("Gadget : ".$gadgetName." Not Found");
			
		$gadget->setConfig(array());
		
		// old gadget
		if($gadget->getName() !== null) {
			$event = new GadgetActionEvent($pageId,$zoneName,$gadget);
			$dispatch->dispatch(KeosuEvents::GADGET_ADD_OLD.$gadget->getName(),$event);
		
			if($event->getResponse() !== null)
				return $event->getResponse();
		}
		
		$gadget->setName($gadgetName);
		
		// add a new
		$event = new GadgetActionEvent($pageId,$zoneName,$gadget);
		$dispatch->dispatch(KeosuEvents::GADGET_ADD.$gadget->getName(),$event);
		
		if($event->getResponse() !== null)
			return $event->getResponse();
		
		return $this->formGadget($gadget, $request);
	}

	/**
	 * Edit an existing gadget
	 * @param $pageId id of the page
	 * @param $zoneName name of the zone
	 */
	public function editAction($pageId, $zoneName, Request $request) {
	
		$appId = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		$dispatch = $this->get('event_dispatcher');
		
		//Look if there is a shared gadget in this zone
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zoneName,$appId);
		//If there is no share gadget we try to find the specific one
		if($gadget == null){
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
				'zone' => $zoneName,
				'page' => $pageId
			));
		}
		
		$event = new GadgetActionEvent($pageId,$zoneName,$gadget);
		$dispatch->dispatch(KeosuEvents::GADGET_EDIT.$gadget->getName(),$event);
		
		if($event->getResponse() !== null)
			return $event->getResponse();
		
		return $this->formGadget($gadget, $request);
	}

	/**
	 * Clean a zone and delete all the gadgets inside
	 * @param  $pageId where we want to delete the gadget
	 * @param $zoneName where we want to delete the gadget
	 */
	public function deleteAction($pageId, $zoneName) {
		$appId = $this->get('keosu_core.curapp')->getCurApp();
		$dispatch = $this->get('event_dispatcher');
		$em = $this->get('doctrine')->getManager();

		//Look if there is a shared gadget in this zone
		$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findSharedByZoneAndApp($zoneName,$appId);
		//If there is no share gadget we try to find the specific one
		if($gadget == null){
			$gadget = $em->getRepository('KeosuCoreBundle:Gadget')->findOneBy(array(
																			'zone' => $zoneName,
																			'page' => $pageId
																			));
		}
		
		if($gadget !== null) {
			$event = new GadgetActionEvent($pageId,$zoneName,$gadget);
			$dispatch->dispatch(KeosuEvents::GADGET_DELETE.$gadget->getName(),$event);
			
			if($event->getResponse() !== null)
				return $event->getResponse();

			// Delete the gadget
			$em->remove($gadget);
			$em->flush();
		}
		//Export app
		$this->get('keosu_core.exporter')->exportApp();

		//Redirect to the last page
		return $this->redirect(
						$this->generateUrl('keosu_core_views_page',array(
												'id' => $pageId))
							);
	}

	/**
	 * Create the form to edit/add the gadget
	 */
	private function formGadget($gadget, Request $request) {
		
		$em = $this->get('doctrine')->getManager();
		$dispatcher = $this->get('event_dispatcher');

		$appId = $this->get('keosu_core.curapp')->getCurApp();

		$theme = $em->getRepository('KeosuCoreBundle:App')->find($appId)->getTheme();

		$formBuilder = $this->createFormBuilder($gadget);

		$listTemplate = $this->get('keosu_core.package_manager')->getListTemplateForGadget($gadget->getName(),$theme);
		if(count($listTemplate) > 1){
			$formBuilder->add('template', ChoiceType::class ,array(
					'choices'  => $listTemplate,
					'required' => true,
					'expanded' => true));
		}else{
			$formBuilder->add('template', TextType::class, array(
					'label' => false,
					'data' => PackageManager::DEFAULT_TEMPLATE_GADGET_NAME,
					'attr'=>array('style'=>'display:none;')));
		}
	
		$formBuilder->add('shared', CheckboxType::class, array(
				'label'    => 'Shared with all pages',
				'required' => false))
		->add('config',ConfigGadgetType::class, array('gadget'=>$gadget, 'request'=>$request, 'dispatcher'=> $this->get('event_dispatcher'), 'package_manager'=>$this->container->get('keosu_core.package_manager')));
					
		$form = $formBuilder->getForm();

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

			$event = new GadgetSaveConfigEvent($form,$request,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_CONF_SAV.$gadget->getName(),$event);

			if($event->getResponse() !== null) {
				return $event->getResponse();
			}

			$em->persist($gadget);
			$em->flush();

			$this->get('keosu_core.exporter')->exportApp();

			return $this->redirect($this->generateUrl('keosu_core_views_page',array(
												'id' => $gadget->getPage()->getId()
												)));
		}

		
		$event = new FormEvent($form,$request);
		$dispatcher->dispatch(KeosuEvents::GADGET_CONF_VIEW.$gadget->getName(),$event);
		
		if($event->getResponse() !== null)
			return $event->getResponse();
		
		return $this->render('KeosuCoreBundle:Page:editGadget.html.twig', array(
								'form'      => $form->createView(),
								'gadgetDir' => TemplateUtil::getTemplateGadgetDir(),
								'gadgetName' => $gadget->getName(),
							));
	}

}
