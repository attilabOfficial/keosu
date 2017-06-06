<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_48b3366a434d7f3cbebbb2011a50525bf1e124715280438040e4e66162415f37 extends Twig_Template
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
        $__internal_529fd987c3eda5a2c810fa9fd492a46d221b5d39d56c9e53a2e09c8b2b8d781f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529fd987c3eda5a2c810fa9fd492a46d221b5d39d56c9e53a2e09c8b2b8d781f->enter($__internal_529fd987c3eda5a2c810fa9fd492a46d221b5d39d56c9e53a2e09c8b2b8d781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529fd987c3eda5a2c810fa9fd492a46d221b5d39d56c9e53a2e09c8b2b8d781f->leave($__internal_529fd987c3eda5a2c810fa9fd492a46d221b5d39d56c9e53a2e09c8b2b8d781f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7e681462ae2e802b4c3be7bc84183f52736a88f17094957a5bf04a9afa8cde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e681462ae2e802b4c3be7bc84183f52736a88f17094957a5bf04a9afa8cde3->enter($__internal_f7e681462ae2e802b4c3be7bc84183f52736a88f17094957a5bf04a9afa8cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f7e681462ae2e802b4c3be7bc84183f52736a88f17094957a5bf04a9afa8cde3->leave($__internal_f7e681462ae2e802b4c3be7bc84183f52736a88f17094957a5bf04a9afa8cde3_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\keosu\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
