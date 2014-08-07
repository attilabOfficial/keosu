<?php
namespace Keosu\Gadget\AuthenticationGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Event\GadgetPageActionEvent;
use Keosu\CoreBundle\Event\GadgetPagePanelEvent;

use Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Listener lock the possibility to delete a special page
 */
class PageEditListener implements EventSubscriberInterface
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
			KeosuEvents::GADGET_PAGE_PANEL.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME  => 'onPageList',
			KeosuEvents::GADGET_PAGE_EDIT.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME   => 'onPageAction',
			KeosuEvents::GADGET_PAGE_DELETE.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME => 'onPageAction',
		);
	}

	/**
	 * Hide the list of control for the special authentication page
	 */
	public function onPageList(GadgetPagePanelEvent $event)
	{
		$page = $event->getPage();
		if($page->getName() === KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME
			&& $page->getTemplateId() == KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID)
			$event->setHtml("");
	}

	/**
	 * Do nothing and redirect to the page manager
	 */
	public function onPageAction(GadgetPageActionEvent $event)
	{
		$page = $event->getPage();
		$url = $this->container->get('router')->getGenerator()->generate('keosu_core_views_page_manage');
		if($page->getName() === KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME
			&& $page->getTemplateId() == KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID)
			$event->setResponce(new RedirectResponse($url));
	}
}
