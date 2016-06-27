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
use Keosu\CoreBundle\Entity\Page;
use Keosu\CoreBundle\Event\GadgetPageActionEvent;
use Keosu\CoreBundle\Util\ThemeUtil;
use Keosu\CoreBundle\Util\TemplateUtil;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ManagePagesController extends Controller {

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
	 * Add a new page
	 */
	public function addAction(Request $request) {
		$page = new Page();
		$appId = $this->get('keosu_core.curapp')->getCurApp();
		$page->setAppId($appId);
		return $this->editPage($page, $request);
	}

	/**
	 * Edit an existing page
	 */
	public function editAction($id, Request $request) {
		$dispatcher = $this->get('event_dispatcher');
		$em = $this->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($id);

		foreach ($gadgets as $gadget) {
			$event = new GadgetPageActionEvent($page,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_PAGE_EDIT.$gadget->getName(),$event);
			if($event->getResponse() !== null)
				return $event->getResponse();
		}

		return $this->editPage($page, $request);
	}

	/**
	 * Delete a page
	 */
	public function deleteAction($id) {
		$dispatcher = $this->get('event_dispatcher');
		$em = $this->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($id);
		$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($id);

		//Dispatch event to gadget in page
		foreach ($gadgets as $gadget) {
			$event = new GadgetPageActionEvent($page,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_PAGE_DELETE.$gadget->getName(),$event);
			if($event->getResponse() !== null)
				return $event->getResponse();
		}
		//Dispatch event to all the gadget in app
		$appPages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($page->getAppId());
		foreach ($appPages as $appPage) {
			$appGadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($appPage->getId());
			foreach ($appGadgets as $appGadget) {
				$event = new GadgetPageActionEvent($page,$appGadget);
				$dispatcher->dispatch(KeosuEvents::APPGADGET_PAGE_DELETE.$appGadget->getName(),$event);
				if($event->getResponse() !== null)
					return $event->getResponse();
			}

		}

		foreach($gadgets as $gadget)
			$em->remove($gadget);

		$em->remove($page);
		$em->flush();

		return $this->redirect($this->generateUrl('keosu_core_views_page_manage'));
	}

	/**
	 * Shared function to edit/add a page
	 */
	private function editPage($page, $request) {
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->get('doctrine')->getManager();

		//Get Curent theme
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		//page edit form
		$formBuilder = $this->createFormBuilder($page, array(
			'label' => 'Page edit'
		));
		$this->buildPageForm($formBuilder);
		$form = $formBuilder->getForm();

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			//Storing page
			$em->persist($page);
			$em->flush();
			//Export app to see new page in simulator
			$this->get('keosu_core.exporter')->exportApp();
			return $this->redirect(
				$this->generateUrl('keosu_core_views_page_manage'));
		}


		return $this->render('KeosuCoreBundle:Page:edit.html.twig',array(
			'form' => $form->createView(),
			'theme'=>$app->getTheme(),
			'templateDir'=>TemplateUtil::getPageTemplateWebPath()
		));
	}

	/**
	 * Edit page form
	 */
	private function buildPageForm($formBuilder) {
        $appId = $this->container->get('keosu_core.curapp')->getCurApp();
        $em = $this->get('doctrine')->getManager();
        $app = $em->getRepository('KeosuCoreBundle:App')->find($appId);

		$formBuilder
			->add('name', TextType::class)
			->add('isMain', CheckboxType::class, array(
				'required' => false
			))
			->add('templateId', ChoiceType::class, array(
				'choices' => TemplateUtil::getTemplateList(),
				'required'  => true,
				'expanded'=> true
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
