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
        $__internal_9b828be404233ecac5bb6efb42136d0de70f6f0ebc304a7bc6b49522d25c7230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b828be404233ecac5bb6efb42136d0de70f6f0ebc304a7bc6b49522d25c7230->enter($__internal_9b828be404233ecac5bb6efb42136d0de70f6f0ebc304a7bc6b49522d25c7230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b828be404233ecac5bb6efb42136d0de70f6f0ebc304a7bc6b49522d25c7230->leave($__internal_9b828be404233ecac5bb6efb42136d0de70f6f0ebc304a7bc6b49522d25c7230_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_993d49228980d1075e86b1b1be78b9460d658e798c999ec433a4ad5d451860c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993d49228980d1075e86b1b1be78b9460d658e798c999ec433a4ad5d451860c9->enter($__internal_993d49228980d1075e86b1b1be78b9460d658e798c999ec433a4ad5d451860c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_993d49228980d1075e86b1b1be78b9460d658e798c999ec433a4ad5d451860c9->leave($__internal_993d49228980d1075e86b1b1be78b9460d658e798c999ec433a4ad5d451860c9_prof);

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
