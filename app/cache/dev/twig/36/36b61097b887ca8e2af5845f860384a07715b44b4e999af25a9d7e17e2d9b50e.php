<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d97a1a8b701ca788f137e31f64e708db9f5e743354278e4a8bf0f2004407ae75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a49bda2864ff077cfb13f54bb536c77e79b6f7b4cf3d00b1da0442ae7de740a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49bda2864ff077cfb13f54bb536c77e79b6f7b4cf3d00b1da0442ae7de740a6->enter($__internal_a49bda2864ff077cfb13f54bb536c77e79b6f7b4cf3d00b1da0442ae7de740a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49bda2864ff077cfb13f54bb536c77e79b6f7b4cf3d00b1da0442ae7de740a6->leave($__internal_a49bda2864ff077cfb13f54bb536c77e79b6f7b4cf3d00b1da0442ae7de740a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09e35206cb6d3cab63ef1ff2b44f2be6ec4dfced93c439d23b7ee3ec78f4f3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e35206cb6d3cab63ef1ff2b44f2be6ec4dfced93c439d23b7ee3ec78f4f3a6->enter($__internal_09e35206cb6d3cab63ef1ff2b44f2be6ec4dfced93c439d23b7ee3ec78f4f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_09e35206cb6d3cab63ef1ff2b44f2be6ec4dfced93c439d23b7ee3ec78f4f3a6->leave($__internal_09e35206cb6d3cab63ef1ff2b44f2be6ec4dfced93c439d23b7ee3ec78f4f3a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
