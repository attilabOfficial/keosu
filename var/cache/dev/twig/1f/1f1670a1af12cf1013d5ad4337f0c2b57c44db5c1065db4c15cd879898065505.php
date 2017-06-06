<?php

/* KeosuCoreBundle:MainViews:configuration.html.twig */
class __TwigTemplate_1eb727cdc8cc8745b376463b82529991b867c68ec4e2b04115fb358b2195af57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:configuration.html.twig", 19);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a5d16f54fd52bf3a0b581757efdf6d699518cbddb052e93d7a0f2316ff447f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a5d16f54fd52bf3a0b581757efdf6d699518cbddb052e93d7a0f2316ff447f->enter($__internal_87a5d16f54fd52bf3a0b581757efdf6d699518cbddb052e93d7a0f2316ff447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a5d16f54fd52bf3a0b581757efdf6d699518cbddb052e93d7a0f2316ff447f->leave($__internal_87a5d16f54fd52bf3a0b581757efdf6d699518cbddb052e93d7a0f2316ff447f_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_26c5cad274c890263074d9102658387d168f5f119ba73476394c814e44a54537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c5cad274c890263074d9102658387d168f5f119ba73476394c814e44a54537->enter($__internal_26c5cad274c890263074d9102658387d168f5f119ba73476394c814e44a54537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration";
        
        $__internal_26c5cad274c890263074d9102658387d168f5f119ba73476394c814e44a54537->leave($__internal_26c5cad274c890263074d9102658387d168f5f119ba73476394c814e44a54537_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c8732d64e44b0ce28244399cb6e22da402e098511d7557b215df69d6e45e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8732d64e44b0ce28244399cb6e22da402e098511d7557b215df69d6e45e2f->enter($__internal_80c8732d64e44b0ce28244399cb6e22da402e098511d7557b215df69d6e45e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "\t\t</div>
\t</div>
";
        
        $__internal_80c8732d64e44b0ce28244399cb6e22da402e098511d7557b215df69d6e45e2f->leave($__internal_80c8732d64e44b0ce28244399cb6e22da402e098511d7557b215df69d6e45e2f_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_9dc9e2f9c8a0be639dea054810efcfdc125a5d956f238960ed25c59027f27d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc9e2f9c8a0be639dea054810efcfdc125a5d956f238960ed25c59027f27d84->enter($__internal_9dc9e2f9c8a0be639dea054810efcfdc125a5d956f238960ed25c59027f27d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-cog icon-menu\"></span> ";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration", array(), "messages");
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-th-large icon-menu\"></span>";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Apps", array(), "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_app_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage Apps</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-tint icon-menu\"></span>";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("Themes", array(), "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_theme_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage Themes</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_9dc9e2f9c8a0be639dea054810efcfdc125a5d956f238960ed25c59027f27d84->leave($__internal_9dc9e2f9c8a0be639dea054810efcfdc125a5d956f238960ed25c59027f27d84_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 43,  101 => 42,  93 => 37,  89 => 36,  80 => 30,  75 => 27,  69 => 26,  60 => 49,  58 => 26,  54 => 24,  48 => 23,  36 => 21,  11 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
#}

{% extends 'KeosuCoreBundle::page.html.twig' %}

{% block title %}Configuration{% endblock%}

{% block body %}
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t{% block content %}
\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-cog icon-menu\"></span> {% trans %}Configuration{% endtrans %}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-th-large icon-menu\"></span>{% trans %}Apps{% endtrans %}</h3>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_app_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage Apps</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-tint icon-menu\"></span>{% trans %}Themes{% endtrans %}</h3>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_theme_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage Themes</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t</div>
{% endblock %}
", "KeosuCoreBundle:MainViews:configuration.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/configuration.html.twig");
    }
}
