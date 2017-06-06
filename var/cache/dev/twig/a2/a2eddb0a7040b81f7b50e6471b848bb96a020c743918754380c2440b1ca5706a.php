<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_b507afc5187248580d1f4f1089a4f64fbb6997aa8d1f775706f755a466372fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'help_label' => array($this, 'block_help_label'),
                'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
                'help_block_tooltip' => array($this, 'block_help_block_tooltip'),
                'help_label_popover' => array($this, 'block_help_label_popover'),
                'help_block_popover' => array($this, 'block_help_block_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
                'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'widget_btns' => array($this, 'block_widget_btns'),
                'form_errors' => array($this, 'block_form_errors'),
                'error_type' => array($this, 'block_error_type'),
                'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
                'help_widget_popover' => array($this, 'block_help_widget_popover'),
                'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c7da284ee0a82544539c87c0410bf46af4155e1738ffe4b8139adc40670d559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7da284ee0a82544539c87c0410bf46af4155e1738ffe4b8139adc40670d559->enter($__internal_5c7da284ee0a82544539c87c0410bf46af4155e1738ffe4b8139adc40670d559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Form:fields.html.twig"));

        // line 2
        echo "
";
        // line 4
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('button_row', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_tab', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 195
        echo "

";
        // line 197
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 282
        echo "
";
        // line 283
        $this->displayBlock('date_widget', $context, $blocks);
        // line 315
        echo "
";
        // line 316
        $this->displayBlock('time_widget', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('money_widget', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('file_widget', $context, $blocks);
        // line 413
        echo "
";
        // line 415
        echo "
";
        // line 416
        $this->displayBlock('form_legend', $context, $blocks);
        // line 431
        echo "
";
        // line 432
        $this->displayBlock('form_label', $context, $blocks);
        // line 474
        echo "
";
        // line 475
        $this->displayBlock('help_label', $context, $blocks);
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('help_label_tooltip', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('help_block_tooltip', $context, $blocks);
        // line 496
        echo "
";
        // line 497
        $this->displayBlock('help_label_popover', $context, $blocks);
        // line 509
        echo "
";
        // line 510
        $this->displayBlock('help_block_popover', $context, $blocks);
        // line 514
        echo "
";
        // line 515
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 522
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 525
        echo "
";
        // line 526
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('form_row', $context, $blocks);
        // line 578
        echo "
";
        // line 580
        echo "
";
        // line 581
        $this->displayBlock('form_message', $context, $blocks);
        // line 590
        echo "
";
        // line 592
        echo "
";
        // line 593
        $this->displayBlock('form_help', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_widget_add_btn', $context, $blocks);
        // line 614
        echo "
";
        // line 615
        $this->displayBlock('form_widget_remove_btn', $context, $blocks);
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('collection_button', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 656
        echo "
";
        // line 657
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 664
        echo "
";
        // line 665
        $this->displayBlock('widget_btns', $context, $blocks);
        // line 678
        echo "
";
        // line 680
        echo "
";
        // line 681
        $this->displayBlock('form_errors', $context, $blocks);
        // line 707
        echo "
";
        // line 709
        echo "
";
        // line 710
        $this->displayBlock('error_type', $context, $blocks);
        // line 721
        echo "
";
        // line 723
        echo "
";
        // line 724
        $this->displayBlock('widget_form_group_start', $context, $blocks);
        // line 761
        echo "
";
        // line 762
        $this->displayBlock('help_widget_popover', $context, $blocks);
        // line 769
        echo "
";
        // line 770
        $this->displayBlock('widget_form_group_end', $context, $blocks);
        
        $__internal_5c7da284ee0a82544539c87c0410bf46af4155e1738ffe4b8139adc40670d559->leave($__internal_5c7da284ee0a82544539c87c0410bf46af4155e1738ffe4b8139adc40670d559_prof);

    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2d2da2ef916a69b9109e65a6773aab05c9ba7fba0c34e89b03e8791a5f42b633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2da2ef916a69b9109e65a6773aab05c9ba7fba0c34e89b03e8791a5f42b633->enter($__internal_2d2da2ef916a69b9109e65a6773aab05c9ba7fba0c34e89b03e8791a5f42b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
        
        $__internal_2d2da2ef916a69b9109e65a6773aab05c9ba7fba0c34e89b03e8791a5f42b633->leave($__internal_2d2da2ef916a69b9109e65a6773aab05c9ba7fba0c34e89b03e8791a5f42b633_prof);

    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_38670eb6d206911100bab172841f51f0897353dcd4c264fdf58b5831708c2673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38670eb6d206911100bab172841f51f0897353dcd4c264fdf58b5831708c2673->enter($__internal_38670eb6d206911100bab172841f51f0897353dcd4c264fdf58b5831708c2673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 12
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 13
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 14
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 15
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 18
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 21
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 22
        if ( !twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) {
            // line 23
            echo "            ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) ? $context["icon_inverted"] : $this->getContext($context, "icon_inverted")), false)) : (false)));
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_38670eb6d206911100bab172841f51f0897353dcd4c264fdf58b5831708c2673->leave($__internal_38670eb6d206911100bab172841f51f0897353dcd4c264fdf58b5831708c2673_prof);

    }

    // line 29
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a73f6235590ce3af5b3158086446b2a41bdb93e07d75de4e25ac7a3109a22f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73f6235590ce3af5b3158086446b2a41bdb93e07d75de4e25ac7a3109a22f6e->enter($__internal_a73f6235590ce3af5b3158086446b2a41bdb93e07d75de4e25ac7a3109a22f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        if ((array_key_exists("button_offset", $context) &&  !twig_test_empty((isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset"))))) {
            // line 32
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "class" => (isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset"))));
            // line 33
            echo "            <div class=\"form-group\">
                <div ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div>
                ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            </div>
        ";
        }
        // line 43
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a73f6235590ce3af5b3158086446b2a41bdb93e07d75de4e25ac7a3109a22f6e->leave($__internal_a73f6235590ce3af5b3158086446b2a41bdb93e07d75de4e25ac7a3109a22f6e_prof);

    }

    // line 48
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ed46d896dfa8b5fe8c98a61ba034ca150cafb7a784b2cca315bcb4a47ad7064d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed46d896dfa8b5fe8c98a61ba034ca150cafb7a784b2cca315bcb4a47ad7064d->enter($__internal_ed46d896dfa8b5fe8c98a61ba034ca150cafb7a784b2cca315bcb4a47ad7064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 49
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 50
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_ed46d896dfa8b5fe8c98a61ba034ca150cafb7a784b2cca315bcb4a47ad7064d->leave($__internal_ed46d896dfa8b5fe8c98a61ba034ca150cafb7a784b2cca315bcb4a47ad7064d_prof);

    }

    // line 53
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6d327d13ab4b74155e8373aea8228d7b5b5aa537dbccecbf2cf559327e3640cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d327d13ab4b74155e8373aea8228d7b5b5aa537dbccecbf2cf559327e3640cb->enter($__internal_6d327d13ab4b74155e8373aea8228d7b5b5aa537dbccecbf2cf559327e3640cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 54
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 55
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))))) {
            // line 56
            echo "    <div class=\"input-group\">
        ";
            // line 57
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
                // line 58
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 59
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 63
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 64
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))))) {
            // line 65
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 66
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 67
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 69
            echo "    </div>
    ";
        }
        
        $__internal_6d327d13ab4b74155e8373aea8228d7b5b5aa537dbccecbf2cf559327e3640cb->leave($__internal_6d327d13ab4b74155e8373aea8228d7b5b5aa537dbccecbf2cf559327e3640cb_prof);

    }

    // line 73
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7891de7b89df4624679b529caf47ebf4542b986a3599371f55a4bdbd4f9b7213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7891de7b89df4624679b529caf47ebf4542b986a3599371f55a4bdbd4f9b7213->enter($__internal_7891de7b89df4624679b529caf47ebf4542b986a3599371f55a4bdbd4f9b7213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 74
        ob_start();
        // line 75
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 76
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))))) {
            // line 77
            echo "    <div class=\"input-group\">
        ";
            // line 78
            if ( !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) {
                // line 79
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend"));
                // line 80
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 82
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
                // line 83
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 84
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 86
            echo "    ";
        }
        // line 87
        echo "    ";
        if ( !((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 88
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " not-removable")));
            // line 89
            echo "    ";
        }
        // line 90
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class"))))));
        // line 91
        echo "    ";
        if (((isset($context["static_text"]) ? $context["static_text"] : $this->getContext($context, "static_text")) === true)) {
            // line 92
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 94
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 96
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))))) {
            // line 97
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 98
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 99
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 101
            echo "        ";
            if ( !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))) {
                // line 102
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append"));
                // line 103
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 105
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7891de7b89df4624679b529caf47ebf4542b986a3599371f55a4bdbd4f9b7213->leave($__internal_7891de7b89df4624679b529caf47ebf4542b986a3599371f55a4bdbd4f9b7213_prof);

    }

    // line 110
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_02f5c55e60ee74ef43528171b7c0c8a418c080c144ca19ade8e1ed247a95edbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f5c55e60ee74ef43528171b7c0c8a418c080c144ca19ade8e1ed247a95edbe->enter($__internal_02f5c55e60ee74ef43528171b7c0c8a418c080c144ca19ade8e1ed247a95edbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 111
        ob_start();
        // line 112
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 113
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "<fieldset>";
            }
            // line 114
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : $this->getContext($context, "show_legend"))) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 115
            echo "    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabbed", array())) {
            // line 118
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 124
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabbed", array())) {
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 130
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 131
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "</fieldset>";
            }
            // line 132
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_02f5c55e60ee74ef43528171b7c0c8a418c080c144ca19ade8e1ed247a95edbe->leave($__internal_02f5c55e60ee74ef43528171b7c0c8a418c080c144ca19ade8e1ed247a95edbe_prof);

    }

    // line 136
    public function block_form_tabs($context, array $blocks = array())
    {
        $__internal_e8a061d7e7e476baef1b0e171c44fd5e118170263581059238ae52438d846d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a061d7e7e476baef1b0e171c44fd5e118170263581059238ae52438d846d08->enter($__internal_e8a061d7e7e476baef1b0e171c44fd5e118170263581059238ae52438d846d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        // line 137
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
        
        $__internal_e8a061d7e7e476baef1b0e171c44fd5e118170263581059238ae52438d846d08->leave($__internal_e8a061d7e7e476baef1b0e171c44fd5e118170263581059238ae52438d846d08_prof);

    }

    // line 142
    public function block_tabs_widget($context, array $blocks = array())
    {
        $__internal_a6ee53a2374902fc70f7acedc419401832286fea00f64fe70bae81a386f5ab34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ee53a2374902fc70f7acedc419401832286fea00f64fe70bae81a386f5ab34->enter($__internal_a6ee53a2374902fc70f7acedc419401832286fea00f64fe70bae81a386f5ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        // line 143
        ob_start();
        // line 144
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 146
            echo "        ";
            $context["class"] = ((($this->getAttribute($context["tab"], "active", array())) ? ("active ") : ("")) . (($this->getAttribute($context["tab"], "disabled", array())) ? ("disabled") : ("")));
            // line 147
            echo "        <li";
            if ( !twig_test_empty(twig_trim_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 149
            if ($this->getAttribute($context["tab"], "icon", array())) {
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, $this->getAttribute($context["tab"], "icon", array()));
            }
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "label", array()), array(), $this->getAttribute($context["tab"], "translation_domain", array())), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a6ee53a2374902fc70f7acedc419401832286fea00f64fe70bae81a386f5ab34->leave($__internal_a6ee53a2374902fc70f7acedc419401832286fea00f64fe70bae81a386f5ab34_prof);

    }

    // line 158
    public function block_form_tab($context, array $blocks = array())
    {
        $__internal_97ff3dbba086b141178dacaa70c163af7ad0e71e3b1a05254b7369794f132cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff3dbba086b141178dacaa70c163af7ad0e71e3b1a05254b7369794f132cfa->enter($__internal_97ff3dbba086b141178dacaa70c163af7ad0e71e3b1a05254b7369794f132cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        // line 159
        echo "    ";
        $context["tab_attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((("tab-pane" . (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tab_active", array())) ? (" active") : (""))) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 160
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_attr"]) ? $context["tab_attr"] : $this->getContext($context, "tab_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 161
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_97ff3dbba086b141178dacaa70c163af7ad0e71e3b1a05254b7369794f132cfa->leave($__internal_97ff3dbba086b141178dacaa70c163af7ad0e71e3b1a05254b7369794f132cfa_prof);

    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_beeb43f555791628fa9bc9750d55a3f7338ade82ccca95795479db5dd00ebad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeb43f555791628fa9bc9750d55a3f7338ade82ccca95795479db5dd00ebad3->enter($__internal_beeb43f555791628fa9bc9750d55a3f7338ade82ccca95795479db5dd00ebad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            $context["prototype_markup"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row');
            // line 169
            echo "        ";
            $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 170
            echo "        ";
            $context["data_prototype_label"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 171
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("data-prototype" =>             // line 172
(isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), "data-prototype-name" =>             // line 173
(isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : $this->getContext($context, "data_prototype_name")), "data-prototype-label" =>             // line 174
(isset($context["data_prototype_label"]) ? $context["data_prototype_label"] : $this->getContext($context, "data_prototype_label")))),             // line 175
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 176
            echo "    ";
        }
        // line 177
        echo "    ";
        // line 178
        echo "\t";
        if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
            // line 179
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => (((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "row")) : ("row")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()))));
            // line 180
            echo "\t";
        }
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("id" => (("collection" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group"), "class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), "class", array()) . " collection-items ") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group")));
        // line 183
        echo "
    <div ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 186
        echo "    ";
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 187
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype_names"]) ? $context["prototype_names"] : $this->getContext($context, "prototype_names")));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 188
                echo "            ";
                echo twig_replace_filter((isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "    ";
        }
        // line 191
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_beeb43f555791628fa9bc9750d55a3f7338ade82ccca95795479db5dd00ebad3->leave($__internal_beeb43f555791628fa9bc9750d55a3f7338ade82ccca95795479db5dd00ebad3_prof);

    }

    // line 197
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d925cf1fb560d3c6017ed22c0f87bac0f67faca3a77000c42ba35c88b94764ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d925cf1fb560d3c6017ed22c0f87bac0f67faca3a77000c42ba35c88b94764ee->enter($__internal_d925cf1fb560d3c6017ed22c0f87bac0f67faca3a77000c42ba35c88b94764ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 198
        echo "    ";
        ob_start();
        // line 199
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 200
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 201
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 202
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")))));
            // line 203
            echo "        ";
        }
        // line 204
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
            // line 205
            echo "            <div class=\"btn-group\" data-toggle=\"buttons\">
        ";
        }
        // line 207
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 208
            echo "            ";
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")), array(0 => "inline", 1 => "inline-btn"))) {
                // line 209
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\"";
                // line 210
                if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                    echo " class=\"btn-group\" data-toggle=\"buttons\"";
                }
                echo ">
            ";
            }
            // line 212
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                // line 213
                echo "                ";
                $context["label_attr"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array())), array("class" => ("btn " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 214
                echo "            ";
            }
            // line 215
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "checked", array()) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn"))) {
                // line 216
                echo "                ";
                $context["label_attr_copy"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array())), array("class" => ("active " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 217
                echo "            ";
            } else {
                // line 218
                echo "                ";
                $context["label_attr_copy"] = ((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array()));
                // line 219
                echo "            ";
            }
            // line 220
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr_copy"]) ? $context["label_attr_copy"] : $this->getContext($context, "label_attr_copy")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 221
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 222
            if ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn") || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")) == "widget"))) {
                // line 223
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                echo "
            ";
            } else {
                // line 225
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
            ";
            }
            // line 227
            echo "            </label>
            ";
            // line 228
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")), array(0 => "inline", 1 => "inline-btn"))) {
                // line 229
                echo "                </div>
            ";
            }
            // line 231
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
            // line 233
            echo "            </div>
        ";
        }
        // line 235
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d925cf1fb560d3c6017ed22c0f87bac0f67faca3a77000c42ba35c88b94764ee->leave($__internal_d925cf1fb560d3c6017ed22c0f87bac0f67faca3a77000c42ba35c88b94764ee_prof);

    }

    // line 238
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cd5c3b315b1b3763e22fc5391a9f71f5eebeabb028cd6ce271f74976a95a4443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5c3b315b1b3763e22fc5391a9f71f5eebeabb028cd6ce271f74976a95a4443->enter($__internal_cd5c3b315b1b3763e22fc5391a9f71f5eebeabb028cd6ce271f74976a95a4443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 241
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 242
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 243
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 244
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 247
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 250
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 251
            echo "            <div";
            // line 252
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                echo " class=\"btn-group\" data-toggle=\"buttons\"";
            } else {
                // line 253
                echo " class=\"checkbox\"";
            }
            // line 254
            echo ">
        ";
        }
        // line 256
        echo "        ";
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 257
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                // line 258
                echo "                ";
                $context["label_attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()));
                // line 259
                echo "                ";
                if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
                    // line 260
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ("active " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
                    // line 261
                    echo "                ";
                }
                // line 262
                echo "            ";
            }
            // line 263
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            if ( !(isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                echo " class=\"checkbox-inline\"";
            }
            echo ">
        ";
        }
        // line 266
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 267
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 268
            echo "            ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 269
                echo "                ";
                if (twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget"))) {
                    // line 270
                    echo "                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                    echo "
                ";
                } else {
                    // line 272
                    echo "                    ";
                    $this->displayBlock("form_help", $context, $blocks);
                    echo "
                ";
                }
                // line 274
                echo "                </label>
            ";
            }
            // line 276
            echo "        ";
        }
        // line 277
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 278
            echo "            </div>
        ";
        }
        // line 280
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cd5c3b315b1b3763e22fc5391a9f71f5eebeabb028cd6ce271f74976a95a4443->leave($__internal_cd5c3b315b1b3763e22fc5391a9f71f5eebeabb028cd6ce271f74976a95a4443_prof);

    }

    // line 283
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b94ebe8aca37aceafd2783d0a38269ae987add261f52fa67f56190a72c476901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94ebe8aca37aceafd2783d0a38269ae987add261f52fa67f56190a72c476901->enter($__internal_b94ebe8aca37aceafd2783d0a38269ae987add261f52fa67f56190a72c476901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 284
        ob_start();
        // line 285
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 286
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 287
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("calendar"));
                // line 288
                echo "        <div ";
                if ($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : $this->getContext($context, "datepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"";
                // line 289
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 290
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 291
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 293
                echo "            ";
                // line 294
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 295
                echo "            ";
                $context["full_name"] = null;
                // line 296
                echo "            ";
                $context["type"] = "text";
                // line 297
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 298
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
        </div>
    ";
            } else {
                // line 301
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 304
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "inline")) : ("inline"))));
            // line 305
            echo "    \t<div class=\"row\">
        ";
            // line 306
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" . (($this->getAttribute(            // line 307
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ month }}" => (((("<div class=\"" . (($this->getAttribute(            // line 308
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ day }}" => (((("<div class=\"" . (($this->getAttribute(            // line 309
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>")));
            // line 310
            echo "
        </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b94ebe8aca37aceafd2783d0a38269ae987add261f52fa67f56190a72c476901->leave($__internal_b94ebe8aca37aceafd2783d0a38269ae987add261f52fa67f56190a72c476901_prof);

    }

    // line 316
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_74ca2810a369e3a62915f841a96ddcb19f0a76160b7cd0fe09de12d5f6ec2b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ca2810a369e3a62915f841a96ddcb19f0a76160b7cd0fe09de12d5f6ec2b1a->enter($__internal_74ca2810a369e3a62915f841a96ddcb19f0a76160b7cd0fe09de12d5f6ec2b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 317
        ob_start();
        // line 318
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 319
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 320
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("time"));
                // line 321
                echo "        <div ";
                if ($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : $this->getContext($context, "timepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"";
                // line 322
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 323
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 324
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 326
                echo "            ";
                // line 327
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 328
                echo "            ";
                $context["full_name"] = null;
                // line 329
                echo "            ";
                $context["type"] = "text";
                // line 330
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 331
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
        </div>
    ";
            } else {
                // line 334
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 337
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 338
            echo "    ";
            ob_start();
            // line 339
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
            echo "
    ";
            // line 340
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 341
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 343
            echo "    ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 344
                echo "        :";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 346
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_74ca2810a369e3a62915f841a96ddcb19f0a76160b7cd0fe09de12d5f6ec2b1a->leave($__internal_74ca2810a369e3a62915f841a96ddcb19f0a76160b7cd0fe09de12d5f6ec2b1a_prof);

    }

    // line 351
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4d498ea903bd2481bfcb434e5c9e4f12c503170abe708274b457e7f7da602e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d498ea903bd2481bfcb434e5c9e4f12c503170abe708274b457e7f7da602e4b->enter($__internal_4d498ea903bd2481bfcb434e5c9e4f12c503170abe708274b457e7f7da602e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 352
        ob_start();
        // line 353
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 354
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 355
                echo "            ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("th"));
                // line 356
                echo "            <div ";
                if ($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : $this->getContext($context, "datetimepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"";
                // line 357
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                ";
                // line 358
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 359
                    echo "                    <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
                ";
                }
                // line 361
                echo "                ";
                // line 362
                echo "                ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 363
                echo "                ";
                $context["full_name"] = null;
                // line 364
                echo "                ";
                $context["type"] = "text";
                // line 365
                echo "                ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
                <span class=\"input-group-addon\">";
                // line 366
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
            </div>
        ";
            } else {
                // line 369
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 371
            echo "    ";
        } else {
            // line 372
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 373
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 374
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                ";
            // line 375
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
                ";
            // line 376
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-3")) : ("col-sm-3"))));
            echo "
                ";
            // line 377
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4d498ea903bd2481bfcb434e5c9e4f12c503170abe708274b457e7f7da602e4b->leave($__internal_4d498ea903bd2481bfcb434e5c9e4f12c503170abe708274b457e7f7da602e4b_prof);

    }

    // line 383
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_eff6fcd681ac3fa0f6d2eea9e5c010c1209912f093a516715710da6f90abbafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff6fcd681ac3fa0f6d2eea9e5c010c1209912f093a516715710da6f90abbafa->enter($__internal_eff6fcd681ac3fa0f6d2eea9e5c010c1209912f093a516715710da6f90abbafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 384
        ob_start();
        // line 385
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), array("text" => (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array()), "%")) : ("%"))));
        // line 386
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eff6fcd681ac3fa0f6d2eea9e5c010c1209912f093a516715710da6f90abbafa->leave($__internal_eff6fcd681ac3fa0f6d2eea9e5c010c1209912f093a516715710da6f90abbafa_prof);

    }

    // line 390
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0714a4df5f7a5de95fb495ef3d264cb03fb532c47b6c978172db32d19eeda976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0714a4df5f7a5de95fb495ef3d264cb03fb532c47b6c978172db32d19eeda976->enter($__internal_0714a4df5f7a5de95fb495ef3d264cb03fb532c47b6c978172db32d19eeda976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 391
        ob_start();
        // line 392
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) != false) || ((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) == null)) && ((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) != "{{ widget }}"))) ? (array("text" => twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))));
        // line 393
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0714a4df5f7a5de95fb495ef3d264cb03fb532c47b6c978172db32d19eeda976->leave($__internal_0714a4df5f7a5de95fb495ef3d264cb03fb532c47b6c978172db32d19eeda976_prof);

    }

    // line 397
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_32815e6111506d0703689049768f5738063a465652756bfcef1db79074477925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32815e6111506d0703689049768f5738063a465652756bfcef1db79074477925->enter($__internal_32815e6111506d0703689049768f5738063a465652756bfcef1db79074477925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 398
        ob_start();
        // line 399
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "file")) : ("file"));
        // line 400
        echo "    ";
        if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
            // line 401
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
            // line 402
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 404
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 405
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") &&  !(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array()), null)) : (null))))) {
            // line 406
            echo "    ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 407
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 408
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_32815e6111506d0703689049768f5738063a465652756bfcef1db79074477925->leave($__internal_32815e6111506d0703689049768f5738063a465652756bfcef1db79074477925_prof);

    }

    // line 416
    public function block_form_legend($context, array $blocks = array())
    {
        $__internal_f8c365459f790de044093ec5f96a019768ccf5f8c1569628b1a12ea46bb604e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c365459f790de044093ec5f96a019768ccf5f8c1569628b1a12ea46bb604e1->enter($__internal_f8c365459f790de044093ec5f96a019768ccf5f8c1569628b1a12ea46bb604e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        // line 417
        ob_start();
        // line 418
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 419
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 420
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 421
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 422
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 425
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 428
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f8c365459f790de044093ec5f96a019768ccf5f8c1569628b1a12ea46bb604e1->leave($__internal_f8c365459f790de044093ec5f96a019768ccf5f8c1569628b1a12ea46bb604e1_prof);

    }

    // line 432
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ba2d27cb87919a9f3401f81c528d84231ffbaadde0c9d934b43e83ea70853bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2d27cb87919a9f3401f81c528d84231ffbaadde0c9d934b43e83ea70853bbd->enter($__internal_ba2d27cb87919a9f3401f81c528d84231ffbaadde0c9d934b43e83ea70853bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 433
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "label", 1 => "both")))) {
            // line 434
            ob_start();
            // line 435
            echo "    ";
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 436
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 437
                    if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                        // line 438
                        $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                         // line 439
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                         // line 440
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    } else {
                        // line 443
                        $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                    }
                }
                // line 446
                echo "        ";
                if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                    // line 447
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 448
                    echo "        ";
                }
                // line 449
                echo "        ";
                $context["label_attr_class"] = "";
                // line 450
                echo "        ";
                if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                    // line 451
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")));
                    // line 452
                    echo "        ";
                }
                // line 453
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional"))))));
                // line 454
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 455
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 456
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 457
                if (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_add", array()) == true))) {
                    // line 458
                    echo "            &nbsp;";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 460
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label"))) {
                    // line 461
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 463
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title", array())) {
                    // line 464
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 466
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title", array())) {
                    // line 467
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 469
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_ba2d27cb87919a9f3401f81c528d84231ffbaadde0c9d934b43e83ea70853bbd->leave($__internal_ba2d27cb87919a9f3401f81c528d84231ffbaadde0c9d934b43e83ea70853bbd_prof);

    }

    // line 475
    public function block_help_label($context, array $blocks = array())
    {
        $__internal_1ce92abc37dc1f23dc4ef263e337ff9c3b61df2e58f753d18a398c3cd88a9658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce92abc37dc1f23dc4ef263e337ff9c3b61df2e58f753d18a398c3cd88a9658->enter($__internal_1ce92abc37dc1f23dc4ef263e337ff9c3b61df2e58f753d18a398c3cd88a9658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label"));

        // line 476
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</span>
";
        
        $__internal_1ce92abc37dc1f23dc4ef263e337ff9c3b61df2e58f753d18a398c3cd88a9658->leave($__internal_1ce92abc37dc1f23dc4ef263e337ff9c3b61df2e58f753d18a398c3cd88a9658_prof);

    }

    // line 479
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        $__internal_89717170577457887621756b94eb6defcfcbb63e9ab92d10ea5675e26de15377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89717170577457887621756b94eb6defcfcbb63e9ab92d10ea5675e26de15377->enter($__internal_89717170577457887621756b94eb6defcfcbb63e9ab92d10ea5675e26de15377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_tooltip"));

        // line 480
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\">
            ";
        // line 482
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon", array()) === false)) {
            // line 483
            echo "                ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon", array()));
            echo "
            ";
        }
        // line 485
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text", array()) === null)) {
            // line 486
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 488
        echo "        </a>
    </span>
";
        
        $__internal_89717170577457887621756b94eb6defcfcbb63e9ab92d10ea5675e26de15377->leave($__internal_89717170577457887621756b94eb6defcfcbb63e9ab92d10ea5675e26de15377_prof);

    }

    // line 492
    public function block_help_block_tooltip($context, array $blocks = array())
    {
        $__internal_27d119e70543ca9d9ae0aaac4b752e6d377b803ada443fc851201329678b43c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d119e70543ca9d9ae0aaac4b752e6d377b803ada443fc851201329678b43c6->enter($__internal_27d119e70543ca9d9ae0aaac4b752e6d377b803ada443fc851201329678b43c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_tooltip"));

        // line 493
        echo "    ";
        $context["help_label_tooltip"] = (isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : $this->getContext($context, "help_block_tooltip"));
        // line 494
        echo "    ";
        $this->displayBlock("help_label_tooltip", $context, $blocks);
        echo "
";
        
        $__internal_27d119e70543ca9d9ae0aaac4b752e6d377b803ada443fc851201329678b43c6->leave($__internal_27d119e70543ca9d9ae0aaac4b752e6d377b803ada443fc851201329678b43c6_prof);

    }

    // line 497
    public function block_help_label_popover($context, array $blocks = array())
    {
        $__internal_ceef1b0c0ccd0a6ed1a0dceb25eb8b725fa08e6829c4fd453331793b6ac0d7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceef1b0c0ccd0a6ed1a0dceb25eb8b725fa08e6829c4fd453331793b6ac0d7d1->enter($__internal_ceef1b0c0ccd0a6ed1a0dceb25eb8b725fa08e6829c4fd453331793b6ac0d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_popover"));

        // line 498
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "content", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-html=\"true\">
            ";
        // line 500
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon", array()) === false)) {
            // line 501
            echo "                ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon", array()));
            echo "
            ";
        }
        // line 503
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text", array()) === null)) {
            // line 504
            echo "                ";
            echo $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text", array());
            echo "
            ";
        }
        // line 506
        echo "        </a>
    </span>
";
        
        $__internal_ceef1b0c0ccd0a6ed1a0dceb25eb8b725fa08e6829c4fd453331793b6ac0d7d1->leave($__internal_ceef1b0c0ccd0a6ed1a0dceb25eb8b725fa08e6829c4fd453331793b6ac0d7d1_prof);

    }

    // line 510
    public function block_help_block_popover($context, array $blocks = array())
    {
        $__internal_de6354eae7dee2f137319401f10cb9783a4a94710b76cbf9f95fc98fb5e13c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6354eae7dee2f137319401f10cb9783a4a94710b76cbf9f95fc98fb5e13c5d->enter($__internal_de6354eae7dee2f137319401f10cb9783a4a94710b76cbf9f95fc98fb5e13c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_popover"));

        // line 511
        echo "    ";
        $context["help_label_popover"] = (isset($context["help_block_popover"]) ? $context["help_block_popover"] : $this->getContext($context, "help_block_popover"));
        // line 512
        echo "    ";
        $this->displayBlock("help_label_popover", $context, $blocks);
        echo "
";
        
        $__internal_de6354eae7dee2f137319401f10cb9783a4a94710b76cbf9f95fc98fb5e13c5d->leave($__internal_de6354eae7dee2f137319401f10cb9783a4a94710b76cbf9f95fc98fb5e13c5d_prof);

    }

    // line 515
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_04756b723866c2b56b5b3b7257734ef61628509ecf2e24d0aaf32c6925a62649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04756b723866c2b56b5b3b7257734ef61628509ecf2e24d0aaf32c6925a62649->enter($__internal_04756b723866c2b56b5b3b7257734ef61628509ecf2e24d0aaf32c6925a62649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 516
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 517
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 518
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_04756b723866c2b56b5b3b7257734ef61628509ecf2e24d0aaf32c6925a62649->leave($__internal_04756b723866c2b56b5b3b7257734ef61628509ecf2e24d0aaf32c6925a62649_prof);

    }

    // line 522
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_a03b748d32a5a137f950b0765cdd1e3cdaf745dc3be0615a0b4758b913e97eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03b748d32a5a137f950b0765cdd1e3cdaf745dc3be0615a0b4758b913e97eeb->enter($__internal_a03b748d32a5a137f950b0765cdd1e3cdaf745dc3be0615a0b4758b913e97eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 523
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_a03b748d32a5a137f950b0765cdd1e3cdaf745dc3be0615a0b4758b913e97eeb->leave($__internal_a03b748d32a5a137f950b0765cdd1e3cdaf745dc3be0615a0b4758b913e97eeb_prof);

    }

    // line 526
    public function block_form_rows_visible($context, array $blocks = array())
    {
        $__internal_68b08269c506055ae4a2f09a450eb615e0f88d2c584eb16faa68e7294f63309e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b08269c506055ae4a2f09a450eb615e0f88d2c584eb16faa68e7294f63309e->enter($__internal_68b08269c506055ae4a2f09a450eb615e0f88d2c584eb16faa68e7294f63309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        // line 527
        ob_start();
        // line 528
        echo "     ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 529
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 530
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 533
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 534
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 535
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 537
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_68b08269c506055ae4a2f09a450eb615e0f88d2c584eb16faa68e7294f63309e->leave($__internal_68b08269c506055ae4a2f09a450eb615e0f88d2c584eb16faa68e7294f63309e_prof);

    }

    // line 541
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bb443cd0d5ed7cbd5be19c47265191649160144ef14b37c2fbe07a55e484e60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb443cd0d5ed7cbd5be19c47265191649160144ef14b37c2fbe07a55e484e60c->enter($__internal_bb443cd0d5ed7cbd5be19c47265191649160144ef14b37c2fbe07a55e484e60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 542
        ob_start();
        // line 543
        echo "    ";
        if (twig_in_filter("tab", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()))) {
            // line 544
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 545
(isset($context["embed_form"]) ? $context["embed_form"] : $this->getContext($context, "embed_form")) === true)) {
            // line 546
            echo "        ";
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            // line 547
            echo "    ";
        } else {
            // line 548
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 550
            $context["show_horizontal_wrapper"] = ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) &&  !(( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "horizontal_wrap_children", array()) === false)));
            // line 551
            echo "
        ";
            // line 552
            if (((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) &&  !(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
                // line 553
                echo "            ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : $this->getContext($context, "horizontal_label_offset_class")));
                // line 554
                echo "        ";
            }
            // line 555
            echo "
        ";
            // line 556
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : $this->getContext($context, "show_horizontal_wrapper"))) {
                // line 557
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
                echo "\">
        ";
            }
            // line 559
            echo "
        ";
            // line 560
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            // line 561
            echo "
        ";
            // line 562
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
            // line 563
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden")) {
                // line 564
                echo "        ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
        ";
            }
            // line 566
            echo "
        ";
            // line 567
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : $this->getContext($context, "show_horizontal_wrapper"))) {
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if (((( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) && (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 572
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 574
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb443cd0d5ed7cbd5be19c47265191649160144ef14b37c2fbe07a55e484e60c->leave($__internal_bb443cd0d5ed7cbd5be19c47265191649160144ef14b37c2fbe07a55e484e60c_prof);

    }

    // line 581
    public function block_form_message($context, array $blocks = array())
    {
        $__internal_5743a0fc4e77d5842fa67d15dcf4ec78c876b5108838fbbf55eea9798d4016d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5743a0fc4e77d5842fa67d15dcf4ec78c876b5108838fbbf55eea9798d4016d3->enter($__internal_5743a0fc4e77d5842fa67d15dcf4ec78c876b5108838fbbf55eea9798d4016d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        // line 582
        ob_start();
        // line 583
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 585
        if (((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")) != "label")) && (isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")))) {
            // line 586
            echo "        ";
            $this->displayBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5743a0fc4e77d5842fa67d15dcf4ec78c876b5108838fbbf55eea9798d4016d3->leave($__internal_5743a0fc4e77d5842fa67d15dcf4ec78c876b5108838fbbf55eea9798d4016d3_prof);

    }

    // line 593
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_0a6ae1285238e14c3f2bf75003c9d9ed5e47f221d6c8549f503ba6c142805285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6ae1285238e14c3f2bf75003c9d9ed5e47f221d6c8549f503ba6c142805285->enter($__internal_0a6ae1285238e14c3f2bf75003c9d9ed5e47f221d6c8549f503ba6c142805285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 594
        ob_start();
        // line 595
        echo "    ";
        if ((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block"))) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</p>";
        }
        // line 596
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : $this->getContext($context, "help_block_tooltip")), "title", array())) {
            // line 597
            echo "        &nbsp;";
            $this->displayBlock("help_block_tooltip", $context, $blocks);
            echo "
    ";
        }
        // line 599
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_popover"]) ? $context["help_block_popover"] : $this->getContext($context, "help_block_popover")), "title", array())) {
            // line 600
            echo "        &nbsp;";
            $this->displayBlock("help_block_popover", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0a6ae1285238e14c3f2bf75003c9d9ed5e47f221d6c8549f503ba6c142805285->leave($__internal_0a6ae1285238e14c3f2bf75003c9d9ed5e47f221d6c8549f503ba6c142805285_prof);

    }

    // line 605
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        $__internal_e6dcd295d23fbc11b58c2515a419d24063c250ab9b73c1c368ef83eda3cbfb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dcd295d23fbc11b58c2515a419d24063c250ab9b73c1c368ef83eda3cbfb12->enter($__internal_e6dcd295d23fbc11b58c2515a419d24063c250ab9b73c1c368ef83eda3cbfb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_add_btn"));

        // line 606
        ob_start();
        // line 607
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) {
            // line 608
            echo "        ";
            $context["button_type"] = "add";
            // line 609
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"));
            // line 610
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e6dcd295d23fbc11b58c2515a419d24063c250ab9b73c1c368ef83eda3cbfb12->leave($__internal_e6dcd295d23fbc11b58c2515a419d24063c250ab9b73c1c368ef83eda3cbfb12_prof);

    }

    // line 615
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        $__internal_037a4a3adf96db53c9f5d3e580d0c94ee5a708ddb9fdfe18720b04445415a0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a4a3adf96db53c9f5d3e580d0c94ee5a708ddb9fdfe18720b04445415a0d7->enter($__internal_037a4a3adf96db53c9f5d3e580d0c94ee5a708ddb9fdfe18720b04445415a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_remove_btn"));

        // line 616
        ob_start();
        // line 617
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()) === false))) {
            // line 618
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 620
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()) === false))) {
            // line 621
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 623
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 624
            echo "    ";
            $context["button_type"] = "remove";
            // line 625
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"));
            // line 626
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 628
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()) === false))) {
            // line 629
            echo "        </div>
    ";
        }
        // line 631
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()) === false))) {
            // line 632
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_037a4a3adf96db53c9f5d3e580d0c94ee5a708ddb9fdfe18720b04445415a0d7->leave($__internal_037a4a3adf96db53c9f5d3e580d0c94ee5a708ddb9fdfe18720b04445415a0d7_prof);

    }

    // line 637
    public function block_collection_button($context, array $blocks = array())
    {
        $__internal_72864aee98f9549d66213c048a064912847b3e381904440c1609830a5ed4f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72864aee98f9549d66213c048a064912847b3e381904440c1609830a5ed4f925->enter($__internal_72864aee98f9549d66213c048a064912847b3e381904440c1609830a5ed4f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        // line 638
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "attr", array()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : $this->getContext($context, "button_type")), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 639
        if ( !(null === $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon", array()))) {
            // line 640
            echo "    ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon", array()), (($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 642
        if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "label", array(), "any", true, true)) {
            // line 643
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
";
        }
        // line 645
        echo "</a>

";
        
        $__internal_72864aee98f9549d66213c048a064912847b3e381904440c1609830a5ed4f925->leave($__internal_72864aee98f9549d66213c048a064912847b3e381904440c1609830a5ed4f925_prof);

    }

    // line 649
    public function block_label_asterisk($context, array $blocks = array())
    {
        $__internal_c4a24662e7be7faec58f1171659f948219475227b7b623ebd559f4d2b5e90902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a24662e7be7faec58f1171659f948219475227b7b623ebd559f4d2b5e90902->enter($__internal_c4a24662e7be7faec58f1171659f948219475227b7b623ebd559f4d2b5e90902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        // line 650
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 651
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : $this->getContext($context, "render_required_asterisk"))) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 653
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : $this->getContext($context, "render_optional_text"))) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
        
        $__internal_c4a24662e7be7faec58f1171659f948219475227b7b623ebd559f4d2b5e90902->leave($__internal_c4a24662e7be7faec58f1171659f948219475227b7b623ebd559f4d2b5e90902_prof);

    }

    // line 657
    public function block_widget_addon($context, array $blocks = array())
    {
        $__internal_8332353c878655c8c6c4627fc352a50182a95b0f6e66211be39557a5e197de5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8332353c878655c8c6c4627fc352a50182a95b0f6e66211be39557a5e197de5a->enter($__internal_8332353c878655c8c6c4627fc352a50182a95b0f6e66211be39557a5e197de5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        // line 658
        ob_start();
        // line 659
        $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon", array())) : (null));
        // line 660
        $context["widget_addon_icon_inverted"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon_inverted", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon_inverted", array())) : (false));
        // line 661
        echo "    <span class=\"input-group-addon\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array()), false)) : (false))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")), (isset($context["widget_addon_icon_inverted"]) ? $context["widget_addon_icon_inverted"] : $this->getContext($context, "widget_addon_icon_inverted")))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8332353c878655c8c6c4627fc352a50182a95b0f6e66211be39557a5e197de5a->leave($__internal_8332353c878655c8c6c4627fc352a50182a95b0f6e66211be39557a5e197de5a_prof);

    }

    // line 665
    public function block_widget_btns($context, array $blocks = array())
    {
        $__internal_07ff6d54dd2ea1810a1b60b9dab1f11f24ed9f52d4e4b4816e467a16aa5e4d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ff6d54dd2ea1810a1b60b9dab1f11f24ed9f52d4e4b4816e467a16aa5e4d14->enter($__internal_07ff6d54dd2ea1810a1b60b9dab1f11f24ed9f52d4e4b4816e467a16aa5e4d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_btns"));

        // line 666
        ob_start();
        // line 667
        echo "    <span class=\"input-group-btn\">
    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_btns"]) ? $context["widget_btns"] : $this->getContext($context, "widget_btns")));
        foreach ($context['_seq'] as $context["_key"] => $context["widget_btn"]) {
            // line 669
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["widget_btn"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "type", array()), "button")) : ("button")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ("btn " . (($this->getAttribute($context["widget_btn"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "class", array()), "btn-default")) : ("btn-default"))), "html", null, true);
            echo "\">
        ";
            // line 670
            if ( !twig_test_empty($this->getAttribute($context["widget_btn"], "icon", array()))) {
                // line 671
                echo "                ";
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, $this->getAttribute($context["widget_btn"], "icon", array()), (($this->getAttribute($context["widget_btn"], "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "icon_inverted", array()), false)) : (false)));
                echo "
        ";
            }
            // line 673
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["widget_btn"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "label", array()), "")) : ("")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget_btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "    </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07ff6d54dd2ea1810a1b60b9dab1f11f24ed9f52d4e4b4816e467a16aa5e4d14->leave($__internal_07ff6d54dd2ea1810a1b60b9dab1f11f24ed9f52d4e4b4816e467a16aa5e4d14_prof);

    }

    // line 681
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_59f65484d6d9230d2c136a4b17bed25bb745ea2056c7fd8ee402de186339601e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f65484d6d9230d2c136a4b17bed25bb745ea2056c7fd8ee402de186339601e->enter($__internal_59f65484d6d9230d2c136a4b17bed25bb745ea2056c7fd8ee402de186339601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 682
        ob_start();
        // line 683
        if ((isset($context["error_delay"]) ? $context["error_delay"] : $this->getContext($context, "error_delay"))) {
            // line 684
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 685
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 686
                    echo "            ";
                    if ($this->getAttribute($context["child"], "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "method")) {
                    }
                    // line 687
                    echo "        ";
                }
                // line 688
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 690
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 691
                echo "        ";
                if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
                    // line 692
                    echo "            ";
                    $context["__internal_f02f829e050735c06555a4d367ecd280a94bf8bfef69b6d9ebefe6e3390310d5"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 692);
                    // line 693
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 694
                        echo "                ";
                        echo $context["__internal_f02f829e050735c06555a4d367ecd280a94bf8bfef69b6d9ebefe6e3390310d5"]->getflash("danger", $this->getAttribute($context["error"], "message", array()));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 696
                    echo "        ";
                } else {
                    // line 697
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 698
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 699
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 701
                    echo "            </span>
        ";
                }
                // line 703
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_59f65484d6d9230d2c136a4b17bed25bb745ea2056c7fd8ee402de186339601e->leave($__internal_59f65484d6d9230d2c136a4b17bed25bb745ea2056c7fd8ee402de186339601e_prof);

    }

    // line 710
    public function block_error_type($context, array $blocks = array())
    {
        $__internal_927f0ee80a2e9c68d6776b033615d5a9dddd13c0ef05aa445634b6b961b2bb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f0ee80a2e9c68d6776b033615d5a9dddd13c0ef05aa445634b6b961b2bb3c->enter($__internal_927f0ee80a2e9c68d6776b033615d5a9dddd13c0ef05aa445634b6b961b2bb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "error_type"));

        // line 711
        ob_start();
        // line 712
        if ((isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type"))) {
            // line 713
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 714
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 715
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 717
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_927f0ee80a2e9c68d6776b033615d5a9dddd13c0ef05aa445634b6b961b2bb3c->leave($__internal_927f0ee80a2e9c68d6776b033615d5a9dddd13c0ef05aa445634b6b961b2bb3c_prof);

    }

    // line 724
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        $__internal_32346be1f1dc5003572467e8942d7ca4ad0de07f7d34140c7922e8a96d37ce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32346be1f1dc5003572467e8942d7ca4ad0de07f7d34140c7922e8a96d37ce60->enter($__internal_32346be1f1dc5003572467e8942d7ca4ad0de07f7d34140c7922e8a96d37ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_start"));

        // line 725
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null))) {
            // line 726
            echo "    ";
            if (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 727
                echo "        ";
                if ( !(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))) {
                    // line 728
                    echo "            ";
                    // line 729
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => "collection-item"));
                    // line 730
                    echo "        ";
                }
                // line 731
                echo "    ";
            }
            // line 732
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 733
                echo "\t    ";
                // line 734
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "")) : ("")) . " has-error")));
                // line 735
                echo "    ";
            }
            // line 736
            echo "    ";
            if (($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "selector", array()) === null)) {
                // line 737
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), array("selector" => ("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
                // line 738
                echo "    ";
            }
            // line 739
            echo "    <div";
            if ( !($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "title", array()) === null)) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 741
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute(            // line 742
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", $this->getAttribute($this->getAttribute(            // line 743
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())))) {
                // line 744
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : $this->getContext($context, "show_child_legend"))) {
                    // line 745
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 746
(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 747
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 749
                    echo "        ";
                }
                // line 750
                echo "    ";
            } else {
                // line 751
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 752
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 754
                echo "    ";
            }
        } else {
            // line 756
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 757
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
        
        $__internal_32346be1f1dc5003572467e8942d7ca4ad0de07f7d34140c7922e8a96d37ce60->leave($__internal_32346be1f1dc5003572467e8942d7ca4ad0de07f7d34140c7922e8a96d37ce60_prof);

    }

    // line 762
    public function block_help_widget_popover($context, array $blocks = array())
    {
        $__internal_20f1cb2029a8edb1cc416606e1f3ab287ce24fddeace249b93826918a9cfb1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f1cb2029a8edb1cc416606e1f3ab287ce24fddeace249b93826918a9cfb1b1->enter($__internal_20f1cb2029a8edb1cc416606e1f3ab287ce24fddeace249b93826918a9cfb1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_widget_popover"));

        // line 763
        echo " ";
        ob_start();
        // line 764
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 765
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_20f1cb2029a8edb1cc416606e1f3ab287ce24fddeace249b93826918a9cfb1b1->leave($__internal_20f1cb2029a8edb1cc416606e1f3ab287ce24fddeace249b93826918a9cfb1b1_prof);

    }

    // line 770
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        $__internal_b96b3ac862fea89b67cd2443059a7e142e9f44803718e055d6039fd3ac304575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96b3ac862fea89b67cd2443059a7e142e9f44803718e055d6039fd3ac304575->enter($__internal_b96b3ac862fea89b67cd2443059a7e142e9f44803718e055d6039fd3ac304575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_end"));

        // line 771
        ob_start();
        // line 772
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null))) {
            // line 773
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b96b3ac862fea89b67cd2443059a7e142e9f44803718e055d6039fd3ac304575->leave($__internal_b96b3ac862fea89b67cd2443059a7e142e9f44803718e055d6039fd3ac304575_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2731 => 773,  2729 => 772,  2727 => 771,  2721 => 770,  2713 => 767,  2702 => 765,  2697 => 764,  2694 => 763,  2688 => 762,  2676 => 757,  2673 => 756,  2669 => 754,  2663 => 752,  2660 => 751,  2657 => 750,  2654 => 749,  2648 => 747,  2646 => 746,  2641 => 745,  2638 => 744,  2636 => 743,  2635 => 742,  2633 => 741,  2613 => 739,  2610 => 738,  2607 => 737,  2604 => 736,  2601 => 735,  2598 => 734,  2596 => 733,  2593 => 732,  2590 => 731,  2587 => 730,  2584 => 729,  2582 => 728,  2579 => 727,  2575 => 726,  2573 => 725,  2567 => 724,  2557 => 717,  2551 => 715,  2549 => 714,  2544 => 713,  2542 => 712,  2540 => 711,  2534 => 710,  2524 => 703,  2520 => 701,  2511 => 699,  2507 => 698,  2502 => 697,  2499 => 696,  2490 => 694,  2485 => 693,  2482 => 692,  2479 => 691,  2476 => 690,  2461 => 688,  2458 => 687,  2454 => 686,  2451 => 685,  2433 => 684,  2431 => 683,  2429 => 682,  2423 => 681,  2414 => 675,  2405 => 673,  2399 => 671,  2397 => 670,  2390 => 669,  2386 => 668,  2383 => 667,  2381 => 666,  2375 => 665,  2364 => 661,  2362 => 660,  2360 => 659,  2358 => 658,  2352 => 657,  2340 => 653,  2335 => 651,  2333 => 650,  2327 => 649,  2318 => 645,  2312 => 643,  2310 => 642,  2304 => 640,  2302 => 639,  2282 => 638,  2276 => 637,  2266 => 632,  2263 => 631,  2259 => 629,  2256 => 628,  2250 => 626,  2247 => 625,  2244 => 624,  2241 => 623,  2235 => 621,  2232 => 620,  2226 => 618,  2223 => 617,  2221 => 616,  2215 => 615,  2203 => 610,  2200 => 609,  2197 => 608,  2194 => 607,  2192 => 606,  2186 => 605,  2174 => 600,  2171 => 599,  2165 => 597,  2162 => 596,  2155 => 595,  2153 => 594,  2147 => 593,  2135 => 586,  2133 => 585,  2127 => 583,  2125 => 582,  2119 => 581,  2108 => 574,  2102 => 572,  2100 => 571,  2097 => 570,  2093 => 568,  2091 => 567,  2088 => 566,  2082 => 564,  2079 => 563,  2077 => 562,  2074 => 561,  2064 => 560,  2061 => 559,  2055 => 557,  2053 => 556,  2050 => 555,  2047 => 554,  2044 => 553,  2042 => 552,  2039 => 551,  2037 => 550,  2031 => 548,  2028 => 547,  2017 => 546,  2015 => 545,  2010 => 544,  2007 => 543,  2005 => 542,  1999 => 541,  1987 => 537,  1981 => 535,  1977 => 534,  1972 => 533,  1966 => 530,  1963 => 529,  1960 => 528,  1958 => 527,  1952 => 526,  1942 => 523,  1936 => 522,  1925 => 518,  1921 => 517,  1916 => 516,  1910 => 515,  1900 => 512,  1897 => 511,  1891 => 510,  1882 => 506,  1876 => 504,  1873 => 503,  1867 => 501,  1865 => 500,  1857 => 499,  1854 => 498,  1848 => 497,  1838 => 494,  1835 => 493,  1829 => 492,  1820 => 488,  1814 => 486,  1811 => 485,  1805 => 483,  1803 => 482,  1797 => 481,  1794 => 480,  1788 => 479,  1778 => 476,  1772 => 475,  1761 => 469,  1755 => 467,  1752 => 466,  1746 => 464,  1743 => 463,  1737 => 461,  1734 => 460,  1728 => 458,  1726 => 457,  1722 => 456,  1720 => 455,  1704 => 454,  1701 => 453,  1698 => 452,  1695 => 451,  1692 => 450,  1689 => 449,  1686 => 448,  1683 => 447,  1680 => 446,  1676 => 443,  1673 => 440,  1672 => 439,  1671 => 438,  1669 => 437,  1666 => 436,  1663 => 435,  1661 => 434,  1659 => 433,  1653 => 432,  1638 => 428,  1634 => 425,  1631 => 422,  1630 => 421,  1629 => 420,  1627 => 419,  1624 => 418,  1622 => 417,  1616 => 416,  1603 => 408,  1600 => 407,  1597 => 406,  1595 => 405,  1588 => 404,  1582 => 402,  1579 => 401,  1576 => 400,  1574 => 399,  1572 => 398,  1566 => 397,  1555 => 393,  1552 => 392,  1550 => 391,  1544 => 390,  1533 => 386,  1530 => 385,  1528 => 384,  1522 => 383,  1510 => 377,  1506 => 376,  1502 => 375,  1498 => 374,  1493 => 373,  1490 => 372,  1487 => 371,  1481 => 369,  1475 => 366,  1470 => 365,  1467 => 364,  1464 => 363,  1461 => 362,  1459 => 361,  1453 => 359,  1451 => 358,  1443 => 357,  1420 => 356,  1417 => 355,  1414 => 354,  1411 => 353,  1409 => 352,  1403 => 351,  1393 => 346,  1387 => 344,  1384 => 343,  1378 => 341,  1376 => 340,  1371 => 339,  1368 => 338,  1365 => 337,  1358 => 334,  1352 => 331,  1347 => 330,  1344 => 329,  1341 => 328,  1338 => 327,  1336 => 326,  1330 => 324,  1328 => 323,  1322 => 322,  1301 => 321,  1298 => 320,  1295 => 319,  1293 => 318,  1291 => 317,  1285 => 316,  1274 => 310,  1272 => 309,  1271 => 308,  1270 => 307,  1269 => 306,  1266 => 305,  1263 => 304,  1256 => 301,  1250 => 298,  1245 => 297,  1242 => 296,  1239 => 295,  1236 => 294,  1234 => 293,  1228 => 291,  1226 => 290,  1220 => 289,  1199 => 288,  1196 => 287,  1193 => 286,  1191 => 285,  1189 => 284,  1183 => 283,  1175 => 280,  1171 => 278,  1168 => 277,  1165 => 276,  1161 => 274,  1155 => 272,  1149 => 270,  1146 => 269,  1143 => 268,  1141 => 267,  1128 => 266,  1121 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 260,  1095 => 259,  1092 => 258,  1089 => 257,  1086 => 256,  1082 => 254,  1079 => 253,  1075 => 252,  1073 => 251,  1070 => 250,  1066 => 247,  1063 => 244,  1062 => 243,  1061 => 242,  1059 => 241,  1056 => 240,  1053 => 239,  1047 => 238,  1039 => 235,  1035 => 233,  1032 => 232,  1026 => 231,  1022 => 229,  1020 => 228,  1017 => 227,  1011 => 225,  1005 => 223,  1003 => 222,  999 => 221,  983 => 220,  980 => 219,  977 => 218,  974 => 217,  971 => 216,  968 => 215,  965 => 214,  962 => 213,  959 => 212,  952 => 210,  948 => 209,  945 => 208,  940 => 207,  936 => 205,  933 => 204,  930 => 203,  927 => 202,  924 => 201,  921 => 200,  918 => 199,  915 => 198,  909 => 197,  897 => 191,  894 => 190,  885 => 188,  880 => 187,  877 => 186,  862 => 184,  859 => 183,  856 => 182,  854 => 181,  851 => 180,  848 => 179,  845 => 178,  843 => 177,  840 => 176,  838 => 175,  837 => 174,  836 => 173,  835 => 172,  833 => 171,  830 => 170,  827 => 169,  824 => 168,  821 => 167,  819 => 166,  813 => 165,  803 => 161,  787 => 160,  784 => 159,  778 => 158,  769 => 154,  758 => 150,  754 => 149,  750 => 148,  741 => 147,  738 => 146,  734 => 145,  729 => 144,  727 => 143,  721 => 142,  711 => 138,  709 => 137,  703 => 136,  694 => 132,  689 => 131,  687 => 130,  682 => 128,  679 => 127,  675 => 125,  673 => 124,  668 => 122,  665 => 121,  658 => 118,  656 => 117,  653 => 116,  650 => 115,  645 => 114,  640 => 113,  637 => 112,  635 => 111,  629 => 110,  619 => 105,  613 => 103,  610 => 102,  607 => 101,  601 => 99,  598 => 98,  595 => 97,  592 => 96,  586 => 94,  580 => 92,  577 => 91,  574 => 90,  571 => 89,  568 => 88,  565 => 87,  562 => 86,  556 => 84,  553 => 83,  550 => 82,  544 => 80,  541 => 79,  539 => 78,  536 => 77,  533 => 76,  530 => 75,  528 => 74,  522 => 73,  513 => 69,  507 => 67,  504 => 66,  501 => 65,  499 => 64,  494 => 63,  491 => 62,  488 => 61,  482 => 59,  479 => 58,  477 => 57,  474 => 56,  471 => 55,  468 => 54,  462 => 53,  452 => 50,  449 => 49,  443 => 48,  435 => 43,  429 => 40,  426 => 39,  419 => 35,  404 => 34,  401 => 33,  398 => 32,  395 => 31,  392 => 30,  386 => 29,  375 => 25,  369 => 23,  367 => 22,  360 => 21,  356 => 18,  353 => 15,  352 => 14,  351 => 13,  349 => 12,  346 => 11,  344 => 10,  338 => 9,  328 => 6,  325 => 5,  319 => 4,  312 => 770,  309 => 769,  307 => 762,  304 => 761,  302 => 724,  299 => 723,  296 => 721,  294 => 710,  291 => 709,  288 => 707,  286 => 681,  283 => 680,  280 => 678,  278 => 665,  275 => 664,  273 => 657,  270 => 656,  268 => 649,  265 => 648,  263 => 637,  260 => 636,  258 => 615,  255 => 614,  253 => 605,  250 => 604,  248 => 593,  245 => 592,  242 => 590,  240 => 581,  237 => 580,  234 => 578,  232 => 541,  229 => 540,  227 => 526,  224 => 525,  222 => 522,  219 => 520,  217 => 515,  214 => 514,  212 => 510,  209 => 509,  207 => 497,  204 => 496,  202 => 492,  199 => 491,  197 => 479,  194 => 478,  192 => 475,  189 => 474,  187 => 432,  184 => 431,  182 => 416,  179 => 415,  176 => 413,  174 => 397,  171 => 396,  169 => 390,  166 => 389,  164 => 383,  161 => 382,  159 => 351,  156 => 350,  154 => 316,  151 => 315,  149 => 283,  146 => 282,  144 => 238,  141 => 237,  139 => 197,  135 => 195,  133 => 165,  130 => 164,  128 => 158,  125 => 157,  123 => 142,  120 => 141,  118 => 136,  115 => 135,  113 => 110,  110 => 109,  108 => 73,  105 => 72,  103 => 53,  100 => 52,  98 => 48,  95 => 47,  92 => 45,  90 => 29,  87 => 28,  85 => 9,  82 => 8,  80 => 4,  77 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{# Buttons #}
{% block button_attributes %}
    {% set attr = attr|merge({class: 'btn ' ~ attr.class | default(\"btn-default\")}) %}
    {{ parent() }}
{% endblock button_attributes %}

{% block button_widget %}
{% spaceless %}
    {% if label is empty %}
        {%- if label_format is defined and label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>
    {% if icon is not empty %}
            {{ mopa_bootstrap_icon(icon, icon_inverted|default(false)) }}
    {% endif %}
    {{ label|trans({}, translation_domain) }}</button>
{% endspaceless %}
{% endblock button_widget %}

{% block button_row %}
    {% spaceless %}
        {% if button_offset is defined and button_offset is not empty %}
            {% set attr = attr|merge({'for': id, 'class': button_offset }) %}
            <div class=\"form-group\">
                <div {% for attrname, attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
                {{ form_widget(form) }}
                </div>
            </div>
        {% else %}
            <div>
                {{ form_widget(form) }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock button_row %}

{# Widgets #}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}
    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set type = type|default('text') %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}
    <div class=\"input-group\">
        {% if widget_addon_prepend|default(null) is not null %}
            {% set widget_addon = widget_addon_prepend %}
            {{ block('widget_addon') }}
        {% endif %}
    {% endif %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}
    {{ parent() }}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}
        {% if widget_addon_append|default(null) is not null %}
        {% set widget_addon = widget_addon_append %}
        {{ block('widget_addon') }}
        {% endif %}
    </div>
    {% endif %}
{% endblock textarea_widget %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}
    <div class=\"input-group\">
        {% if widget_btn_prepend|default(null) is not null %}
            {% set widget_btns = widget_btn_prepend %}
            {{ block('widget_btns') }}
        {% endif %}
        {% if widget_addon_prepend|default(null) is not null %}
            {% set widget_addon = widget_addon_prepend %}
            {{ block('widget_addon') }}
        {% endif %}
    {% endif %}
    {% if not widget_remove_btn|default(null) %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' not-removable'}) %}
    {% endif %}
    {% set attr = attr|merge({'class': (attr.class|default('') ~ ' ' ~ widget_form_control_class)|trim}) %}
    {% if static_text is same as(true) %}
        <p class=\"form-control-static\">{{ value }}</p>
    {% else %}
        {{ parent() }}
    {% endif %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}
        {% if widget_addon_append|default(null) is not null %}
            {% set widget_addon = widget_addon_append %}
            {{ block('widget_addon') }}
        {% endif %}
        {% if widget_btn_append|default(null) is not null %}
            {% set widget_btns = widget_btn_append %}
            {{ block('widget_btns') }}
        {% endif %}
    </div>
    {% endif %}
{% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
{% spaceless %}
    {% if form.parent == null %}
        {% if render_fieldset %}<fieldset>{% endif %}
        {% if show_legend %}{{ block('form_legend') }}{% endif %}
    {% endif %}

    {% if form.vars.tabbed %}
        {{ form_tabs(form) }}
        <div class=\"tab-content\">
    {% endif %}

    {{ block('form_rows_visible') }}

    {% if form.vars.tabbed %}
        </div>
    {% endif %}

    {{ form_rest(form) }}

    {% if form.parent == null %}
        {% if render_fieldset %}</fieldset>{% endif %}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_compound %}

{% block form_tabs %}
{% if form.vars.tabsView is defined %}
{{ form_widget(form.vars.tabsView) }}
{% endif %}
{% endblock %}

{% block tabs_widget %}
{% spaceless %}
<ul class=\"{{ form.vars.attr.class }}\">
    {% for tab in form.vars.tabs %}
        {% set class = (tab.active ? 'active ' : '') ~ (tab.disabled ? 'disabled' : '') %}
        <li{% if class|trim is not empty %} class=\"{{ class }}\"{% endif %}>
            <a data-toggle=\"tab\" href=\"#{{ tab.id }}\">
                {% if tab.icon %}{{ mopa_bootstrap_icon(tab.icon) }}{% endif %}
                {{ tab.label|trans({}, tab.translation_domain) }}
            </a>
        </li>
    {% endfor %}
</ul>
{% endspaceless %}
{% endblock %}

{% block form_tab %}
    {% set tab_attr = attr|merge({'class': 'tab-pane' ~ (form.vars.tab_active ? ' active' : '') ~ ' ' ~ attr.class|default(''), 'id': id}) %}
    <div{% for attrname, attrvalue in tab_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ block('form_widget') }}
    </div>
{% endblock %}

{% block collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set prototype_markup = form_row(prototype) %}
        {% set data_prototype_name = form.vars.form.vars.prototype.vars.name|default('__name__') %}
        {% set data_prototype_label = form.vars.form.vars.prototype.vars.label|default('__name__label__') %}
        {% set widget_form_group_attr = widget_form_group_attr|merge({
            'data-prototype': prototype_markup,
            'data-prototype-name': data_prototype_name,
            'data-prototype-label': data_prototype_label
        })|merge(attr) %}
    {% endif %}
    {# Add row by default use attr.class to change#}
\t{% if 'collection' in form.vars.block_prefixes and attr.class is defined %}
\t\t{% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('row') ~ ' ' ~ attr.class}) %}
\t{% endif %}
    {# collection item adds class {form_id}_form-group  too #}
    {% set widget_form_group_attr = widget_form_group_attr|merge({'id': 'collection' ~ id ~ '_form_group', 'class': widget_form_group_attr.class ~ ' collection-items ' ~ id ~ '_form_group'}) %}

    <div {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# Add initial prototype form #}
    {% if form.vars.value|length == 0 and prototype is defined %}
        {% for name in prototype_names %}
            {{ prototype_markup|replace({'__name__': name})|raw }}
        {% endfor %}
    {% endif %}
    {{ block('form_widget') }}
    </div>
{% endspaceless %}
{% endblock collection_widget %}


{% block choice_widget_expanded %}
    {% spaceless %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ horizontal_input_wrapper_class}) %}
        {% endif %}
        {% if widget_type == 'inline-btn' %}
            <div class=\"btn-group\" data-toggle=\"buttons\">
        {% endif %}
        {% for child in form %}
            {% if widget_type not in ['inline', 'inline-btn'] %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\"
                {%- if widget_type == 'inline-btn' %} class=\"btn-group\" data-toggle=\"buttons\"{% endif %}>
            {% endif %}
            {% if widget_type == 'inline-btn' %}
                {% set label_attr = label_attr|default({})|merge({'class': 'btn ' ~ label_attr.class|default('')}) %}
            {% endif %}
            {% if child.vars.checked and widget_type == 'inline-btn' %}
                {% set label_attr_copy = label_attr|default({})|merge({'class': 'active ' ~ label_attr.class|default('')}) %}
            {% else %}
                {% set label_attr_copy = label_attr|default({}) %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr_copy %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ form_widget(child, {'horizontal_label_class': horizontal_label_class, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class, 'attr': {'class': attr.widget_class|default('') }}) }}
            {% if widget_type == 'inline-btn' or widget_checkbox_label == 'widget'%}
                {{ child.vars.label|trans({}, translation_domain)|raw }}
            {% else %}
                {{ child.vars.label|trans({}, translation_domain) }}
            {% endif %}
            </label>
            {% if widget_type not in ['inline', 'inline-btn'] %}
                </div>
            {% endif %}
        {% endfor %}
        {% if widget_type == 'inline-btn' %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div
            {%- if widget_type == 'inline-btn' %} class=\"btn-group\" data-toggle=\"buttons\"
            {%- else %} class=\"checkbox\"
            {%- endif %}>
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render %}
            {% if widget_type == 'inline-btn' %}
                {% set label_attr = attr|default({}) %}
                {% if checked %}
                    {% set label_attr = label_attr|merge({'class': 'active ' ~ attr.class|default('')}) %}
                {% endif %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}
            {%- if not horizontal %} class=\"checkbox-inline\"{% endif %}>
        {% endif %}
        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render %}
                {% if widget_checkbox_label in ['both', 'widget'] %}
                    {{ label|trans({}, translation_domain)|raw }}
                {% else %}
                    {{ block('form_help') }}
                {% endif %}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block date_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if datepicker is defined %}
        {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'calendar'  %}
        <div {% if datepicker.attr is defined %}{%- for attrname, attrvalue in datepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"datepicker\" class=\"input-group date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            {% if widget_reset_icon is defined and widget_reset_icon == true %}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
            {% endif %}
            {# Clear the id & name attributes so that they don't override the hidden fields values #}
            {% set id = id ~ '_mopa_picker_display' %}
            {% set full_name = null %}
            {% set type = 'text' %}
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('inline')}) %}
    \t<div class=\"row\">
        {{ date_pattern|replace({
            '{{ year }}':  '<div class=\"'~date_wrapper_class['year']|default('col-xs-4')~'\">'~form_widget(form.year, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
            '{{ month }}': '<div class=\"'~date_wrapper_class['month']|default('col-xs-4')~'\">'~form_widget(form.month, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
            '{{ day }}':   '<div class=\"'~date_wrapper_class['day']|default('col-xs-4')~'\">'~form_widget(form.day, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
        })|raw }}
        </div>
{% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if timepicker is defined %}
        {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'time'  %}
        <div {% if timepicker.attr is defined %}{%- for attrname, attrvalue in timepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"timepicker\" class=\"input-group date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            {% if widget_reset_icon is defined and widget_reset_icon == true %}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
            {% endif %}
            {# Clear the id & name attributes so that they don't override the hidden fields values #}
            {% set id = id ~ '_mopa_picker_display' %}
            {% set full_name = null %}
            {% set type = 'text' %}
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('')}) %}
    {% spaceless %}
    {{ form_widget(form.hour, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
    {% if with_minutes %}
        {{ form_widget(form.minute, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
    {% endif %}
    {% if with_seconds %}
        :{{ form_widget(form.second, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2') }) }}
    {% endif %}
    {% endspaceless %}
{% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {% if datetimepicker is defined %}
            {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'th'  %}
            <div {% if datetimepicker.attr is defined %}{%- for attrname, attrvalue in datetimepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}\" data-link-field=\"{{ id }}\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}\" {{ block('widget_attributes') }}>
                {% if widget_reset_icon is defined and widget_reset_icon == true %}
                    <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
                {% endif %}
                {# Clear the id & name attributes so that they don't override the hidden fields values #}
                {% set id = id ~ '_mopa_picker_display' %}
                {% set full_name = null %}
                {% set type = 'text' %}
                {{ block('form_widget_simple') }}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
            </div>
        {% else %}
            {{ block('form_widget_simple') }}
        {% endif %}
    {% else %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_errors(form.date) }}
                {{ form_errors(form.time) }}
                {{ form_widget(form.date, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-3')}) }}
                {{ form_widget(form.time, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
            </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block percent_widget %}
{% spaceless %}
    {% set widget_addon_append = widget_addon_append|merge({'text': widget_addon_append.text|default('%')}) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock percent_widget %}

{% block money_widget %}
{% spaceless %}
    {% set widget_addon_prepend = (widget_addon_prepend != false or widget_addon_prepend == null) and money_pattern != '{{ widget }}' ? {'text': money_pattern|replace({ '{{ widget }}': ''})} : widget_addon_prepend|default(null) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock money_widget %}

{% block file_widget %}
{% spaceless %}
{% set type = type|default('file') %}
    {% if widget_addon_prepend|default(null) is not null %}
        {% set widget_addon = widget_addon_prepend %}
        {{ block('widget_addon') }}
    {% endif %}
<input type=\"{{ type }}\" {{ block('widget_attributes') }}/>
{% if type != 'hidden' and widget_addon.type|default(null) is not null %}
    {% if widget_addon_append|default(null) is not null %}
        {% set widget_addon = widget_addon_append %}
        {{ block('widget_addon') }}
    {% endif %}
{% endif %}
{% endspaceless %}
{% endblock file_widget %}

{# Labels #}

{% block form_legend %}
{% spaceless %}
    {% if label is empty %}
        {%- if label_format is defined and label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <{{ legend_tag }}>{{ label|trans({}, translation_domain) }}</{{ legend_tag }}>
{% endspaceless %}
{% endblock form_legend %}

{% block form_label %}
{% if 'checkbox' not in block_prefixes or widget_checkbox_label in ['label', 'both'] %}
{% spaceless %}
    {% if label is not same as(false) %}
        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% set label_attr_class = '' %}
        {% if horizontal %}
            {% set label_attr_class = 'control-label ' ~ label_attr_class ~ horizontal_label_class %}
        {% endif %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ \" \" ~ label_attr_class ~ (required ? ' required' : ' optional'))|trim }) %}
        <label{% for attrname,attrvalue in label_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
        {{ label|trans({}, translation_domain) }}
        {{- block('label_asterisk') }}
        {% if 'collection' in form.vars.block_prefixes and widget_add_btn|default(null) and form.vars.allow_add == true %}
            &nbsp;{{ block('form_widget_add_btn') }}
        {% endif %}
        {% if help_label %}
            {{ block('help_label') }}
        {% endif %}
        {% if help_label_tooltip.title %}
            {{ block('help_label_tooltip') }}
        {% endif %}
        {% if help_label_popover.title %}
            {{ block('help_label_popover') }}
        {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endif %}
{% endblock form_label %}

{% block help_label %}
    <span class=\"help-block\">{{ help_label|trans({}, translation_domain) }}</span>
{% endblock help_label %}

{% block help_label_tooltip %}
    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"{{ help_label_tooltip.placement}}\" data-title=\"{{ help_label_tooltip.title|trans({}, translation_domain) }}\">
            {% if help_label_tooltip.icon is not same as(false) %}
                {{ mopa_bootstrap_icon(help_label_tooltip.icon) }}
            {% endif %}
            {% if help_label_tooltip.text is not same as(null) %}
                {{ help_label_tooltip.text }}
            {% endif %}
        </a>
    </span>
{% endblock help_label_tooltip %}

{% block help_block_tooltip %}
    {% set help_label_tooltip = help_block_tooltip %}
    {{ block('help_label_tooltip') }}
{% endblock help_block_tooltip %}

{% block help_label_popover %}
    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"{{ help_label_popover.placement}}\" data-title=\"{{ help_label_popover.title|trans({}, translation_domain) }}\" data-content=\"{{ help_label_popover.content|trans({}, translation_domain) }}\" data-html=\"true\">
            {% if help_label_popover.icon is not same as(false) %}
                {{ mopa_bootstrap_icon(help_label_popover.icon) }}
            {% endif %}
            {% if help_label_popover.text is not same as(null) %}
                {{ help_label_popover.text|raw }}
            {% endif %}
        </a>
    </span>
{% endblock help_label_popover %}

{% block help_block_popover %}
    {% set help_label_popover = help_block_popover %}
    {{ block('help_label_popover') }}
{% endblock help_block_popover %}

{% block form_actions_widget %}
    {% for button in form.children %}
        {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}
    {% endfor  %}
{% endblock %}

{# Rows #}
{% block form_actions_row %}
    {{ block('button_row')  }}
{% endblock %}

{% block form_rows_visible %}
{% spaceless %}
     {% if errors|length > 0 %}
        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
    {% endif %}
    {% for child in form %}
        {% if 'hidden' not in child.vars.block_prefixes %} {# smbdy: why do we not add the hiddens of childs? 131024 phiamo: i think form rest should do this !? it was afaik removed because it cause side effekts #}
            {{ form_row(child) }}
        {% endif %}
    {% endfor %}
{% endspaceless %}
{% endblock form_rows_visible %}

{% block form_row %}
{% spaceless %}
    {% if 'tab' in form.vars.block_prefixes %}
        {{ block('form_tab') }}
    {% elseif embed_form is same as(true) %}
        {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}
    {% else %}
        {{ block('widget_form_group_start') }}

        {% set show_horizontal_wrapper = horizontal and not (form.parent is not null and 'collection' in form.parent.vars.block_prefixes and form.parent.vars.horizontal_wrap_children is same as(false)) %}

        {% if horizontal and not label_render %}
            {% set horizontal_input_wrapper_class = horizontal_input_wrapper_class ~ ' ' ~ horizontal_label_offset_class %}
        {% endif %}

        {% if show_horizontal_wrapper %}
        <div class=\"{{ horizontal_input_wrapper_class }}\">
        {% endif %}

        {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}

        {% set type = type|default('text') %}
        {% if type != 'hidden' %}
        {{ block('form_message') }}
        {% endif %}

        {% if show_horizontal_wrapper %}
        </div>
        {% endif %}

        {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes and widget_remove_btn|default(null) and form.parent.vars.allow_delete|default(false) %}
            {{ block('form_widget_remove_btn') }}
        {% endif -%}
        {{ block('widget_form_group_end') }}
    {% endif %}
{% endspaceless %}
{% endblock form_row %}

{# Support #}

{% block form_message %}
{% spaceless %}
    {{ form_errors(form) }}

    {% if ('checkbox' not in block_prefixes or widget_checkbox_label != 'label') and help_block %}
        {{ block('form_help') }}
    {% endif %}
{% endspaceless %}
{% endblock form_message %}

{# Help #}

{% block form_help %}
{% spaceless %}
    {% if help_block %}<p class=\"help-block\">{{ help_block|trans({}, translation_domain)|raw }}</p>{%endif %}
    {% if help_block_tooltip.title %}
        &nbsp;{{ block('help_block_tooltip') }}
    {% endif %}
    {% if help_block_popover.title %}
        &nbsp;{{ block('help_block_popover') }}
    {% endif %}
{% endspaceless %}
{% endblock form_help %}

{% block form_widget_add_btn %}
{% spaceless %}
    {% if widget_add_btn|default(null) %}
        {% set button_type = 'add' %}
        {% set button_values = widget_add_btn %}
        {{ block('collection_button') }}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_add_btn %}

{% block form_widget_remove_btn %}
{% spaceless %}
    {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}
        <div class=\"{{ widget_remove_btn.wrapper_div.class }}\">
    {% endif %}
    {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}
        <div class=\"{{ widget_remove_btn.horizontal_wrapper_div.class }}\">
    {% endif %}
    {% if widget_remove_btn|default(null) %}
    {% set button_type = 'remove' %}
    {% set button_values = widget_remove_btn %}
    {{ block('collection_button') }}
    {% endif %}
    {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}
        </div>
    {% endif %}
    {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock form_widget_remove_btn %}

{% block collection_button %}
<a {% for attrname,attrvalue in button_values.attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %} data-collection-{{ button_type }}-btn=\".{{ form.vars['id'] }}_form_group\">
{% if button_values.icon is not null %}
    {{ mopa_bootstrap_icon(button_values.icon, button_values.icon_inverted|default(false)) }}
{% endif %}
{% if button_values.label is defined %}
    {{ button_values.label|trans({}, translation_domain) }}
{% endif %}
</a>

{% endblock collection_button %}

{% block label_asterisk %}
{% if required %}
    {%- if render_required_asterisk %}&nbsp;<span class=\"asterisk\">*</span>{% endif %}
{% else %}
    {%- if render_optional_text %}&nbsp;<span>{{ \"(optional)\"|trans({}, translation_domain) }}</span>{% endif %}
{% endif %}
{% endblock label_asterisk %}

{% block widget_addon %}
{% spaceless %}
{% set widget_addon_icon = widget_addon.icon is defined ? widget_addon.icon : null  %}
{% set widget_addon_icon_inverted = widget_addon.icon_inverted is defined ? widget_addon.icon_inverted : false  %}
    <span class=\"input-group-addon\">{{ (widget_addon.text|default(false) ? widget_addon.text|trans({}, translation_domain)|raw : mopa_bootstrap_icon(widget_addon_icon, widget_addon_icon_inverted)) }}</span>
{% endspaceless %}
{% endblock widget_addon %}

{% block widget_btns %}
{% spaceless %}
    <span class=\"input-group-btn\">
    {% for widget_btn in widget_btns %}
        <button type=\"{{ widget_btn.type | default('button') }}\" class=\"{{ 'btn ' ~ widget_btn.class | default('btn-default') }}\">
        {% if widget_btn.icon is not empty %}
                {{ mopa_bootstrap_icon(widget_btn.icon, widget_btn.icon_inverted | default(false)) }}
        {% endif %}
        {{ widget_btn.label | default(\"\") | trans({}, translation_domain) }}</button>
    {% endfor %}
    </span>
{% endspaceless %}
{% endblock widget_btns %}

{# Errors #}

{% block form_errors %}
{% spaceless %}
{% if error_delay %}
    {% for child in form %}
        {% if loop.index == 1 %}
            {% if child.set('errors', errors) %}{% endif %}
        {% endif %}
    {% endfor %}
{% else %}
    {% if errors|length > 0 %}
        {% if form.parent == null %}
            {% from 'MopaBootstrapBundle::flash.html.twig' import flash %}
            {% for error in errors %}
                {{ flash('danger', error.message) }}
            {% endfor %}
        {% else %}
            <span class=\"help-{{ block('error_type') }}\">
            {% for error in errors %}
                {{ error.message }} <br>
            {% endfor %}
            </span>
        {% endif %}
    {% endif %}
{% endif %}
{% endspaceless %}
{% endblock form_errors %}

{# used to determine which type of error #}

{% block error_type %}
{% spaceless %}
{% if error_type %}
    {{ error_type }}
{% elseif form.parent == null %}
    {{ form.vars.error_type | default('inline') }}
{% else %}
    block
{% endif %}
{% endspaceless %}
{% endblock error_type %}

{# widget helper blocks #}

{% block widget_form_group_start %}
{% if widget_form_group|default(false) or form.parent == null %}
    {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes %} {# i am a collection child #}
        {% if not omit_collection_item %}
            {# collection item wrapper doesnt need form-group it gets added to childs anyways #}
        \t{% set widget_form_group_attr = widget_form_group_attr|merge({class: 'collection-item'}) %}
        {% endif %}
    {% endif %}
    {% if errors|length > 0 %}
\t    {# Add Error Class to Widget Wrapper#}
\t    {% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('') ~ ' has-error'}) %}
    {% endif %}
    {% if help_widget_popover.selector is same as(null) %}
        {% set help_widget_popover = help_widget_popover|merge({'selector': '#' ~ id }) %}
    {% endif %}
    <div{% if help_widget_popover.title is not same as(null) %}{{ block('help_widget_popover') }}{% endif %} {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# a form item containing the field in block_prefixes is a near subform or a field directly #}
    {% if (form|length > 0 and form.parent != null)
        and 'field' not in form.vars.block_prefixes
        and 'date' not in form.vars.block_prefixes %}
        {% if show_child_legend%}
            {{ block('form_legend') }}
        {% elseif label_render %}
            {{ form_label(form, label|default(null)) }}
        {% else %}
        {% endif %}
    {% else %}
        {% if label_render %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}
    {% endif %}
{% else %}
    {% if label_render %}
        {{ form_label(form, label|default(null)) }}
    {% endif %}
{% endif %}
{% endblock widget_form_group_start %}

{% block help_widget_popover %}
 {% spaceless %}
 {% for attrname,attrvalue in help_widget_popover %}
 data-{{attrname}}=\"{{attrvalue|trans({}, domain|default('messages'))}}\"
 {% endfor %}
 {% endspaceless %}
{% endblock help_widget_popover %}

{% block widget_form_group_end %}
{% spaceless %}
{% if widget_form_group|default(false) or form.parent == null %}
    </div>
{% endif %}
{% endspaceless %}
{% endblock widget_form_group_end %}
", "MopaBootstrapBundle:Form:fields.html.twig", "C:\\wamp64\\www\\keosu\\vendor\\mopa\\bootstrap-bundle\\Mopa\\Bundle\\BootstrapBundle/Resources/views/Form/fields.html.twig");
    }
}
