<?php

/* ::base.html.twig */
class __TwigTemplate_f430fe270b713df61e0fd5896441341282691254942d779d28869e544e30dad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::skeleton.html.twig", "::base.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::skeleton.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1ce462b4d5d87bc3ed186fe25862c6d2b79516b466d54d9f61c8c28a5c37195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ce462b4d5d87bc3ed186fe25862c6d2b79516b466d54d9f61c8c28a5c37195->enter($__internal_c1ce462b4d5d87bc3ed186fe25862c6d2b79516b466d54d9f61c8c28a5c37195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1ce462b4d5d87bc3ed186fe25862c6d2b79516b466d54d9f61c8c28a5c37195->leave($__internal_c1ce462b4d5d87bc3ed186fe25862c6d2b79516b466d54d9f61c8c28a5c37195_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{# \t
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2017 Pockeit

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
    {% extends '::skeleton.html.twig' %}
", "::base.html.twig", "C:\\wamp64\\www\\keosu\\app/Resources\\views/base.html.twig");
    }
}
