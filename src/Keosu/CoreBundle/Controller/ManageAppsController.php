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
use Keosu\CoreBundle\Entity\ConfigParameters;

use Keosu\CoreBundle\Form\ConfigPackageType;
use Keosu\CoreBundle\Form\IconsType;
use Keosu\CoreBundle\Form\PreferenceType;
use Keosu\CoreBundle\Form\SplashscreensType;

use Keosu\CoreBundle\Util\FilesUtil;
use Keosu\CoreBundle\Util\TemplateUtil;
use Keosu\CoreBundle\Util\ThemeUtil;

use Keosu\CoreBundle\Service\Exporter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

class ManageAppsController extends Controller {

	public function viewAction() {
		$em = $this->get('doctrine')->getManager();
		$apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
		return $this->render('KeosuCoreBundle:App:manage.html.twig',array(
						'apps' => $apps
		));
	}

	public function addAction() {
		$app = new App();
		//Copy default splashscreens and icons in a temp repertory
		FilesUtil::copyFolder(ExporterUtil::getImageDir('keosu'), ExporterUtil::getImageDir('tmp'));
		return $this->editApp($app);
	}

	public function editAction($id) {
		$em = $this->get('doctrine')->getManager();
		$app = $em->getRepository('KeosuCoreBundle:App')->find($id);
		if(!is_dir(Exporter::getImageDir($app->getId()))) {
			//Copy default splashscreens and icons in a temp repertory
			FilesUtil::copyFolder(Exporter::getImageDir('keosu'), Exporter::getImageDir('tmp'));
		} else {
			//Copy older splashscreens and icons in a temp repertory
			FilesUtil::copyFolder(Exporter::getImageDir($app->getId()), Exporter::getImageDir('tmp'));
		}
		return $this->editApp($app);
	}

	/**
	 * Shared function to edit/add an app
	 */
	private function editApp(App $app) {
		$em = $this->get('doctrine')->getManager();
		$request = $this->get('request');
		$packageManager = $this->get('keosu_core.packagemanager');

		$apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
		//Find existing app to know if it's the first one
		$isFirstApp = ($apps===null);

		//page edit form
		$formBuilder = $this->createFormBuilder($app,array(
													'label' => 'Edit App'
							));
		$this->buildAppForm($formBuilder);
		$form = $formBuilder->getForm();
		
		//If we are in POST method, form is submit
		if ($request->getMethod() == 'POST') {

			$form->bind($request);
			if ($form->isValid()) {
				// TODO event

				$em->persist($app);
				$em->flush();
				$em->refresh($app);
				
				// TODO event
				$em->flush();

				$session = $this->get("session");
				$session->set("appid",$app->getId());

				//Copy splashscreens and icons
				FilesUtil::copyFolder(Exporter::getImageDir('tmp'), Exporter::getImageDir($app->getId()));

				// export the app
				$this->container->get('keosu_core.exporter')->exportApp();

				return $this->redirect(
							$this->generateUrl('keosu_core_app_manage')
						);
			}
		}

		// find package witch need to be configured
		$listPackage = $packageManager->getPackageList();
		$packageToConfigure = array();
		foreach($listPackage as $p) {
			$config = $packageManager->getConfigPackage($p->getPath());
			if(isset($config['appParam']) && count($config['appParam']))
				$packageToConfigure[] = $config;
		}

		return $this->render('KeosuCoreBundle:App:edit.html.twig',array(
							'form'               => $form->createView(),
							'firstApp'           => $isFirstApp,
							'themeDir'           => ThemeUtil::getThemeDir(),
							'packageToConfigure' => $packageToConfigure
						));
	}

	/**
	 * Edit App form
	 */
	private function buildAppForm($formBuilder) {
		$formBuilder->add('name', 'text')
					->add('packageName','text')
					->add('description','textarea')
					->add('author','text',array(
							'required' => false
					))
					->add('website','url',array(
							'required' => false
					))
					->add('email','email',array(
							'required' => false
					))
					->add('debugMode','checkbox', array(
							'required' => false
					))
					->add('theme', 'choice', array(
							'choices'  => ThemeUtil::getThemeList(),
							'expanded' => true
					))
					->add('configPackages',new ConfigPackageType($this->container,$this->get('request')),array(
							'label' => false,
					))
					->add('splashscreens', new SplashscreensType())
					->add('icons', new IconsType())
					->add('preferences', 'collection',array(
						'type'         => new PreferenceType(),
						'required'     => false,
						'label'        => "Edit preference",
						'allow_add'    => true,
						'allow_delete' => true,
						'by_reference' => true,
						'options'      => array(
							'label'   => false,
						)));
	}

}
