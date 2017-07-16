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
        $__internal_a648c363ddd5cfd25720e69be8973fa9f7387f8b8bd8c159d335bc32312f3f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a648c363ddd5cfd25720e69be8973fa9f7387f8b8bd8c159d335bc32312f3f2b->enter($__internal_a648c363ddd5cfd25720e69be8973fa9f7387f8b8bd8c159d335bc32312f3f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a648c363ddd5cfd25720e69be8973fa9f7387f8b8bd8c159d335bc32312f3f2b->leave($__internal_a648c363ddd5cfd25720e69be8973fa9f7387f8b8bd8c159d335bc32312f3f2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_407ed7099938529d502602f7e32b778d8f8cad61131779c9706e58d8b8c59281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407ed7099938529d502602f7e32b778d8f8cad61131779c9706e58d8b8c59281->enter($__internal_407ed7099938529d502602f7e32b778d8f8cad61131779c9706e58d8b8c59281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_407ed7099938529d502602f7e32b778d8f8cad61131779c9706e58d8b8c59281->leave($__internal_407ed7099938529d502602f7e32b778d8f8cad61131779c9706e58d8b8c59281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c1dd94693cda08850e615c2b0ec5c6c20f096374036be4553990855a61b1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c1dd94693cda08850e615c2b0ec5c6c20f096374036be4553990855a61b1a0->enter($__internal_e0c1dd94693cda08850e615c2b0ec5c6c20f096374036be4553990855a61b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0c1dd94693cda08850e615c2b0ec5c6c20f096374036be4553990855a61b1a0->leave($__internal_e0c1dd94693cda08850e615c2b0ec5c6c20f096374036be4553990855a61b1a0_prof);

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
