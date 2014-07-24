<?php

namespace Keosu\CoreBundle\Twig;

use Keosu\CoreBundle\KeosuEvents;
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
			new \Twig_SimpleFunction('includePanel',array($this,'includePanel'), array(
					'is_safe' => array('html')
			)),
		);
	}
	
	public function includePanel($zoneHtmlId,$pageId,$gadget,$gadgetList)
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


	public function getName() {
		return 'twig_include_panel_extension';
	}

}
