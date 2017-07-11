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
        $__internal_f0e671e3adcf735b812619d09f6822332928c3af31828fbd8b4debe76d9df5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e671e3adcf735b812619d09f6822332928c3af31828fbd8b4debe76d9df5fa->enter($__internal_f0e671e3adcf735b812619d09f6822332928c3af31828fbd8b4debe76d9df5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e671e3adcf735b812619d09f6822332928c3af31828fbd8b4debe76d9df5fa->leave($__internal_f0e671e3adcf735b812619d09f6822332928c3af31828fbd8b4debe76d9df5fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96c8b807fcb8ae7bb347e0f2b5cf60d7737b71a4ed4e9f8c2086ac85b7f05f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c8b807fcb8ae7bb347e0f2b5cf60d7737b71a4ed4e9f8c2086ac85b7f05f71->enter($__internal_96c8b807fcb8ae7bb347e0f2b5cf60d7737b71a4ed4e9f8c2086ac85b7f05f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_96c8b807fcb8ae7bb347e0f2b5cf60d7737b71a4ed4e9f8c2086ac85b7f05f71->leave($__internal_96c8b807fcb8ae7bb347e0f2b5cf60d7737b71a4ed4e9f8c2086ac85b7f05f71_prof);

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
