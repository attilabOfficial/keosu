<?php
namespace Keosu\Gadget\AuthenticationGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;

use Keosu\CoreBundle\Event\GadgetActionEvent;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use Keosu\CoreBundle\Event\GadgetPanelEvent;

use Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Listener lock the possibility to delete the gadget
 */
class GadgetListener implements EventSubscriberInterface
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
			KeosuEvents::GADGET_ADD_OLD.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME => 'onGadgetAction',
			KeosuEvents::GADGET_DELETE.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME  => 'onGadgetAction',
			KeosuEvents::GADGET_PANEL.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME   => 'onGadgetRenderPanel',
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetAuthenticationGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
		);
	}

	/**
	 * Do nothing and redirect to the current page
	 */
	public function onGadgetAction(GadgetActionEvent $event)
	{
		$em = $this->container->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($event->getPageId());
		$url = $this->container->get('router')->getGenerator()->generate('keosu_core_views_page',array(
																			'id' => $event->getPageId()
																		));
		if($page->getName() === KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME
			&& $page->getTemplateId() == KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID)
			$event->setResponce(new RedirectResponse($url));
	}
	
	public function onGadgetRenderPanel(GadgetPanelEvent $event)
	{
		$em = $this->container->get('doctrine')->getManager();
		$page = $em->getRepository('KeosuCoreBundle:Page')->find($event->getPageId());
		if($page->getName() === KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_PAGE_NAME
			&& $page->getTemplateId() == KeosuGadgetAuthenticationGadgetBundle::AUTHENTICATION_TEMPLATE_ID)
			$event->setHtml($this->container->get('templating')->render('KeosuGadgetAuthenticationGadgetBundle:PrivateApp:panelGadget.html.twig', array(
				'zoneId'     => $event->getZoneHtmlId(),
				'pageId'     => $event->getPageId(),
				'gadget'     => $event->getGadget(),
				'gadgetList' => $event->getGadgetList()
			)));
	}
	
	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
		$event->setOverrideForm(true);
		$em = $this->container->get('doctrine')->getManager();
		$appId = $this->container->get('keosu_core.curapp')->getCurApp();

		$pageListTmp = $em->getRepository('KeosuCoreBundle:Page')->findByAppId($appId);
		
		//Prepare the list of picture for the form
		$pageList=array();
		foreach($pageListTmp as $page){
			if ($page->getId() != $event->getGadget()->getPage()->getId()) {
				$pageList[$page->getName()]=$page->getId();
			}
		}
		
		
		//Overide form
		$builder = $event->getFormBuilder();
		$builder->add('pageToGoAfterLogin',ChoiceType::class ,array(
				'choices'	=> $pageList,
		));
	}
}
