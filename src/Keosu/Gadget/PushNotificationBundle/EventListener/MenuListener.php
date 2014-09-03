<?php

namespace Keosu\Gadget\PushNotificationBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\PackageSideMenuEvent;

use Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class MenuListener implements EventSubscriberInterface
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
			KeosuEvents::PACKAGE_GLOBAL_MENU_CONFIG.KeosuGadgetPushNotificationBundle::PACKAGE_NAME => 'onMenuConfigRender',
		);
	}

	public function onMenuConfigRender(PackageSideMenuEvent $event)
	{
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		if($appId!=null){
			$em = $this->container->get('doctrine')->getManager();
			$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);

			if(isset($app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['enablePush'])
				&& $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['enablePush'] === true) {
				$url = $this->container->get('router')->getGenerator()->generate('keosu_gadget_push_notification_homepage');
				$event->addUrl('Send push',$url);
			}
		}
	}
}

