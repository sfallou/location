<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_447256430d9d71bc32a13010a1cf7f4e25cd0a2d528cf4c3a7e63ddbe193b871 extends Twig_Template
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
        $__internal_b483ca1fd3bdcdb65c761bb6c9fd6809d03bfcbb2efdf1b66e21bdcbe4f334f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b483ca1fd3bdcdb65c761bb6c9fd6809d03bfcbb2efdf1b66e21bdcbe4f334f1->enter($__internal_b483ca1fd3bdcdb65c761bb6c9fd6809d03bfcbb2efdf1b66e21bdcbe4f334f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b483ca1fd3bdcdb65c761bb6c9fd6809d03bfcbb2efdf1b66e21bdcbe4f334f1->leave($__internal_b483ca1fd3bdcdb65c761bb6c9fd6809d03bfcbb2efdf1b66e21bdcbe4f334f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac2893e76c259bf6f872b834117cf9ae9188f55f379282e539c54d21e333ce5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2893e76c259bf6f872b834117cf9ae9188f55f379282e539c54d21e333ce5a->enter($__internal_ac2893e76c259bf6f872b834117cf9ae9188f55f379282e539c54d21e333ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ac2893e76c259bf6f872b834117cf9ae9188f55f379282e539c54d21e333ce5a->leave($__internal_ac2893e76c259bf6f872b834117cf9ae9188f55f379282e539c54d21e333ce5a_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
