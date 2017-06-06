<?php

/* KeosuReaderRssReaderBundle:Edit:edit.html.twig */
class __TwigTemplate_bfa0422060234170c59e6ffa38dba0bee783b4464c286fa4bbd198a93157c82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuReaderRssReaderBundle:Edit:edit.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9afe198fdca136ea2aaa92d898ab118b3d373918ca2b6e90821171897a036314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe198fdca136ea2aaa92d898ab118b3d373918ca2b6e90821171897a036314->enter($__internal_9afe198fdca136ea2aaa92d898ab118b3d373918ca2b6e90821171897a036314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuReaderRssReaderBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9afe198fdca136ea2aaa92d898ab118b3d373918ca2b6e90821171897a036314->leave($__internal_9afe198fdca136ea2aaa92d898ab118b3d373918ca2b6e90821171897a036314_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca1f304fecd126092fa3b1f76add4b7856fba846661584cbed075149febb902a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1f304fecd126092fa3b1f76add4b7856fba846661584cbed075149febb902a->enter($__internal_ca1f304fecd126092fa3b1f76add4b7856fba846661584cbed075149febb902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "\tConfigure a new reader
";
        
        $__internal_ca1f304fecd126092fa3b1f76add4b7856fba846661584cbed075149febb902a->leave($__internal_ca1f304fecd126092fa3b1f76add4b7856fba846661584cbed075149febb902a_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_894896b68731a86656dacefed89607c31157b712d0b67b269f3d51f45a8f71a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894896b68731a86656dacefed89607c31157b712d0b67b269f3d51f45a8f71a7->enter($__internal_894896b68731a86656dacefed89607c31157b712d0b67b269f3d51f45a8f71a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "<div>
\t<h1>Edit RSS Reader</h1>
   ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "feed_url", array()), 'row');
        echo "
\t    <br class=\"clear\"/>
\t    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "striphtml", array()), 'row');
        echo "
\t    <br class=\"clear\"/>
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "
\t\t<br class=\"clear\"/>
\t    <div class=\"allowupdate\">
\t    \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allowupdate", array()), 'row');
        echo "
\t    \t<div class=\"allowupdatelabel\">
\t    \t\tAllow content be to synchronise again after the first import.
\t    \t\t<a class=\"badge remove-button\" title=\"Allow content be to update after the first import. If you check this box you won't be able to modify content manually\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\"></span>
\t\t\t\t</a>
\t    \t\t 
\t    \t</div>
\t    </div>
    \t <br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_894896b68731a86656dacefed89607c31157b712d0b67b269f3d51f45a8f71a7->leave($__internal_894896b68731a86656dacefed89607c31157b712d0b67b269f3d51f45a8f71a7_prof);

    }

    public function getTemplateName()
    {
        return "KeosuReaderRssReaderBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  88 => 37,  82 => 34,  77 => 32,  72 => 30,  68 => 29,  63 => 27,  59 => 26,  55 => 24,  49 => 23,  41 => 21,  35 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{# \t
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2016  Pockeit

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
{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}

{% block title %}
\tConfigure a new reader
{% endblock %}
{% block content %}
<div>
\t<h1>Edit RSS Reader</h1>
   {{ form_start(form) }}
\t    {{ form_errors(form) }}
\t
\t    {{ form_row(form.name) }}
\t    {{ form_row(form.feed_url) }}
\t    <br class=\"clear\"/>
\t    {{ form_row(form.striphtml) }}
\t    <br class=\"clear\"/>
\t\t{{ form_row(form.tags) }}
\t\t<br class=\"clear\"/>
\t    <div class=\"allowupdate\">
\t    \t{{ form_row(form.allowupdate) }}
\t    \t<div class=\"allowupdatelabel\">
\t    \t\tAllow content be to synchronise again after the first import.
\t    \t\t<a class=\"badge remove-button\" title=\"Allow content be to update after the first import. If you check this box you won't be able to modify content manually\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\"></span>
\t\t\t\t</a>
\t    \t\t 
\t    \t</div>
\t    </div>
    \t <br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t{{ form_end(form) }}
</div>
{% endblock %}

", "KeosuReaderRssReaderBundle:Edit:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\Reader\\RssReaderBundle/Resources/views/Edit/edit.html.twig");
    }
}
