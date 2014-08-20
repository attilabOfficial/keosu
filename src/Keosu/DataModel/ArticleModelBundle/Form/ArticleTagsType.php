<?php

namespace Keosu\DataModel\ArticleModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleTagsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tagName')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\DataModel\ArticleModelBundle\Entity\ArticleTags'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_datamodel_articlemodelbundle_articletags';
    }
}
