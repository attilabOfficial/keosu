<?php

/* KeosuCoreBundle:MainViews:page.html.twig */
class __TwigTemplate_55fe0dfa9a81bfa5aeddb5c17740246ec37f62995dbda1474f475bfd85ec52e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:page.html.twig", 19);
        $this->blocks = array(
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
        $__internal_d4269c759d62b08e448c4a34f14697d35c48012dff58dd8f135415a7194d406e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4269c759d62b08e448c4a34f14697d35c48012dff58dd8f135415a7194d406e->enter($__internal_d4269c759d62b08e448c4a34f14697d35c48012dff58dd8f135415a7194d406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4269c759d62b08e448c4a34f14697d35c48012dff58dd8f135415a7194d406e->leave($__internal_d4269c759d62b08e448c4a34f14697d35c48012dff58dd8f135415a7194d406e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d3d845690f3b07d21b95fcd1e2a6ae36f74e13fa7e8887bde183216a3b56221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d845690f3b07d21b95fcd1e2a6ae36f74e13fa7e8887bde183216a3b56221->enter($__internal_4d3d845690f3b07d21b95fcd1e2a6ae36f74e13fa7e8887bde183216a3b56221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div id=\"checklayout\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$.get('";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_check");
        echo "', function(data) {
\t\t\t\t\t\$('#checklayout').html(data);
\t\t\t\t});
\t\t\t} );
\t\t</script>
\t</div>
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "\t\t</div>
\t</div>
";
        
        $__internal_4d3d845690f3b07d21b95fcd1e2a6ae36f74e13fa7e8887bde183216a3b56221->leave($__internal_4d3d845690f3b07d21b95fcd1e2a6ae36f74e13fa7e8887bde183216a3b56221_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_2834a340d75c3e0637ffef8cf2bf0519d8a9dcce801bbf59e38281a45154deb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2834a340d75c3e0637ffef8cf2bf0519d8a9dcce801bbf59e38281a45154deb6->enter($__internal_2834a340d75c3e0637ffef8cf2bf0519d8a9dcce801bbf59e38281a45154deb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-book icon-menu\"></span> Pages</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("The page part is about your application page, articles, readers data, etc...", array(), "messages");
        // line 40
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-file icon-menu\"></span>";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("A page is a page, no matter about content for instance, it's only a way to display something (but have an idea of what you want to display)", array(), "messages");
        // line 49
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage");
        echo "\" ><button type=\"button\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        echo " </button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-edit icon-menu\"></span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</h3>

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-default\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_2834a340d75c3e0637ffef8cf2bf0519d8a9dcce801bbf59e38281a45154deb6->leave($__internal_2834a340d75c3e0637ffef8cf2bf0519d8a9dcce801bbf59e38281a45154deb6_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  122 => 58,  117 => 56,  113 => 54,  109 => 53,  101 => 50,  98 => 49,  96 => 48,  91 => 46,  83 => 40,  81 => 39,  74 => 34,  68 => 33,  59 => 65,  57 => 33,  46 => 25,  41 => 22,  35 => 21,  11 => 19,);
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

{% block body %}
\t<div id=\"checklayout\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$.get('{{path('keosu_core_views_page_check') }}', function(data) {
\t\t\t\t\t\$('#checklayout').html(data);
\t\t\t\t});
\t\t\t} );
\t\t</script>
\t</div>
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t{% block content %}
\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-book icon-menu\"></span> Pages</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{% trans %}The page part is about your application page, articles, readers data, etc...{% endtrans %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-file icon-menu\"></span>{% trans %}Manage pages{% endtrans %}</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{% trans %}A page is a page, no matter about content for instance, it's only a way to display something (but have an idea of what you want to display){% endtrans %}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_views_page_manage') }}\" ><button type=\"button\" class=\"btn btn-default\">{% trans %}Manage pages{% endtrans %} </button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for page in pages %}
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-edit icon-menu\"></span>{{ page.name }}</h3>

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_views_page',{'id':page.id}) }}\"><button type=\"button\" class=\"btn btn-default\">{% trans %}Edit{% endtrans %} {{ page.name }}</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t</div>
{% endblock %}
", "KeosuCoreBundle:MainViews:page.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/page.html.twig");
    }
}
