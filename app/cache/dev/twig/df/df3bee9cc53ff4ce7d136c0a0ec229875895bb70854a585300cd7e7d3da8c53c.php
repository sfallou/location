<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_b11eaba6e30c63a2573b3523faa9a97b8ec654dd8d08b5c2595bb7500765d419 extends Twig_Template
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
        $__internal_a386555eaa7eed9498be5877accb38bf8a6e02e3bb7a228d6f50ebf3e7b332f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a386555eaa7eed9498be5877accb38bf8a6e02e3bb7a228d6f50ebf3e7b332f8->enter($__internal_a386555eaa7eed9498be5877accb38bf8a6e02e3bb7a228d6f50ebf3e7b332f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_a386555eaa7eed9498be5877accb38bf8a6e02e3bb7a228d6f50ebf3e7b332f8->leave($__internal_a386555eaa7eed9498be5877accb38bf8a6e02e3bb7a228d6f50ebf3e7b332f8_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eded99c990a4284e8064f1e9cbdc54ed0ec96a1cfd196d348cc3fd85205164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eded99c990a4284e8064f1e9cbdc54ed0ec96a1cfd196d348cc3fd85205164e->enter($__internal_3eded99c990a4284e8064f1e9cbdc54ed0ec96a1cfd196d348cc3fd85205164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_3eded99c990a4284e8064f1e9cbdc54ed0ec96a1cfd196d348cc3fd85205164e->leave($__internal_3eded99c990a4284e8064f1e9cbdc54ed0ec96a1cfd196d348cc3fd85205164e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fbaa6556ba1891d6d0a3d3dc5d7f4bdb4daf3a3e4ec94064732032dd002526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbaa6556ba1891d6d0a3d3dc5d7f4bdb4daf3a3e4ec94064732032dd002526d->enter($__internal_4fbaa6556ba1891d6d0a3d3dc5d7f4bdb4daf3a3e4ec94064732032dd002526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_4fbaa6556ba1891d6d0a3d3dc5d7f4bdb4daf3a3e4ec94064732032dd002526d->leave($__internal_4fbaa6556ba1891d6d0a3d3dc5d7f4bdb4daf3a3e4ec94064732032dd002526d_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_e78aab8c83002b7c677c87c849c0512021caa70b0a1490a2a123f717bc181934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78aab8c83002b7c677c87c849c0512021caa70b0a1490a2a123f717bc181934->enter($__internal_e78aab8c83002b7c677c87c849c0512021caa70b0a1490a2a123f717bc181934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_e78aab8c83002b7c677c87c849c0512021caa70b0a1490a2a123f717bc181934->leave($__internal_e78aab8c83002b7c677c87c849c0512021caa70b0a1490a2a123f717bc181934_prof);

    }

    // line 37
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_ad9788808b7f771472cd5c1707b7e830763d0a5066a1d4dfb10c7caf82ce6dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9788808b7f771472cd5c1707b7e830763d0a5066a1d4dfb10c7caf82ce6dee->enter($__internal_ad9788808b7f771472cd5c1707b7e830763d0a5066a1d4dfb10c7caf82ce6dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 38
        echo "        <header class=\"main-header\">
            ";
        // line 39
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 45
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_ad9788808b7f771472cd5c1707b7e830763d0a5066a1d4dfb10c7caf82ce6dee->leave($__internal_ad9788808b7f771472cd5c1707b7e830763d0a5066a1d4dfb10c7caf82ce6dee_prof);

    }

    // line 39
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_c39a519df8f816ec7e6a60b0f55902ab8d8faa1ecf715c5a10f6c2caab074fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39a519df8f816ec7e6a60b0f55902ab8d8faa1ecf715c5a10f6c2caab074fc4->enter($__internal_c39a519df8f816ec7e6a60b0f55902ab8d8faa1ecf715c5a10f6c2caab074fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 40
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 42
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_c39a519df8f816ec7e6a60b0f55902ab8d8faa1ecf715c5a10f6c2caab074fc4->leave($__internal_c39a519df8f816ec7e6a60b0f55902ab8d8faa1ecf715c5a10f6c2caab074fc4_prof);

    }

    // line 54
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_97e720db43d12d75bd47a3475ba8367d686fd16de58c4a11fd810fc12065d855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e720db43d12d75bd47a3475ba8367d686fd16de58c4a11fd810fc12065d855->enter($__internal_97e720db43d12d75bd47a3475ba8367d686fd16de58c4a11fd810fc12065d855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_97e720db43d12d75bd47a3475ba8367d686fd16de58c4a11fd810fc12065d855->leave($__internal_97e720db43d12d75bd47a3475ba8367d686fd16de58c4a11fd810fc12065d855_prof);

    }

    // line 82
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c1d74ec607998ee1aaf3f5cde5f99e832b549503f1f4a31bf6f164cbba1b7e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d74ec607998ee1aaf3f5cde5f99e832b549503f1f4a31bf6f164cbba1b7e44->enter($__internal_c1d74ec607998ee1aaf3f5cde5f99e832b549503f1f4a31bf6f164cbba1b7e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_c1d74ec607998ee1aaf3f5cde5f99e832b549503f1f4a31bf6f164cbba1b7e44->leave($__internal_c1d74ec607998ee1aaf3f5cde5f99e832b549503f1f4a31bf6f164cbba1b7e44_prof);

    }

    // line 83
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9606121caa728eade7d3c6f1cdf43b536637b1ee8f7fe75647abb9410d99a341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9606121caa728eade7d3c6f1cdf43b536637b1ee8f7fe75647abb9410d99a341->enter($__internal_9606121caa728eade7d3c6f1cdf43b536637b1ee8f7fe75647abb9410d99a341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_9606121caa728eade7d3c6f1cdf43b536637b1ee8f7fe75647abb9410d99a341->leave($__internal_9606121caa728eade7d3c6f1cdf43b536637b1ee8f7fe75647abb9410d99a341_prof);

    }

    // line 92
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6e786af7a04df2c9d9110cb3d2ddeaca106a15344b992e5429d0fcb03a100c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e786af7a04df2c9d9110cb3d2ddeaca106a15344b992e5429d0fcb03a100c3b->enter($__internal_6e786af7a04df2c9d9110cb3d2ddeaca106a15344b992e5429d0fcb03a100c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_6e786af7a04df2c9d9110cb3d2ddeaca106a15344b992e5429d0fcb03a100c3b->leave($__internal_6e786af7a04df2c9d9110cb3d2ddeaca106a15344b992e5429d0fcb03a100c3b_prof);

    }

    // line 98
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_b5885caa99019b9729a3c05ba7e0f4fd0054ccab8f80e9142425853dde0721f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5885caa99019b9729a3c05ba7e0f4fd0054ccab8f80e9142425853dde0721f9->enter($__internal_b5885caa99019b9729a3c05ba7e0f4fd0054ccab8f80e9142425853dde0721f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 99
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_b5885caa99019b9729a3c05ba7e0f4fd0054ccab8f80e9142425853dde0721f9->leave($__internal_b5885caa99019b9729a3c05ba7e0f4fd0054ccab8f80e9142425853dde0721f9_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e93c1abb2e03d185bca6de9106648eb00d34e6dac5652b76e3ecb3a5b3bb701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e93c1abb2e03d185bca6de9106648eb00d34e6dac5652b76e3ecb3a5b3bb701->enter($__internal_4e93c1abb2e03d185bca6de9106648eb00d34e6dac5652b76e3ecb3a5b3bb701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_4e93c1abb2e03d185bca6de9106648eb00d34e6dac5652b76e3ecb3a5b3bb701->leave($__internal_4e93c1abb2e03d185bca6de9106648eb00d34e6dac5652b76e3ecb3a5b3bb701_prof);

    }

    // line 118
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_ff24420d8fc3161f2ba9e1e1f79d9eaf8833eeb068a9709dec742c149d747c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff24420d8fc3161f2ba9e1e1f79d9eaf8833eeb068a9709dec742c149d747c95->enter($__internal_ff24420d8fc3161f2ba9e1e1f79d9eaf8833eeb068a9709dec742c149d747c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_ff24420d8fc3161f2ba9e1e1f79d9eaf8833eeb068a9709dec742c149d747c95->leave($__internal_ff24420d8fc3161f2ba9e1e1f79d9eaf8833eeb068a9709dec742c149d747c95_prof);

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
