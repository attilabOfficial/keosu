<?php

/* KeosuCoreBundle:MainViews:page.html.twig */
class __TwigTemplate_96461af2fc9ac8c8789cea5120a65f796684e8d3ec16a14dd3a4b6ea32bcc290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:page.html.twig", 19);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "\t<div id=\"checklayout\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$.get('";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_check");
        echo "', function(data) {
\t\t\t\t\t\$('#checklayout').html(data);
\t\t\t\t});
\t\t\t} );
\t\t</script>
\t</div>
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "\t\t</div>
\t</div>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-book icon-menu\"></span> Pages</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("The page part is about your application page, articles, readers data, etc...", array(), "messages");
        // line 40
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-file icon-menu\"></span>";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("A page is a page, no matter about content for instance, it's only a way to display something (but have an idea of what you want to display)", array(), "messages");
        // line 49
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage");
        echo "\" ><button type=\"button\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        echo " </button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-edit icon-menu\"></span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</h3>

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-default\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  107 => 58,  102 => 56,  98 => 54,  94 => 53,  86 => 50,  83 => 49,  81 => 48,  76 => 46,  68 => 40,  66 => 39,  59 => 34,  56 => 33,  50 => 65,  48 => 33,  37 => 25,  32 => 22,  29 => 21,  11 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:MainViews:page.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/page.html.twig");
    }
}
