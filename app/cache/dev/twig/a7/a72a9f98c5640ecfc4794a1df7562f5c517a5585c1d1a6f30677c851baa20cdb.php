<?php

/* AvanzuAdminThemeBundle:Default:add_room.html.twig */
class __TwigTemplate_6750b28fda7f95dd29e1f9e13c5fc52c428941a5927b74007cd9c6d8403fbe5a extends Twig_Template
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
        $__internal_a670e52fc10ea53851f04bee2ba9db9938d627f749bcfb72c46e0424ff976882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a670e52fc10ea53851f04bee2ba9db9938d627f749bcfb72c46e0424ff976882->enter($__internal_a670e52fc10ea53851f04bee2ba9db9938d627f749bcfb72c46e0424ff976882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a670e52fc10ea53851f04bee2ba9db9938d627f749bcfb72c46e0424ff976882->leave($__internal_a670e52fc10ea53851f04bee2ba9db9938d627f749bcfb72c46e0424ff976882_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0dc5f96de9c75a1a13ffd644b62b060b461a20e70edf5a42b78e175bb356ff2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc5f96de9c75a1a13ffd644b62b060b461a20e70edf5a42b78e175bb356ff2b->enter($__internal_0dc5f96de9c75a1a13ffd644b62b060b461a20e70edf5a42b78e175bb356ff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0dc5f96de9c75a1a13ffd644b62b060b461a20e70edf5a42b78e175bb356ff2b->leave($__internal_0dc5f96de9c75a1a13ffd644b62b060b461a20e70edf5a42b78e175bb356ff2b_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_338670635fe94b0eadd40afa45365eaf66eb33e175c3c3dcf2dfd8f2275301db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338670635fe94b0eadd40afa45365eaf66eb33e175c3c3dcf2dfd8f2275301db->enter($__internal_338670635fe94b0eadd40afa45365eaf66eb33e175c3c3dcf2dfd8f2275301db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_338670635fe94b0eadd40afa45365eaf66eb33e175c3c3dcf2dfd8f2275301db->leave($__internal_338670635fe94b0eadd40afa45365eaf66eb33e175c3c3dcf2dfd8f2275301db_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bc5999951afbb4a2f4de570fdc216fd6827254ed1cf619933b91dcd164fcfe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5999951afbb4a2f4de570fdc216fd6827254ed1cf619933b91dcd164fcfe3e->enter($__internal_bc5999951afbb4a2f4de570fdc216fd6827254ed1cf619933b91dcd164fcfe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_bc5999951afbb4a2f4de570fdc216fd6827254ed1cf619933b91dcd164fcfe3e->leave($__internal_bc5999951afbb4a2f4de570fdc216fd6827254ed1cf619933b91dcd164fcfe3e_prof);

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
