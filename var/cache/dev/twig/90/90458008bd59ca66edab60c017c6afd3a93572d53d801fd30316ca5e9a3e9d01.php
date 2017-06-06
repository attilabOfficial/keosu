<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_16530745cdd62c2fcb62ae0d4903c56e132ff0f1a25e3378465796a15aa03ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e246c5e64cc582b8f45d4cb8b6e8c92acf703ab941b13a3a6b5f9737ef496be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e246c5e64cc582b8f45d4cb8b6e8c92acf703ab941b13a3a6b5f9737ef496be4->enter($__internal_e246c5e64cc582b8f45d4cb8b6e8c92acf703ab941b13a3a6b5f9737ef496be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e246c5e64cc582b8f45d4cb8b6e8c92acf703ab941b13a3a6b5f9737ef496be4->leave($__internal_e246c5e64cc582b8f45d4cb8b6e8c92acf703ab941b13a3a6b5f9737ef496be4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8ea1883dce6e590e2ed4848554dfbdd9f1c5700dfa59bd8a38cbe66e64ff185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ea1883dce6e590e2ed4848554dfbdd9f1c5700dfa59bd8a38cbe66e64ff185->enter($__internal_e8ea1883dce6e590e2ed4848554dfbdd9f1c5700dfa59bd8a38cbe66e64ff185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8ea1883dce6e590e2ed4848554dfbdd9f1c5700dfa59bd8a38cbe66e64ff185->leave($__internal_e8ea1883dce6e590e2ed4848554dfbdd9f1c5700dfa59bd8a38cbe66e64ff185_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47cb2213d10f75b9bfbacea36fa25833c363f70612630429293cbef97389582a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cb2213d10f75b9bfbacea36fa25833c363f70612630429293cbef97389582a->enter($__internal_47cb2213d10f75b9bfbacea36fa25833c363f70612630429293cbef97389582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47cb2213d10f75b9bfbacea36fa25833c363f70612630429293cbef97389582a->leave($__internal_47cb2213d10f75b9bfbacea36fa25833c363f70612630429293cbef97389582a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da0a695c52196869c4fad66301da9ce39b7539f3e9f73862faa92ac29369bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0a695c52196869c4fad66301da9ce39b7539f3e9f73862faa92ac29369bb87->enter($__internal_da0a695c52196869c4fad66301da9ce39b7539f3e9f73862faa92ac29369bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da0a695c52196869c4fad66301da9ce39b7539f3e9f73862faa92ac29369bb87->leave($__internal_da0a695c52196869c4fad66301da9ce39b7539f3e9f73862faa92ac29369bb87_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\keosu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
