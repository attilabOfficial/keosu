<?php

/* KeosuDataModelLocationModelBundle:Edit:edit.html.twig */
class __TwigTemplate_7acffc0c1b0426e0b056dcaea471ef90f775163ba86cfa00cf0a0f0dcf5fd66f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelLocationModelBundle:Edit:edit.html.twig", 19);
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
        $__internal_48a9f69dc6aaa1e003df7149e34bffe04b6ca927da1c4b39f71029505130f4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a9f69dc6aaa1e003df7149e34bffe04b6ca927da1c4b39f71029505130f4bf->enter($__internal_48a9f69dc6aaa1e003df7149e34bffe04b6ca927da1c4b39f71029505130f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelLocationModelBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a9f69dc6aaa1e003df7149e34bffe04b6ca927da1c4b39f71029505130f4bf->leave($__internal_48a9f69dc6aaa1e003df7149e34bffe04b6ca927da1c4b39f71029505130f4bf_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dcb74273b922bffabd68c0791a8616615ba735fac6d6324122e05224cd2b054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcb74273b922bffabd68c0791a8616615ba735fac6d6324122e05224cd2b054->enter($__internal_4dcb74273b922bffabd68c0791a8616615ba735fac6d6324122e05224cd2b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "Edit point of interest
";
        
        $__internal_4dcb74273b922bffabd68c0791a8616615ba735fac6d6324122e05224cd2b054->leave($__internal_4dcb74273b922bffabd68c0791a8616615ba735fac6d6324122e05224cd2b054_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a41b44c970a89cb653395f7c5a332aa987381e7d9d90dc84d2f5bb651266234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a41b44c970a89cb653395f7c5a332aa987381e7d9d90dc84d2f5bb651266234->enter($__internal_5a41b44c970a89cb653395f7c5a332aa987381e7d9d90dc84d2f5bb651266234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
        echo "
<style>
\t.map-canvas{
        height: 500px;
        width: 500px;
        margin-left: auto;
    \tmargin-right: auto;
      }
    .alert{
    \ttext-align: center;
    \tdisplay:none;
\t}
</style>

<script type=\"text/javascript\">

///// TAGS /////
\t\$(document).ready(function() {
\t var liste = new Array();
\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : $this->getContext($context, "tagsList")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 46
            echo "\t\t\tliste.push(\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\");
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
\t\t});

</script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places\"></script>
<script>
\t\tvar place;
\t\tfunction initialize() {
\t\t\tvar mapOptions = {
\t\t\t    center: new google.maps.LatLng(";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "lat", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "lng", array()), "html", null, true);
        echo "),
\t\t\t    zoom: 13
\t\t\t};
\t\t\tvar map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
\t\t
            var input = document.getElementById('search');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            
            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
\t\t\t    map: map,
\t\t\t    anchorPoint: new google.maps.Point(0, -29)
\t\t\t});
\t\t\t
\t\t\tmarker.setPosition(mapOptions.center);
\t\t\tmarker.setVisible(true);
\t\t\t
\t\t\tgoogle.maps.event.addListener(autocomplete, 'place_changed', function() {
\t\t\t\tinfowindow.close();
\t\t\t    marker.setVisible(false);
\t\t\t    document.getElementById('warning').style.display=\"none\";
\t\t\t    place = autocomplete.getPlace();
\t\t\t    if (!place.geometry) { 
\t\t\t    \tconsole.log(\"test\");
\t\t\t    \tdocument.getElementById('warning').style.display=\"block\";
\t\t\t    \t
\t\t\t    \tconsole.log(document.getElementById('warning'));
\t\t\t      \treturn;
\t\t\t    }
\t\t\t
\t\t\t    // If the place has a geometry, then present it on a map.
\t\t\t    if (place.geometry.viewport) {
\t\t\t      map.fitBounds(place.geometry.viewport);
\t\t\t    } else {
\t\t\t      map.setCenter(place.geometry.location);
\t\t\t    }
\t\t\t    marker.setPosition(place.geometry.location);
\t\t\t    marker.setVisible(true);
\t\t\t\tconsole.log(place.geometry.location==\"undefined\");
\t\t\t    var address = '';
\t\t\t    if (place.address_components) {
\t\t\t      address = [
\t\t\t        (place.address_components[0] && place.address_components[0].short_name || ''),
\t\t\t        (place.address_components[1] && place.address_components[1].short_name || ''),
\t\t\t        (place.address_components[2] && place.address_components[2].short_name || '')
\t\t\t      ].join(' ');
\t\t\t    }
\t\t\t
\t\t\t    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
\t\t\t    infowindow.open(map, marker);
\t\t\t  });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        function setLocation(){
        \tlat=document.getElementById('form_lat');
            lng=document.getElementById('form_lng');
            lat.value = place.geometry.location.lat();
            lng.value = place.geometry.location.lng();
        }
</script>

<div id=\"locationform\">
\t";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
\t\t";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lat", array()), 'row');
        echo "
\t\t";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lng", array()), 'row');
        echo "
\t\t";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enableComments", array()), 'row');
        echo "`

\t\t<br class=\"clear\"/>
\t\t<h4>Search a location</h4>
\t\t<div class=\"row\">
\t\t\t<label class=\"control-label col-sm-3\">Search</label>
\t\t\t<div class=\"col-sm-7\">
\t\t\t\t<input type=\"text\" id=\"search\" placeholder=\"Enter a location\" class=\"form-control\">
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn btn-primary col-sm-2\" onClick=\"setLocation()\">Add this location</button>
\t\t</div>
\t\t<div id=\"warning\" class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Warning!</strong> Google doesn't found latitude or longitude of this point.<br />
\t\t\tEnter a nearby adress or search on internet.
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<div id=\"map-canvas\" class=\"map-canvas\"></div>
\t\t
\t\t<!-- TAG -->
\t\t<a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
\t    <div class=\"tags\" data-prototype=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 181
            echo "\t        \t<div class=\"image-collection-entry\">
\t\t        \t<a class=\"badge remove-button\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"clear\"/>
\t\t\t      ";
            // line 186
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["tag"], 'widget');
            echo "
\t\t    \t</div>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "\t    </div>
    
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span>
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t";
        // line 195
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_5a41b44c970a89cb653395f7c5a332aa987381e7d9d90dc84d2f5bb651266234->leave($__internal_5a41b44c970a89cb653395f7c5a332aa987381e7d9d90dc84d2f5bb651266234_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelLocationModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 195,  273 => 189,  264 => 186,  257 => 181,  253 => 180,  249 => 179,  226 => 159,  222 => 158,  218 => 157,  214 => 156,  210 => 155,  206 => 154,  202 => 153,  133 => 89,  90 => 48,  81 => 46,  77 => 45,  55 => 26,  49 => 25,  41 => 22,  35 => 21,  11 => 19,);
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
Edit point of interest
{% endblock %}

{% block content %}
{{ tinymce_init() }}
<style>
\t.map-canvas{
        height: 500px;
        width: 500px;
        margin-left: auto;
    \tmargin-right: auto;
      }
    .alert{
    \ttext-align: center;
    \tdisplay:none;
\t}
</style>

<script type=\"text/javascript\">

///// TAGS /////
\t\$(document).ready(function() {
\t var liste = new Array();
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
\t\t});

</script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places\"></script>
<script>
\t\tvar place;
\t\tfunction initialize() {
\t\t\tvar mapOptions = {
\t\t\t    center: new google.maps.LatLng({{poi.lat}}, {{poi.lng}}),
\t\t\t    zoom: 13
\t\t\t};
\t\t\tvar map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
\t\t
            var input = document.getElementById('search');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            
            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
\t\t\t    map: map,
\t\t\t    anchorPoint: new google.maps.Point(0, -29)
\t\t\t});
\t\t\t
\t\t\tmarker.setPosition(mapOptions.center);
\t\t\tmarker.setVisible(true);
\t\t\t
\t\t\tgoogle.maps.event.addListener(autocomplete, 'place_changed', function() {
\t\t\t\tinfowindow.close();
\t\t\t    marker.setVisible(false);
\t\t\t    document.getElementById('warning').style.display=\"none\";
\t\t\t    place = autocomplete.getPlace();
\t\t\t    if (!place.geometry) { 
\t\t\t    \tconsole.log(\"test\");
\t\t\t    \tdocument.getElementById('warning').style.display=\"block\";
\t\t\t    \t
\t\t\t    \tconsole.log(document.getElementById('warning'));
\t\t\t      \treturn;
\t\t\t    }
\t\t\t
\t\t\t    // If the place has a geometry, then present it on a map.
\t\t\t    if (place.geometry.viewport) {
\t\t\t      map.fitBounds(place.geometry.viewport);
\t\t\t    } else {
\t\t\t      map.setCenter(place.geometry.location);
\t\t\t    }
\t\t\t    marker.setPosition(place.geometry.location);
\t\t\t    marker.setVisible(true);
\t\t\t\tconsole.log(place.geometry.location==\"undefined\");
\t\t\t    var address = '';
\t\t\t    if (place.address_components) {
\t\t\t      address = [
\t\t\t        (place.address_components[0] && place.address_components[0].short_name || ''),
\t\t\t        (place.address_components[1] && place.address_components[1].short_name || ''),
\t\t\t        (place.address_components[2] && place.address_components[2].short_name || '')
\t\t\t      ].join(' ');
\t\t\t    }
\t\t\t
\t\t\t    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
\t\t\t    infowindow.open(map, marker);
\t\t\t  });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        function setLocation(){
        \tlat=document.getElementById('form_lat');
            lng=document.getElementById('form_lng');
            lat.value = place.geometry.location.lat();
            lng.value = place.geometry.location.lng();
        }
</script>

<div id=\"locationform\">
\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
\t\t{{ form_row(form.name) }}
\t\t{{ form_row(form.description) }}
\t\t{{ form_row(form.lat) }}
\t\t{{ form_row(form.lng) }}
\t\t{{ form_row(form.enableComments) }}`

\t\t<br class=\"clear\"/>
\t\t<h4>Search a location</h4>
\t\t<div class=\"row\">
\t\t\t<label class=\"control-label col-sm-3\">Search</label>
\t\t\t<div class=\"col-sm-7\">
\t\t\t\t<input type=\"text\" id=\"search\" placeholder=\"Enter a location\" class=\"form-control\">
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn btn-primary col-sm-2\" onClick=\"setLocation()\">Add this location</button>
\t\t</div>
\t\t<div id=\"warning\" class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Warning!</strong> Google doesn't found latitude or longitude of this point.<br />
\t\t\tEnter a nearby adress or search on internet.
\t\t</div>
\t\t<br class=\"clear\"/>
\t\t<div id=\"map-canvas\" class=\"map-canvas\"></div>
\t\t
\t\t<!-- TAG -->
\t\t<a href=\"#\" id=\"add_tag\" class=\"btn btn-info\">Add a tag</a>
\t    <div class=\"tags\" data-prototype=\"{{ form_widget(form.tags.vars.prototype)|e }}\">
\t        {% for tag in form.tags %}
\t        \t<div class=\"image-collection-entry\">
\t\t        \t<a class=\"badge remove-button\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"clear\"/>
\t\t\t      {{ form_widget(tag) }}
\t\t    \t</div>
\t        {% endfor %}
\t    </div>
    
\t\t<br class=\"clear\"/>
\t\t<br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><span>&nbsp;</span>
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t{{ form_end(form) }}
</div>
{% endblock %}
", "KeosuDataModelLocationModelBundle:Edit:edit.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\DataModel\\LocationModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
