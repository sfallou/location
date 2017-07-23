<?php

/* :contactresidence:edit.html.twig */
class __TwigTemplate_e7597e3de4c19ecc1a77d5bb1f54297d8b5953aec0cec4ac39e42a9e6cdc2eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactresidence:edit.html.twig", 1);
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
        $__internal_2ea4860af474ab58ee174aca2d5491a2f1f605190cea151310b5fb9fe54e4ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea4860af474ab58ee174aca2d5491a2f1f605190cea151310b5fb9fe54e4ebe->enter($__internal_2ea4860af474ab58ee174aca2d5491a2f1f605190cea151310b5fb9fe54e4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactresidence:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea4860af474ab58ee174aca2d5491a2f1f605190cea151310b5fb9fe54e4ebe->leave($__internal_2ea4860af474ab58ee174aca2d5491a2f1f605190cea151310b5fb9fe54e4ebe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea4802fc3b9dd743a8cbeebcd8ee12d0fa1bcef4616b7a07f5678cfa7e4ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea4802fc3b9dd743a8cbeebcd8ee12d0fa1bcef4616b7a07f5678cfa7e4ce54->enter($__internal_0ea4802fc3b9dd743a8cbeebcd8ee12d0fa1bcef4616b7a07f5678cfa7e4ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactresidence edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0ea4802fc3b9dd743a8cbeebcd8ee12d0fa1bcef4616b7a07f5678cfa7e4ce54->leave($__internal_0ea4802fc3b9dd743a8cbeebcd8ee12d0fa1bcef4616b7a07f5678cfa7e4ce54_prof);

    }

    public function getTemplateName()
    {
        return ":contactresidence:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contactresidence edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('contactresidence_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contactresidence:edit.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactresidence/edit.html.twig");
    }
}
