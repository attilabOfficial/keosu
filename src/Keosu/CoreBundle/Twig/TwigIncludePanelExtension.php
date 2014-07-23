<?php

namespace Keosu\CoreBundle\Twig;

use Keosu\CoreBundle\Entity\Gadget;

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
	
	public function includePanel($zoneId,$pageId,Gadget $gadget,$gadgetList)
	{
		// TODO event
		return $this->container->get('templating')->render('KeosuCoreBundle:Page:zonePanel.html.twig', array(
			'zoneId'     => $zoneId,
			'pageId'     => $pageId,
			'gadget'     => $gadget,
			'gadgetList' => $gadgetList
		));;
	}


	public function getName() {
		return 'twig_include_panel_extension';
	}

}
