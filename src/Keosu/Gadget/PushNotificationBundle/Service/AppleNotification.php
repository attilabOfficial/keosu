<?php

namespace Keosu\Gadget\PushNotificationBundle\Service;

use Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle;

class AppleNotification extends \RMS\PushNotificationsBundle\Service\OS\AppleNotification {

	public function __construct($container) {
		$logger = $container->get('logger');
		$em = $container->get('doctrine')->getManager();
		$appId = $container->get('keosu_core.curapp')->getCurApp();
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		$iosSandbox = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosSandbox'];
		$iosPassPhrase = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosPassPhrase'];
		$iosPem = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['iosPem'];
		if(!is_file($iosPem))
			throw new \LogicException('Can\'t send message because ios pem file isn\'t uploaded');
		parent::__construct($iosSandbox,$iosPem,$iosPassPhrase,false,60,null,null,$logger);
	}

}
