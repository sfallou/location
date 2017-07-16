<?php

/* AvanzuAdminThemeBundle:Default:add_locataire.html.twig */
class __TwigTemplate_6626208cf4f132829a0211f5a7c5651193c6f630cda5f091dcad7b3f8343e4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_locataire.html.twig", 1);
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
        $__internal_33ee4855b61b9ad0c1bd159631c0c8a8224d3d52398e7850ca66e35e0932169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ee4855b61b9ad0c1bd159631c0c8a8224d3d52398e7850ca66e35e0932169b->enter($__internal_33ee4855b61b9ad0c1bd159631c0c8a8224d3d52398e7850ca66e35e0932169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_locataire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ee4855b61b9ad0c1bd159631c0c8a8224d3d52398e7850ca66e35e0932169b->leave($__internal_33ee4855b61b9ad0c1bd159631c0c8a8224d3d52398e7850ca66e35e0932169b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4fc7207bc9c6473de4e04a35a71269fef141ca54eb63b74ae924221da9784cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc7207bc9c6473de4e04a35a71269fef141ca54eb63b74ae924221da9784cb0->enter($__internal_4fc7207bc9c6473de4e04a35a71269fef141ca54eb63b74ae924221da9784cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_4fc7207bc9c6473de4e04a35a71269fef141ca54eb63b74ae924221da9784cb0->leave($__internal_4fc7207bc9c6473de4e04a35a71269fef141ca54eb63b74ae924221da9784cb0_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7e5ccee37e8242a175858038edda84235c34080fa3861d63a3827ffa15e37392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5ccee37e8242a175858038edda84235c34080fa3861d63a3827ffa15e37392->enter($__internal_7e5ccee37e8242a175858038edda84235c34080fa3861d63a3827ffa15e37392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_7e5ccee37e8242a175858038edda84235c34080fa3861d63a3827ffa15e37392->leave($__internal_7e5ccee37e8242a175858038edda84235c34080fa3861d63a3827ffa15e37392_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e3985eda603a00ea65b983e4a4adb7c6e41a5f926ff7f523d8ca54c1ff6360b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3985eda603a00ea65b983e4a4adb7c6e41a5f926ff7f523d8ca54c1ff6360b7->enter($__internal_e3985eda603a00ea65b983e4a4adb7c6e41a5f926ff7f523d8ca54c1ff6360b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_e3985eda603a00ea65b983e4a4adb7c6e41a5f926ff7f523d8ca54c1ff6360b7->leave($__internal_e3985eda603a00ea65b983e4a4adb7c6e41a5f926ff7f523d8ca54c1ff6360b7_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_locataire.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:add_locataire.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_locataire.html.twig");
    }
}
