<?php

/* KeosuCoreBundle::page.html.twig */
class __TwigTemplate_cf14a60a16be8e329872e8825b2f6912c342261c377eeae7db6c5a07bea1f60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::base.html.twig", "KeosuCoreBundle::page.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_693e15ef5a0b90fee27372f68c94474dfaf14a2aa61aead6a673ddf2c3ce0ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693e15ef5a0b90fee27372f68c94474dfaf14a2aa61aead6a673ddf2c3ce0ba3->enter($__internal_693e15ef5a0b90fee27372f68c94474dfaf14a2aa61aead6a673ddf2c3ce0ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle::page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693e15ef5a0b90fee27372f68c94474dfaf14a2aa61aead6a673ddf2c3ce0ba3->leave($__internal_693e15ef5a0b90fee27372f68c94474dfaf14a2aa61aead6a673ddf2c3ce0ba3_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle::page.html.twig";
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
\tCopyright (C) 2016  Pockeit

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
{% extends '::base.html.twig' %}

", "KeosuCoreBundle::page.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/page.html.twig");
    }
}
