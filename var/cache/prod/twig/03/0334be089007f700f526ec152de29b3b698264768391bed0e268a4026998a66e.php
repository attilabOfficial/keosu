<?php

/* KeosuCoreBundle:Page:studio.html.twig */
class __TwigTemplate_c13f16a82a70ab493bc974fcdd541748ffd6c0a635bd8b5b02594af88097ab60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:studio.html.twig", 18);
        $this->blocks = array(
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

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
\t<div class=\"pageinfo\">
\t\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name", array()), "html", null, true);
        echo "</h4>


\t\t<div class=\"btn-group\">
\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\tScreen size
\t\t\t\t<span class=\"caret\"></span>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a onclick=\"changePreviewSize(736,414)\" href=\"#\">Phone</a>
\t\t\t\t\t<a onclick=\"changePreviewSize(414,736)\" href=\"#\">Phone Landscape</a>
\t\t\t\t\t<a onclick=\"changePreviewSize(576, 432)\" href=\"#\">Tablet</a>
\t\t\t\t\t<a onclick=\"changePreviewSize(432,576)\" href=\"#\">Tablet Landscape</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<script>
\t\tfunction changePreviewSize(height, width){
\t\t\t\$('.templatepreview').css('height',height);
\t\t\t\$('.templatepreview').css('width',width);
\t\t\t\$('#iframepreview').attr('height',height);
\t\t\t\$('#iframepreview').attr('width',width);
\t\t}
\t</script>

\t<div class=\"row\">
\t\t<div class=\"col-md-5\">
\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 54
            echo "\t\t\t\t";
            echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigIncludePanelExtension')->includePanelGadget($this->getAttribute($context["zone"], "zoneId", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), $this->getAttribute($context["zone"], "gadget", array()), (isset($context["gadgets"]) ? $context["gadgets"] : null));
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t</div>

\t\t<div class=\"col-md-7\">
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t<strong>Heads up!</strong>
\t\t\t\tUse the simulator for more reliability. Some of our features are only available on device.
\t\t\t</div>
\t\t\t<iframe style=\"margin:0 auto;display:block;\" id=\"iframepreview\" width=\"414px\" height=\"736px\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
        echo "/keosu/export/simulator/www/index.html#/Page/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true);
        echo "?rand=";
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\"></iframe>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:studio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 63,  81 => 56,  72 => 54,  68 => 53,  35 => 23,  31 => 21,  28 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Page:studio.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/studio.html.twig");
    }
}
