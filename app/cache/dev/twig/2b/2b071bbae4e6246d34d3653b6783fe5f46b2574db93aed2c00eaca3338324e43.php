<?php

/* :chargeroom:new.html.twig */
class __TwigTemplate_1979cd899b11ab47c99c8871d37ec03ad58abb84d1686a70b6e56bb9aa1d1a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeroom:new.html.twig", 1);
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
        $__internal_e41e58ccf71b293bd746f81d33be9cb197e514b73011349c7eebab5a6aa6fffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41e58ccf71b293bd746f81d33be9cb197e514b73011349c7eebab5a6aa6fffb->enter($__internal_e41e58ccf71b293bd746f81d33be9cb197e514b73011349c7eebab5a6aa6fffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41e58ccf71b293bd746f81d33be9cb197e514b73011349c7eebab5a6aa6fffb->leave($__internal_e41e58ccf71b293bd746f81d33be9cb197e514b73011349c7eebab5a6aa6fffb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00fb828517582362fc647d73e32b18b1b4c4f337a6fae08c40de8c31d6528f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fb828517582362fc647d73e32b18b1b4c4f337a6fae08c40de8c31d6528f5b->enter($__internal_00fb828517582362fc647d73e32b18b1b4c4f337a6fae08c40de8c31d6528f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargeroom creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_00fb828517582362fc647d73e32b18b1b4c4f337a6fae08c40de8c31d6528f5b->leave($__internal_00fb828517582362fc647d73e32b18b1b4c4f337a6fae08c40de8c31d6528f5b_prof);

    }

    public function getTemplateName()
    {
        return ":chargeroom:new.html.twig";
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
    <h1>Chargeroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chargeroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chargeroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeroom/new.html.twig");
    }
}
