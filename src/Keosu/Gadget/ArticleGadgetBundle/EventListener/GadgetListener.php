<?php

namespace Keosu\Gadget\ArticleGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use keosu\CoreBundle\Event\GadgetSaveConfigEvent;

use Keosu\Gadget\ArticleGadgetBundle\KeosuGadgetArticleGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            KeosuEvents::GADGET_CONF_FORM_BUILD . KeosuGadgetArticleGadgetBundle::PACKAGE_NAME => 'onGadgetConfFormBuild'
        );
    }

    public function onGadgetConfFormBuild(GadgetFormBuilderEvent $event)
    {
        $event->setOverrideForm(true);
        $em = $this->container->get('doctrine')->getManager();

        //Get list of article
        $queryArticleList = $em->createQueryBuilder();
        $queryArticleList->add('select', 'a.id, a.title')
            ->add('from', 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleBody a');
        $articleListTmp = $queryArticleList->getQuery()->execute();

        //Prepare the list of article for the form
        $articleList = array();
        foreach ($articleListTmp as $article) {
            $articleList[$article['title']] = $article['id'];
        }

        //Overide form
        $builder = $event->getFormBuilder();
        $builder->add('article-id', ChoiceType::class, array(
            'label' => 'Article',
            'choices' => $articleList));
        $builder
			->add('offline', CheckboxType::class, array('required' => false))
            ->add('cache', NumberType::class, array(
                'label' => 'Cache in minutes',
                'data' => 10
            ))
            ->add('timeout', NumberType::class, array(
                'label' => 'Timeout in seconde',
                'data' => 10
            ));
    }

    public function onGadgetConfSav(GadgetSaveConfigEvent $event)
    {

    }
}

