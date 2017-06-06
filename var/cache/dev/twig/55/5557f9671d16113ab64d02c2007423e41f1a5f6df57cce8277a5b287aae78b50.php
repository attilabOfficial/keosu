<?php

/* KeosuCoreBundle:App:configPanel.html.twig */
class __TwigTemplate_2992d7132ba8be0204a24f30b7dbdbe3fc852c6226dfc28390b0b06276ebcaad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df85ffd99a1ae98ed65035e9f2c2c5bea7dd6c540b2e89e60d24a32745f2e950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df85ffd99a1ae98ed65035e9f2c2c5bea7dd6c540b2e89e60d24a32745f2e950->enter($__internal_df85ffd99a1ae98ed65035e9f2c2c5bea7dd6c540b2e89e60d24a32745f2e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:configPanel.html.twig"));

        // line 1
        echo "<br class=\"clear\"/>
<fieldset>
\t<legend>";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["packageType"]) ? $context["packageType"] : $this->getContext($context, "packageType"))), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["packageName"]) ? $context["packageName"] : $this->getContext($context, "packageName")), "html", null, true);
        echo "</legend>
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
\t
\t";
        // line 6
        if ((isset($context["packageHelpMessage"]) ? $context["packageHelpMessage"] : $this->getContext($context, "packageHelpMessage"))) {
            // line 7
            echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-9 col-lg-push-3\">
\t\t\t<span class=\"help-block\">";
            // line 9
            echo (isset($context["packageHelpMessage"]) ? $context["packageHelpMessage"] : $this->getContext($context, "packageHelpMessage"));
            echo "</span>
\t\t</div>
\t</div>
\t";
        }
        // line 13
        echo "</fieldset>
";
        
        $__internal_df85ffd99a1ae98ed65035e9f2c2c5bea7dd6c540b2e89e60d24a32745f2e950->leave($__internal_df85ffd99a1ae98ed65035e9f2c2c5bea7dd6c540b2e89e60d24a32745f2e950_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:configPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  43 => 9,  39 => 7,  37 => 6,  32 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br class=\"clear\"/>
<fieldset>
\t<legend>{{ packageType | capitalize }} : {{ packageName }}</legend>
\t{{ form_row(form) }}
\t
\t{% if packageHelpMessage %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-9 col-lg-push-3\">
\t\t\t<span class=\"help-block\">{{ packageHelpMessage | raw }}</span>
\t\t</div>
\t</div>
\t{% endif %}
</fieldset>
", "KeosuCoreBundle:App:configPanel.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/App/configPanel.html.twig");
    }
}
