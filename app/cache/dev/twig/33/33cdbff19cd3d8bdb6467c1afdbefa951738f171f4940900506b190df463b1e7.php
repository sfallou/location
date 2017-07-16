<?php

/* :meubleroom:edit.html.twig */
class __TwigTemplate_96f889b587b8806f4e45d41ad3db7643ae9c7d58c3c919c84334b816a0c03c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleroom:edit.html.twig", 1);
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
        $__internal_d68c3ae18b23b19d5e27e4043583ee7fc4f8a9d34c0dee869653d7476f60b5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68c3ae18b23b19d5e27e4043583ee7fc4f8a9d34c0dee869653d7476f60b5d8->enter($__internal_d68c3ae18b23b19d5e27e4043583ee7fc4f8a9d34c0dee869653d7476f60b5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleroom:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d68c3ae18b23b19d5e27e4043583ee7fc4f8a9d34c0dee869653d7476f60b5d8->leave($__internal_d68c3ae18b23b19d5e27e4043583ee7fc4f8a9d34c0dee869653d7476f60b5d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93c16a5f4f1cc745dbe4cc0838884f837c5967c5681a05e373f889fd4ee1da93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c16a5f4f1cc745dbe4cc0838884f837c5967c5681a05e373f889fd4ee1da93->enter($__internal_93c16a5f4f1cc745dbe4cc0838884f837c5967c5681a05e373f889fd4ee1da93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleroom edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_index");
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
        
        $__internal_93c16a5f4f1cc745dbe4cc0838884f837c5967c5681a05e373f889fd4ee1da93->leave($__internal_93c16a5f4f1cc745dbe4cc0838884f837c5967c5681a05e373f889fd4ee1da93_prof);

    }

    public function getTemplateName()
    {
        return ":meubleroom:edit.html.twig";
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
    <h1>Meubleroom edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('meubleroom_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":meubleroom:edit.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleroom/edit.html.twig");
    }
}
