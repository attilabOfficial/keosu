<?php

/* KeosuCoreBundle:Page:studio.html.twig */
class __TwigTemplate_933dec748b4af1ee367f1fef21b5d686e6f14cf690a73458c5092904550c6f98 extends Twig_Template
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
        $__internal_e7915e7feb4d70b4d7c655357349b282e600c56d072deed991156434a084ef9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7915e7feb4d70b4d7c655357349b282e600c56d072deed991156434a084ef9e->enter($__internal_e7915e7feb4d70b4d7c655357349b282e600c56d072deed991156434a084ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:studio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7915e7feb4d70b4d7c655357349b282e600c56d072deed991156434a084ef9e->leave($__internal_e7915e7feb4d70b4d7c655357349b282e600c56d072deed991156434a084ef9e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d1a42cfb37f353fa946d2278ad40576bb0906a1b52787f65b74c5b765f403a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1a42cfb37f353fa946d2278ad40576bb0906a1b52787f65b74c5b765f403a2->enter($__internal_0d1a42cfb37f353fa946d2278ad40576bb0906a1b52787f65b74c5b765f403a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
\t<div class=\"pageinfo\">
\t\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 54
            echo "\t\t\t\t";
            echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigIncludePanelExtension')->includePanelGadget($this->getAttribute($context["zone"], "zoneId", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), $this->getAttribute($context["zone"], "gadget", array()), (isset($context["gadgets"]) ? $context["gadgets"] : $this->getContext($context, "gadgets")));
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
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/simulator/www/index.html#/Page/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "?rand=";
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\"></iframe>
\t\t</div>
\t</div>
";
        
        $__internal_0d1a42cfb37f353fa946d2278ad40576bb0906a1b52787f65b74c5b765f403a2->leave($__internal_0d1a42cfb37f353fa946d2278ad40576bb0906a1b52787f65b74c5b765f403a2_prof);

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
        return array (  99 => 63,  90 => 56,  81 => 54,  77 => 53,  44 => 23,  40 => 21,  34 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
#}
{% extends 'KeosuCoreBundle:MainViews:page.html.twig' %}

{% block content %}

\t<div class=\"pageinfo\">
\t\t<h4>{{ page.name }}</h4>


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
\t\t\t{% for zone in zones %}
\t\t\t\t{{ includePanelGadget(zone.zoneId,page.id,zone.gadget,gadgets) }}
\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"col-md-7\">
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t<strong>Heads up!</strong>
\t\t\t\tUse the simulator for more reliability. Some of our features are only available on device.
\t\t\t</div>
\t\t\t<iframe style=\"margin:0 auto;display:block;\" id=\"iframepreview\" width=\"414px\" height=\"736px\" src=\"{{url_base}}/keosu/export/simulator/www/index.html#/Page/{{ page.id }}?rand={{ date().timestamp }}\"></iframe>
\t\t</div>
\t</div>
{% endblock %}
", "KeosuCoreBundle:Page:studio.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/studio.html.twig");
    }
}
