<?php
/************************************************************************
 * Keosu is an open source CMS for mobile app
 * Copyright (C) 2016  Pockeit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/

namespace Keosu\CoreBundle\Form;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\GadgetFormBuilderEvent;
use Keosu\CoreBundle\Service\PackageManager;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * This class allow to personalise the config of a gadget
 */
class ConfigGadgetType extends AbstractType
{

    private $dispatcher;

    private $gadget;

    private $packageManager;

    private $typeMapping = array();

    public function __construct()
    {
        $this->typeMapping['choice'] = ChoiceType::class;
        $this->typeMapping['text'] = TextType::class;
        $this->typeMapping['textarea'] = TextareaType::class;
        $this->typeMapping['number'] = NumberType::class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->gadget = $options['gadget'];
        $this->request = $options['request'];
        $this->dispatcher = $options['dispatcher'];
        $this->packageManager = $options['package_manager'];;
        $event = new GadgetFormBuilderEvent($builder, $this->request, $this->gadget);
        $this->dispatcher->dispatch(KeosuEvents::GADGET_CONF_FORM_BUILD . $this->gadget->getName(), $event);
        if (!$event->isOverrideForm()) {
            $config = $this->packageManager->getConfigPackage($this->gadget->getName());
            if (isset($config['param'])) {
                $params = $config['param'];
                foreach ($params as $p) {
                    if ($builder->has($p['name']))
                        throw new \LogicException('The property ' . $p['name'] . ' already exists, maybe you forgot to enable overrideForm ?');

                    if (isset($p['options']))
                        $builder->add($p['name'], $this->typeMapping[$p['type']], $p['options']);
                    else
                        $builder->add($p['name'], $this->typeMapping[$p['type']]);
                }
            }
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined(array('gadget'));
        $resolver->setDefined(array('request'));
        $resolver->setDefined(array('dispatcher'));
        $resolver->setDefined(array('package_manager'));
        $resolver
            ->setDefaults(
                array(
                    'gadget' => null,
                    'request' => null,
                    'dispatcher' => null,
                    'package_manager' => null));
    }

    public function getName()
    {
        return 'keosu_core.configgadget_type';
    }
}
