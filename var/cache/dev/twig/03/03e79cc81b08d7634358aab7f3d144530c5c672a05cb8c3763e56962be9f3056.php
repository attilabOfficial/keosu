<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f4e1c18c5154c88a5d337b3338054d79abc4d55a14b731ed09dd7c2497946877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b4437ed17a854c3b1354a5a8cf7d59bc750b8c655f560524d797c8ba0565d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4437ed17a854c3b1354a5a8cf7d59bc750b8c655f560524d797c8ba0565d8b->enter($__internal_1b4437ed17a854c3b1354a5a8cf7d59bc750b8c655f560524d797c8ba0565d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4437ed17a854c3b1354a5a8cf7d59bc750b8c655f560524d797c8ba0565d8b->leave($__internal_1b4437ed17a854c3b1354a5a8cf7d59bc750b8c655f560524d797c8ba0565d8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ce166992cbca4e7a5bb28cb7ad884733790ef7633bcd368976446570c66db75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce166992cbca4e7a5bb28cb7ad884733790ef7633bcd368976446570c66db75->enter($__internal_4ce166992cbca4e7a5bb28cb7ad884733790ef7633bcd368976446570c66db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4ce166992cbca4e7a5bb28cb7ad884733790ef7633bcd368976446570c66db75->leave($__internal_4ce166992cbca4e7a5bb28cb7ad884733790ef7633bcd368976446570c66db75_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\keosu\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
