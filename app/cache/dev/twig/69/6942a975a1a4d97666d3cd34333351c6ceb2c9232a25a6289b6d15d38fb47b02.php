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
        $__internal_ea0928d247a4de142a1092a876c9520ab6d8459bd781d4d79524d3cc2f0cd92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0928d247a4de142a1092a876c9520ab6d8459bd781d4d79524d3cc2f0cd92f->enter($__internal_ea0928d247a4de142a1092a876c9520ab6d8459bd781d4d79524d3cc2f0cd92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0928d247a4de142a1092a876c9520ab6d8459bd781d4d79524d3cc2f0cd92f->leave($__internal_ea0928d247a4de142a1092a876c9520ab6d8459bd781d4d79524d3cc2f0cd92f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_171877a59b051d8cf7ba44a6b3c16a686ba764c25672d75ea3e5658d1c0dd8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171877a59b051d8cf7ba44a6b3c16a686ba764c25672d75ea3e5658d1c0dd8b1->enter($__internal_171877a59b051d8cf7ba44a6b3c16a686ba764c25672d75ea3e5658d1c0dd8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_171877a59b051d8cf7ba44a6b3c16a686ba764c25672d75ea3e5658d1c0dd8b1->leave($__internal_171877a59b051d8cf7ba44a6b3c16a686ba764c25672d75ea3e5658d1c0dd8b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b124bf751e76e515387bdd88a4ad7fce2f568a52fc569b2eeab8462a9e0b3df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b124bf751e76e515387bdd88a4ad7fce2f568a52fc569b2eeab8462a9e0b3df7->enter($__internal_b124bf751e76e515387bdd88a4ad7fce2f568a52fc569b2eeab8462a9e0b3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b124bf751e76e515387bdd88a4ad7fce2f568a52fc569b2eeab8462a9e0b3df7->leave($__internal_b124bf751e76e515387bdd88a4ad7fce2f568a52fc569b2eeab8462a9e0b3df7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfc14d3d6d19f8bdce4e4345f913d170a1d005744de1715370811d195b2314b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc14d3d6d19f8bdce4e4345f913d170a1d005744de1715370811d195b2314b0->enter($__internal_bfc14d3d6d19f8bdce4e4345f913d170a1d005744de1715370811d195b2314b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfc14d3d6d19f8bdce4e4345f913d170a1d005744de1715370811d195b2314b0->leave($__internal_bfc14d3d6d19f8bdce4e4345f913d170a1d005744de1715370811d195b2314b0_prof);

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
