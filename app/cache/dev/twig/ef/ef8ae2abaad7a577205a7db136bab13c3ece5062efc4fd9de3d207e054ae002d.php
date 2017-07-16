<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1f58148eb95a2a9d03a17990b85252ccef3d72d62e2b2537d9ec9d3e176afcd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33043691dae489a5cedcc493160f1275c9b7418968dc532f98bd4f12c0059e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33043691dae489a5cedcc493160f1275c9b7418968dc532f98bd4f12c0059e51->enter($__internal_33043691dae489a5cedcc493160f1275c9b7418968dc532f98bd4f12c0059e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_33043691dae489a5cedcc493160f1275c9b7418968dc532f98bd4f12c0059e51->leave($__internal_33043691dae489a5cedcc493160f1275c9b7418968dc532f98bd4f12c0059e51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8b2b00b730f7743f94755df923bc02d05dc82f505f5ecb4a19c3a8608307fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b2b00b730f7743f94755df923bc02d05dc82f505f5ecb4a19c3a8608307fbf->enter($__internal_d8b2b00b730f7743f94755df923bc02d05dc82f505f5ecb4a19c3a8608307fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8b2b00b730f7743f94755df923bc02d05dc82f505f5ecb4a19c3a8608307fbf->leave($__internal_d8b2b00b730f7743f94755df923bc02d05dc82f505f5ecb4a19c3a8608307fbf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
