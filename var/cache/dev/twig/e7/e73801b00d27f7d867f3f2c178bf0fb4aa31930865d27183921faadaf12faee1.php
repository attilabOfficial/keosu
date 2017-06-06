<?php

/* KeosuCoreBundle:Page:edit.html.twig */
class __TwigTemplate_5ae1e8f8936c806c4d969571764e5f730ff675bb186248a3665af16ca6534924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:edit.html.twig", 18);
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
        $__internal_2acc1ce76876fc4ac4db24b9073f2809ed148f14f1f5dab2d07b89ceef95b65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc1ce76876fc4ac4db24b9073f2809ed148f14f1f5dab2d07b89ceef95b65d->enter($__internal_2acc1ce76876fc4ac4db24b9073f2809ed148f14f1f5dab2d07b89ceef95b65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acc1ce76876fc4ac4db24b9073f2809ed148f14f1f5dab2d07b89ceef95b65d->leave($__internal_2acc1ce76876fc4ac4db24b9073f2809ed148f14f1f5dab2d07b89ceef95b65d_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_6628efe953ce8edcf351dbc4d5f05bf22f1762ed5704ddd489a36b27ff965cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6628efe953ce8edcf351dbc4d5f05bf22f1762ed5704ddd489a36b27ff965cec->enter($__internal_6628efe953ce8edcf351dbc4d5f05bf22f1762ed5704ddd489a36b27ff965cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Page", array(), "messages");
        
        $__internal_6628efe953ce8edcf351dbc4d5f05bf22f1762ed5704ddd489a36b27ff965cec->leave($__internal_6628efe953ce8edcf351dbc4d5f05bf22f1762ed5704ddd489a36b27ff965cec_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_0679dacea7b8ddc82b8033ac552046f4867f87d65380a386d5da86425aba6557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0679dacea7b8ddc82b8033ac552046f4867f87d65380a386d5da86425aba6557->enter($__internal_0679dacea7b8ddc82b8033ac552046f4867f87d65380a386d5da86425aba6557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\ttemplateButton(\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["templateDir"]) ? $context["templateDir"] : $this->getContext($context, "templateDir")), "html", null, true);
        echo "\", \"\");
\t\t});
\t</script>
\t<div class=\"panel\">
\t\t<h1>";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Page", array(), "messages");
        echo "</h1>

\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isMain", array()), 'row');
        echo "
\t\t<div class=\"imgTemplate\">
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "templateId", array()), 'row');
        echo "
\t\t</div>


\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button></a>
\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>

";
        
        $__internal_0679dacea7b8ddc82b8033ac552046f4867f87d65380a386d5da86425aba6557->leave($__internal_0679dacea7b8ddc82b8033ac552046f4867f87d65380a386d5da86425aba6557_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  98 => 43,  90 => 38,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  68 => 31,  59 => 27,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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

{% block title %}{% trans %}Edit Page{% endtrans %}{% endblock %}

{% block content %}

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\ttemplateButton(\"{{url_base}}\", \"{{templateDir}}\", \"\");
\t\t});
\t</script>
\t<div class=\"panel\">
\t\t<h1>{% trans %}Edit Page{% endtrans %}</h1>

\t\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
\t\t{{ form_row(form.name) }}
\t\t{{ form_row(form.isMain) }}
\t\t<div class=\"imgTemplate\">
\t\t\t{{ form_row(form.templateId) }}
\t\t</div>


\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">{% trans %}Cancel{% endtrans %}</button></a>
\t\t{{ form_end(form) }}
\t</div>

{% endblock %}
", "KeosuCoreBundle:Page:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/edit.html.twig");
    }
}
