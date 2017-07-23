<?php

/* :meubleappartement:new.html.twig */
class __TwigTemplate_ccbb129f5febce9e3bd03b390c1331c76352bc5b42c06ae15ebea49c465312d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleappartement:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c1ed918eb597a3e8f068ca5c9141f716dcf6de4fdbbc051653bb3920d1da7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1ed918eb597a3e8f068ca5c9141f716dcf6de4fdbbc051653bb3920d1da7f5->enter($__internal_5c1ed918eb597a3e8f068ca5c9141f716dcf6de4fdbbc051653bb3920d1da7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleappartement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1ed918eb597a3e8f068ca5c9141f716dcf6de4fdbbc051653bb3920d1da7f5->leave($__internal_5c1ed918eb597a3e8f068ca5c9141f716dcf6de4fdbbc051653bb3920d1da7f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_289e8bb1b505ffb027308ecd713356c92c40db38cd74bf5bd3007ca58881c3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289e8bb1b505ffb027308ecd713356c92c40db38cd74bf5bd3007ca58881c3ee->enter($__internal_289e8bb1b505ffb027308ecd713356c92c40db38cd74bf5bd3007ca58881c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleappartement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_289e8bb1b505ffb027308ecd713356c92c40db38cd74bf5bd3007ca58881c3ee->leave($__internal_289e8bb1b505ffb027308ecd713356c92c40db38cd74bf5bd3007ca58881c3ee_prof);

    }

    public function getTemplateName()
    {
        return ":meubleappartement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Meubleappartement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('meubleappartement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":meubleappartement:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleappartement/new.html.twig");
    }
}
