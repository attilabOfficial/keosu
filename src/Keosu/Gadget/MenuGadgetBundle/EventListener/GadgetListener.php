<?php

namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportConfigPackageEvent;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Keosu\Gadget\MenuGadgetBundle\KeosuGadgetMenuGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

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
			KeosuEvents::PACKAGE_EXPORT_CONFIG.KeosuGadgetMenuGadgetBundle::PACKAGE_NAME  => 'onGadgetExportConf',
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
		$event->setOverrideForm(true);
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();

		$em = $this->container->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$pageList = array();
		foreach ($pages as $page) {
			$pageList[$page] = $page->getName();
		}

		$builder = $event->getFormBuilder();
		$builder->add('page', 'collection',array(
						'type'         => 'choice',
						'required'     => false,
						'label'        => "Choose a page",
						'allow_add'    => true,
						'allow_delete' => true,
						'by_reference' => true,
						'options'      => array(
							'choices' => $pageList,
							'label'   => false,
						)
				));
	}
	
	public function onGadgetExportConf(ExportConfigPackageEvent $event)
	{
		$pages = array();
		$em = $this->container->get('doctrine')->getManager();

		$currentConfig = $event->getCurrentConfig();
		$listPageId = $currentConfig['gadgetParam']['page'];
		$tmp = array();
		// add icon to page id
		foreach($listPageId as $pageId) {
			$page = $em->getRepository('KeosuCoreBundle:Page')->find($pageId);
			$tmp['id'] = $pageId;
			$tmp['icon'] = $page->getIcon();
			$tmp['name'] = $page->getName();
			$pages[] = $tmp;
		}
		
		$newConfig = $currentConfig;
		unset($newConfig['gadgetParam']['page']);
		$newConfig['gadgetParam']['pages'] = $pages;
		$event->setNewConfig($newConfig);
	}
}

