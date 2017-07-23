<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_f166dc2c0772ee6c3664e6c77ed81a35a7e31d9817035ccce55ddb1c0923cfe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a4883ff968a86dddc099794c0fd317eb5f80863de520ec093f21d77e651083f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4883ff968a86dddc099794c0fd317eb5f80863de520ec093f21d77e651083f->enter($__internal_7a4883ff968a86dddc099794c0fd317eb5f80863de520ec093f21d77e651083f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4883ff968a86dddc099794c0fd317eb5f80863de520ec093f21d77e651083f->leave($__internal_7a4883ff968a86dddc099794c0fd317eb5f80863de520ec093f21d77e651083f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d92f7df0f67766db1ffe2deda1cce93bf3bb2e9e8fe5493d29b9461dc4bc008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92f7df0f67766db1ffe2deda1cce93bf3bb2e9e8fe5493d29b9461dc4bc008b->enter($__internal_d92f7df0f67766db1ffe2deda1cce93bf3bb2e9e8fe5493d29b9461dc4bc008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d92f7df0f67766db1ffe2deda1cce93bf3bb2e9e8fe5493d29b9461dc4bc008b->leave($__internal_d92f7df0f67766db1ffe2deda1cce93bf3bb2e9e8fe5493d29b9461dc4bc008b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61c0e5ac471e819906587874caed4aa47f1e7e1b2728d520127fbd30c8471a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c0e5ac471e819906587874caed4aa47f1e7e1b2728d520127fbd30c8471a95->enter($__internal_61c0e5ac471e819906587874caed4aa47f1e7e1b2728d520127fbd30c8471a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_61c0e5ac471e819906587874caed4aa47f1e7e1b2728d520127fbd30c8471a95->leave($__internal_61c0e5ac471e819906587874caed4aa47f1e7e1b2728d520127fbd30c8471a95_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9872d0bf9c892052f57b9a9a2ba9c38bb5353764ee8d272987e067ea350171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9872d0bf9c892052f57b9a9a2ba9c38bb5353764ee8d272987e067ea350171->enter($__internal_9f9872d0bf9c892052f57b9a9a2ba9c38bb5353764ee8d272987e067ea350171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9f9872d0bf9c892052f57b9a9a2ba9c38bb5353764ee8d272987e067ea350171->leave($__internal_9f9872d0bf9c892052f57b9a9a2ba9c38bb5353764ee8d272987e067ea350171_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c4a2e9165fb5dd78d893610c532f617ebf00c9cc60be6b0c841ea474b081e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4a2e9165fb5dd78d893610c532f617ebf00c9cc60be6b0c841ea474b081e5e->enter($__internal_9c4a2e9165fb5dd78d893610c532f617ebf00c9cc60be6b0c841ea474b081e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9c4a2e9165fb5dd78d893610c532f617ebf00c9cc60be6b0c841ea474b081e5e->leave($__internal_9c4a2e9165fb5dd78d893610c532f617ebf00c9cc60be6b0c841ea474b081e5e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
