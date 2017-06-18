<?php

/* AvanzuAdminThemeBundle:Default:add_room.html.twig */
class __TwigTemplate_34c65088a35e5c77d7b0d4d145c3faec7ef843a74f2d09786fe1b3262462aad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_room.html.twig", 1);
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
        $__internal_a35ae1ff862154d2ed1522f680a6aa4b86f045ad2980398f81cd0f78f98f23ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35ae1ff862154d2ed1522f680a6aa4b86f045ad2980398f81cd0f78f98f23ad->enter($__internal_a35ae1ff862154d2ed1522f680a6aa4b86f045ad2980398f81cd0f78f98f23ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35ae1ff862154d2ed1522f680a6aa4b86f045ad2980398f81cd0f78f98f23ad->leave($__internal_a35ae1ff862154d2ed1522f680a6aa4b86f045ad2980398f81cd0f78f98f23ad_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6f3f8dc44be062873011ec8c42401491849ca7666e412cc3ac6b59b11941af7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3f8dc44be062873011ec8c42401491849ca7666e412cc3ac6b59b11941af7f->enter($__internal_6f3f8dc44be062873011ec8c42401491849ca7666e412cc3ac6b59b11941af7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6f3f8dc44be062873011ec8c42401491849ca7666e412cc3ac6b59b11941af7f->leave($__internal_6f3f8dc44be062873011ec8c42401491849ca7666e412cc3ac6b59b11941af7f_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a0ac2afdb39ec96591ed5d11969b6e353a3a608cbaedbec37096dde51d170471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ac2afdb39ec96591ed5d11969b6e353a3a608cbaedbec37096dde51d170471->enter($__internal_a0ac2afdb39ec96591ed5d11969b6e353a3a608cbaedbec37096dde51d170471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_a0ac2afdb39ec96591ed5d11969b6e353a3a608cbaedbec37096dde51d170471->leave($__internal_a0ac2afdb39ec96591ed5d11969b6e353a3a608cbaedbec37096dde51d170471_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b136a9dbd1fa1f8fa6cc9bea93f152040f99585b8c4ae21cd700cd121a58fe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b136a9dbd1fa1f8fa6cc9bea93f152040f99585b8c4ae21cd700cd121a58fe8c->enter($__internal_b136a9dbd1fa1f8fa6cc9bea93f152040f99585b8c4ae21cd700cd121a58fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_b136a9dbd1fa1f8fa6cc9bea93f152040f99585b8c4ae21cd700cd121a58fe8c->leave($__internal_b136a9dbd1fa1f8fa6cc9bea93f152040f99585b8c4ae21cd700cd121a58fe8c_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_room.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:add_room.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_room.html.twig");
    }
}