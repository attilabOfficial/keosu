<?php

/* KeosuDataModelArticleModelBundle:Edit:edit.html.twig */
class __TwigTemplate_027325abc187ea5c0b6dde9f64e66e74c897d079635bdbe1b1128ab44b07ba92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelArticleModelBundle:Edit:edit.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d652e92c4a8233b1522a791e16c8b1a7271aa1770b2d53d00554d703f3798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d652e92c4a8233b1522a791e16c8b1a7271aa1770b2d53d00554d703f3798a->enter($__internal_65d652e92c4a8233b1522a791e16c8b1a7271aa1770b2d53d00554d703f3798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelArticleModelBundle:Edit:edit.html.twig"));

        // line 19
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KeosuCoreBundle:Form:fields-article.html.twig"));
        // line 18
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d652e92c4a8233b1522a791e16c8b1a7271aa1770b2d53d00554d703f3798a->leave($__internal_65d652e92c4a8233b1522a791e16c8b1a7271aa1770b2d53d00554d703f3798a_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aee8ace5a3a8e8aedf99fb7ae56b1b62856beea3077bae4b3ecf95a6f8564b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aee8ace5a3a8e8aedf99fb7ae56b1b62856beea3077bae4b3ecf95a6f8564b9->enter($__internal_5aee8ace5a3a8e8aedf99fb7ae56b1b62856beea3077bae4b3ecf95a6f8564b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "    Edit article
";
        
        $__internal_5aee8ace5a3a8e8aedf99fb7ae56b1b62856beea3077bae4b3ecf95a6f8564b9->leave($__internal_5aee8ace5a3a8e8aedf99fb7ae56b1b62856beea3077bae4b3ecf95a6f8564b9_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ac937d05b52085e2a3ffb63b2a3777b61f8d3c57318bb552fc39b986e6c668e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac937d05b52085e2a3ffb63b2a3777b61f8d3c57318bb552fc39b986e6c668e->enter($__internal_8ac937d05b52085e2a3ffb63b2a3777b61f8d3c57318bb552fc39b986e6c668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    <script src=\"//tinymce.cachefly.net/4.1/tinymce.min.js\"></script>
    <script type=\"text/javascript\">

        tinymce.init({
            selector: \"textarea\",
            plugins: [
                \"advlist autolink lists link image charmap print preview anchor\",
                \"searchreplace visualblocks code fullscreen\",
            ],
            toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\"
        });

        \$(document).ready(function () {
            \$('.date').datepicker({dateFormat: 'dd-mm-y'});

            var \$container = \$('.article-images');
            // Add a new attachment
            function add_image() {
                index = \$container.children().length;
                prototype = '<div class=\"image-collection-entry\">';
                prototype += '<a class=\"badge remove-button\">';
                prototype += '<span class=\"glyphicon glyphicon-remove\"></span></a>';
                prototype += '<span class=\"clear\">&nbsp;</span>';
                widget = \$container.attr('data-prototype').replace(/__name__/g, index);
                prototype += widget;
                prototype += '<center><button type=\"button\" class=\"btn btn-info uploader\">Upload File</button></center>';
                prototype += '<center><img src=\"#\"style=\"display:none\" class=\"img-thumbnail img-preview uploader\"/></center>';
                prototype += '</div>'
                \$container.append(\$(prototype));
            }

            function openInput(\$el) {
                \$el.parent().parent().find('input[type=\"file\"]')[0].click();
            }

            \$(document).on(\"click\", '.uploader', function () {
                openInput(\$(this));
                return false;
            });
            \$(document).on(\"click\", '.remove-button', function () {
                \$(this).parent().remove();
                \$(this).remove();
                return false;
            });
            \$(document).on(\"change\", 'input[type=\"file\"]', function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    el = \$(this);
                    reader.onload = function (e) {
                        el.parent().parent().parent().find('img').attr('src', e.target.result).show();
                        el.parent().parent().parent().find('button').hide();
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
            \$('#add_image').click(function () {
                add_image();
                return false;
            });

            ///// TAGS /////

            var liste = new Array();
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : $this->getContext($context, "tagsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 91
            echo "            liste.push(\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            var \$tagContainer = \$('.tags');

            function add_tag() {
                index = \$tagContainer.children().length;
                prototype = '<div class=\"image-collection-entry\">';
                prototype += '<a class=\"badge remove-button\">';
                prototype += '<span class=\"glyphicon glyphicon-remove\"></span></a>';
                prototype += '<span class=\"clear\">&nbsp;</span>';
                widget = \$tagContainer.attr('data-prototype').replace(/__name__/g, index);
                prototype += widget;
                \$tagContainer.append(\$(prototype));

                //Autocompletion
                \$('.tags input').each(function () {
                    \$(this).autocomplete({
                        source: liste
                    });
                });
            }

            \$('#add_tag').click(function () {
                add_tag();
                return false;
            });
            \$('.tags input').each(function () {
                \$(this).autocomplete({
                    source: liste
                });
            });
        });


    </script>
    <div id=\"articleform\">
        ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "
        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "
        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enableComments", array()), 'row');
        echo "
        <p style=\"color: #0073aa;\">If you want to share your content you can fill the next field with the associate url.</p>
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shareUrl", array()), 'row');
        echo "
        <br class=\"clear\"/>

        <a href=\"#\" id=\"add_image\" class=\"btn btn-info\">Add a new picture</a>

        <div class=\"article-images\" data-prototype=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachments", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 142
            echo "                <div class=\"image-collection-entry\">
                    <a class=\"badge remove-button\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                    <span class=\"clear\"/>
                    ";
            // line 147
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["attachment"], 'row');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        </div>
        <br class=\"clear\"/>
        <br class=\"clear\"/>

        <a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
        <div class=\"tags\" data-prototype=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 157
            echo "                <div class=\"image-collection-entry\">
                    <a class=\"badge remove-button\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                    <span class=\"clear\"/>
                    ";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["tag"], 'row');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "        </div>

        <br class=\"clear\"/>
        <br class=\"clear\"/>


        <input type=\"submit\" class=\"btn btn-success\"/><span>&nbsp;</span>
        <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
            <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
        </a>
        ";
        // line 175
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8ac937d05b52085e2a3ffb63b2a3777b61f8d3c57318bb552fc39b986e6c668e->leave($__internal_8ac937d05b52085e2a3ffb63b2a3777b61f8d3c57318bb552fc39b986e6c668e_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelArticleModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 175,  265 => 165,  256 => 162,  249 => 157,  245 => 156,  241 => 155,  234 => 150,  225 => 147,  218 => 142,  214 => 141,  210 => 140,  202 => 135,  197 => 133,  193 => 132,  189 => 131,  185 => 130,  181 => 129,  177 => 128,  173 => 127,  137 => 93,  128 => 91,  124 => 90,  58 => 26,  52 => 25,  44 => 22,  38 => 21,  31 => 18,  29 => 19,  11 => 18,);
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
{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}
{% form_theme form 'KeosuCoreBundle:Form:fields-article.html.twig' %}

{% block title %}
    Edit article
{% endblock %}

{% block content %}

    <script src=\"//tinymce.cachefly.net/4.1/tinymce.min.js\"></script>
    <script type=\"text/javascript\">

        tinymce.init({
            selector: \"textarea\",
            plugins: [
                \"advlist autolink lists link image charmap print preview anchor\",
                \"searchreplace visualblocks code fullscreen\",
            ],
            toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\"
        });

        \$(document).ready(function () {
            \$('.date').datepicker({dateFormat: 'dd-mm-y'});

            var \$container = \$('.article-images');
            // Add a new attachment
            function add_image() {
                index = \$container.children().length;
                prototype = '<div class=\"image-collection-entry\">';
                prototype += '<a class=\"badge remove-button\">';
                prototype += '<span class=\"glyphicon glyphicon-remove\"></span></a>';
                prototype += '<span class=\"clear\">&nbsp;</span>';
                widget = \$container.attr('data-prototype').replace(/__name__/g, index);
                prototype += widget;
                prototype += '<center><button type=\"button\" class=\"btn btn-info uploader\">Upload File</button></center>';
                prototype += '<center><img src=\"#\"style=\"display:none\" class=\"img-thumbnail img-preview uploader\"/></center>';
                prototype += '</div>'
                \$container.append(\$(prototype));
            }

            function openInput(\$el) {
                \$el.parent().parent().find('input[type=\"file\"]')[0].click();
            }

            \$(document).on(\"click\", '.uploader', function () {
                openInput(\$(this));
                return false;
            });
            \$(document).on(\"click\", '.remove-button', function () {
                \$(this).parent().remove();
                \$(this).remove();
                return false;
            });
            \$(document).on(\"change\", 'input[type=\"file\"]', function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    el = \$(this);
                    reader.onload = function (e) {
                        el.parent().parent().parent().find('img').attr('src', e.target.result).show();
                        el.parent().parent().parent().find('button').hide();
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
            \$('#add_image').click(function () {
                add_image();
                return false;
            });

            ///// TAGS /////

            var liste = new Array();
            {% for tag in tagsList %}
            liste.push(\"{{ tag }}\");
            {% endfor %}
            var \$tagContainer = \$('.tags');

            function add_tag() {
                index = \$tagContainer.children().length;
                prototype = '<div class=\"image-collection-entry\">';
                prototype += '<a class=\"badge remove-button\">';
                prototype += '<span class=\"glyphicon glyphicon-remove\"></span></a>';
                prototype += '<span class=\"clear\">&nbsp;</span>';
                widget = \$tagContainer.attr('data-prototype').replace(/__name__/g, index);
                prototype += widget;
                \$tagContainer.append(\$(prototype));

                //Autocompletion
                \$('.tags input').each(function () {
                    \$(this).autocomplete({
                        source: liste
                    });
                });
            }

            \$('#add_tag').click(function () {
                add_tag();
                return false;
            });
            \$('.tags input').each(function () {
                \$(this).autocomplete({
                    source: liste
                });
            });
        });


    </script>
    <div id=\"articleform\">
        {{ form_start(form) }}
        {{ form_errors(form) }}
        {{ form_row(form.title) }}
        {{ form_row(form.body) }}
        {{ form_row(form.author) }}
        {{ form_row(form.date) }}
        {{ form_row(form.enableComments) }}
        <p style=\"color: #0073aa;\">If you want to share your content you can fill the next field with the associate url.</p>
        {{ form_row(form.shareUrl) }}
        <br class=\"clear\"/>

        <a href=\"#\" id=\"add_image\" class=\"btn btn-info\">Add a new picture</a>

        <div class=\"article-images\" data-prototype=\"{{ form_widget(form.attachments.vars.prototype)|e }}\">
            {% for attachment in form.attachments %}
                <div class=\"image-collection-entry\">
                    <a class=\"badge remove-button\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                    <span class=\"clear\"/>
                    {{ form_row(attachment) }}
                </div>
            {% endfor %}
        </div>
        <br class=\"clear\"/>
        <br class=\"clear\"/>

        <a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
        <div class=\"tags\" data-prototype=\"{{ form_widget(form.tags.vars.prototype)|e }}\">
            {% for tag in form.tags %}
                <div class=\"image-collection-entry\">
                    <a class=\"badge remove-button\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                    </a>
                    <span class=\"clear\"/>
                    {{ form_row(tag) }}
                </div>
            {% endfor %}
        </div>

        <br class=\"clear\"/>
        <br class=\"clear\"/>


        <input type=\"submit\" class=\"btn btn-success\"/><span>&nbsp;</span>
        <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
            <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
        </a>
        {{ form_end(form) }}
    </div>
{% endblock %}

", "KeosuDataModelArticleModelBundle:Edit:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\ArticleModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
