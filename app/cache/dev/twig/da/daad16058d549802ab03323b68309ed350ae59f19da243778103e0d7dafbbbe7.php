<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7b1f9667e80160943bb66f26dbed60f78cb66079826f9dcc25b8314fa27f3064 extends Twig_Template
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
        $__internal_24ba26e59d583b732f5741bb2accca8d5f8453d17b31204279bf56528526f446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ba26e59d583b732f5741bb2accca8d5f8453d17b31204279bf56528526f446->enter($__internal_24ba26e59d583b732f5741bb2accca8d5f8453d17b31204279bf56528526f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ba26e59d583b732f5741bb2accca8d5f8453d17b31204279bf56528526f446->leave($__internal_24ba26e59d583b732f5741bb2accca8d5f8453d17b31204279bf56528526f446_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_421f6d15d59b61c16319a92505110df7d982eb8849b18f56a04dc01ee0acf2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421f6d15d59b61c16319a92505110df7d982eb8849b18f56a04dc01ee0acf2a9->enter($__internal_421f6d15d59b61c16319a92505110df7d982eb8849b18f56a04dc01ee0acf2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_421f6d15d59b61c16319a92505110df7d982eb8849b18f56a04dc01ee0acf2a9->leave($__internal_421f6d15d59b61c16319a92505110df7d982eb8849b18f56a04dc01ee0acf2a9_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
