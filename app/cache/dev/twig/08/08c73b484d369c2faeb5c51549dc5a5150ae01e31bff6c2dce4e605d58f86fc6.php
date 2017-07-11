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
        $__internal_49f518a927d3896477afa2439f6601104ab433d3d282fbc957ff9aca871292a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f518a927d3896477afa2439f6601104ab433d3d282fbc957ff9aca871292a9->enter($__internal_49f518a927d3896477afa2439f6601104ab433d3d282fbc957ff9aca871292a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49f518a927d3896477afa2439f6601104ab433d3d282fbc957ff9aca871292a9->leave($__internal_49f518a927d3896477afa2439f6601104ab433d3d282fbc957ff9aca871292a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff57abd6cdde7a73c20dd0f53f2ae3829f288f02dfa0c22d076c34c19909649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff57abd6cdde7a73c20dd0f53f2ae3829f288f02dfa0c22d076c34c19909649->enter($__internal_eff57abd6cdde7a73c20dd0f53f2ae3829f288f02dfa0c22d076c34c19909649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eff57abd6cdde7a73c20dd0f53f2ae3829f288f02dfa0c22d076c34c19909649->leave($__internal_eff57abd6cdde7a73c20dd0f53f2ae3829f288f02dfa0c22d076c34c19909649_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_208002c4b6aef0d409ef4abdc8dfb9f1e5c7c65f73506f104903ea281dbabaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208002c4b6aef0d409ef4abdc8dfb9f1e5c7c65f73506f104903ea281dbabaa0->enter($__internal_208002c4b6aef0d409ef4abdc8dfb9f1e5c7c65f73506f104903ea281dbabaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_208002c4b6aef0d409ef4abdc8dfb9f1e5c7c65f73506f104903ea281dbabaa0->leave($__internal_208002c4b6aef0d409ef4abdc8dfb9f1e5c7c65f73506f104903ea281dbabaa0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9a6ac3ee006a7b2ea4dc3027d751f0a20082fc72efb8e116e7c26174cd43050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a6ac3ee006a7b2ea4dc3027d751f0a20082fc72efb8e116e7c26174cd43050->enter($__internal_f9a6ac3ee006a7b2ea4dc3027d751f0a20082fc72efb8e116e7c26174cd43050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f9a6ac3ee006a7b2ea4dc3027d751f0a20082fc72efb8e116e7c26174cd43050->leave($__internal_f9a6ac3ee006a7b2ea4dc3027d751f0a20082fc72efb8e116e7c26174cd43050_prof);

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
