<?php

/* KeosuCoreBundle:MainViews:configuration.html.twig */
class __TwigTemplate_10fe2f8437986b529ef215a1baf4d10d0bfaf5c682aca8b1d5881037faa245eb extends Twig_Template
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
        $__internal_fc1af4c6302a8b78e30966074e8a623b9563704c8d5665e15ac8569d78290a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1af4c6302a8b78e30966074e8a623b9563704c8d5665e15ac8569d78290a4b->enter($__internal_fc1af4c6302a8b78e30966074e8a623b9563704c8d5665e15ac8569d78290a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc1af4c6302a8b78e30966074e8a623b9563704c8d5665e15ac8569d78290a4b->leave($__internal_fc1af4c6302a8b78e30966074e8a623b9563704c8d5665e15ac8569d78290a4b_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f7ebb506b4aa27e878dd939c8c6f012eef4c7ca794a91fb00a34e05f7f78c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7ebb506b4aa27e878dd939c8c6f012eef4c7ca794a91fb00a34e05f7f78c38->enter($__internal_8f7ebb506b4aa27e878dd939c8c6f012eef4c7ca794a91fb00a34e05f7f78c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration";
        
        $__internal_8f7ebb506b4aa27e878dd939c8c6f012eef4c7ca794a91fb00a34e05f7f78c38->leave($__internal_8f7ebb506b4aa27e878dd939c8c6f012eef4c7ca794a91fb00a34e05f7f78c38_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_8696b0fdce8bc415288c4d9e5d3f714dccb52a7c950e83bdd38fd08f85021b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8696b0fdce8bc415288c4d9e5d3f714dccb52a7c950e83bdd38fd08f85021b8d->enter($__internal_8696b0fdce8bc415288c4d9e5d3f714dccb52a7c950e83bdd38fd08f85021b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8696b0fdce8bc415288c4d9e5d3f714dccb52a7c950e83bdd38fd08f85021b8d->leave($__internal_8696b0fdce8bc415288c4d9e5d3f714dccb52a7c950e83bdd38fd08f85021b8d_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_336e1b80c6d9e938331b4c65ee2bfa1726899c7bf594f2d141567036625e3a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336e1b80c6d9e938331b4c65ee2bfa1726899c7bf594f2d141567036625e3a9f->enter($__internal_336e1b80c6d9e938331b4c65ee2bfa1726899c7bf594f2d141567036625e3a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_336e1b80c6d9e938331b4c65ee2bfa1726899c7bf594f2d141567036625e3a9f->leave($__internal_336e1b80c6d9e938331b4c65ee2bfa1726899c7bf594f2d141567036625e3a9f_prof);

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
", "KeosuCoreBundle:MainViews:configuration.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/configuration.html.twig");
    }
}
