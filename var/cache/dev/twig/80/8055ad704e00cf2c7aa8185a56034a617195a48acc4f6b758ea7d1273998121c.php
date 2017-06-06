<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cbd32d0d87876ef7891c672a94019b6194557d1dc5e5366982af846a60bf051 extends Twig_Template
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
        $__internal_d22b16a946d8f5e660d91562a8100d1429969acd15fe22eee35cdcfb67d45197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22b16a946d8f5e660d91562a8100d1429969acd15fe22eee35cdcfb67d45197->enter($__internal_d22b16a946d8f5e660d91562a8100d1429969acd15fe22eee35cdcfb67d45197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d22b16a946d8f5e660d91562a8100d1429969acd15fe22eee35cdcfb67d45197->leave($__internal_d22b16a946d8f5e660d91562a8100d1429969acd15fe22eee35cdcfb67d45197_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_014d3ce8b3bdf9f4f2ca820e8a64a8ec8a05ed6345c4e8021b2d18535260f5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014d3ce8b3bdf9f4f2ca820e8a64a8ec8a05ed6345c4e8021b2d18535260f5dd->enter($__internal_014d3ce8b3bdf9f4f2ca820e8a64a8ec8a05ed6345c4e8021b2d18535260f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_014d3ce8b3bdf9f4f2ca820e8a64a8ec8a05ed6345c4e8021b2d18535260f5dd->leave($__internal_014d3ce8b3bdf9f4f2ca820e8a64a8ec8a05ed6345c4e8021b2d18535260f5dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_786dcc4f4169deaa9f476f480fe9819f523a6e8765cac2c6aaf5e1e1dbb229ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786dcc4f4169deaa9f476f480fe9819f523a6e8765cac2c6aaf5e1e1dbb229ab->enter($__internal_786dcc4f4169deaa9f476f480fe9819f523a6e8765cac2c6aaf5e1e1dbb229ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_786dcc4f4169deaa9f476f480fe9819f523a6e8765cac2c6aaf5e1e1dbb229ab->leave($__internal_786dcc4f4169deaa9f476f480fe9819f523a6e8765cac2c6aaf5e1e1dbb229ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f18fc68b4c192764303dac468be474da5f0cdf71c1ffba1ca03b7d4e174a263b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18fc68b4c192764303dac468be474da5f0cdf71c1ffba1ca03b7d4e174a263b->enter($__internal_f18fc68b4c192764303dac468be474da5f0cdf71c1ffba1ca03b7d4e174a263b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f18fc68b4c192764303dac468be474da5f0cdf71c1ffba1ca03b7d4e174a263b->leave($__internal_f18fc68b4c192764303dac468be474da5f0cdf71c1ffba1ca03b7d4e174a263b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\keosu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
