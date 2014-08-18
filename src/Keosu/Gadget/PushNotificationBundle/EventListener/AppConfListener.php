<?php

namespace Keosu\Gadget\PushNotificationBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\PackageSaveAppEvent;

use Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class AppConfListener implements EventSubscriberInterface
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
			KeosuEvents::PACKAGE_GLOBAL_CONFIG_SAV_FORM.KeosuGadgetPushNotificationBundle::PACKAGE_NAME => 'onAppSave',
		);
	}

	public function onAppSave(PackageSaveAppEvent $event)
	{
		$app = $event->getApp();
		$form = $event->getForm();
		$appData = $this->container->get('keosu_core.packagemanager')->getAppDataFolder($app->getId());
		$form['configPackages']['keosu-push']['iosPem']->getData()->move($appData,'ios.pem');
		$configPackage = $app->getConfigPackages();
		$configPackage[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosPem'] = $appData.'ios.pem';
		$app->setConfigPackages($configPackage);
	}
}

