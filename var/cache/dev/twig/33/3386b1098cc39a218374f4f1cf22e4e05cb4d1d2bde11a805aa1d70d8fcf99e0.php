<?php

/* KeosuCoreBundle:Theme:edit.html.twig */
class __TwigTemplate_24a78910d78894f9de63c57425c33861c6357b94f93f6b9fda823791586028ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:Theme:edit.html.twig", 18);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4942aed76bb0ba5dc17495a8a00dfcc0424859719e8bf0dbe7fd624f8e2941c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4942aed76bb0ba5dc17495a8a00dfcc0424859719e8bf0dbe7fd624f8e2941c8->enter($__internal_4942aed76bb0ba5dc17495a8a00dfcc0424859719e8bf0dbe7fd624f8e2941c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Theme:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4942aed76bb0ba5dc17495a8a00dfcc0424859719e8bf0dbe7fd624f8e2941c8->leave($__internal_4942aed76bb0ba5dc17495a8a00dfcc0424859719e8bf0dbe7fd624f8e2941c8_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9a5fc290fea5d63c43f385f8a65f41a2f76446202b68ab7570b74f7f0d48a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a5fc290fea5d63c43f385f8a65f41a2f76446202b68ab7570b74f7f0d48a4d->enter($__internal_a9a5fc290fea5d63c43f385f8a65f41a2f76446202b68ab7570b74f7f0d48a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "\t";
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 27
        echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\tfunction openInput(\$el){
\t\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t\t}

\t\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t\topenInput(\$(this));
\t\t\t\treturn false;
\t\t\t});

\t\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\t\t\$nameFile = \$( this ).val().split('\\\\');
\t\t\t\t\$('#name-file').html('\t' + \$nameFile[\$nameFile.length - 1]);
\t\t\t});
\t\t});
\t</script>
\t<div class=\"picture-edit\">
\t\t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t<div class=\"upload image-collection-entry col-lg-12\">
\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
\t\t\t<button type=\"button\" class=\"btn btn-info uploader\">";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Upload new Theme", array(), "messages");
        echo "</button><span id=\"name-file\"></span>
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<div class=\"col-md-3\"></div>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button></a>
\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
";
        
        $__internal_a9a5fc290fea5d63c43f385f8a65f41a2f76446202b68ab7570b74f7f0d48a4d->leave($__internal_a9a5fc290fea5d63c43f385f8a65f41a2f76446202b68ab7570b74f7f0d48a4d_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Theme:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 57,  95 => 56,  86 => 50,  82 => 49,  77 => 47,  73 => 46,  52 => 27,  46 => 24,  43 => 23,  40 => 22,  34 => 21,  11 => 18,);
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
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2014  Vincent Le Borgne, Pockeit

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
{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %}


{% block content %}
\t{% if error != null %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{error}}
\t\t</div>
\t{% endif %}
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\tfunction openInput(\$el){
\t\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t\t}

\t\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t\topenInput(\$(this));
\t\t\t\treturn false;
\t\t\t});

\t\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\t\t\$nameFile = \$( this ).val().split('\\\\');
\t\t\t\t\$('#name-file').html('\t' + \$nameFile[\$nameFile.length - 1]);
\t\t\t});
\t\t});
\t</script>
\t<div class=\"picture-edit\">
\t\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
\t\t<div class=\"upload image-collection-entry col-lg-12\">
\t\t\t{{ form_row(form.file) }}
\t\t\t<button type=\"button\" class=\"btn btn-info uploader\">{% trans %}Upload new Theme{% endtrans %}</button><span id=\"name-file\"></span>
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<div class=\"col-md-3\"></div>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">{% trans %}Cancel{% endtrans %}</button></a>
\t\t{{ form_end(form) }}
\t</div>
{% endblock %}

", "KeosuCoreBundle:Theme:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Theme/edit.html.twig");
    }
}
