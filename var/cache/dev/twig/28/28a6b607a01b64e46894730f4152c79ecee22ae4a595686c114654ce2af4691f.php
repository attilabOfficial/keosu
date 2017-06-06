<?php

/* KeosuCoreBundle:Menu:page.html.twig */
class __TwigTemplate_f0909b3a36789b21b91ca9be099be40ba89b21e30b1c76f7833f62623645190a extends Twig_Template
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
        $__internal_b891ca1f087b24bc82c4ba168a1c372c82075d6ff3c7530e30aa33a33ebd8c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b891ca1f087b24bc82c4ba168a1c372c82075d6ff3c7530e30aa33a33ebd8c44->enter($__internal_b891ca1f087b24bc82c4ba168a1c372c82075d6ff3c7530e30aa33a33ebd8c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:page.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t<span class=\"glyphicon glyphicon-edit icon-menu\"></span><span class=\"texte-lien-menu\"> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b891ca1f087b24bc82c4ba168a1c372c82075d6ff3c7530e30aa33a33ebd8c44->leave($__internal_b891ca1f087b24bc82c4ba168a1c372c82075d6ff3c7530e30aa33a33ebd8c44_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:page.html.twig";
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
        return new Twig_Source("{% for page in pages %}
\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"{{ path('keosu_core_views_page',{'id':page.id}) }}\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t<span class=\"glyphicon glyphicon-edit icon-menu\"></span><span class=\"texte-lien-menu\"> {{ page.name }}</span>
\t\t\t</div>
\t\t</a>
\t</div>
{% endfor %}", "KeosuCoreBundle:Menu:page.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/page.html.twig");
    }
}
