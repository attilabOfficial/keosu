<?php

/* KeosuDataModelPictureModelBundle:View:view.html.twig */
class __TwigTemplate_2c1935b5cc0fb1deabbbf7a53af424b7995a662f1cc5d5d93e7380de79c9f027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelPictureModelBundle:View:view.html.twig", 19);
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
        $__internal_809ad1ff629ade0d924ce8dc8ec56938764b7b564c8275574ddb092baa5ddf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809ad1ff629ade0d924ce8dc8ec56938764b7b564c8275574ddb092baa5ddf70->enter($__internal_809ad1ff629ade0d924ce8dc8ec56938764b7b564c8275574ddb092baa5ddf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelPictureModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809ad1ff629ade0d924ce8dc8ec56938764b7b564c8275574ddb092baa5ddf70->leave($__internal_809ad1ff629ade0d924ce8dc8ec56938764b7b564c8275574ddb092baa5ddf70_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c4510f2825b08c99d6cbf3501b2a9bc218c2390b538b9f4e2a18fd53209a923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4510f2825b08c99d6cbf3501b2a9bc218c2390b538b9f4e2a18fd53209a923->enter($__internal_6c4510f2825b08c99d6cbf3501b2a9bc218c2390b538b9f4e2a18fd53209a923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "<script>
\$(document).ready(function() {
\t// Init table for picture
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
                            null,
\t\t\t\t\t\t\tnull
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t<div class=\"clearfix\">
    \t\t<h1 class=\"pull-left\">Picture</h1>
    \t\t<a class=\"right-button pull-right\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_picture_add");
        echo "\">
\t\t\t\t<button class=\"btn btn-success\" title=\"Add a picture\">
\t\t\t\t\tAdd a picture
\t\t\t\t</button>
\t\t\t</a>
\t\t</div>
\t\t\t<fieldset>
\t\t\t\t<table class=\"table table-striped table-hover picture-edit-list\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Thumb</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 71
            if ($this->getAttribute($context["picture"], "reader", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["picture"], "reader", array()), "name", array()), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["picture"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><img src=";
            // line 77
            echo twig_escape_filter($this->env, ((isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")) . $this->getAttribute($context["picture"], "getThumbWebPath", array(), "method")), "html", null, true);
            echo "></td>
\t\t\t\t\t\t\t\t<td>";
            // line 78
            if (($this->getAttribute($context["picture"], "reader", array()) == false)) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_picture_edit", array("id" => $this->getAttribute($context["picture"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-edit'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 79
            if (($this->getAttribute($context["picture"], "reader", array()) == false)) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_picture_delete", array("id" => $this->getAttribute($context["picture"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-remove'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th>Tag</th>
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
        
        $__internal_6c4510f2825b08c99d6cbf3501b2a9bc218c2390b538b9f4e2a18fd53209a923->leave($__internal_6c4510f2825b08c99d6cbf3501b2a9bc218c2390b538b9f4e2a18fd53209a923_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelPictureModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 82,  137 => 79,  129 => 78,  125 => 77,  122 => 76,  113 => 74,  109 => 73,  101 => 71,  97 => 70,  94 => 69,  90 => 68,  67 => 48,  40 => 23,  34 => 22,  11 => 19,);
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
\t// Init table for picture
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
                            null,
\t\t\t\t\t\t\tnull
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t<div class=\"clearfix\">
    \t\t<h1 class=\"pull-left\">Picture</h1>
    \t\t<a class=\"right-button pull-right\" href=\"{{ path('keosu_picture_add') }}\">
\t\t\t\t<button class=\"btn btn-success\" title=\"Add a picture\">
\t\t\t\t\tAdd a picture
\t\t\t\t</button>
\t\t\t</a>
\t\t</div>
\t\t\t<fieldset>
\t\t\t\t<table class=\"table table-striped table-hover picture-edit-list\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Thumb</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t{% for picture in pictures %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ picture.name }}</td>
\t\t\t\t\t\t\t\t<td>{% if picture.reader %} {{picture.reader.name}}{% endif %}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for tag in picture.tags %}
\t\t\t\t\t\t\t\t\t\t{{tag.tagName}},
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><img src={{ (url_base ~ picture.getThumbWebPath())}}></td>
\t\t\t\t\t\t\t\t<td>{% if picture.reader == false  %} <a href={{ path('keosu_picture_edit',{'id':picture.id}) }}><i class='glyphicon glyphicon-edit'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t\t<td>{% if picture.reader == false %} <a href={{ path('keosu_picture_delete',{'id':picture.id}) }}><i class='glyphicon glyphicon-remove'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th>Tag</th>
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

", "KeosuDataModelPictureModelBundle:View:view.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\PictureModelBundle/Resources/views/View/view.html.twig");
    }
}
