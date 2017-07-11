<?php

/* base.html.twig */
class __TwigTemplate_2914c7278f539b7b8f442108ef749fbdbe1ad93fab00ea325b08fbc3fe5a548e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d89df90866bca799cf4c71d4b74274f67c4761f61f703e95c203aa5f48f84419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89df90866bca799cf4c71d4b74274f67c4761f61f703e95c203aa5f48f84419->enter($__internal_d89df90866bca799cf4c71d4b74274f67c4761f61f703e95c203aa5f48f84419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d89df90866bca799cf4c71d4b74274f67c4761f61f703e95c203aa5f48f84419->leave($__internal_d89df90866bca799cf4c71d4b74274f67c4761f61f703e95c203aa5f48f84419_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca6ee6b4edb52a3861387cd5de0cc6a13e25f87f77db1053f9b929fbf22fb49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6ee6b4edb52a3861387cd5de0cc6a13e25f87f77db1053f9b929fbf22fb49a->enter($__internal_ca6ee6b4edb52a3861387cd5de0cc6a13e25f87f77db1053f9b929fbf22fb49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca6ee6b4edb52a3861387cd5de0cc6a13e25f87f77db1053f9b929fbf22fb49a->leave($__internal_ca6ee6b4edb52a3861387cd5de0cc6a13e25f87f77db1053f9b929fbf22fb49a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85a6e2987f736e79777526e7aaaf9e003fa7894957872660ec1e004e37b1e295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a6e2987f736e79777526e7aaaf9e003fa7894957872660ec1e004e37b1e295->enter($__internal_85a6e2987f736e79777526e7aaaf9e003fa7894957872660ec1e004e37b1e295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85a6e2987f736e79777526e7aaaf9e003fa7894957872660ec1e004e37b1e295->leave($__internal_85a6e2987f736e79777526e7aaaf9e003fa7894957872660ec1e004e37b1e295_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb191c9cf55d0191a974ff6e48c1e9f3c8a9909ac8e73179e5a0ecbdeaf787c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb191c9cf55d0191a974ff6e48c1e9f3c8a9909ac8e73179e5a0ecbdeaf787c8->enter($__internal_bb191c9cf55d0191a974ff6e48c1e9f3c8a9909ac8e73179e5a0ecbdeaf787c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb191c9cf55d0191a974ff6e48c1e9f3c8a9909ac8e73179e5a0ecbdeaf787c8->leave($__internal_bb191c9cf55d0191a974ff6e48c1e9f3c8a9909ac8e73179e5a0ecbdeaf787c8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6d4609e01f07b0de67749da68516dff63a5eaf1374216a39c3bc8330f3fa776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d4609e01f07b0de67749da68516dff63a5eaf1374216a39c3bc8330f3fa776->enter($__internal_a6d4609e01f07b0de67749da68516dff63a5eaf1374216a39c3bc8330f3fa776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6d4609e01f07b0de67749da68516dff63a5eaf1374216a39c3bc8330f3fa776->leave($__internal_a6d4609e01f07b0de67749da68516dff63a5eaf1374216a39c3bc8330f3fa776_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/base.html.twig");
    }
}
