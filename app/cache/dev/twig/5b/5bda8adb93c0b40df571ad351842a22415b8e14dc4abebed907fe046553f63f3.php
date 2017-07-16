<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_51e3221bf78630bdc7bf322d6b03ba8200b14b494e93fc8f82bb45c2bb452358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7ad3e16af624f61bfaa2798ec4487f4121982d5a87da82e9c3f6fa82aa2489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7ad3e16af624f61bfaa2798ec4487f4121982d5a87da82e9c3f6fa82aa2489->enter($__internal_1a7ad3e16af624f61bfaa2798ec4487f4121982d5a87da82e9c3f6fa82aa2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7ad3e16af624f61bfaa2798ec4487f4121982d5a87da82e9c3f6fa82aa2489->leave($__internal_1a7ad3e16af624f61bfaa2798ec4487f4121982d5a87da82e9c3f6fa82aa2489_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_346051ed48c82a68b41418023277d3a044cd4422fd6f94903addd2dc6c78fc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346051ed48c82a68b41418023277d3a044cd4422fd6f94903addd2dc6c78fc45->enter($__internal_346051ed48c82a68b41418023277d3a044cd4422fd6f94903addd2dc6c78fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_346051ed48c82a68b41418023277d3a044cd4422fd6f94903addd2dc6c78fc45->leave($__internal_346051ed48c82a68b41418023277d3a044cd4422fd6f94903addd2dc6c78fc45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
