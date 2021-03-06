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
        $__internal_c0068030d4158857dfe9358094af47d57016f8880f4d096622c56b532fda6e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0068030d4158857dfe9358094af47d57016f8880f4d096622c56b532fda6e05->enter($__internal_c0068030d4158857dfe9358094af47d57016f8880f4d096622c56b532fda6e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_c0068030d4158857dfe9358094af47d57016f8880f4d096622c56b532fda6e05->leave($__internal_c0068030d4158857dfe9358094af47d57016f8880f4d096622c56b532fda6e05_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a89865416966e1d03b625e3fa67ac5bcad80096aaca09dac8e9107d043af1bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89865416966e1d03b625e3fa67ac5bcad80096aaca09dac8e9107d043af1bd6->enter($__internal_a89865416966e1d03b625e3fa67ac5bcad80096aaca09dac8e9107d043af1bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_a89865416966e1d03b625e3fa67ac5bcad80096aaca09dac8e9107d043af1bd6->leave($__internal_a89865416966e1d03b625e3fa67ac5bcad80096aaca09dac8e9107d043af1bd6_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_233f72213a55cbdec7373ef070aa4c31a839a79049b2403a34c0133d77a40a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233f72213a55cbdec7373ef070aa4c31a839a79049b2403a34c0133d77a40a98->enter($__internal_233f72213a55cbdec7373ef070aa4c31a839a79049b2403a34c0133d77a40a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_233f72213a55cbdec7373ef070aa4c31a839a79049b2403a34c0133d77a40a98->leave($__internal_233f72213a55cbdec7373ef070aa4c31a839a79049b2403a34c0133d77a40a98_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_a0d3280cf539d52e4d279535438ebe12d40d74ffccc40ac060f62da1a11b7ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d3280cf539d52e4d279535438ebe12d40d74ffccc40ac060f62da1a11b7ec9->enter($__internal_a0d3280cf539d52e4d279535438ebe12d40d74ffccc40ac060f62da1a11b7ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_a0d3280cf539d52e4d279535438ebe12d40d74ffccc40ac060f62da1a11b7ec9->leave($__internal_a0d3280cf539d52e4d279535438ebe12d40d74ffccc40ac060f62da1a11b7ec9_prof);

    }

    // line 37
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_63dad0e7b204fe8f8eb1f06458f3bd3c0d738a7ce296a4ad6b8e7db8cc686853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dad0e7b204fe8f8eb1f06458f3bd3c0d738a7ce296a4ad6b8e7db8cc686853->enter($__internal_63dad0e7b204fe8f8eb1f06458f3bd3c0d738a7ce296a4ad6b8e7db8cc686853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 38
        echo "        <header class=\"main-header\">
            ";
        // line 39
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 45
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_63dad0e7b204fe8f8eb1f06458f3bd3c0d738a7ce296a4ad6b8e7db8cc686853->leave($__internal_63dad0e7b204fe8f8eb1f06458f3bd3c0d738a7ce296a4ad6b8e7db8cc686853_prof);

    }

    // line 39
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_3f3cb251f6c9ee78af7982b69e978b69ac5c8622b020601713047c848822c820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3cb251f6c9ee78af7982b69e978b69ac5c8622b020601713047c848822c820->enter($__internal_3f3cb251f6c9ee78af7982b69e978b69ac5c8622b020601713047c848822c820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 40
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 42
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_3f3cb251f6c9ee78af7982b69e978b69ac5c8622b020601713047c848822c820->leave($__internal_3f3cb251f6c9ee78af7982b69e978b69ac5c8622b020601713047c848822c820_prof);

    }

    // line 54
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_ce45227c903aece2f28995f050cb41cdae992a6d1d2b912ab35b8c2e1e074d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce45227c903aece2f28995f050cb41cdae992a6d1d2b912ab35b8c2e1e074d94->enter($__internal_ce45227c903aece2f28995f050cb41cdae992a6d1d2b912ab35b8c2e1e074d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_ce45227c903aece2f28995f050cb41cdae992a6d1d2b912ab35b8c2e1e074d94->leave($__internal_ce45227c903aece2f28995f050cb41cdae992a6d1d2b912ab35b8c2e1e074d94_prof);

    }

    // line 82
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9a6ab0ee7fb1fbe689b2bca58bbe13c8a2d1578daa55744e734593eb1b5eb24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6ab0ee7fb1fbe689b2bca58bbe13c8a2d1578daa55744e734593eb1b5eb24b->enter($__internal_9a6ab0ee7fb1fbe689b2bca58bbe13c8a2d1578daa55744e734593eb1b5eb24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_9a6ab0ee7fb1fbe689b2bca58bbe13c8a2d1578daa55744e734593eb1b5eb24b->leave($__internal_9a6ab0ee7fb1fbe689b2bca58bbe13c8a2d1578daa55744e734593eb1b5eb24b_prof);

    }

    // line 83
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d07ec95bbb6acc47ad224f3164e44217422cfbdeacaa2835d2c5e70de98d2168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07ec95bbb6acc47ad224f3164e44217422cfbdeacaa2835d2c5e70de98d2168->enter($__internal_d07ec95bbb6acc47ad224f3164e44217422cfbdeacaa2835d2c5e70de98d2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_d07ec95bbb6acc47ad224f3164e44217422cfbdeacaa2835d2c5e70de98d2168->leave($__internal_d07ec95bbb6acc47ad224f3164e44217422cfbdeacaa2835d2c5e70de98d2168_prof);

    }

    // line 92
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_52440c2d53fd257f8a9ec2039915472bbb3c4ec37b8cec2e3cc0e4a256860fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52440c2d53fd257f8a9ec2039915472bbb3c4ec37b8cec2e3cc0e4a256860fd5->enter($__internal_52440c2d53fd257f8a9ec2039915472bbb3c4ec37b8cec2e3cc0e4a256860fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_52440c2d53fd257f8a9ec2039915472bbb3c4ec37b8cec2e3cc0e4a256860fd5->leave($__internal_52440c2d53fd257f8a9ec2039915472bbb3c4ec37b8cec2e3cc0e4a256860fd5_prof);

    }

    // line 98
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_568fcb0607c4ee9cd59ec2975f57d4aa0c170ae32badd30d47bbbea6791a8e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568fcb0607c4ee9cd59ec2975f57d4aa0c170ae32badd30d47bbbea6791a8e28->enter($__internal_568fcb0607c4ee9cd59ec2975f57d4aa0c170ae32badd30d47bbbea6791a8e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 99
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_568fcb0607c4ee9cd59ec2975f57d4aa0c170ae32badd30d47bbbea6791a8e28->leave($__internal_568fcb0607c4ee9cd59ec2975f57d4aa0c170ae32badd30d47bbbea6791a8e28_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e3d14a3790eacb9c952c9fa2b466b07d0606e93aec52ef1129e70771c49dc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3d14a3790eacb9c952c9fa2b466b07d0606e93aec52ef1129e70771c49dc47->enter($__internal_8e3d14a3790eacb9c952c9fa2b466b07d0606e93aec52ef1129e70771c49dc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8e3d14a3790eacb9c952c9fa2b466b07d0606e93aec52ef1129e70771c49dc47->leave($__internal_8e3d14a3790eacb9c952c9fa2b466b07d0606e93aec52ef1129e70771c49dc47_prof);

    }

    // line 118
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_7a5c4adfafc8da760e292e8bfd61339927742c1d74ba1b44332fe2e354311276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5c4adfafc8da760e292e8bfd61339927742c1d74ba1b44332fe2e354311276->enter($__internal_7a5c4adfafc8da760e292e8bfd61339927742c1d74ba1b44332fe2e354311276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_7a5c4adfafc8da760e292e8bfd61339927742c1d74ba1b44332fe2e354311276->leave($__internal_7a5c4adfafc8da760e292e8bfd61339927742c1d74ba1b44332fe2e354311276_prof);

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
