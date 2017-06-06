<?php

/* KeosuDataModelEventModelBundle:View:view.html.twig */
class __TwigTemplate_23f572021c2a84a29fef17e27e1f7b99ab8a23632b450ad2f66f4faa5f2a9688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelEventModelBundle:View:view.html.twig", 19);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7abdb87a6e124e2b3c6dc653b280ed6720fdda0b81d39904f01fcd5812edfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7abdb87a6e124e2b3c6dc653b280ed6720fdda0b81d39904f01fcd5812edfa4->enter($__internal_f7abdb87a6e124e2b3c6dc653b280ed6720fdda0b81d39904f01fcd5812edfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelEventModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7abdb87a6e124e2b3c6dc653b280ed6720fdda0b81d39904f01fcd5812edfa4->leave($__internal_f7abdb87a6e124e2b3c6dc653b280ed6720fdda0b81d39904f01fcd5812edfa4_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_11a7848473e2df4b54c350b6c68be6acda59d0153f232322a125c4713632f1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a7848473e2df4b54c350b6c68be6acda59d0153f232322a125c4713632f1de->enter($__internal_11a7848473e2df4b54c350b6c68be6acda59d0153f232322a125c4713632f1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "<script>
\$(document).ready(function() {
\t// Init table for article
\t\$('#content-table').dataTable({
\t\t\t\"bPaginate\": true,
            \"bLengthChange\": true,
            \"bFilter\": true,
            \"bSort\": true,
            \"bInfo\": true,
            \"bAutoWidth\": true,
         \t\"aoColumns\": [
                            null,
                            null,
                            null,
                            null,
                            null
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<h1 class=\"pull-left\">Events</h1>
\t\t\t\t\t<a class=\"right-button pull-right\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_event_add");
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an article\">
\t\t\t\t\t\t\tNew event
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 66
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "getDateString", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 70
            if ((($this->getAttribute($context["event"], "reader", array()) == false) || ($this->getAttribute($context["event"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["event"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-edit'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 71
            if ((($this->getAttribute($context["event"], "reader", array()) == false) || ($this->getAttribute($context["event"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["event"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_event_delete", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-remove'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_11a7848473e2df4b54c350b6c68be6acda59d0153f232322a125c4713632f1de->leave($__internal_11a7848473e2df4b54c350b6c68be6acda59d0153f232322a125c4713632f1de_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelEventModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 74,  114 => 71,  106 => 70,  102 => 69,  98 => 68,  94 => 67,  91 => 66,  87 => 65,  67 => 48,  40 => 23,  34 => 22,  11 => 19,);
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

\t
{% block content %}
<script>
\$(document).ready(function() {
\t// Init table for article
\t\$('#content-table').dataTable({
\t\t\t\"bPaginate\": true,
            \"bLengthChange\": true,
            \"bFilter\": true,
            \"bSort\": true,
            \"bInfo\": true,
            \"bAutoWidth\": true,
         \t\"aoColumns\": [
                            null,
                            null,
                            null,
                            null,
                            null
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<h1 class=\"pull-left\">Events</h1>
\t\t\t\t\t<a class=\"right-button pull-right\" href=\"{{ path('keosu_event_add') }}\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an article\">
\t\t\t\t\t\t\tNew event
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for event in events %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ event.title }}</td>
\t\t\t\t\t\t\t\t<td>{{ event.getDateString() }}</td>
\t\t\t\t\t\t\t\t<td>{{ event.location }}</td>
\t\t\t\t\t\t\t\t<td>{% if event.reader == false or (event.reader and event.reader.allowupdate == false)  %} <a href={{ path('keosu_event_edit',{'id':event.id}) }}><i class='glyphicon glyphicon-edit'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t\t<td>{% if event.reader == false or (event.reader and event.reader.allowupdate == false) %} <a href={{ path('keosu_event_delete',{'id':event.id}) }}><i class='glyphicon glyphicon-remove'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "KeosuDataModelEventModelBundle:View:view.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\EventModelBundle/Resources/views/View/view.html.twig");
    }
}
