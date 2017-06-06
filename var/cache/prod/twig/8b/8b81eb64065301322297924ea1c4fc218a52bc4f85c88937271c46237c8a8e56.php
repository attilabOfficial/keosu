<?php

/* KeosuDataModelSearchModelBundle:View:view.html.twig */
class __TwigTemplate_ac659c9cc695a2899d936fee5ba5a036daa78febb4584f35d1247dd8d7011749 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
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
        return array (  101 => 73,  91 => 69,  87 => 68,  84 => 67,  80 => 66,  61 => 50,  31 => 22,  28 => 21,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuDataModelSearchModelBundle:View:view.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\SearchModelBundle/Resources/views/View/view.html.twig");
    }
}
