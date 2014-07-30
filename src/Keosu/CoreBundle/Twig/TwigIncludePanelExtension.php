<?php

namespace Keosu\CoreBundle\Twig;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetPagePanelEvent;
use Keosu\CoreBundle\Event\GadgetPanelEvent;

use Symfony\Component\Form\FormView;

/**
 * This class allow to personalise differents screen in the app
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
			)),
			new \Twig_SimpleFunction('includePanelAppConfig', array($this,'includePanelAppConfig'), array(
					'is_safe' => array('html')
			)),
		);
	}

	/**
	 * Generate a panel for a gadget
	 * @param $zoneHtmlId html id of the zone
	 * @param $pageId id of the page
	 * @param $gadget gadget object or null
	 * @param $gadgetList array with list of all gadget available
	 * @return html
	 */
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
		));
	}

	/**
	 * Generate control for page
	 * @param $pageId id of the page
	 * @return html
	 */
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
		));
	}

	/**
	 * Render a zone with custom param in app config
	 * @param $nameOfPackage name of the package
	 * @param $typeOfPackage type of the package
	 * @param $helpMessage help message
	 * @return html
	 */
	public function includePanelAppConfig($nameOfPackage,$typeOfPackage,$helpMessage,FormView $form)
	{
		return $this->container->get('templating')->render('KeosuCoreBundle:App:configPanel.html.twig', array(
			'packageName'        => $nameOfPackage,
			'packageHelpMessage' => $helpMessage,
			'packageType'        => $typeOfPackage,
			'form'               => $form
		));
	}


	public function getName()
	{
		return 'twig_include_panel_extension';
	}

}
