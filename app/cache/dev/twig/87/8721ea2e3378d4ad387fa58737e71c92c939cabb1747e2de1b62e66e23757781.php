<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_573b27de8b9ba5f1c041b90a89bd7bf2c1beaa5d6423e4e68327d1bbf5e0b15a extends Twig_Template
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
        $__internal_16f66aeac7abe7ca5056a3255c43528f0049268e4fc2bcdb3194de0fcd8b9530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f66aeac7abe7ca5056a3255c43528f0049268e4fc2bcdb3194de0fcd8b9530->enter($__internal_16f66aeac7abe7ca5056a3255c43528f0049268e4fc2bcdb3194de0fcd8b9530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f66aeac7abe7ca5056a3255c43528f0049268e4fc2bcdb3194de0fcd8b9530->leave($__internal_16f66aeac7abe7ca5056a3255c43528f0049268e4fc2bcdb3194de0fcd8b9530_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e1c926d3780b50d6a0e1f60dddfc464fc047e2be4496b0b3c98e30d8413b7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1c926d3780b50d6a0e1f60dddfc464fc047e2be4496b0b3c98e30d8413b7bc->enter($__internal_6e1c926d3780b50d6a0e1f60dddfc464fc047e2be4496b0b3c98e30d8413b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6e1c926d3780b50d6a0e1f60dddfc464fc047e2be4496b0b3c98e30d8413b7bc->leave($__internal_6e1c926d3780b50d6a0e1f60dddfc464fc047e2be4496b0b3c98e30d8413b7bc_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
