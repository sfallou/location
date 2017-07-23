<?php

/* :documentappartement:new.html.twig */
class __TwigTemplate_6566fdcbfeb5750f489b05a376e6c18c0293612cf63961c219d29853c8c5ac6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentappartement:new.html.twig", 1);
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
        $__internal_78bdb9138e3296a88c74f857949c0a674d029b82c6cfb96e22c9f19240dea8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bdb9138e3296a88c74f857949c0a674d029b82c6cfb96e22c9f19240dea8ac->enter($__internal_78bdb9138e3296a88c74f857949c0a674d029b82c6cfb96e22c9f19240dea8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bdb9138e3296a88c74f857949c0a674d029b82c6cfb96e22c9f19240dea8ac->leave($__internal_78bdb9138e3296a88c74f857949c0a674d029b82c6cfb96e22c9f19240dea8ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38c6c072422d0d1ae29b61bc34fa2f73af16e13dfcedea038bb286fe0e2ad756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c6c072422d0d1ae29b61bc34fa2f73af16e13dfcedea038bb286fe0e2ad756->enter($__internal_38c6c072422d0d1ae29b61bc34fa2f73af16e13dfcedea038bb286fe0e2ad756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentappartement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_38c6c072422d0d1ae29b61bc34fa2f73af16e13dfcedea038bb286fe0e2ad756->leave($__internal_38c6c072422d0d1ae29b61bc34fa2f73af16e13dfcedea038bb286fe0e2ad756_prof);

    }

    public function getTemplateName()
    {
        return ":documentappartement:new.html.twig";
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
    <h1>Documentappartement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('documentappartement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":documentappartement:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentappartement/new.html.twig");
    }
}
