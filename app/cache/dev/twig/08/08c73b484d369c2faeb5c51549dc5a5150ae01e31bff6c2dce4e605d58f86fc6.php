<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f65a3b2fdbc9972e1ad3debf43dffbb9e79b23434337f5d9f37fedfb461ab873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4007cf26f2de8234e0a5d8788b35f35992a820f9f4d78f005b25ed93e8db746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4007cf26f2de8234e0a5d8788b35f35992a820f9f4d78f005b25ed93e8db746->enter($__internal_a4007cf26f2de8234e0a5d8788b35f35992a820f9f4d78f005b25ed93e8db746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4007cf26f2de8234e0a5d8788b35f35992a820f9f4d78f005b25ed93e8db746->leave($__internal_a4007cf26f2de8234e0a5d8788b35f35992a820f9f4d78f005b25ed93e8db746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4452169b40934a7b7e1835f2d78c6f8d2c64580ca9bb99f5c09605d433347c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4452169b40934a7b7e1835f2d78c6f8d2c64580ca9bb99f5c09605d433347c97->enter($__internal_4452169b40934a7b7e1835f2d78c6f8d2c64580ca9bb99f5c09605d433347c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4452169b40934a7b7e1835f2d78c6f8d2c64580ca9bb99f5c09605d433347c97->leave($__internal_4452169b40934a7b7e1835f2d78c6f8d2c64580ca9bb99f5c09605d433347c97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad164824602ff7fd982d98f09ab8db89c2df8b3911fd8c9a8a72db8ab1a42a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad164824602ff7fd982d98f09ab8db89c2df8b3911fd8c9a8a72db8ab1a42a31->enter($__internal_ad164824602ff7fd982d98f09ab8db89c2df8b3911fd8c9a8a72db8ab1a42a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad164824602ff7fd982d98f09ab8db89c2df8b3911fd8c9a8a72db8ab1a42a31->leave($__internal_ad164824602ff7fd982d98f09ab8db89c2df8b3911fd8c9a8a72db8ab1a42a31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70ff5ebcc06394f3f6d786041fd5acee1c3b4d18815c9a7d2f18c3bef33ed6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70ff5ebcc06394f3f6d786041fd5acee1c3b4d18815c9a7d2f18c3bef33ed6b->enter($__internal_d70ff5ebcc06394f3f6d786041fd5acee1c3b4d18815c9a7d2f18c3bef33ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d70ff5ebcc06394f3f6d786041fd5acee1c3b4d18815c9a7d2f18c3bef33ed6b->leave($__internal_d70ff5ebcc06394f3f6d786041fd5acee1c3b4d18815c9a7d2f18c3bef33ed6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
