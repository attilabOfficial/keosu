<?php

/* KeosuDataModelPictureModelBundle:Edit:edit.html.twig */
class __TwigTemplate_d9641becdb7d01b5db1cba726830b6deefb355cf8381a20ea62350b18c5b96f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelPictureModelBundle:Edit:edit.html.twig", 19);
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
        $__internal_2cf4ef676b5c6de10d003681743d8374ab6e8edc5f7b2c825d8836672c2bd221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf4ef676b5c6de10d003681743d8374ab6e8edc5f7b2c825d8836672c2bd221->enter($__internal_2cf4ef676b5c6de10d003681743d8374ab6e8edc5f7b2c825d8836672c2bd221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelPictureModelBundle:Edit:edit.html.twig"));

        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KeosuCoreBundle:Form:fields-image.html.twig"));
        // line 19
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf4ef676b5c6de10d003681743d8374ab6e8edc5f7b2c825d8836672c2bd221->leave($__internal_2cf4ef676b5c6de10d003681743d8374ab6e8edc5f7b2c825d8836672c2bd221_prof);

    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c7f7ca989cbe29c5ef27d0a339f93357f125fdb62bc80396a4ac301908c353b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7f7ca989cbe29c5ef27d0a339f93357f125fdb62bc80396a4ac301908c353b->enter($__internal_0c7f7ca989cbe29c5ef27d0a339f93357f125fdb62bc80396a4ac301908c353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 23
        echo "Edit picture
";
        
        $__internal_0c7f7ca989cbe29c5ef27d0a339f93357f125fdb62bc80396a4ac301908c353b->leave($__internal_0c7f7ca989cbe29c5ef27d0a339f93357f125fdb62bc80396a4ac301908c353b_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2ecbab1692bce6b56e2b1565f23c449b878ee467f91b6be3ee0f3421910a52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ecbab1692bce6b56e2b1565f23c449b878ee467f91b6be3ee0f3421910a52b->enter($__internal_b2ecbab1692bce6b56e2b1565f23c449b878ee467f91b6be3ee0f3421910a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t
\t\tfunction openInput(\$el){
\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t}
\t\t 
\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t \topenInput(\$(this));
\t\t\t    return false;
\t\t });

\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\tif (this.files &&  this.files[0]) {
\t            var reader = new FileReader();
\t            el= \$(this);
\t            reader.onload = function (e) {
\t            \t\$('#img-preview').attr('src', e.target.result).show();
\t            }
\t            reader.readAsDataURL(this.files[0]);
\t        }
\t\t});
\t\t
\t\t ///// TAGS /////
\t\t
\t\tvar liste = new Array();
\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : $this->getContext($context, "tagsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 54
            echo "\t\t\tliste.push(\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\");
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\tvar \$tagContainer = \$('.tags');
\t\t
\t\tfunction add_tag(){
\t\t\tindex = \$tagContainer.children().length;
\t\t\tprototype='<div class=\"image-collection-entry\">';
\t\t\tprototype+='<a class=\"badge remove-button\">';
\t\t\tprototype+='<span class=\"glyphicon glyphicon-remove\"></span></a>';
\t\t\tprototype+='<span class=\"clear\">&nbsp;</span>';
\t\t\twidget=\$tagContainer.attr('data-prototype').replace(/__name__/g, index);
\t\t\tprototype+=widget;
\t\t\t\$tagContainer.append(\$(prototype));
\t\t\t
\t\t\t//Autocompletion
\t\t\t\$('.tags input').each(function(){
\t\t\t\t\$(this).autocomplete({
\t\t\t    \tsource : liste
\t\t\t\t});
\t\t\t});
\t\t}
\t\t\$('#add_tag').click(function(){
\t\t\tadd_tag();
\t\t\treturn false;
\t\t});
\t\t\$('.tags input').each(function(){
\t\t\t\t\$(this).autocomplete({
\t\t\t    \tsource : liste
\t\t\t\t});
\t\t});
\t\t\$(document).on(\"click\",'.remove-button',function() {
\t\t      \$(this).parent().remove(); 
\t\t      \$(this).remove();
\t\t      return false;
\t\t });
\t});

</script>
<div class=\"picture-edit\">
\t";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enableComments", array()), 'row');
        echo "
\t     
\t\t<div class=\"picture-upload image-collection-entry col-lg-12\">
\t\t\t";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
\t\t\t<center>
\t\t\t\t<button  type=\"button\" class=\"btn btn-info uploader\">Upload new File</button>
\t\t\t</center>
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>

 \t\t<a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
\t    <div class=\"tags\" data-prototype=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">

       ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 112
            echo "\t        \t<div class=\"image-collection-entry\">
\t\t        \t<a class=\"badge remove-button\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"clear\"/>
\t\t            ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["tag"], 'widget');
            echo "
\t\t    \t</div>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t    </div>
\t  <br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t</a>
\t";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_b2ecbab1692bce6b56e2b1565f23c449b878ee467f91b6be3ee0f3421910a52b->leave($__internal_b2ecbab1692bce6b56e2b1565f23c449b878ee467f91b6be3ee0f3421910a52b_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelPictureModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 127,  197 => 120,  188 => 117,  181 => 112,  177 => 111,  172 => 109,  160 => 100,  154 => 97,  150 => 96,  146 => 95,  142 => 94,  138 => 93,  99 => 56,  90 => 54,  86 => 53,  58 => 27,  52 => 26,  44 => 23,  38 => 22,  31 => 19,  29 => 20,  11 => 19,);
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

{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}
{% form_theme form 'KeosuCoreBundle:Form:fields-image.html.twig' %}

{% block title %}
Edit picture
{% endblock %}

{% block content %}
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t
\t\tfunction openInput(\$el){
\t\t\t\$el.parent().parent().find('input[type=\"file\"]')[ 0 ].click();
\t\t}
\t\t 
\t\t\$(document).on(\"click\",'.uploader',function() {
\t\t\t \topenInput(\$(this));
\t\t\t    return false;
\t\t });

\t\t\$(document).on(\"change\",'input[type=\"file\"]',function() {
\t\t\tif (this.files &&  this.files[0]) {
\t            var reader = new FileReader();
\t            el= \$(this);
\t            reader.onload = function (e) {
\t            \t\$('#img-preview').attr('src', e.target.result).show();
\t            }
\t            reader.readAsDataURL(this.files[0]);
\t        }
\t\t});
\t\t
\t\t ///// TAGS /////
\t\t
\t\tvar liste = new Array();
\t\t{% for tag in tagsList %}
\t\t\tliste.push(\"{{tag}}\");
\t\t{% endfor %}
\t\tvar \$tagContainer = \$('.tags');
\t\t
\t\tfunction add_tag(){
\t\t\tindex = \$tagContainer.children().length;
\t\t\tprototype='<div class=\"image-collection-entry\">';
\t\t\tprototype+='<a class=\"badge remove-button\">';
\t\t\tprototype+='<span class=\"glyphicon glyphicon-remove\"></span></a>';
\t\t\tprototype+='<span class=\"clear\">&nbsp;</span>';
\t\t\twidget=\$tagContainer.attr('data-prototype').replace(/__name__/g, index);
\t\t\tprototype+=widget;
\t\t\t\$tagContainer.append(\$(prototype));
\t\t\t
\t\t\t//Autocompletion
\t\t\t\$('.tags input').each(function(){
\t\t\t\t\$(this).autocomplete({
\t\t\t    \tsource : liste
\t\t\t\t});
\t\t\t});
\t\t}
\t\t\$('#add_tag').click(function(){
\t\t\tadd_tag();
\t\t\treturn false;
\t\t});
\t\t\$('.tags input').each(function(){
\t\t\t\t\$(this).autocomplete({
\t\t\t    \tsource : liste
\t\t\t\t});
\t\t});
\t\t\$(document).on(\"click\",'.remove-button',function() {
\t\t      \$(this).parent().remove(); 
\t\t      \$(this).remove();
\t\t      return false;
\t\t });
\t});

</script>
<div class=\"picture-edit\">
\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
\t\t{{ form_row(form.name) }}
\t\t{{ form_row(form.description) }}
\t\t{{ form_row(form.enableComments) }}
\t     
\t\t<div class=\"picture-upload image-collection-entry col-lg-12\">
\t\t\t{{ form_row(form.file) }}
\t\t\t<center>
\t\t\t\t<button  type=\"button\" class=\"btn btn-info uploader\">Upload new File</button>
\t\t\t</center>
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>

 \t\t<a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
\t    <div class=\"tags\" data-prototype=\"{{ form_widget(form.tags.vars.prototype)|e }}\">

       {% for tag in form.tags %}
\t        \t<div class=\"image-collection-entry\">
\t\t        \t<a class=\"badge remove-button\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"clear\"/>
\t\t            {{ form_widget(tag) }}
\t\t    \t</div>
\t        {% endfor %}
\t    </div>
\t  <br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t</a>
\t{{ form_end(form) }}
</div>
{% endblock %}
", "KeosuDataModelPictureModelBundle:Edit:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\PictureModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
