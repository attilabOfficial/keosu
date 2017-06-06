<?php

/* ::skeleton.html.twig */
class __TwigTemplate_41fb12f0e4ac6f27546abf6c2191e551190df87ec617a14c42c7e40a3d1c4216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::root.html.twig", "::skeleton.html.twig", 18);
        $this->blocks = array(
            'skeleton' => array($this, 'block_skeleton'),
            'maincontent' => array($this, 'block_maincontent'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'contentmenu' => array($this, 'block_contentmenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::root.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2858f34f9952565c756eee1b503430ed2bc8de7dd234928ba5f3a2d8f4450ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2858f34f9952565c756eee1b503430ed2bc8de7dd234928ba5f3a2d8f4450ae->enter($__internal_d2858f34f9952565c756eee1b503430ed2bc8de7dd234928ba5f3a2d8f4450ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::skeleton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2858f34f9952565c756eee1b503430ed2bc8de7dd234928ba5f3a2d8f4450ae->leave($__internal_d2858f34f9952565c756eee1b503430ed2bc8de7dd234928ba5f3a2d8f4450ae_prof);

    }

    // line 19
    public function block_skeleton($context, array $blocks = array())
    {
        $__internal_aea9d567b2565e058d670d1e416bd4a5a5ffa39e873af1e207e64cdbbc7a87dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea9d567b2565e058d670d1e416bd4a5a5ffa39e873af1e207e64cdbbc7a87dc->enter($__internal_aea9d567b2565e058d670d1e416bd4a5a5ffa39e873af1e207e64cdbbc7a87dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "skeleton"));

        // line 20
        echo "    <section id=\"main-content\">
        <div class=\"container-fluid\">
            <div id=\"bouton-menu-responsive\" class=\"menu-leftcol\">
                <img id=\"icon-arrow-menu\" class=\"icon-menu-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/arrow-right.png\"/>
                <img id=\"icon-arrow-menu-left\" class=\"icon-menu-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/arrow-left.png\"/>
            </div>


            ";
        // line 28
        $this->displayBlock('maincontent', $context, $blocks);
        // line 195
        echo "            </div>
        </div>

    </section>

    <div id=\"dialog\" title=\"";
        // line 200
        echo $this->env->getExtension('translator')->getTranslator()->trans("Confirmation Required", array(), "messages");
        echo "\">
        ";
        // line 201
        echo $this->env->getExtension('translator')->getTranslator()->trans("Are you sure about this? All your modification will be lost", array(), "messages");
        // line 202
        echo "    </div>
    <script>
        \$(document).ready(function () {
            \$(\"#dialog\").dialog({
                autoOpen: false,
                modal: true
            });
        });

        \$(\".confirmModal\").click(function (e) {
            e.preventDefault();
            var targetUrl = \$(this).attr(\"href\");

            \$(\"#dialog\").dialog({
                buttons: {
                    \"";
        // line 217
        echo $this->env->getExtension('translator')->getTranslator()->trans("Confirm", array(), "messages");
        echo "\": function () {
                        window.location.href = targetUrl;
                    },
                    \"";
        // line 220
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "\": function () {
                        \$(this).dialog(\"close\");
                    }
                }
            });

            \$(\"#dialog\").dialog(\"open\");
        });
    </script>

";
        
        $__internal_aea9d567b2565e058d670d1e416bd4a5a5ffa39e873af1e207e64cdbbc7a87dc->leave($__internal_aea9d567b2565e058d670d1e416bd4a5a5ffa39e873af1e207e64cdbbc7a87dc_prof);

    }

    // line 28
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_a0394b9b35cc5b2e61d22b97c6b6e0bb5c4f14dc04c6eed2dcd9726394faf800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0394b9b35cc5b2e61d22b97c6b6e0bb5c4f14dc04c6eed2dcd9726394faf800->enter($__internal_a0394b9b35cc5b2e61d22b97c6b6e0bb5c4f14dc04c6eed2dcd9726394faf800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 29
        echo "            <div class=\"row\" style=\"background-color:#f1f1f1 !important;\">

                <div id=\"left-menu\" class=\"col-md-2 leftcol closed\">
                    <div class=\"leftcol\">
                        <section id=\"leftcol\" class=\"leftcol\">
                            <div class=\"sidebar leftcol\">

                                <div class=\"sidemenu leftcol\">
                                    ";
        // line 37
        $this->displayBlock('leftmenu', $context, $blocks);
        // line 171
        echo "                            </div>
                        </section>
                    </div>
                </div>

                <div class=\"col-md-10\">
                    <div class=\"container\">
                        <div class=\"row-fluid\">
                            <div class=\"span6 pull-right logininfo\" style=\"text-align:right\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                                Hello ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " |
                                <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                    Logout <span class=\"glyphicon glyphicon-log-out\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <section id=\"body\">";
        // line 189
        $this->displayBlock('body', $context, $blocks);
        echo "</section>
                    </div>
                </div>


                ";
        
        $__internal_a0394b9b35cc5b2e61d22b97c6b6e0bb5c4f14dc04c6eed2dcd9726394faf800->leave($__internal_a0394b9b35cc5b2e61d22b97c6b6e0bb5c4f14dc04c6eed2dcd9726394faf800_prof);

    }

    // line 37
    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_ee043ff14e89627cb5266589575cc0dad00fe8588172e211895acc199dd49902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee043ff14e89627cb5266589575cc0dad00fe8588172e211895acc199dd49902->enter($__internal_ee043ff14e89627cb5266589575cc0dad00fe8588172e211895acc199dd49902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 38
        echo "                                    <div class=\"logowrapper\">
                                        <img class=\"logotop\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/logo_black.png\"/>
                                    </div>
                                    <br/>

                                    <div class=\"dropdown\" id=\"applist\">
                                        ";
        // line 44
        echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigMenuExtension')->appListMenu();
        echo "
                                    </div>
                                    <div class=\"separator\">&nbsp;</div>
                                    <!-- content -->
                                    ";
        // line 48
        $this->displayBlock('contentmenu', $context, $blocks);
        // line 51
        echo "                                        <div class=\"sidebartitle\">
                                            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_homepage");
        echo "\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-th icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_ReaderManager_manage");
        echo "\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-save icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("Import remote", array(), "messages");
        echo "</span>
                                                </div>
                                            </a>
                                        </div>


                                        ";
        // line 69
        echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigMenuExtension')->appListContent();
        echo "

                                    </div>

                                    <div class=\"separator\">&nbsp;</div>
                                    <!-- Page menu -->
                                    <div class=\"sidebartitle\">
                                        <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_page");
        echo "\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-book icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pages", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"sidebarlink\">
                                        <a class=\"sous-menu\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_views_page_manage");
        echo "\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-file icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Manage pages", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>
                                    ";
        // line 91
        echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigMenuExtension')->appListPage();
        echo "
                                    <div class=\"separator\">&nbsp;</div>

                                    <div class=\"sidebartitle\">
                                        <a id=\"simulator\" target=\"_blank\" class=\"mainnavel\"
                                           href=\"http://emulate.phonegap.com?url=";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/simulator/www/index.html?rand=";
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-phone icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("Preview", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"separator\">&nbsp;</div>

                                    <div class=\"sidebartitle\">
                                        <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_publish");
        echo "\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-send icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 110
        echo $this->env->getExtension('translator')->getTranslator()->trans("Publish", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"separator\">&nbsp;</div>

                                    ";
        // line 118
        echo "                                    <div class=\"sidebartitle menuTitle\">
                                        <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_configuration");
        echo "\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-cog icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 122
        echo $this->env->getExtension('translator')->getTranslator()->trans("Config", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"menuContent\">
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_app_manage");
        echo "\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-th-large icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">";
        // line 131
        echo $this->env->getExtension('translator')->getTranslator()->trans("Apps", array(), "messages");
        echo "</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keosu_core_theme_manage");
        echo "\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-tint icon-menu\"></span><span
                                                            class=\"texte-lien-menu\">";
        // line 139
        echo $this->env->getExtension('translator')->getTranslator()->trans("Themes", array(), "messages");
        echo "</span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    ";
        // line 145
        echo $this->env->getExtension('Keosu\CoreBundle\Twig\TwigMenuExtension')->addItemToMenuConfiguration();
        echo "

                                    <div class=\"sidebartitle menuTitle\">
                                        <a target=\"_blank\"
                                           href=\"http://store.keosu.com/index.php?utm_source=keosu&utm_medium=cms&utm_term=store&utm_campaign=keosu%20cms%20to%20store\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-shopping-cart icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 152
        echo $this->env->getExtension('translator')->getTranslator()->trans("Store", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"sidebartitle menuTitle\">
                                        <a target=\"_blank\"
                                           href=\"http://keosu.com/get-help/?utm_source=keosu&utm_medium=cms&utm_term=aide&utm_campaign=aide\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-question-sign icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">";
        // line 162
        echo $this->env->getExtension('translator')->getTranslator()->trans("Help", array(), "messages");
        echo "</span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class=\"separator\">&nbsp;</div>
                                <div class=\"version\"><i>Keosu version 0.1.6.2</i></div>
                                ";
        
        $__internal_ee043ff14e89627cb5266589575cc0dad00fe8588172e211895acc199dd49902->leave($__internal_ee043ff14e89627cb5266589575cc0dad00fe8588172e211895acc199dd49902_prof);

    }

    // line 48
    public function block_contentmenu($context, array $blocks = array())
    {
        $__internal_9d6ad267c1a40ec758105b20e13b4d3be339f5d6eb65f3241e84c3677c7490e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6ad267c1a40ec758105b20e13b4d3be339f5d6eb65f3241e84c3677c7490e3->enter($__internal_9d6ad267c1a40ec758105b20e13b4d3be339f5d6eb65f3241e84c3677c7490e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmenu"));

        // line 49
        echo "                                    <div>
                                        ";
        
        $__internal_9d6ad267c1a40ec758105b20e13b4d3be339f5d6eb65f3241e84c3677c7490e3->leave($__internal_9d6ad267c1a40ec758105b20e13b4d3be339f5d6eb65f3241e84c3677c7490e3_prof);

    }

    // line 189
    public function block_body($context, array $blocks = array())
    {
        $__internal_1514cb0a76e25cf31da631465fcde0bd418357bf4208d9e1ce789a0c234df971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1514cb0a76e25cf31da631465fcde0bd418357bf4208d9e1ce789a0c234df971->enter($__internal_1514cb0a76e25cf31da631465fcde0bd418357bf4208d9e1ce789a0c234df971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1514cb0a76e25cf31da631465fcde0bd418357bf4208d9e1ce789a0c234df971->leave($__internal_1514cb0a76e25cf31da631465fcde0bd418357bf4208d9e1ce789a0c234df971_prof);

    }

    public function getTemplateName()
    {
        return "::skeleton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 189,  403 => 49,  397 => 48,  381 => 162,  368 => 152,  358 => 145,  349 => 139,  343 => 136,  335 => 131,  329 => 128,  320 => 122,  314 => 119,  311 => 118,  301 => 110,  295 => 107,  284 => 99,  276 => 96,  268 => 91,  261 => 87,  255 => 84,  247 => 79,  241 => 76,  231 => 69,  222 => 63,  216 => 60,  208 => 55,  202 => 52,  199 => 51,  197 => 48,  190 => 44,  182 => 39,  179 => 38,  173 => 37,  160 => 189,  150 => 182,  146 => 181,  134 => 171,  132 => 37,  122 => 29,  116 => 28,  98 => 220,  92 => 217,  75 => 202,  73 => 201,  69 => 200,  62 => 195,  60 => 28,  53 => 24,  49 => 23,  44 => 20,  38 => 19,  11 => 18,);
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
Copyright (C) 2014  Vincent Le Borgne, Pockeit

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
{% extends '::root.html.twig' %}
{% block skeleton %}
    <section id=\"main-content\">
        <div class=\"container-fluid\">
            <div id=\"bouton-menu-responsive\" class=\"menu-leftcol\">
                <img id=\"icon-arrow-menu\" class=\"icon-menu-responsive\" src=\"{{ url_base }}/img/arrow-right.png\"/>
                <img id=\"icon-arrow-menu-left\" class=\"icon-menu-responsive\" src=\"{{ url_base }}/img/arrow-left.png\"/>
            </div>


            {% block maincontent %}
            <div class=\"row\" style=\"background-color:#f1f1f1 !important;\">

                <div id=\"left-menu\" class=\"col-md-2 leftcol closed\">
                    <div class=\"leftcol\">
                        <section id=\"leftcol\" class=\"leftcol\">
                            <div class=\"sidebar leftcol\">

                                <div class=\"sidemenu leftcol\">
                                    {% block leftmenu %}
                                    <div class=\"logowrapper\">
                                        <img class=\"logotop\" src=\"{{ url_base }}/img/logo_black.png\"/>
                                    </div>
                                    <br/>

                                    <div class=\"dropdown\" id=\"applist\">
                                        {{ appListMenu() }}
                                    </div>
                                    <div class=\"separator\">&nbsp;</div>
                                    <!-- content -->
                                    {% block contentmenu %}
                                    <div>
                                        {% endblock %}
                                        <div class=\"sidebartitle\">
                                            <a href=\"{{ path('keosu_core_homepage') }}\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-th icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">{% trans %}Content{% endtrans %}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"{{ path('keosu_ReaderManager_manage') }}\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-save icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">{% trans %}Import remote{% endtrans %}</span>
                                                </div>
                                            </a>
                                        </div>


                                        {{ appListContent() }}

                                    </div>

                                    <div class=\"separator\">&nbsp;</div>
                                    <!-- Page menu -->
                                    <div class=\"sidebartitle\">
                                        <a href=\"{{ path('keosu_core_page') }}\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-book icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Pages{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"sidebarlink\">
                                        <a class=\"sous-menu\" href=\"{{ path('keosu_core_views_page_manage') }}\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-file icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Manage pages{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>
                                    {{ appListPage() }}
                                    <div class=\"separator\">&nbsp;</div>

                                    <div class=\"sidebartitle\">
                                        <a id=\"simulator\" target=\"_blank\" class=\"mainnavel\"
                                           href=\"http://emulate.phonegap.com?url={{ url_base }}/keosu/export/simulator/www/index.html?rand={{ date().timestamp }}\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-phone icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Preview{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"separator\">&nbsp;</div>

                                    <div class=\"sidebartitle\">
                                        <a href=\"{{ path('keosu_core_publish') }}\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-send icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Publish{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"separator\">&nbsp;</div>

                                    {# active with activesidebartitle #}
                                    <div class=\"sidebartitle menuTitle\">
                                        <a href=\"{{ path('keosu_core_configuration') }}\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-cog icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Config{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"menuContent\">
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"{{ path('keosu_core_app_manage') }}\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-th-large icon-menu\"></span> <span
                                                            class=\"texte-lien-menu\">{% trans %}Apps{% endtrans %}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"{{ path('keosu_core_theme_manage') }}\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-tint icon-menu\"></span><span
                                                            class=\"texte-lien-menu\">{% trans %}Themes{% endtrans %}</span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    {{ addItemToMenuConfiguration() }}

                                    <div class=\"sidebartitle menuTitle\">
                                        <a target=\"_blank\"
                                           href=\"http://store.keosu.com/index.php?utm_source=keosu&utm_medium=cms&utm_term=store&utm_campaign=keosu%20cms%20to%20store\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-shopping-cart icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Store{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class=\"sidebartitle menuTitle\">
                                        <a target=\"_blank\"
                                           href=\"http://keosu.com/get-help/?utm_source=keosu&utm_medium=cms&utm_term=aide&utm_campaign=aide\">
                                            <div class=\"lien-menu\">
                                                <span class=\"glyphicon glyphicon-question-sign icon-menu\"></span> <span
                                                        class=\"texte-lien-menu\">{% trans %}Help{% endtrans %}</span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class=\"separator\">&nbsp;</div>
                                <div class=\"version\"><i>Keosu version 0.1.6.2</i></div>
                                {% endblock %}
                            </div>
                        </section>
                    </div>
                </div>

                <div class=\"col-md-10\">
                    <div class=\"container\">
                        <div class=\"row-fluid\">
                            <div class=\"span6 pull-right logininfo\" style=\"text-align:right\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                                Hello {{ app.user.username }} |
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    Logout <span class=\"glyphicon glyphicon-log-out\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <section id=\"body\">{% block body %}{% endblock %}</section>
                    </div>
                </div>


                {% endblock %}
            </div>
        </div>

    </section>

    <div id=\"dialog\" title=\"{% trans %}Confirmation Required{% endtrans %}\">
        {% trans %}Are you sure about this? All your modification will be lost{% endtrans %}
    </div>
    <script>
        \$(document).ready(function () {
            \$(\"#dialog\").dialog({
                autoOpen: false,
                modal: true
            });
        });

        \$(\".confirmModal\").click(function (e) {
            e.preventDefault();
            var targetUrl = \$(this).attr(\"href\");

            \$(\"#dialog\").dialog({
                buttons: {
                    \"{% trans %}Confirm{% endtrans %}\": function () {
                        window.location.href = targetUrl;
                    },
                    \"{% trans %}Cancel{% endtrans %}\": function () {
                        \$(this).dialog(\"close\");
                    }
                }
            });

            \$(\"#dialog\").dialog(\"open\");
        });
    </script>

{% endblock %}
", "::skeleton.html.twig", "C:\\wamp64\\www\\keosu\\app/Resources\\views/skeleton.html.twig");
    }
}
