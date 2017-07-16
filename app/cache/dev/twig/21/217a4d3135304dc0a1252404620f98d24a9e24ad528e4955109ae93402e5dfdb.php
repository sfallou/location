<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_47a3ea1bab91677e93963607188c81fd53054a01cde1c94d646ca9e5382bbcbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b74596bebe2707aab5800cd5fddc3ec50b55aa9b8c6188c2538d0cbb42178668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74596bebe2707aab5800cd5fddc3ec50b55aa9b8c6188c2538d0cbb42178668->enter($__internal_b74596bebe2707aab5800cd5fddc3ec50b55aa9b8c6188c2538d0cbb42178668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74596bebe2707aab5800cd5fddc3ec50b55aa9b8c6188c2538d0cbb42178668->leave($__internal_b74596bebe2707aab5800cd5fddc3ec50b55aa9b8c6188c2538d0cbb42178668_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6c6d9c27a5ff066de12130f0ca30d618ac29fee50127609a84dbb4c5a0fdb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c6d9c27a5ff066de12130f0ca30d618ac29fee50127609a84dbb4c5a0fdb9a->enter($__internal_d6c6d9c27a5ff066de12130f0ca30d618ac29fee50127609a84dbb4c5a0fdb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d6c6d9c27a5ff066de12130f0ca30d618ac29fee50127609a84dbb4c5a0fdb9a->leave($__internal_d6c6d9c27a5ff066de12130f0ca30d618ac29fee50127609a84dbb4c5a0fdb9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
