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
        $__internal_5201324b8d8be5b8c7ea328bb9c589343d50a0aff167bf842379c0b71074f5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5201324b8d8be5b8c7ea328bb9c589343d50a0aff167bf842379c0b71074f5fe->enter($__internal_5201324b8d8be5b8c7ea328bb9c589343d50a0aff167bf842379c0b71074f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5201324b8d8be5b8c7ea328bb9c589343d50a0aff167bf842379c0b71074f5fe->leave($__internal_5201324b8d8be5b8c7ea328bb9c589343d50a0aff167bf842379c0b71074f5fe_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_80ed327ae242cda9894ea586aa08011dede4b1ebb6bee7b43f00fa28f9bee83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ed327ae242cda9894ea586aa08011dede4b1ebb6bee7b43f00fa28f9bee83f->enter($__internal_80ed327ae242cda9894ea586aa08011dede4b1ebb6bee7b43f00fa28f9bee83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_80ed327ae242cda9894ea586aa08011dede4b1ebb6bee7b43f00fa28f9bee83f->leave($__internal_80ed327ae242cda9894ea586aa08011dede4b1ebb6bee7b43f00fa28f9bee83f_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e0573931f9c7be95113755c876643a4a1256c5589a50bdeca30243c3a62fedad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0573931f9c7be95113755c876643a4a1256c5589a50bdeca30243c3a62fedad->enter($__internal_e0573931f9c7be95113755c876643a4a1256c5589a50bdeca30243c3a62fedad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_e0573931f9c7be95113755c876643a4a1256c5589a50bdeca30243c3a62fedad->leave($__internal_e0573931f9c7be95113755c876643a4a1256c5589a50bdeca30243c3a62fedad_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d1eeb975ab1eb59dae8045ddd800f8404ca1d4d681857f504fe094cc503bf025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1eeb975ab1eb59dae8045ddd800f8404ca1d4d681857f504fe094cc503bf025->enter($__internal_d1eeb975ab1eb59dae8045ddd800f8404ca1d4d681857f504fe094cc503bf025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_d1eeb975ab1eb59dae8045ddd800f8404ca1d4d681857f504fe094cc503bf025->leave($__internal_d1eeb975ab1eb59dae8045ddd800f8404ca1d4d681857f504fe094cc503bf025_prof);

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
