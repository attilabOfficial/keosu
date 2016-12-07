<?php

namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\Event\ExportDataPackageEvent;
use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportConfigPackageEvent;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Keosu\Gadget\MenuGadgetBundle\KeosuGadgetMenuGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Listener responsible to gadget action
 */
class GadgetListener implements EventSubscriberInterface
{

	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetMenuGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
			KeosuEvents::PACKAGE_EXPORT_DATA.KeosuGadgetMenuGadgetBundle::PACKAGE_NAME  => 'onGadgetExportConf',
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
		$event->setOverrideForm(true);
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();

		$em = $this->container->get('doctrine')->getManager();
		$menus = $em->getRepository('KeosuDataModelMenuModelBundle:MenuEntry')->findByAppId($appid);

		$menuList = array();
		foreach ($menus as $menu) {
			$menuList[$menu->getTitle()] = $menu->getId();
		}

		$builder = $event->getFormBuilder();
		$builder->add('menu-id', ChoiceType::class, array(
			'label' 	=> 'Menu',
			'choices'	=> $menuList));
	}
	
	public function onGadgetExportConf(ExportDataPackageEvent $event)
	{
		$pages = array();
		$em = $this->container->get('doctrine')->getManager();

		$currentConfig = $event->getConfig();
		$menuId = $currentConfig['gadgetParam']['menu-id'];
		$menu = $em->getRepository('KeosuDataModelMenuModelBundle:MenuEntry')->find($menuId);
		$parts = $menu->getParts();
		$tmp = array();
		// add icon to page id
		foreach($parts as $part) {
			$tmp['id'] = $part->getTarget();
			if($part->getPath() != null)
				$this->copyIcon($part->getPath(), $this->getUploadAbsolutePath());
			if($part->getPathActive() != null)
				$this->copyIcon($part->getPathActive(), $this->getUploadAbsolutePath());
			$tmp['icon'] = $part->getPath();
			$tmp['iconActive'] = $part->getPathActive();
			$tmp['name'] = $part->getName();
			$tmp['css'] = $part->getCss();
			$tmp['isExternal'] = $part->getIsExternal();
			$tmp['externalLink'] = $part->getExternalLink();
			$pages[] = $tmp;
		}

		$event->setData(json_encode($pages));
	}
	//write a file
	private function copyIcon($name, $initialPath)
	{
		if(!is_dir($this->getExportAbsolutePath()))
			mkdir($this->getExportAbsolutePath(), 0777, true);
		//Writting the html content in file
		$destiPath = $this->getExportAbsolutePath();

		$fileName = $destiPath . $name;

		if (file_exists($fileName)) {
			unlink($fileName);
		}
		copy($initialPath.$name, $destiPath.$name);

	}
	/**
	 * Return dir where to export app
	 */
	private function getExportAbsolutePath() {
		$kernel = $this->container->get('kernel');
		return $kernel->getRootDir().'/../web/keosu/export/simulator/www/data/menu/';
	}

	private function getUploadAbsolutePath() {
		$kernel = $this->container->get('kernel');
		return $kernel->getRootDir().'/../web/uploads/documents/';
	}
}

