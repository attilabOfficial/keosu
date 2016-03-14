<?php

namespace Keosu\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IconsType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('iconA36',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA48',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA72',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconA96',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI57',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI72',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI114',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI120',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI76',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI152',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('iconI144',FileType::class,array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)));

	}
	
	
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\CoreBundle\Model\Icons'
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
