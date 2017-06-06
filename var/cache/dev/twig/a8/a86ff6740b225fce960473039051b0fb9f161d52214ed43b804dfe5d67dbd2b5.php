<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de752fde963eff204bdde8d185e9837ef16effdf1c283dae72307cec730ad4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d4fbf3d50f89f6ebeaaf3c3fa6d0bcdd346d2ec06ea8611a3dc57ab0fc7fefae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fbf3d50f89f6ebeaaf3c3fa6d0bcdd346d2ec06ea8611a3dc57ab0fc7fefae->enter($__internal_d4fbf3d50f89f6ebeaaf3c3fa6d0bcdd346d2ec06ea8611a3dc57ab0fc7fefae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fbf3d50f89f6ebeaaf3c3fa6d0bcdd346d2ec06ea8611a3dc57ab0fc7fefae->leave($__internal_d4fbf3d50f89f6ebeaaf3c3fa6d0bcdd346d2ec06ea8611a3dc57ab0fc7fefae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b3dc887cb6084ca9d899f86060198252de2bb2400b3dbfd3560a56fb6a9a683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3dc887cb6084ca9d899f86060198252de2bb2400b3dbfd3560a56fb6a9a683->enter($__internal_2b3dc887cb6084ca9d899f86060198252de2bb2400b3dbfd3560a56fb6a9a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2b3dc887cb6084ca9d899f86060198252de2bb2400b3dbfd3560a56fb6a9a683->leave($__internal_2b3dc887cb6084ca9d899f86060198252de2bb2400b3dbfd3560a56fb6a9a683_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab8b6d950bba681e7fd0514dd43e7b2eda1bf435592d7701b6eb4f18f8176c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8b6d950bba681e7fd0514dd43e7b2eda1bf435592d7701b6eb4f18f8176c19->enter($__internal_ab8b6d950bba681e7fd0514dd43e7b2eda1bf435592d7701b6eb4f18f8176c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ab8b6d950bba681e7fd0514dd43e7b2eda1bf435592d7701b6eb4f18f8176c19->leave($__internal_ab8b6d950bba681e7fd0514dd43e7b2eda1bf435592d7701b6eb4f18f8176c19_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b14682f6cfeb1b66723c3232edca81097f194414017ce8b42d377751f431249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b14682f6cfeb1b66723c3232edca81097f194414017ce8b42d377751f431249->enter($__internal_9b14682f6cfeb1b66723c3232edca81097f194414017ce8b42d377751f431249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9b14682f6cfeb1b66723c3232edca81097f194414017ce8b42d377751f431249->leave($__internal_9b14682f6cfeb1b66723c3232edca81097f194414017ce8b42d377751f431249_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\keosu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
