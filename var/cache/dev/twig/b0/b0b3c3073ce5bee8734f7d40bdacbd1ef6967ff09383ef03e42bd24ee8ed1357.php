<?php

/* KeosuCoreBundle:Theme:manage.html.twig */
class __TwigTemplate_5e7708e3296ef16b90bb66911913956b3860e87072062266b33c9008b3aa0226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:Theme:manage.html.twig", 14);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b574b7af3dc3e7551351d9a6e0d3bcc7f0742196273630006cbc47bd20480f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b574b7af3dc3e7551351d9a6e0d3bcc7f0742196273630006cbc47bd20480f8->enter($__internal_4b574b7af3dc3e7551351d9a6e0d3bcc7f0742196273630006cbc47bd20480f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Theme:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b574b7af3dc3e7551351d9a6e0d3bcc7f0742196273630006cbc47bd20480f8->leave($__internal_4b574b7af3dc3e7551351d9a6e0d3bcc7f0742196273630006cbc47bd20480f8_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1915549b177408d9aaa1a7f492a88f47eb5958f20b4c8c519ead2796bd17cf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1915549b177408d9aaa1a7f492a88f47eb5958f20b4c8c519ead2796bd17cf14->enter($__internal_1915549b177408d9aaa1a7f492a88f47eb5958f20b4c8c519ead2796bd17cf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
\t<div class=\"panel\">
\t\t<div class=\"row\">
\t\t\t";
        // line 18
        if (((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) != null)) {
            // line 19
            echo "\t\t\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 21
        echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend><span class=\"glyphicon glyphicon-tint icon-menu\"></span>";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Themes", array(), "messages");
        echo "</legend>
\t\t\t\t\t\t<p>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Upload themes and page templates archive file.", array(), "messages");
        echo "</p>
\t\t\t\t\t\t<a class=\"btn btn-success\"
\t\t\t\t\t\t   href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_theme_manage_add");
        echo "\"><span class=\"glyphicon glyphicon-plus-sign icon-btn\"></span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add new Theme", array(), "messages");
        echo "</a>
\t\t\t\t\t\t<a target=\"_blank\" class=\"btn btn-store\"
\t\t\t\t\t\t   href=\"http://store.keosu.com/index.php?id_category=12&controller=category&utm_source=keosu&utm_medium=cms&utm_term=theme%20store&utm_campaign=keosu%20cms%20to%20store\"><span class=\"glyphicon glyphicon-shopping-cart icon-btn\"></span>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Theme Store", array(), "messages");
        echo "</a>
\t\t\t\t\t\t<br class=\"clear\" /> <br class=\"clear\" />
\t\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Theme name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 40
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Theme name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_1915549b177408d9aaa1a7f492a88f47eb5958f20b4c8c519ead2796bd17cf14->leave($__internal_1915549b177408d9aaa1a7f492a88f47eb5958f20b4c8c519ead2796bd17cf14_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Theme:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  106 => 45,  96 => 41,  93 => 40,  89 => 39,  81 => 34,  73 => 29,  66 => 27,  61 => 25,  57 => 24,  52 => 21,  46 => 19,  44 => 18,  39 => 15,  11 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Keosu is an open source CMS for mobile app Copyright (C) 2014
Vincent Le Borgne, Pockeit This program is free software: you can
redistribute it and/or modify it under the terms of the GNU Affero
General Public License as published by the Free Software Foundation,
either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero
General Public License for more details. You should have received a copy
of the GNU Affero General Public License along with this program. If
not, see <http://www.gnu.org/licenses/>. #}

{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %} {% block body %}

\t<div class=\"panel\">
\t\t<div class=\"row\">
\t\t\t{% if msg != null %}
\t\t\t\t<div class=\"alert alert-success\">{{ msg }}</div>
\t\t\t{% endif %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend><span class=\"glyphicon glyphicon-tint icon-menu\"></span>{% trans %}Themes{% endtrans %}</legend>
\t\t\t\t\t\t<p>{% trans %}Upload themes and page templates archive file.{% endtrans %}</p>
\t\t\t\t\t\t<a class=\"btn btn-success\"
\t\t\t\t\t\t   href=\"{{ path('keosu_core_theme_manage_add') }}\"><span class=\"glyphicon glyphicon-plus-sign icon-btn\"></span>{% trans %}Add new Theme{% endtrans %}</a>
\t\t\t\t\t\t<a target=\"_blank\" class=\"btn btn-store\"
\t\t\t\t\t\t   href=\"http://store.keosu.com/index.php?id_category=12&controller=category&utm_source=keosu&utm_medium=cms&utm_term=theme%20store&utm_campaign=keosu%20cms%20to%20store\"><span class=\"glyphicon glyphicon-shopping-cart icon-btn\"></span>{% trans %}Theme Store{% endtrans %}</a>
\t\t\t\t\t\t<br class=\"clear\" /> <br class=\"clear\" />
\t\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>{% trans %}Theme name{% endtrans %}</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for theme in themes %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ theme.name }}</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>{% trans %}Theme name{% endtrans %}</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "KeosuCoreBundle:Theme:manage.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Theme/manage.html.twig");
    }
}
