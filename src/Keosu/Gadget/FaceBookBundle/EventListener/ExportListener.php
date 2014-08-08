<?php

namespace Keosu\Gadget\FaceBookBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportPackageEvent;

use Keosu\Gadget\FaceBookBundle\KeosuGadgetFaceBookBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */

class ExportListener implements EventSubscriberInterface
{
	private $container;

	public function __construct($container)
	{
		$this ->container= $container;
	}

	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::PACKAGE_EXPORT.KeosuGadgetFaceBookBundle::PLUGIN_NAME => 'onGadgetExport',
			);
	}

	function onGadgetExport(ExportPackageEvent $event)
	{
		$em = $this->container->get('doctrine')->getManager();
		$appId = $this ->container->get('keosu_core.curapp')->getcurapp();
		$app = $em ->getRepository('KeosuCoreBundle:App')->find($appId);
		$configPackages = $app->getConfigPackages();
		$fbAppId = $configPackages[KeosuGadgetFaceBookBundle::PLUGIN_NAME]['fbAppId'];

		$event->addToJsInit('
document.addEventListener(\'deviceready\',function(){
	FB.init({
		appId:'.$fbAppId.',
		nativeInterface:CDV.FB,
		useCacheDialogs:false
	});
});');
		}
}






