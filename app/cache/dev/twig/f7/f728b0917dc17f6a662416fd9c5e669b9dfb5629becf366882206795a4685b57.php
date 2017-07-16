<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_527f275e7677e210e69969ad7d8f832856862f31d26abc04bd5f5e4f504cf29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2afd562bfd7c7cf899a1bbf6eb18a69127b90377bc08c26bef160a008aa39ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2afd562bfd7c7cf899a1bbf6eb18a69127b90377bc08c26bef160a008aa39ac->enter($__internal_f2afd562bfd7c7cf899a1bbf6eb18a69127b90377bc08c26bef160a008aa39ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2afd562bfd7c7cf899a1bbf6eb18a69127b90377bc08c26bef160a008aa39ac->leave($__internal_f2afd562bfd7c7cf899a1bbf6eb18a69127b90377bc08c26bef160a008aa39ac_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_331949f4a35ec51dd91daf6fd23152287ad4c26ae79718a8cbbb1d3274bfafd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331949f4a35ec51dd91daf6fd23152287ad4c26ae79718a8cbbb1d3274bfafd8->enter($__internal_331949f4a35ec51dd91daf6fd23152287ad4c26ae79718a8cbbb1d3274bfafd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_331949f4a35ec51dd91daf6fd23152287ad4c26ae79718a8cbbb1d3274bfafd8->leave($__internal_331949f4a35ec51dd91daf6fd23152287ad4c26ae79718a8cbbb1d3274bfafd8_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_57a414b1abb748e1091d0c570708022bf5cce5dacb4bbad168b2669e3b884ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a414b1abb748e1091d0c570708022bf5cce5dacb4bbad168b2669e3b884ef9->enter($__internal_57a414b1abb748e1091d0c570708022bf5cce5dacb4bbad168b2669e3b884ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_57a414b1abb748e1091d0c570708022bf5cce5dacb4bbad168b2669e3b884ef9->leave($__internal_57a414b1abb748e1091d0c570708022bf5cce5dacb4bbad168b2669e3b884ef9_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_927f93515ff293e60ddeeab18fb8a94aaf63c0ca90d42dc6647db07a01d4aa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f93515ff293e60ddeeab18fb8a94aaf63c0ca90d42dc6647db07a01d4aa3e->enter($__internal_927f93515ff293e60ddeeab18fb8a94aaf63c0ca90d42dc6647db07a01d4aa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_927f93515ff293e60ddeeab18fb8a94aaf63c0ca90d42dc6647db07a01d4aa3e->leave($__internal_927f93515ff293e60ddeeab18fb8a94aaf63c0ca90d42dc6647db07a01d4aa3e_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:form.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/form.html.twig");
    }
}
