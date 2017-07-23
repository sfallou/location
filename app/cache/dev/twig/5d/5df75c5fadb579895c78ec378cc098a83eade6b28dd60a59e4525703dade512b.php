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
        $__internal_7f3c68b4d2d338403bc07c381abe7678942f2761d172ba7cbf1ea0b196c6b4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c68b4d2d338403bc07c381abe7678942f2761d172ba7cbf1ea0b196c6b4e7->enter($__internal_7f3c68b4d2d338403bc07c381abe7678942f2761d172ba7cbf1ea0b196c6b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_7f3c68b4d2d338403bc07c381abe7678942f2761d172ba7cbf1ea0b196c6b4e7->leave($__internal_7f3c68b4d2d338403bc07c381abe7678942f2761d172ba7cbf1ea0b196c6b4e7_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_faff2326abc4364361386e0d8c35672908e91b36fd9a6d4f9209729d6c89cfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faff2326abc4364361386e0d8c35672908e91b36fd9a6d4f9209729d6c89cfc8->enter($__internal_faff2326abc4364361386e0d8c35672908e91b36fd9a6d4f9209729d6c89cfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kokou Colocation";
        
        $__internal_faff2326abc4364361386e0d8c35672908e91b36fd9a6d4f9209729d6c89cfc8->leave($__internal_faff2326abc4364361386e0d8c35672908e91b36fd9a6d4f9209729d6c89cfc8_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5db3b5193523e0de73f36459fb92f5c6852d2ccff43b47f6e2508da3e961ce76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3b5193523e0de73f36459fb92f5c6852d2ccff43b47f6e2508da3e961ce76->enter($__internal_5db3b5193523e0de73f36459fb92f5c6852d2ccff43b47f6e2508da3e961ce76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_5db3b5193523e0de73f36459fb92f5c6852d2ccff43b47f6e2508da3e961ce76->leave($__internal_5db3b5193523e0de73f36459fb92f5c6852d2ccff43b47f6e2508da3e961ce76_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_3b9ec434091a737c9cb41ad36fd366efaa9d90354ed5afc7055d6914e46d9b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9ec434091a737c9cb41ad36fd366efaa9d90354ed5afc7055d6914e46d9b42->enter($__internal_3b9ec434091a737c9cb41ad36fd366efaa9d90354ed5afc7055d6914e46d9b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_3b9ec434091a737c9cb41ad36fd366efaa9d90354ed5afc7055d6914e46d9b42->leave($__internal_3b9ec434091a737c9cb41ad36fd366efaa9d90354ed5afc7055d6914e46d9b42_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ffabae63c8ae336bc2e01f047bdf5c865c4eb5fc817af2cb0f5c5e63959ba702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffabae63c8ae336bc2e01f047bdf5c865c4eb5fc817af2cb0f5c5e63959ba702->enter($__internal_ffabae63c8ae336bc2e01f047bdf5c865c4eb5fc817af2cb0f5c5e63959ba702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_ffabae63c8ae336bc2e01f047bdf5c865c4eb5fc817af2cb0f5c5e63959ba702->leave($__internal_ffabae63c8ae336bc2e01f047bdf5c865c4eb5fc817af2cb0f5c5e63959ba702_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54053a36a79af584c95e4e1549833abd0a3f2ca7fabf5a709da665f31e1e7fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54053a36a79af584c95e4e1549833abd0a3f2ca7fabf5a709da665f31e1e7fd5->enter($__internal_54053a36a79af584c95e4e1549833abd0a3f2ca7fabf5a709da665f31e1e7fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_54053a36a79af584c95e4e1549833abd0a3f2ca7fabf5a709da665f31e1e7fd5->leave($__internal_54053a36a79af584c95e4e1549833abd0a3f2ca7fabf5a709da665f31e1e7fd5_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_5700e7540d12f80f9d8bb762f7bf2fc7eba98b204f6da6fc8ded473afd4807da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5700e7540d12f80f9d8bb762f7bf2fc7eba98b204f6da6fc8ded473afd4807da->enter($__internal_5700e7540d12f80f9d8bb762f7bf2fc7eba98b204f6da6fc8ded473afd4807da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_5700e7540d12f80f9d8bb762f7bf2fc7eba98b204f6da6fc8ded473afd4807da->leave($__internal_5700e7540d12f80f9d8bb762f7bf2fc7eba98b204f6da6fc8ded473afd4807da_prof);

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
