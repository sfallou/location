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
        $__internal_884e2c0a411878d794d7b5abb11d743914e47354c230926ca70453d901efbd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e2c0a411878d794d7b5abb11d743914e47354c230926ca70453d901efbd31->enter($__internal_884e2c0a411878d794d7b5abb11d743914e47354c230926ca70453d901efbd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884e2c0a411878d794d7b5abb11d743914e47354c230926ca70453d901efbd31->leave($__internal_884e2c0a411878d794d7b5abb11d743914e47354c230926ca70453d901efbd31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6132f3482f32b60ee32cca5b6f62f9b1c574edf31f2498ef8a7186cfc3cfb835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6132f3482f32b60ee32cca5b6f62f9b1c574edf31f2498ef8a7186cfc3cfb835->enter($__internal_6132f3482f32b60ee32cca5b6f62f9b1c574edf31f2498ef8a7186cfc3cfb835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6132f3482f32b60ee32cca5b6f62f9b1c574edf31f2498ef8a7186cfc3cfb835->leave($__internal_6132f3482f32b60ee32cca5b6f62f9b1c574edf31f2498ef8a7186cfc3cfb835_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24442d0c961d67b04665840c76053935a161501042b192d17e030bfd498bdb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24442d0c961d67b04665840c76053935a161501042b192d17e030bfd498bdb7c->enter($__internal_24442d0c961d67b04665840c76053935a161501042b192d17e030bfd498bdb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24442d0c961d67b04665840c76053935a161501042b192d17e030bfd498bdb7c->leave($__internal_24442d0c961d67b04665840c76053935a161501042b192d17e030bfd498bdb7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90a37e4e91074bcec8de253dd1aa6933d74d5217038f58c4bdb10d82e264d872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a37e4e91074bcec8de253dd1aa6933d74d5217038f58c4bdb10d82e264d872->enter($__internal_90a37e4e91074bcec8de253dd1aa6933d74d5217038f58c4bdb10d82e264d872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90a37e4e91074bcec8de253dd1aa6933d74d5217038f58c4bdb10d82e264d872->leave($__internal_90a37e4e91074bcec8de253dd1aa6933d74d5217038f58c4bdb10d82e264d872_prof);

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
