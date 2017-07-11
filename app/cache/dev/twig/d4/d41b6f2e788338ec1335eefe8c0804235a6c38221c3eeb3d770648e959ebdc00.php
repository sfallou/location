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
        $__internal_ae4c32cb1acf14bfdc88732e76d7b14f1d71d46bb3a201ffd555161e0927493d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4c32cb1acf14bfdc88732e76d7b14f1d71d46bb3a201ffd555161e0927493d->enter($__internal_ae4c32cb1acf14bfdc88732e76d7b14f1d71d46bb3a201ffd555161e0927493d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        // line 36
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 48
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 53
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 60
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 69
        $this->displayBlock('page_title', $context, $blocks);
        // line 70
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 75
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 79
        $this->displayBlock('page_content', $context, $blocks);
        // line 80
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 85
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 93
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "
";
        // line 105
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 107
        echo "</body>
</html>
";
        
        $__internal_ae4c32cb1acf14bfdc88732e76d7b14f1d71d46bb3a201ffd555161e0927493d->leave($__internal_ae4c32cb1acf14bfdc88732e76d7b14f1d71d46bb3a201ffd555161e0927493d_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_033c2f935cfb8f07c9619d3482036add3971903e9ecac8cb241318eed412d207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033c2f935cfb8f07c9619d3482036add3971903e9ecac8cb241318eed412d207->enter($__internal_033c2f935cfb8f07c9619d3482036add3971903e9ecac8cb241318eed412d207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_033c2f935cfb8f07c9619d3482036add3971903e9ecac8cb241318eed412d207->leave($__internal_033c2f935cfb8f07c9619d3482036add3971903e9ecac8cb241318eed412d207_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97834f03778c6287b97248e3a9c8f1a586b8378db800a14deecb21f4ce81f4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97834f03778c6287b97248e3a9c8f1a586b8378db800a14deecb21f4ce81f4d4->enter($__internal_97834f03778c6287b97248e3a9c8f1a586b8378db800a14deecb21f4ce81f4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_97834f03778c6287b97248e3a9c8f1a586b8378db800a14deecb21f4ce81f4d4->leave($__internal_97834f03778c6287b97248e3a9c8f1a586b8378db800a14deecb21f4ce81f4d4_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_02d86e3019afb7fdc7657ac100bd65b28a7cde3d0a5fcc1d40d97236ab2619f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d86e3019afb7fdc7657ac100bd65b28a7cde3d0a5fcc1d40d97236ab2619f8->enter($__internal_02d86e3019afb7fdc7657ac100bd65b28a7cde3d0a5fcc1d40d97236ab2619f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_02d86e3019afb7fdc7657ac100bd65b28a7cde3d0a5fcc1d40d97236ab2619f8->leave($__internal_02d86e3019afb7fdc7657ac100bd65b28a7cde3d0a5fcc1d40d97236ab2619f8_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_3c3eb5cf242aae28553538f6da87b4ddb162ff51f1965ccaa2b1fa737a89fb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3eb5cf242aae28553538f6da87b4ddb162ff51f1965ccaa2b1fa737a89fb12->enter($__internal_3c3eb5cf242aae28553538f6da87b4ddb162ff51f1965ccaa2b1fa737a89fb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_3c3eb5cf242aae28553538f6da87b4ddb162ff51f1965ccaa2b1fa737a89fb12->leave($__internal_3c3eb5cf242aae28553538f6da87b4ddb162ff51f1965ccaa2b1fa737a89fb12_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_1098c8f3d92706ea4064d05cbb63d0cf9cd62ac5973017ee22a46cbee3efbebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1098c8f3d92706ea4064d05cbb63d0cf9cd62ac5973017ee22a46cbee3efbebb->enter($__internal_1098c8f3d92706ea4064d05cbb63d0cf9cd62ac5973017ee22a46cbee3efbebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 41
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_1098c8f3d92706ea4064d05cbb63d0cf9cd62ac5973017ee22a46cbee3efbebb->leave($__internal_1098c8f3d92706ea4064d05cbb63d0cf9cd62ac5973017ee22a46cbee3efbebb_prof);

    }

    // line 53
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_2df8a8e419714b63a52f29427853f63e2b4e9880da0bdd6fe61dea994759b021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df8a8e419714b63a52f29427853f63e2b4e9880da0bdd6fe61dea994759b021->enter($__internal_2df8a8e419714b63a52f29427853f63e2b4e9880da0bdd6fe61dea994759b021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 54
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 55
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        
                    ";
        }
        // line 58
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_2df8a8e419714b63a52f29427853f63e2b4e9880da0bdd6fe61dea994759b021->leave($__internal_2df8a8e419714b63a52f29427853f63e2b4e9880da0bdd6fe61dea994759b021_prof);

    }

    // line 69
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4b472e0154df9ae695a948519cadddfbc0db3fce7d3491fc428146e312c0284c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b472e0154df9ae695a948519cadddfbc0db3fce7d3491fc428146e312c0284c->enter($__internal_4b472e0154df9ae695a948519cadddfbc0db3fce7d3491fc428146e312c0284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_4b472e0154df9ae695a948519cadddfbc0db3fce7d3491fc428146e312c0284c->leave($__internal_4b472e0154df9ae695a948519cadddfbc0db3fce7d3491fc428146e312c0284c_prof);

    }

    // line 70
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_05542874a4f74bc7da18c90b8144ce0598760f99afbf24bc35e365cae76586f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05542874a4f74bc7da18c90b8144ce0598760f99afbf24bc35e365cae76586f2->enter($__internal_05542874a4f74bc7da18c90b8144ce0598760f99afbf24bc35e365cae76586f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_05542874a4f74bc7da18c90b8144ce0598760f99afbf24bc35e365cae76586f2->leave($__internal_05542874a4f74bc7da18c90b8144ce0598760f99afbf24bc35e365cae76586f2_prof);

    }

    // line 79
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e96e15938478f34ebed47f1e9d0afffc0aa87268e0cd4388a891a679be46d13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96e15938478f34ebed47f1e9d0afffc0aa87268e0cd4388a891a679be46d13d->enter($__internal_e96e15938478f34ebed47f1e9d0afffc0aa87268e0cd4388a891a679be46d13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_e96e15938478f34ebed47f1e9d0afffc0aa87268e0cd4388a891a679be46d13d->leave($__internal_e96e15938478f34ebed47f1e9d0afffc0aa87268e0cd4388a891a679be46d13d_prof);

    }

    // line 85
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_c5eb0cbcfdd49603632b2a9dc580fdf61f48b14655327dabb609091ea4cdd676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eb0cbcfdd49603632b2a9dc580fdf61f48b14655327dabb609091ea4cdd676->enter($__internal_c5eb0cbcfdd49603632b2a9dc580fdf61f48b14655327dabb609091ea4cdd676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 86
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_c5eb0cbcfdd49603632b2a9dc580fdf61f48b14655327dabb609091ea4cdd676->leave($__internal_c5eb0cbcfdd49603632b2a9dc580fdf61f48b14655327dabb609091ea4cdd676_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58724bb0ad751c90b6031b2fd1ef937f153b4bc6ae09c542834c0d4180671d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58724bb0ad751c90b6031b2fd1ef937f153b4bc6ae09c542834c0d4180671d35->enter($__internal_58724bb0ad751c90b6031b2fd1ef937f153b4bc6ae09c542834c0d4180671d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_58724bb0ad751c90b6031b2fd1ef937f153b4bc6ae09c542834c0d4180671d35->leave($__internal_58724bb0ad751c90b6031b2fd1ef937f153b4bc6ae09c542834c0d4180671d35_prof);

    }

    // line 105
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_2f0ce6625a4158cb011cd6609cb42002ffa972d15d5467d1fc4275f5b3a9cb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0ce6625a4158cb011cd6609cb42002ffa972d15d5467d1fc4275f5b3a9cb7a->enter($__internal_2f0ce6625a4158cb011cd6609cb42002ffa972d15d5467d1fc4275f5b3a9cb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_2f0ce6625a4158cb011cd6609cb42002ffa972d15d5467d1fc4275f5b3a9cb7a->leave($__internal_2f0ce6625a4158cb011cd6609cb42002ffa972d15d5467d1fc4275f5b3a9cb7a_prof);

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
        return array (  336 => 105,  326 => 100,  323 => 99,  317 => 98,  304 => 86,  298 => 85,  287 => 79,  275 => 70,  263 => 69,  253 => 58,  246 => 55,  243 => 54,  237 => 53,  227 => 41,  223 => 39,  217 => 38,  207 => 44,  205 => 38,  202 => 37,  196 => 36,  182 => 25,  176 => 24,  166 => 17,  160 => 16,  148 => 13,  139 => 107,  137 => 105,  134 => 103,  132 => 98,  126 => 93,  124 => 85,  117 => 80,  115 => 79,  109 => 75,  103 => 70,  101 => 69,  90 => 60,  88 => 53,  81 => 48,  79 => 36,  73 => 33,  69 => 31,  66 => 24,  61 => 21,  57 => 19,  54 => 16,  49 => 13,  36 => 2,  34 => 1,);
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
