<?php

/* :user:new.html.twig */
class __TwigTemplate_0a46499dc30d89e67c5853a4857a8e1f2deba079d474b355e49b2cb3ccb8eee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_3623c9c63d15dfa8a42cb25107f3de70c89a037206e6b0886562321b377bcaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3623c9c63d15dfa8a42cb25107f3de70c89a037206e6b0886562321b377bcaef->enter($__internal_3623c9c63d15dfa8a42cb25107f3de70c89a037206e6b0886562321b377bcaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3623c9c63d15dfa8a42cb25107f3de70c89a037206e6b0886562321b377bcaef->leave($__internal_3623c9c63d15dfa8a42cb25107f3de70c89a037206e6b0886562321b377bcaef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36ae26da6d87aa5d1b282eb120f5c76a48ec45791a4de86c11a56f8174230b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ae26da6d87aa5d1b282eb120f5c76a48ec45791a4de86c11a56f8174230b76->enter($__internal_36ae26da6d87aa5d1b282eb120f5c76a48ec45791a4de86c11a56f8174230b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_36ae26da6d87aa5d1b282eb120f5c76a48ec45791a4de86c11a56f8174230b76->leave($__internal_36ae26da6d87aa5d1b282eb120f5c76a48ec45791a4de86c11a56f8174230b76_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/new.html.twig");
    }
}
