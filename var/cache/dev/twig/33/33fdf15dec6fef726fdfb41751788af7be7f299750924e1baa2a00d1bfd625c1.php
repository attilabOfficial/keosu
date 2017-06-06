<?php

/* KeosuDataModelMenuModelBundle:Edit:edit.html.twig */
class __TwigTemplate_649affd4472b08dc45b5c6cabf88c57cf7fd708b00c3d46abc533da256ff1e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelMenuModelBundle:Edit:edit.html.twig", 18);
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
        $__internal_f9fee6f91e24011e80f140b8c40448154a6daabfed83a824b58945e585c521d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fee6f91e24011e80f140b8c40448154a6daabfed83a824b58945e585c521d5->enter($__internal_f9fee6f91e24011e80f140b8c40448154a6daabfed83a824b58945e585c521d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelMenuModelBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fee6f91e24011e80f140b8c40448154a6daabfed83a824b58945e585c521d5->leave($__internal_f9fee6f91e24011e80f140b8c40448154a6daabfed83a824b58945e585c521d5_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_24ae84a18cd136037c581b3055b67b2eb36d6caf30fb1e53811676e215cc8753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae84a18cd136037c581b3055b67b2eb36d6caf30fb1e53811676e215cc8753->enter($__internal_24ae84a18cd136037c581b3055b67b2eb36d6caf30fb1e53811676e215cc8753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "Edit Menu entry
";
        
        $__internal_24ae84a18cd136037c581b3055b67b2eb36d6caf30fb1e53811676e215cc8753->leave($__internal_24ae84a18cd136037c581b3055b67b2eb36d6caf30fb1e53811676e215cc8753_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_850239e98a82b33f013a87d7ec4e0ae7f7607a2588f5d28507d9ff8f63d79786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850239e98a82b33f013a87d7ec4e0ae7f7607a2588f5d28507d9ff8f63d79786->enter($__internal_850239e98a82b33f013a87d7ec4e0ae7f7607a2588f5d28507d9ff8f63d79786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "\t<script>
\t\t// Récupère le div qui contient la collection de tags
\t\tvar collectionHolder = \$('#partlist');

\t\t\$(document).ready(function() {
\t\t\t\$('#partlist').find('li').each(function() {
\t\t\t\taddTagFormDeleteLink(\$(this));
\t\t\t});
\t\t\t\$('#addpart').on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// ajoute un nouveau formulaire tag (voir le prochain bloc de code)
\t\t\t\taddTagForm(collectionHolder);
\t\t\t});
\t\t\t/*\$(\":checkbox\").change( function() {
\t\t\t\tif(\$(this).is(':checked')){
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').hide();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').show();
\t\t\t\t}else{
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').show();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').hide();
\t\t\t\t}
\t\t\t});
\t\t\t\$(':checkbox').each(function( index ) {
\t\t\t\tif(\$(this).is(':checked')){
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').hide();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').show();
\t\t\t\t}else{
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').show();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').hide();
\t\t\t\t}});*/
\t\t});
\t\tfunction addTagForm(collectionHolder) {
\t\t\t// Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
\t\t\tvar prototype = \$('#partlist').attr('data-prototype');

\t\t\t// Remplace '__name__' dans le HTML du prototype par un nombre basé sur
\t\t\t// la longueur de la collection courante
\t\t\tvar num = \$('#partlist').children().length;
\t\t\tvar newForm = prototype.replace(/__name__/g, num);

\t\t\t// Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
\t\t\tvar \$newFormLi = \$('<li id=\"li'+num+'\"></li>').append(newForm);
\t\t\t\$('#partlist').append(\$newFormLi);
\t\t\taddTagFormDeleteLink(\$newFormLi);

\t\t}
\t\tfunction addTagFormDeleteLink(\$tagFormLi) {
\t\t\tvar \$removeFormA = \$('<br style=\"clear:both\"/><a href=\"#\">Delete</a>');
\t\t\t\$tagFormLi.append(\$removeFormA);

\t\t\t\$removeFormA.on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// supprime l'élément li pour le formulaire de tag
\t\t\t\t\$tagFormLi.remove();
\t\t\t});
\t\t}
\t</script>

<div id=\"articleform\">
\t";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "

\t\t<ul id=\"partlist\" class=\"menuparts\" data-prototype=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parts", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menupart"]) {
            // line 94
            echo "\t\t\t\t<li>
\t\t\t\t\t";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "name", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "css", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "file", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "fileActive", array()), 'row');
            echo "
\t\t\t\t\t<div class=\"isExternal\">
\t\t\t\t\t\t";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "isExternal", array()), 'row');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"target\">
\t\t\t\t\t\t";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "target", array()), 'row');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"externalLink\">
\t\t\t\t\t\t";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "externalLink", array()), 'row');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menupart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t</ul>


\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<br/>
\t\t<br style=\"clear:both\"/>
\t\t<a id=\"addpart\" class=\"btn btn-success\" href=\"#\" class=\"add_tag_link\">Add part</a>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>

\t";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



</div>
";
        
        $__internal_850239e98a82b33f013a87d7ec4e0ae7f7607a2588f5d28507d9ff8f63d79786->leave($__internal_850239e98a82b33f013a87d7ec4e0ae7f7607a2588f5d28507d9ff8f63d79786_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelMenuModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 119,  184 => 113,  179 => 110,  169 => 106,  163 => 103,  157 => 100,  152 => 98,  148 => 97,  144 => 96,  140 => 95,  137 => 94,  133 => 93,  129 => 92,  124 => 90,  120 => 89,  55 => 26,  49 => 25,  41 => 22,  35 => 21,  11 => 18,);
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


{% block title %}
Edit Menu entry
{% endblock %}

{% block content %}
\t<script>
\t\t// Récupère le div qui contient la collection de tags
\t\tvar collectionHolder = \$('#partlist');

\t\t\$(document).ready(function() {
\t\t\t\$('#partlist').find('li').each(function() {
\t\t\t\taddTagFormDeleteLink(\$(this));
\t\t\t});
\t\t\t\$('#addpart').on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// ajoute un nouveau formulaire tag (voir le prochain bloc de code)
\t\t\t\taddTagForm(collectionHolder);
\t\t\t});
\t\t\t/*\$(\":checkbox\").change( function() {
\t\t\t\tif(\$(this).is(':checked')){
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').hide();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').show();
\t\t\t\t}else{
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').show();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').hide();
\t\t\t\t}
\t\t\t});
\t\t\t\$(':checkbox').each(function( index ) {
\t\t\t\tif(\$(this).is(':checked')){
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').hide();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').show();
\t\t\t\t}else{
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.target').show();
\t\t\t\t\t\$(this).parent().parent().parent().parent().parent().parent().find('.externalLink').hide();
\t\t\t\t}});*/
\t\t});
\t\tfunction addTagForm(collectionHolder) {
\t\t\t// Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
\t\t\tvar prototype = \$('#partlist').attr('data-prototype');

\t\t\t// Remplace '__name__' dans le HTML du prototype par un nombre basé sur
\t\t\t// la longueur de la collection courante
\t\t\tvar num = \$('#partlist').children().length;
\t\t\tvar newForm = prototype.replace(/__name__/g, num);

\t\t\t// Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
\t\t\tvar \$newFormLi = \$('<li id=\"li'+num+'\"></li>').append(newForm);
\t\t\t\$('#partlist').append(\$newFormLi);
\t\t\taddTagFormDeleteLink(\$newFormLi);

\t\t}
\t\tfunction addTagFormDeleteLink(\$tagFormLi) {
\t\t\tvar \$removeFormA = \$('<br style=\"clear:both\"/><a href=\"#\">Delete</a>');
\t\t\t\$tagFormLi.append(\$removeFormA);

\t\t\t\$removeFormA.on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// supprime l'élément li pour le formulaire de tag
\t\t\t\t\$tagFormLi.remove();
\t\t\t});
\t\t}
\t</script>

<div id=\"articleform\">
\t{{ form_start(form) }}
\t\t{{ form_row(form.title) }}

\t\t<ul id=\"partlist\" class=\"menuparts\" data-prototype=\"{{ form_widget(form.parts.vars.prototype)|e }}\">
\t\t\t{% for menupart in form.parts %}
\t\t\t\t<li>
\t\t\t\t\t{{ form_row(menupart.name) }}
\t\t\t\t\t{{ form_row(menupart.css) }}
\t\t\t\t\t{{ form_row(menupart.file) }}
\t\t\t\t\t{{ form_row(menupart.fileActive) }}
\t\t\t\t\t<div class=\"isExternal\">
\t\t\t\t\t\t{{ form_row(menupart.isExternal) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"target\">
\t\t\t\t\t\t{{ form_row(menupart.target) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"externalLink\">
\t\t\t\t\t\t{{ form_row(menupart.externalLink) }}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>


\t\t{{ form_rest(form) }}
\t\t<br/>
\t\t<br style=\"clear:both\"/>
\t\t<a id=\"addpart\" class=\"btn btn-success\" href=\"#\" class=\"add_tag_link\">Add part</a>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>

\t{{ form_end(form) }}



</div>
{% endblock %}

", "KeosuDataModelMenuModelBundle:Edit:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\MenuModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
