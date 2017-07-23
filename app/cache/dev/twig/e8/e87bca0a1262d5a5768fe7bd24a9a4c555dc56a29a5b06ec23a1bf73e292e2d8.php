<?php

/* :contactappartement:new.html.twig */
class __TwigTemplate_d6c2a97c19061c637800bfeda99a9905bd29855badff2f435b7ef5cbe80ef710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactappartement:new.html.twig", 1);
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
        $__internal_a80148b20199d2f6ef63972265b613516ccead87a6a58d30954e96751552f920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80148b20199d2f6ef63972265b613516ccead87a6a58d30954e96751552f920->enter($__internal_a80148b20199d2f6ef63972265b613516ccead87a6a58d30954e96751552f920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80148b20199d2f6ef63972265b613516ccead87a6a58d30954e96751552f920->leave($__internal_a80148b20199d2f6ef63972265b613516ccead87a6a58d30954e96751552f920_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a47225f5f26024b111b4deb9623b5e7630a31c484c9b5d6d86112f3f06e8dfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47225f5f26024b111b4deb9623b5e7630a31c484c9b5d6d86112f3f06e8dfd8->enter($__internal_a47225f5f26024b111b4deb9623b5e7630a31c484c9b5d6d86112f3f06e8dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactappartement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a47225f5f26024b111b4deb9623b5e7630a31c484c9b5d6d86112f3f06e8dfd8->leave($__internal_a47225f5f26024b111b4deb9623b5e7630a31c484c9b5d6d86112f3f06e8dfd8_prof);

    }

    public function getTemplateName()
    {
        return ":contactappartement:new.html.twig";
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
    <h1>Contactappartement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contactappartement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":contactappartement:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactappartement/new.html.twig");
    }
}
