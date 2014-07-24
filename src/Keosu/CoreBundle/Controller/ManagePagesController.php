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

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Entity\Page;
use Keosu\CoreBundle\Event\GadgetPageActionEvent;
use Keosu\CoreBundle\Util\TemplateUtil;
use Keosu\CoreBundle\Util\ThemeUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManagePagesController extends Controller {

	//List of available icons
	//Can be extend using http://getbootstrap.com/components/#glyphicons
	public $iconList = array(
		'glyphicon-home'=>'glyphicon-home', 
		'glyphicon-star'=>'glyphicon-star',
		'glyphicon-asterisk'=>'glyphicon-asterisk',
		'glyphicon-envelope'=>'glyphicon-envelope',
		'glyphicon-pencil'=>'glyphicon-pencil',
		'glyphicon-glass'=>'glyphicon-glass',
		'glyphicon-music'=>'glyphicon-music',
		'glyphicon-search'=>'glyphicon-search',
		'glyphicon-heart'=>'glyphicon-heart',
		'glyphicon-user'=>'glyphicon-user',
		'glyphicon-th-large'=>'glyphicon-th-large',
		'glyphicon-cog'=>'glyphicon-cog',
		'glyphicon-trash'=>'glyphicon-trash',
		'glyphicon-file'=>'glyphicon-file',
		'glyphicon-time'=>'glyphicon-time',
		'glyphicon-road'=>'glyphicon-road',
		'glyphicon-inbox'=>'glyphicon-inbox',
		'glyphicon-repeat'=>'glyphicon-repeat',
		'glyphicon-lock'=>'glyphicon-lock',
		'glyphicon-flag'=>'glyphicon-flag',
		'glyphicon-tag'=>'glyphicon-tag',
		'glyphicon-qrcode'=>'glyphicon-qrcode',
		'glyphicon-book'=>'glyphicon-book',
		'glyphicon-print'=>'glyphicon-print',
		'glyphicon-camera'=>'glyphicon-camera',
		'glyphicon-facetime-video'=>'glyphicon-facetime-video',
		'glyphicon-picture'=>'glyphicon-picture',
		'glyphicon-map-marker'=>'glyphicon-map-marker',
		'glyphicon-tint'=>'glyphicon-tint',
		'glyphicon-plus-sign'=>'glyphicon-plus-sign',
		'glyphicon-question-sign'=>'glyphicon-question-sign',
		'glyphicon-info-sign'=>'glyphicon-info-sign',
		'glyphicon-info-sign'=>'glyphicon-info-sign',
		'glyphicon-gift'=>'glyphicon-gift',
		'glyphicon-leaf'=>'glyphicon-leaf',
		'glyphicon-calendar'=>'glyphicon-calendar',
		'glyphicon-comment'=>'glyphicon-comment',
		'glyphicon-shopping-cart'=>'glyphicon-shopping-cart',
		'glyphicon-phone-alt'=>'glyphicon-phone-alrt',
	);

	/**
	 * "Manage pages" page
	 * We can set the theme in this controller and add/edit/delete new pages
	 */
	public function viewAction() {

		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		return $this->render('KeosuCoreBundle:Page:manage.html.twig',
						array('pages' => $pages));
	}
	
	/**
	 * Delete a page
	 */
	public function deleteAction($id) {
		$dispatcher = $this->get('event_dispatcher');
		$em = $this->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($id);

		foreach ($gadgets as $gadget) {
			$event = new GadgetPageActionEvent($page,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_PAGE_DELETE.$gadget->getName(),$event);
			if($event->getResponse() !== null)
				return $event->getResponse();
		}

		foreach($gadgets as $gadget)
			$em->remove($gadget);

		$em->remove($page);
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_core_views_page_manage'));
	}

	/**
	 * Add a new page
	 */
	public function addAction() {
		$page = new Page();
		$appId = $this->get('keosu_core.curapp')->getCurApp();
		$page->setAppId($appId);
		return $this->editPage($page);
	}
	
	/**
	 * Edit an existing page
	 */
	public function editAction($id) {
		$dispatcher = $this->get('event_dispatcher');
		$em = $this->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($id);
		
		foreach ($gadgets as $gadget) {
			$event = new GadgetPageActionEvent($page,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_PAGE_DELETE.$gadget->getName(),$event);
			if($event->getResponse() !== null)
				return $event->getResponse();
		}
		
		return $this->editPage($page);

	}

	
	/**
	 * Shared function to edit/add a page
	 */
	private function editPage($page) {
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		$request = $this->get('request');

		//Get Curent theme
		$theme = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		//page edit form
		$formBuilder = $this->createFormBuilder($page,array(
									'label' => 'Page edit'
					));
		$this->buildPageForm($formBuilder);
		$form = $formBuilder->getForm();
		
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				//Storing page
				$em->persist($page);
				$em->flush();
				//Export app to see new page in simulator
				// TODO
				//$this->get('keosu_core.exporter')->exportApp();
				return $this->redirect(
								$this->generateUrl('keosu_core_views_page_manage'));
			}
		}
		
		return $this->render('KeosuCoreBundle:Page:edit.html.twig',array(
							'form' => $form->createView(),
							'theme'=>$theme->getTheme(),
							'templateDir'=>TemplateUtil::getPageTemplateWebPath()
						));
	}

	/**
	 * Edit page form
	 */
	private function buildPageForm($formBuilder) {
		$formBuilder
				->add('name', 'text')
				->add('icon', 'choice',array(
						'choices' => $this->iconList,
						'required' => true,
						'expanded'=>true
				))
				->add('isMain', 'checkbox', array(
						'required' => false
				))
				->add('templateId', 'choice', array(
						'choices' => TemplateUtil::getTemplateList(),
						'required'  => true, 
						'expanded'=>true
				));
	}
	
	/**
	 * Check if there is a "isMain" page in the app
	 */
	public function checkIsMainAction() {
		$appid = $this->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();
		//Count number of isMain
		$nbrIsMain = $em->getRepository('KeosuCoreBundle:Page')->countIsMainByAppId($appid);
		return $this->render('KeosuCoreBundle:Page:check.html.twig',array(
														'nbrIsMain' => $nbrIsMain
							));
	
	}
	

}
