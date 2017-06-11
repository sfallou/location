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
        $__internal_a84e1aaf578697ec74fc0257b3c7d73212d769ee168cdb42f6fc5581068889a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84e1aaf578697ec74fc0257b3c7d73212d769ee168cdb42f6fc5581068889a2->enter($__internal_a84e1aaf578697ec74fc0257b3c7d73212d769ee168cdb42f6fc5581068889a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a84e1aaf578697ec74fc0257b3c7d73212d769ee168cdb42f6fc5581068889a2->leave($__internal_a84e1aaf578697ec74fc0257b3c7d73212d769ee168cdb42f6fc5581068889a2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba9c4ec50377a62771eea35cc80c37e5e85387be05f781653412c6a7513a5dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9c4ec50377a62771eea35cc80c37e5e85387be05f781653412c6a7513a5dcf->enter($__internal_ba9c4ec50377a62771eea35cc80c37e5e85387be05f781653412c6a7513a5dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ba9c4ec50377a62771eea35cc80c37e5e85387be05f781653412c6a7513a5dcf->leave($__internal_ba9c4ec50377a62771eea35cc80c37e5e85387be05f781653412c6a7513a5dcf_prof);

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
