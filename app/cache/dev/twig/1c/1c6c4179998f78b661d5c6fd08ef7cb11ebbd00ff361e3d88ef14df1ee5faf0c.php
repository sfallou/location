<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_218cab5a3609614fe1f2c334304d84500a4b6f4bfa09cde6d91261d1d9ffe544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bbac84daf8b74b858ec982d646ebda57aa848b699d37417b001acd52abfb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bbac84daf8b74b858ec982d646ebda57aa848b699d37417b001acd52abfb45->enter($__internal_d8bbac84daf8b74b858ec982d646ebda57aa848b699d37417b001acd52abfb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bbac84daf8b74b858ec982d646ebda57aa848b699d37417b001acd52abfb45->leave($__internal_d8bbac84daf8b74b858ec982d646ebda57aa848b699d37417b001acd52abfb45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ebf102f6cdfcef2ba4af74ccb9683f31d54b4333061cfc521984b541ec5c958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebf102f6cdfcef2ba4af74ccb9683f31d54b4333061cfc521984b541ec5c958->enter($__internal_7ebf102f6cdfcef2ba4af74ccb9683f31d54b4333061cfc521984b541ec5c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7ebf102f6cdfcef2ba4af74ccb9683f31d54b4333061cfc521984b541ec5c958->leave($__internal_7ebf102f6cdfcef2ba4af74ccb9683f31d54b4333061cfc521984b541ec5c958_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
