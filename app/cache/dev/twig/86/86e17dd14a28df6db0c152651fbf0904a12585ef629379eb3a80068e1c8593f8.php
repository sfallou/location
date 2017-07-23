<?php

/* :documentuserroom:new.html.twig */
class __TwigTemplate_0acd1f68923faa344f47c51d0383f7ae21c3bf4f3bde81dce09c97836297f4c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentuserroom:new.html.twig", 1);
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
        $__internal_1c8ea12318ac7e554682bf086ca2d7b18048e2e3591c636d4fce83c44ef5ec3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8ea12318ac7e554682bf086ca2d7b18048e2e3591c636d4fce83c44ef5ec3a->enter($__internal_1c8ea12318ac7e554682bf086ca2d7b18048e2e3591c636d4fce83c44ef5ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentuserroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8ea12318ac7e554682bf086ca2d7b18048e2e3591c636d4fce83c44ef5ec3a->leave($__internal_1c8ea12318ac7e554682bf086ca2d7b18048e2e3591c636d4fce83c44ef5ec3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0113f030aed49bed52bc76a13fd78e87e0e8fcaa019836cd7313bce1e0a814a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0113f030aed49bed52bc76a13fd78e87e0e8fcaa019836cd7313bce1e0a814a->enter($__internal_f0113f030aed49bed52bc76a13fd78e87e0e8fcaa019836cd7313bce1e0a814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentuserroom creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f0113f030aed49bed52bc76a13fd78e87e0e8fcaa019836cd7313bce1e0a814a->leave($__internal_f0113f030aed49bed52bc76a13fd78e87e0e8fcaa019836cd7313bce1e0a814a_prof);

    }

    public function getTemplateName()
    {
        return ":documentuserroom:new.html.twig";
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
    <h1>Documentuserroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('documentuserroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":documentuserroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentuserroom/new.html.twig");
    }
}
