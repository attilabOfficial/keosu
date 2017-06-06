<?php

/* KeosuDataModelArticleModelBundle:View:view.html.twig */
class __TwigTemplate_83020356d424c3a86356eab07ffabce8a552b49077ec44f0d5e412017895f939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelArticleModelBundle:View:view.html.twig", 18);
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

    // line 21
    public function block_content($context, array $blocks = array())
    {
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
\t\t    \t\t<h1 class=\"pull-left\">Articles</h1>
\t\t    \t\t<a class=\"right-button pull-right\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_article_add");
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an article\">
\t\t\t\t\t\t\tNew article
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 66
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo $this->getAttribute($context["article"], "title", array());
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 73
            if ($this->getAttribute($context["article"], "reader", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "reader", array()), "name", array()), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 74
            if ((($this->getAttribute($context["article"], "reader", array()) == false) || ($this->getAttribute($context["article"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["article"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-edit'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 75
            if ((($this->getAttribute($context["article"], "reader", array()) == false) || ($this->getAttribute($context["article"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["article"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-remove'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
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
        return "KeosuDataModelArticleModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 77,  122 => 75,  114 => 74,  107 => 73,  104 => 72,  95 => 70,  91 => 69,  86 => 67,  83 => 66,  79 => 65,  58 => 47,  31 => 22,  28 => 21,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuDataModelArticleModelBundle:View:view.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\ArticleModelBundle/Resources/views/View/view.html.twig");
    }
}
