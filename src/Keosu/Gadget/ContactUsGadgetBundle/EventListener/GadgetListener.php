<?php

namespace Keosu\Gadget\ContactUsGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Keosu\Gadget\ContactUsGadgetBundle\KeosuGadgetContactUsGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

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
			KeosuEvents::GADGET_CONF_FORM_BUILD.KeosuGadgetContactUsGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
		);
	}

	public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
	{
        $event->setOverrideForm(true);
        $em = $this->container->get('doctrine')->getManager();

        //Get list of picture
        $queryPictureList = $em->createQueryBuilder();
        $queryPictureList->add('select','p.id , p.name')
            ->add('from', 'Keosu\DataModel\PictureModelBundle\Entity\Picture p');
        $pictureListTmp=$queryPictureList->getQuery()->execute();

        //Prepare the list of picture for the form
        $pictureList=array();
        foreach($pictureListTmp as $picture){
            $pictureList[$picture['name']]=$picture['id'];
        }
        //Overide form
        $builder = $event->getFormBuilder();
        $builder->add('name')
                ->add('presentation', TextareaType::class)
                ->add('pictureId', ChoiceType::class, array(
                    'label'    => 'Picture',
                    'choices'  => $pictureList,
                    'required' => false))
                ->add('address', TextareaType::class, array('required' => false))
                ->add('phone', TextareaType::class, array('required' => false))
                ->add('email', EmailType::class, array('required' => false));
	}
}

