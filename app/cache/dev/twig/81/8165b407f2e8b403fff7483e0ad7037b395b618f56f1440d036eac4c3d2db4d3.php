<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_369e45a4c5337217d908982479078c25b2285994e30aa4f7c07eeb81c9c0381d extends Twig_Template
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
        $__internal_a9a1a9fccbeb3002b4013eb7d21bfda677fd8458bc45807e0d82d32da65ee028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a1a9fccbeb3002b4013eb7d21bfda677fd8458bc45807e0d82d32da65ee028->enter($__internal_a9a1a9fccbeb3002b4013eb7d21bfda677fd8458bc45807e0d82d32da65ee028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a1a9fccbeb3002b4013eb7d21bfda677fd8458bc45807e0d82d32da65ee028->leave($__internal_a9a1a9fccbeb3002b4013eb7d21bfda677fd8458bc45807e0d82d32da65ee028_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_81dad80d2741b1c18f276e3ffeabb8deb69520add1cd1f4a17377df4897450c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dad80d2741b1c18f276e3ffeabb8deb69520add1cd1f4a17377df4897450c2->enter($__internal_81dad80d2741b1c18f276e3ffeabb8deb69520add1cd1f4a17377df4897450c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_81dad80d2741b1c18f276e3ffeabb8deb69520add1cd1f4a17377df4897450c2->leave($__internal_81dad80d2741b1c18f276e3ffeabb8deb69520add1cd1f4a17377df4897450c2_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9578d957fe316165cb2095aae452ae14da7c2faebaad5222ff978c46efa79a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9578d957fe316165cb2095aae452ae14da7c2faebaad5222ff978c46efa79a40->enter($__internal_9578d957fe316165cb2095aae452ae14da7c2faebaad5222ff978c46efa79a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_9578d957fe316165cb2095aae452ae14da7c2faebaad5222ff978c46efa79a40->leave($__internal_9578d957fe316165cb2095aae452ae14da7c2faebaad5222ff978c46efa79a40_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_29752e3da35ef1ea4899746600bc8d4e952d1deaf9d10638a7f8c96edefc6790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29752e3da35ef1ea4899746600bc8d4e952d1deaf9d10638a7f8c96edefc6790->enter($__internal_29752e3da35ef1ea4899746600bc8d4e952d1deaf9d10638a7f8c96edefc6790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_29752e3da35ef1ea4899746600bc8d4e952d1deaf9d10638a7f8c96edefc6790->leave($__internal_29752e3da35ef1ea4899746600bc8d4e952d1deaf9d10638a7f8c96edefc6790_prof);

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
