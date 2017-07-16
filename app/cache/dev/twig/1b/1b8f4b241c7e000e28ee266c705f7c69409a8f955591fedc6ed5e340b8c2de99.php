<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9a02481d9cef4db83ccfdcecc504d98f48cf0a073a86f5c252b0d5debc31597e extends Twig_Template
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
        $__internal_41b5172c5bd4eb89c9c1d16b574bdec1ca82e0838c2e4b741675b803a162f3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b5172c5bd4eb89c9c1d16b574bdec1ca82e0838c2e4b741675b803a162f3a4->enter($__internal_41b5172c5bd4eb89c9c1d16b574bdec1ca82e0838c2e4b741675b803a162f3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b5172c5bd4eb89c9c1d16b574bdec1ca82e0838c2e4b741675b803a162f3a4->leave($__internal_41b5172c5bd4eb89c9c1d16b574bdec1ca82e0838c2e4b741675b803a162f3a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bff256ba6eaea74222adf206461d0d00ad2e77f87e07498f78a5a075c1388a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff256ba6eaea74222adf206461d0d00ad2e77f87e07498f78a5a075c1388a89->enter($__internal_bff256ba6eaea74222adf206461d0d00ad2e77f87e07498f78a5a075c1388a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bff256ba6eaea74222adf206461d0d00ad2e77f87e07498f78a5a075c1388a89->leave($__internal_bff256ba6eaea74222adf206461d0d00ad2e77f87e07498f78a5a075c1388a89_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
