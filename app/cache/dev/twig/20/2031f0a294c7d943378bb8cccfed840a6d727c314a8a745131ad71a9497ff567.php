<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bb68f979a829e3ac6bd4706cc6d7e6e93071b5b81225a37a79d2edfb6588924f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58539adf9c6197cd156812ffcd9b7c4a006938c1315667d5d5e75a8e4c9ef4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58539adf9c6197cd156812ffcd9b7c4a006938c1315667d5d5e75a8e4c9ef4b7->enter($__internal_58539adf9c6197cd156812ffcd9b7c4a006938c1315667d5d5e75a8e4c9ef4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58539adf9c6197cd156812ffcd9b7c4a006938c1315667d5d5e75a8e4c9ef4b7->leave($__internal_58539adf9c6197cd156812ffcd9b7c4a006938c1315667d5d5e75a8e4c9ef4b7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_825231a8f2d0151d3268d5da9860f07ad0d25126db074e525841b2d21832eeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825231a8f2d0151d3268d5da9860f07ad0d25126db074e525841b2d21832eeab->enter($__internal_825231a8f2d0151d3268d5da9860f07ad0d25126db074e525841b2d21832eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_825231a8f2d0151d3268d5da9860f07ad0d25126db074e525841b2d21832eeab->leave($__internal_825231a8f2d0151d3268d5da9860f07ad0d25126db074e525841b2d21832eeab_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b71334f74e66b018258bde531d6fe55ea416fa1a8fd3b0f65e0ddb67a01c70e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71334f74e66b018258bde531d6fe55ea416fa1a8fd3b0f65e0ddb67a01c70e0->enter($__internal_b71334f74e66b018258bde531d6fe55ea416fa1a8fd3b0f65e0ddb67a01c70e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b71334f74e66b018258bde531d6fe55ea416fa1a8fd3b0f65e0ddb67a01c70e0->leave($__internal_b71334f74e66b018258bde531d6fe55ea416fa1a8fd3b0f65e0ddb67a01c70e0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9dd8e03ff7e91fd5d214cdc4a7f0d862768102c8e6dc00d27e352036b58e92ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd8e03ff7e91fd5d214cdc4a7f0d862768102c8e6dc00d27e352036b58e92ba->enter($__internal_9dd8e03ff7e91fd5d214cdc4a7f0d862768102c8e6dc00d27e352036b58e92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9dd8e03ff7e91fd5d214cdc4a7f0d862768102c8e6dc00d27e352036b58e92ba->leave($__internal_9dd8e03ff7e91fd5d214cdc4a7f0d862768102c8e6dc00d27e352036b58e92ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
