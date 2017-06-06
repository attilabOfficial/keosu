<?php

/* KeosuCoreBundle:Menu:app.html.twig */
class __TwigTemplate_9b2dade6ff3925d0e6d87f104e49c26ad7b1791f34d1e040b85315410a7a4cc3 extends Twig_Template
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
        $__internal_871f196b6df4ed43f30d27ebd914b561210ee20129ee8ff932d239cb952e3d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871f196b6df4ed43f30d27ebd914b561210ee20129ee8ff932d239cb952e3d3d->enter($__internal_871f196b6df4ed43f30d27ebd914b561210ee20129ee8ff932d239cb952e3d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:app.html.twig"));

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
        
        $__internal_871f196b6df4ed43f30d27ebd914b561210ee20129ee8ff932d239cb952e3d3d->leave($__internal_871f196b6df4ed43f30d27ebd914b561210ee20129ee8ff932d239cb952e3d3d_prof);

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
", "KeosuCoreBundle:Menu:app.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Menu/app.html.twig");
    }
}
