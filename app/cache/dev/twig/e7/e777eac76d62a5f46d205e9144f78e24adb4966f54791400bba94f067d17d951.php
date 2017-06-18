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
        $__internal_43bd06c66a6fab46831cec9f502a906b0869f0e2c245b6cbde97e0a0422d2814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bd06c66a6fab46831cec9f502a906b0869f0e2c245b6cbde97e0a0422d2814->enter($__internal_43bd06c66a6fab46831cec9f502a906b0869f0e2c245b6cbde97e0a0422d2814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_appart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43bd06c66a6fab46831cec9f502a906b0869f0e2c245b6cbde97e0a0422d2814->leave($__internal_43bd06c66a6fab46831cec9f502a906b0869f0e2c245b6cbde97e0a0422d2814_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a328dd0d42abd142387e1ad9be47bcb1d0878c5f1fdfa36259de4d32089e83bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a328dd0d42abd142387e1ad9be47bcb1d0878c5f1fdfa36259de4d32089e83bd->enter($__internal_a328dd0d42abd142387e1ad9be47bcb1d0878c5f1fdfa36259de4d32089e83bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <img src=\"../img/img_appart.jpg\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_a328dd0d42abd142387e1ad9be47bcb1d0878c5f1fdfa36259de4d32089e83bd->leave($__internal_a328dd0d42abd142387e1ad9be47bcb1d0878c5f1fdfa36259de4d32089e83bd_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b4cf116700f3f2bac7e7d21a282c4651e1067e437d9ac1fe6c5a91f3f126096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cf116700f3f2bac7e7d21a282c4651e1067e437d9ac1fe6c5a91f3f126096f->enter($__internal_b4cf116700f3f2bac7e7d21a282c4651e1067e437d9ac1fe6c5a91f3f126096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Appart ";
        
        $__internal_b4cf116700f3f2bac7e7d21a282c4651e1067e437d9ac1fe6c5a91f3f126096f->leave($__internal_b4cf116700f3f2bac7e7d21a282c4651e1067e437d9ac1fe6c5a91f3f126096f_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c4ff1b228f6fb339f168b1fa8211bc6bd7f92d6f2032476f89a3fdd035c23b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ff1b228f6fb339f168b1fa8211bc6bd7f92d6f2032476f89a3fdd035c23b48->enter($__internal_c4ff1b228f6fb339f168b1fa8211bc6bd7f92d6f2032476f89a3fdd035c23b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new appart form ";
        
        $__internal_c4ff1b228f6fb339f168b1fa8211bc6bd7f92d6f2032476f89a3fdd035c23b48->leave($__internal_c4ff1b228f6fb339f168b1fa8211bc6bd7f92d6f2032476f89a3fdd035c23b48_prof);

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
                    <img src=\"../img/img_appart.jpg\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Add Appart {% endblock %}
{% block page_subtitle %} add new appart form {% endblock %}", "AvanzuAdminThemeBundle:Default:add_appart.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_appart.html.twig");
    }
}
