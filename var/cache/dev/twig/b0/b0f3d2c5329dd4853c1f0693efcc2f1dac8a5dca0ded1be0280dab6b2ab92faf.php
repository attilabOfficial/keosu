<?php

/* KeosuCoreBundle:Page:check.html.twig */
class __TwigTemplate_c87b1950f6dee566397c6bb3218e4545a1e7deb37c3b074c9cf6c2bd75f2e323 extends Twig_Template
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
        $__internal_acf941a58d2181e1beeafd7bec495275cb14455aca45a6191fab0ba88b15847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf941a58d2181e1beeafd7bec495275cb14455aca45a6191fab0ba88b15847f->enter($__internal_acf941a58d2181e1beeafd7bec495275cb14455aca45a6191fab0ba88b15847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:check.html.twig"));

        // line 1
        if (((isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : $this->getContext($context, "nbrIsMain")) == 0)) {
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
(isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : $this->getContext($context, "nbrIsMain")) > 1)) {
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
        
        $__internal_acf941a58d2181e1beeafd7bec495275cb14455aca45a6191fab0ba88b15847f->leave($__internal_acf941a58d2181e1beeafd7bec495275cb14455aca45a6191fab0ba88b15847f_prof);

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
        return array (  53 => 12,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if nbrIsMain == 0 %}
\t<div class=\"alert alert-danger\">
\t\t{% trans %}No main page found. Check \"isMain\" attribute for one of your layout.{% endtrans %}
\t\t<a href=\"{{ path('keosu_core_views_page_manage')}}\">{% trans %}Manage Page{% endtrans %}</a>
\t</div>
{% elseif nbrIsMain > 1 %}
\t<div class=\"alert alert-danger\">
\t\t{% trans %}More than one main page found. UnCheck \"isMain\" attribute to only have one \"isMain\" page.{% endtrans %}
\t\t<a href=\"{{ path('keosu_core_views_page_manage')}}\">{% trans %}Manage Page{% endtrans %}</a>
\t</div>
{% endif %}

", "KeosuCoreBundle:Page:check.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/check.html.twig");
    }
}
