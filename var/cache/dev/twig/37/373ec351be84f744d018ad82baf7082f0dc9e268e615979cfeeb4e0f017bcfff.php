<?php

/* KeosuCoreBundle:App:manage.html.twig */
class __TwigTemplate_77ab5abdcf9463faefebca1638a6279626c1e46331f365eb20b16cc460f62d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:App:manage.html.twig", 19);
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
        $__internal_da2e99d0c9cfd9ab19c89f5f18bb3790dcff3322391382d5ad3571b3045e0238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2e99d0c9cfd9ab19c89f5f18bb3790dcff3322391382d5ad3571b3045e0238->enter($__internal_da2e99d0c9cfd9ab19c89f5f18bb3790dcff3322391382d5ad3571b3045e0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2e99d0c9cfd9ab19c89f5f18bb3790dcff3322391382d5ad3571b3045e0238->leave($__internal_da2e99d0c9cfd9ab19c89f5f18bb3790dcff3322391382d5ad3571b3045e0238_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e504594a00e2deebb2d5118e5ae4a116d5a731ce454b26ba8a26e6d95cc8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e504594a00e2deebb2d5118e5ae4a116d5a731ce454b26ba8a26e6d95cc8c7->enter($__internal_b9e504594a00e2deebb2d5118e5ae4a116d5a731ce454b26ba8a26e6d95cc8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div class=\"panel\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Apps", array(), "messages");
        echo "</legend>

\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_app_manage_add");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add new app", array(), "messages");
        echo "</a>
\t\t\t\t\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("App name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("App Theme", array(), "messages");
        echo "</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "theme", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_app_manage_edit", array("id" => $this->getAttribute($context["app"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("App name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 53
        echo $this->env->getExtension('translator')->getTranslator()->trans("App Theme", array(), "messages");
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
        
        $__internal_b9e504594a00e2deebb2d5118e5ae4a116d5a731ce454b26ba8a26e6d95cc8c7->leave($__internal_b9e504594a00e2deebb2d5118e5ae4a116d5a731ce454b26ba8a26e6d95cc8c7_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 53,  105 => 52,  100 => 49,  90 => 45,  85 => 43,  81 => 42,  78 => 41,  74 => 40,  66 => 35,  62 => 34,  52 => 29,  47 => 27,  40 => 22,  34 => 21,  11 => 19,);
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

{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %}

{% block body %}
\t<div class=\"panel\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>{% trans %}Apps{% endtrans %}</legend>

\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('keosu_core_app_manage_add') }}\">{% trans %}Add new app{% endtrans %}</a>
\t\t\t\t\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>{% trans %}App name{% endtrans %}</th>
\t\t\t\t\t\t\t\t<th>{% trans %}App Theme{% endtrans %}</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for app in apps %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.name }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ app.theme }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_app_manage_edit',{'id':app.id}) }}\"><i class=\"glyphicon glyphicon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>{% trans %}App name{% endtrans %}</th>
\t\t\t\t\t\t\t\t<th>{% trans %}App Theme{% endtrans %}</th>
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
", "KeosuCoreBundle:App:manage.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/App/manage.html.twig");
    }
}
