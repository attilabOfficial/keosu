<?php

/* KeosuReaderRssReaderBundle:Edit:edit.html.twig */
class __TwigTemplate_a85ffe800bfefe5cd44d567d813f49daf76cb3353778bcc76d31c061b0e8e6e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuReaderRssReaderBundle:Edit:edit.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        // line 21
        echo "\tConfigure a new reader
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div>
\t<h1>Edit RSS Reader</h1>
   ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t
\t    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "feed_url", array()), 'row');
        echo "
\t    <br class=\"clear\"/>
\t    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "striphtml", array()), 'row');
        echo "
\t    <br class=\"clear\"/>
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row');
        echo "
\t\t<br class=\"clear\"/>
\t    <div class=\"allowupdate\">
\t    \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "allowupdate", array()), 'row');
        echo "
\t    \t<div class=\"allowupdatelabel\">
\t    \t\tAllow content be to synchronise again after the first import.
\t    \t\t<a class=\"badge remove-button\" title=\"Allow content be to update after the first import. If you check this box you won't be able to modify content manually\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\"></span>
\t\t\t\t</a>
\t    \t\t 
\t    \t</div>
\t    </div>
    \t <br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span><a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "KeosuReaderRssReaderBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 48,  73 => 37,  67 => 34,  62 => 32,  57 => 30,  53 => 29,  48 => 27,  44 => 26,  40 => 24,  37 => 23,  32 => 21,  29 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuReaderRssReaderBundle:Edit:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\Reader\\RssReaderBundle/Resources/views/Edit/edit.html.twig");
    }
}
