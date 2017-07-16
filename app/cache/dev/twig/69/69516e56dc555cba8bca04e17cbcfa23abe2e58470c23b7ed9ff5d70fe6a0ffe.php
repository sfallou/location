<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_64e0c5c156172814abb7335a6c049f7ccf82b14dff04f0c169b2d59d7cad2c7c extends Twig_Template
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
        $__internal_20cb3fbbb626e2fcd13d247ec32ca3a4f2fbaa490d42b4963ca0e97f3bf3d905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb3fbbb626e2fcd13d247ec32ca3a4f2fbaa490d42b4963ca0e97f3bf3d905->enter($__internal_20cb3fbbb626e2fcd13d247ec32ca3a4f2fbaa490d42b4963ca0e97f3bf3d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20cb3fbbb626e2fcd13d247ec32ca3a4f2fbaa490d42b4963ca0e97f3bf3d905->leave($__internal_20cb3fbbb626e2fcd13d247ec32ca3a4f2fbaa490d42b4963ca0e97f3bf3d905_prof);

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
