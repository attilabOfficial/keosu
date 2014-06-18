<?php
namespace Keosu\Gadget\AuthenticationGadgetBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class PasswordResettingListener implements EventSubscriberInterface
{
	private $router;

	public function __construct(UrlGeneratorInterface $router)
	{
		$this->router = $router;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess',
		);
	}

	public function onPasswordResettingSuccess(FormEvent $event)
	{
		$url = $this->router->generate('keosu_gadget_article_reset_success');
		$event->setResponse(new RedirectResponse($url));
	}
}
