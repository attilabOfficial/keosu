<?php

namespace Keosu\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IconsType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('iconA36','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA48','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA72','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA96','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI57','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI72','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI114','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI120','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI76','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI152','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI144','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)));

	}
	
	
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\CoreBundle\Entity\Icons'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_corebundle_icons';
    }
}
