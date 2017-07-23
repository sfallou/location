<?php

/* :typemeuble:show.html.twig */
class __TwigTemplate_4718826cd0b60b65f3cea0b21a1dce70879e10ba527f2aa9fe7cf8a0f8b34385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typemeuble:show.html.twig", 1);
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
        $__internal_1a4b9b8d3415c936ba5f98946db3b892a6d3662a1cea562206f6788b0c14ee68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4b9b8d3415c936ba5f98946db3b892a6d3662a1cea562206f6788b0c14ee68->enter($__internal_1a4b9b8d3415c936ba5f98946db3b892a6d3662a1cea562206f6788b0c14ee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typemeuble:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4b9b8d3415c936ba5f98946db3b892a6d3662a1cea562206f6788b0c14ee68->leave($__internal_1a4b9b8d3415c936ba5f98946db3b892a6d3662a1cea562206f6788b0c14ee68_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3c521588016af65aedac8e61ac3cbc6977ce1607ab0d6585cd4b1a1a92bd1f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c521588016af65aedac8e61ac3cbc6977ce1607ab0d6585cd4b1a1a92bd1f41->enter($__internal_3c521588016af65aedac8e61ac3cbc6977ce1607ab0d6585cd4b1a1a92bd1f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_3c521588016af65aedac8e61ac3cbc6977ce1607ab0d6585cd4b1a1a92bd1f41->leave($__internal_3c521588016af65aedac8e61ac3cbc6977ce1607ab0d6585cd4b1a1a92bd1f41_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_afed0e13201564ad8abfb1ea9490f8bfa9deae574b9bdb9bb6094121c9588f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afed0e13201564ad8abfb1ea9490f8bfa9deae574b9bdb9bb6094121c9588f83->enter($__internal_afed0e13201564ad8abfb1ea9490f8bfa9deae574b9bdb9bb6094121c9588f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Meuble ";
        
        $__internal_afed0e13201564ad8abfb1ea9490f8bfa9deae574b9bdb9bb6094121c9588f83->leave($__internal_afed0e13201564ad8abfb1ea9490f8bfa9deae574b9bdb9bb6094121c9588f83_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e7c4c03cbd86173f731f658576825de45076de7ce137093a0a40b5b2f3e2e7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c4c03cbd86173f731f658576825de45076de7ce137093a0a40b5b2f3e2e7e4->enter($__internal_e7c4c03cbd86173f731f658576825de45076de7ce137093a0a40b5b2f3e2e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_e7c4c03cbd86173f731f658576825de45076de7ce137093a0a40b5b2f3e2e7e4->leave($__internal_e7c4c03cbd86173f731f658576825de45076de7ce137093a0a40b5b2f3e2e7e4_prof);

    }

    public function getTemplateName()
    {
        return ":typemeuble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  74 => 26,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> {{typemeuble.id}}</li>
                                <li><strong>Nom :</strong> {{typemeuble.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Meuble {% endblock %}
{% block page_subtitle %} show {% endblock %}", ":typemeuble:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/show.html.twig");
    }
}
