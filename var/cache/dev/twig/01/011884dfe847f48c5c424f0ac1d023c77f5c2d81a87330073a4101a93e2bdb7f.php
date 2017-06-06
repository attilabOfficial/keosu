<?php

/* KeosuDataModelMenuModelBundle:View:view.html.twig */
class __TwigTemplate_1d7ea908ed1ca29a68149078b863258383f25bddb2f75a468d99c13c564ef709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelMenuModelBundle:View:view.html.twig", 18);
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
        $__internal_5bd6ad2031d9be78cb7bac20a7d79d481f5dee943726863631cdce4d9420e56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd6ad2031d9be78cb7bac20a7d79d481f5dee943726863631cdce4d9420e56b->enter($__internal_5bd6ad2031d9be78cb7bac20a7d79d481f5dee943726863631cdce4d9420e56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelMenuModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd6ad2031d9be78cb7bac20a7d79d481f5dee943726863631cdce4d9420e56b->leave($__internal_5bd6ad2031d9be78cb7bac20a7d79d481f5dee943726863631cdce4d9420e56b_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_1999d824cc170ca076c83dcebea22f24da7903f6b7915fc734a952700c0240f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1999d824cc170ca076c83dcebea22f24da7903f6b7915fc734a952700c0240f6->enter($__internal_1999d824cc170ca076c83dcebea22f24da7903f6b7915fc734a952700c0240f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
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
                            null
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t    \t\t<h1 class=\"pull-left\">Menu Entry</h1>
\t\t    \t\t<a class=\"right-button pull-right\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_menu_add");
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an menu entry\">
\t\t\t\t\t\t\tNew menu entry
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Key</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 60
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo $this->getAttribute($context["entry"], "title", array());
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_menu_edit", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "><i class='glyphicon glyphicon-edit'></i></a>
\t\t\t\t\t\t\t\t\t<a href=";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_menu_delete", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "><i class='glyphicon glyphicon-remove'></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Key</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_1999d824cc170ca076c83dcebea22f24da7903f6b7915fc734a952700c0240f6->leave($__internal_1999d824cc170ca076c83dcebea22f24da7903f6b7915fc734a952700c0240f6_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelMenuModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 67,  98 => 64,  94 => 63,  89 => 61,  86 => 60,  82 => 59,  64 => 44,  40 => 22,  34 => 21,  11 => 18,);
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
                            null
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t    \t\t<h1 class=\"pull-left\">Menu Entry</h1>
\t\t    \t\t<a class=\"right-button pull-right\" href=\"{{ path('keosu_menu_add') }}\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an menu entry\">
\t\t\t\t\t\t\tNew menu entry
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Key</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t{% for entry in entries %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ entry.title|raw }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href={{ path('keosu_menu_edit',{'id':entry.id}) }}><i class='glyphicon glyphicon-edit'></i></a>
\t\t\t\t\t\t\t\t\t<a href={{ path('keosu_menu_delete',{'id':entry.id}) }}><i class='glyphicon glyphicon-remove'></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t{% endfor %}\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Key</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
{% endblock %}

", "KeosuDataModelMenuModelBundle:View:view.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\MenuModelBundle/Resources/views/View/view.html.twig");
    }
}
