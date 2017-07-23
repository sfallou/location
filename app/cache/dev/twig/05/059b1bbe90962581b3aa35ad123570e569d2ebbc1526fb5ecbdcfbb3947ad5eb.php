<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_669e2147ee8deec0924be1808448a819e0f4c1de9800ac8b41517d3b19673273 extends Twig_Template
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
        $__internal_b2d94234492b2e97e1131a7ce039d933e0b7bdf98f9e8689fac04f0eeefb7d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d94234492b2e97e1131a7ce039d933e0b7bdf98f9e8689fac04f0eeefb7d2a->enter($__internal_b2d94234492b2e97e1131a7ce039d933e0b7bdf98f9e8689fac04f0eeefb7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d94234492b2e97e1131a7ce039d933e0b7bdf98f9e8689fac04f0eeefb7d2a->leave($__internal_b2d94234492b2e97e1131a7ce039d933e0b7bdf98f9e8689fac04f0eeefb7d2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3173380f875148c53c1c7f9b8d518931c14b24bdeac447df2c4352094ba4c509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3173380f875148c53c1c7f9b8d518931c14b24bdeac447df2c4352094ba4c509->enter($__internal_3173380f875148c53c1c7f9b8d518931c14b24bdeac447df2c4352094ba4c509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3173380f875148c53c1c7f9b8d518931c14b24bdeac447df2c4352094ba4c509->leave($__internal_3173380f875148c53c1c7f9b8d518931c14b24bdeac447df2c4352094ba4c509_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
