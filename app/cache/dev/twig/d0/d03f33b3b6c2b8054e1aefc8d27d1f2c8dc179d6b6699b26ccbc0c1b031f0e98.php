<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c5a963b30f3941c831a6c06a3ddcb61ee8b1de85d8d4f30d22a6d1c8bad4df15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c33ec5a81f1ac018af074e74a6280d8b2e3e2c0dd01e91e3bfb7aa263b328aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33ec5a81f1ac018af074e74a6280d8b2e3e2c0dd01e91e3bfb7aa263b328aae->enter($__internal_c33ec5a81f1ac018af074e74a6280d8b2e3e2c0dd01e91e3bfb7aa263b328aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33ec5a81f1ac018af074e74a6280d8b2e3e2c0dd01e91e3bfb7aa263b328aae->leave($__internal_c33ec5a81f1ac018af074e74a6280d8b2e3e2c0dd01e91e3bfb7aa263b328aae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f420e542241176ec3b90167872ff509a44fa06a673852f3d9b033c5e26ae396c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f420e542241176ec3b90167872ff509a44fa06a673852f3d9b033c5e26ae396c->enter($__internal_f420e542241176ec3b90167872ff509a44fa06a673852f3d9b033c5e26ae396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f420e542241176ec3b90167872ff509a44fa06a673852f3d9b033c5e26ae396c->leave($__internal_f420e542241176ec3b90167872ff509a44fa06a673852f3d9b033c5e26ae396c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
