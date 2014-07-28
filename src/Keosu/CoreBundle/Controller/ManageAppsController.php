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
use Keosu\CoreBundle\Entity\Page;
use Keosu\CoreBundle\Entity\Gadget;

use Keosu\CoreBundle\Util\ThemeUtil;
use Keosu\CoreBundle\Util\TemplateUtil;

use Keosu\Gadget\AuthenticationGadgetBundle\AuthenticationGadget;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Keosu\CoreBundle\Form\ConfigParametersType;
use Keosu\CoreBundle\Form\SplashscreensType;
use Keosu\CoreBundle\Form\IconsType;
use Keosu\CoreBundle\Util\FilesUtil;
use Keosu\CoreBundle\Util\ExporterUtil;

class ManageAppsController extends Controller implements MenuProviderController{

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
		
		//Copy default splashscreens and icons in a temp repertory
		FilesUtil::copyFolder(ExporterUtil::getSplashsIconesDir("keosu"), ExporterUtil::getSplashsIconesDir("tmp"));
		
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
		
		
		if(!is_dir(ExporterUtil::getSplashsIconesDir($app->getId()))) {
			//Copy default splashscreens and icons in a temp repertory
			FilesUtil::copyFolder(ExporterUtil::getSplashsIconesDir("keosu"), ExporterUtil::getSplashsIconesDir("tmp"));
	
		}else{
			//Copy older splashscreens and icons in a temp repertory
			FilesUtil::copyFolder(ExporterUtil::getSplashsIconesDir($app->getId()), ExporterUtil::getSplashsIconesDir("tmp"));
		}

		
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
		$isFirstApp = ($apps==null);
		
		//page edit form
		$formBuilder = $this->createFormBuilder($app,array(
													'label' => 'Edit App'
							));
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
				$em->refresh($app);

				// if the app is private we have to add an authentication page
				$authenticationPage = $em->getRepository('KeosuCoreBundle:Page')->findOneBy(array(
					'appId'     => $app->getId(),
					'templateId'=> TemplateUtil::getAuthenticationTemplateId(),
					'name'      => TemplateUtil::getAuthenticationPageName()));
				
				if($authenticationPage == null && $app->isPrivate()) {
						// remove other main
						$pagesMain = $em->getRepository('KeosuCoreBundle:Page')->findBy(array(
								'appId'  => $app->getId(),
								'isMain' => true));
						foreach($pagesMain as $pageMain) {
							$pageMain->setIsMain(false);
							$em->persist($pageMain);
						}
					
						$page = new Page();
						$page->setIcon('glyphicon-lock');
						$page->setTemplateId(TemplateUtil::getAuthenticationTemplateId());
						$page->setName(TemplateUtil::getAuthenticationPageName());
						$page->setAppId($app->getId());
						
						// the authentication become main
						$page->setIsMain(true);
						$em->persist($page);
						
						$gadgetAuthentication = new AuthenticationGadget();
						$gadget = new Gadget();
						$gadgetAuthentication->convertAsExistingCommonGadget($gadget);
						$gadget->setStatic(false);
						$gadget->setShared(false);
						$listTemplate = TemplateUtil::getTemplateGadgetList($gadgetAuthentication->getGadgetName());
						$keys = array_keys($listTemplate);
						$gadget->setGadgetTemplate($listTemplate[$keys[0]]); // 0 by default
						$gadget->setPage($page);
						
						// there is only one zone on this template
						$templateHtml = 
								file_get_contents(
									TemplateUtil::getPageTemplateAbsolutePath()
										. TemplateUtil::getAuthenticationTemplateId());
						//Get all the elements of class "zone" in template dom
						$crawler = new Crawler($templateHtml);
						$zones = $crawler->filter('.zone')->extract(array('id'));
						$gadget->setZone($zones[0]);

						$em->persist($gadget);
				} else {

					if(!$app->isPrivate() && $authenticationPage != null) {
						$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($authenticationPage->getId());
						//First delete manually all its gadget
						foreach ($gadgets as $gadget) {
							$em->remove($gadget);
						}
						$em->remove($authenticationPage);
					}
				}
				$em->flush();

				//Clean session
				$session = $this->get("session");
				$session->set("appid",$app->getId());
				$session->set('curapp_name', null);
				$session->set('applist', null);
				$session->set('pages', null);
				

				//Copy splashscreens and icons
				FilesUtil::copyFolder(ExporterUtil::getSplashsIconesDir("tmp"), ExporterUtil::getSplashsIconesDir($app->getId()));

				
				// export the app
				$this->container->get('keosu_core.exporter')->exportApp();

				return $this->redirect(
							$this->generateUrl('keosu_core_app_manage')
						);
			}
		}
		return $this->render('KeosuCoreBundle:App:edit.html.twig',array(
							'form' => $form->createView(),
							'firstApp'=>$isFirstApp,
							'themeDir'=>ThemeUtil::getThemeDir()
						));
	}

	/**
	 * Edit App form
	 */
	// TODO remove default value
	private function buildAppForm($formBuilder) {
		$formBuilder->add('name', 'text',array(
							'label' => false
				))
				->add('packageName','text',array( 
						'required' => true,
						'label' => false
				))
				->add('description','textarea',array(
						'required' => true,
						'label' => false
				))
				->add('author','text',array(
						'required' => false,
						'label' => false
				))
				->add('website','url',array(
						'required' => false,
						'label' => false
				))
				->add('email','email',array(
						'required' => false,
						'label' => false
				))
				->add('facebookAppId','text',array(
						'required' => false,
						'label' => false
				))
				->add('facebookAppName','text',array(
						'required' => false,
						'label' => false
				))
				->add('facebookAppSecret','text',array(
						'required' => false,
						'label' => false
				))
				->add('privateApp','checkbox', array(
						'required' => false,
						'label' => false
				))
				->add('debugMode','checkbox', array(
						'required' => false,
						'label' => false
				))
				->add('theme', 'choice', array(
						'choices'  => ThemeUtil::getThemeList(),
						'required' => true,
						'expanded' => true,
						'label' => false
				))
				->add('splashscreens', new SplashscreensType())
				->add('configParam', new ConfigParametersType())
				->add('icons', new IconsType());
	}

}
