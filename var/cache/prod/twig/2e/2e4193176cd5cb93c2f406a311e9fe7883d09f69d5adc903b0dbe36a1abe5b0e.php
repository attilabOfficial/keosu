<?php

/* KeosuCoreBundle:Page:check.html.twig */
class __TwigTemplate_a6c4c39f57ce63df6bf042b6515bbd72016a4da25dee440d69a8f16ddb7682f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : null) == 0)) {
            // line 2
            echo "\t<div class=\"alert alert-danger\">
\t\t";
            // line 3
            echo $this->env->getExtension('translator')->getTranslator()->trans("No main page found. Check \"isMain\" attribute for one of your layout.", array(), "messages");
            // line 4
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Manage Page", array(), "messages");
            echo "</a>
\t</div>
";
        } elseif ((        // line 6
(isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : null) > 1)) {
            // line 7
            echo "\t<div class=\"alert alert-danger\">
\t\t";
            // line 8
            echo $this->env->getExtension('translator')->getTranslator()->trans("More than one main page found. UnCheck \"isMain\" attribute to only have one \"isMain\" page.", array(), "messages");
            // line 9
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Manage Page", array(), "messages");
            echo "</a>
\t</div>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Page:check.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/check.html.twig");
    }
}
