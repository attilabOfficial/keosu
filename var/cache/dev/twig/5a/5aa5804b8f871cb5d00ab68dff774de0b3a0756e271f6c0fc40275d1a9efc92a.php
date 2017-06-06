<?php

/* KeosuDataModelSearchModelBundle:Edit:edit.html.twig */
class __TwigTemplate_ecbd773dfe49e18bf1cbb36ee0f0734b48b4a28262f36f4e519b43973ef3d66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelSearchModelBundle:Edit:edit.html.twig", 18);
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
        $__internal_40b7bf03b0ec4b71aef2fc93225423c095dc5133f4787e32016222510218b5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b7bf03b0ec4b71aef2fc93225423c095dc5133f4787e32016222510218b5d1->enter($__internal_40b7bf03b0ec4b71aef2fc93225423c095dc5133f4787e32016222510218b5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelSearchModelBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b7bf03b0ec4b71aef2fc93225423c095dc5133f4787e32016222510218b5d1->leave($__internal_40b7bf03b0ec4b71aef2fc93225423c095dc5133f4787e32016222510218b5d1_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5d0211d4fec22afeef741735be46dd4e79626c48448fbb2bffa50b5c147c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5d0211d4fec22afeef741735be46dd4e79626c48448fbb2bffa50b5c147c65->enter($__internal_6a5d0211d4fec22afeef741735be46dd4e79626c48448fbb2bffa50b5c147c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "Edit Search entry
";
        
        $__internal_6a5d0211d4fec22afeef741735be46dd4e79626c48448fbb2bffa50b5c147c65->leave($__internal_6a5d0211d4fec22afeef741735be46dd4e79626c48448fbb2bffa50b5c147c65_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_1904d45a4fadbe577f0d84a304f8bf2c2fe43569912239713b244c42e3bd66dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1904d45a4fadbe577f0d84a304f8bf2c2fe43569912239713b244c42e3bd66dd->enter($__internal_1904d45a4fadbe577f0d84a304f8bf2c2fe43569912239713b244c42e3bd66dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "

<div id=\"articleform\">
\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_1904d45a4fadbe577f0d84a304f8bf2c2fe43569912239713b244c42e3bd66dd->leave($__internal_1904d45a4fadbe577f0d84a304f8bf2c2fe43569912239713b244c42e3bd66dd_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelSearchModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  64 => 30,  60 => 29,  55 => 26,  49 => 25,  41 => 22,  35 => 21,  11 => 18,);
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
Edit Search entry
{% endblock %}

{% block content %}


<div id=\"articleform\">
\t{{ form_start(form) }}
\t\t{{ form_widget(form) }}

\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t{{ form_end(form) }}

</div>
{% endblock %}

", "KeosuDataModelSearchModelBundle:Edit:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\SearchModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
