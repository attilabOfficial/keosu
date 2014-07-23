<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\Gadget;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GadgetSaveConfigEvent extends Event
{
	private $form;
	private $request;
	private $gadget;
	private $response;

	public function __construct(FormInterface $form, Request $request,Gadget $gadget)
	{
		$this->form = $form;
		$this->request = $request;
		$this->gadget = $gadget;
		$this->response = null;
	}

	/**
	 * @return FormInterface
	 */
	public function getForm()
	{
		return $this->form;
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
