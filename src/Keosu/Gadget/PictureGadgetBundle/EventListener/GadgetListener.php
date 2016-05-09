<?php

namespace Keosu\Gadget\PictureGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;

use Keosu\Gadget\PictureGadgetBundle\KeosuGadgetPictureGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

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
            KeosuEvents::GADGET_CONF_FORM_BUILD . KeosuGadgetPictureGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild',
        );
    }

    public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
    {
        $event->setOverrideForm(true);
        $em = $this->container->get('doctrine')->getManager();

        //Get list of picture
        $queryPictureList = $em->createQueryBuilder();
        $queryPictureList->add('select', 'p.id , p.name')
            ->add('from', 'Keosu\DataModel\PictureModelBundle\Entity\Picture p');
        $pictureListTmp = $queryPictureList->getQuery()->execute();

        //Prepare the list of picture for the form
        $pictureList = array();
        foreach ($pictureListTmp as $picture) {
            $pictureList[$picture['name']] = $picture['id'];
        }


        //Overide form
        $builder = $event->getFormBuilder();
        $builder->add('pictureId', ChoiceType::class, array(
            'label' => 'Picture',
            'choices' => $pictureList,
        ))
            ->add('cache', NumberType::class, array(
                'label' => 'Cache in minutes',
                'data' => 10
            ))
            ->add('timeout', NumberType::class, array(
                'label' => 'Timeout in seconde',
                'data' => 10
            ));

    }
}

