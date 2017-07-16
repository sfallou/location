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
        $__internal_4583898a31f82100e3c1dd644d9cb2ec9b44d3adb100a924374a801bce468767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4583898a31f82100e3c1dd644d9cb2ec9b44d3adb100a924374a801bce468767->enter($__internal_4583898a31f82100e3c1dd644d9cb2ec9b44d3adb100a924374a801bce468767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 70
        $this->displayBlock('page_title', $context, $blocks);
        // line 71
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 76
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 80
        $this->displayBlock('page_content', $context, $blocks);
        // line 81
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 86
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 94
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
";
        // line 106
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 108
        echo "</body>
</html>
";
        
        $__internal_4583898a31f82100e3c1dd644d9cb2ec9b44d3adb100a924374a801bce468767->leave($__internal_4583898a31f82100e3c1dd644d9cb2ec9b44d3adb100a924374a801bce468767_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_294cebe29b886ab1878c117390d8983e500e3460b5fee02d856fb7037b9615c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294cebe29b886ab1878c117390d8983e500e3460b5fee02d856fb7037b9615c2->enter($__internal_294cebe29b886ab1878c117390d8983e500e3460b5fee02d856fb7037b9615c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_294cebe29b886ab1878c117390d8983e500e3460b5fee02d856fb7037b9615c2->leave($__internal_294cebe29b886ab1878c117390d8983e500e3460b5fee02d856fb7037b9615c2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcc2a20bbcaae226679061db3987e30c1a802e68c063f073aa5499ee24401702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc2a20bbcaae226679061db3987e30c1a802e68c063f073aa5499ee24401702->enter($__internal_bcc2a20bbcaae226679061db3987e30c1a802e68c063f073aa5499ee24401702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_bcc2a20bbcaae226679061db3987e30c1a802e68c063f073aa5499ee24401702->leave($__internal_bcc2a20bbcaae226679061db3987e30c1a802e68c063f073aa5499ee24401702_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_fbaacf2043c163d6fcf694d89b8511b744d19ab0ba92a93320a8c8bc23b5c9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaacf2043c163d6fcf694d89b8511b744d19ab0ba92a93320a8c8bc23b5c9e6->enter($__internal_fbaacf2043c163d6fcf694d89b8511b744d19ab0ba92a93320a8c8bc23b5c9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_fbaacf2043c163d6fcf694d89b8511b744d19ab0ba92a93320a8c8bc23b5c9e6->leave($__internal_fbaacf2043c163d6fcf694d89b8511b744d19ab0ba92a93320a8c8bc23b5c9e6_prof);

    }

    // line 37
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_2e0875ad9d580835f03be9190cdf3235b43bc3a127b66144b88df8432dc9729e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0875ad9d580835f03be9190cdf3235b43bc3a127b66144b88df8432dc9729e->enter($__internal_2e0875ad9d580835f03be9190cdf3235b43bc3a127b66144b88df8432dc9729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 38
        echo "        <header class=\"main-header\">
            ";
        // line 39
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 45
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_2e0875ad9d580835f03be9190cdf3235b43bc3a127b66144b88df8432dc9729e->leave($__internal_2e0875ad9d580835f03be9190cdf3235b43bc3a127b66144b88df8432dc9729e_prof);

    }

    // line 39
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_809020514bb0984c0654891a7da752bf9a115caea2298d2ff1cd098ab1e14334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809020514bb0984c0654891a7da752bf9a115caea2298d2ff1cd098ab1e14334->enter($__internal_809020514bb0984c0654891a7da752bf9a115caea2298d2ff1cd098ab1e14334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 40
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 42
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_809020514bb0984c0654891a7da752bf9a115caea2298d2ff1cd098ab1e14334->leave($__internal_809020514bb0984c0654891a7da752bf9a115caea2298d2ff1cd098ab1e14334_prof);

    }

    // line 54
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_5d6e8d6138f22b9b10141cf6f4b2b2c65b970c19b6b27eb2ce293544274003aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6e8d6138f22b9b10141cf6f4b2b2c65b970c19b6b27eb2ce293544274003aa->enter($__internal_5d6e8d6138f22b9b10141cf6f4b2b2c65b970c19b6b27eb2ce293544274003aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_5d6e8d6138f22b9b10141cf6f4b2b2c65b970c19b6b27eb2ce293544274003aa->leave($__internal_5d6e8d6138f22b9b10141cf6f4b2b2c65b970c19b6b27eb2ce293544274003aa_prof);

    }

    // line 70
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3dc7e9bb231c255a3dc443029b64464eaeeaabe0c60d36b12c7cfa4cbedb67c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc7e9bb231c255a3dc443029b64464eaeeaabe0c60d36b12c7cfa4cbedb67c4->enter($__internal_3dc7e9bb231c255a3dc443029b64464eaeeaabe0c60d36b12c7cfa4cbedb67c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_3dc7e9bb231c255a3dc443029b64464eaeeaabe0c60d36b12c7cfa4cbedb67c4->leave($__internal_3dc7e9bb231c255a3dc443029b64464eaeeaabe0c60d36b12c7cfa4cbedb67c4_prof);

    }

    // line 71
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_12a96b1a6e9808d694bc6db550f86d4566b743cbb8320e255e03910b63a6eb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a96b1a6e9808d694bc6db550f86d4566b743cbb8320e255e03910b63a6eb94->enter($__internal_12a96b1a6e9808d694bc6db550f86d4566b743cbb8320e255e03910b63a6eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_12a96b1a6e9808d694bc6db550f86d4566b743cbb8320e255e03910b63a6eb94->leave($__internal_12a96b1a6e9808d694bc6db550f86d4566b743cbb8320e255e03910b63a6eb94_prof);

    }

    // line 80
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a7c450530a3989de188df01719d23384fdffe8e60b6cfb9918260595c19b00a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c450530a3989de188df01719d23384fdffe8e60b6cfb9918260595c19b00a5->enter($__internal_a7c450530a3989de188df01719d23384fdffe8e60b6cfb9918260595c19b00a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_a7c450530a3989de188df01719d23384fdffe8e60b6cfb9918260595c19b00a5->leave($__internal_a7c450530a3989de188df01719d23384fdffe8e60b6cfb9918260595c19b00a5_prof);

    }

    // line 86
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_2f82e2b62f456ec1b29660f0ba2104ace898a0c99a2241f47dd58bbc9dc7c467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f82e2b62f456ec1b29660f0ba2104ace898a0c99a2241f47dd58bbc9dc7c467->enter($__internal_2f82e2b62f456ec1b29660f0ba2104ace898a0c99a2241f47dd58bbc9dc7c467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 87
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_2f82e2b62f456ec1b29660f0ba2104ace898a0c99a2241f47dd58bbc9dc7c467->leave($__internal_2f82e2b62f456ec1b29660f0ba2104ace898a0c99a2241f47dd58bbc9dc7c467_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0774a2c21b3e7d514948a6eba801bb526d75013600e77d2cc2c317ffd48b860b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0774a2c21b3e7d514948a6eba801bb526d75013600e77d2cc2c317ffd48b860b->enter($__internal_0774a2c21b3e7d514948a6eba801bb526d75013600e77d2cc2c317ffd48b860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0774a2c21b3e7d514948a6eba801bb526d75013600e77d2cc2c317ffd48b860b->leave($__internal_0774a2c21b3e7d514948a6eba801bb526d75013600e77d2cc2c317ffd48b860b_prof);

    }

    // line 106
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_b88bde2d71d35b0b3ec867a0f029eed998cc4a8b74887a3cafa0a46560c15cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88bde2d71d35b0b3ec867a0f029eed998cc4a8b74887a3cafa0a46560c15cf8->enter($__internal_b88bde2d71d35b0b3ec867a0f029eed998cc4a8b74887a3cafa0a46560c15cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_b88bde2d71d35b0b3ec867a0f029eed998cc4a8b74887a3cafa0a46560c15cf8->leave($__internal_b88bde2d71d35b0b3ec867a0f029eed998cc4a8b74887a3cafa0a46560c15cf8_prof);

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
        return array (  337 => 106,  327 => 101,  324 => 100,  318 => 99,  305 => 87,  299 => 86,  288 => 80,  276 => 71,  264 => 70,  254 => 59,  247 => 56,  244 => 55,  238 => 54,  228 => 42,  224 => 40,  218 => 39,  208 => 45,  206 => 39,  203 => 38,  197 => 37,  183 => 25,  177 => 24,  167 => 17,  161 => 16,  149 => 13,  140 => 108,  138 => 106,  135 => 104,  133 => 99,  127 => 94,  125 => 86,  118 => 81,  116 => 80,  110 => 76,  104 => 71,  102 => 70,  91 => 61,  89 => 54,  82 => 49,  80 => 37,  73 => 33,  69 => 31,  66 => 24,  61 => 21,  57 => 19,  54 => 16,  49 => 13,  36 => 2,  34 => 1,);
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
