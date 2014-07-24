<?php

namespace Keosu\CoreBundle\Twig;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetPagePanelEvent;
use Keosu\CoreBundle\Event\GadgetPanelEvent;

/**
 * This class allow to personalise the list of action available in the simulator
 */
class TwigIncludePanelExtension extends \Twig_Extension {

	private $container;
	
	public function __construct($container) {
		$this->container = $container;
	}

	public function getFunctions() {
		return array(
			new \Twig_SimpleFunction('includePanelGadget',array($this,'includePanelGadget'), array(
					'is_safe' => array('html')
			)),
			new \Twig_SimpleFunction('includePanelPage', array($this,'includePanelPage'), array(
					'is_safe' => array('html')
			))
		);
	}
	
	public function includePanelGadget($zoneHtmlId,$pageId,$gadget,$gadgetList)
	{
		if($gadget !== null) {
			$dispatcher = $this->container->get('event_dispatcher');
			$event = new GadgetPanelEvent($zoneHtmlId,$pageId,$gadget,$gadgetList);
			$dispatcher->dispatch(KeosuEvents::GADGET_PANEL.$gadget->getName(),$event);
		
			if($event->getHtml() !== null)
				return $event->getHtml();
		}

		return $this->container->get('templating')->render('KeosuCoreBundle:Page:zonePanel.html.twig', array(
			'zoneId'     => $zoneHtmlId,
			'pageId'     => $pageId,
			'gadget'     => $gadget,
			'gadgetList' => $gadgetList
		));;
	}

	public function includePanelPage($pageId)
	{
		$em = $this->container->get('doctrine')->getManager();

		$page = $em->getRepository('KeosuCoreBundle:Page')->find($pageId);
		$gadgets = $em->getRepository('KeosuCoreBundle:Gadget')->findByPage($pageId);
	
		foreach ($gadgets as $gadget) {
			$dispatcher = $this->container->get('event_dispatcher');
			$event = new GadgetPagePanelEvent($page,$gadget);
			$dispatcher->dispatch(KeosuEvents::GADGET_PAGE_PANEL.$gadget->getName(),$event);

			if($event->getHtml() !== null)
				return $event->getHtml();
		}

		return $this->container->get('templating')->render('KeosuCoreBundle:Page:pagePanel.html.twig', array(
			'pageId'     => $pageId
		));;
	}


	public function getName() {
		return 'twig_include_panel_extension';
	}

}
