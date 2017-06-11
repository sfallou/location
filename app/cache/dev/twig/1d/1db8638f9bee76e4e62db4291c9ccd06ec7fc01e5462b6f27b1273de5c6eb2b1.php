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
        $__internal_40508e39ad02c7a8c0094ac8d52404b6ff32420aa0ac3090522cb2d9e3d24890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40508e39ad02c7a8c0094ac8d52404b6ff32420aa0ac3090522cb2d9e3d24890->enter($__internal_40508e39ad02c7a8c0094ac8d52404b6ff32420aa0ac3090522cb2d9e3d24890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_40508e39ad02c7a8c0094ac8d52404b6ff32420aa0ac3090522cb2d9e3d24890->leave($__internal_40508e39ad02c7a8c0094ac8d52404b6ff32420aa0ac3090522cb2d9e3d24890_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_439754dd68c0cee8c1be62e291aae630bba9cdeb625fee1e519fb71f120423e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439754dd68c0cee8c1be62e291aae630bba9cdeb625fee1e519fb71f120423e0->enter($__internal_439754dd68c0cee8c1be62e291aae630bba9cdeb625fee1e519fb71f120423e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_439754dd68c0cee8c1be62e291aae630bba9cdeb625fee1e519fb71f120423e0->leave($__internal_439754dd68c0cee8c1be62e291aae630bba9cdeb625fee1e519fb71f120423e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_040ef8a4c0399d7dbc9a13424e18c883239cd75719fa18529e4e992ec4b84411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040ef8a4c0399d7dbc9a13424e18c883239cd75719fa18529e4e992ec4b84411->enter($__internal_040ef8a4c0399d7dbc9a13424e18c883239cd75719fa18529e4e992ec4b84411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_040ef8a4c0399d7dbc9a13424e18c883239cd75719fa18529e4e992ec4b84411->leave($__internal_040ef8a4c0399d7dbc9a13424e18c883239cd75719fa18529e4e992ec4b84411_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_04b855b154e04e2fc194598d2f9016de0fcfa04de92dbb51af78f04af8cc7a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b855b154e04e2fc194598d2f9016de0fcfa04de92dbb51af78f04af8cc7a8a->enter($__internal_04b855b154e04e2fc194598d2f9016de0fcfa04de92dbb51af78f04af8cc7a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04b855b154e04e2fc194598d2f9016de0fcfa04de92dbb51af78f04af8cc7a8a->leave($__internal_04b855b154e04e2fc194598d2f9016de0fcfa04de92dbb51af78f04af8cc7a8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca829a0465de12ef933cb45a1bc8e64ba72370d76926ff3c5082bb5b2cfe4416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca829a0465de12ef933cb45a1bc8e64ba72370d76926ff3c5082bb5b2cfe4416->enter($__internal_ca829a0465de12ef933cb45a1bc8e64ba72370d76926ff3c5082bb5b2cfe4416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca829a0465de12ef933cb45a1bc8e64ba72370d76926ff3c5082bb5b2cfe4416->leave($__internal_ca829a0465de12ef933cb45a1bc8e64ba72370d76926ff3c5082bb5b2cfe4416_prof);

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
