<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_727ce9462625cb6ae60ab5b7f41b0cbd487651c57f9ff85289dd63a12f254ac9 extends Twig_Template
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
        $__internal_d797c16323160d33e6b59d431121dfbe296f94048fd16c8869ece12a2cb77d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d797c16323160d33e6b59d431121dfbe296f94048fd16c8869ece12a2cb77d9a->enter($__internal_d797c16323160d33e6b59d431121dfbe296f94048fd16c8869ece12a2cb77d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d797c16323160d33e6b59d431121dfbe296f94048fd16c8869ece12a2cb77d9a->leave($__internal_d797c16323160d33e6b59d431121dfbe296f94048fd16c8869ece12a2cb77d9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d82b44f89520001ea062319052e5cfbca0e088b01b85fe28b027bbfa1cae14b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82b44f89520001ea062319052e5cfbca0e088b01b85fe28b027bbfa1cae14b6->enter($__internal_d82b44f89520001ea062319052e5cfbca0e088b01b85fe28b027bbfa1cae14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d82b44f89520001ea062319052e5cfbca0e088b01b85fe28b027bbfa1cae14b6->leave($__internal_d82b44f89520001ea062319052e5cfbca0e088b01b85fe28b027bbfa1cae14b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fba30ea8e1b167fbbea8c2e6a54eab1fdeb5bb291ff6405cb422ea5b46f3c4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba30ea8e1b167fbbea8c2e6a54eab1fdeb5bb291ff6405cb422ea5b46f3c4e2->enter($__internal_fba30ea8e1b167fbbea8c2e6a54eab1fdeb5bb291ff6405cb422ea5b46f3c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fba30ea8e1b167fbbea8c2e6a54eab1fdeb5bb291ff6405cb422ea5b46f3c4e2->leave($__internal_fba30ea8e1b167fbbea8c2e6a54eab1fdeb5bb291ff6405cb422ea5b46f3c4e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f7a39bfe457276a79e20f4e9f75a044f5aa3966ceb1e37f1b196b9f9c428993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7a39bfe457276a79e20f4e9f75a044f5aa3966ceb1e37f1b196b9f9c428993->enter($__internal_4f7a39bfe457276a79e20f4e9f75a044f5aa3966ceb1e37f1b196b9f9c428993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4f7a39bfe457276a79e20f4e9f75a044f5aa3966ceb1e37f1b196b9f9c428993->leave($__internal_4f7a39bfe457276a79e20f4e9f75a044f5aa3966ceb1e37f1b196b9f9c428993_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\keosu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
