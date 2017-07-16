<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43fb879066d0b4de8bf59e4fe10d93efe6b4a2371eb03626e15ad4127043110e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3055f855e3f8ed4fef1acea0d1a4c3ea109087d9c6abc20d48f66434b6955487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3055f855e3f8ed4fef1acea0d1a4c3ea109087d9c6abc20d48f66434b6955487->enter($__internal_3055f855e3f8ed4fef1acea0d1a4c3ea109087d9c6abc20d48f66434b6955487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3055f855e3f8ed4fef1acea0d1a4c3ea109087d9c6abc20d48f66434b6955487->leave($__internal_3055f855e3f8ed4fef1acea0d1a4c3ea109087d9c6abc20d48f66434b6955487_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6adf1dafb9511ba0098289a37679a7e48fc8dcde9c64c9ee5533a4295bf920a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6adf1dafb9511ba0098289a37679a7e48fc8dcde9c64c9ee5533a4295bf920a->enter($__internal_a6adf1dafb9511ba0098289a37679a7e48fc8dcde9c64c9ee5533a4295bf920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6adf1dafb9511ba0098289a37679a7e48fc8dcde9c64c9ee5533a4295bf920a->leave($__internal_a6adf1dafb9511ba0098289a37679a7e48fc8dcde9c64c9ee5533a4295bf920a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_060d353747cb9a036f20c63b29adc1e0c94535e0e9e5e4f022a64b3d2f66264f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060d353747cb9a036f20c63b29adc1e0c94535e0e9e5e4f022a64b3d2f66264f->enter($__internal_060d353747cb9a036f20c63b29adc1e0c94535e0e9e5e4f022a64b3d2f66264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_060d353747cb9a036f20c63b29adc1e0c94535e0e9e5e4f022a64b3d2f66264f->leave($__internal_060d353747cb9a036f20c63b29adc1e0c94535e0e9e5e4f022a64b3d2f66264f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7f3b1c9b160f4fa020072224e6d37cc955a155cb25f2f5115c9a4f6c4cc43a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f3b1c9b160f4fa020072224e6d37cc955a155cb25f2f5115c9a4f6c4cc43a5->enter($__internal_e7f3b1c9b160f4fa020072224e6d37cc955a155cb25f2f5115c9a4f6c4cc43a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7f3b1c9b160f4fa020072224e6d37cc955a155cb25f2f5115c9a4f6c4cc43a5->leave($__internal_e7f3b1c9b160f4fa020072224e6d37cc955a155cb25f2f5115c9a4f6c4cc43a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
