<?php

/* :fixroom:new.html.twig */
class __TwigTemplate_e37885380b30b117fd78f0cfbad423af7df67fd339122eee2b9d346b13b730c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixroom:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61ede257aacd9f6189e9201e55bf4c201f67d31ef619b9b7c0504644270699bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ede257aacd9f6189e9201e55bf4c201f67d31ef619b9b7c0504644270699bb->enter($__internal_61ede257aacd9f6189e9201e55bf4c201f67d31ef619b9b7c0504644270699bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ede257aacd9f6189e9201e55bf4c201f67d31ef619b9b7c0504644270699bb->leave($__internal_61ede257aacd9f6189e9201e55bf4c201f67d31ef619b9b7c0504644270699bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17eed1429ce3efa4ca8e0b64712930db28aae72096cdd6e770fb2903ecb25a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eed1429ce3efa4ca8e0b64712930db28aae72096cdd6e770fb2903ecb25a26->enter($__internal_17eed1429ce3efa4ca8e0b64712930db28aae72096cdd6e770fb2903ecb25a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixroom creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_17eed1429ce3efa4ca8e0b64712930db28aae72096cdd6e770fb2903ecb25a26->leave($__internal_17eed1429ce3efa4ca8e0b64712930db28aae72096cdd6e770fb2903ecb25a26_prof);

    }

    public function getTemplateName()
    {
        return ":fixroom:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Fixroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fixroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":fixroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixroom/new.html.twig");
    }
}
