<?php

/* KeosuCoreBundle:Page:manage.html.twig */
class __TwigTemplate_37df50214cce5ac56e57a0cf24e3eb093028ed325a6d9435ff1e273a1c5e2bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:manage.html.twig", 18);
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
        $__internal_53a25b1ee62f11017a5049affeaea3231a27fd7404a3ad61f36e9331c516ddc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a25b1ee62f11017a5049affeaea3231a27fd7404a3ad61f36e9331c516ddc1->enter($__internal_53a25b1ee62f11017a5049affeaea3231a27fd7404a3ad61f36e9331c516ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53a25b1ee62f11017a5049affeaea3231a27fd7404a3ad61f36e9331c516ddc1->leave($__internal_53a25b1ee62f11017a5049affeaea3231a27fd7404a3ad61f36e9331c516ddc1_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb1ec76d698d7007b43538bdb2631eea758aecb7cc5c564389d2085b7c057b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb1ec76d698d7007b43538bdb2631eea758aecb7cc5c564389d2085b7c057b1->enter($__internal_dbb1ec76d698d7007b43538bdb2631eea758aecb7cc5c564389d2085b7c057b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        
        $__internal_dbb1ec76d698d7007b43538bdb2631eea758aecb7cc5c564389d2085b7c057b1->leave($__internal_dbb1ec76d698d7007b43538bdb2631eea758aecb7cc5c564389d2085b7c057b1_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_81c874dbedfc287e9bdf81c6031b66d6c4c6c7cf69803918a056198fadbeb05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c874dbedfc287e9bdf81c6031b66d6c4c6c7cf69803918a056198fadbeb05e->enter($__internal_81c874dbedfc287e9bdf81c6031b66d6c4c6c7cf69803918a056198fadbeb05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<fieldset>
\t\t\t\t<legend><span class=\"glyphicon glyphicon-file icon-menu\"></span>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage Pages", array(), "messages");
        echo "</legend>

\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage_add");
        echo "\"><span class=\"glyphicon glyphicon-plus-sign icon-success\"></span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add new page", array(), "messages");
        echo "</a>

\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("is index", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("page name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("page template", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th colspan=\"2\"></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 42
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 44
            if ($this->getAttribute($context["page"], "isMain", array())) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "templateId", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigIncludePanelExtension')->includePanelPage($this->getAttribute($context["page"], "id", array()));
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "\t\t\t\t\t\t<p>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("No pages", array(), "messages");
            echo "</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("is index", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("page name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("page template", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t</ul>
\t\t</div>
\t</div>
";
        
        $__internal_81c874dbedfc287e9bdf81c6031b66d6c4c6c7cf69803918a056198fadbeb05e->leave($__internal_81c874dbedfc287e9bdf81c6031b66d6c4c6c7cf69803918a056198fadbeb05e_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  144 => 61,  140 => 60,  135 => 57,  126 => 55,  117 => 51,  112 => 49,  108 => 48,  105 => 47,  101 => 45,  99 => 44,  95 => 42,  90 => 41,  82 => 36,  78 => 35,  74 => 34,  64 => 29,  59 => 27,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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

{% block title %}{% trans %}Manage pages{% endtrans %}{% endblock %}

{% block content %}

\t<div class=\"row\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<fieldset>
\t\t\t\t<legend><span class=\"glyphicon glyphicon-file icon-menu\"></span>{% trans %}Manage Pages{% endtrans %}</legend>

\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('keosu_core_views_page_manage_add') }}\"><span class=\"glyphicon glyphicon-plus-sign icon-success\"></span>{% trans %}Add new page{% endtrans %}</a>

\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>{% trans %}is index{% endtrans %}</th>
\t\t\t\t\t\t<th>{% trans %}page name{% endtrans %}</th>
\t\t\t\t\t\t<th>{% trans %}page template{% endtrans %}</th>
\t\t\t\t\t\t<th colspan=\"2\"></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for page in pages %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if page.isMain %}
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ page.name }}</td>
\t\t\t\t\t\t\t<td>{{ page.templateId }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ includePanelPage(page.id) }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>{% trans %}No pages{% endtrans %}</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>{% trans %}is index{% endtrans %}</th>
\t\t\t\t\t\t<th>{% trans %}page name{% endtrans %}</th>
\t\t\t\t\t\t<th>{% trans %}page template{% endtrans %}</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t</ul>
\t\t</div>
\t</div>
{% endblock %}
", "KeosuCoreBundle:Page:manage.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/manage.html.twig");
    }
}
