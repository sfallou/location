<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ea70091369155c9cfd72b94a29b2b826b8849eff667026f75d717d48d5efebfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_944eafcbbbeef282f7ebdb92e99f23c9b73964ca9c5bbd91134dfe48c7826a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944eafcbbbeef282f7ebdb92e99f23c9b73964ca9c5bbd91134dfe48c7826a41->enter($__internal_944eafcbbbeef282f7ebdb92e99f23c9b73964ca9c5bbd91134dfe48c7826a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944eafcbbbeef282f7ebdb92e99f23c9b73964ca9c5bbd91134dfe48c7826a41->leave($__internal_944eafcbbbeef282f7ebdb92e99f23c9b73964ca9c5bbd91134dfe48c7826a41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acf833e19b975da61fa3133e5465b9c4fd3653ac134b15462e2090aa97526c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf833e19b975da61fa3133e5465b9c4fd3653ac134b15462e2090aa97526c00->enter($__internal_acf833e19b975da61fa3133e5465b9c4fd3653ac134b15462e2090aa97526c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_acf833e19b975da61fa3133e5465b9c4fd3653ac134b15462e2090aa97526c00->leave($__internal_acf833e19b975da61fa3133e5465b9c4fd3653ac134b15462e2090aa97526c00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
