<?php

/* KeosuCoreBundle:Page:pagePanel.html.twig */
class __TwigTemplate_5c746e14e61ecf45f74f559519e75a490151740a8b68002a2587336e080999fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageEditAction' => array($this, 'block_pageEditAction'),
            'pageDeleteAction' => array($this, 'block_pageDeleteAction'),
            'pageExtentionAction' => array($this, 'block_pageExtentionAction'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acd760c09465fc4d3cc70a6d77dad0106e7322288897711d04151c07419eda12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd760c09465fc4d3cc70a6d77dad0106e7322288897711d04151c07419eda12->enter($__internal_acd760c09465fc4d3cc70a6d77dad0106e7322288897711d04151c07419eda12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:pagePanel.html.twig"));

        // line 1
        $this->displayBlock('pageEditAction', $context, $blocks);
        // line 4
        $this->displayBlock('pageDeleteAction', $context, $blocks);
        // line 7
        $this->displayBlock('pageExtentionAction', $context, $blocks);
        
        $__internal_acd760c09465fc4d3cc70a6d77dad0106e7322288897711d04151c07419eda12->leave($__internal_acd760c09465fc4d3cc70a6d77dad0106e7322288897711d04151c07419eda12_prof);

    }

    // line 1
    public function block_pageEditAction($context, array $blocks = array())
    {
        $__internal_be1f19523a3f87508c134a2d8de1d4ed03898fb3bc86738f4051067ce73d2802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1f19523a3f87508c134a2d8de1d4ed03898fb3bc86738f4051067ce73d2802->enter($__internal_be1f19523a3f87508c134a2d8de1d4ed03898fb3bc86738f4051067ce73d2802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageEditAction"));

        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage_edit", array("id" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a>
";
        
        $__internal_be1f19523a3f87508c134a2d8de1d4ed03898fb3bc86738f4051067ce73d2802->leave($__internal_be1f19523a3f87508c134a2d8de1d4ed03898fb3bc86738f4051067ce73d2802_prof);

    }

    // line 4
    public function block_pageDeleteAction($context, array $blocks = array())
    {
        $__internal_0561a23451b8912e0a3082e1b3c63f13031c040a782c79190cf46376878960fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0561a23451b8912e0a3082e1b3c63f13031c040a782c79190cf46376878960fa->enter($__internal_0561a23451b8912e0a3082e1b3c63f13031c040a782c79190cf46376878960fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDeleteAction"));

        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage_delete", array("id" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i></a>
";
        
        $__internal_0561a23451b8912e0a3082e1b3c63f13031c040a782c79190cf46376878960fa->leave($__internal_0561a23451b8912e0a3082e1b3c63f13031c040a782c79190cf46376878960fa_prof);

    }

    // line 7
    public function block_pageExtentionAction($context, array $blocks = array())
    {
        $__internal_f018bb65c01b65ca49c3c4c8d963244bbdb80b7475de4fd8b36f8340b621fc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f018bb65c01b65ca49c3c4c8d963244bbdb80b7475de4fd8b36f8340b621fc73->enter($__internal_f018bb65c01b65ca49c3c4c8d963244bbdb80b7475de4fd8b36f8340b621fc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageExtentionAction"));

        
        $__internal_f018bb65c01b65ca49c3c4c8d963244bbdb80b7475de4fd8b36f8340b621fc73->leave($__internal_f018bb65c01b65ca49c3c4c8d963244bbdb80b7475de4fd8b36f8340b621fc73_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:pagePanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  58 => 5,  52 => 4,  42 => 2,  36 => 1,  29 => 7,  27 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block pageEditAction %}
<a href=\"{{ path('keosu_core_views_page_manage_edit',{'id':pageId}) }}\"><i class=\"glyphicon glyphicon-edit\"></i></a>
{% endblock pageEditAction %}
{% block pageDeleteAction %}
<a href=\"{{ path('keosu_core_views_page_manage_delete',{'id':pageId}) }}\"><i class=\"glyphicon glyphicon-remove\"></i></a>
{% endblock pageDeleteAction %}
{% block pageExtentionAction %}{% endblock pageExtentionAction %}
", "KeosuCoreBundle:Page:pagePanel.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/pagePanel.html.twig");
    }
}
