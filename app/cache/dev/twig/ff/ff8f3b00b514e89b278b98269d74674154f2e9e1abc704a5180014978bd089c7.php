<?php

/* :chargeappartement:new.html.twig */
class __TwigTemplate_0c289c845a9507ab12995e8da6dec0a85154139cf399d9fe84b904a8a84e4731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeappartement:new.html.twig", 1);
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
        $__internal_cef85d362814b4becf40789781f65f9d3c907e34080dabe163542d835f7c6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef85d362814b4becf40789781f65f9d3c907e34080dabe163542d835f7c6a3b->enter($__internal_cef85d362814b4becf40789781f65f9d3c907e34080dabe163542d835f7c6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef85d362814b4becf40789781f65f9d3c907e34080dabe163542d835f7c6a3b->leave($__internal_cef85d362814b4becf40789781f65f9d3c907e34080dabe163542d835f7c6a3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29efbe0b1095fc3a4988c4d727b6d621bdaaa1ac9554f9a232d76737ac5e5483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29efbe0b1095fc3a4988c4d727b6d621bdaaa1ac9554f9a232d76737ac5e5483->enter($__internal_29efbe0b1095fc3a4988c4d727b6d621bdaaa1ac9554f9a232d76737ac5e5483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargeappartement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_29efbe0b1095fc3a4988c4d727b6d621bdaaa1ac9554f9a232d76737ac5e5483->leave($__internal_29efbe0b1095fc3a4988c4d727b6d621bdaaa1ac9554f9a232d76737ac5e5483_prof);

    }

    public function getTemplateName()
    {
        return ":chargeappartement:new.html.twig";
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
    <h1>Chargeappartement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chargeappartement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chargeappartement:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeappartement/new.html.twig");
    }
}
