<?php

/* KeosuCoreBundle:MainViews:publish.html.twig */
class __TwigTemplate_72e76498020aa7db22f5025bbe1651889ceca1fc6f1ad67a17f5bb424e7cf8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:publish.html.twig", 19);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e214f72aaf2c3af8842aeedc6447164c0a9b93c8eec51b496912eff33ef32f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e214f72aaf2c3af8842aeedc6447164c0a9b93c8eec51b496912eff33ef32f46->enter($__internal_e214f72aaf2c3af8842aeedc6447164c0a9b93c8eec51b496912eff33ef32f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:publish.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e214f72aaf2c3af8842aeedc6447164c0a9b93c8eec51b496912eff33ef32f46->leave($__internal_e214f72aaf2c3af8842aeedc6447164c0a9b93c8eec51b496912eff33ef32f46_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_add11f84a440965c7e30513d717d2da3a4ac4e9c70c24fd7a446a62e8c21631b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add11f84a440965c7e30513d717d2da3a4ac4e9c70c24fd7a446a62e8c21631b->enter($__internal_add11f84a440965c7e30513d717d2da3a4ac4e9c70c24fd7a446a62e8c21631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Publish";
        
        $__internal_add11f84a440965c7e30513d717d2da3a4ac4e9c70c24fd7a446a62e8c21631b->leave($__internal_add11f84a440965c7e30513d717d2da3a4ac4e9c70c24fd7a446a62e8c21631b_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf95cd8904af3b16a98d3b8edead4d7990299e035dbc0d2a9dae1552d1bf1b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf95cd8904af3b16a98d3b8edead4d7990299e035dbc0d2a9dae1552d1bf1b14->enter($__internal_cf95cd8904af3b16a98d3b8edead4d7990299e035dbc0d2a9dae1552d1bf1b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
\t<h2><span class=\"glyphicon glyphicon-send icon-menu\"></span> ";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Publish", array(), "messages");
        echo "</h2>
\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-export icon-menu\"></span>";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Export App", array(), "messages");
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Export App before download the last version", array(), "messages");
        // line 31
        echo "\t\t\t</p>
\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_exporter_export");
        echo "\"><button id=\"export\" type=\"button\" data-loading-text=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Export", array(), "messages");
        echo "</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><img class=\"icon-cordova icon-menu\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/phonegap.png\"/>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download app for phonegapbuild", array(), "messages");
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("You can import this zip file in https://build.phonegap.com/, test app on your phone and publish it to stores", array(), "messages");
        // line 41
        echo "\t\t\t</p>
\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/phonegapbuild/export.zip\"><button type=\"button\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download", array(), "messages");
        echo "</button></a>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><img class=\"icon-cordova icon-menu\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/cordova.png\"/>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download app for Cordova", array(), "messages");
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("You can use import the zip file in www folder of an existing cordova project and test your app on your computer. You need to user this option if you want to use specific plugins", array(), "messages");
        // line 50
        echo "\t\t\t</p>
\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/cordova/export.zip\"><button type=\"button\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download", array(), "messages");
        echo "</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-save icon-menu\"></span>";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download config", array(), "messages");
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Configuration files for a local cordova project", array(), "messages");
        // line 60
        echo "\t\t\t</p>
\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/cordova/config.zip\"><button type=\"button\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Download", array(), "messages");
        echo "</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-usd icon-menu\"></span>";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit and monetize a development", array(), "messages");
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("You can submit and sell your developments themes, plugins and widgets. Monetize your creations via the Keosu's Store", array(), "messages");
        // line 70
        echo "\t\t\t</p>
\t\t\t<a target=\"_blank\" href=\"http://keosu.com/soumettre-un-developpement/?utm_source=keosu&utm_medium=cms&utm_term=soumettre&utm_campaign=soumettre%20dev\"><button type=\"button\" class=\"btn btn-default\">";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit", array(), "messages");
        echo "</button></a>
\t\t</div>
\t</div>

\t<script>
\t\t\$('#export').click(function () {
\t\t\tvar btn = \$(this);
\t\t\tbtn.html(\"Loading...\");
\t\t\tbtn.addClass(\"btn-primary\").removeClass(\"btn-default\");
\t\t});
\t</script>
";
        
        $__internal_cf95cd8904af3b16a98d3b8edead4d7990299e035dbc0d2a9dae1552d1bf1b14->leave($__internal_cf95cd8904af3b16a98d3b8edead4d7990299e035dbc0d2a9dae1552d1bf1b14_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:publish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 71,  158 => 70,  156 => 69,  151 => 67,  140 => 61,  137 => 60,  135 => 59,  130 => 57,  119 => 51,  116 => 50,  114 => 49,  107 => 47,  97 => 42,  94 => 41,  92 => 40,  85 => 38,  72 => 32,  69 => 31,  67 => 30,  62 => 28,  56 => 25,  53 => 24,  47 => 23,  35 => 21,  11 => 19,);
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
Copyright (C) 2014  Vincent Le Borgne, Pockeit

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

{% block title %}Publish{% endblock%}

{% block body %}

\t<h2><span class=\"glyphicon glyphicon-send icon-menu\"></span> {% trans %}Publish{% endtrans %}</h2>
\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-export icon-menu\"></span>{% trans %}Export App{% endtrans %}</h3>
\t\t\t<p>
\t\t\t\t{% trans %}Export App before download the last version{% endtrans %}
\t\t\t</p>
\t\t\t<a href=\"{{ path('keosu_core_exporter_export') }}\"><button id=\"export\" type=\"button\" data-loading-text=\"{% trans %}Loading...{% endtrans %}\" class=\"btn btn-default\">{% trans %}Export{% endtrans %}</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><img class=\"icon-cordova icon-menu\" src=\"{{url_base}}/img/phonegap.png\"/>{% trans %}Download app for phonegapbuild{% endtrans %}</h3>
\t\t\t<p>
\t\t\t\t{% trans %}You can import this zip file in https://build.phonegap.com/, test app on your phone and publish it to stores{% endtrans %}
\t\t\t</p>
\t\t\t<a href=\"{{url_base}}/keosu/export/phonegapbuild/export.zip\"><button type=\"button\" class=\"btn btn-default\">{% trans %}Download{% endtrans %}</button></a>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><img class=\"icon-cordova icon-menu\" src=\"{{url_base}}/img/cordova.png\"/>{% trans %}Download app for Cordova{% endtrans %}</h3>
\t\t\t<p>
\t\t\t\t{% trans %}You can use import the zip file in www folder of an existing cordova project and test your app on your computer. You need to user this option if you want to use specific plugins{% endtrans %}
\t\t\t</p>
\t\t\t<a href=\"{{url_base}}/keosu/export/cordova/export.zip\"><button type=\"button\" class=\"btn btn-default\">{% trans %}Download{% endtrans %}</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-save icon-menu\"></span>{% trans %}Download config{% endtrans %}</h3>
\t\t\t<p>
\t\t\t\t{% trans %}Configuration files for a local cordova project{% endtrans %}
\t\t\t</p>
\t\t\t<a href=\"{{url_base}}/keosu/export/cordova/config.zip\"><button type=\"button\" class=\"btn btn-default\">{% trans %}Download{% endtrans %}</button></a>
\t\t</div>
\t</div>

\t<div class=\"col-md-3\">
\t\t<div class=\"wellcustom\">
\t\t\t<h3><span class=\"glyphicon glyphicon-usd icon-menu\"></span>{% trans %}Submit and monetize a development{% endtrans %}</h3>
\t\t\t<p>
\t\t\t\t{% trans %}You can submit and sell your developments themes, plugins and widgets. Monetize your creations via the Keosu's Store{% endtrans %}
\t\t\t</p>
\t\t\t<a target=\"_blank\" href=\"http://keosu.com/soumettre-un-developpement/?utm_source=keosu&utm_medium=cms&utm_term=soumettre&utm_campaign=soumettre%20dev\"><button type=\"button\" class=\"btn btn-default\">{% trans %}Submit{% endtrans %}</button></a>
\t\t</div>
\t</div>

\t<script>
\t\t\$('#export').click(function () {
\t\t\tvar btn = \$(this);
\t\t\tbtn.html(\"Loading...\");
\t\t\tbtn.addClass(\"btn-primary\").removeClass(\"btn-default\");
\t\t});
\t</script>
{% endblock %}
", "KeosuCoreBundle:MainViews:publish.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/publish.html.twig");
    }
}
