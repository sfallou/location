<?php

/* :meubleroom:new.html.twig */
class __TwigTemplate_5ece46d2138c2a8c6027c8fc7c985c6a7cfa1097d251f367cde76d4594a78316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleroom:new.html.twig", 1);
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
        $__internal_ab7ae697d170e62a31606b597820108954995ed0ec4f831e4b73ab016a23d2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7ae697d170e62a31606b597820108954995ed0ec4f831e4b73ab016a23d2b7->enter($__internal_ab7ae697d170e62a31606b597820108954995ed0ec4f831e4b73ab016a23d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7ae697d170e62a31606b597820108954995ed0ec4f831e4b73ab016a23d2b7->leave($__internal_ab7ae697d170e62a31606b597820108954995ed0ec4f831e4b73ab016a23d2b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d71e293a63c8fa6618e4bbd778d1b0262b078d0b5e1ac2cdbc51c99403d3b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71e293a63c8fa6618e4bbd778d1b0262b078d0b5e1ac2cdbc51c99403d3b534->enter($__internal_d71e293a63c8fa6618e4bbd778d1b0262b078d0b5e1ac2cdbc51c99403d3b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleroom creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d71e293a63c8fa6618e4bbd778d1b0262b078d0b5e1ac2cdbc51c99403d3b534->leave($__internal_d71e293a63c8fa6618e4bbd778d1b0262b078d0b5e1ac2cdbc51c99403d3b534_prof);

    }

    public function getTemplateName()
    {
        return ":meubleroom:new.html.twig";
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
    <h1>Meubleroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('meubleroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":meubleroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleroom/new.html.twig");
    }
}
