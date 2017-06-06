<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1586b9f6699264c82e891d98314e5b7a483b883102957dc2620b5499c5436afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffdffef3a8cf1de5d795b039ed7a444e523198219c5c36e210bfefd2a4b7a3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdffef3a8cf1de5d795b039ed7a444e523198219c5c36e210bfefd2a4b7a3be->enter($__internal_ffdffef3a8cf1de5d795b039ed7a444e523198219c5c36e210bfefd2a4b7a3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdffef3a8cf1de5d795b039ed7a444e523198219c5c36e210bfefd2a4b7a3be->leave($__internal_ffdffef3a8cf1de5d795b039ed7a444e523198219c5c36e210bfefd2a4b7a3be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc2f257c74a193886e02fbc20e5de3bea4a3a6960d8ea21cd39e698f94978d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2f257c74a193886e02fbc20e5de3bea4a3a6960d8ea21cd39e698f94978d69->enter($__internal_dc2f257c74a193886e02fbc20e5de3bea4a3a6960d8ea21cd39e698f94978d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc2f257c74a193886e02fbc20e5de3bea4a3a6960d8ea21cd39e698f94978d69->leave($__internal_dc2f257c74a193886e02fbc20e5de3bea4a3a6960d8ea21cd39e698f94978d69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9efea29e2f5b2eec4b3755cb2efff5ded23a474036f43c122bc092814fbefa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efea29e2f5b2eec4b3755cb2efff5ded23a474036f43c122bc092814fbefa8a->enter($__internal_9efea29e2f5b2eec4b3755cb2efff5ded23a474036f43c122bc092814fbefa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9efea29e2f5b2eec4b3755cb2efff5ded23a474036f43c122bc092814fbefa8a->leave($__internal_9efea29e2f5b2eec4b3755cb2efff5ded23a474036f43c122bc092814fbefa8a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f7fe214f6e63ce0e3c7e5a6639ff87fb8d40400da0d81f4166254189f3b6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f7fe214f6e63ce0e3c7e5a6639ff87fb8d40400da0d81f4166254189f3b6db->enter($__internal_77f7fe214f6e63ce0e3c7e5a6639ff87fb8d40400da0d81f4166254189f3b6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_77f7fe214f6e63ce0e3c7e5a6639ff87fb8d40400da0d81f4166254189f3b6db->leave($__internal_77f7fe214f6e63ce0e3c7e5a6639ff87fb8d40400da0d81f4166254189f3b6db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\keosu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
