<?php

/* KeosuCoreBundle:Page:zonePanel.html.twig */
class __TwigTemplate_33940e2f2c4049cfdadd5f06b05a6f885fda8de0e553aa374db90f6f5ad7bc0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageAddActionGadget' => array($this, 'block_pageAddActionGadget'),
            'pageEditActionGadget' => array($this, 'block_pageEditActionGadget'),
            'pageDeleteActionGadget' => array($this, 'block_pageDeleteActionGadget'),
            'pageExtensionActionGadget' => array($this, 'block_pageExtensionActionGadget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"panel";
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : null), "html", null, true);
        echo "\" class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : null), "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 6
        $this->displayBlock('pageAddActionGadget', $context, $blocks);
        // line 24
        echo "
\t\t";
        // line 25
        if ((isset($context["gadget"]) ? $context["gadget"] : null)) {
            // line 26
            echo "
\t\t\t";
            // line 27
            $this->displayBlock('pageEditActionGadget', $context, $blocks);
            // line 32
            echo "
\t\t\t";
            // line 33
            $this->displayBlock('pageDeleteActionGadget', $context, $blocks);
            // line 38
            echo "\t\t";
        }
        // line 39
        echo "\t\t";
        $this->displayBlock('pageExtensionActionGadget', $context, $blocks);
        // line 41
        echo "\t\t<script>
\t\t\t\$( \"#panel";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : null), "html", null, true);
        echo "\" ).hover(
\t\t\t\tfunction() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : null), "html", null, true);
        echo "\").css(\"border\",\"5px solid red\");
\t\t\t\t}, function() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : null), "html", null, true);
        echo "\").css(\"border\",\"none\");
\t\t\t\t}
\t\t\t);
\t\t</script>
\t</div>
</div>
";
    }

    // line 6
    public function block_pageAddActionGadget($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add gadget", array(), "messages");
        // line 10
        echo "\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>

\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gadgetList"]) ? $context["gadgetList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gadgetName"]) {
            // line 15
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_add", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : null), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : null), "gadgetName" => $context["gadgetName"])), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $context["gadgetName"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gadgetName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
    }

    // line 27
    public function block_pageEditActionGadget($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t<a class=\"btn btn-info edit-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_edit", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : null), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : null))), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gadget"]) ? $context["gadget"] : null), "name", array()), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t";
    }

    // line 33
    public function block_pageDeleteActionGadget($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t<a class=\"remove-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_delete", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : null), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : null))), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Clean zone", array(), "messages");
        echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t</a>
\t\t\t";
    }

    // line 39
    public function block_pageExtensionActionGadget($context, array $blocks = array())
    {
        // line 40
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:zonePanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 40,  157 => 39,  146 => 34,  143 => 33,  134 => 29,  129 => 28,  126 => 27,  120 => 21,  108 => 17,  104 => 16,  101 => 15,  97 => 14,  91 => 10,  89 => 9,  85 => 7,  82 => 6,  71 => 46,  66 => 44,  61 => 42,  58 => 41,  55 => 39,  52 => 38,  50 => 33,  47 => 32,  45 => 27,  42 => 26,  40 => 25,  37 => 24,  35 => 6,  29 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Page:zonePanel.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/zonePanel.html.twig");
    }
}
