<?php

namespace Keosu\Gadget\PushNotificationBundle\Service;

use Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle;

class AndroidGCMNotification extends \RMS\PushNotificationsBundle\Service\OS\AndroidGCMNotification {

	public function __construct($container) {
		$logger = $container->get('logger');
		$em = $container->get('doctrine')->getManager();
		$appId = $container->get('keosu_core.curapp')->getCurApp();
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		$googleGcmApiKey = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['googleGcmApiKey'];
		$googleUseMultiCurl = $app->getConfigPackages()[KeosuGadgetPushNotificationBundle::PACKAGE_NAME]['googleUseMultiCurl'];
		if($googleGcmApiKey === null)
			throw new \LogicException('Can\'t send message because google gcm api key in not defined');
		parent::__construct($googleGcmApiKey,$googleUseMultiCurl,60,$logger);
	}

}
