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
        $__internal_d3c81935514164b5c7b87237801ddc50abd6cd6aa96dd23820d87b6d79d4111e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c81935514164b5c7b87237801ddc50abd6cd6aa96dd23820d87b6d79d4111e->enter($__internal_d3c81935514164b5c7b87237801ddc50abd6cd6aa96dd23820d87b6d79d4111e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c81935514164b5c7b87237801ddc50abd6cd6aa96dd23820d87b6d79d4111e->leave($__internal_d3c81935514164b5c7b87237801ddc50abd6cd6aa96dd23820d87b6d79d4111e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2ad1e84f385a7a7e664e5395530ed8335bd2b7359d48319eeccfc7c555bf15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ad1e84f385a7a7e664e5395530ed8335bd2b7359d48319eeccfc7c555bf15e->enter($__internal_c2ad1e84f385a7a7e664e5395530ed8335bd2b7359d48319eeccfc7c555bf15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c2ad1e84f385a7a7e664e5395530ed8335bd2b7359d48319eeccfc7c555bf15e->leave($__internal_c2ad1e84f385a7a7e664e5395530ed8335bd2b7359d48319eeccfc7c555bf15e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1e4ab5395c7b388a93a6a68a7c3f96e23ec97fcc3aef6a630472960ae2d279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e4ab5395c7b388a93a6a68a7c3f96e23ec97fcc3aef6a630472960ae2d279b->enter($__internal_d1e4ab5395c7b388a93a6a68a7c3f96e23ec97fcc3aef6a630472960ae2d279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d1e4ab5395c7b388a93a6a68a7c3f96e23ec97fcc3aef6a630472960ae2d279b->leave($__internal_d1e4ab5395c7b388a93a6a68a7c3f96e23ec97fcc3aef6a630472960ae2d279b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7896e2e0a40d5ca7805a0e26279857c46a54736de45e009ce165b2d47504c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7896e2e0a40d5ca7805a0e26279857c46a54736de45e009ce165b2d47504c55->enter($__internal_a7896e2e0a40d5ca7805a0e26279857c46a54736de45e009ce165b2d47504c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a7896e2e0a40d5ca7805a0e26279857c46a54736de45e009ce165b2d47504c55->leave($__internal_a7896e2e0a40d5ca7805a0e26279857c46a54736de45e009ce165b2d47504c55_prof);

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
