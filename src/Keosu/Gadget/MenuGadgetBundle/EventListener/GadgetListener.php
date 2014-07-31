<?php

namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use keosu\CoreBundle\Event\GadgetSaveConfigEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class GadgetListener implements EventSubscriberInterface
{

	const GADGET_NAME = 'keosu-menu';

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
			KeosuEvents::GADGET_CONF_FORM_BUILD.GadgetListener::GADGET_NAME => 'onGadgetConfFormBuild',
			KeosuEvents::GADGET_CONF_SAV.GadgetListener::GADGET_NAME        => 'onGadgetConfSav',
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
			$pageList[$page->getId()] = $page->getName();
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
	
	public function onGadgetConfSav(GadgetSaveConfigEvent $event)
	{
		$conf = array();
		$conf['pages'] = array();
		$em = $this->container->get('doctrine')->getManager();

		$gadget = $event->getGadget();
		$listPageId = $gadget->getConfig()['page'];
		$tmp = array();
		// add icon to page id
		foreach($listPageId as $pageId) {
			$page = $em->getRepository('KeosuCoreBundle:Page')->find($pageId);
			$tmp['id'] = $pageId;
			$tmp['icon'] = $page->getIcon();
			$conf['pages'][] = $tmp;
		}
		
		$gadget->setConfig($conf);
	}
}

