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
        $__internal_b6d6d03dd89d09af7299ad9a04cb04d0d2bee009fcf14fab2fcd08d7e58031c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d6d03dd89d09af7299ad9a04cb04d0d2bee009fcf14fab2fcd08d7e58031c3->enter($__internal_b6d6d03dd89d09af7299ad9a04cb04d0d2bee009fcf14fab2fcd08d7e58031c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d6d03dd89d09af7299ad9a04cb04d0d2bee009fcf14fab2fcd08d7e58031c3->leave($__internal_b6d6d03dd89d09af7299ad9a04cb04d0d2bee009fcf14fab2fcd08d7e58031c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bfa41dd3cc1e1fb6e3344ef386b0f4654f6a9edda2b147814d43bf9bf7613c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfa41dd3cc1e1fb6e3344ef386b0f4654f6a9edda2b147814d43bf9bf7613c0->enter($__internal_6bfa41dd3cc1e1fb6e3344ef386b0f4654f6a9edda2b147814d43bf9bf7613c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6bfa41dd3cc1e1fb6e3344ef386b0f4654f6a9edda2b147814d43bf9bf7613c0->leave($__internal_6bfa41dd3cc1e1fb6e3344ef386b0f4654f6a9edda2b147814d43bf9bf7613c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d468abca60bc1dbd21216b2751fa6c9f2443a907377f5c4c7ad9e92e4fcd2533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d468abca60bc1dbd21216b2751fa6c9f2443a907377f5c4c7ad9e92e4fcd2533->enter($__internal_d468abca60bc1dbd21216b2751fa6c9f2443a907377f5c4c7ad9e92e4fcd2533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d468abca60bc1dbd21216b2751fa6c9f2443a907377f5c4c7ad9e92e4fcd2533->leave($__internal_d468abca60bc1dbd21216b2751fa6c9f2443a907377f5c4c7ad9e92e4fcd2533_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7a3cdd5925f6bcd2ab1e0a9b392ccbbb97051becf8425c5eb77f63935a2b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7a3cdd5925f6bcd2ab1e0a9b392ccbbb97051becf8425c5eb77f63935a2b04->enter($__internal_ec7a3cdd5925f6bcd2ab1e0a9b392ccbbb97051becf8425c5eb77f63935a2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec7a3cdd5925f6bcd2ab1e0a9b392ccbbb97051becf8425c5eb77f63935a2b04->leave($__internal_ec7a3cdd5925f6bcd2ab1e0a9b392ccbbb97051becf8425c5eb77f63935a2b04_prof);

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
