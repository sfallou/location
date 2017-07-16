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
        $__internal_23c4a29d35a5eb73b256f3336aa6d6b66b5a3900892864ac43cc851dcc02957d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c4a29d35a5eb73b256f3336aa6d6b66b5a3900892864ac43cc851dcc02957d->enter($__internal_23c4a29d35a5eb73b256f3336aa6d6b66b5a3900892864ac43cc851dcc02957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23c4a29d35a5eb73b256f3336aa6d6b66b5a3900892864ac43cc851dcc02957d->leave($__internal_23c4a29d35a5eb73b256f3336aa6d6b66b5a3900892864ac43cc851dcc02957d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_40fa6ac111c890a9e1ed06074e48fd79e647d16360ee89b7b671bff472fce51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fa6ac111c890a9e1ed06074e48fd79e647d16360ee89b7b671bff472fce51b->enter($__internal_40fa6ac111c890a9e1ed06074e48fd79e647d16360ee89b7b671bff472fce51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_40fa6ac111c890a9e1ed06074e48fd79e647d16360ee89b7b671bff472fce51b->leave($__internal_40fa6ac111c890a9e1ed06074e48fd79e647d16360ee89b7b671bff472fce51b_prof);

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
