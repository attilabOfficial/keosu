<?php

/* KeosuCoreBundle:Reader:manage.html.twig */
class __TwigTemplate_96d05dcfd8445623f9330994167f7cec02770fa2872cefda9f9367eb7a564dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuCoreBundle:Reader:manage.html.twig", 18);
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
        $__internal_3bfe4a92da0170c575ffb85fd1457e20d3e9ee747d5ae0a85b505f0e41640b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfe4a92da0170c575ffb85fd1457e20d3e9ee747d5ae0a85b505f0e41640b7a->enter($__internal_3bfe4a92da0170c575ffb85fd1457e20d3e9ee747d5ae0a85b505f0e41640b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Reader:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bfe4a92da0170c575ffb85fd1457e20d3e9ee747d5ae0a85b505f0e41640b7a->leave($__internal_3bfe4a92da0170c575ffb85fd1457e20d3e9ee747d5ae0a85b505f0e41640b7a_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e22afe012a2b38d8173e9d22f419b9e1f6443a90723fdd95fc921dfafc9249c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e22afe012a2b38d8173e9d22f419b9e1f6443a90723fdd95fc921dfafc9249c->enter($__internal_1e22afe012a2b38d8173e9d22f419b9e1f6443a90723fdd95fc921dfafc9249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("Add a new reader", array(), "messages");
        
        $__internal_1e22afe012a2b38d8173e9d22f419b9e1f6443a90723fdd95fc921dfafc9249c->leave($__internal_1e22afe012a2b38d8173e9d22f419b9e1f6443a90723fdd95fc921dfafc9249c_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c80acb1b1af84f31aada63f6e879171139513e81077675f41065c400964b4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c80acb1b1af84f31aada63f6e879171139513e81077675f41065c400964b4f3->enter($__internal_9c80acb1b1af84f31aada63f6e879171139513e81077675f41065c400964b4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-4 table-actions-column\">
\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<strong>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader Type", array(), "messages");
        echo "</strong>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<div>
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readertype", array()), 'widget');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t</div>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add a reader", array(), "messages");
        echo "\" ></input>
\t\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\t<fieldset>
\t\t\t\t<legend>Readers</legend>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 56
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_sync"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-refresh\" title=\"Sync\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_edit"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_ReaderManager_edit_delete", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\" title=\"Delete\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "\t\t\t\t\t\t<p>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("No content", array(), "messages");
            echo "</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        
        $__internal_9c80acb1b1af84f31aada63f6e879171139513e81077675f41065c400964b4f3->leave($__internal_9c80acb1b1af84f31aada63f6e879171139513e81077675f41065c400964b4f3_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Reader:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 74,  151 => 71,  142 => 69,  133 => 65,  127 => 62,  121 => 59,  116 => 57,  113 => 56,  108 => 55,  98 => 48,  85 => 38,  80 => 36,  72 => 31,  68 => 30,  61 => 26,  57 => 25,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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
{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}

{% block title %}{% trans %}Add a new reader{% endtrans %}{% endblock %}

{% block content %}
\t<div class=\"row\">
\t\t<div class=\"col-md-4 table-actions-column\">
\t\t\t{{ form_start(form) }}
\t\t\t<strong>{% trans %}Reader Type{% endtrans %}</strong>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<div>
\t\t\t\t{{ form_widget(form.readertype) }}
\t\t\t\t{{ form_rest(form) }}
\t\t\t</div>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"{% trans %}Add a reader{% endtrans %}\" ></input>
\t\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">{% trans %}Cancel{% endtrans %}</button>
\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\t<fieldset>
\t\t\t\t<legend>Readers</legend>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>{% trans %}Reader name{% endtrans %}</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for content in contents %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ content.name }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_'~content.service~'_sync',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-refresh\" title=\"Sync\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_' ~ content.service ~ '_edit',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_edit_delete',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-remove\" title=\"Delete\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>{% trans %}No content{% endtrans %}</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>{% trans %}Reader name{% endtrans %}</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
{% endblock %}
", "KeosuCoreBundle:Reader:manage.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Reader/manage.html.twig");
    }
}
