<?php

/* AvanzuAdminThemeBundle:Default:add_meuble.html.twig */
class __TwigTemplate_88ff854334c087413c1b249a48f0ad4df9144ac2c13be49754e040e1e9e0d242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig", 1);
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
        $__internal_f2620cf5e895330e6b88b1cb14c15c06ea7de0022f1d86951ac6fbd6a595cd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2620cf5e895330e6b88b1cb14c15c06ea7de0022f1d86951ac6fbd6a595cd52->enter($__internal_f2620cf5e895330e6b88b1cb14c15c06ea7de0022f1d86951ac6fbd6a595cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2620cf5e895330e6b88b1cb14c15c06ea7de0022f1d86951ac6fbd6a595cd52->leave($__internal_f2620cf5e895330e6b88b1cb14c15c06ea7de0022f1d86951ac6fbd6a595cd52_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b63da822c4569ea69103a5611a31d990a74b1890fccd667b6782a63b4593831e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63da822c4569ea69103a5611a31d990a74b1890fccd667b6782a63b4593831e->enter($__internal_b63da822c4569ea69103a5611a31d990a74b1890fccd667b6782a63b4593831e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b63da822c4569ea69103a5611a31d990a74b1890fccd667b6782a63b4593831e->leave($__internal_b63da822c4569ea69103a5611a31d990a74b1890fccd667b6782a63b4593831e_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a192b9fa146557868c5bb2c9f122bc45cfb4345a8264b6d4c46035d1bda4405e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a192b9fa146557868c5bb2c9f122bc45cfb4345a8264b6d4c46035d1bda4405e->enter($__internal_a192b9fa146557868c5bb2c9f122bc45cfb4345a8264b6d4c46035d1bda4405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_a192b9fa146557868c5bb2c9f122bc45cfb4345a8264b6d4c46035d1bda4405e->leave($__internal_a192b9fa146557868c5bb2c9f122bc45cfb4345a8264b6d4c46035d1bda4405e_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4065a7e0ec77ab2ead5cf05a6c7ee5e61926ef39b2d4aac1d41957f7afecf935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4065a7e0ec77ab2ead5cf05a6c7ee5e61926ef39b2d4aac1d41957f7afecf935->enter($__internal_4065a7e0ec77ab2ead5cf05a6c7ee5e61926ef39b2d4aac1d41957f7afecf935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_4065a7e0ec77ab2ead5cf05a6c7ee5e61926ef39b2d4aac1d41957f7afecf935->leave($__internal_4065a7e0ec77ab2ead5cf05a6c7ee5e61926ef39b2d4aac1d41957f7afecf935_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_meuble.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_meuble.html.twig");
    }
}
