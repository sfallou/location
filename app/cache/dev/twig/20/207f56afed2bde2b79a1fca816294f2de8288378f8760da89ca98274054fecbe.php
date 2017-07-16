<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a9aecf304050841ed67c190c52a4e718cc3d385b7b7e9392fdebbfda8e70f3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dc2be0fe937932e641f69c29d30780768fe23c11b622ff1dc9a9e916830a1032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2be0fe937932e641f69c29d30780768fe23c11b622ff1dc9a9e916830a1032->enter($__internal_dc2be0fe937932e641f69c29d30780768fe23c11b622ff1dc9a9e916830a1032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2be0fe937932e641f69c29d30780768fe23c11b622ff1dc9a9e916830a1032->leave($__internal_dc2be0fe937932e641f69c29d30780768fe23c11b622ff1dc9a9e916830a1032_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a24774a51308b82e524d0e6118d7674bd5fabd06a9b789b12ade76e2ac43ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a24774a51308b82e524d0e6118d7674bd5fabd06a9b789b12ade76e2ac43ecf->enter($__internal_0a24774a51308b82e524d0e6118d7674bd5fabd06a9b789b12ade76e2ac43ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0a24774a51308b82e524d0e6118d7674bd5fabd06a9b789b12ade76e2ac43ecf->leave($__internal_0a24774a51308b82e524d0e6118d7674bd5fabd06a9b789b12ade76e2ac43ecf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
