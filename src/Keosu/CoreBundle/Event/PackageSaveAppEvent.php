<?php

namespace Keosu\CoreBundle\Event;

use Keosu\CoreBundle\Entity\App;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PackageSaveAppEvent extends Event
{
	private $form;
	private $request;
	private $app;
	private $response;

	public function __construct(FormInterface $form, Request $request,App $app)
	{
		$this->form = $form;
		$this->request = $request;
		$this->app = $app;
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
	 * @return Package
	 */
	public function getApp()
	{
		return $this->app;
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
