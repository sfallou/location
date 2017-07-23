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
        $__internal_39bf5697ad90710fdf14232ba20005462cb37622dfecec5cd61ba1030ab4703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bf5697ad90710fdf14232ba20005462cb37622dfecec5cd61ba1030ab4703c->enter($__internal_39bf5697ad90710fdf14232ba20005462cb37622dfecec5cd61ba1030ab4703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39bf5697ad90710fdf14232ba20005462cb37622dfecec5cd61ba1030ab4703c->leave($__internal_39bf5697ad90710fdf14232ba20005462cb37622dfecec5cd61ba1030ab4703c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_299686f7791275d95cba0bc4e42dfd8ce98bf101af08e9d848f2ae9133f85d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299686f7791275d95cba0bc4e42dfd8ce98bf101af08e9d848f2ae9133f85d84->enter($__internal_299686f7791275d95cba0bc4e42dfd8ce98bf101af08e9d848f2ae9133f85d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_299686f7791275d95cba0bc4e42dfd8ce98bf101af08e9d848f2ae9133f85d84->leave($__internal_299686f7791275d95cba0bc4e42dfd8ce98bf101af08e9d848f2ae9133f85d84_prof);

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
