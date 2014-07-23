<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

class GadgetActionEvent extends Event
{
	private $pageId;
	private $zoneName;
	private $gadget;
	private $response;

	public function __construct($pageId,$zoneName,Gadget $gadget)
	{
		$this->pageId = $pageId;
		$this->zoneName = $zoneName;
		$this->gadget = $gadget;
		$this->response = null;
	}

	/**
	 * @return PageId of the gadget
	 */
	public function getPageId()
	{
		return $this->pageId;
	}

	/**
	 * @return name of the zone
	 */
	public function getZoneName()
	{
		return $this->zoneName;
	}
	
	/**
	 * @return Gadget
	 */
	public function getGadget()
	{
		return $this->gadget;
	}
	
	/**
	 * @return Response | null
	 */
	public function getResponse()
	{
		return $this->response;
	}
	
	/**
	 * Set user response
	 */
	public function setResponce(Response $response)
	{
		$this->response = $response;
	}
}
