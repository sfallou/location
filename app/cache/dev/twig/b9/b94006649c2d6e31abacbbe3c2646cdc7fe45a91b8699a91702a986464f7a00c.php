<?php

/* admin/admin.html.twig */
class __TwigTemplate_ea5cb58e54ff74690f73de5c6c0bc36d3da9a7aabc5ed1227b03dcc467df12e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "admin/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b202365dfee146a8bd686fcaced12f1459c287476635df7d14692abe7fcaded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b202365dfee146a8bd686fcaced12f1459c287476635df7d14692abe7fcaded->enter($__internal_9b202365dfee146a8bd686fcaced12f1459c287476635df7d14692abe7fcaded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b202365dfee146a8bd686fcaced12f1459c287476635df7d14692abe7fcaded->leave($__internal_9b202365dfee146a8bd686fcaced12f1459c287476635df7d14692abe7fcaded_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44992316322e13111298a4917cb23f94a6f648b11325d8b412e899fb972a225a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44992316322e13111298a4917cb23f94a6f648b11325d8b412e899fb972a225a->enter($__internal_44992316322e13111298a4917cb23f94a6f648b11325d8b412e899fb972a225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " Kokou Colocation
";
        
        $__internal_44992316322e13111298a4917cb23f94a6f648b11325d8b412e899fb972a225a->leave($__internal_44992316322e13111298a4917cb23f94a6f648b11325d8b412e899fb972a225a_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cbaccd354fc374c5ab69607578954dc0c8d7e2f4a0991bf0423e7ab26f156ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaccd354fc374c5ab69607578954dc0c8d7e2f4a0991bf0423e7ab26f156ef3->enter($__internal_cbaccd354fc374c5ab69607578954dc0c8d7e2f4a0991bf0423e7ab26f156ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 8
        echo " Home
";
        
        $__internal_cbaccd354fc374c5ab69607578954dc0c8d7e2f4a0991bf0423e7ab26f156ef3->leave($__internal_cbaccd354fc374c5ab69607578954dc0c8d7e2f4a0991bf0423e7ab26f156ef3_prof);

    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_dad0b96927feead6bb2d3c1efac27db3ec0b956d6305ff29d736e7c7e62a5e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad0b96927feead6bb2d3c1efac27db3ec0b956d6305ff29d736e7c7e62a5e07->enter($__internal_dad0b96927feead6bb2d3c1efac27db3ec0b956d6305ff29d736e7c7e62a5e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 12
        echo " bienvenue sur votre espace de colocation
";
        
        $__internal_dad0b96927feead6bb2d3c1efac27db3ec0b956d6305ff29d736e7c7e62a5e07->leave($__internal_dad0b96927feead6bb2d3c1efac27db3ec0b956d6305ff29d736e7c7e62a5e07_prof);

    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_33d9b888261226bcbc1ce4e4fd97439fa459619d8da16c714941cc8e9cd90c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d9b888261226bcbc1ce4e4fd97439fa459619d8da16c714941cc8e9cd90c70->enter($__internal_33d9b888261226bcbc1ce4e4fd97439fa459619d8da16c714941cc8e9cd90c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 16
        echo "    <div >
        hello !
    </div>
";
        
        $__internal_33d9b888261226bcbc1ce4e4fd97439fa459619d8da16c714941cc8e9cd90c70->leave($__internal_33d9b888261226bcbc1ce4e4fd97439fa459619d8da16c714941cc8e9cd90c70_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 15,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

{% block title %}
 Kokou Colocation
{% endblock %}

{% block page_title %}
 Home
{% endblock %}

{% block page_subtitle %}
 bienvenue sur votre espace de colocation
{% endblock %}

{% block page_content %}
    <div >
        hello !
    </div>
{% endblock %}", "admin/admin.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/admin/admin.html.twig");
    }
}
