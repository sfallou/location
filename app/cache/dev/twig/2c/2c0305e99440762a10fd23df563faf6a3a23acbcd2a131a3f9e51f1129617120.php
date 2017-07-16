<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e12476d8edb1bc1d0c6d536a346690d48945b911f0dd0ae267aad31dc4628bf8 extends Twig_Template
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
        $__internal_4420047ecbf77dd69e89a7ad4addd7a0bab4ce820d17a98c695e27ce813c5ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4420047ecbf77dd69e89a7ad4addd7a0bab4ce820d17a98c695e27ce813c5ab5->enter($__internal_4420047ecbf77dd69e89a7ad4addd7a0bab4ce820d17a98c695e27ce813c5ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4420047ecbf77dd69e89a7ad4addd7a0bab4ce820d17a98c695e27ce813c5ab5->leave($__internal_4420047ecbf77dd69e89a7ad4addd7a0bab4ce820d17a98c695e27ce813c5ab5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b30687138f2d1a099f3ed39b998ef20507bf88e8bab1ad0b27ffc0c3b154a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b30687138f2d1a099f3ed39b998ef20507bf88e8bab1ad0b27ffc0c3b154a00->enter($__internal_8b30687138f2d1a099f3ed39b998ef20507bf88e8bab1ad0b27ffc0c3b154a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8b30687138f2d1a099f3ed39b998ef20507bf88e8bab1ad0b27ffc0c3b154a00->leave($__internal_8b30687138f2d1a099f3ed39b998ef20507bf88e8bab1ad0b27ffc0c3b154a00_prof);

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
