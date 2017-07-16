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
        $__internal_ff469de134d7ce2bbf72819ba1eed407d428c448b9ec56ee973b326f89742f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff469de134d7ce2bbf72819ba1eed407d428c448b9ec56ee973b326f89742f61->enter($__internal_ff469de134d7ce2bbf72819ba1eed407d428c448b9ec56ee973b326f89742f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff469de134d7ce2bbf72819ba1eed407d428c448b9ec56ee973b326f89742f61->leave($__internal_ff469de134d7ce2bbf72819ba1eed407d428c448b9ec56ee973b326f89742f61_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3b9817332552c8388186fc6aafced6a4537279e599cf9d4eccfcca836767e769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9817332552c8388186fc6aafced6a4537279e599cf9d4eccfcca836767e769->enter($__internal_3b9817332552c8388186fc6aafced6a4537279e599cf9d4eccfcca836767e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3b9817332552c8388186fc6aafced6a4537279e599cf9d4eccfcca836767e769->leave($__internal_3b9817332552c8388186fc6aafced6a4537279e599cf9d4eccfcca836767e769_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_34669c6bddb5b1514fc558d6acdfd8a9318fc35963364e2137daef2cd2460ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34669c6bddb5b1514fc558d6acdfd8a9318fc35963364e2137daef2cd2460ba1->enter($__internal_34669c6bddb5b1514fc558d6acdfd8a9318fc35963364e2137daef2cd2460ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_34669c6bddb5b1514fc558d6acdfd8a9318fc35963364e2137daef2cd2460ba1->leave($__internal_34669c6bddb5b1514fc558d6acdfd8a9318fc35963364e2137daef2cd2460ba1_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8952ab32683e7de0b043a5162a32a96764270596904985a3cc98307f0b1481b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8952ab32683e7de0b043a5162a32a96764270596904985a3cc98307f0b1481b0->enter($__internal_8952ab32683e7de0b043a5162a32a96764270596904985a3cc98307f0b1481b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_8952ab32683e7de0b043a5162a32a96764270596904985a3cc98307f0b1481b0->leave($__internal_8952ab32683e7de0b043a5162a32a96764270596904985a3cc98307f0b1481b0_prof);

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
