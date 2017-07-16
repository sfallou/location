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
        $__internal_6117a6b756adf4e3c546f7601ca1d8fa0f363317a5cf4cb59fc86689fc7e5add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6117a6b756adf4e3c546f7601ca1d8fa0f363317a5cf4cb59fc86689fc7e5add->enter($__internal_6117a6b756adf4e3c546f7601ca1d8fa0f363317a5cf4cb59fc86689fc7e5add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_6117a6b756adf4e3c546f7601ca1d8fa0f363317a5cf4cb59fc86689fc7e5add->leave($__internal_6117a6b756adf4e3c546f7601ca1d8fa0f363317a5cf4cb59fc86689fc7e5add_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_659ca391ff370ab97bf009aa52a706a87192bf6b0f9369eacbdf600ab4f7368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659ca391ff370ab97bf009aa52a706a87192bf6b0f9369eacbdf600ab4f7368f->enter($__internal_659ca391ff370ab97bf009aa52a706a87192bf6b0f9369eacbdf600ab4f7368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_659ca391ff370ab97bf009aa52a706a87192bf6b0f9369eacbdf600ab4f7368f->leave($__internal_659ca391ff370ab97bf009aa52a706a87192bf6b0f9369eacbdf600ab4f7368f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1fa096d2fb27e1d5a88200fcb94f1e677ebdee92b22ca184df5477519ad043b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fa096d2fb27e1d5a88200fcb94f1e677ebdee92b22ca184df5477519ad043b->enter($__internal_e1fa096d2fb27e1d5a88200fcb94f1e677ebdee92b22ca184df5477519ad043b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_e1fa096d2fb27e1d5a88200fcb94f1e677ebdee92b22ca184df5477519ad043b->leave($__internal_e1fa096d2fb27e1d5a88200fcb94f1e677ebdee92b22ca184df5477519ad043b_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_2f981957c79bcc6c199cdf6734c031e32d71b5e71fef09766c4a7e4aefdb9029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f981957c79bcc6c199cdf6734c031e32d71b5e71fef09766c4a7e4aefdb9029->enter($__internal_2f981957c79bcc6c199cdf6734c031e32d71b5e71fef09766c4a7e4aefdb9029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_2f981957c79bcc6c199cdf6734c031e32d71b5e71fef09766c4a7e4aefdb9029->leave($__internal_2f981957c79bcc6c199cdf6734c031e32d71b5e71fef09766c4a7e4aefdb9029_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_bee2cfc7fe3bc7481140791563143517e514e58d541c1dd118fa0736fd0b1e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee2cfc7fe3bc7481140791563143517e514e58d541c1dd118fa0736fd0b1e91->enter($__internal_bee2cfc7fe3bc7481140791563143517e514e58d541c1dd118fa0736fd0b1e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            
        </header>
    ";
        
        $__internal_bee2cfc7fe3bc7481140791563143517e514e58d541c1dd118fa0736fd0b1e91->leave($__internal_bee2cfc7fe3bc7481140791563143517e514e58d541c1dd118fa0736fd0b1e91_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_d680a4e43c52df85215716d3985e055fd84904eab8e3bc8e18b459bdf7c49e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d680a4e43c52df85215716d3985e055fd84904eab8e3bc8e18b459bdf7c49e1d->enter($__internal_d680a4e43c52df85215716d3985e055fd84904eab8e3bc8e18b459bdf7c49e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 41
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_d680a4e43c52df85215716d3985e055fd84904eab8e3bc8e18b459bdf7c49e1d->leave($__internal_d680a4e43c52df85215716d3985e055fd84904eab8e3bc8e18b459bdf7c49e1d_prof);

    }

    // line 53
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_b9f83fadb22e85b950cf4310b90b8341fe4d38a855233a3e380b4c5a9860f58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f83fadb22e85b950cf4310b90b8341fe4d38a855233a3e380b4c5a9860f58c->enter($__internal_b9f83fadb22e85b950cf4310b90b8341fe4d38a855233a3e380b4c5a9860f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_b9f83fadb22e85b950cf4310b90b8341fe4d38a855233a3e380b4c5a9860f58c->leave($__internal_b9f83fadb22e85b950cf4310b90b8341fe4d38a855233a3e380b4c5a9860f58c_prof);

    }

    // line 69
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_44a54562e9e3c78630ca8a34330b21402aa5579575905680249c40b3b0f44b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a54562e9e3c78630ca8a34330b21402aa5579575905680249c40b3b0f44b69->enter($__internal_44a54562e9e3c78630ca8a34330b21402aa5579575905680249c40b3b0f44b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_44a54562e9e3c78630ca8a34330b21402aa5579575905680249c40b3b0f44b69->leave($__internal_44a54562e9e3c78630ca8a34330b21402aa5579575905680249c40b3b0f44b69_prof);

    }

    // line 70
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_81f89159a59678db8f92b665d629a19afa70eb3592893bdfc66da27fa27be00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f89159a59678db8f92b665d629a19afa70eb3592893bdfc66da27fa27be00a->enter($__internal_81f89159a59678db8f92b665d629a19afa70eb3592893bdfc66da27fa27be00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_81f89159a59678db8f92b665d629a19afa70eb3592893bdfc66da27fa27be00a->leave($__internal_81f89159a59678db8f92b665d629a19afa70eb3592893bdfc66da27fa27be00a_prof);

    }

    // line 79
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_97791aebb317d9a6c9a6dbdb08dc77295f76f71da3d678b8822ff721c0f75053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97791aebb317d9a6c9a6dbdb08dc77295f76f71da3d678b8822ff721c0f75053->enter($__internal_97791aebb317d9a6c9a6dbdb08dc77295f76f71da3d678b8822ff721c0f75053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_97791aebb317d9a6c9a6dbdb08dc77295f76f71da3d678b8822ff721c0f75053->leave($__internal_97791aebb317d9a6c9a6dbdb08dc77295f76f71da3d678b8822ff721c0f75053_prof);

    }

    // line 85
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_9e2909148ea72fc950a544180982dc6f1f5e04256ba32852f542b30673bac92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2909148ea72fc950a544180982dc6f1f5e04256ba32852f542b30673bac92d->enter($__internal_9e2909148ea72fc950a544180982dc6f1f5e04256ba32852f542b30673bac92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 86
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href=\"#\">Sfallou Ndiaye</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_9e2909148ea72fc950a544180982dc6f1f5e04256ba32852f542b30673bac92d->leave($__internal_9e2909148ea72fc950a544180982dc6f1f5e04256ba32852f542b30673bac92d_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d789b5bd0e0d1dda33d7d65769f7eb49d3d817a95521dfbc983d93ee94c8f1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d789b5bd0e0d1dda33d7d65769f7eb49d3d817a95521dfbc983d93ee94c8f1b9->enter($__internal_d789b5bd0e0d1dda33d7d65769f7eb49d3d817a95521dfbc983d93ee94c8f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_d789b5bd0e0d1dda33d7d65769f7eb49d3d817a95521dfbc983d93ee94c8f1b9->leave($__internal_d789b5bd0e0d1dda33d7d65769f7eb49d3d817a95521dfbc983d93ee94c8f1b9_prof);

    }

    // line 105
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_ea9ff57f4c1443f48f4d9668ef92c5065fbb40a9d1a67404bdc617e4b82ddba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9ff57f4c1443f48f4d9668ef92c5065fbb40a9d1a67404bdc617e4b82ddba0->enter($__internal_ea9ff57f4c1443f48f4d9668ef92c5065fbb40a9d1a67404bdc617e4b82ddba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_ea9ff57f4c1443f48f4d9668ef92c5065fbb40a9d1a67404bdc617e4b82ddba0->leave($__internal_ea9ff57f4c1443f48f4d9668ef92c5065fbb40a9d1a67404bdc617e4b82ddba0_prof);

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
