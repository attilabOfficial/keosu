<?php

/* KeosuCoreBundle:Menu:app.html.twig */
class __TwigTemplate_bceaec2ddf20d06f228f0ecf3fac5bb4a163c09090b63c2f25f0f93d43a85589 extends Twig_Template
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
        $__internal_30a67f122f740809221d265ce59dc62d1ce14398b54e1a18d42a2ce856adace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a67f122f740809221d265ce59dc62d1ce14398b54e1a18d42a2ce856adace0->enter($__internal_30a67f122f740809221d265ce59dc62d1ce14398b54e1a18d42a2ce856adace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:app.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<span class=\"glyphicon glyphicon-eye-open\"></span>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["curAppName"]) ? $context["curAppName"] : $this->getContext($context, "curAppName")), "html", null, true);
        echo " <b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 6
            echo "\t<li role=\"presentation\">
\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_changeapp", array("appid" => $this->getAttribute($context["app"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "</a>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_30a67f122f740809221d265ce59dc62d1ce14398b54e1a18d42a2ce856adace0->leave($__internal_30a67f122f740809221d265ce59dc62d1ce14398b54e1a18d42a2ce856adace0_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  38 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<span class=\"glyphicon glyphicon-eye-open\"></span>
{{ curAppName }} <b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
\t{% for app in apps %}
\t<li role=\"presentation\">
\t\t<a href=\"{{ path('keosu_changeapp',{'appid':app.id}) }}\">{{ app.name }}</a>
\t</li>
\t{% endfor %}
</ul>
", "KeosuCoreBundle:Menu:app.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/app.html.twig");
    }
}
