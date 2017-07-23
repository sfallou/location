<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_71ec64dc0aaa01c7bf552fb06ff8979410df59a01286431af88d259c553d935c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4b7e8d8d3c267e8dc1210619e386c2f95fa08edab23e23dcccd5ec0f1c3f9f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7e8d8d3c267e8dc1210619e386c2f95fa08edab23e23dcccd5ec0f1c3f9f1f->enter($__internal_4b7e8d8d3c267e8dc1210619e386c2f95fa08edab23e23dcccd5ec0f1c3f9f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7e8d8d3c267e8dc1210619e386c2f95fa08edab23e23dcccd5ec0f1c3f9f1f->leave($__internal_4b7e8d8d3c267e8dc1210619e386c2f95fa08edab23e23dcccd5ec0f1c3f9f1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0728a8f2a0f6f66a80a08462a3f9d0fae1e58238de8bd851754331d85186e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0728a8f2a0f6f66a80a08462a3f9d0fae1e58238de8bd851754331d85186e7c->enter($__internal_d0728a8f2a0f6f66a80a08462a3f9d0fae1e58238de8bd851754331d85186e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d0728a8f2a0f6f66a80a08462a3f9d0fae1e58238de8bd851754331d85186e7c->leave($__internal_d0728a8f2a0f6f66a80a08462a3f9d0fae1e58238de8bd851754331d85186e7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
