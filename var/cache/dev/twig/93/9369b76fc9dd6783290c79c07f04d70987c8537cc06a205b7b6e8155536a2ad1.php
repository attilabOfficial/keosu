<?php

/* KeosuReaderRssEventReaderBundle:Edit:edit.html.twig */
class __TwigTemplate_7bfb05c1d5e6056f9be309fe4f352448268ecc4ad2dbd316c4adaafb907c31da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuReaderRssEventReaderBundle:Edit:edit.html.twig", 18);
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
        $__internal_e07fc79a45be1d2445b325c755754e2eba6eafb2a38e286f4efecd76ee5b1df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07fc79a45be1d2445b325c755754e2eba6eafb2a38e286f4efecd76ee5b1df1->enter($__internal_e07fc79a45be1d2445b325c755754e2eba6eafb2a38e286f4efecd76ee5b1df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuReaderRssEventReaderBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07fc79a45be1d2445b325c755754e2eba6eafb2a38e286f4efecd76ee5b1df1->leave($__internal_e07fc79a45be1d2445b325c755754e2eba6eafb2a38e286f4efecd76ee5b1df1_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4f7c0cf67f1e9a065311c063b472dcf8ac49e339c428e61e3a8d73135f23dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f7c0cf67f1e9a065311c063b472dcf8ac49e339c428e61e3a8d73135f23dd->enter($__internal_4e4f7c0cf67f1e9a065311c063b472dcf8ac49e339c428e61e3a8d73135f23dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "\tConfigure a new event reader
";
        
        $__internal_4e4f7c0cf67f1e9a065311c063b472dcf8ac49e339c428e61e3a8d73135f23dd->leave($__internal_4e4f7c0cf67f1e9a065311c063b472dcf8ac49e339c428e61e3a8d73135f23dd_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_43d0c054fa8c52d8b10a210a00abf37c124393adff54e6e339026d552eb8a29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d0c054fa8c52d8b10a210a00abf37c124393adff54e6e339026d552eb8a29a->enter($__internal_43d0c054fa8c52d8b10a210a00abf37c124393adff54e6e339026d552eb8a29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "<div>
\t<h1>Edit RSS Event Reader</h1>
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
\t    <div class=\"allowupdate\">
\t    \t";
        // line 33
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
\t    <input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_43d0c054fa8c52d8b10a210a00abf37c124393adff54e6e339026d552eb8a29a->leave($__internal_43d0c054fa8c52d8b10a210a00abf37c124393adff54e6e339026d552eb8a29a_prof);

    }

    public function getTemplateName()
    {
        return "KeosuReaderRssEventReaderBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  78 => 33,  72 => 30,  68 => 29,  63 => 27,  59 => 26,  55 => 24,  49 => 23,  41 => 21,  35 => 20,  11 => 18,);
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
\tCopyright (C) 2014  Vincent Le Borgne

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
\tConfigure a new event reader
{% endblock %}
{% block content %}
<div>
\t<h1>Edit RSS Event Reader</h1>
   {{ form_start(form) }}
\t    {{ form_errors(form) }}
\t
\t    {{ form_row(form.name) }}
\t    {{ form_row(form.feed_url) }}
\t    <br class=\"clear\"/>
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
\t    <input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t{{ form_end(form) }}
    
</div>
{% endblock %}
", "KeosuReaderRssEventReaderBundle:Edit:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\Reader\\RssEventReaderBundle/Resources/views/Edit/edit.html.twig");
    }
}
