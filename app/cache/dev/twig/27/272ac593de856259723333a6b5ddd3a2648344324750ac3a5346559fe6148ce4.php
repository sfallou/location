<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a9284f2403b521deb2dc52ccf6c9aecf83218d53581f40c3e296f9d97b5dae60 extends Twig_Template
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
        $__internal_3f05b29c773b8e71c1dee61d2bf854a8ae6d38d447f67a4b231ae1775f5d9a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f05b29c773b8e71c1dee61d2bf854a8ae6d38d447f67a4b231ae1775f5d9a52->enter($__internal_3f05b29c773b8e71c1dee61d2bf854a8ae6d38d447f67a4b231ae1775f5d9a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f05b29c773b8e71c1dee61d2bf854a8ae6d38d447f67a4b231ae1775f5d9a52->leave($__internal_3f05b29c773b8e71c1dee61d2bf854a8ae6d38d447f67a4b231ae1775f5d9a52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5688848fd89667aaf0806df908c2e1d1e80c6ef301ff1b157f373434c2f9dd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5688848fd89667aaf0806df908c2e1d1e80c6ef301ff1b157f373434c2f9dd81->enter($__internal_5688848fd89667aaf0806df908c2e1d1e80c6ef301ff1b157f373434c2f9dd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5688848fd89667aaf0806df908c2e1d1e80c6ef301ff1b157f373434c2f9dd81->leave($__internal_5688848fd89667aaf0806df908c2e1d1e80c6ef301ff1b157f373434c2f9dd81_prof);

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
