<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;

use Symfony\Component\EventDispatcher\Event;

class GadgetPanelEvent extends Event
{
	/**
	 * zone html id
	 */
	private $zoneHtmlId;

	/**
	 * Page id
	 */
	private $pageId;

	/**
	 * Instance of the current gadget
	 */
	private $gadget;

	/**
	 * array with the list of all available gadget
	 */
	private $gadgetList;

	/**
	 * html brut response
	 */
	private $html;

	public function __construct($zoneHtmlId,$pageId,Gadget $gadget,$gadgetList)
	{
		$this->zoneHtmlId = $zoneHtmlId;
		$this->pageId = $pageId;
		$this->gadget = $gadget;
		$this->gadgetList = $gadgetList;
		$this->html = null;
	}

	/**
	 * @return string
	 */
	public function getZoneHtmlId()
	{
		return $this->zoneHtmlId;
	}

	/**
	 * @return integer
	 */
	public function getPageId()
	{
		return $this->pageId;
	}
	
	/**
	 * @return Gadget
	 */
	public function getGadget()
	{
		return $this->gadget;
	}
	
	/**
	 * @return array
	 */
	public function getGadgetList()
	{
		return $this->gadgetList;
	}
	
	/**
	 * @return String | null
	 */
	public function getHtml()
	{
		return $this->html;
	}
	
	/**
	 * Set html response
	 */
	public function setHtml($html)
	{
		$this->html = $html;
	}
}
