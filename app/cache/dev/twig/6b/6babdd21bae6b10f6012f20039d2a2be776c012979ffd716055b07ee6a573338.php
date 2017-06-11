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
        $__internal_19298b1cc07722af01faee9f7a56b70b91352c53ced8f69ceb9e0b294cd0b46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19298b1cc07722af01faee9f7a56b70b91352c53ced8f69ceb9e0b294cd0b46d->enter($__internal_19298b1cc07722af01faee9f7a56b70b91352c53ced8f69ceb9e0b294cd0b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19298b1cc07722af01faee9f7a56b70b91352c53ced8f69ceb9e0b294cd0b46d->leave($__internal_19298b1cc07722af01faee9f7a56b70b91352c53ced8f69ceb9e0b294cd0b46d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbcfcb3dde9626e3a1a9ce4f1c3a82b26d60c0dd450b8d482fbae3bfef85fef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcfcb3dde9626e3a1a9ce4f1c3a82b26d60c0dd450b8d482fbae3bfef85fef9->enter($__internal_bbcfcb3dde9626e3a1a9ce4f1c3a82b26d60c0dd450b8d482fbae3bfef85fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbcfcb3dde9626e3a1a9ce4f1c3a82b26d60c0dd450b8d482fbae3bfef85fef9->leave($__internal_bbcfcb3dde9626e3a1a9ce4f1c3a82b26d60c0dd450b8d482fbae3bfef85fef9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10e4463d094c96ec75890458adb34033f80bcf87eafcc5e0026362578fc2980e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e4463d094c96ec75890458adb34033f80bcf87eafcc5e0026362578fc2980e->enter($__internal_10e4463d094c96ec75890458adb34033f80bcf87eafcc5e0026362578fc2980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10e4463d094c96ec75890458adb34033f80bcf87eafcc5e0026362578fc2980e->leave($__internal_10e4463d094c96ec75890458adb34033f80bcf87eafcc5e0026362578fc2980e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7915b3c15a70dc08e8cc484c5ba776b84f005374909b81baa7d7adc99af8e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7915b3c15a70dc08e8cc484c5ba776b84f005374909b81baa7d7adc99af8e1e->enter($__internal_d7915b3c15a70dc08e8cc484c5ba776b84f005374909b81baa7d7adc99af8e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7915b3c15a70dc08e8cc484c5ba776b84f005374909b81baa7d7adc99af8e1e->leave($__internal_d7915b3c15a70dc08e8cc484c5ba776b84f005374909b81baa7d7adc99af8e1e_prof);

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
