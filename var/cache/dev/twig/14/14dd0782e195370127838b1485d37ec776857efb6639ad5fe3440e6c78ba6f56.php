<?php

/* KeosuCoreBundle:MainViews:content.html.twig */
class __TwigTemplate_67f24824f53bd158cf57bf90678dab027fd08abe02e0bfb1fe78ee1a2b2cf8aa extends Twig_Template
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
        $__internal_1f8ac0b5e6d16a5b6f281f3bc1b01419d66c54ce5c4c850f50f6328b1eee16c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8ac0b5e6d16a5b6f281f3bc1b01419d66c54ce5c4c850f50f6328b1eee16c5->enter($__internal_1f8ac0b5e6d16a5b6f281f3bc1b01419d66c54ce5c4c850f50f6328b1eee16c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8ac0b5e6d16a5b6f281f3bc1b01419d66c54ce5c4c850f50f6328b1eee16c5->leave($__internal_1f8ac0b5e6d16a5b6f281f3bc1b01419d66c54ce5c4c850f50f6328b1eee16c5_prof);

    }

    // line 20
    public function block_contentmenu($context, array $blocks = array())
    {
        $__internal_ff50e248fbac3c18735d6da81527c6c1774d8df1bdf53f1dc0d7c4a3ea396d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff50e248fbac3c18735d6da81527c6c1774d8df1bdf53f1dc0d7c4a3ea396d5d->enter($__internal_ff50e248fbac3c18735d6da81527c6c1774d8df1bdf53f1dc0d7c4a3ea396d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmenu"));

        // line 21
        echo "<div class=\"activesidebar\">
\t";
        
        $__internal_ff50e248fbac3c18735d6da81527c6c1774d8df1bdf53f1dc0d7c4a3ea396d5d->leave($__internal_ff50e248fbac3c18735d6da81527c6c1774d8df1bdf53f1dc0d7c4a3ea396d5d_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b57d7ab2a09dbf4c1ecc018a7aa6f8d518de7cf387a79df65c7b1d645093c717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57d7ab2a09dbf4c1ecc018a7aa6f8d518de7cf387a79df65c7b1d645093c717->enter($__internal_b57d7ab2a09dbf4c1ecc018a7aa6f8d518de7cf387a79df65c7b1d645093c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b57d7ab2a09dbf4c1ecc018a7aa6f8d518de7cf387a79df65c7b1d645093c717->leave($__internal_b57d7ab2a09dbf4c1ecc018a7aa6f8d518de7cf387a79df65c7b1d645093c717_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_183b7275d9ec9f29f0addc1ebef38bc6229bcc99b7084e5ec44ad87bb1130ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183b7275d9ec9f29f0addc1ebef38bc6229bcc99b7084e5ec44ad87bb1130ca6->enter($__internal_183b7275d9ec9f29f0addc1ebef38bc6229bcc99b7084e5ec44ad87bb1130ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_183b7275d9ec9f29f0addc1ebef38bc6229bcc99b7084e5ec44ad87bb1130ca6->leave($__internal_183b7275d9ec9f29f0addc1ebef38bc6229bcc99b7084e5ec44ad87bb1130ca6_prof);

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
", "KeosuCoreBundle:MainViews:content.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/content.html.twig");
    }
}
