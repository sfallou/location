<?php

/* :typecharge:show.html.twig */
class __TwigTemplate_4ae433e03d1f1c9639a45d2a1cad408e2772d2e6d36d91d2bfb52276416526a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecharge:show.html.twig", 1);
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
        $__internal_77827cab8c883b7008cec5f4fd1ce8197975bb4dbe0154a2ea4e7367f36341be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77827cab8c883b7008cec5f4fd1ce8197975bb4dbe0154a2ea4e7367f36341be->enter($__internal_77827cab8c883b7008cec5f4fd1ce8197975bb4dbe0154a2ea4e7367f36341be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecharge:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77827cab8c883b7008cec5f4fd1ce8197975bb4dbe0154a2ea4e7367f36341be->leave($__internal_77827cab8c883b7008cec5f4fd1ce8197975bb4dbe0154a2ea4e7367f36341be_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_28098b9dd0609a4e40202cd4a5a0f30bd3532509d468d2027ad5595baa21e4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28098b9dd0609a4e40202cd4a5a0f30bd3532509d468d2027ad5595baa21e4cf->enter($__internal_28098b9dd0609a4e40202cd4a5a0f30bd3532509d468d2027ad5595baa21e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeCharge"]) ? $context["typeCharge"] : $this->getContext($context, "typeCharge")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeCharge"]) ? $context["typeCharge"] : $this->getContext($context, "typeCharge")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_28098b9dd0609a4e40202cd4a5a0f30bd3532509d468d2027ad5595baa21e4cf->leave($__internal_28098b9dd0609a4e40202cd4a5a0f30bd3532509d468d2027ad5595baa21e4cf_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7208c5cf970dbf26e4f43df94e0dbf07aacbed922f5db72df1072cd4a873c3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7208c5cf970dbf26e4f43df94e0dbf07aacbed922f5db72df1072cd4a873c3a9->enter($__internal_7208c5cf970dbf26e4f43df94e0dbf07aacbed922f5db72df1072cd4a873c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_7208c5cf970dbf26e4f43df94e0dbf07aacbed922f5db72df1072cd4a873c3a9->leave($__internal_7208c5cf970dbf26e4f43df94e0dbf07aacbed922f5db72df1072cd4a873c3a9_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2a3f4350a39fd60c7fcf159ffdb4dcdc860fcc72b5a2606f4de720da1b9f51cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3f4350a39fd60c7fcf159ffdb4dcdc860fcc72b5a2606f4de720da1b9f51cd->enter($__internal_2a3f4350a39fd60c7fcf159ffdb4dcdc860fcc72b5a2606f4de720da1b9f51cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_2a3f4350a39fd60c7fcf159ffdb4dcdc860fcc72b5a2606f4de720da1b9f51cd->leave($__internal_2a3f4350a39fd60c7fcf159ffdb4dcdc860fcc72b5a2606f4de720da1b9f51cd_prof);

    }

    public function getTemplateName()
    {
        return ":typecharge:show.html.twig";
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
                                <li><strong>ID :</strong> {{typeCharge.id}}</li>
                                <li><strong>Nom :</strong> {{typeCharge.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Charge {% endblock %}
{% block page_subtitle %} show {% endblock %}


", ":typecharge:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/show.html.twig");
    }
}
