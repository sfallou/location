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
        $__internal_288c0d87720e0f2d6dd9b67e2fdacf36ed400b576b3cc8226c0521dcc7974f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288c0d87720e0f2d6dd9b67e2fdacf36ed400b576b3cc8226c0521dcc7974f36->enter($__internal_288c0d87720e0f2d6dd9b67e2fdacf36ed400b576b3cc8226c0521dcc7974f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288c0d87720e0f2d6dd9b67e2fdacf36ed400b576b3cc8226c0521dcc7974f36->leave($__internal_288c0d87720e0f2d6dd9b67e2fdacf36ed400b576b3cc8226c0521dcc7974f36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b40d5f40f78ed593942205a7e19b71e365f2ab7d24a2e00914731c7c554c73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40d5f40f78ed593942205a7e19b71e365f2ab7d24a2e00914731c7c554c73d->enter($__internal_2b40d5f40f78ed593942205a7e19b71e365f2ab7d24a2e00914731c7c554c73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2b40d5f40f78ed593942205a7e19b71e365f2ab7d24a2e00914731c7c554c73d->leave($__internal_2b40d5f40f78ed593942205a7e19b71e365f2ab7d24a2e00914731c7c554c73d_prof);

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
