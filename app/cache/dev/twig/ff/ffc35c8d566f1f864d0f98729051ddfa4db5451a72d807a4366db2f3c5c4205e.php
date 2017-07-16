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
        $__internal_8dd9e0bdd9657ca119adf8d9aa0859afb92840128313a203c82a6cc42d85af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd9e0bdd9657ca119adf8d9aa0859afb92840128313a203c82a6cc42d85af04->enter($__internal_8dd9e0bdd9657ca119adf8d9aa0859afb92840128313a203c82a6cc42d85af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd9e0bdd9657ca119adf8d9aa0859afb92840128313a203c82a6cc42d85af04->leave($__internal_8dd9e0bdd9657ca119adf8d9aa0859afb92840128313a203c82a6cc42d85af04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_280b2c2da5f9fc730189977f7ac560ed07f56769c652cfbe6a071d5ea852abf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280b2c2da5f9fc730189977f7ac560ed07f56769c652cfbe6a071d5ea852abf0->enter($__internal_280b2c2da5f9fc730189977f7ac560ed07f56769c652cfbe6a071d5ea852abf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_280b2c2da5f9fc730189977f7ac560ed07f56769c652cfbe6a071d5ea852abf0->leave($__internal_280b2c2da5f9fc730189977f7ac560ed07f56769c652cfbe6a071d5ea852abf0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f546e9bc4b054f24a3c7912fb6482e6dd4d9efe6a3f4eb014f22a00e0f00d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f546e9bc4b054f24a3c7912fb6482e6dd4d9efe6a3f4eb014f22a00e0f00d37->enter($__internal_0f546e9bc4b054f24a3c7912fb6482e6dd4d9efe6a3f4eb014f22a00e0f00d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0f546e9bc4b054f24a3c7912fb6482e6dd4d9efe6a3f4eb014f22a00e0f00d37->leave($__internal_0f546e9bc4b054f24a3c7912fb6482e6dd4d9efe6a3f4eb014f22a00e0f00d37_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ca709c23f1217ccdcc8d29c7d3fa019b4dbde527b53369d984b9ebedc82085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ca709c23f1217ccdcc8d29c7d3fa019b4dbde527b53369d984b9ebedc82085->enter($__internal_c0ca709c23f1217ccdcc8d29c7d3fa019b4dbde527b53369d984b9ebedc82085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0ca709c23f1217ccdcc8d29c7d3fa019b4dbde527b53369d984b9ebedc82085->leave($__internal_c0ca709c23f1217ccdcc8d29c7d3fa019b4dbde527b53369d984b9ebedc82085_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ac91ec2161d04ac9ec2c49dff872ee9d5c272a6ac2d8753b80580d35fcb9068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac91ec2161d04ac9ec2c49dff872ee9d5c272a6ac2d8753b80580d35fcb9068->enter($__internal_4ac91ec2161d04ac9ec2c49dff872ee9d5c272a6ac2d8753b80580d35fcb9068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4ac91ec2161d04ac9ec2c49dff872ee9d5c272a6ac2d8753b80580d35fcb9068->leave($__internal_4ac91ec2161d04ac9ec2c49dff872ee9d5c272a6ac2d8753b80580d35fcb9068_prof);

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
