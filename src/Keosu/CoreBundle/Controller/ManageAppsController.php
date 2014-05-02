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

use Keosu\CoreBundle\Entity\App;

use Keosu\CoreBundle\Util\ThemeUtil;

use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\CoreBundle\Entity\Page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManageAppsController extends Controller {

	/**
	 * "Manage apps" page
	 * We can set the theme in this controller and add/edit/delete new apps
	 */
	public function viewAction() {
		/**
		 * List of pages we display them in a array after
		 */
		$apps = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:App')->findAll();
	
		return $this
				->render('KeosuCoreBundle:App:manage.html.twig',
						array('apps' => $apps));
	}
	
	/**
	 * Add a new page
	 */
	public function addAction() {
		$app = new App();
		//Form and store action are shared with editAction
		return $this->editApp($app);
	}
	
	/**
	 * Edit an existing page
	 */
	public function editAction($id) {
		$repo = $this->get('doctrine')->getManager()
				->getRepository('KeosuCoreBundle:App');
		$app = $repo->find($id);
		//Form and store action are shared with editAction
		return $this->editApp($app);

	}

	
	/**
	 * Shared function to edit/add an app
	 */
	private function editApp($app) {
		//Find existing app to know if it's the first one
		$apps = $this->get('doctrine')->getManager()
			->getRepository('KeosuCoreBundle:App')->findAll();
		//If it's the first app we display an info panel
		$isFirstApp= ($apps==null);
		
		//page edit form
		$formBuilder = $this
				->createFormBuilder($app,
						array('label' => 'Edit App'));
		$this->buildAppForm($formBuilder);
		$form = $formBuilder->getForm();
		$request = $this->get('request');
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				//Storing page
				$em = $this->get('doctrine')->getManager();
				$em->persist($app);
				$em->flush();
				$session = $this->get("session");
				$session->set("appid",$app->getId());
				return $this
						->redirect(
								$this
										->generateUrl(
												'keosu_core_app_manage'));
			}
		}
		return $this
				->render('KeosuCoreBundle:App:edit.html.twig',
						array('form' => $form->createView(), 'firstApp'=>$isFirstApp));
	}

	/**
	 * Edit App form
	 */
	private function buildAppForm($formBuilder) {
		$formBuilder->add('name', 'text')
				->add('theme', 'choice',
						array('choices' => ThemeUtil::getThemeList(),
								'required' => true,));
	}

}
