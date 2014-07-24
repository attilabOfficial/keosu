<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;
use Keosu\CoreBundle\Entity\Page;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

class GadgetPageActionEvent extends Event
{
	private $page;
	private $gadget;
	private $response;

	public function __construct(Page $page,Gadget $gadget)
	{
		$this->page = $page;
		$this->gadget = $gadget;
		$this->response = null;
	}

	/**
	 * @return Page of the gadget
	 */
	public function getPage()
	{
		return $this->page;
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
