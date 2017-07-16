<?php

/* :meuble:show.html.twig */
class __TwigTemplate_fc3060daf4a3c551f6f2fd1ae5f9a98b5d4ad47fe9084fa6d2493c018520ddd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":meuble:show.html.twig", 1);
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
        $__internal_af859ae147b42bdc19fc47aa0bba394826344dda2fba7bdf420ff68ddf8a5c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af859ae147b42bdc19fc47aa0bba394826344dda2fba7bdf420ff68ddf8a5c78->enter($__internal_af859ae147b42bdc19fc47aa0bba394826344dda2fba7bdf420ff68ddf8a5c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af859ae147b42bdc19fc47aa0bba394826344dda2fba7bdf420ff68ddf8a5c78->leave($__internal_af859ae147b42bdc19fc47aa0bba394826344dda2fba7bdf420ff68ddf8a5c78_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ba6625970e9c8325d3c7bfd58437d7754c33318104870c50baf1b61d4a8639d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6625970e9c8325d3c7bfd58437d7754c33318104870c50baf1b61d4a8639d3->enter($__internal_ba6625970e9c8325d3c7bfd58437d7754c33318104870c50baf1b61d4a8639d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                                <li><strong>ID meuble :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meuble"]) ? $context["meuble"] : $this->getContext($context, "meuble")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Wording :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meuble"]) ? $context["meuble"] : $this->getContext($context, "meuble")), "name", array()), "html", null, true);
        echo "</li>
                                <li><strong>Type Meuble :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type_meuble"]) ? $context["type_meuble"] : $this->getContext($context, "type_meuble")), "name", array()), "html", null, true);
        echo " </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
";
        
        $__internal_ba6625970e9c8325d3c7bfd58437d7754c33318104870c50baf1b61d4a8639d3->leave($__internal_ba6625970e9c8325d3c7bfd58437d7754c33318104870c50baf1b61d4a8639d3_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_623767c39315325408ad516a225cab774c8417e2035615caaf6961549803c719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623767c39315325408ad516a225cab774c8417e2035615caaf6961549803c719->enter($__internal_623767c39315325408ad516a225cab774c8417e2035615caaf6961549803c719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_623767c39315325408ad516a225cab774c8417e2035615caaf6961549803c719->leave($__internal_623767c39315325408ad516a225cab774c8417e2035615caaf6961549803c719_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6fb8259fda8f18fc624be5bc0c7c55e14a7483a00193a46cb27286fd7962c417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8259fda8f18fc624be5bc0c7c55e14a7483a00193a46cb27286fd7962c417->enter($__internal_6fb8259fda8f18fc624be5bc0c7c55e14a7483a00193a46cb27286fd7962c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_6fb8259fda8f18fc624be5bc0c7c55e14a7483a00193a46cb27286fd7962c417->leave($__internal_6fb8259fda8f18fc624be5bc0c7c55e14a7483a00193a46cb27286fd7962c417_prof);

    }

    public function getTemplateName()
    {
        return ":meuble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  78 => 26,  63 => 17,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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
                                <li><strong>ID meuble :</strong> {{meuble.id}}</li>
                                <li><strong>Wording :</strong> {{meuble.name}}</li>
                                <li><strong>Type Meuble :</strong> {{type_meuble.name}} </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
{% endblock %}

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} show {% endblock %}



", ":meuble:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/show.html.twig");
    }
}
