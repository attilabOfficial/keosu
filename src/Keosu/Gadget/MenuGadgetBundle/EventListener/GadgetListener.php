<?php

namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
			KeosuEvents::GADGET_CONF_BUILD.'keosu-menu' => 'onGadgetConfBuild',
	);
	}

	public function onGadgetConfBuild(GadgetFormBuilderEvent $event)
	{

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
}

