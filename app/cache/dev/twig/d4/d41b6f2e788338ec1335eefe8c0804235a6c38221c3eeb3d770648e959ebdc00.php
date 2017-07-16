<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_b181d42a32a21adb3598dd950ccd0b5ceb563af4b5d6e4a3e7c4e78d3c420add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fb29f6ebc6a998c3f82fda2d93fc83407a224f9f1c58eb7a94d505f751e752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fb29f6ebc6a998c3f82fda2d93fc83407a224f9f1c58eb7a94d505f751e752->enter($__internal_74fb29f6ebc6a998c3f82fda2d93fc83407a224f9f1c58eb7a94d505f751e752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    
    <div class=\"wrapper\">

    ";
        // line 37
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 49
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 54
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 61
        echo "            </section>
             <div>
            ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                <div>
                </div>
            ";
        } else {
            // line 71
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 73
        echo "        </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 82
        $this->displayBlock('page_title', $context, $blocks);
        // line 83
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 88
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 92
        $this->displayBlock('page_content', $context, $blocks);
        // line 93
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 98
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 106
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
";
        // line 118
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 120
        echo "</body>
</html>
";
        
        $__internal_74fb29f6ebc6a998c3f82fda2d93fc83407a224f9f1c58eb7a94d505f751e752->leave($__internal_74fb29f6ebc6a998c3f82fda2d93fc83407a224f9f1c58eb7a94d505f751e752_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_401892f3a8fba722b8ec4df2d88f622899894c08ca9b4ee9208c9b55b6089761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401892f3a8fba722b8ec4df2d88f622899894c08ca9b4ee9208c9b55b6089761->enter($__internal_401892f3a8fba722b8ec4df2d88f622899894c08ca9b4ee9208c9b55b6089761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_401892f3a8fba722b8ec4df2d88f622899894c08ca9b4ee9208c9b55b6089761->leave($__internal_401892f3a8fba722b8ec4df2d88f622899894c08ca9b4ee9208c9b55b6089761_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_756faf54977ff81e5969f9d091454275e2bfeea027689aff4604530a547154d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756faf54977ff81e5969f9d091454275e2bfeea027689aff4604530a547154d4->enter($__internal_756faf54977ff81e5969f9d091454275e2bfeea027689aff4604530a547154d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_756faf54977ff81e5969f9d091454275e2bfeea027689aff4604530a547154d4->leave($__internal_756faf54977ff81e5969f9d091454275e2bfeea027689aff4604530a547154d4_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_f4851e4b081c7e0c5b60fb0113cc947c84fe11fc70b8922006fed1eda6c3a15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4851e4b081c7e0c5b60fb0113cc947c84fe11fc70b8922006fed1eda6c3a15f->enter($__internal_f4851e4b081c7e0c5b60fb0113cc947c84fe11fc70b8922006fed1eda6c3a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_f4851e4b081c7e0c5b60fb0113cc947c84fe11fc70b8922006fed1eda6c3a15f->leave($__internal_f4851e4b081c7e0c5b60fb0113cc947c84fe11fc70b8922006fed1eda6c3a15f_prof);

    }

    // line 37
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_9168a23ec241d237c77ed26252a0d7ac2dc8049ea6479c8c00405a52abfba288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9168a23ec241d237c77ed26252a0d7ac2dc8049ea6479c8c00405a52abfba288->enter($__internal_9168a23ec241d237c77ed26252a0d7ac2dc8049ea6479c8c00405a52abfba288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 38
        echo "        <header class=\"main-header\">
            ";
        // line 39
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 45
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_9168a23ec241d237c77ed26252a0d7ac2dc8049ea6479c8c00405a52abfba288->leave($__internal_9168a23ec241d237c77ed26252a0d7ac2dc8049ea6479c8c00405a52abfba288_prof);

    }

    // line 39
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_3ee7f306ead27f1583b28a9eb9cfcdab1ee1c315b59ac9201099d049739af316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee7f306ead27f1583b28a9eb9cfcdab1ee1c315b59ac9201099d049739af316->enter($__internal_3ee7f306ead27f1583b28a9eb9cfcdab1ee1c315b59ac9201099d049739af316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 40
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 42
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_3ee7f306ead27f1583b28a9eb9cfcdab1ee1c315b59ac9201099d049739af316->leave($__internal_3ee7f306ead27f1583b28a9eb9cfcdab1ee1c315b59ac9201099d049739af316_prof);

    }

    // line 54
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_c3826f91919192cb390914de6758d56e4400dc73d4ef4eaa944f2ffb4b414893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3826f91919192cb390914de6758d56e4400dc73d4ef4eaa944f2ffb4b414893->enter($__internal_c3826f91919192cb390914de6758d56e4400dc73d4ef4eaa944f2ffb4b414893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 55
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 56
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        
                    ";
        }
        // line 59
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_c3826f91919192cb390914de6758d56e4400dc73d4ef4eaa944f2ffb4b414893->leave($__internal_c3826f91919192cb390914de6758d56e4400dc73d4ef4eaa944f2ffb4b414893_prof);

    }

    // line 82
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ae3bc76669934739cfed06de0aa81b4ee84f3a1542e9e28abec10cdc712212f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3bc76669934739cfed06de0aa81b4ee84f3a1542e9e28abec10cdc712212f4->enter($__internal_ae3bc76669934739cfed06de0aa81b4ee84f3a1542e9e28abec10cdc712212f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_ae3bc76669934739cfed06de0aa81b4ee84f3a1542e9e28abec10cdc712212f4->leave($__internal_ae3bc76669934739cfed06de0aa81b4ee84f3a1542e9e28abec10cdc712212f4_prof);

    }

    // line 83
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_276827ef5540c8631cd1c6ca1d78c7475d687f75ccd900eb140849604a98a2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276827ef5540c8631cd1c6ca1d78c7475d687f75ccd900eb140849604a98a2cf->enter($__internal_276827ef5540c8631cd1c6ca1d78c7475d687f75ccd900eb140849604a98a2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_276827ef5540c8631cd1c6ca1d78c7475d687f75ccd900eb140849604a98a2cf->leave($__internal_276827ef5540c8631cd1c6ca1d78c7475d687f75ccd900eb140849604a98a2cf_prof);

    }

    // line 92
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_79caeddf7d068f51808c57ae1429c890563a944fd1b55c2d6c0a78e44982cac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79caeddf7d068f51808c57ae1429c890563a944fd1b55c2d6c0a78e44982cac3->enter($__internal_79caeddf7d068f51808c57ae1429c890563a944fd1b55c2d6c0a78e44982cac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_79caeddf7d068f51808c57ae1429c890563a944fd1b55c2d6c0a78e44982cac3->leave($__internal_79caeddf7d068f51808c57ae1429c890563a944fd1b55c2d6c0a78e44982cac3_prof);

    }

    // line 98
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_a76f296d6f8007017c373978ab5a86a4ba102199399ab999e072f2d21d2fa144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76f296d6f8007017c373978ab5a86a4ba102199399ab999e072f2d21d2fa144->enter($__internal_a76f296d6f8007017c373978ab5a86a4ba102199399ab999e072f2d21d2fa144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 99
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_a76f296d6f8007017c373978ab5a86a4ba102199399ab999e072f2d21d2fa144->leave($__internal_a76f296d6f8007017c373978ab5a86a4ba102199399ab999e072f2d21d2fa144_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c22111b11c9b4cea6e38ebc9cf2ffedeb2dbf59b50c9eddbf72948a841c0e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c22111b11c9b4cea6e38ebc9cf2ffedeb2dbf59b50c9eddbf72948a841c0e30->enter($__internal_8c22111b11c9b4cea6e38ebc9cf2ffedeb2dbf59b50c9eddbf72948a841c0e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8c22111b11c9b4cea6e38ebc9cf2ffedeb2dbf59b50c9eddbf72948a841c0e30->leave($__internal_8c22111b11c9b4cea6e38ebc9cf2ffedeb2dbf59b50c9eddbf72948a841c0e30_prof);

    }

    // line 118
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_f1ff64b3112a3cf28510675a497cf4104cc94dd8ad79754b6c8ad22f99a2f645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ff64b3112a3cf28510675a497cf4104cc94dd8ad79754b6c8ad22f99a2f645->enter($__internal_f1ff64b3112a3cf28510675a497cf4104cc94dd8ad79754b6c8ad22f99a2f645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_f1ff64b3112a3cf28510675a497cf4104cc94dd8ad79754b6c8ad22f99a2f645->leave($__internal_f1ff64b3112a3cf28510675a497cf4104cc94dd8ad79754b6c8ad22f99a2f645_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 118,  358 => 113,  355 => 112,  349 => 111,  336 => 99,  330 => 98,  319 => 92,  307 => 83,  295 => 82,  285 => 59,  278 => 56,  275 => 55,  269 => 54,  259 => 42,  255 => 40,  249 => 39,  239 => 45,  237 => 39,  234 => 38,  228 => 37,  214 => 25,  208 => 24,  198 => 17,  192 => 16,  180 => 13,  171 => 120,  169 => 118,  166 => 116,  164 => 111,  158 => 106,  156 => 98,  149 => 93,  147 => 92,  141 => 88,  135 => 83,  133 => 82,  122 => 73,  114 => 71,  106 => 66,  102 => 65,  97 => 64,  95 => 63,  91 => 61,  89 => 54,  82 => 49,  80 => 37,  73 => 33,  69 => 31,  66 => 24,  61 => 21,  57 => 19,  54 => 16,  49 => 13,  36 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Kokou Colocation{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
    
    <div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    {{ block('title') }}
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    {% endblock %}

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                {% block avanzu_sidebar %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
                        
                    {% endif %}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                {% endblock %}
            </section>
             <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                <div>
                </div>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    {% block page_title %}Blank page{% endblock %}
                    <small>{% block page_subtitle %}Control panel{% endblock %}</small>
                </h1>
                {#% block avanzu_breadcrumb %}
                    {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                {% endblock %#}
            </section>

            <!-- Main content -->
            <section class=\"content\">
                {% block page_content %}{% endblock %}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    {% endblock %}

    </div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/layout/base-layout.html.twig");
    }
}
