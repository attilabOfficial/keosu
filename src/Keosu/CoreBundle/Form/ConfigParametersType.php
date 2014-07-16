<?php

namespace Keosu\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConfigParametersType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
				->add('permissions', 'text', array(
					'required' => false,
					'label' => false
				))
				->add('phonegap_version','text', array(
					'required' => false,
					'label' => false
				))
				->add('orientation','choice', array(
					'required' => false,
					'label' => false,
					'choices'=> array('default' => 'default',
									  'landscape' => 'landscape',
									  'portrait' => 'portrait'),
				))
				->add('target_device','choice', array(
						'required' => false,
						'label' => false,
						'choices' => array('universal' => 'universal',
								'handset' => 'handset',
								'tablet' => 'tablet')
				))
				->add('fullscreen','checkbox', array(
					'required' => false,
					'label' => false
				))
				
				->add('webviewbounce','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('prerendered_icon','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('stay_in_webview','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('ios_statusbarstyle','text', array(
					'required' => false,
					'label' => false
				))
				->add('detect_data_types','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('exit_on_suspend','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('show_splash_screen_spinner','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('auto_hide_splash_screen','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('disable_cursor','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('android_minSdkVersion','text', array(
					'required' => false,
					'label' => false
				))
				->add('android_installLocation','choice', array(
					'required' => false,
					'label' => false,
					'choices' => array(
							'auto' => 'auto',
							'internalOnly'=> 'internalOnly',
							'preferExternal' => 'preferExternal')
				))
				->add('disallowOverscroll','checkbox', array(
					'required' => false,
					'label' => false
				))
				->add('splash_screen_duration','text', array(
					'required' => false,
					'label' => false
				))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\CoreBundle\Entity\ConfigParameters'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_corebundle_configparameters';
    }
}
