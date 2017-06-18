<?php

/* AvanzuAdminThemeBundle:Default:add_residence.html.twig */
class __TwigTemplate_c3ce9150acdcf19123e334e9f80585a5accb2b663a9bd26af55e3632579590ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", 1);
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
        $__internal_59c3e93768241871e6aa3858584813b86b78f448622fc924c230cd3f170573d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c3e93768241871e6aa3858584813b86b78f448622fc924c230cd3f170573d1->enter($__internal_59c3e93768241871e6aa3858584813b86b78f448622fc924c230cd3f170573d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c3e93768241871e6aa3858584813b86b78f448622fc924c230cd3f170573d1->leave($__internal_59c3e93768241871e6aa3858584813b86b78f448622fc924c230cd3f170573d1_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_504d090e701416fd0d4ec17a0a629e7ac17dbf67a7edd70f8ae79d1f46798bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504d090e701416fd0d4ec17a0a629e7ac17dbf67a7edd70f8ae79d1f46798bbc->enter($__internal_504d090e701416fd0d4ec17a0a629e7ac17dbf67a7edd70f8ae79d1f46798bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_504d090e701416fd0d4ec17a0a629e7ac17dbf67a7edd70f8ae79d1f46798bbc->leave($__internal_504d090e701416fd0d4ec17a0a629e7ac17dbf67a7edd70f8ae79d1f46798bbc_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7efb376c367a0be69b4858c6ad567b06776699253689b9774f9fc5119c804d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efb376c367a0be69b4858c6ad567b06776699253689b9774f9fc5119c804d7e->enter($__internal_7efb376c367a0be69b4858c6ad567b06776699253689b9774f9fc5119c804d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_7efb376c367a0be69b4858c6ad567b06776699253689b9774f9fc5119c804d7e->leave($__internal_7efb376c367a0be69b4858c6ad567b06776699253689b9774f9fc5119c804d7e_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2008bd6a9a2399337c4b2fb217dd16a302dca38b6c4e6363f88ff52de944b642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2008bd6a9a2399337c4b2fb217dd16a302dca38b6c4e6363f88ff52de944b642->enter($__internal_2008bd6a9a2399337c4b2fb217dd16a302dca38b6c4e6363f88ff52de944b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_2008bd6a9a2399337c4b2fb217dd16a302dca38b6c4e6363f88ff52de944b642->leave($__internal_2008bd6a9a2399337c4b2fb217dd16a302dca38b6c4e6363f88ff52de944b642_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_residence.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_residence.html.twig");
    }
}
