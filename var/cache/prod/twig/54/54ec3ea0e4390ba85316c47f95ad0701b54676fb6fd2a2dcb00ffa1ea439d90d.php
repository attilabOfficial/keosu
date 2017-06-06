<?php

/* KeosuCoreBundle:Form:fields-article.html.twig */
class __TwigTemplate_7771bb161e313ce48c7197c0eb8457049c5249a186c01f0b7903cafbc1af4cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("MopaBootstrapBundle:Form:fields.html.twig", "KeosuCoreBundle:Form:fields-article.html.twig", 18);
        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_file_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "\t     ";
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : null))) {
            // line 23
            echo "\t     \t<center>
\t   \t\t \t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : null), "html", null, true);
            echo "\" class=\"img-thumbnail img-preview uploader\"/>
\t   \t\t </center>
\t    ";
        }
        // line 27
        echo "\t    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Form:fields-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 27,  40 => 24,  37 => 23,  34 => 22,  31 => 21,  28 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Form:fields-article.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Form/fields-article.html.twig");
    }
}
