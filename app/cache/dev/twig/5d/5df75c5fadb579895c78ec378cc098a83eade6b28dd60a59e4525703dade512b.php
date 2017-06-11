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
        $__internal_1fc7bcce35e4a937dbd326c7aa9bee2e4af092f0357857a1b327c4ed64c10127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc7bcce35e4a937dbd326c7aa9bee2e4af092f0357857a1b327c4ed64c10127->enter($__internal_1fc7bcce35e4a937dbd326c7aa9bee2e4af092f0357857a1b327c4ed64c10127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_1fc7bcce35e4a937dbd326c7aa9bee2e4af092f0357857a1b327c4ed64c10127->leave($__internal_1fc7bcce35e4a937dbd326c7aa9bee2e4af092f0357857a1b327c4ed64c10127_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1f20b9d20424ed19b556ca7ffc6aaae34b6d0d92e87b3e818f472452c22813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1f20b9d20424ed19b556ca7ffc6aaae34b6d0d92e87b3e818f472452c22813->enter($__internal_1f1f20b9d20424ed19b556ca7ffc6aaae34b6d0d92e87b3e818f472452c22813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_1f1f20b9d20424ed19b556ca7ffc6aaae34b6d0d92e87b3e818f472452c22813->leave($__internal_1f1f20b9d20424ed19b556ca7ffc6aaae34b6d0d92e87b3e818f472452c22813_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86d9071d3ceba59cee9f24db0c782e902d0f438658a8a6c56e335604a9b61e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d9071d3ceba59cee9f24db0c782e902d0f438658a8a6c56e335604a9b61e1b->enter($__internal_86d9071d3ceba59cee9f24db0c782e902d0f438658a8a6c56e335604a9b61e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_86d9071d3ceba59cee9f24db0c782e902d0f438658a8a6c56e335604a9b61e1b->leave($__internal_86d9071d3ceba59cee9f24db0c782e902d0f438658a8a6c56e335604a9b61e1b_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_a9562f8eb8a0473ceb2d11a9a6d950cefd9a554d0ba8fc1ae0dd879e00c8fecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9562f8eb8a0473ceb2d11a9a6d950cefd9a554d0ba8fc1ae0dd879e00c8fecd->enter($__internal_a9562f8eb8a0473ceb2d11a9a6d950cefd9a554d0ba8fc1ae0dd879e00c8fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_a9562f8eb8a0473ceb2d11a9a6d950cefd9a554d0ba8fc1ae0dd879e00c8fecd->leave($__internal_a9562f8eb8a0473ceb2d11a9a6d950cefd9a554d0ba8fc1ae0dd879e00c8fecd_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_74ce65738e2197700e86cf35be4ef2c9a4cfba469d2eec386c4d575af3765ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ce65738e2197700e86cf35be4ef2c9a4cfba469d2eec386c4d575af3765ccd->enter($__internal_74ce65738e2197700e86cf35be4ef2c9a4cfba469d2eec386c4d575af3765ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_74ce65738e2197700e86cf35be4ef2c9a4cfba469d2eec386c4d575af3765ccd->leave($__internal_74ce65738e2197700e86cf35be4ef2c9a4cfba469d2eec386c4d575af3765ccd_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77225d72eefc8e410c95d0fcef6b0409d159de0e9a17be5ceb6bec4c7ecfa358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77225d72eefc8e410c95d0fcef6b0409d159de0e9a17be5ceb6bec4c7ecfa358->enter($__internal_77225d72eefc8e410c95d0fcef6b0409d159de0e9a17be5ceb6bec4c7ecfa358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_77225d72eefc8e410c95d0fcef6b0409d159de0e9a17be5ceb6bec4c7ecfa358->leave($__internal_77225d72eefc8e410c95d0fcef6b0409d159de0e9a17be5ceb6bec4c7ecfa358_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_48839cd2324d7fc2714d47b2eb65769bc97a52fc7ece41a07c680ffd34e09948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48839cd2324d7fc2714d47b2eb65769bc97a52fc7ece41a07c680ffd34e09948->enter($__internal_48839cd2324d7fc2714d47b2eb65769bc97a52fc7ece41a07c680ffd34e09948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_48839cd2324d7fc2714d47b2eb65769bc97a52fc7ece41a07c680ffd34e09948->leave($__internal_48839cd2324d7fc2714d47b2eb65769bc97a52fc7ece41a07c680ffd34e09948_prof);

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
