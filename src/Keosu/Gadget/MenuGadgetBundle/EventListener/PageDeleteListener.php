<?php
namespace Keosu\Gadget\MenuGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Event\GadgetPageActionEvent;

use Keosu\Gadget\MenuGadgetBundle\KeosuGadgetMenuGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener lock the possibility to delete a special page
 */
class PageDeleteListener implements EventSubscriberInterface
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
			KeosuEvents::APPGADGET_PAGE_DELETE.KeosuGadgetMenuGadgetBundle::PACKAGE_NAME => 'onPageAction',
		);
	}

	/**
	 * Delete the page from gadget config
	 */
	public function onPageAction(GadgetPageActionEvent $event)
	{
		$logger = $this->container->get('logger');
		$logger->debug("Delete unused pages in menu gadget");
		$curPage=$event->getPage();
		$gadget = $event->getGadget();
		$pages=$gadget->getConfig()['page'];
		$newConfig = array();
		$logger->debug("Deleted page is ".$curPage->getId());
		foreach($pages as $page) {
			$logger->debug("Cur page is ".$page['id']);
			if($page['id']!=$curPage->getId()){
				$pages[] = $page;
			}
		}
		$gadget->setConfig($newConfig);
		$em = $this->container->get('doctrine')->getManager();
		//$em->persist($gadget);
		//$em->flush();
	}
}
