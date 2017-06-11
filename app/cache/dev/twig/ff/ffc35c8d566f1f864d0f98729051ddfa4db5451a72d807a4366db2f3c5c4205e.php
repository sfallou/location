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
        $__internal_2bc6ab649be4edb70011a2e89b686d13eb0f25f8046a01a3e82393941e5a4804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc6ab649be4edb70011a2e89b686d13eb0f25f8046a01a3e82393941e5a4804->enter($__internal_2bc6ab649be4edb70011a2e89b686d13eb0f25f8046a01a3e82393941e5a4804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc6ab649be4edb70011a2e89b686d13eb0f25f8046a01a3e82393941e5a4804->leave($__internal_2bc6ab649be4edb70011a2e89b686d13eb0f25f8046a01a3e82393941e5a4804_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64b51cc56a02810d298affff2ffaab198cb5c616bc726402c7b62e929a70a36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b51cc56a02810d298affff2ffaab198cb5c616bc726402c7b62e929a70a36e->enter($__internal_64b51cc56a02810d298affff2ffaab198cb5c616bc726402c7b62e929a70a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_64b51cc56a02810d298affff2ffaab198cb5c616bc726402c7b62e929a70a36e->leave($__internal_64b51cc56a02810d298affff2ffaab198cb5c616bc726402c7b62e929a70a36e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09cd320d9c3440e76f96bec1df6c0874d32ebf51e7d6701e2dcaa344f568608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09cd320d9c3440e76f96bec1df6c0874d32ebf51e7d6701e2dcaa344f568608->enter($__internal_b09cd320d9c3440e76f96bec1df6c0874d32ebf51e7d6701e2dcaa344f568608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b09cd320d9c3440e76f96bec1df6c0874d32ebf51e7d6701e2dcaa344f568608->leave($__internal_b09cd320d9c3440e76f96bec1df6c0874d32ebf51e7d6701e2dcaa344f568608_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_540ea2a2867fad324596ebd08961e4fe80f7b555b625802eb208ffd9e10c650c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540ea2a2867fad324596ebd08961e4fe80f7b555b625802eb208ffd9e10c650c->enter($__internal_540ea2a2867fad324596ebd08961e4fe80f7b555b625802eb208ffd9e10c650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_540ea2a2867fad324596ebd08961e4fe80f7b555b625802eb208ffd9e10c650c->leave($__internal_540ea2a2867fad324596ebd08961e4fe80f7b555b625802eb208ffd9e10c650c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c90601b22cf449116f1030a0ac1d85fa3bb21a618af5cc146a21f1e039895b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c90601b22cf449116f1030a0ac1d85fa3bb21a618af5cc146a21f1e039895b7->enter($__internal_7c90601b22cf449116f1030a0ac1d85fa3bb21a618af5cc146a21f1e039895b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7c90601b22cf449116f1030a0ac1d85fa3bb21a618af5cc146a21f1e039895b7->leave($__internal_7c90601b22cf449116f1030a0ac1d85fa3bb21a618af5cc146a21f1e039895b7_prof);

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
