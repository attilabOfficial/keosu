<?php

/* KeosuDataModelEventModelBundle:Edit:edit.html.twig */
class __TwigTemplate_cf411799fb94a028916b457376b4f25a3234926e1381242281c138122ef0ed8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelEventModelBundle:Edit:edit.html.twig", 19);
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
        $__internal_2494b0d33de9e0119261f0f8e6f1816e18cd694d8b10b2957c2c7cd64c597204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2494b0d33de9e0119261f0f8e6f1816e18cd694d8b10b2957c2c7cd64c597204->enter($__internal_2494b0d33de9e0119261f0f8e6f1816e18cd694d8b10b2957c2c7cd64c597204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelEventModelBundle:Edit:edit.html.twig"));

        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KeosuCoreBundle:Form:fields-image.html.twig"));
        // line 19
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2494b0d33de9e0119261f0f8e6f1816e18cd694d8b10b2957c2c7cd64c597204->leave($__internal_2494b0d33de9e0119261f0f8e6f1816e18cd694d8b10b2957c2c7cd64c597204_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_11958cad76b776eb4ac0cb87c4e201530b9107d1aba3252cfbc7dc961c4606d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11958cad76b776eb4ac0cb87c4e201530b9107d1aba3252cfbc7dc961c4606d4->enter($__internal_11958cad76b776eb4ac0cb87c4e201530b9107d1aba3252cfbc7dc961c4606d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 24
        echo "    Edit event
";
        
        $__internal_11958cad76b776eb4ac0cb87c4e201530b9107d1aba3252cfbc7dc961c4606d4->leave($__internal_11958cad76b776eb4ac0cb87c4e201530b9107d1aba3252cfbc7dc961c4606d4_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_171d28858749f002a80b63209b1eef2d76fabf914685876c8920a50d9c20d705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171d28858749f002a80b63209b1eef2d76fabf914685876c8920a50d9c20d705->enter($__internal_171d28858749f002a80b63209b1eef2d76fabf914685876c8920a50d9c20d705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
    ";
        // line 30
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
        echo "
    <script src=\"https://code.jquery.com/ui/1.10.3/jquery-ui.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.date').datepicker({ dateFormat: 'dd-mm-y' });

\t\t\tfunction openInput(\$el){
\t\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t\t}

\t\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t\topenInput(\$(this));
\t\t\t\treturn false;
\t\t\t});

\t\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\t\tif (this.files &&  this.files[0]) {
\t\t\t\t\tvar reader = new FileReader();
\t\t\t\t\tel= \$(this);
\t\t\t\t\treader.onload = function (e) {
\t\t\t\t\t\t\$('#img-preview').attr('src', e.target.result).show();
\t\t\t\t\t}
\t\t\t\t\treader.readAsDataURL(this.files[0]);
\t\t\t\t}
\t\t\t});
        });


    </script>

    <div class=\"event-form\">
\t\t";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
\t\t    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
\t\t    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'row');
        echo "
\t\t    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'row');
        echo "
\t\t    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'row');
        echo "
\t\t    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startHour", array()), 'row');
        echo "
\t\t    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'row');
        echo "
\t\t    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endHour", array()), 'row');
        echo "
\t\t    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enableComments", array()), 'row');
        echo "


            <div class=\"picture-upload image-collection-entry col-lg-12\">
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
\t\t\t\t
                <center>
                    <button  type=\"button\" class=\"btn btn-info uploader\">Upload new File</button>
                </center>
            </div><br class=\"clear\"/>
            <input type=\"submit\" class=\"btn btn-success\" />
            <a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
                <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
            </a>
\t\t";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_171d28858749f002a80b63209b1eef2d76fabf914685876c8920a50d9c20d705->leave($__internal_171d28858749f002a80b63209b1eef2d76fabf914685876c8920a50d9c20d705_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelEventModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 85,  143 => 75,  136 => 71,  132 => 70,  128 => 69,  124 => 68,  120 => 67,  116 => 66,  112 => 65,  108 => 64,  104 => 63,  100 => 62,  96 => 61,  62 => 30,  58 => 28,  52 => 27,  44 => 24,  38 => 23,  31 => 19,  29 => 20,  11 => 19,);
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
Copyright (C) 2014  Vincent Le Borgne

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
{% form_theme form 'KeosuCoreBundle:Form:fields-image.html.twig' %}


{% block title %}
    Edit event
{% endblock %}

{% block content %}

    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
    {{ tinymce_init() }}
    <script src=\"https://code.jquery.com/ui/1.10.3/jquery-ui.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.date').datepicker({ dateFormat: 'dd-mm-y' });

\t\t\tfunction openInput(\$el){
\t\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t\t}

\t\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t\topenInput(\$(this));
\t\t\t\treturn false;
\t\t\t});

\t\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\t\tif (this.files &&  this.files[0]) {
\t\t\t\t\tvar reader = new FileReader();
\t\t\t\t\tel= \$(this);
\t\t\t\t\treader.onload = function (e) {
\t\t\t\t\t\t\$('#img-preview').attr('src', e.target.result).show();
\t\t\t\t\t}
\t\t\t\t\treader.readAsDataURL(this.files[0]);
\t\t\t\t}
\t\t\t});
        });


    </script>

    <div class=\"event-form\">
\t\t{{ form_start(form) }}
\t\t    {{ form_errors(form) }}
\t\t    {{ form_row(form.title) }}
\t\t    {{ form_row(form.description) }}
\t\t    {{ form_row(form.location) }}
\t\t    {{ form_row(form.color) }}
\t\t    {{ form_row(form.start) }}
\t\t    {{ form_row(form.startHour) }}
\t\t    {{ form_row(form.end) }}
\t\t    {{ form_row(form.endHour) }}
\t\t    {{ form_row(form.enableComments) }}


            <div class=\"picture-upload image-collection-entry col-lg-12\">
                {{ form_row(form.file) }}
\t\t\t\t
                <center>
                    <button  type=\"button\" class=\"btn btn-info uploader\">Upload new File</button>
                </center>
            </div><br class=\"clear\"/>
            <input type=\"submit\" class=\"btn btn-success\" />
            <a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
                <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
            </a>
\t\t{{ form_end(form) }}
    </div>
{% endblock %}

", "KeosuDataModelEventModelBundle:Edit:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\EventModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
