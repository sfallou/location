<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_71ec64dc0aaa01c7bf552fb06ff8979410df59a01286431af88d259c553d935c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d17407c0009a58d8f4358a1a1b9f4401907d2d5634a2ede13376a18a4008f7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17407c0009a58d8f4358a1a1b9f4401907d2d5634a2ede13376a18a4008f7b7->enter($__internal_d17407c0009a58d8f4358a1a1b9f4401907d2d5634a2ede13376a18a4008f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17407c0009a58d8f4358a1a1b9f4401907d2d5634a2ede13376a18a4008f7b7->leave($__internal_d17407c0009a58d8f4358a1a1b9f4401907d2d5634a2ede13376a18a4008f7b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dea341078df8b36e63424fc430bd9716ba079c9837023354988686ceeba8263c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea341078df8b36e63424fc430bd9716ba079c9837023354988686ceeba8263c->enter($__internal_dea341078df8b36e63424fc430bd9716ba079c9837023354988686ceeba8263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dea341078df8b36e63424fc430bd9716ba079c9837023354988686ceeba8263c->leave($__internal_dea341078df8b36e63424fc430bd9716ba079c9837023354988686ceeba8263c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
