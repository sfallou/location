<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_51e3221bf78630bdc7bf322d6b03ba8200b14b494e93fc8f82bb45c2bb452358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4a1c45a8c741f16608407c5bea1a7d292ed47436b4b98b9ac09b98e00e8fd831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1c45a8c741f16608407c5bea1a7d292ed47436b4b98b9ac09b98e00e8fd831->enter($__internal_4a1c45a8c741f16608407c5bea1a7d292ed47436b4b98b9ac09b98e00e8fd831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1c45a8c741f16608407c5bea1a7d292ed47436b4b98b9ac09b98e00e8fd831->leave($__internal_4a1c45a8c741f16608407c5bea1a7d292ed47436b4b98b9ac09b98e00e8fd831_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22fe38eee0c030f169366008672a872cd94d9de7d381de75e9ef3bfdaffa2b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fe38eee0c030f169366008672a872cd94d9de7d381de75e9ef3bfdaffa2b85->enter($__internal_22fe38eee0c030f169366008672a872cd94d9de7d381de75e9ef3bfdaffa2b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_22fe38eee0c030f169366008672a872cd94d9de7d381de75e9ef3bfdaffa2b85->leave($__internal_22fe38eee0c030f169366008672a872cd94d9de7d381de75e9ef3bfdaffa2b85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
