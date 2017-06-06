<?php

/* KeosuCoreBundle:MainViews:content.html.twig */
class __TwigTemplate_5e18f19f16f3be5478c334b3f8d6c48e23103b14cf65be5605b95ea5f7686012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:content.html.twig", 19);
        $this->blocks = array(
            'contentmenu' => array($this, 'block_contentmenu'),
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

    // line 20
    public function block_contentmenu($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"activesidebar\">
\t";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "\t\t<div id=\"content\">
\t\t\t<div class=\"panel\">
\t\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-th icon-menu\"></span> Content</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("In the content, mustly the first page you see, you will add content for your application. But don't worry, the page will come in a second step.", array(), "messages");
        // line 33
        echo "\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Readers</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("A reader is a connector to an external source (website, RSS, software etc ...) to import contents in Keosu.", array(), "messages");
        // line 43
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_ReaderManager_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage readers</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-pushpin icon-menu\"></span>Article</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("An article is ... well ... a simple article with title, content, and pictures ...", array(), "messages");
        // line 52
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_article_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage articles</button></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-map-marker icon-menu\"></span>Location</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("A point on a map.", array(), "messages");
        // line 62
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_location_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage POI</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-picture icon-menu\"></span>Picture</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("Import pictures to feed your galleries", array(), "messages");
        // line 71
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_picture_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage pictures</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-calendar icon-menu\"></span>Event</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("An event of a calendar", array(), "messages");
        // line 80
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_event_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage events</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-list icon-menu\"></span>Menu</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add awesome menus to your project app", array(), "messages");
        // line 89
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_menu_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage menus</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Search</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage searches entries", array(), "messages");
        // line 98
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_search_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage searches</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 99,  169 => 98,  167 => 97,  157 => 90,  154 => 89,  152 => 88,  142 => 81,  139 => 80,  137 => 79,  127 => 72,  124 => 71,  122 => 70,  112 => 63,  109 => 62,  107 => 61,  97 => 54,  93 => 52,  91 => 51,  81 => 44,  78 => 43,  76 => 42,  65 => 33,  63 => 32,  56 => 27,  53 => 26,  47 => 105,  45 => 26,  41 => 24,  38 => 23,  33 => 21,  30 => 20,  11 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:MainViews:content.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/MainViews/content.html.twig");
    }
}
