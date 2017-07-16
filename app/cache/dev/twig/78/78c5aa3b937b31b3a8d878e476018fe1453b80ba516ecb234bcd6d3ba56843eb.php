<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_555b49d674ebc8ba236808c07becd3283897857d43fd5af4f43b23eb4aa3f5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d031d04390cc17945611adb6034f129c14b8bba8432a1fd393d830ebca83c414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d031d04390cc17945611adb6034f129c14b8bba8432a1fd393d830ebca83c414->enter($__internal_d031d04390cc17945611adb6034f129c14b8bba8432a1fd393d830ebca83c414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d031d04390cc17945611adb6034f129c14b8bba8432a1fd393d830ebca83c414->leave($__internal_d031d04390cc17945611adb6034f129c14b8bba8432a1fd393d830ebca83c414_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a5deb1fc324ba8c1ec050b79613a7210d6f7727188c5266738d70c0da4145ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5deb1fc324ba8c1ec050b79613a7210d6f7727188c5266738d70c0da4145ec->enter($__internal_0a5deb1fc324ba8c1ec050b79613a7210d6f7727188c5266738d70c0da4145ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0a5deb1fc324ba8c1ec050b79613a7210d6f7727188c5266738d70c0da4145ec->leave($__internal_0a5deb1fc324ba8c1ec050b79613a7210d6f7727188c5266738d70c0da4145ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
