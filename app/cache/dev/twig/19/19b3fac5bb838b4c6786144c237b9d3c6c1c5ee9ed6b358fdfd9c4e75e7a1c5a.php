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
        $__internal_96ec424ade77fd34e6601d6f3ad77618b4cf9143695695326c6e79095d4e16c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ec424ade77fd34e6601d6f3ad77618b4cf9143695695326c6e79095d4e16c7->enter($__internal_96ec424ade77fd34e6601d6f3ad77618b4cf9143695695326c6e79095d4e16c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ec424ade77fd34e6601d6f3ad77618b4cf9143695695326c6e79095d4e16c7->leave($__internal_96ec424ade77fd34e6601d6f3ad77618b4cf9143695695326c6e79095d4e16c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36619dd3cfdf55be70b1dd713b7c366760220fb0110477aea8576f17d141cb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36619dd3cfdf55be70b1dd713b7c366760220fb0110477aea8576f17d141cb00->enter($__internal_36619dd3cfdf55be70b1dd713b7c366760220fb0110477aea8576f17d141cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_36619dd3cfdf55be70b1dd713b7c366760220fb0110477aea8576f17d141cb00->leave($__internal_36619dd3cfdf55be70b1dd713b7c366760220fb0110477aea8576f17d141cb00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_885d3f52933ceba01bba01c2159f8535cb15698930cd4292fed51f6a47fb214d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885d3f52933ceba01bba01c2159f8535cb15698930cd4292fed51f6a47fb214d->enter($__internal_885d3f52933ceba01bba01c2159f8535cb15698930cd4292fed51f6a47fb214d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_885d3f52933ceba01bba01c2159f8535cb15698930cd4292fed51f6a47fb214d->leave($__internal_885d3f52933ceba01bba01c2159f8535cb15698930cd4292fed51f6a47fb214d_prof);

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
