<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d97a1a8b701ca788f137e31f64e708db9f5e743354278e4a8bf0f2004407ae75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_12f0f7ce8c1cc4ed3ea52db054848ab9365e06570250519969b1702a3eb46be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f0f7ce8c1cc4ed3ea52db054848ab9365e06570250519969b1702a3eb46be3->enter($__internal_12f0f7ce8c1cc4ed3ea52db054848ab9365e06570250519969b1702a3eb46be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f0f7ce8c1cc4ed3ea52db054848ab9365e06570250519969b1702a3eb46be3->leave($__internal_12f0f7ce8c1cc4ed3ea52db054848ab9365e06570250519969b1702a3eb46be3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a15d9714edce317a31cb4e4f2180540b60f0a12d596d2b6c7b2228c51658d978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15d9714edce317a31cb4e4f2180540b60f0a12d596d2b6c7b2228c51658d978->enter($__internal_a15d9714edce317a31cb4e4f2180540b60f0a12d596d2b6c7b2228c51658d978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a15d9714edce317a31cb4e4f2180540b60f0a12d596d2b6c7b2228c51658d978->leave($__internal_a15d9714edce317a31cb4e4f2180540b60f0a12d596d2b6c7b2228c51658d978_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
