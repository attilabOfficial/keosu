<?php

/* ::skeleton.html.twig */
class __TwigTemplate_00e76c1fc6fa306f97013868f0c0101b92d722f9ef8bb2a291b12bb615f0319c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_skeleton($context, array $blocks = array())
    {
        // line 20
        echo "    <section id=\"main-content\">
        <div class=\"container-fluid\">
            <div id=\"bouton-menu-responsive\" class=\"menu-leftcol\">
                <img id=\"icon-arrow-menu\" class=\"icon-menu-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
        echo "/img/arrow-right.png\"/>
                <img id=\"icon-arrow-menu-left\" class=\"icon-menu-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
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
    }

    // line 28
    public function block_maincontent($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
    }

    // line 37
    public function block_leftmenu($context, array $blocks = array())
    {
        // line 38
        echo "                                    <div class=\"logowrapper\">
                                        <img class=\"logotop\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : null), "html", null, true);
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
    }

    // line 48
    public function block_contentmenu($context, array $blocks = array())
    {
        // line 49
        echo "                                    <div>
                                        ";
    }

    // line 189
    public function block_body($context, array $blocks = array())
    {
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
        return array (  381 => 189,  376 => 49,  373 => 48,  360 => 162,  347 => 152,  337 => 145,  328 => 139,  322 => 136,  314 => 131,  308 => 128,  299 => 122,  293 => 119,  290 => 118,  280 => 110,  274 => 107,  263 => 99,  255 => 96,  247 => 91,  240 => 87,  234 => 84,  226 => 79,  220 => 76,  210 => 69,  201 => 63,  195 => 60,  187 => 55,  181 => 52,  178 => 51,  176 => 48,  169 => 44,  161 => 39,  158 => 38,  155 => 37,  145 => 189,  135 => 182,  131 => 181,  119 => 171,  117 => 37,  107 => 29,  104 => 28,  89 => 220,  83 => 217,  66 => 202,  64 => 201,  60 => 200,  53 => 195,  51 => 28,  44 => 24,  40 => 23,  35 => 20,  32 => 19,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::skeleton.html.twig", "C:\\wamp\\www\\keosu\\app/Resources\\views/skeleton.html.twig");
    }
}
