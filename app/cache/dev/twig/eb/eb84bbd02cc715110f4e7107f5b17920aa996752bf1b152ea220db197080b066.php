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
        $__internal_341062fe5d7b4c91db323e9aad7aaf18818f2315c4c8fed95fd108f577577127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341062fe5d7b4c91db323e9aad7aaf18818f2315c4c8fed95fd108f577577127->enter($__internal_341062fe5d7b4c91db323e9aad7aaf18818f2315c4c8fed95fd108f577577127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341062fe5d7b4c91db323e9aad7aaf18818f2315c4c8fed95fd108f577577127->leave($__internal_341062fe5d7b4c91db323e9aad7aaf18818f2315c4c8fed95fd108f577577127_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_203a34cf905d9ce75cffab6055564014654daa021f9d3c2b8c875fe3553d9fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203a34cf905d9ce75cffab6055564014654daa021f9d3c2b8c875fe3553d9fea->enter($__internal_203a34cf905d9ce75cffab6055564014654daa021f9d3c2b8c875fe3553d9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_203a34cf905d9ce75cffab6055564014654daa021f9d3c2b8c875fe3553d9fea->leave($__internal_203a34cf905d9ce75cffab6055564014654daa021f9d3c2b8c875fe3553d9fea_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9d8be1d18bbe60dfaf8e513490e6016a992c81fba1dda7b8a9d8b85f4986a27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8be1d18bbe60dfaf8e513490e6016a992c81fba1dda7b8a9d8b85f4986a27c->enter($__internal_9d8be1d18bbe60dfaf8e513490e6016a992c81fba1dda7b8a9d8b85f4986a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_9d8be1d18bbe60dfaf8e513490e6016a992c81fba1dda7b8a9d8b85f4986a27c->leave($__internal_9d8be1d18bbe60dfaf8e513490e6016a992c81fba1dda7b8a9d8b85f4986a27c_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_47df2ac0d4395869b1872a27e636528568e735d122ed93a07653a18205d7ae54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47df2ac0d4395869b1872a27e636528568e735d122ed93a07653a18205d7ae54->enter($__internal_47df2ac0d4395869b1872a27e636528568e735d122ed93a07653a18205d7ae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_47df2ac0d4395869b1872a27e636528568e735d122ed93a07653a18205d7ae54->leave($__internal_47df2ac0d4395869b1872a27e636528568e735d122ed93a07653a18205d7ae54_prof);

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
