<?php

namespace Keosu\Gadget\FormGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use keosu\CoreBundle\Event\GadgetSaveConfigEvent;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Keosu\Gadget\FormGadgetBundle\KeosuGadgetFormGadgetBundle;

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
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetFormGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
			KeosuEvents::GADGET_CONF_SAV.KeosuGadgetFormGadgetBundle::PACKAGE_NAME => 'onGadgetConfSav'
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{

		$event->setOverrideForm(true);
		$em = $this->container->get('doctrine')->getManager();

		// Get form list
		$queryFormList = $em->createQueryBuilder();
		$queryFormList->add('select','f.id, f.name')
									->add('from', 'Keosu\DataModel\FormModelBundle\Entity\Form f');

		// In case we are in a subapp
		if(method_exists($this->container->get('keosu_core.curapp'), 'getCurSubApp'))
			$queryFormList->add('where', 'f.subAppId = '.$this->container->get('keosu_core.curapp')->getCurSubApp());

		$formListTMP = $queryFormList->getQuery()->execute();

		//Prepare the form list for the config form
		$formList = array();
		foreach($formListTMP as $form) $formList[$form['name']] = $form['id'];

		// Override form
		$builder = $event->getFormBuilder();
		$builder->add('form-id', ChoiceType::class, array('label' 	=> 'Form', 'choices'	=> $formList))
						->add('offline', CheckboxType::class, array('required' => false));

	}

	public function onGadgetConfSav(GadgetSaveConfigEvent $event)
	{

		$formId = $event->getGadget()->getConfig()['form-id'];
		$em = $this->container->get('doctrine')->getManager();
		$form = $em->getRepository('KeosuDataModelFormModelBundle:Form')->find($formId);
		$em->flush();

	}
}
