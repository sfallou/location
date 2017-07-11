<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ce3d6b20cfcd4b07dd0e27eebf74d3662b7c3b137ec85333ac02a31022d5d27e extends Twig_Template
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
        $__internal_6cce2badbf4dec74cfc0c15254ed37a753738bc5f751fd5c9a9294297f995b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cce2badbf4dec74cfc0c15254ed37a753738bc5f751fd5c9a9294297f995b4d->enter($__internal_6cce2badbf4dec74cfc0c15254ed37a753738bc5f751fd5c9a9294297f995b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cce2badbf4dec74cfc0c15254ed37a753738bc5f751fd5c9a9294297f995b4d->leave($__internal_6cce2badbf4dec74cfc0c15254ed37a753738bc5f751fd5c9a9294297f995b4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b68ccfc42b2624ca725c4c1a20c530c09513ad5b7787ed05692f6d695f90f0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68ccfc42b2624ca725c4c1a20c530c09513ad5b7787ed05692f6d695f90f0f4->enter($__internal_b68ccfc42b2624ca725c4c1a20c530c09513ad5b7787ed05692f6d695f90f0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b68ccfc42b2624ca725c4c1a20c530c09513ad5b7787ed05692f6d695f90f0f4->leave($__internal_b68ccfc42b2624ca725c4c1a20c530c09513ad5b7787ed05692f6d695f90f0f4_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
