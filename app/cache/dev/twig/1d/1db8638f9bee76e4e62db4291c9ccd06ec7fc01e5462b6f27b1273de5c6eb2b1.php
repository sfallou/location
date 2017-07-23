<?php

/* ::base.html.twig */
class __TwigTemplate_48f3c02fdc4fd85bff6825389d5e8ad1680ecf5c4ae3a8fa394571f39033e1b1 extends Twig_Template
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
        $__internal_a04a46ec384c62c16a60c2ae6cd23a2349dbba22124011e52339cf264fbda884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04a46ec384c62c16a60c2ae6cd23a2349dbba22124011e52339cf264fbda884->enter($__internal_a04a46ec384c62c16a60c2ae6cd23a2349dbba22124011e52339cf264fbda884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a04a46ec384c62c16a60c2ae6cd23a2349dbba22124011e52339cf264fbda884->leave($__internal_a04a46ec384c62c16a60c2ae6cd23a2349dbba22124011e52339cf264fbda884_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_137f08495c5c4c8ad57eeef3a8e4fac2746fd9a191d8c3c83c507fe759fd9f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137f08495c5c4c8ad57eeef3a8e4fac2746fd9a191d8c3c83c507fe759fd9f0e->enter($__internal_137f08495c5c4c8ad57eeef3a8e4fac2746fd9a191d8c3c83c507fe759fd9f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_137f08495c5c4c8ad57eeef3a8e4fac2746fd9a191d8c3c83c507fe759fd9f0e->leave($__internal_137f08495c5c4c8ad57eeef3a8e4fac2746fd9a191d8c3c83c507fe759fd9f0e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35d8124e0ecfa34caf7b3f99ba314d260ebac65419fc6d098810cb96d1f8b4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d8124e0ecfa34caf7b3f99ba314d260ebac65419fc6d098810cb96d1f8b4e5->enter($__internal_35d8124e0ecfa34caf7b3f99ba314d260ebac65419fc6d098810cb96d1f8b4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35d8124e0ecfa34caf7b3f99ba314d260ebac65419fc6d098810cb96d1f8b4e5->leave($__internal_35d8124e0ecfa34caf7b3f99ba314d260ebac65419fc6d098810cb96d1f8b4e5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23e35453e8e010f40b195f1effe7c9c8a9d6b796d5a8ad243538a2678e72b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23e35453e8e010f40b195f1effe7c9c8a9d6b796d5a8ad243538a2678e72b05->enter($__internal_b23e35453e8e010f40b195f1effe7c9c8a9d6b796d5a8ad243538a2678e72b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b23e35453e8e010f40b195f1effe7c9c8a9d6b796d5a8ad243538a2678e72b05->leave($__internal_b23e35453e8e010f40b195f1effe7c9c8a9d6b796d5a8ad243538a2678e72b05_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b9ac5a4fa4fa196ff2a8266b836c65368d1d52faa61221fba7f89103368f5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9ac5a4fa4fa196ff2a8266b836c65368d1d52faa61221fba7f89103368f5f5->enter($__internal_1b9ac5a4fa4fa196ff2a8266b836c65368d1d52faa61221fba7f89103368f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b9ac5a4fa4fa196ff2a8266b836c65368d1d52faa61221fba7f89103368f5f5->leave($__internal_1b9ac5a4fa4fa196ff2a8266b836c65368d1d52faa61221fba7f89103368f5f5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/base.html.twig");
    }
}
