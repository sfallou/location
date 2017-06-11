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
        $__internal_ac97e081d68eff26e78ffb8c8789550414c536079b7f47fb82cf64153ab8ff8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac97e081d68eff26e78ffb8c8789550414c536079b7f47fb82cf64153ab8ff8c->enter($__internal_ac97e081d68eff26e78ffb8c8789550414c536079b7f47fb82cf64153ab8ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac97e081d68eff26e78ffb8c8789550414c536079b7f47fb82cf64153ab8ff8c->leave($__internal_ac97e081d68eff26e78ffb8c8789550414c536079b7f47fb82cf64153ab8ff8c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_37f26d686787eaa2685b5a9167867026f332eacce828d3bd65aa52cbdcbaade4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f26d686787eaa2685b5a9167867026f332eacce828d3bd65aa52cbdcbaade4->enter($__internal_37f26d686787eaa2685b5a9167867026f332eacce828d3bd65aa52cbdcbaade4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_37f26d686787eaa2685b5a9167867026f332eacce828d3bd65aa52cbdcbaade4->leave($__internal_37f26d686787eaa2685b5a9167867026f332eacce828d3bd65aa52cbdcbaade4_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d86349a12a15e89ab7099e309afef6665135b9b92637d0f1020ea9ae889c44c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86349a12a15e89ab7099e309afef6665135b9b92637d0f1020ea9ae889c44c8->enter($__internal_d86349a12a15e89ab7099e309afef6665135b9b92637d0f1020ea9ae889c44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_d86349a12a15e89ab7099e309afef6665135b9b92637d0f1020ea9ae889c44c8->leave($__internal_d86349a12a15e89ab7099e309afef6665135b9b92637d0f1020ea9ae889c44c8_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6a816976d3d21a5d48a7bc8e016eced02f7ff7490dad6f1fd8ebb34cff70c78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a816976d3d21a5d48a7bc8e016eced02f7ff7490dad6f1fd8ebb34cff70c78d->enter($__internal_6a816976d3d21a5d48a7bc8e016eced02f7ff7490dad6f1fd8ebb34cff70c78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_6a816976d3d21a5d48a7bc8e016eced02f7ff7490dad6f1fd8ebb34cff70c78d->leave($__internal_6a816976d3d21a5d48a7bc8e016eced02f7ff7490dad6f1fd8ebb34cff70c78d_prof);

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
