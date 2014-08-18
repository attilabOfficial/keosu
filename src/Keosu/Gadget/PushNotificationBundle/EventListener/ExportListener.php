<?php

namespace Keosu\Gadget\PushNotificationBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportPackageEvent;

use Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class ExportListener implements EventSubscriberInterface
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
			KeosuEvents::PACKAGE_EXPORT.KeosuGadgetPushNotificationBundle::PACKAGE_NAME => 'onGadgetExport',
		);
	}

	public function onGadgetExport(ExportPackageEvent $event)
	{
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->container->get('doctrine')->getManager();
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		
		if(isset($app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['enablePush'])
			&& $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['enablePush'] === true) {
		
			$googleGcmApiKey = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['googleGcmApiKey'];

			$event->addToJsEnd('
document.addEventListener("deviceready", function(){
	var pushNotification = window.plugins.pushNotification;
	pushNotification.register(appPushNotification.successHandler, appPushNotification.errorHandler,{"senderID":"'.$googleGcmApiKey.'","ecb":"appPushNotification.onNotificationGCM"});
});'         );
		}
	}
}

