<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;

class GadgetFormBuilderEvent extends Event
{
	private $formBuilder;
	private $request;
	private $gadget;
	private $overrideForm;

	public function __construct(FormBuilder $formBuilder, Request $request,Gadget $gadget)
	{
		$this->formBuilder = $formBuilder;
		$this->request = $request;
		$this->gadget = $gadget;
		$this->overrideForm = false;
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
	
	/**
	 * @return boolean
	 */
	public function isOverrideForm()
	{
		return $this->overrideForm;
	}
	
	/**
	 * set true if you don't want the form to be automatiquely generated
	 */
	public function setOverrideForm($value)
	{
		$this->overrideForm = !!$value;
	}
}
