<?php

namespace Keosu\DataModel\LocationModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationTagsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tagName', 'text', array('label' => false ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\DataModel\LocationModelBundle\Entity\LocationTags'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_datamodel_locationmodelbundle_locationtags';
    }
}
