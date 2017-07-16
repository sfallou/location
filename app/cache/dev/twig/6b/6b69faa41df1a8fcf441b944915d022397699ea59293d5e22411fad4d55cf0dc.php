<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_ff0a23be9f5ab4f147fdf8ed2372edf1c673585240f148200bddbcc111ea16f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_966267c9e00ddf3d75f47e83bef3374806696e94eef1e42b5f7350f05d0d0bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966267c9e00ddf3d75f47e83bef3374806696e94eef1e42b5f7350f05d0d0bfa->enter($__internal_966267c9e00ddf3d75f47e83bef3374806696e94eef1e42b5f7350f05d0d0bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", 1);
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
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_966267c9e00ddf3d75f47e83bef3374806696e94eef1e42b5f7350f05d0d0bfa->leave($__internal_966267c9e00ddf3d75f47e83bef3374806696e94eef1e42b5f7350f05d0d0bfa_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_40af2bb9e131e5b5986515a7da2299f7a480c6285e04a8ae103e2b9fc4a8535f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40af2bb9e131e5b5986515a7da2299f7a480c6285e04a8ae103e2b9fc4a8535f->enter($__internal_40af2bb9e131e5b5986515a7da2299f7a480c6285e04a8ae103e2b9fc4a8535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_40af2bb9e131e5b5986515a7da2299f7a480c6285e04a8ae103e2b9fc4a8535f->leave($__internal_40af2bb9e131e5b5986515a7da2299f7a480c6285e04a8ae103e2b9fc4a8535f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fd3eae49d54425030b43b0d4d0b0a0119694b2f0022b5546009a9cdc7daa1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd3eae49d54425030b43b0d4d0b0a0119694b2f0022b5546009a9cdc7daa1e3->enter($__internal_9fd3eae49d54425030b43b0d4d0b0a0119694b2f0022b5546009a9cdc7daa1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_9fd3eae49d54425030b43b0d4d0b0a0119694b2f0022b5546009a9cdc7daa1e3->leave($__internal_9fd3eae49d54425030b43b0d4d0b0a0119694b2f0022b5546009a9cdc7daa1e3_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_94b8dafd2fb0232efe28448c685d95d15367ddafb195be465de5d6a744879744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b8dafd2fb0232efe28448c685d95d15367ddafb195be465de5d6a744879744->enter($__internal_94b8dafd2fb0232efe28448c685d95d15367ddafb195be465de5d6a744879744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_94b8dafd2fb0232efe28448c685d95d15367ddafb195be465de5d6a744879744->leave($__internal_94b8dafd2fb0232efe28448c685d95d15367ddafb195be465de5d6a744879744_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c3ad815000b9f5c5da0f7da38acec285b1594bcbdda40ede733956c7dbcec992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ad815000b9f5c5da0f7da38acec285b1594bcbdda40ede733956c7dbcec992->enter($__internal_c3ad815000b9f5c5da0f7da38acec285b1594bcbdda40ede733956c7dbcec992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_c3ad815000b9f5c5da0f7da38acec285b1594bcbdda40ede733956c7dbcec992->leave($__internal_c3ad815000b9f5c5da0f7da38acec285b1594bcbdda40ede733956c7dbcec992_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1271fa8fcc2f372e0c1674e96e95e7305d2baa2303efd88959076d9fd69ee6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271fa8fcc2f372e0c1674e96e95e7305d2baa2303efd88959076d9fd69ee6ce->enter($__internal_1271fa8fcc2f372e0c1674e96e95e7305d2baa2303efd88959076d9fd69ee6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1271fa8fcc2f372e0c1674e96e95e7305d2baa2303efd88959076d9fd69ee6ce->leave($__internal_1271fa8fcc2f372e0c1674e96e95e7305d2baa2303efd88959076d9fd69ee6ce_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a1c307b862ab692b05d6d04404b749c6e446a09d98a7e8a0e03586a7170adfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c307b862ab692b05d6d04404b749c6e446a09d98a7e8a0e03586a7170adfaa->enter($__internal_a1c307b862ab692b05d6d04404b749c6e446a09d98a7e8a0e03586a7170adfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_a1c307b862ab692b05d6d04404b749c6e446a09d98a7e8a0e03586a7170adfaa->leave($__internal_a1c307b862ab692b05d6d04404b749c6e446a09d98a7e8a0e03586a7170adfaa_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 43,  155 => 39,  149 => 38,  138 => 34,  124 => 25,  118 => 24,  108 => 17,  102 => 16,  90 => 13,  81 => 45,  79 => 43,  76 => 41,  74 => 38,  70 => 35,  68 => 34,  63 => 31,  60 => 24,  55 => 21,  51 => 19,  48 => 16,  43 => 13,  30 => 2,  28 => 1,);
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
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"login-page\">
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/layout/login-layout.html.twig");
    }
}
