<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7ec7ed4118c22c2635fef9f8492dcfd9df3275cb901dea7162b84eb437f87df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d0764a59d9cd501280985b7f05cede915daae072c40524c5462063cebcf0e37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0764a59d9cd501280985b7f05cede915daae072c40524c5462063cebcf0e37c->enter($__internal_d0764a59d9cd501280985b7f05cede915daae072c40524c5462063cebcf0e37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0764a59d9cd501280985b7f05cede915daae072c40524c5462063cebcf0e37c->leave($__internal_d0764a59d9cd501280985b7f05cede915daae072c40524c5462063cebcf0e37c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ce42b1d35f6b9a9c0fe965b5aff6943e4067ad6cb3d6fd2504128d55fd23b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce42b1d35f6b9a9c0fe965b5aff6943e4067ad6cb3d6fd2504128d55fd23b13->enter($__internal_0ce42b1d35f6b9a9c0fe965b5aff6943e4067ad6cb3d6fd2504128d55fd23b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0ce42b1d35f6b9a9c0fe965b5aff6943e4067ad6cb3d6fd2504128d55fd23b13->leave($__internal_0ce42b1d35f6b9a9c0fe965b5aff6943e4067ad6cb3d6fd2504128d55fd23b13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
