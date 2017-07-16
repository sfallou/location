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
        $__internal_886c170d5fe65177f4f630af4f62eba573c8c79aec36b2b0ceb8786874c8a873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886c170d5fe65177f4f630af4f62eba573c8c79aec36b2b0ceb8786874c8a873->enter($__internal_886c170d5fe65177f4f630af4f62eba573c8c79aec36b2b0ceb8786874c8a873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886c170d5fe65177f4f630af4f62eba573c8c79aec36b2b0ceb8786874c8a873->leave($__internal_886c170d5fe65177f4f630af4f62eba573c8c79aec36b2b0ceb8786874c8a873_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b67ac7540d3ad38b5bb8c8ecab63eedd5ad128e0fdee7a5df13111e865873ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67ac7540d3ad38b5bb8c8ecab63eedd5ad128e0fdee7a5df13111e865873ff5->enter($__internal_b67ac7540d3ad38b5bb8c8ecab63eedd5ad128e0fdee7a5df13111e865873ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b67ac7540d3ad38b5bb8c8ecab63eedd5ad128e0fdee7a5df13111e865873ff5->leave($__internal_b67ac7540d3ad38b5bb8c8ecab63eedd5ad128e0fdee7a5df13111e865873ff5_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8afdb20def7034e6101d8d35a4a43829a73ed4371ae1c171db14d2f03fd002d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afdb20def7034e6101d8d35a4a43829a73ed4371ae1c171db14d2f03fd002d2->enter($__internal_8afdb20def7034e6101d8d35a4a43829a73ed4371ae1c171db14d2f03fd002d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_8afdb20def7034e6101d8d35a4a43829a73ed4371ae1c171db14d2f03fd002d2->leave($__internal_8afdb20def7034e6101d8d35a4a43829a73ed4371ae1c171db14d2f03fd002d2_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_449c969cd068dd2a04e4a48bc575a8ce65c089bcd19528adaa0cf348e314eab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449c969cd068dd2a04e4a48bc575a8ce65c089bcd19528adaa0cf348e314eab7->enter($__internal_449c969cd068dd2a04e4a48bc575a8ce65c089bcd19528adaa0cf348e314eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_449c969cd068dd2a04e4a48bc575a8ce65c089bcd19528adaa0cf348e314eab7->leave($__internal_449c969cd068dd2a04e4a48bc575a8ce65c089bcd19528adaa0cf348e314eab7_prof);

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
