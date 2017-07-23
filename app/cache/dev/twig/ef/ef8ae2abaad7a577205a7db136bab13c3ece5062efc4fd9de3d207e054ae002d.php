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
        $__internal_81a120979f1b7992e73b835c44e5a2db51a467ee9b7d13a967a61698c4e1e076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a120979f1b7992e73b835c44e5a2db51a467ee9b7d13a967a61698c4e1e076->enter($__internal_81a120979f1b7992e73b835c44e5a2db51a467ee9b7d13a967a61698c4e1e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_81a120979f1b7992e73b835c44e5a2db51a467ee9b7d13a967a61698c4e1e076->leave($__internal_81a120979f1b7992e73b835c44e5a2db51a467ee9b7d13a967a61698c4e1e076_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_efdbb89b80662a5bd95fda8019bc71bdcccb574c18c9446c88498efb421d6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdbb89b80662a5bd95fda8019bc71bdcccb574c18c9446c88498efb421d6160->enter($__internal_efdbb89b80662a5bd95fda8019bc71bdcccb574c18c9446c88498efb421d6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_efdbb89b80662a5bd95fda8019bc71bdcccb574c18c9446c88498efb421d6160->leave($__internal_efdbb89b80662a5bd95fda8019bc71bdcccb574c18c9446c88498efb421d6160_prof);

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
