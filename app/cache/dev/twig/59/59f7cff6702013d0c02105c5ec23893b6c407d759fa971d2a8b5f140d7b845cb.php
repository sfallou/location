<?php

/* :fixappartement:new.html.twig */
class __TwigTemplate_01e069c1ad5efb3594fc4d370902ea03197abe6568c5d92c1b33923af3656d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixappartement:new.html.twig", 1);
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
        $__internal_fe415c087cefd35614ce2a1d7eef3689725307dff9d26910c68bf88ccaa4cf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe415c087cefd35614ce2a1d7eef3689725307dff9d26910c68bf88ccaa4cf45->enter($__internal_fe415c087cefd35614ce2a1d7eef3689725307dff9d26910c68bf88ccaa4cf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe415c087cefd35614ce2a1d7eef3689725307dff9d26910c68bf88ccaa4cf45->leave($__internal_fe415c087cefd35614ce2a1d7eef3689725307dff9d26910c68bf88ccaa4cf45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18eb742a016bd017246eeb62501d0836254f2c0866753cf5869a0f27d9374768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eb742a016bd017246eeb62501d0836254f2c0866753cf5869a0f27d9374768->enter($__internal_18eb742a016bd017246eeb62501d0836254f2c0866753cf5869a0f27d9374768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixappartement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_18eb742a016bd017246eeb62501d0836254f2c0866753cf5869a0f27d9374768->leave($__internal_18eb742a016bd017246eeb62501d0836254f2c0866753cf5869a0f27d9374768_prof);

    }

    public function getTemplateName()
    {
        return ":fixappartement:new.html.twig";
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
    <h1>Fixappartement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fixappartement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":fixappartement:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixappartement/new.html.twig");
    }
}
