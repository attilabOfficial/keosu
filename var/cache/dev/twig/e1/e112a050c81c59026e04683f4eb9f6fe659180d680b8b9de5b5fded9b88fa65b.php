<?php

/* KeosuCoreBundle:MainViews:content.html.twig */
class __TwigTemplate_eb7e7b14e9fca25c007debad6b1921cfbe1fb6cfafa827bf7995ab68cde233ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:content.html.twig", 19);
        $this->blocks = array(
            'contentmenu' => array($this, 'block_contentmenu'),
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
        $__internal_c28bcf6b5e035b3e18ec9679d9647030e2272137d0da34e99c946eea179950e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28bcf6b5e035b3e18ec9679d9647030e2272137d0da34e99c946eea179950e8->enter($__internal_c28bcf6b5e035b3e18ec9679d9647030e2272137d0da34e99c946eea179950e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28bcf6b5e035b3e18ec9679d9647030e2272137d0da34e99c946eea179950e8->leave($__internal_c28bcf6b5e035b3e18ec9679d9647030e2272137d0da34e99c946eea179950e8_prof);

    }

    // line 20
    public function block_contentmenu($context, array $blocks = array())
    {
        $__internal_7a1fde43192bc134b89afab6f412cd2a54bc590b38dda0ab49aa924e74de018f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1fde43192bc134b89afab6f412cd2a54bc590b38dda0ab49aa924e74de018f->enter($__internal_7a1fde43192bc134b89afab6f412cd2a54bc590b38dda0ab49aa924e74de018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmenu"));

        // line 21
        echo "<div class=\"activesidebar\">
\t";
        
        $__internal_7a1fde43192bc134b89afab6f412cd2a54bc590b38dda0ab49aa924e74de018f->leave($__internal_7a1fde43192bc134b89afab6f412cd2a54bc590b38dda0ab49aa924e74de018f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_225ac1274c7d7132ce08eb23f1e180e3055e2c1c41007d23581b3022fe277520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225ac1274c7d7132ce08eb23f1e180e3055e2c1c41007d23581b3022fe277520->enter($__internal_225ac1274c7d7132ce08eb23f1e180e3055e2c1c41007d23581b3022fe277520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t\t<div id=\"content\">
\t\t\t<div class=\"panel\">
\t\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_225ac1274c7d7132ce08eb23f1e180e3055e2c1c41007d23581b3022fe277520->leave($__internal_225ac1274c7d7132ce08eb23f1e180e3055e2c1c41007d23581b3022fe277520_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_dca0852de25aab1902bf29ea127591779b540153361b0670297ee4c870938969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca0852de25aab1902bf29ea127591779b540153361b0670297ee4c870938969->enter($__internal_dca0852de25aab1902bf29ea127591779b540153361b0670297ee4c870938969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-th icon-menu\"></span> Content</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("In the content, mustly the first page you see, you will add content for your application. But don't worry, the page will come in a second step.", array(), "messages");
        // line 33
        echo "\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Readers</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("A reader is a connector to an external source (website, RSS, software etc ...) to import contents in Keosu.", array(), "messages");
        // line 43
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_ReaderManager_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage readers</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-pushpin icon-menu\"></span>Article</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("An article is ... well ... a simple article with title, content, and pictures ...", array(), "messages");
        // line 52
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_article_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage articles</button></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-map-marker icon-menu\"></span>Location</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("A point on a map.", array(), "messages");
        // line 62
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_location_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage POI</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-picture icon-menu\"></span>Picture</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("Import pictures to feed your galleries", array(), "messages");
        // line 71
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_picture_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage pictures</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-calendar icon-menu\"></span>Event</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("An event of a calendar", array(), "messages");
        // line 80
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_event_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage events</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-list icon-menu\"></span>Menu</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add awesome menus to your project app", array(), "messages");
        // line 89
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_menu_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage menus</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Search</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage searches entries", array(), "messages");
        // line 98
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_search_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage searches</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_dca0852de25aab1902bf29ea127591779b540153361b0670297ee4c870938969->leave($__internal_dca0852de25aab1902bf29ea127591779b540153361b0670297ee4c870938969_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 99,  190 => 98,  188 => 97,  178 => 90,  175 => 89,  173 => 88,  163 => 81,  160 => 80,  158 => 79,  148 => 72,  145 => 71,  143 => 70,  133 => 63,  130 => 62,  128 => 61,  118 => 54,  114 => 52,  112 => 51,  102 => 44,  99 => 43,  97 => 42,  86 => 33,  84 => 32,  77 => 27,  71 => 26,  62 => 105,  60 => 26,  56 => 24,  50 => 23,  42 => 21,  36 => 20,  11 => 19,);
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
{% block contentmenu %}
<div class=\"activesidebar\">
\t{% endblock %}
\t{% block body %}
\t\t<div id=\"content\">
\t\t\t<div class=\"panel\">
\t\t\t\t{% block content %}
\t\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-th icon-menu\"></span> Content</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{% trans %}In the content, mustly the first page you see, you will add content for your application. But don't worry, the page will come in a second step. {% endtrans %}
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Readers</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}A reader is a connector to an external source (website, RSS, software etc ...) to import contents in Keosu.{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage readers</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-pushpin icon-menu\"></span>Article</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}An article is ... well ... a simple article with title, content, and pictures ...{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_article_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage articles</button></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-map-marker icon-menu\"></span>Location</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}A point on a map.{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_location_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage POI</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-picture icon-menu\"></span>Picture</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}Import pictures to feed your galleries{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_picture_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage pictures</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-calendar icon-menu\"></span>Event</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}An event of a calendar{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_event_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage events</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-list icon-menu\"></span>Menu</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}Add awesome menus to your project app{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_menu_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage menus</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Search</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{% trans %}Manage searches entries{% endtrans %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_search_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage searches</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}
", "KeosuCoreBundle:MainViews:content.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/content.html.twig");
    }
}
