<?php

/* KeosuCoreBundle:Menu:addToConfig.html.twig */
class __TwigTemplate_78544a22eafd5e69d6b464ee3bce95b8df57859aafd09bfd1ebf6965b971cd4b extends Twig_Template
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
        $__internal_a620fc05a19b753d75ef6cef3473003c797fe80c9b1e6234c288fa0e07314bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a620fc05a19b753d75ef6cef3473003c797fe80c9b1e6234c288fa0e07314bb9->enter($__internal_a620fc05a19b753d75ef6cef3473003c797fe80c9b1e6234c288fa0e07314bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:addToConfig.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html", null, true);
            echo "\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a620fc05a19b753d75ef6cef3473003c797fe80c9b1e6234c288fa0e07314bb9->leave($__internal_a620fc05a19b753d75ef6cef3473003c797fe80c9b1e6234c288fa0e07314bb9_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:addToConfig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for link in links %}
\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"{{ link.href }}\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t{{ link.name }}
\t\t\t</div>
\t\t</a>
\t</div>
{% endfor %}
", "KeosuCoreBundle:Menu:addToConfig.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/addToConfig.html.twig");
    }
}
