<?php

namespace Keosu\CoreBundle\Twig;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\KeosuExtension;

use Keosu\CoreBundle\Event\PackageSideMenuEvent;

/**
 * This class allow to personalise differents screen in the app
 */
class TwigMenuExtension extends \Twig_Extension {

	private $container;
	
	public function __construct($container) {
		$this->container = $container;
	}

	public function getFunctions() {
		return array(
			new \Twig_SimpleFunction('appListMenu',array($this,'appListMenu'), array(
					'is_safe' => array('html')
			)),
			new \Twig_SimpleFunction('appListContent',array($this,'appListContent'), array(
					'is_safe' => array('html')
			)),
			new \Twig_SimpleFunction('appListPage',array($this,'appListPage'), array(
					'is_safe' => array('html')
			)),
			new \Twig_SimpleFunction('addItemToMenuConfiguration',array($this,'addItemToMenuConfiguration'), array(
					'is_safe' => array('html')
			))
		);
	}

	public function appListMenu()
	{
		$em = $this->container->get('doctrine')->getManager();
		$apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$curAppName = '';
		foreach($apps as $app) {
			if($app->getId() == $appid) {
				$curAppName = $app->getName();
			}
		}
		return $this->container->get('templating')->render('KeosuCoreBundle:Menu:app.html.twig', array(
								'apps'       => $apps,
								'curAppName' => $curAppName
		));
	}

	public function appListContent()
	{
		$returnArray = array();
		foreach(array_keys(KeosuExtension::$dataModelList) as $entry){
			$temp = array();
			$temp['name'] = $entry;
			$temp['label'] = $this->container->get('translator')->trans(ucfirst($entry));
			$returnArray[] = $temp;

		}
		return $this->container->get('templating')->render('KeosuCoreBundle:Menu:content.html.twig',array(

			'contents' => $returnArray,
			'icon' => KeosuExtension::$dataModelList
		));
	}

	public function appListPage()
	{
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->container->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		return $this->container->get('templating')->render('KeosuCoreBundle:Menu:page.html.twig', array(
								'pages' => $pages
							));
	}

	public function addItemToMenuConfiguration()
	{
		$dispatcher = $this->container->get('event_dispatcher');
		$event = new PackageSideMenuEvent();
		$packageManager = $this->container->get('keosu_core.package_manager');
		$packages = $packageManager->getPackageList();
		foreach($packages as $package) {
			$dispatcher->dispatch(KeosuEvents::PACKAGE_GLOBAL_MENU_CONFIG.$package->getName(),$event);
		}
		return $this->container->get('templating')->render('KeosuCoreBundle:Menu:addToConfig.html.twig',array(
				'links' => $event->getUrl()
		));
	}


	public function getName()
	{
		return 'twig_menu_extension';
	}

}
