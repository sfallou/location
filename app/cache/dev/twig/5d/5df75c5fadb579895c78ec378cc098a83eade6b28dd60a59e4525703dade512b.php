<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_e06b3f380f70b72a9d54703cf0d977401553f07528026824a1667f6058a7e5fc extends Twig_Template
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
        $__internal_869aeb3549670c04ff18e880fa282b14101241a0c9d1ef015c7e6e0bdb218d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869aeb3549670c04ff18e880fa282b14101241a0c9d1ef015c7e6e0bdb218d0a->enter($__internal_869aeb3549670c04ff18e880fa282b14101241a0c9d1ef015c7e6e0bdb218d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_869aeb3549670c04ff18e880fa282b14101241a0c9d1ef015c7e6e0bdb218d0a->leave($__internal_869aeb3549670c04ff18e880fa282b14101241a0c9d1ef015c7e6e0bdb218d0a_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_f48dcee2763d7eb11968ebf6e205392fb01ec9f32f339f188c3a26093aa153ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48dcee2763d7eb11968ebf6e205392fb01ec9f32f339f188c3a26093aa153ea->enter($__internal_f48dcee2763d7eb11968ebf6e205392fb01ec9f32f339f188c3a26093aa153ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_f48dcee2763d7eb11968ebf6e205392fb01ec9f32f339f188c3a26093aa153ea->leave($__internal_f48dcee2763d7eb11968ebf6e205392fb01ec9f32f339f188c3a26093aa153ea_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d437caf17420765bc2f12a66faf2dfc1f8d4df6c53391c5272fc8d386e32c6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d437caf17420765bc2f12a66faf2dfc1f8d4df6c53391c5272fc8d386e32c6ed->enter($__internal_d437caf17420765bc2f12a66faf2dfc1f8d4df6c53391c5272fc8d386e32c6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_d437caf17420765bc2f12a66faf2dfc1f8d4df6c53391c5272fc8d386e32c6ed->leave($__internal_d437caf17420765bc2f12a66faf2dfc1f8d4df6c53391c5272fc8d386e32c6ed_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_1bc2041132df7bc83aeae1405150e8c977ef97cbd18df3eb9dd053fc7fdee57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc2041132df7bc83aeae1405150e8c977ef97cbd18df3eb9dd053fc7fdee57d->enter($__internal_1bc2041132df7bc83aeae1405150e8c977ef97cbd18df3eb9dd053fc7fdee57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_1bc2041132df7bc83aeae1405150e8c977ef97cbd18df3eb9dd053fc7fdee57d->leave($__internal_1bc2041132df7bc83aeae1405150e8c977ef97cbd18df3eb9dd053fc7fdee57d_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_bdedde3b2f6b82146f3deb3df1288deef89f3980a0f28110a6ec59b7b64a0080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdedde3b2f6b82146f3deb3df1288deef89f3980a0f28110a6ec59b7b64a0080->enter($__internal_bdedde3b2f6b82146f3deb3df1288deef89f3980a0f28110a6ec59b7b64a0080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_bdedde3b2f6b82146f3deb3df1288deef89f3980a0f28110a6ec59b7b64a0080->leave($__internal_bdedde3b2f6b82146f3deb3df1288deef89f3980a0f28110a6ec59b7b64a0080_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0882d9da253ea902c4b9af1b4ec4527cd378831f1a3416ac106bfcf2b7e9ecd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0882d9da253ea902c4b9af1b4ec4527cd378831f1a3416ac106bfcf2b7e9ecd6->enter($__internal_0882d9da253ea902c4b9af1b4ec4527cd378831f1a3416ac106bfcf2b7e9ecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0882d9da253ea902c4b9af1b4ec4527cd378831f1a3416ac106bfcf2b7e9ecd6->leave($__internal_0882d9da253ea902c4b9af1b4ec4527cd378831f1a3416ac106bfcf2b7e9ecd6_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_ca4c6b57d44e8ec2bccea59f8676ec95acdb527767ab27703bcb883721236669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4c6b57d44e8ec2bccea59f8676ec95acdb527767ab27703bcb883721236669->enter($__internal_ca4c6b57d44e8ec2bccea59f8676ec95acdb527767ab27703bcb883721236669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_ca4c6b57d44e8ec2bccea59f8676ec95acdb527767ab27703bcb883721236669->leave($__internal_ca4c6b57d44e8ec2bccea59f8676ec95acdb527767ab27703bcb883721236669_prof);

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
