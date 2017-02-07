<?php

namespace Keosu\Gadget\BaseBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportPackageEvent;

use Keosu\Gadget\BaseBundle\KeosuGadgetBaseBundle;

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
			KeosuEvents::PACKAGE_EXPORT.KeosuGadgetBaseBundle::PACKAGE_NAME => 'onGadgetExport',
		);
	}

	public function onGadgetExport(ExportPackageEvent $event)
	{

		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->container->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$idMain = 0;
		$pageMap = "var pageName = new Array();";
		foreach ($pages as $page) {
			$pageMap = $pageMap."pageName[".$page->getId()."]='".str_replace('\'', '\\\'', $page->getName())."';";
			if($page->getIsMain())
				$idMain = $page->getId();
		}

		$event->addToJsCore(
		$pageMap.
		'
		app.config(function($routeProvider,$locationProvider){
			$routeProvider.when("/Page/:pageName",{
				templateUrl: function(params) {
					return params.pageName+".html";
				}
			})
			.otherwise({redirectTo:"/Page/'.$idMain.'"});
		});');

	}
}

