<?php

/* KeosuDataModelSearchModelBundle:View:view.html.twig */
class __TwigTemplate_529ca31f116432e1e3ccee2044d80879ca7b6833d1f8fde02036661adb4d18d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelSearchModelBundle:View:view.html.twig", 18);
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
        $__internal_c7ff9c0739451d8df656469ef829c5e613a6a9f283016cd567a21bdcd5882b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ff9c0739451d8df656469ef829c5e613a6a9f283016cd567a21bdcd5882b82->enter($__internal_c7ff9c0739451d8df656469ef829c5e613a6a9f283016cd567a21bdcd5882b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelSearchModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ff9c0739451d8df656469ef829c5e613a6a9f283016cd567a21bdcd5882b82->leave($__internal_c7ff9c0739451d8df656469ef829c5e613a6a9f283016cd567a21bdcd5882b82_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_99310c359a2be3c5f8e9a3873f071e5f69ed0917027568fb1408c848fe5ec6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99310c359a2be3c5f8e9a3873f071e5f69ed0917027568fb1408c848fe5ec6e6->enter($__internal_99310c359a2be3c5f8e9a3873f071e5f69ed0917027568fb1408c848fe5ec6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <script>
        \$(document).ready(function () {
            // Init table for article
            \$('#content-table').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": true,
                \"bFilter\": true,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": true,
                \"aoColumns\": [
                    null,
                    null,
                    null
                ]
            });
        });
    </script>

    <div class=\"row table\">
        <div class=\"alert alert-warning\" role=\"alert\">The pages are automatically added. You can add here specific search
            entry
        </div>
        <div class=\"col-md-12\">
            <div id=\"dynamic\">
                <fieldset>
                    <div class=\"clearfix\">
                        <h1 class=\"pull-left\">Search Entry</h1>
                        <a class=\"right-button pull-right\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_search_add");
        echo "\">
                            <button class=\"btn btn-success\" title=\"Create an search entry\">
                                New search entry
                            </button>
                        </a>
                    </div>
                    <table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Key</th>
                            <th>Target</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 67
            echo "                            <tr>
                                <td>";
            // line 68
            echo $this->getAttribute($context["entry"], "keyValue", array());
            echo "</td>
                                <td>";
            // line 69
            echo $this->getAttribute($context["entry"], "targetName", array());
            echo "</td>
                                <td></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Key</th>
                            <th>Target</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
";
        
        $__internal_99310c359a2be3c5f8e9a3873f071e5f69ed0917027568fb1408c848fe5ec6e6->leave($__internal_99310c359a2be3c5f8e9a3873f071e5f69ed0917027568fb1408c848fe5ec6e6_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelSearchModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 73,  100 => 69,  96 => 68,  93 => 67,  89 => 66,  70 => 50,  40 => 22,  34 => 21,  11 => 18,);
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
Copyright (C) 2016  Pockeit

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
        \$(document).ready(function () {
            // Init table for article
            \$('#content-table').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": true,
                \"bFilter\": true,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": true,
                \"aoColumns\": [
                    null,
                    null,
                    null
                ]
            });
        });
    </script>

    <div class=\"row table\">
        <div class=\"alert alert-warning\" role=\"alert\">The pages are automatically added. You can add here specific search
            entry
        </div>
        <div class=\"col-md-12\">
            <div id=\"dynamic\">
                <fieldset>
                    <div class=\"clearfix\">
                        <h1 class=\"pull-left\">Search Entry</h1>
                        <a class=\"right-button pull-right\" href=\"{{ path('keosu_search_add') }}\">
                            <button class=\"btn btn-success\" title=\"Create an search entry\">
                                New search entry
                            </button>
                        </a>
                    </div>
                    <table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Key</th>
                            <th>Target</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for entry in entries %}
                            <tr>
                                <td>{{ entry.keyValue|raw }}</td>
                                <td>{{ entry.targetName|raw }}</td>
                                <td></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Key</th>
                            <th>Target</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
{% endblock %}

", "KeosuDataModelSearchModelBundle:View:view.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\SearchModelBundle/Resources/views/View/view.html.twig");
    }
}
