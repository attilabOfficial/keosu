<?php

/* KeosuCoreBundle:Reader:manage.html.twig */
class __TwigTemplate_97168c1797dfa9aae00f32ab92bd0ffd2a6498a4e8fa84fb6afc587421402878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuCoreBundle:Reader:manage.html.twig", 18);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add a new reader", array(), "messages");
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-4 table-actions-column\">
\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t<strong>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader Type", array(), "messages");
        echo "</strong>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<div>
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "readertype", array()), 'widget');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t</div>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add a reader", array(), "messages");
        echo "\" ></input>
\t\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\t<fieldset>
\t\t\t\t<legend>Readers</legend>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 56
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_sync"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-refresh\" title=\"Sync\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_edit"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_ReaderManager_edit_delete", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\" title=\"Delete\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "\t\t\t\t\t\t<p>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("No content", array(), "messages");
            echo "</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reader name", array(), "messages");
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Reader:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 74,  136 => 71,  127 => 69,  118 => 65,  112 => 62,  106 => 59,  101 => 57,  98 => 56,  93 => 55,  83 => 48,  70 => 38,  65 => 36,  57 => 31,  53 => 30,  46 => 26,  42 => 25,  38 => 23,  35 => 22,  29 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KeosuCoreBundle:Reader:manage.html.twig", "C:\\wamp\\www\\keosu\\src\\Keosu\\CoreBundle/Resources/views/Reader/manage.html.twig");
    }
}
