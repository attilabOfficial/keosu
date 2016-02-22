<?php

namespace Keosu\Gadget\QuizzGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use keosu\CoreBundle\Event\GadgetSaveConfigEvent;

use Keosu\Gadget\QuizzGadgetBundle\KeosuGadgetQuizzGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */
class GadgetListener implements EventSubscriberInterface
{

	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetQuizzGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild'
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
		$event->setOverrideForm(true);
		$em = $this->container->get('doctrine')->getManager();
		
		//Get list of quizz
		$queryQuizzList = $em->createQueryBuilder();
		$queryQuizzList->add('select','q.id, q.title')
						->add('from', 'Keosu\DataModel\QuizzModelBundle\Entity\Quizz q');
		$quizzListTmp=$queryQuizzList->getQuery()->execute();

		//Prepare the list of quizz for the form
		$quizzList=array();
		foreach($quizzListTmp as $quizz){
			$quizzList[$quizz['id']]=$quizz['title'];
		}
		
		//Overide form
		$builder = $event->getFormBuilder();
		$builder->add('quizz-id', 'choice', array(
				'label' 	=> 'Quizz',
				'choices'	=> $quizzList));
	}
	
	public function onGadgetConfSav(GadgetSaveConfigEvent $event)
	{

	}
}

