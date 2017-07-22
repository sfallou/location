<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_900c4433a0c4ea77acf2801aefaf11bf630e5754243f314f1e316f944ec9fe3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e606b9db7f323f02645111c49d5a985d5427ab13da3366fd40a9f268c19ad9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e606b9db7f323f02645111c49d5a985d5427ab13da3366fd40a9f268c19ad9f4->enter($__internal_e606b9db7f323f02645111c49d5a985d5427ab13da3366fd40a9f268c19ad9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e606b9db7f323f02645111c49d5a985d5427ab13da3366fd40a9f268c19ad9f4->leave($__internal_e606b9db7f323f02645111c49d5a985d5427ab13da3366fd40a9f268c19ad9f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40b89c037c245525d71a40c1f9d1589e40dea3872d3d5588bdbd913a21b489c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b89c037c245525d71a40c1f9d1589e40dea3872d3d5588bdbd913a21b489c0->enter($__internal_40b89c037c245525d71a40c1f9d1589e40dea3872d3d5588bdbd913a21b489c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_40b89c037c245525d71a40c1f9d1589e40dea3872d3d5588bdbd913a21b489c0->leave($__internal_40b89c037c245525d71a40c1f9d1589e40dea3872d3d5588bdbd913a21b489c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d885d277c0b01ff1c9593a5bd386df8be848fc04bd694fed07e3f83c7db48905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d885d277c0b01ff1c9593a5bd386df8be848fc04bd694fed07e3f83c7db48905->enter($__internal_d885d277c0b01ff1c9593a5bd386df8be848fc04bd694fed07e3f83c7db48905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d885d277c0b01ff1c9593a5bd386df8be848fc04bd694fed07e3f83c7db48905->leave($__internal_d885d277c0b01ff1c9593a5bd386df8be848fc04bd694fed07e3f83c7db48905_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c24b8041c852ed72be12c6c7701f275d910f641e76de9ad7feddb0254629b16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24b8041c852ed72be12c6c7701f275d910f641e76de9ad7feddb0254629b16d->enter($__internal_c24b8041c852ed72be12c6c7701f275d910f641e76de9ad7feddb0254629b16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c24b8041c852ed72be12c6c7701f275d910f641e76de9ad7feddb0254629b16d->leave($__internal_c24b8041c852ed72be12c6c7701f275d910f641e76de9ad7feddb0254629b16d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
