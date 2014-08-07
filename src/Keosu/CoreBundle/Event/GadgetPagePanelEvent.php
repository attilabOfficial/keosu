<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;
use Keosu\CoreBundle\Entity\Page;

use Symfony\Component\EventDispatcher\Event;

class GadgetPagePanelEvent extends Event
{
	private $page;
	private $gadget;
	private $html;

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
	 * @return html | null
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
