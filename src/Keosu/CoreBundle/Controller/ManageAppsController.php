<?php
/************************************************************************
 * Keosu is an open source CMS for mobile app
 * Copyright (C) 2016  Pockeit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
namespace Keosu\CoreBundle\Controller;

use keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Entity\App;

use Keosu\CoreBundle\Event\PackageSaveAppEvent;

use Keosu\CoreBundle\Form\ConfigPackageType;
use Keosu\CoreBundle\Form\IconsType;
use Keosu\CoreBundle\Form\PreferenceType;
use Keosu\CoreBundle\Form\SplashscreensType;

use Keosu\CoreBundle\Util\FilesUtil;
use Keosu\CoreBundle\Util\ThemeUtil;

use Keosu\CoreBundle\Service\Exporter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\HttpFoundation\Request;

class ManageAppsController extends Controller
{

    public function viewAction()
    {
        $em = $this->get('doctrine')->getManager();
        $apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
        return $this->render('KeosuCoreBundle:App:manage.html.twig', array(
            'apps' => $apps
        ));
    }

    public function addAction(Request $request)
    {
        $app = new App();
        //Copy default splashscreens and icons in a temp repertory
        FilesUtil::copyFolder(Exporter::getImageDir('keosu'), Exporter::getImageDir('tmp'));
        return $this->editApp($app, $request);
    }

    public function editAction($id, Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $app = $em->getRepository('KeosuCoreBundle:App')->find($id);
        if (!is_dir(Exporter::getImageDir($app->getId()))) {
            //Copy default splashscreens and icons in a temp repertory
            FilesUtil::copyFolder(Exporter::getImageDir('keosu'), Exporter::getImageDir('tmp'));
        } else {
            //Copy older splashscreens and icons in a temp repertory
            FilesUtil::copyFolder(Exporter::getImageDir($app->getId()), Exporter::getImageDir('tmp'));
        }
        return $this->editApp($app, $request);
    }

    /**
     * Shared function to edit/add an app
     */
    private function editApp(App $app, Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $packageManager = $this->get('keosu_core.package_manager');

        $apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
        //Find existing app to know if it's the first one
        $isFirstApp = ($apps === null);

        // find package witch need to be configured
        $listPackage = $packageManager->getPackageList();
        $packageToConfigure = array();
        foreach ($listPackage as $p) {
            $config = $packageManager->getConfigPackage($p->getPath());
            if (isset($config['appParam']) && count($config['appParam']))
                $packageToConfigure[] = $config;
        }

        //page edit form
        $formBuilder = $this->createFormBuilder($app, array('label' => 'Edit App'));
        $this->buildAppForm($formBuilder, $request);
        $form = $formBuilder->getForm();

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em->persist($app);
			$em->flush();
			$em->refresh($app);
			$session = $this->get("session");
			$session->set("appid", $app->getId());

			$dispatcher = $this->get('event_dispatcher');
			$event = new PackageSaveAppEvent($form, $request, $app);
			foreach ($listPackage as $p) {
				$dispatcher->dispatch(KeosuEvents::PACKAGE_GLOBAL_CONFIG_SAV_FORM . $p->getName(), $event);
			}

			// Persist event modification
			$em->persist($app);
			$em->flush();

			//Copy splashscreens and icons
			FilesUtil::copyFolder(Exporter::getImageDir('tmp'), Exporter::getImageDir($app->getId()));

			// export the app
			$this->container->get('keosu_core.exporter')->exportApp();

			if ($event->getResponse() !== null)
				return $event->getResponse();

			return $this->redirect(
				$this->generateUrl('keosu_core_app_manage')
			);
		}


        return $this->render('KeosuCoreBundle:App:edit.html.twig', array(
            'form' => $form->createView(),
            'firstApp' => $isFirstApp,
            'themeDir' => ThemeUtil::getThemeDir(),
            'packageToConfigure' => $packageToConfigure
        ));
    }

    /**
     * Edit App form
     */
    private function buildAppForm($formBuilder, $request)
    {
        $formBuilder->add('name')
            ->add('packageName')
            ->add('version')
            ->add('description', TextareaType::class)
            ->add('author', TextType::class, array(
                'required' => false
            ))
            ->add('website', UrlType::class, array(
                'required' => false
            ))
            ->add('email', EmailType::class, array(
                'required' => false
            ))
            ->add('debugMode', CheckboxType::class, array(
                'required' => false
            ))
            ->add('theme', ChoiceType::class, array(
                'choices' => ThemeUtil::getThemeList(),
                'expanded' => true,
            ))
            ->add('configPackages', ConfigPackageType::class, array(
                'label' => false,
				'container' => $this->container,
				'request' => $request
            ))
            ->add('splashscreens', SplashscreensType::class)
            ->add('icons', IconsType::class)
            ->add('preferences', CollectionType::class, array(
                'entry_type' => PreferenceType::class,
                'required' => false,
                'label' => "Edit preference",
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => true,
                'label' => false,
                ));
    }

}
