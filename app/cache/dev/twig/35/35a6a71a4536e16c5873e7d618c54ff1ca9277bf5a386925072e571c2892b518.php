<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_614553d3ea349ebd3025e7c5de2b8a408cc0009dbd8083d448a806bb458efbd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_6f0c41b72305c91a2079223d3addaee802137144f9f5622432c15f28364d7bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0c41b72305c91a2079223d3addaee802137144f9f5622432c15f28364d7bf5->enter($__internal_6f0c41b72305c91a2079223d3addaee802137144f9f5622432c15f28364d7bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0c41b72305c91a2079223d3addaee802137144f9f5622432c15f28364d7bf5->leave($__internal_6f0c41b72305c91a2079223d3addaee802137144f9f5622432c15f28364d7bf5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2a0e3244157f024dd2caa3d8db4553a4baf1911b8f6efb451212f70788f089e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a0e3244157f024dd2caa3d8db4553a4baf1911b8f6efb451212f70788f089e->enter($__internal_e2a0e3244157f024dd2caa3d8db4553a4baf1911b8f6efb451212f70788f089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e2a0e3244157f024dd2caa3d8db4553a4baf1911b8f6efb451212f70788f089e->leave($__internal_e2a0e3244157f024dd2caa3d8db4553a4baf1911b8f6efb451212f70788f089e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
