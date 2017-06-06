<?php

/* KeosuCoreBundle:Page:zonePanel.html.twig */
class __TwigTemplate_2d4339d0f5dbdbdd364656e80481fe830bfcad44ac80c4ce99551f6f6061d91f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageAddActionGadget' => array($this, 'block_pageAddActionGadget'),
            'pageEditActionGadget' => array($this, 'block_pageEditActionGadget'),
            'pageDeleteActionGadget' => array($this, 'block_pageDeleteActionGadget'),
            'pageExtensionActionGadget' => array($this, 'block_pageExtensionActionGadget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e4cf0d8698881fa460f578884aa8f2ab6e4aad46cca606987e1da64b81a026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e4cf0d8698881fa460f578884aa8f2ab6e4aad46cca606987e1da64b81a026->enter($__internal_80e4cf0d8698881fa460f578884aa8f2ab6e4aad46cca606987e1da64b81a026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:zonePanel.html.twig"));

        // line 1
        echo "<div id=\"panel";
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\" class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 6
        $this->displayBlock('pageAddActionGadget', $context, $blocks);
        // line 24
        echo "
\t\t";
        // line 25
        if ((isset($context["gadget"]) ? $context["gadget"] : $this->getContext($context, "gadget"))) {
            // line 26
            echo "
\t\t\t";
            // line 27
            $this->displayBlock('pageEditActionGadget', $context, $blocks);
            // line 32
            echo "
\t\t\t";
            // line 33
            $this->displayBlock('pageDeleteActionGadget', $context, $blocks);
            // line 38
            echo "\t\t";
        }
        // line 39
        echo "\t\t";
        $this->displayBlock('pageExtensionActionGadget', $context, $blocks);
        // line 41
        echo "\t\t<script>
\t\t\t\$( \"#panel";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\" ).hover(
\t\t\t\tfunction() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\").css(\"border\",\"5px solid red\");
\t\t\t\t}, function() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\").css(\"border\",\"none\");
\t\t\t\t}
\t\t\t);
\t\t</script>
\t</div>
</div>
";
        
        $__internal_80e4cf0d8698881fa460f578884aa8f2ab6e4aad46cca606987e1da64b81a026->leave($__internal_80e4cf0d8698881fa460f578884aa8f2ab6e4aad46cca606987e1da64b81a026_prof);

    }

    // line 6
    public function block_pageAddActionGadget($context, array $blocks = array())
    {
        $__internal_0f1d585d0d3a55e590ad99f295de35fa496af25014a017fa63e59bb5c305fe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d585d0d3a55e590ad99f295de35fa496af25014a017fa63e59bb5c305fe41->enter($__internal_0f1d585d0d3a55e590ad99f295de35fa496af25014a017fa63e59bb5c305fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageAddActionGadget"));

        // line 7
        echo "\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add gadget", array(), "messages");
        // line 10
        echo "\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>

\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gadgetList"]) ? $context["gadgetList"] : $this->getContext($context, "gadgetList")));
        foreach ($context['_seq'] as $context["_key"] => $context["gadgetName"]) {
            // line 15
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_add", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "gadgetName" => $context["gadgetName"])), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $context["gadgetName"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gadgetName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        
        $__internal_0f1d585d0d3a55e590ad99f295de35fa496af25014a017fa63e59bb5c305fe41->leave($__internal_0f1d585d0d3a55e590ad99f295de35fa496af25014a017fa63e59bb5c305fe41_prof);

    }

    // line 27
    public function block_pageEditActionGadget($context, array $blocks = array())
    {
        $__internal_4ae3dc4235204e59cda36901b2ed2c9987afbcb09b604672ebaf52eaacd4bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae3dc4235204e59cda36901b2ed2c9987afbcb09b604672ebaf52eaacd4bfea->enter($__internal_4ae3dc4235204e59cda36901b2ed2c9987afbcb09b604672ebaf52eaacd4bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageEditActionGadget"));

        // line 28
        echo "\t\t\t\t<a class=\"btn btn-info edit-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_edit", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")))), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gadget"]) ? $context["gadget"] : $this->getContext($context, "gadget")), "name", array()), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t";
        
        $__internal_4ae3dc4235204e59cda36901b2ed2c9987afbcb09b604672ebaf52eaacd4bfea->leave($__internal_4ae3dc4235204e59cda36901b2ed2c9987afbcb09b604672ebaf52eaacd4bfea_prof);

    }

    // line 33
    public function block_pageDeleteActionGadget($context, array $blocks = array())
    {
        $__internal_7b33aa3fc5e2b8a7e1e68dc4258b6f1e4c177ddd6b87b1378155d05a89790159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b33aa3fc5e2b8a7e1e68dc4258b6f1e4c177ddd6b87b1378155d05a89790159->enter($__internal_7b33aa3fc5e2b8a7e1e68dc4258b6f1e4c177ddd6b87b1378155d05a89790159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDeleteActionGadget"));

        // line 34
        echo "\t\t\t\t<a class=\"remove-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_gadget_delete", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")))), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Clean zone", array(), "messages");
        echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t</a>
\t\t\t";
        
        $__internal_7b33aa3fc5e2b8a7e1e68dc4258b6f1e4c177ddd6b87b1378155d05a89790159->leave($__internal_7b33aa3fc5e2b8a7e1e68dc4258b6f1e4c177ddd6b87b1378155d05a89790159_prof);

    }

    // line 39
    public function block_pageExtensionActionGadget($context, array $blocks = array())
    {
        $__internal_d4f9648cee940b8bf2537d8d0843931526015b5a416066c63c4009636c9c201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f9648cee940b8bf2537d8d0843931526015b5a416066c63c4009636c9c201e->enter($__internal_d4f9648cee940b8bf2537d8d0843931526015b5a416066c63c4009636c9c201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageExtensionActionGadget"));

        // line 40
        echo "\t\t";
        
        $__internal_d4f9648cee940b8bf2537d8d0843931526015b5a416066c63c4009636c9c201e->leave($__internal_d4f9648cee940b8bf2537d8d0843931526015b5a416066c63c4009636c9c201e_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:zonePanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 40,  181 => 39,  167 => 34,  161 => 33,  149 => 29,  144 => 28,  138 => 27,  129 => 21,  117 => 17,  113 => 16,  110 => 15,  106 => 14,  100 => 10,  98 => 9,  94 => 7,  88 => 6,  74 => 46,  69 => 44,  64 => 42,  61 => 41,  58 => 39,  55 => 38,  53 => 33,  50 => 32,  48 => 27,  45 => 26,  43 => 25,  40 => 24,  38 => 6,  32 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"panel{{ zoneId }}\" class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">{{ zoneId }}</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t{% block pageAddActionGadget %}
\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
\t\t\t\t\t{% trans %}Add gadget{% endtrans %}
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>

\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t{% for gadgetName in gadgetList %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('keosu_gadget_add',{'pageId':pageId, 'zoneName':zoneId, 'gadgetName':gadgetName}) }}\">
\t\t\t\t\t\t\t\t{% trans %}Add{% endtrans %} {{ gadgetName }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endblock pageAddActionGadget %}

\t\t{% if gadget %}

\t\t\t{% block pageEditActionGadget %}
\t\t\t\t<a class=\"btn btn-info edit-gadget\" href=\"{{ path('keosu_gadget_edit',{'pageId':pageId, 'zoneName':zoneId}) }}\">
\t\t\t\t\t{% trans %}Edit{% endtrans %} {{ gadget.name }}
\t\t\t\t</a>
\t\t\t{% endblock pageEditActionGadget %}

\t\t\t{% block pageDeleteActionGadget %}
\t\t\t\t<a class=\"remove-gadget\" href=\"{{ path('keosu_gadget_delete',{'pageId':pageId, 'zoneName':zoneId}) }}\" title=\"{% trans %}Clean zone{% endtrans %}\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t</a>
\t\t\t{% endblock pageDeleteActionGadget %}
\t\t{% endif %}
\t\t{% block pageExtensionActionGadget %}
\t\t{% endblock pageExtensionActionGadget%}
\t\t<script>
\t\t\t\$( \"#panel{{ zoneId }}\" ).hover(
\t\t\t\tfunction() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#{{ zoneId }}\").css(\"border\",\"5px solid red\");
\t\t\t\t}, function() {
\t\t\t\t\t\$(\"iframe\").contents().find(\"#{{ zoneId }}\").css(\"border\",\"none\");
\t\t\t\t}
\t\t\t);
\t\t</script>
\t</div>
</div>
", "KeosuCoreBundle:Page:zonePanel.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Page/zonePanel.html.twig");
    }
}
