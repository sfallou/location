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
        $__internal_b2bc60f1f94a81be0dc3bac9c27099716cc7f3f7a2323c089a4fbd627c8c70e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bc60f1f94a81be0dc3bac9c27099716cc7f3f7a2323c089a4fbd627c8c70e6->enter($__internal_b2bc60f1f94a81be0dc3bac9c27099716cc7f3f7a2323c089a4fbd627c8c70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2bc60f1f94a81be0dc3bac9c27099716cc7f3f7a2323c089a4fbd627c8c70e6->leave($__internal_b2bc60f1f94a81be0dc3bac9c27099716cc7f3f7a2323c089a4fbd627c8c70e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e837b6b08807086d62dee756640dfdcb93c4cd62d0bd3471dfe099e084c44362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e837b6b08807086d62dee756640dfdcb93c4cd62d0bd3471dfe099e084c44362->enter($__internal_e837b6b08807086d62dee756640dfdcb93c4cd62d0bd3471dfe099e084c44362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e837b6b08807086d62dee756640dfdcb93c4cd62d0bd3471dfe099e084c44362->leave($__internal_e837b6b08807086d62dee756640dfdcb93c4cd62d0bd3471dfe099e084c44362_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31800308463203c68091938937a58174c7ec7007136c7d93d8b50d113509d4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31800308463203c68091938937a58174c7ec7007136c7d93d8b50d113509d4d8->enter($__internal_31800308463203c68091938937a58174c7ec7007136c7d93d8b50d113509d4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31800308463203c68091938937a58174c7ec7007136c7d93d8b50d113509d4d8->leave($__internal_31800308463203c68091938937a58174c7ec7007136c7d93d8b50d113509d4d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb8e3942c2231dc78c6a4f5620c899bd53ad0dfb449b63822cbf1dd7bb986fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e3942c2231dc78c6a4f5620c899bd53ad0dfb449b63822cbf1dd7bb986fb2->enter($__internal_bb8e3942c2231dc78c6a4f5620c899bd53ad0dfb449b63822cbf1dd7bb986fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb8e3942c2231dc78c6a4f5620c899bd53ad0dfb449b63822cbf1dd7bb986fb2->leave($__internal_bb8e3942c2231dc78c6a4f5620c899bd53ad0dfb449b63822cbf1dd7bb986fb2_prof);

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
