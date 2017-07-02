<?php

/* admin/new_residence.html.twig */
class __TwigTemplate_318a01f07c262ebc52726a437f9317bd4c5fb4d31089de65095f59b3cca7180b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "admin/new_residence.html.twig", 1);
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
        $__internal_5397f3b3a6fed895ab33ab940a327865dc82a5b75d9121d0b109542882fedc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5397f3b3a6fed895ab33ab940a327865dc82a5b75d9121d0b109542882fedc36->enter($__internal_5397f3b3a6fed895ab33ab940a327865dc82a5b75d9121d0b109542882fedc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5397f3b3a6fed895ab33ab940a327865dc82a5b75d9121d0b109542882fedc36->leave($__internal_5397f3b3a6fed895ab33ab940a327865dc82a5b75d9121d0b109542882fedc36_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c7a70b6d6ceef6057b7580d1056fdf0c9ef150ec91dca1edee00939962495e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a70b6d6ceef6057b7580d1056fdf0c9ef150ec91dca1edee00939962495e8f->enter($__internal_c7a70b6d6ceef6057b7580d1056fdf0c9ef150ec91dca1edee00939962495e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
                    
                </div>
                
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    <img src=\"../img/img_appart.jpg\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_c7a70b6d6ceef6057b7580d1056fdf0c9ef150ec91dca1edee00939962495e8f->leave($__internal_c7a70b6d6ceef6057b7580d1056fdf0c9ef150ec91dca1edee00939962495e8f_prof);

    }

    // line 46
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d8e36ddbac5a57bf4117ebd56dcc8c08e83857befbd583753b1104c3a04bd3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e36ddbac5a57bf4117ebd56dcc8c08e83857befbd583753b1104c3a04bd3a5->enter($__internal_d8e36ddbac5a57bf4117ebd56dcc8c08e83857befbd583753b1104c3a04bd3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Appart ";
        
        $__internal_d8e36ddbac5a57bf4117ebd56dcc8c08e83857befbd583753b1104c3a04bd3a5->leave($__internal_d8e36ddbac5a57bf4117ebd56dcc8c08e83857befbd583753b1104c3a04bd3a5_prof);

    }

    // line 47
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1d4c6c1c062f3ead4df4a84b57e01c32fefda381c85f36fa14dd7e83eb4d7049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4c6c1c062f3ead4df4a84b57e01c32fefda381c85f36fa14dd7e83eb4d7049->enter($__internal_1d4c6c1c062f3ead4df4a84b57e01c32fefda381c85f36fa14dd7e83eb4d7049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new appart form ";
        
        $__internal_1d4c6c1c062f3ead4df4a84b57e01c32fefda381c85f36fa14dd7e83eb4d7049->leave($__internal_1d4c6c1c062f3ead4df4a84b57e01c32fefda381c85f36fa14dd7e83eb4d7049_prof);

    }

    public function getTemplateName()
    {
        return "admin/new_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  95 => 46,  78 => 35,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
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
                    {{id}}
                    
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
{% block page_subtitle %} add new appart form {% endblock %}", "admin/new_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/admin/new_residence.html.twig");
    }
}
