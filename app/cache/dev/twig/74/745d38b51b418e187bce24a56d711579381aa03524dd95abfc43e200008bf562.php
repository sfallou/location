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
        $__internal_dde842afd85fae53417eb7c24d78ac5c89b3b1b6bcc6591e89097b9e26060ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde842afd85fae53417eb7c24d78ac5c89b3b1b6bcc6591e89097b9e26060ceb->enter($__internal_dde842afd85fae53417eb7c24d78ac5c89b3b1b6bcc6591e89097b9e26060ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde842afd85fae53417eb7c24d78ac5c89b3b1b6bcc6591e89097b9e26060ceb->leave($__internal_dde842afd85fae53417eb7c24d78ac5c89b3b1b6bcc6591e89097b9e26060ceb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a139b5f7a0ab4611001e37175600ca6151c472744bf73d4142c8857c3e45d680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a139b5f7a0ab4611001e37175600ca6151c472744bf73d4142c8857c3e45d680->enter($__internal_a139b5f7a0ab4611001e37175600ca6151c472744bf73d4142c8857c3e45d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a139b5f7a0ab4611001e37175600ca6151c472744bf73d4142c8857c3e45d680->leave($__internal_a139b5f7a0ab4611001e37175600ca6151c472744bf73d4142c8857c3e45d680_prof);

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
