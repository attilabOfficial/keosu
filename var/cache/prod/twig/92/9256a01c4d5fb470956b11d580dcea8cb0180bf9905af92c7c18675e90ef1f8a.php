<?php

/* KeosuDataModelEventModelBundle:View:view.html.twig */
class __TwigTemplate_7ced296ce8fffc4b5a1fecfa2eb91f0522364b8d70330a87648b9092dde960ca extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
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
        return array (  118 => 74,  105 => 71,  97 => 70,  93 => 69,  89 => 68,  85 => 67,  82 => 66,  78 => 65,  58 => 48,  31 => 23,  28 => 22,  11 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuDataModelEventModelBundle:View:view.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\EventModelBundle/Resources/views/View/view.html.twig");
    }
}
