<?php

/* KeosuCoreBundle:Menu:content.html.twig */
class __TwigTemplate_009a95283ba28375f1070dfade7737625918857173f44060edc82636f5053ea2 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 2
            echo "    <div class=\"sidebarlink\">
        <a class=\"sous-menu\" href=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("keosu_" . $this->getAttribute($context["content"], "name", array(), "array")) . "_viewlist"));
            echo "\">
            <div class=\"lien-menu\">
                <span class='glyphicon glyphicon-";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), $this->getAttribute($context["content"], "name", array(), "array"), array(), "array"), 1, array(), "array"), "html", null, true);
            echo " icon-menu'></span><span
                        class=\"texte-lien-menu\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "label", array(), "array"), "html", null, true);
            echo "</span>
            </div>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Menu:content.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/content.html.twig");
    }
}
