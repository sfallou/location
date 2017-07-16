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
        $__internal_d24edced6e9daaf5927facfb087f3cf9fb873e936c5c733663e27026ab960a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24edced6e9daaf5927facfb087f3cf9fb873e936c5c733663e27026ab960a9b->enter($__internal_d24edced6e9daaf5927facfb087f3cf9fb873e936c5c733663e27026ab960a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d24edced6e9daaf5927facfb087f3cf9fb873e936c5c733663e27026ab960a9b->leave($__internal_d24edced6e9daaf5927facfb087f3cf9fb873e936c5c733663e27026ab960a9b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fcb9c6b0ccab666c9d84c421b33dbd1bb0aa97835fb5c7ba960d887def2c3c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb9c6b0ccab666c9d84c421b33dbd1bb0aa97835fb5c7ba960d887def2c3c65->enter($__internal_fcb9c6b0ccab666c9d84c421b33dbd1bb0aa97835fb5c7ba960d887def2c3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fcb9c6b0ccab666c9d84c421b33dbd1bb0aa97835fb5c7ba960d887def2c3c65->leave($__internal_fcb9c6b0ccab666c9d84c421b33dbd1bb0aa97835fb5c7ba960d887def2c3c65_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e96e0fbd4557244c5d5afb84d6e9c822509a5df66d4d2f4f83f16b9507c259b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e96e0fbd4557244c5d5afb84d6e9c822509a5df66d4d2f4f83f16b9507c259b->enter($__internal_8e96e0fbd4557244c5d5afb84d6e9c822509a5df66d4d2f4f83f16b9507c259b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8e96e0fbd4557244c5d5afb84d6e9c822509a5df66d4d2f4f83f16b9507c259b->leave($__internal_8e96e0fbd4557244c5d5afb84d6e9c822509a5df66d4d2f4f83f16b9507c259b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ce598d7660b3d77415b219f20206aeab383ee5d175763c9db9fd43458fc2c602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce598d7660b3d77415b219f20206aeab383ee5d175763c9db9fd43458fc2c602->enter($__internal_ce598d7660b3d77415b219f20206aeab383ee5d175763c9db9fd43458fc2c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ce598d7660b3d77415b219f20206aeab383ee5d175763c9db9fd43458fc2c602->leave($__internal_ce598d7660b3d77415b219f20206aeab383ee5d175763c9db9fd43458fc2c602_prof);

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
