<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7ab9a697aaa8040d9173779d85fbec760730f1a9e5d36aebb078bef6914ce84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_117346074c80035883e2a26bbbd3709a3409387c3a0972ca7e8c8b83240eef5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117346074c80035883e2a26bbbd3709a3409387c3a0972ca7e8c8b83240eef5a->enter($__internal_117346074c80035883e2a26bbbd3709a3409387c3a0972ca7e8c8b83240eef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117346074c80035883e2a26bbbd3709a3409387c3a0972ca7e8c8b83240eef5a->leave($__internal_117346074c80035883e2a26bbbd3709a3409387c3a0972ca7e8c8b83240eef5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dbbd1907b0d9abeb249f9012cc947d6d427a8feeb24b50d80b120b0fa944a054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbd1907b0d9abeb249f9012cc947d6d427a8feeb24b50d80b120b0fa944a054->enter($__internal_dbbd1907b0d9abeb249f9012cc947d6d427a8feeb24b50d80b120b0fa944a054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbbd1907b0d9abeb249f9012cc947d6d427a8feeb24b50d80b120b0fa944a054->leave($__internal_dbbd1907b0d9abeb249f9012cc947d6d427a8feeb24b50d80b120b0fa944a054_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc575e67ae518ae7e869f872d10b57c76ea1987c2d6b484edb1a8bc181479bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc575e67ae518ae7e869f872d10b57c76ea1987c2d6b484edb1a8bc181479bcb->enter($__internal_dc575e67ae518ae7e869f872d10b57c76ea1987c2d6b484edb1a8bc181479bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc575e67ae518ae7e869f872d10b57c76ea1987c2d6b484edb1a8bc181479bcb->leave($__internal_dc575e67ae518ae7e869f872d10b57c76ea1987c2d6b484edb1a8bc181479bcb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_214c376a738413fc2919ba38007cf116bb94aa9e8bad56ae372fa6c6053fc428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214c376a738413fc2919ba38007cf116bb94aa9e8bad56ae372fa6c6053fc428->enter($__internal_214c376a738413fc2919ba38007cf116bb94aa9e8bad56ae372fa6c6053fc428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_214c376a738413fc2919ba38007cf116bb94aa9e8bad56ae372fa6c6053fc428->leave($__internal_214c376a738413fc2919ba38007cf116bb94aa9e8bad56ae372fa6c6053fc428_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
