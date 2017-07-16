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
        $__internal_1d039c46a0fe4c8ecdbdcada027fbf45a070984db2593cb742be43f15fb3bd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d039c46a0fe4c8ecdbdcada027fbf45a070984db2593cb742be43f15fb3bd4d->enter($__internal_1d039c46a0fe4c8ecdbdcada027fbf45a070984db2593cb742be43f15fb3bd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d039c46a0fe4c8ecdbdcada027fbf45a070984db2593cb742be43f15fb3bd4d->leave($__internal_1d039c46a0fe4c8ecdbdcada027fbf45a070984db2593cb742be43f15fb3bd4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d02fcd8bdafb5cdf8998da04295820d27b82e5f940642b0c9ef047017a41c061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02fcd8bdafb5cdf8998da04295820d27b82e5f940642b0c9ef047017a41c061->enter($__internal_d02fcd8bdafb5cdf8998da04295820d27b82e5f940642b0c9ef047017a41c061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d02fcd8bdafb5cdf8998da04295820d27b82e5f940642b0c9ef047017a41c061->leave($__internal_d02fcd8bdafb5cdf8998da04295820d27b82e5f940642b0c9ef047017a41c061_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93d68cab7820feea8f1bdabc04865256a605309863cb8d3c5b76ada90956de4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d68cab7820feea8f1bdabc04865256a605309863cb8d3c5b76ada90956de4c->enter($__internal_93d68cab7820feea8f1bdabc04865256a605309863cb8d3c5b76ada90956de4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93d68cab7820feea8f1bdabc04865256a605309863cb8d3c5b76ada90956de4c->leave($__internal_93d68cab7820feea8f1bdabc04865256a605309863cb8d3c5b76ada90956de4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4687cfbbc4d1211b1e3d8eb6932f81cb4e11a15373c53e42983a6719de60fb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4687cfbbc4d1211b1e3d8eb6932f81cb4e11a15373c53e42983a6719de60fb99->enter($__internal_4687cfbbc4d1211b1e3d8eb6932f81cb4e11a15373c53e42983a6719de60fb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4687cfbbc4d1211b1e3d8eb6932f81cb4e11a15373c53e42983a6719de60fb99->leave($__internal_4687cfbbc4d1211b1e3d8eb6932f81cb4e11a15373c53e42983a6719de60fb99_prof);

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
