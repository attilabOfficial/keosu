<?php

namespace Keosu\Gadget\SearchGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportDataPackageEvent;

use Keosu\Gadget\SearchGadgetBundle\KeosuGadgetSearchGadgetBundle;

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
			KeosuEvents::PACKAGE_EXPORT_DATA.KeosuGadgetSearchGadgetBundle::PACKAGE_NAME  => 'onGadgetExportConf',
		);
	}
	
	public function onGadgetExportConf(ExportDataPackageEvent $event)
	{
		$keys = array();
		$em = $this->container->get('doctrine')->getManager();
		$appid = $this->container->get('keosu_core.curapp')->getCurApp();

		//Specific search entry
		$repo = $em->getRepository(
				'KeosuDataModelSearchModelBundle:Search');
		$entries = $repo->findByAppId($appid);
		$tmp = array();
		// add icon to page id
		foreach($entries as $entry) {
			$tmp['name'] = $entry->getTargetName();
			$tmp['target'] = $entry->getTarget();
			$tmp['key'] = $entry->getKeyValue();
			$keys[] = $tmp;
		}
		//Basic pages Search entry
		$pageRepo = $em->getRepository('KeosuCoreBundle:Page');

		$pages =$pageRepo->findByAppId($appid);
		foreach($pages as $page) {
			$tmp['name'] = $page->getName();
			$tmp['target'] = $page->getId();
			$tmp['key'] = $page->getName();
			$keys[] = $tmp;
		}
		$event->setData(json_encode($keys));
	}
}

