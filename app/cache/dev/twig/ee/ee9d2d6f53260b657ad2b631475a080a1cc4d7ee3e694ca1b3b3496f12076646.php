<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_31118b30a1a53eb635f6503fb5b2dd0280d21ca1bb88a14c4a64c7bb6b7f3be9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2100bffe6977d154b104c510ab9fcf3aa0853871d8dda3e029df682f2f041ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2100bffe6977d154b104c510ab9fcf3aa0853871d8dda3e029df682f2f041ab->enter($__internal_c2100bffe6977d154b104c510ab9fcf3aa0853871d8dda3e029df682f2f041ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2100bffe6977d154b104c510ab9fcf3aa0853871d8dda3e029df682f2f041ab->leave($__internal_c2100bffe6977d154b104c510ab9fcf3aa0853871d8dda3e029df682f2f041ab_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
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



", "AvanzuAdminThemeBundle:Default:index.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/index.html.twig");
    }
}