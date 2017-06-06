<?php

/* KeosuCoreBundle:App:editSplashscreens.html.twig */
class __TwigTemplate_f75e75ad0e011ff85647df7ee5c53a27ab030d1d3b97c0cffe0addfdab44e4a7 extends Twig_Template
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
        $__internal_e13842c751ee5b7c55eed4a8321d17e918f3f99992b6e93ef0840cdaf5a65f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13842c751ee5b7c55eed4a8321d17e918f3f99992b6e93ef0840cdaf5a65f0e->enter($__internal_e13842c751ee5b7c55eed4a8321d17e918f3f99992b6e93ef0840cdaf5a65f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:editSplashscreens.html.twig"));

        // line 18
        echo "
<style>
    .preview{
        max-height: 200px;
    }
</style>

<h4>Splashscreens Android</h4>

<div class=\"col-lg-3 configurelabel\">
    320x436
</div>
<div id=\"A320x436\">
    <img class=\"preview\" id=\"previewA320x436\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/android/splashscreenA320x436.png"), "html", null, true);
        echo "\">
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenA320x436", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    320x470
</div>
<div id=\"A320x470\">
    <img class=\"preview\" id=\"previewA320x470\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/android/splashscreenA320x470.png"), "html", null, true);
        echo "\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenA320x470", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x480
</div>
<div id=\"A640x480\">
    <img class=\"preview\" id=\"previewA640x480\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/android/splashscreenA640x480.png"), "html", null, true);
        echo "\">
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenA640x480", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    960x720
</div>
<div id=\"A960x720\">
    <img class=\"preview\" id=\"previewA960x720\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/android/splashscreenA960x720.png"), "html", null, true);
        echo "\">
    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenA960x720", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />




<h4>Splashscreens IOS</h4>

<div class=\"col-lg-3 configurelabel\">
    320x480
</div>
<div id=\"I320x480\">
    <img class=\"preview\" id=\"previewI320x480\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI320x480.png"), "html", null, true);
        echo "\">
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI320x480", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x960
</div>
<div id=\"I640x960\">
    <img class=\"preview\" id=\"previewI640x960\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI640x960.png"), "html", null, true);
        echo "\">
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI640x960", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x1136
</div>
<div id=\"I640x1136\">
    <img class=\"preview\" id=\"previewI640x1136\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI640x1136.png"), "html", null, true);
        echo "\">
    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI640x1136", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    1024x768
</div>
<div id=\"I1024x768\">
    <img class=\"preview\" id=\"previewI1024x768\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI1024x768.png"), "html", null, true);
        echo "\">
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI1024x768", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    768x1024
</div>
<div id=\"I768x1004\">
    <img class=\"preview\" id=\"previewI768x1024\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI768x1024.png"), "html", null, true);
        echo "\">
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI768x1024", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    2048x1536
</div>
<div id=\"I2048x1496\">
    <img class=\"preview\" id=\"previewI2048x1536\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI2048x1536.png"), "html", null, true);
        echo "\">
    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI2048x1536", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    1536x2048
</div>
<div id=\"I1536x2048\">
    <img class=\"preview\" id=\"previewI1536x2048\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI1536x2048.png"), "html", null, true);
        echo "\">
    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI1536x2048", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
750x1334
</div>
<div id=\"I750x1334\">
\t<img class=\"preview\" id=\"previewI750x1334\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI750x1334.png"), "html", null, true);
        echo "\">
\t";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI750x1334", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />
<div class=\"col-lg-3 configurelabel\">
\t1242x2208
</div>
<div id=\"I1242x2208\">
\t<img class=\"preview\" id=\"previewI1242x2208\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI1242x2208.png"), "html", null, true);
        echo "\">
\t";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI1242x2208", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
\t2208x1242
</div>
<div id=\"I2208x1242\">
\t<img class=\"preview\" id=\"previewI2208x1242\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("keosu/res/tmp/splashscreens/ios/splashscreenI2208x1242.png"), "html", null, true);
        echo "\">
\t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "splashscreens", array()), "splashscreenI2208x1242", array()), 'row');
        echo "
</div>
<br class=\"clear\"/>
<hr />




<script type=\"text/javascript\">

    \$(\"#A320x436\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,436,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x436\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A320x470\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,470,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x470\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A640x480\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,480,function(ok,x){
            if(ok){
                readURL(this,\"previewA640x480\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A960x720\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,960,720,function(ok,x){
            if(ok){
                readURL(this,\"previewA960x720\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I320x480\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,480,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x436\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I640x960\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,960,function(ok,x){
            if(ok){
                readURL(this,\"previewI640x960\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I640x1136\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,1136,function(ok,x){
            if(ok){
                readURL(this,\"previewI640x1136\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I1024x768\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,1024,768,function(ok,x){
            if(ok){
                readURL(this,\"previewI1024x768\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I768x1024\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,768,1024,function(ok,x){
            if(ok){
                readURL(this,\"previewI768x1024\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I2048x1536\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,2048,1536,function(ok,x){
            if(ok){
                readURL(this,\"previewI2048x1496\")
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I1536x2048\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,1536,2048,function(ok,x){
            if(ok){
                readURL(this,\"previewI1536x2008\");
            }else{
                x.value=\"\";
            }
        });
    });
\t\$(\"#I750x1334\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,740,1334,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI750x1334\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
\t\$(\"#I1242x2208\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,1242,2208,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI1242x2208\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
\t\$(\"#I2208x1242\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,2208,1242,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI2208x1242\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
</script>

";
        
        $__internal_e13842c751ee5b7c55eed4a8321d17e918f3f99992b6e93ef0840cdaf5a65f0e->leave($__internal_e13842c751ee5b7c55eed4a8321d17e918f3f99992b6e93ef0840cdaf5a65f0e_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:editSplashscreens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 166,  249 => 165,  237 => 156,  233 => 155,  222 => 147,  218 => 146,  206 => 137,  202 => 136,  190 => 127,  186 => 126,  174 => 117,  170 => 116,  158 => 107,  154 => 106,  142 => 97,  138 => 96,  126 => 87,  122 => 86,  110 => 77,  106 => 76,  89 => 62,  85 => 61,  73 => 52,  69 => 51,  57 => 42,  53 => 41,  41 => 32,  37 => 31,  22 => 18,);
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

<style>
    .preview{
        max-height: 200px;
    }
</style>

<h4>Splashscreens Android</h4>

<div class=\"col-lg-3 configurelabel\">
    320x436
</div>
<div id=\"A320x436\">
    <img class=\"preview\" id=\"previewA320x436\" src=\"{{ asset('keosu/res/tmp/splashscreens/android/splashscreenA320x436.png') }}\">
    {{ form_row(form.splashscreens.splashscreenA320x436) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    320x470
</div>
<div id=\"A320x470\">
    <img class=\"preview\" id=\"previewA320x470\" src=\"{{ asset('keosu/res/tmp/splashscreens/android/splashscreenA320x470.png') }}\">
    {{ form_row(form.splashscreens.splashscreenA320x470) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x480
</div>
<div id=\"A640x480\">
    <img class=\"preview\" id=\"previewA640x480\" src=\"{{ asset('keosu/res/tmp/splashscreens/android/splashscreenA640x480.png') }}\">
    {{ form_row(form.splashscreens.splashscreenA640x480) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    960x720
</div>
<div id=\"A960x720\">
    <img class=\"preview\" id=\"previewA960x720\" src=\"{{ asset('keosu/res/tmp/splashscreens/android/splashscreenA960x720.png') }}\">
    {{ form_row(form.splashscreens.splashscreenA960x720) }}
</div>
<br class=\"clear\"/>
<hr />




<h4>Splashscreens IOS</h4>

<div class=\"col-lg-3 configurelabel\">
    320x480
</div>
<div id=\"I320x480\">
    <img class=\"preview\" id=\"previewI320x480\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI320x480.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI320x480) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x960
</div>
<div id=\"I640x960\">
    <img class=\"preview\" id=\"previewI640x960\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI640x960.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI640x960) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    640x1136
</div>
<div id=\"I640x1136\">
    <img class=\"preview\" id=\"previewI640x1136\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI640x1136.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI640x1136) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    1024x768
</div>
<div id=\"I1024x768\">
    <img class=\"preview\" id=\"previewI1024x768\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI1024x768.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI1024x768) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    768x1024
</div>
<div id=\"I768x1004\">
    <img class=\"preview\" id=\"previewI768x1024\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI768x1024.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI768x1024) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    2048x1536
</div>
<div id=\"I2048x1496\">
    <img class=\"preview\" id=\"previewI2048x1536\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI2048x1536.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI2048x1536) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
    1536x2048
</div>
<div id=\"I1536x2048\">
    <img class=\"preview\" id=\"previewI1536x2048\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI1536x2048.png') }}\">
    {{ form_row(form.splashscreens.splashscreenI1536x2048) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
750x1334
</div>
<div id=\"I750x1334\">
\t<img class=\"preview\" id=\"previewI750x1334\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI750x1334.png') }}\">
\t{{ form_row(form.splashscreens.splashscreenI750x1334) }}
</div>
<br class=\"clear\"/>
<hr />
<div class=\"col-lg-3 configurelabel\">
\t1242x2208
</div>
<div id=\"I1242x2208\">
\t<img class=\"preview\" id=\"previewI1242x2208\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI1242x2208.png') }}\">
\t{{ form_row(form.splashscreens.splashscreenI1242x2208) }}
</div>
<br class=\"clear\"/>
<hr />

<div class=\"col-lg-3 configurelabel\">
\t2208x1242
</div>
<div id=\"I2208x1242\">
\t<img class=\"preview\" id=\"previewI2208x1242\" src=\"{{ asset('keosu/res/tmp/splashscreens/ios/splashscreenI2208x1242.png') }}\">
\t{{ form_row(form.splashscreens.splashscreenI2208x1242) }}
</div>
<br class=\"clear\"/>
<hr />




<script type=\"text/javascript\">

    \$(\"#A320x436\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,436,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x436\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A320x470\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,470,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x470\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A640x480\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,480,function(ok,x){
            if(ok){
                readURL(this,\"previewA640x480\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#A960x720\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,960,720,function(ok,x){
            if(ok){
                readURL(this,\"previewA960x720\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I320x480\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,320,480,function(ok,x){
            if(ok){
                readURL(x,\"previewA320x436\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I640x960\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,960,function(ok,x){
            if(ok){
                readURL(this,\"previewI640x960\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I640x1136\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,640,1136,function(ok,x){
            if(ok){
                readURL(this,\"previewI640x1136\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I1024x768\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,1024,768,function(ok,x){
            if(ok){
                readURL(this,\"previewI1024x768\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I768x1024\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,768,1024,function(ok,x){
            if(ok){
                readURL(this,\"previewI768x1024\");
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I2048x1536\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,2048,1536,function(ok,x){
            if(ok){
                readURL(this,\"previewI2048x1496\")
            }else{
                x.value=\"\";
            }
        });
    });

    \$(\"#I1536x2048\").on(\"change\",'input[type=\"file\"]',function() {
        check(this,1536,2048,function(ok,x){
            if(ok){
                readURL(this,\"previewI1536x2008\");
            }else{
                x.value=\"\";
            }
        });
    });
\t\$(\"#I750x1334\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,740,1334,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI750x1334\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
\t\$(\"#I1242x2208\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,1242,2208,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI1242x2208\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
\t\$(\"#I2208x1242\").on(\"change\",'input[type=\"file\"]',function() {
\t\tcheck(this,2208,1242,function(ok,x){
\t\t\tif(ok){
\t\t\t\treadURL(this,\"previewI2208x1242\");
\t\t\t}else{
\t\t\t\tx.value=\"\";
\t\t\t}
\t\t});
\t});
</script>

", "KeosuCoreBundle:App:editSplashscreens.html.twig", "C:\\wamp64\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/App/editSplashscreens.html.twig");
    }
}
