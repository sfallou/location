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
        $__internal_ff429eb664568bc99a7e1e6edf4bcf8c22460f91b07fa5b610d1a05b4abd6823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff429eb664568bc99a7e1e6edf4bcf8c22460f91b07fa5b610d1a05b4abd6823->enter($__internal_ff429eb664568bc99a7e1e6edf4bcf8c22460f91b07fa5b610d1a05b4abd6823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff429eb664568bc99a7e1e6edf4bcf8c22460f91b07fa5b610d1a05b4abd6823->leave($__internal_ff429eb664568bc99a7e1e6edf4bcf8c22460f91b07fa5b610d1a05b4abd6823_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7318032ee05d85180adf20cf119d9912ab4220374886851445692e6d639a917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7318032ee05d85180adf20cf119d9912ab4220374886851445692e6d639a917->enter($__internal_d7318032ee05d85180adf20cf119d9912ab4220374886851445692e6d639a917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7318032ee05d85180adf20cf119d9912ab4220374886851445692e6d639a917->leave($__internal_d7318032ee05d85180adf20cf119d9912ab4220374886851445692e6d639a917_prof);

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
