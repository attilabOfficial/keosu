<?php

/* KeosuCoreBundle::page.html.twig */
class __TwigTemplate_3d6da69310f77650e780decc4f433d231d5303427c615e6a896c27e5b95d2d6e extends Twig_Template
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
        $__internal_b4f62a1928a8a1a02cfeb2892b4f2e9db00c21cac1edbef529bee3cceef25f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f62a1928a8a1a02cfeb2892b4f2e9db00c21cac1edbef529bee3cceef25f14->enter($__internal_b4f62a1928a8a1a02cfeb2892b4f2e9db00c21cac1edbef529bee3cceef25f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle::page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f62a1928a8a1a02cfeb2892b4f2e9db00c21cac1edbef529bee3cceef25f14->leave($__internal_b4f62a1928a8a1a02cfeb2892b4f2e9db00c21cac1edbef529bee3cceef25f14_prof);

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

", "KeosuCoreBundle::page.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/page.html.twig");
    }
}
