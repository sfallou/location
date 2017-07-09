<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7b1f9667e80160943bb66f26dbed60f78cb66079826f9dcc25b8314fa27f3064 extends Twig_Template
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
        $__internal_f22094eb282b789de57df47b6415417af4e4de9803f710bf19eb4e575538a82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22094eb282b789de57df47b6415417af4e4de9803f710bf19eb4e575538a82d->enter($__internal_f22094eb282b789de57df47b6415417af4e4de9803f710bf19eb4e575538a82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22094eb282b789de57df47b6415417af4e4de9803f710bf19eb4e575538a82d->leave($__internal_f22094eb282b789de57df47b6415417af4e4de9803f710bf19eb4e575538a82d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_278bc4db8049621efda735407e6694cb31698e614898bf8975afc62ca95e0a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278bc4db8049621efda735407e6694cb31698e614898bf8975afc62ca95e0a88->enter($__internal_278bc4db8049621efda735407e6694cb31698e614898bf8975afc62ca95e0a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_278bc4db8049621efda735407e6694cb31698e614898bf8975afc62ca95e0a88->leave($__internal_278bc4db8049621efda735407e6694cb31698e614898bf8975afc62ca95e0a88_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
