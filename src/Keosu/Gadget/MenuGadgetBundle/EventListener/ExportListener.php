<?php

namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportPackageEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class ExportListener implements EventSubscriberInterface
{

	const GADGET_NAME = 'keosu-menu';

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
			KeosuEvents::PACKAGE_EXPORT.GadgetListener::GADGET_NAME => 'onGadgetExport',
		);
	}

	public function onGadgetExport(ExportPackageEvent $event)
	{

		$appid = $this->container->get('keosu_core.curapp')->getCurApp();
		$em = $this->container->get('doctrine')->getManager();
		$pages = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appid);

		$idMain = 0;
		foreach ($pages as $page) {
			if($page->getIsMain())
				$idMain = $page->getId();
		}

		$event->addToJsCore('
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

