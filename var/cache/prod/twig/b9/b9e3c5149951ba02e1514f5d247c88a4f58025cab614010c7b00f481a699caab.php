<?php

/* KeosuDataModelArticleModelBundle:Edit:edit.html.twig */
class __TwigTemplate_7b7bbe1f1e68e7c25d3f7ab868a3d2d168387476ddb5f2e231b363f46ee613b9 extends Twig_Template
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
        // line 19
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "KeosuCoreBundle:Form:fields-article.html.twig"));
        // line 18
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        // line 22
        echo "    Edit article
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : null));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row');
        echo "
        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'row');
        echo "
        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'row');
        echo "
        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'row');
        echo "
        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enableComments", array()), 'row');
        echo "
        <p style=\"color: #0073aa;\">If you want to share your content you can fill the next field with the associate url.</p>
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shareUrl", array()), 'row');
        echo "
        <br class=\"clear\"/>

        <a href=\"#\" id=\"add_image\" class=\"btn btn-info\">Add a new picture</a>

        <div class=\"article-images\" data-prototype=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
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
        return array (  262 => 175,  250 => 165,  241 => 162,  234 => 157,  230 => 156,  226 => 155,  219 => 150,  210 => 147,  203 => 142,  199 => 141,  195 => 140,  187 => 135,  182 => 133,  178 => 132,  174 => 131,  170 => 130,  166 => 129,  162 => 128,  158 => 127,  122 => 93,  113 => 91,  109 => 90,  43 => 26,  40 => 25,  35 => 22,  32 => 21,  28 => 18,  26 => 19,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuDataModelArticleModelBundle:Edit:edit.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\DataModel\\ArticleModelBundle/Resources/views/Edit/edit.html.twig");
    }
}
