<?php

/* KeosuCoreBundle:Page:editGadget.html.twig */
class __TwigTemplate_f433a746ecee723a92e92c354db7b4da6805d77fc191918e3a4c94a3f07db545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:editGadget.html.twig", 19);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e646a313a774e761e8668946029712cb512f5d47c3fa3ae18f6ee793b1c833e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e646a313a774e761e8668946029712cb512f5d47c3fa3ae18f6ee793b1c833e4->enter($__internal_e646a313a774e761e8668946029712cb512f5d47c3fa3ae18f6ee793b1c833e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:editGadget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e646a313a774e761e8668946029712cb512f5d47c3fa3ae18f6ee793b1c833e4->leave($__internal_e646a313a774e761e8668946029712cb512f5d47c3fa3ae18f6ee793b1c833e4_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddea948d8d9995e547ab14e4c4a18bb0477e3376215de27b60c4bb7f1cdb83ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddea948d8d9995e547ab14e4c4a18bb0477e3376215de27b60c4bb7f1cdb83ed->enter($__internal_ddea948d8d9995e547ab14e4c4a18bb0477e3376215de27b60c4bb7f1cdb83ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "\t";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit gadget", array(), "messages");
        
        $__internal_ddea948d8d9995e547ab14e4c4a18bb0477e3376215de27b60c4bb7f1cdb83ed->leave($__internal_ddea948d8d9995e547ab14e4c4a18bb0477e3376215de27b60c4bb7f1cdb83ed_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f3605abb159f7a5587c7136af4961fb5b6f8e33506eeb78cb40bfa207c1fd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3605abb159f7a5587c7136af4961fb5b6f8e33506eeb78cb40bfa207c1fd9a->enter($__internal_4f3605abb159f7a5587c7136af4961fb5b6f8e33506eeb78cb40bfa207c1fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "\t<h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit gadget", array(), "messages");
        echo "</h1>
\t<br/>
\t<div>
\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

\t\t<div class=\"imgTemplate\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "template", array()), 'row');
        echo "
\t\t</div>

\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shared", array()), 'row');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "config", array()), 'row');
        echo "

\t\t<br class=\"clear\"/><br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t</a>

\t\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
\t<script>
\t\t\$(document).ready(function() {
\t\t\ttemplateButton(\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetDir"]) ? $context["gadgetDir"] : $this->getContext($context, "gadgetDir")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : $this->getContext($context, "gadgetName")), "html", null, true);
        echo "\");

\t\t\t// This is a very nasty hack for resolving a issue encountered during the save of the menu gadget
\t\t\t// Sometimes, a page included in the config is not taken into account
\t\t\tif ('";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : $this->getContext($context, "gadgetName")), "html", null, true);
        echo "' == 'keosu-menu') {
\t\t\t\t\$('#content form').submit(function() {
\t\t\t\t\t\$('#content .collection-items select').each(function(index) {
\t\t\t\t\t\t\$(this).attr('name', 'form[config][page][' + (index+1) + ']')
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
";
        
        $__internal_4f3605abb159f7a5587c7136af4961fb5b6f8e33506eeb78cb40bfa207c1fd9a->leave($__internal_4f3605abb159f7a5587c7136af4961fb5b6f8e33506eeb78cb40bfa207c1fd9a_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:editGadget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  100 => 48,  92 => 43,  86 => 40,  78 => 35,  74 => 34,  68 => 31,  62 => 28,  55 => 25,  49 => 24,  41 => 22,  35 => 21,  11 => 19,);
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

{% extends 'KeosuCoreBundle:MainViews:page.html.twig' %}

{% block title %}
\t{% trans %}Edit gadget{% endtrans %}
{% endblock %}
{% block content %}
\t<h1>{% trans %}Edit gadget{% endtrans %}</h1>
\t<br/>
\t<div>
\t\t{{ form_start(form) }}

\t\t<div class=\"imgTemplate\">
\t\t\t{{ form_row(form.template) }}
\t\t</div>

\t\t{{ form_row(form.shared) }}
\t\t{{ form_row(form.config) }}

\t\t<br class=\"clear\"/><br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">{% trans %}Cancel{% endtrans %}</button>
\t\t</a>

\t\t{{ form_end(form) }}

\t</div>
\t<script>
\t\t\$(document).ready(function() {
\t\t\ttemplateButton(\"{{url_base}}\", \"{{gadgetDir}}\", \"{{gadgetName}}\");

\t\t\t// This is a very nasty hack for resolving a issue encountered during the save of the menu gadget
\t\t\t// Sometimes, a page included in the config is not taken into account
\t\t\tif ('{{gadgetName}}' == 'keosu-menu') {
\t\t\t\t\$('#content form').submit(function() {
\t\t\t\t\t\$('#content .collection-items select').each(function(index) {
\t\t\t\t\t\t\$(this).attr('name', 'form[config][page][' + (index+1) + ']')
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
{% endblock %}


", "KeosuCoreBundle:Page:editGadget.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/editGadget.html.twig");
    }
}
