<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4597a1c37aab3edba72a80811856c606d0a2521ffdfaad9a9c0b36ae82cd26be extends Twig_Template
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
        $__internal_b0df6aa6d64ea1be060893eab6a597ce2455f60944a36527b4befd4c3209538d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0df6aa6d64ea1be060893eab6a597ce2455f60944a36527b4befd4c3209538d->enter($__internal_b0df6aa6d64ea1be060893eab6a597ce2455f60944a36527b4befd4c3209538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b0df6aa6d64ea1be060893eab6a597ce2455f60944a36527b4befd4c3209538d->leave($__internal_b0df6aa6d64ea1be060893eab6a597ce2455f60944a36527b4befd4c3209538d_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a4b0a764e094478b597b28d3d9fc2c1b1daeda36e3210f4125ddc0f6d6cd081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4b0a764e094478b597b28d3d9fc2c1b1daeda36e3210f4125ddc0f6d6cd081->enter($__internal_7a4b0a764e094478b597b28d3d9fc2c1b1daeda36e3210f4125ddc0f6d6cd081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a4b0a764e094478b597b28d3d9fc2c1b1daeda36e3210f4125ddc0f6d6cd081->leave($__internal_7a4b0a764e094478b597b28d3d9fc2c1b1daeda36e3210f4125ddc0f6d6cd081_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_621ce656f89aff1d922fc445550a1194ce16f6648e7a55ebd12a7e77e1189d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621ce656f89aff1d922fc445550a1194ce16f6648e7a55ebd12a7e77e1189d92->enter($__internal_621ce656f89aff1d922fc445550a1194ce16f6648e7a55ebd12a7e77e1189d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_621ce656f89aff1d922fc445550a1194ce16f6648e7a55ebd12a7e77e1189d92->leave($__internal_621ce656f89aff1d922fc445550a1194ce16f6648e7a55ebd12a7e77e1189d92_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_042789a48d8290cac871b196bc6264918e39272479a438cc04cbb0606197fff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042789a48d8290cac871b196bc6264918e39272479a438cc04cbb0606197fff0->enter($__internal_042789a48d8290cac871b196bc6264918e39272479a438cc04cbb0606197fff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_042789a48d8290cac871b196bc6264918e39272479a438cc04cbb0606197fff0->leave($__internal_042789a48d8290cac871b196bc6264918e39272479a438cc04cbb0606197fff0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
