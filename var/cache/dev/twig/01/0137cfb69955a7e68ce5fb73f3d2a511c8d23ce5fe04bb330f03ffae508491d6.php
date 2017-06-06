<?php

/* KeosuCoreBundle:App:edit.html.twig */
class __TwigTemplate_d75a59aaf5d9b449c4dd323b90eec00cabc3525e0a680309cee02911efdafdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:App:edit.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3a77b90efcba1dc373d2b008a87a22162e124ee124dea52379ace8274ed223c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a77b90efcba1dc373d2b008a87a22162e124ee124dea52379ace8274ed223c->enter($__internal_c3a77b90efcba1dc373d2b008a87a22162e124ee124dea52379ace8274ed223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a77b90efcba1dc373d2b008a87a22162e124ee124dea52379ace8274ed223c->leave($__internal_c3a77b90efcba1dc373d2b008a87a22162e124ee124dea52379ace8274ed223c_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e7f8498aabacd4d7086b6169ae32d7220b778f341efffa0e7bf0de462e8dee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7f8498aabacd4d7086b6169ae32d7220b778f341efffa0e7bf0de462e8dee1->enter($__internal_8e7f8498aabacd4d7086b6169ae32d7220b778f341efffa0e7bf0de462e8dee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit App", array(), "messages");
        
        $__internal_8e7f8498aabacd4d7086b6169ae32d7220b778f341efffa0e7bf0de462e8dee1->leave($__internal_8e7f8498aabacd4d7086b6169ae32d7220b778f341efffa0e7bf0de462e8dee1_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4aae8a0d30d56cb03a0bc017840d832cd51fac59eda16dced3a826fa2cc60bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4aae8a0d30d56cb03a0bc017840d832cd51fac59eda16dced3a826fa2cc60bb->enter($__internal_b4aae8a0d30d56cb03a0bc017840d832cd51fac59eda16dced3a826fa2cc60bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <script>
\t\t\$(document).ready(function () {
\t\t\tthemeButton(\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["themeDir"]) ? $context["themeDir"] : $this->getContext($context, "themeDir")), "html", null, true);
        echo "\");
\t\t});

\t\tvar _URL = window.URL || window.webkitURL;
        /*
         *Test the size of an image uploaded
         *@param input : tag input controller
         *@param width : width expected
         *@param height : height expected
         *@param callback : function who upload the image if it's ok
         */
\t\tfunction check(input, width, height, callback) {
\t\t\tvar file, img;
\t\t\tif ((file = input.files[0])) {
\t\t\t\timg = new Image();
\t\t\t\timg.onload = function () {
\t\t\t\t\tif (this.width != width || this.height != height) {
\t\t\t\t\t\talert(\"Warning: Width \" + width + \" / Height \" + height + \" expected\");
\t\t\t\t\t\tcallback(0, input);
\t\t\t\t\t} else {
\t\t\t\t\t\tcallback(1, input);
\t\t\t\t\t}
\t\t\t\t};
\t\t\t}
\t\t\timg.src = _URL.createObjectURL(file);
\t\t}

        /*
         *Change the preview with the image uploaded
         *@param input : tag input controller
         *@param preview : string who contain the name of the marker \"preview\".
         */
\t\tfunction readURL(input, preview) {
\t\t\tif (input.files && input.files[0]) {
\t\t\t\tvar reader = new FileReader();

\t\t\t\treader.onload = function (e) {
\t\t\t\t\t\$('#' + preview).attr('src', e.target.result);
\t\t\t\t};

\t\t\t\treader.readAsDataURL(input.files[0]);
\t\t\t}
\t\t}
    </script>
    <div class=\"panel\">
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t";
        // line 72
        if ((isset($context["firstApp"]) ? $context["firstApp"] : $this->getContext($context, "firstApp"))) {
            // line 73
            echo "                    <div class=\"alert alert-success\">
                        <strong>";
            // line 74
            echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome to Keosu!", array(), "messages");
            echo "</strong>
\t\t\t\t\t\t";
            // line 75
            echo $this->env->getExtension('translator')->getTranslator()->trans("To start, create your first app.", array(), "messages");
            // line 76
            echo "                    </div>
\t\t\t\t";
        }
        // line 78
        echo "                <div class=\"panel\">
                    <h1>";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit App", array(), "messages");
        echo "</h1>
\t\t\t\t\t";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <fieldset>
                        <legend>";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("Main Params", array(), "messages");
        echo "</legend>
\t\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "packageName", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "

                        <div class=\"img-theme\">
\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'row');
        echo "
                        </div>
                    </fieldset>

                    <!-- Trigger Button HTML -->
                    <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#advanced\"
                           value=\"";
        // line 100
        echo $this->env->getExtension('translator')->getTranslator()->trans("Advanced...", array(), "messages");
        echo "\">

                    <div id=\"advanced\" class=\"collapse\">
                        <fieldset>
\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debugMode", array()), 'row');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-9 col-lg-push-3\">
                                    <span class=\"help-block\">";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("This param allow to debug your app with", array(), "messages");
        echo "<a
                                                href=\"https://people.apache.org/~pmuellr/weinre/docs/latest/Home.html\">Weinre</a> on the port 8080.</span>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#icons\"
                               value=\"Icons...\">

                        <div id=\"icons\" class=\"collapse\">
\t\t\t\t\t\t\t";
        // line 118
        $this->loadTemplate("KeosuCoreBundle:App:editIcones.html.twig", "KeosuCoreBundle:App:edit.html.twig", 118)->display($context);
        // line 119
        echo "                        </div>
                        <br class=\"clear\"/><br class=\"clear\"/>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#splashscreens\"
                               value=\"Splash screens...\">

                        <div id=\"splashscreens\" class=\"collapse\">
\t\t\t\t\t\t\t";
        // line 127
        $this->loadTemplate("KeosuCoreBundle:App:editSplashscreens.html.twig", "KeosuCoreBundle:App:edit.html.twig", 127)->display($context);
        // line 128
        echo "                        </div>
                        <br class=\"clear\"/>


\t\t\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packageToConfigure"]) ? $context["packageToConfigure"] : $this->getContext($context, "packageToConfigure")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 133
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigIncludePanelExtension')->includePanelAppConfig($this->getAttribute($context["p"], "name", array()), $this->getAttribute($context["p"], "type", array()), null, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configPackages", array()), $this->getAttribute($context["p"], "name", array())));
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#configXML\"
                               value=\"Preferences...\">

                        <div id=\"configXML\" class=\"collapse\">
                            <fieldset>
\t\t\t\t\t\t\t\t";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferences", array()), 'row');
        echo "
                            </fieldset>
                        </div>
                        <br class=\"clear\"/>
                    </div>

                    <br class=\"clear\"/><br class=\"clear\"/>
                    <input type=\"submit\" class=\"btn btn-success\"/>&nbsp;
                    <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
                        <button type=\"button\" class=\"btn btn-danger\">";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
                    </a>
\t\t\t\t\t";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_b4aae8a0d30d56cb03a0bc017840d832cd51fac59eda16dced3a826fa2cc60bb->leave($__internal_b4aae8a0d30d56cb03a0bc017840d832cd51fac59eda16dced3a826fa2cc60bb_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 153,  265 => 151,  253 => 142,  244 => 135,  235 => 133,  231 => 132,  225 => 128,  223 => 127,  213 => 119,  211 => 118,  197 => 107,  191 => 104,  184 => 100,  175 => 94,  169 => 91,  165 => 90,  161 => 89,  157 => 88,  153 => 87,  149 => 86,  145 => 85,  141 => 84,  135 => 81,  131 => 80,  127 => 79,  124 => 78,  120 => 76,  118 => 75,  114 => 74,  111 => 73,  109 => 72,  57 => 25,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2014  Vincent Le Borgne, Pockeit

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
{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %}

{% block title %}{% trans %}Edit App{% endtrans %}{% endblock %}

{% block body %}
    <script>
\t\t\$(document).ready(function () {
\t\t\tthemeButton(\"{{ url_base }}\", \"{{ themeDir }}\");
\t\t});

\t\tvar _URL = window.URL || window.webkitURL;
        /*
         *Test the size of an image uploaded
         *@param input : tag input controller
         *@param width : width expected
         *@param height : height expected
         *@param callback : function who upload the image if it's ok
         */
\t\tfunction check(input, width, height, callback) {
\t\t\tvar file, img;
\t\t\tif ((file = input.files[0])) {
\t\t\t\timg = new Image();
\t\t\t\timg.onload = function () {
\t\t\t\t\tif (this.width != width || this.height != height) {
\t\t\t\t\t\talert(\"Warning: Width \" + width + \" / Height \" + height + \" expected\");
\t\t\t\t\t\tcallback(0, input);
\t\t\t\t\t} else {
\t\t\t\t\t\tcallback(1, input);
\t\t\t\t\t}
\t\t\t\t};
\t\t\t}
\t\t\timg.src = _URL.createObjectURL(file);
\t\t}

        /*
         *Change the preview with the image uploaded
         *@param input : tag input controller
         *@param preview : string who contain the name of the marker \"preview\".
         */
\t\tfunction readURL(input, preview) {
\t\t\tif (input.files && input.files[0]) {
\t\t\t\tvar reader = new FileReader();

\t\t\t\treader.onload = function (e) {
\t\t\t\t\t\$('#' + preview).attr('src', e.target.result);
\t\t\t\t};

\t\t\t\treader.readAsDataURL(input.files[0]);
\t\t\t}
\t\t}
    </script>
    <div class=\"panel\">
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t{% if firstApp %}
                    <div class=\"alert alert-success\">
                        <strong>{% trans %}Welcome to Keosu!{% endtrans %}</strong>
\t\t\t\t\t\t{% trans %}To start, create your first app.{% endtrans %}
                    </div>
\t\t\t\t{% endif %}
                <div class=\"panel\">
                    <h1>{% trans %}Edit App{% endtrans %}</h1>
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t{{ form_errors(form) }}

                    <fieldset>
                        <legend>{% trans %}Main Params{% endtrans %}</legend>
\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t\t{{ form_row(form.packageName) }}
\t\t\t\t\t\t{{ form_row(form.version) }}
\t\t\t\t\t\t{{ form_row(form.description) }}
\t\t\t\t\t\t{{ form_row(form.author) }}
\t\t\t\t\t\t{{ form_row(form.website) }}
\t\t\t\t\t\t{{ form_row(form.email) }}

                        <div class=\"img-theme\">
\t\t\t\t\t\t\t{{ form_row(form.theme) }}
                        </div>
                    </fieldset>

                    <!-- Trigger Button HTML -->
                    <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#advanced\"
                           value=\"{% trans %}Advanced...{% endtrans %}\">

                    <div id=\"advanced\" class=\"collapse\">
                        <fieldset>
\t\t\t\t\t\t\t{{ form_row(form.debugMode) }}
                            <div class=\"row\">
                                <div class=\"col-lg-9 col-lg-push-3\">
                                    <span class=\"help-block\">{% trans %}This param allow to debug your app with {% endtrans %}<a
                                                href=\"https://people.apache.org/~pmuellr/weinre/docs/latest/Home.html\">Weinre</a> on the port 8080.</span>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#icons\"
                               value=\"Icons...\">

                        <div id=\"icons\" class=\"collapse\">
\t\t\t\t\t\t\t{% include 'KeosuCoreBundle:App:editIcones.html.twig' %}
                        </div>
                        <br class=\"clear\"/><br class=\"clear\"/>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#splashscreens\"
                               value=\"Splash screens...\">

                        <div id=\"splashscreens\" class=\"collapse\">
\t\t\t\t\t\t\t{% include 'KeosuCoreBundle:App:editSplashscreens.html.twig' %}
                        </div>
                        <br class=\"clear\"/>


\t\t\t\t\t\t{% for p in packageToConfigure %}
\t\t\t\t\t\t\t{{ includePanelAppConfig(p.name,p.type,null,attribute(form.configPackages,p.name) ) }}
\t\t\t\t\t\t{% endfor %}

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#configXML\"
                               value=\"Preferences...\">

                        <div id=\"configXML\" class=\"collapse\">
                            <fieldset>
\t\t\t\t\t\t\t\t{{ form_row(form.preferences) }}
                            </fieldset>
                        </div>
                        <br class=\"clear\"/>
                    </div>

                    <br class=\"clear\"/><br class=\"clear\"/>
                    <input type=\"submit\" class=\"btn btn-success\"/>&nbsp;
                    <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
                        <button type=\"button\" class=\"btn btn-danger\">{% trans %}Cancel{% endtrans %}</button>
                    </a>
\t\t\t\t\t{{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "KeosuCoreBundle:App:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/App/edit.html.twig");
    }
}
