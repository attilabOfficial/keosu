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

use Keosu\CoreBundle\Util\ThemeUtil;

use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\CoreBundle\Entity\Page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManagePagesController extends Controller {

	/**
	 * "Manage pages" page
	 * We can set the theme in this controller and add/edit/delete new pages
	 */
	public function viewAction() {
		/**
		 * List of pages for an app we display them in a array after
		 */
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		$contents = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);
		return $this
				->render('KeosuCoreBundle:Page:manage.html.twig',
						array('contents' => $contents));
	}
	
	/**
	 * Delete a page
	 */
	public function deleteAction($id) {
		$gadgetRepo = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:Gadget');
		$gadgets = $gadgetRepo->findByPage($id);
		//First delete manually all its gagdegt
		foreach ($gadgets as $gadget) {
			$this->get('doctrine')->getManager()->remove($gadget);
		}
		$repo = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page');
		//Delete the page
		$page = $repo->find($id);
		$this->get('doctrine')->getManager()->remove($page);
		$this->get('doctrine')->getManager()->flush();
		return $this
				->redirect(
						$this
								->generateUrl(
										'keosu_core_views_page_manage'));
	}

	/**
	 * Add a new page
	 */
	public function addAction() {
		$page = new Page();
		
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		
		$page->setAppId($appid);
		//Form and store action are shared with editAction
		return $this->editPage($page);
	}
	
	/**
	 * Edit an existing page
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:Page');
		$page = $repo->find($id);
		//Form and store action are shared with editAction
		return $this->editPage($page);

	}

	
	/**
	 * Shared function to edit/add a page
	 */
	private function editPage($page) {
		//Curent theme
		//Curent app id
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		//Get Curent theme
		$repo = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:App');
		$theme = $repo->find($appid);
		//page edit form
		$formBuilder = $this
				->createFormBuilder($page,
						array('label' => 'Page edit'));
		$this->buildPageForm($formBuilder,$theme->getTheme());
		$form = $formBuilder->getForm();
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				//Storing page
				$em = $this->get('doctrine')->getManager();
				$em->persist($page);
				$em->flush();
				//Export app to see new page in simulator
				$baseurl = $this->container->getParameter('url_base');
				$param = $this->container->getParameter('url_param');
				$appid = $this->container->get('keosu_core.curapp')
					->getCurApp($this->get('doctrine')->getManager(),
						$this->get("session"));
				$exporter = $this->container->get('keosu_core.exporter');
				$exporter
						->exportApp($this->get('doctrine')->getManager(),
								$baseurl, $param, $appid);
				return $this
						->redirect(
								$this
										->generateUrl(
												'keosu_core_views_page_manage'));
			}
		}
		
		return $this
				->render('KeosuCoreBundle:Page:edit.html.twig',
						array('form' => $form->createView(),
							'theme'=>$theme->getTheme(),
							'templateDir'=>ThemeUtil::getCurThemeDir($theme->getTheme())
						));
	}

	/**
	 * Edit page form
	 */
	private function buildPageForm($formBuilder,$themeValue) {
		$formBuilder->add('name', 'text')
				->add('isMain', 'checkbox', array('required' => false)) //Main is index page
				->add('templateId', 'choice',
						array('choices' => ThemeUtil::getTemplateList($themeValue),
								'required'  => true, 'expanded'=>true ));
	}
	
	/**
	 * Check if there is a "isMain" page in the app
	 */
	public function checkIsMainAction() {
		$appid = $this->container->get('keosu_core.curapp')
			->getCurApp($this->get('doctrine')->getManager(),
				$this->get("session"));
		//Count number of isMain
		$nbrIsMain = $this->get('doctrine')->getManager()->getRepository('KeosuCoreBundle:Page')
											->countIsMainByAppId($appid);
		return $this
			->render('KeosuCoreBundle:Page:check.html.twig',
				array('nbrIsMain' => $nbrIsMain));
	
	}
	

}
