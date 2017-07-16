<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4ac97851b75f726fa65e8692826ed8733f1272d7f9872694600873b5db6f0f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b2ced2d011fc9cbf69e2f77dc6d0a5010a10505b683616f47652cc8e332cd41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ced2d011fc9cbf69e2f77dc6d0a5010a10505b683616f47652cc8e332cd41a->enter($__internal_b2ced2d011fc9cbf69e2f77dc6d0a5010a10505b683616f47652cc8e332cd41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ced2d011fc9cbf69e2f77dc6d0a5010a10505b683616f47652cc8e332cd41a->leave($__internal_b2ced2d011fc9cbf69e2f77dc6d0a5010a10505b683616f47652cc8e332cd41a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b510e61df6c49dfb4dce31b649c97cfcef8a06c2dbdd5ff631fc7626eaf054e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b510e61df6c49dfb4dce31b649c97cfcef8a06c2dbdd5ff631fc7626eaf054e9->enter($__internal_b510e61df6c49dfb4dce31b649c97cfcef8a06c2dbdd5ff631fc7626eaf054e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b510e61df6c49dfb4dce31b649c97cfcef8a06c2dbdd5ff631fc7626eaf054e9->leave($__internal_b510e61df6c49dfb4dce31b649c97cfcef8a06c2dbdd5ff631fc7626eaf054e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9849631717b3cb8edaba4b3e7606cc88ee9cf541572eb1bc8e4d6339ac4671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9849631717b3cb8edaba4b3e7606cc88ee9cf541572eb1bc8e4d6339ac4671->enter($__internal_8d9849631717b3cb8edaba4b3e7606cc88ee9cf541572eb1bc8e4d6339ac4671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8d9849631717b3cb8edaba4b3e7606cc88ee9cf541572eb1bc8e4d6339ac4671->leave($__internal_8d9849631717b3cb8edaba4b3e7606cc88ee9cf541572eb1bc8e4d6339ac4671_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
