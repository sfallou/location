<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_218b34938a5a514622b76847c24aea1ed3a71148495a873e899edbc769cf1e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_1b645ceb834285341fe23748a4275d374a56df88c3c35fe824328f467012b386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b645ceb834285341fe23748a4275d374a56df88c3c35fe824328f467012b386->enter($__internal_1b645ceb834285341fe23748a4275d374a56df88c3c35fe824328f467012b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b645ceb834285341fe23748a4275d374a56df88c3c35fe824328f467012b386->leave($__internal_1b645ceb834285341fe23748a4275d374a56df88c3c35fe824328f467012b386_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f08a05a0a0ef5d62fc842336d866c70a61e0f022ede2e71891e1de30e4b9ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08a05a0a0ef5d62fc842336d866c70a61e0f022ede2e71891e1de30e4b9ff10->enter($__internal_f08a05a0a0ef5d62fc842336d866c70a61e0f022ede2e71891e1de30e4b9ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f08a05a0a0ef5d62fc842336d866c70a61e0f022ede2e71891e1de30e4b9ff10->leave($__internal_f08a05a0a0ef5d62fc842336d866c70a61e0f022ede2e71891e1de30e4b9ff10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35a797f5f3324bfb18598bcb7e06e312557cadd8debf8d1726686dc296823550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a797f5f3324bfb18598bcb7e06e312557cadd8debf8d1726686dc296823550->enter($__internal_35a797f5f3324bfb18598bcb7e06e312557cadd8debf8d1726686dc296823550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35a797f5f3324bfb18598bcb7e06e312557cadd8debf8d1726686dc296823550->leave($__internal_35a797f5f3324bfb18598bcb7e06e312557cadd8debf8d1726686dc296823550_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c105d1c84ded0e0d31502d0f2ed9ddc99770ebdb693860500cd6b2e27712fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c105d1c84ded0e0d31502d0f2ed9ddc99770ebdb693860500cd6b2e27712fc->enter($__internal_13c105d1c84ded0e0d31502d0f2ed9ddc99770ebdb693860500cd6b2e27712fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_13c105d1c84ded0e0d31502d0f2ed9ddc99770ebdb693860500cd6b2e27712fc->leave($__internal_13c105d1c84ded0e0d31502d0f2ed9ddc99770ebdb693860500cd6b2e27712fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
