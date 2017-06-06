<?php

/* KeosuCoreBundle:Menu:content.html.twig */
class __TwigTemplate_2033b3ecd7ab51e954eb5cb9c21623ecae7f51a8577ed97ed6d89532b3751f16 extends Twig_Template
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
        $__internal_1f40c6e8cf81137d5786f5ad147a02633fedf2069b71746b1f6889ef8324952f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f40c6e8cf81137d5786f5ad147a02633fedf2069b71746b1f6889ef8324952f->enter($__internal_1f40c6e8cf81137d5786f5ad147a02633fedf2069b71746b1f6889ef8324952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:content.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), $this->getAttribute($context["content"], "name", array(), "array"), array(), "array"), 1, array(), "array"), "html", null, true);
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
        
        $__internal_1f40c6e8cf81137d5786f5ad147a02633fedf2069b71746b1f6889ef8324952f->leave($__internal_1f40c6e8cf81137d5786f5ad147a02633fedf2069b71746b1f6889ef8324952f_prof);

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
        return array (  38 => 6,  34 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for content in contents %}
    <div class=\"sidebarlink\">
        <a class=\"sous-menu\" href=\"{{ path('keosu_'~content[\"name\"]~'_viewlist') }}\">
            <div class=\"lien-menu\">
                <span class='glyphicon glyphicon-{{ icon[content[\"name\"]][1] }} icon-menu'></span><span
                        class=\"texte-lien-menu\">{{ content[\"label\"] }}</span>
            </div>
        </a>
    </div>
{% endfor %}
", "KeosuCoreBundle:Menu:content.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/content.html.twig");
    }
}
