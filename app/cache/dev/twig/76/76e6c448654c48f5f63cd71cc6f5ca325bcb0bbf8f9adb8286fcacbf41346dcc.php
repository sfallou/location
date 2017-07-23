<?php

/* :rentuserroom:new.html.twig */
class __TwigTemplate_e74a37024b1908b60a44ef02d47b723937df6e6c32f0e51c9eb449921dd8a7e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rentuserroom:new.html.twig", 1);
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
        $__internal_30123c94200f0b0572cee2572f6977bc956f1eed48665d9db289cdc35acff37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30123c94200f0b0572cee2572f6977bc956f1eed48665d9db289cdc35acff37c->enter($__internal_30123c94200f0b0572cee2572f6977bc956f1eed48665d9db289cdc35acff37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rentuserroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30123c94200f0b0572cee2572f6977bc956f1eed48665d9db289cdc35acff37c->leave($__internal_30123c94200f0b0572cee2572f6977bc956f1eed48665d9db289cdc35acff37c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dae10b8a5e86c1a48e68ba03f95f98afd3f966104ee02eac25d187ec33f8f2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae10b8a5e86c1a48e68ba03f95f98afd3f966104ee02eac25d187ec33f8f2f2->enter($__internal_dae10b8a5e86c1a48e68ba03f95f98afd3f966104ee02eac25d187ec33f8f2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rentuserroom creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dae10b8a5e86c1a48e68ba03f95f98afd3f966104ee02eac25d187ec33f8f2f2->leave($__internal_dae10b8a5e86c1a48e68ba03f95f98afd3f966104ee02eac25d187ec33f8f2f2_prof);

    }

    public function getTemplateName()
    {
        return ":rentuserroom:new.html.twig";
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
    <h1>Rentuserroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rentuserroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":rentuserroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/rentuserroom/new.html.twig");
    }
}
