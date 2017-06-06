<?php

/* KeosuCoreBundle:Page:editGadget.html.twig */
class __TwigTemplate_edcf1056bb046ace18d274d2150315b3766c5757e65e5aa01010946befd78b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:editGadget.html.twig", 19);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        // line 22
        echo "\t";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit gadget", array(), "messages");
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit gadget", array(), "messages");
        echo "</h1>
\t<br/>
\t<div>
\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

\t\t<div class=\"imgTemplate\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template", array()), 'row');
        echo "
\t\t</div>

\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shared", array()), 'row');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "config", array()), 'row');
        echo "

\t\t<br class=\"clear\"/><br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t</a>

\t\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

\t</div>
\t<script>
\t\t\$(document).ready(function() {
\t\t\ttemplateButton(\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetDir"]) ? $context["gadgetDir"] : null), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : null), "html", null, true);
        echo "\");

\t\t\t// This is a very nasty hack for resolving a issue encountered during the save of the menu gadget
\t\t\t// Sometimes, a page included in the config is not taken into account
\t\t\tif ('";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : null), "html", null, true);
        echo "' == 'keosu-menu') {
\t\t\t\t\$('#content form').submit(function() {
\t\t\t\t\t\$('#content .collection-items select').each(function(index) {
\t\t\t\t\t\t\$(this).attr('name', 'form[config][page][' + (index+1) + ']')
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:editGadget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  85 => 48,  77 => 43,  71 => 40,  63 => 35,  59 => 34,  53 => 31,  47 => 28,  40 => 25,  37 => 24,  32 => 22,  29 => 21,  11 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Page:editGadget.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/editGadget.html.twig");
    }
}
