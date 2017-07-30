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
		$appData = $this->container->get('keosu_core.package_manager')->getAppDataFolder($app->getId());
		$iosPem = $form['configPackages']['keosu-push']['iosPem']->getData();
		if($iosPem !== null) {
			$iosPem->move($appData,'ios.pem');
		}

		$configPackage = $app->getConfigPackages();
		if(is_file($appData.'ios.pem')) {
			$configPackage[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosPem'] = $appData.'ios.pem';
		} else {
			$configPackage[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosPem'] = '';
		}
		$app->setConfigPackages($configPackage);
	}
}

