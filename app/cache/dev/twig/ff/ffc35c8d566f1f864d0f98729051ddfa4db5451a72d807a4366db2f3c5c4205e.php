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
        $__internal_079007f0cc3c4da893f1c2beff76b8559cf2861a493c4fae30fa477cfbe97646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079007f0cc3c4da893f1c2beff76b8559cf2861a493c4fae30fa477cfbe97646->enter($__internal_079007f0cc3c4da893f1c2beff76b8559cf2861a493c4fae30fa477cfbe97646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079007f0cc3c4da893f1c2beff76b8559cf2861a493c4fae30fa477cfbe97646->leave($__internal_079007f0cc3c4da893f1c2beff76b8559cf2861a493c4fae30fa477cfbe97646_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4c7286f5a55944b08a87ea1bc92723b1af1532f441a0b34ef559dc8987f41df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c7286f5a55944b08a87ea1bc92723b1af1532f441a0b34ef559dc8987f41df->enter($__internal_b4c7286f5a55944b08a87ea1bc92723b1af1532f441a0b34ef559dc8987f41df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b4c7286f5a55944b08a87ea1bc92723b1af1532f441a0b34ef559dc8987f41df->leave($__internal_b4c7286f5a55944b08a87ea1bc92723b1af1532f441a0b34ef559dc8987f41df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0e709557a0202f9fef976f18498dc73596dc510d663d32e8a4b84573aff39df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e709557a0202f9fef976f18498dc73596dc510d663d32e8a4b84573aff39df->enter($__internal_c0e709557a0202f9fef976f18498dc73596dc510d663d32e8a4b84573aff39df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c0e709557a0202f9fef976f18498dc73596dc510d663d32e8a4b84573aff39df->leave($__internal_c0e709557a0202f9fef976f18498dc73596dc510d663d32e8a4b84573aff39df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6ce9f367686523baff1e65db3b3cca81b815ef74addb7f81e777881891134f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ce9f367686523baff1e65db3b3cca81b815ef74addb7f81e777881891134f5->enter($__internal_b6ce9f367686523baff1e65db3b3cca81b815ef74addb7f81e777881891134f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6ce9f367686523baff1e65db3b3cca81b815ef74addb7f81e777881891134f5->leave($__internal_b6ce9f367686523baff1e65db3b3cca81b815ef74addb7f81e777881891134f5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa94e03c7871794a67c5ae03fb0ffd06093edf50f268b237cbf0f464e1476432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa94e03c7871794a67c5ae03fb0ffd06093edf50f268b237cbf0f464e1476432->enter($__internal_fa94e03c7871794a67c5ae03fb0ffd06093edf50f268b237cbf0f464e1476432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fa94e03c7871794a67c5ae03fb0ffd06093edf50f268b237cbf0f464e1476432->leave($__internal_fa94e03c7871794a67c5ae03fb0ffd06093edf50f268b237cbf0f464e1476432_prof);

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
