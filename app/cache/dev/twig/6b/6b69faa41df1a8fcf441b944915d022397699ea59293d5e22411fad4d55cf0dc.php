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
        $__internal_635ecf35bbee5bbbd017307f173e969a2e52dfefbc122c4fda04f9d00dbcbf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635ecf35bbee5bbbd017307f173e969a2e52dfefbc122c4fda04f9d00dbcbf70->enter($__internal_635ecf35bbee5bbbd017307f173e969a2e52dfefbc122c4fda04f9d00dbcbf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_635ecf35bbee5bbbd017307f173e969a2e52dfefbc122c4fda04f9d00dbcbf70->leave($__internal_635ecf35bbee5bbbd017307f173e969a2e52dfefbc122c4fda04f9d00dbcbf70_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_f77510b08970e31378d88dbdc1153a9693e3006fb164399f6b42ed3684997401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77510b08970e31378d88dbdc1153a9693e3006fb164399f6b42ed3684997401->enter($__internal_f77510b08970e31378d88dbdc1153a9693e3006fb164399f6b42ed3684997401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_f77510b08970e31378d88dbdc1153a9693e3006fb164399f6b42ed3684997401->leave($__internal_f77510b08970e31378d88dbdc1153a9693e3006fb164399f6b42ed3684997401_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54dd5ba8e188c7200e9af9c9bac4a2e2b6d63133aef73edfcf73a56a9cbe4b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dd5ba8e188c7200e9af9c9bac4a2e2b6d63133aef73edfcf73a56a9cbe4b02->enter($__internal_54dd5ba8e188c7200e9af9c9bac4a2e2b6d63133aef73edfcf73a56a9cbe4b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_54dd5ba8e188c7200e9af9c9bac4a2e2b6d63133aef73edfcf73a56a9cbe4b02->leave($__internal_54dd5ba8e188c7200e9af9c9bac4a2e2b6d63133aef73edfcf73a56a9cbe4b02_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_1b9070d1128eefb0e0d4e4b6536c5f1f72361714681f097d1a58d95c73e9db39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9070d1128eefb0e0d4e4b6536c5f1f72361714681f097d1a58d95c73e9db39->enter($__internal_1b9070d1128eefb0e0d4e4b6536c5f1f72361714681f097d1a58d95c73e9db39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_1b9070d1128eefb0e0d4e4b6536c5f1f72361714681f097d1a58d95c73e9db39->leave($__internal_1b9070d1128eefb0e0d4e4b6536c5f1f72361714681f097d1a58d95c73e9db39_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a31765e2c49914701c343944f57ebc7c58a9a905ea8d7b9f34b691b4c8ad6ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31765e2c49914701c343944f57ebc7c58a9a905ea8d7b9f34b691b4c8ad6ce6->enter($__internal_a31765e2c49914701c343944f57ebc7c58a9a905ea8d7b9f34b691b4c8ad6ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_a31765e2c49914701c343944f57ebc7c58a9a905ea8d7b9f34b691b4c8ad6ce6->leave($__internal_a31765e2c49914701c343944f57ebc7c58a9a905ea8d7b9f34b691b4c8ad6ce6_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d2ca0776c04ac71181f37d045c6dceb644114c3b6922c7c2e4a4b60b09741ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2ca0776c04ac71181f37d045c6dceb644114c3b6922c7c2e4a4b60b09741ef->enter($__internal_6d2ca0776c04ac71181f37d045c6dceb644114c3b6922c7c2e4a4b60b09741ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6d2ca0776c04ac71181f37d045c6dceb644114c3b6922c7c2e4a4b60b09741ef->leave($__internal_6d2ca0776c04ac71181f37d045c6dceb644114c3b6922c7c2e4a4b60b09741ef_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_8d51fae8197f83a5d8961bc98d2f4469cda647796f702416d52dc7437352ae58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51fae8197f83a5d8961bc98d2f4469cda647796f702416d52dc7437352ae58->enter($__internal_8d51fae8197f83a5d8961bc98d2f4469cda647796f702416d52dc7437352ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_8d51fae8197f83a5d8961bc98d2f4469cda647796f702416d52dc7437352ae58->leave($__internal_8d51fae8197f83a5d8961bc98d2f4469cda647796f702416d52dc7437352ae58_prof);

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
