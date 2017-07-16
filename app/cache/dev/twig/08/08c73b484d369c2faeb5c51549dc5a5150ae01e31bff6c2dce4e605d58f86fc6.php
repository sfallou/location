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
        $__internal_b518e46fb74fd324d934927520e66b1648cae2159e650e625f8620af2f0f3cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518e46fb74fd324d934927520e66b1648cae2159e650e625f8620af2f0f3cca->enter($__internal_b518e46fb74fd324d934927520e66b1648cae2159e650e625f8620af2f0f3cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b518e46fb74fd324d934927520e66b1648cae2159e650e625f8620af2f0f3cca->leave($__internal_b518e46fb74fd324d934927520e66b1648cae2159e650e625f8620af2f0f3cca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f110b0fa9a5c676fd2b463693c4f1ee20409ca6330562a7e11783836361f8bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f110b0fa9a5c676fd2b463693c4f1ee20409ca6330562a7e11783836361f8bd3->enter($__internal_f110b0fa9a5c676fd2b463693c4f1ee20409ca6330562a7e11783836361f8bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f110b0fa9a5c676fd2b463693c4f1ee20409ca6330562a7e11783836361f8bd3->leave($__internal_f110b0fa9a5c676fd2b463693c4f1ee20409ca6330562a7e11783836361f8bd3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2140a71372ef618af9b45cd5e8a86db7a19413cf073edf5bd3ed387ea7be8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2140a71372ef618af9b45cd5e8a86db7a19413cf073edf5bd3ed387ea7be8e4->enter($__internal_a2140a71372ef618af9b45cd5e8a86db7a19413cf073edf5bd3ed387ea7be8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2140a71372ef618af9b45cd5e8a86db7a19413cf073edf5bd3ed387ea7be8e4->leave($__internal_a2140a71372ef618af9b45cd5e8a86db7a19413cf073edf5bd3ed387ea7be8e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0781f67917c256471688195de5e938986e26cbc0791ef2be65a89fbe88b21b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0781f67917c256471688195de5e938986e26cbc0791ef2be65a89fbe88b21b22->enter($__internal_0781f67917c256471688195de5e938986e26cbc0791ef2be65a89fbe88b21b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0781f67917c256471688195de5e938986e26cbc0791ef2be65a89fbe88b21b22->leave($__internal_0781f67917c256471688195de5e938986e26cbc0791ef2be65a89fbe88b21b22_prof);

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
