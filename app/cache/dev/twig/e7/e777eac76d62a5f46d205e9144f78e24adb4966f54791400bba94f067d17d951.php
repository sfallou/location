<?php

/* AvanzuAdminThemeBundle:Default:add_appart.html.twig */
class __TwigTemplate_d32c0d4bf163a2b0c4a589e167b6c682b68021085030207337199877c7854d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_appart.html.twig", 1);
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
        $__internal_896adceeb14f7da251073d70d7b8b6e10d1de8483e9ef5f52da326a15ff35636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896adceeb14f7da251073d70d7b8b6e10d1de8483e9ef5f52da326a15ff35636->enter($__internal_896adceeb14f7da251073d70d7b8b6e10d1de8483e9ef5f52da326a15ff35636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_appart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896adceeb14f7da251073d70d7b8b6e10d1de8483e9ef5f52da326a15ff35636->leave($__internal_896adceeb14f7da251073d70d7b8b6e10d1de8483e9ef5f52da326a15ff35636_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1c2c3a9a539863b61294c15188c18f07bae9af8215a4bde9d5896482406ea063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2c3a9a539863b61294c15188c18f07bae9af8215a4bde9d5896482406ea063->enter($__internal_1c2c3a9a539863b61294c15188c18f07bae9af8215a4bde9d5896482406ea063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <h3 class=\"box-title\">New Appart</h3>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                    blaballlaaa
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_1c2c3a9a539863b61294c15188c18f07bae9af8215a4bde9d5896482406ea063->leave($__internal_1c2c3a9a539863b61294c15188c18f07bae9af8215a4bde9d5896482406ea063_prof);

    }

    // line 52
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_372bc7f8d66873863d6f0eb89ec42a36098f978ffdf21eb4ca04682d306e620a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372bc7f8d66873863d6f0eb89ec42a36098f978ffdf21eb4ca04682d306e620a->enter($__internal_372bc7f8d66873863d6f0eb89ec42a36098f978ffdf21eb4ca04682d306e620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Appart ";
        
        $__internal_372bc7f8d66873863d6f0eb89ec42a36098f978ffdf21eb4ca04682d306e620a->leave($__internal_372bc7f8d66873863d6f0eb89ec42a36098f978ffdf21eb4ca04682d306e620a_prof);

    }

    // line 53
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_62f030c20f8ef0ba6e2b30fcb081fbc868ae87f89380f90105ee12e3a5d41f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f030c20f8ef0ba6e2b30fcb081fbc868ae87f89380f90105ee12e3a5d41f61->enter($__internal_62f030c20f8ef0ba6e2b30fcb081fbc868ae87f89380f90105ee12e3a5d41f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new appart form ";
        
        $__internal_62f030c20f8ef0ba6e2b30fcb081fbc868ae87f89380f90105ee12e3a5d41f61->leave($__internal_62f030c20f8ef0ba6e2b30fcb081fbc868ae87f89380f90105ee12e3a5d41f61_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_appart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  101 => 52,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
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
                    <h3 class=\"box-title\">New Appart</h3>
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
                {{ macro.box_header('Infos', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                    blaballlaaa
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Add Appart {% endblock %}
{% block page_subtitle %} add new appart form {% endblock %}", "AvanzuAdminThemeBundle:Default:add_appart.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_appart.html.twig");
    }
}
