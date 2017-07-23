<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c814c0e2fff14fc2535f19106eccd37e233a408947315c41eefa67a2b9ad3692 extends Twig_Template
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
        $__internal_42629e1d0d4dd15d8ef2b47fd7d5e059c3dd49ef043d166769e09b74157a8499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42629e1d0d4dd15d8ef2b47fd7d5e059c3dd49ef043d166769e09b74157a8499->enter($__internal_42629e1d0d4dd15d8ef2b47fd7d5e059c3dd49ef043d166769e09b74157a8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_42629e1d0d4dd15d8ef2b47fd7d5e059c3dd49ef043d166769e09b74157a8499->leave($__internal_42629e1d0d4dd15d8ef2b47fd7d5e059c3dd49ef043d166769e09b74157a8499_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a827bd0cb3226efe8a245346f10ac08474fbc4ec93b90c147df89a8daeef34d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a827bd0cb3226efe8a245346f10ac08474fbc4ec93b90c147df89a8daeef34d0->enter($__internal_a827bd0cb3226efe8a245346f10ac08474fbc4ec93b90c147df89a8daeef34d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a827bd0cb3226efe8a245346f10ac08474fbc4ec93b90c147df89a8daeef34d0->leave($__internal_a827bd0cb3226efe8a245346f10ac08474fbc4ec93b90c147df89a8daeef34d0_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d995a4280ce2d6f97570a85129e9e625136efa44dfc616840b63a4cfee972ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d995a4280ce2d6f97570a85129e9e625136efa44dfc616840b63a4cfee972ea->enter($__internal_3d995a4280ce2d6f97570a85129e9e625136efa44dfc616840b63a4cfee972ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d995a4280ce2d6f97570a85129e9e625136efa44dfc616840b63a4cfee972ea->leave($__internal_3d995a4280ce2d6f97570a85129e9e625136efa44dfc616840b63a4cfee972ea_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e506fabe6bede097f68e5d14729ff5bc84c9136bcc5f0d644c4d30c4fb51a863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e506fabe6bede097f68e5d14729ff5bc84c9136bcc5f0d644c4d30c4fb51a863->enter($__internal_e506fabe6bede097f68e5d14729ff5bc84c9136bcc5f0d644c4d30c4fb51a863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e506fabe6bede097f68e5d14729ff5bc84c9136bcc5f0d644c4d30c4fb51a863->leave($__internal_e506fabe6bede097f68e5d14729ff5bc84c9136bcc5f0d644c4d30c4fb51a863_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
