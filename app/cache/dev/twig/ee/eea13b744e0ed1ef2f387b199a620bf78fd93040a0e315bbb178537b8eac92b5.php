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
        $__internal_85a70ed5d4f1bab302fa6cf82fdb2a1fb7265f5035934772a301c4ae878c1ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a70ed5d4f1bab302fa6cf82fdb2a1fb7265f5035934772a301c4ae878c1ba1->enter($__internal_85a70ed5d4f1bab302fa6cf82fdb2a1fb7265f5035934772a301c4ae878c1ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_85a70ed5d4f1bab302fa6cf82fdb2a1fb7265f5035934772a301c4ae878c1ba1->leave($__internal_85a70ed5d4f1bab302fa6cf82fdb2a1fb7265f5035934772a301c4ae878c1ba1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5df47dfd301609057d4972fb39983c2edb739436c569809bc0daf96a506d10ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df47dfd301609057d4972fb39983c2edb739436c569809bc0daf96a506d10ef->enter($__internal_5df47dfd301609057d4972fb39983c2edb739436c569809bc0daf96a506d10ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5df47dfd301609057d4972fb39983c2edb739436c569809bc0daf96a506d10ef->leave($__internal_5df47dfd301609057d4972fb39983c2edb739436c569809bc0daf96a506d10ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09e8a737b8df1e2e89c6ba1a5ed1ecfe7a23723cfa286affcb29a9bc5ca07bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e8a737b8df1e2e89c6ba1a5ed1ecfe7a23723cfa286affcb29a9bc5ca07bce->enter($__internal_09e8a737b8df1e2e89c6ba1a5ed1ecfe7a23723cfa286affcb29a9bc5ca07bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_09e8a737b8df1e2e89c6ba1a5ed1ecfe7a23723cfa286affcb29a9bc5ca07bce->leave($__internal_09e8a737b8df1e2e89c6ba1a5ed1ecfe7a23723cfa286affcb29a9bc5ca07bce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8628084ede6f5068ab378057d98d7cd5f647feaa1a31504143687419a7721dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8628084ede6f5068ab378057d98d7cd5f647feaa1a31504143687419a7721dea->enter($__internal_8628084ede6f5068ab378057d98d7cd5f647feaa1a31504143687419a7721dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8628084ede6f5068ab378057d98d7cd5f647feaa1a31504143687419a7721dea->leave($__internal_8628084ede6f5068ab378057d98d7cd5f647feaa1a31504143687419a7721dea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb6491fffacc7c7f2cafa4a122282f5d06278241e516016cef76008ecad72155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6491fffacc7c7f2cafa4a122282f5d06278241e516016cef76008ecad72155->enter($__internal_bb6491fffacc7c7f2cafa4a122282f5d06278241e516016cef76008ecad72155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb6491fffacc7c7f2cafa4a122282f5d06278241e516016cef76008ecad72155->leave($__internal_bb6491fffacc7c7f2cafa4a122282f5d06278241e516016cef76008ecad72155_prof);

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
