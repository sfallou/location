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
        $__internal_29a381848c95c58b8a2341f2e7c52b8bf72d06d93031fcd1f01e287245ef9060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a381848c95c58b8a2341f2e7c52b8bf72d06d93031fcd1f01e287245ef9060->enter($__internal_29a381848c95c58b8a2341f2e7c52b8bf72d06d93031fcd1f01e287245ef9060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a381848c95c58b8a2341f2e7c52b8bf72d06d93031fcd1f01e287245ef9060->leave($__internal_29a381848c95c58b8a2341f2e7c52b8bf72d06d93031fcd1f01e287245ef9060_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2f7afe9648ac7ffcb43ed3147bc233211f40f7796aa0562fa5f9c13619a789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2f7afe9648ac7ffcb43ed3147bc233211f40f7796aa0562fa5f9c13619a789->enter($__internal_9d2f7afe9648ac7ffcb43ed3147bc233211f40f7796aa0562fa5f9c13619a789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d2f7afe9648ac7ffcb43ed3147bc233211f40f7796aa0562fa5f9c13619a789->leave($__internal_9d2f7afe9648ac7ffcb43ed3147bc233211f40f7796aa0562fa5f9c13619a789_prof);

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
