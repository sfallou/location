<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8dbb0a87a88a373ed4296f1c78b6f0131777eec1d8e710e1fc81fe8cfbd1b72f extends Twig_Template
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
        $__internal_dc9d329c308508977b37c7a5041e02f71d8e2c7ef6ff45325d1467108b420502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d329c308508977b37c7a5041e02f71d8e2c7ef6ff45325d1467108b420502->enter($__internal_dc9d329c308508977b37c7a5041e02f71d8e2c7ef6ff45325d1467108b420502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9d329c308508977b37c7a5041e02f71d8e2c7ef6ff45325d1467108b420502->leave($__internal_dc9d329c308508977b37c7a5041e02f71d8e2c7ef6ff45325d1467108b420502_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb941e7d1051f92991b2ed42b4a8585e3c242dc2611b297b002ec333fa16b06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb941e7d1051f92991b2ed42b4a8585e3c242dc2611b297b002ec333fa16b06e->enter($__internal_eb941e7d1051f92991b2ed42b4a8585e3c242dc2611b297b002ec333fa16b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_eb941e7d1051f92991b2ed42b4a8585e3c242dc2611b297b002ec333fa16b06e->leave($__internal_eb941e7d1051f92991b2ed42b4a8585e3c242dc2611b297b002ec333fa16b06e_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
