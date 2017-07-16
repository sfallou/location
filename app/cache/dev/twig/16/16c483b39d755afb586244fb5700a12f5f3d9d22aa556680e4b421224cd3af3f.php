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
        $__internal_22524d20cfb55554604dfb9fe39e170c60e37999d93cc64ac09b35324cf9e7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22524d20cfb55554604dfb9fe39e170c60e37999d93cc64ac09b35324cf9e7da->enter($__internal_22524d20cfb55554604dfb9fe39e170c60e37999d93cc64ac09b35324cf9e7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22524d20cfb55554604dfb9fe39e170c60e37999d93cc64ac09b35324cf9e7da->leave($__internal_22524d20cfb55554604dfb9fe39e170c60e37999d93cc64ac09b35324cf9e7da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a0a804f7ea2a748d324b727a7077dff593edb6cf982a8ba584a3f44cc64b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a0a804f7ea2a748d324b727a7077dff593edb6cf982a8ba584a3f44cc64b3f->enter($__internal_93a0a804f7ea2a748d324b727a7077dff593edb6cf982a8ba584a3f44cc64b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93a0a804f7ea2a748d324b727a7077dff593edb6cf982a8ba584a3f44cc64b3f->leave($__internal_93a0a804f7ea2a748d324b727a7077dff593edb6cf982a8ba584a3f44cc64b3f_prof);

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
