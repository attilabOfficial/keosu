<?php

namespace Keosu\DataModel\PictureModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PictureTagsType extends AbstractType
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
            'data_class' => 'Keosu\DataModel\PictureModelBundle\Entity\pictureTag'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_datamodel_picturemodelbundle_picturetag';
    }
}
