<?php

/* KeosuCoreBundle:Form:fields-image.html.twig */
class __TwigTemplate_4cdb061921bde435a7ee194e1c55da8909e861d19f799ed4a5111faa9ce9ebd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("MopaBootstrapBundle:Form:fields.html.twig", "KeosuCoreBundle:Form:fields-image.html.twig", 18);
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
        $__internal_05a3d080cc3a169f036ad90035a569a8cd558322cf1d1729704fabddaf47991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a3d080cc3a169f036ad90035a569a8cd558322cf1d1729704fabddaf47991d->enter($__internal_05a3d080cc3a169f036ad90035a569a8cd558322cf1d1729704fabddaf47991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Form:fields-image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a3d080cc3a169f036ad90035a569a8cd558322cf1d1729704fabddaf47991d->leave($__internal_05a3d080cc3a169f036ad90035a569a8cd558322cf1d1729704fabddaf47991d_prof);

    }

    // line 21
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_beaafb2f80cfd83152f645e33249c7797d167be3c1d7d8901d8de1c4206a92a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaafb2f80cfd83152f645e33249c7797d167be3c1d7d8901d8de1c4206a92a4->enter($__internal_beaafb2f80cfd83152f645e33249c7797d167be3c1d7d8901d8de1c4206a92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "    \t";
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 24
            echo "    \t\t<center>
\t   \t\t \t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")), "html", null, true);
            echo "\" id=\"img-preview\" class=\"uploader\"/>
\t   \t\t </center>
\t   \t";
        } else {
            // line 28
            echo "\t   \t\t<center>
\t   \t\t \t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")), "html", null, true);
            echo "\" id=\"img-preview\" class=\"uploader\" style=\"display:none\"/>
\t   \t\t </center>
\t   \t";
        }
        // line 32
        echo "\t    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_beaafb2f80cfd83152f645e33249c7797d167be3c1d7d8901d8de1c4206a92a4->leave($__internal_beaafb2f80cfd83152f645e33249c7797d167be3c1d7d8901d8de1c4206a92a4_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Form:fields-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 32,  59 => 29,  56 => 28,  49 => 25,  46 => 24,  43 => 23,  40 => 22,  34 => 21,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# \t
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
{% extends 'MopaBootstrapBundle:Form:fields.html.twig' %}


{% block file_widget %}
    {% spaceless %}
    \t{% if image_url is not null %}
    \t\t<center>
\t   \t\t \t<img src=\"{{url_base}}{{ image_url }}\" id=\"img-preview\" class=\"uploader\"/>
\t   \t\t </center>
\t   \t{% else %}
\t   \t\t<center>
\t   \t\t \t<img src=\"{{url_base}}{{ image_url }}\" id=\"img-preview\" class=\"uploader\" style=\"display:none\"/>
\t   \t\t </center>
\t   \t{% endif %}
\t    {{ block('form_widget') }}
    {% endspaceless %}
{% endblock %}

", "KeosuCoreBundle:Form:fields-image.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Form/fields-image.html.twig");
    }
}
