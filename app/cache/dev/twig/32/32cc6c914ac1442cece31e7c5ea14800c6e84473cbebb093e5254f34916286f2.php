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
        $__internal_95d7a5ded6fcf1af76206e1cfaa4e271c5539994835e8e989a9ac0b16bebf253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d7a5ded6fcf1af76206e1cfaa4e271c5539994835e8e989a9ac0b16bebf253->enter($__internal_95d7a5ded6fcf1af76206e1cfaa4e271c5539994835e8e989a9ac0b16bebf253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d7a5ded6fcf1af76206e1cfaa4e271c5539994835e8e989a9ac0b16bebf253->leave($__internal_95d7a5ded6fcf1af76206e1cfaa4e271c5539994835e8e989a9ac0b16bebf253_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0cf7553fde59cb567e5375cf1e06541715e4cef6f411d1d3c68fe14e3dc5eca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf7553fde59cb567e5375cf1e06541715e4cef6f411d1d3c68fe14e3dc5eca7->enter($__internal_0cf7553fde59cb567e5375cf1e06541715e4cef6f411d1d3c68fe14e3dc5eca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0cf7553fde59cb567e5375cf1e06541715e4cef6f411d1d3c68fe14e3dc5eca7->leave($__internal_0cf7553fde59cb567e5375cf1e06541715e4cef6f411d1d3c68fe14e3dc5eca7_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ccfa65167bab3b80a459f28d167efd6f0925e49d3092c0718142b0df5c88d25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfa65167bab3b80a459f28d167efd6f0925e49d3092c0718142b0df5c88d25a->enter($__internal_ccfa65167bab3b80a459f28d167efd6f0925e49d3092c0718142b0df5c88d25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_ccfa65167bab3b80a459f28d167efd6f0925e49d3092c0718142b0df5c88d25a->leave($__internal_ccfa65167bab3b80a459f28d167efd6f0925e49d3092c0718142b0df5c88d25a_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_159dccecd25df8cda68665afd7603d0396fc78e0068a19cb0de3d16be5768ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159dccecd25df8cda68665afd7603d0396fc78e0068a19cb0de3d16be5768ca4->enter($__internal_159dccecd25df8cda68665afd7603d0396fc78e0068a19cb0de3d16be5768ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_159dccecd25df8cda68665afd7603d0396fc78e0068a19cb0de3d16be5768ca4->leave($__internal_159dccecd25df8cda68665afd7603d0396fc78e0068a19cb0de3d16be5768ca4_prof);

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
