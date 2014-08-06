<?php

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */

class ExportListener implements EventSubscriberInterface
{

	const PLUGIN_NAME = 'facebookPlugins';

	private $container;

	public function _container($container){
		$this ->container= $container;

	}

	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::PACKAGE_EXPORT.ExportListener::PLUGIN_NAME => 'onGadgetExport',

			);
	}

	function onGadgetExport(ExportPackageEvent $event)
	{

		$em = $this->container->get('doctrine')->getManager();
		$appId = $this ->container->get('keosu_core.curapp')->getcurapp();
		$configApp = $em ->getRespository('KeosuCoreBundle:App')->find($appId);
		$configPackages = $configApp->getConfigPackages();
		$fbAppId = $configPackages[ExportListener::PLUGIN_NAME]['fbAppId'];


         $event->addToJsInit('

		FB.init({
			app_id:'.$fbAppId.',
			xfbml:true,
			version:\'0.3.2\'

		});'
		 );
	}

}


