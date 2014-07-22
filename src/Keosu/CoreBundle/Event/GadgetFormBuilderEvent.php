<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GadgetFormBuilderEvent extends Event
{
	private $formBuilder;
	private $request;
	private $gadget;

	public function __construct(FormBuilder $formBuilder, Request $request,Gadget $gadget)
	{
		$this->formBuilder = $formBuilder;
		$this->request = $request;
		$this->gadget = $gadget;
	}

	/**
	 * @return FormBuilder
	 */
	public function getFormBuilder()
	{
		return $this->formBuilder;
	}

	/**
	 * @return Request
	 */
	public function getRequest()
	{
		return $this->request;
	}
	
	/**
	 * @return Gadget
	 */
	public function getGadget()
	{
		return $this->gadget;
	}
}
