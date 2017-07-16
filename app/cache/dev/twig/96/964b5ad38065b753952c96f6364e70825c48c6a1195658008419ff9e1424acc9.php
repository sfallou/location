<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_73517ceefd82bab89f90a9967b019be76b99cb356c8adc92894bd5e01522deea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2844692ab03ed862700a166128ee175fffcc624109eb296e41871d17a03b928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2844692ab03ed862700a166128ee175fffcc624109eb296e41871d17a03b928f->enter($__internal_2844692ab03ed862700a166128ee175fffcc624109eb296e41871d17a03b928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2844692ab03ed862700a166128ee175fffcc624109eb296e41871d17a03b928f->leave($__internal_2844692ab03ed862700a166128ee175fffcc624109eb296e41871d17a03b928f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e49ffce6dc875b864a488e3a2c5a7b46937617fafe0ab096cb36422bf021a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e49ffce6dc875b864a488e3a2c5a7b46937617fafe0ab096cb36422bf021a1c->enter($__internal_8e49ffce6dc875b864a488e3a2c5a7b46937617fafe0ab096cb36422bf021a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8e49ffce6dc875b864a488e3a2c5a7b46937617fafe0ab096cb36422bf021a1c->leave($__internal_8e49ffce6dc875b864a488e3a2c5a7b46937617fafe0ab096cb36422bf021a1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
