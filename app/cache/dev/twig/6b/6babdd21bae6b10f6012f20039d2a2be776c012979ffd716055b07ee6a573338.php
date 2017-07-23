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
        $__internal_51dadffe1a42964bdb37e835eb5236011bde87739b71dc3ea4602f962b340c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dadffe1a42964bdb37e835eb5236011bde87739b71dc3ea4602f962b340c16->enter($__internal_51dadffe1a42964bdb37e835eb5236011bde87739b71dc3ea4602f962b340c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51dadffe1a42964bdb37e835eb5236011bde87739b71dc3ea4602f962b340c16->leave($__internal_51dadffe1a42964bdb37e835eb5236011bde87739b71dc3ea4602f962b340c16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b79d5f3aeefdb100d4dc0559ee052ab3fbc7291521c1f18bd670288fa2ee7671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79d5f3aeefdb100d4dc0559ee052ab3fbc7291521c1f18bd670288fa2ee7671->enter($__internal_b79d5f3aeefdb100d4dc0559ee052ab3fbc7291521c1f18bd670288fa2ee7671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b79d5f3aeefdb100d4dc0559ee052ab3fbc7291521c1f18bd670288fa2ee7671->leave($__internal_b79d5f3aeefdb100d4dc0559ee052ab3fbc7291521c1f18bd670288fa2ee7671_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23765e767258b32ca5402f88937724ce1e32b8436a61abce2d58c50aa55be27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23765e767258b32ca5402f88937724ce1e32b8436a61abce2d58c50aa55be27c->enter($__internal_23765e767258b32ca5402f88937724ce1e32b8436a61abce2d58c50aa55be27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23765e767258b32ca5402f88937724ce1e32b8436a61abce2d58c50aa55be27c->leave($__internal_23765e767258b32ca5402f88937724ce1e32b8436a61abce2d58c50aa55be27c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70ac1c9a8880990786806391f5cc7c4d6d27aaa9153a344ea7270539fa243779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ac1c9a8880990786806391f5cc7c4d6d27aaa9153a344ea7270539fa243779->enter($__internal_70ac1c9a8880990786806391f5cc7c4d6d27aaa9153a344ea7270539fa243779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70ac1c9a8880990786806391f5cc7c4d6d27aaa9153a344ea7270539fa243779->leave($__internal_70ac1c9a8880990786806391f5cc7c4d6d27aaa9153a344ea7270539fa243779_prof);

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
