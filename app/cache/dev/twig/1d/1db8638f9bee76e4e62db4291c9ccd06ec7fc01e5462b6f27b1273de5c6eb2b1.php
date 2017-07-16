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
        $__internal_550f4f62bebc78d72be37522e67566586fcd4260979e247cd6a100b5c09729a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550f4f62bebc78d72be37522e67566586fcd4260979e247cd6a100b5c09729a6->enter($__internal_550f4f62bebc78d72be37522e67566586fcd4260979e247cd6a100b5c09729a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_550f4f62bebc78d72be37522e67566586fcd4260979e247cd6a100b5c09729a6->leave($__internal_550f4f62bebc78d72be37522e67566586fcd4260979e247cd6a100b5c09729a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1beaf167ec05943b3720a3cac6767fb9e221811c49d284fc3b237bd78f7b24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1beaf167ec05943b3720a3cac6767fb9e221811c49d284fc3b237bd78f7b24d->enter($__internal_a1beaf167ec05943b3720a3cac6767fb9e221811c49d284fc3b237bd78f7b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1beaf167ec05943b3720a3cac6767fb9e221811c49d284fc3b237bd78f7b24d->leave($__internal_a1beaf167ec05943b3720a3cac6767fb9e221811c49d284fc3b237bd78f7b24d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4abf51983d5363b955bd25b4cdd1621de38d5eb92f5b04b4163f38411e124e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abf51983d5363b955bd25b4cdd1621de38d5eb92f5b04b4163f38411e124e34->enter($__internal_4abf51983d5363b955bd25b4cdd1621de38d5eb92f5b04b4163f38411e124e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4abf51983d5363b955bd25b4cdd1621de38d5eb92f5b04b4163f38411e124e34->leave($__internal_4abf51983d5363b955bd25b4cdd1621de38d5eb92f5b04b4163f38411e124e34_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_222574547da1273ae8491fffc8a94ad9c9288ea34265faf047289649d8882aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222574547da1273ae8491fffc8a94ad9c9288ea34265faf047289649d8882aa4->enter($__internal_222574547da1273ae8491fffc8a94ad9c9288ea34265faf047289649d8882aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_222574547da1273ae8491fffc8a94ad9c9288ea34265faf047289649d8882aa4->leave($__internal_222574547da1273ae8491fffc8a94ad9c9288ea34265faf047289649d8882aa4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2c9fc0eca7de76f60c7f703d61fcdc66b14247858550c57b35671d3561ecfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c9fc0eca7de76f60c7f703d61fcdc66b14247858550c57b35671d3561ecfab->enter($__internal_a2c9fc0eca7de76f60c7f703d61fcdc66b14247858550c57b35671d3561ecfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2c9fc0eca7de76f60c7f703d61fcdc66b14247858550c57b35671d3561ecfab->leave($__internal_a2c9fc0eca7de76f60c7f703d61fcdc66b14247858550c57b35671d3561ecfab_prof);

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
