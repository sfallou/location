<?php

/* AvanzuAdminThemeBundle:Default:add_meuble.html.twig */
class __TwigTemplate_a8c5861d27c748e2b03e79c85d182182b4ad394511a219d14652ee35ef3b3b1d extends Twig_Template
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
        $__internal_0d48d6a7d271974a27d7cbdbd264ced08cdb0e8895e8d648adb47b97513d70c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d48d6a7d271974a27d7cbdbd264ced08cdb0e8895e8d648adb47b97513d70c3->enter($__internal_0d48d6a7d271974a27d7cbdbd264ced08cdb0e8895e8d648adb47b97513d70c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d48d6a7d271974a27d7cbdbd264ced08cdb0e8895e8d648adb47b97513d70c3->leave($__internal_0d48d6a7d271974a27d7cbdbd264ced08cdb0e8895e8d648adb47b97513d70c3_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d0c101369852b623121ab04615e1860543942c149249e0c07c25b72b1b7f7851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c101369852b623121ab04615e1860543942c149249e0c07c25b72b1b7f7851->enter($__internal_d0c101369852b623121ab04615e1860543942c149249e0c07c25b72b1b7f7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_d0c101369852b623121ab04615e1860543942c149249e0c07c25b72b1b7f7851->leave($__internal_d0c101369852b623121ab04615e1860543942c149249e0c07c25b72b1b7f7851_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_147fe50a7894916a42606eaa24dfa75bcd676e87fc3b080378e11dcd2e5da0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147fe50a7894916a42606eaa24dfa75bcd676e87fc3b080378e11dcd2e5da0cd->enter($__internal_147fe50a7894916a42606eaa24dfa75bcd676e87fc3b080378e11dcd2e5da0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_147fe50a7894916a42606eaa24dfa75bcd676e87fc3b080378e11dcd2e5da0cd->leave($__internal_147fe50a7894916a42606eaa24dfa75bcd676e87fc3b080378e11dcd2e5da0cd_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_35d339ed8838e1feed076adfba2833ed3ebb8434eccf9d1db118ab9763ad946d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d339ed8838e1feed076adfba2833ed3ebb8434eccf9d1db118ab9763ad946d->enter($__internal_35d339ed8838e1feed076adfba2833ed3ebb8434eccf9d1db118ab9763ad946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_35d339ed8838e1feed076adfba2833ed3ebb8434eccf9d1db118ab9763ad946d->leave($__internal_35d339ed8838e1feed076adfba2833ed3ebb8434eccf9d1db118ab9763ad946d_prof);

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
