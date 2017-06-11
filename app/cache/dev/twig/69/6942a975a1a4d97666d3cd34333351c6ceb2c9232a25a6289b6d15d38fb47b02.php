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
        $__internal_dace1d0aaa8568aff6364f7805f3494eb89a239e6f5079936723b94da5c9e902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dace1d0aaa8568aff6364f7805f3494eb89a239e6f5079936723b94da5c9e902->enter($__internal_dace1d0aaa8568aff6364f7805f3494eb89a239e6f5079936723b94da5c9e902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dace1d0aaa8568aff6364f7805f3494eb89a239e6f5079936723b94da5c9e902->leave($__internal_dace1d0aaa8568aff6364f7805f3494eb89a239e6f5079936723b94da5c9e902_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a5e9252d44e3586c13ae6b2060106f32514de1db8815d73f5a22fc54665ea3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5e9252d44e3586c13ae6b2060106f32514de1db8815d73f5a22fc54665ea3e->enter($__internal_0a5e9252d44e3586c13ae6b2060106f32514de1db8815d73f5a22fc54665ea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a5e9252d44e3586c13ae6b2060106f32514de1db8815d73f5a22fc54665ea3e->leave($__internal_0a5e9252d44e3586c13ae6b2060106f32514de1db8815d73f5a22fc54665ea3e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d81ba568ec9af8756b4c10278f78b6ce30c9c27d89cbbeca22de2a757440c430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81ba568ec9af8756b4c10278f78b6ce30c9c27d89cbbeca22de2a757440c430->enter($__internal_d81ba568ec9af8756b4c10278f78b6ce30c9c27d89cbbeca22de2a757440c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d81ba568ec9af8756b4c10278f78b6ce30c9c27d89cbbeca22de2a757440c430->leave($__internal_d81ba568ec9af8756b4c10278f78b6ce30c9c27d89cbbeca22de2a757440c430_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319c7dbca5b1b7c70ff7fc0d9178eb6cdf11d270506a5cfd88308ebbdd4d5773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319c7dbca5b1b7c70ff7fc0d9178eb6cdf11d270506a5cfd88308ebbdd4d5773->enter($__internal_319c7dbca5b1b7c70ff7fc0d9178eb6cdf11d270506a5cfd88308ebbdd4d5773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_319c7dbca5b1b7c70ff7fc0d9178eb6cdf11d270506a5cfd88308ebbdd4d5773->leave($__internal_319c7dbca5b1b7c70ff7fc0d9178eb6cdf11d270506a5cfd88308ebbdd4d5773_prof);

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
