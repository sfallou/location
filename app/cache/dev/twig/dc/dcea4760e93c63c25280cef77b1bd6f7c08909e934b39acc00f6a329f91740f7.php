<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8b6136ee5969c35701ff116d0f9a6420a5c88e25ed9abc0b06d8b4f88207a7c0 extends Twig_Template
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
        $__internal_4471613584f3a03a9ffe0697eb482cb0f90c9db1e74e216c7cab1baf5c58479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4471613584f3a03a9ffe0697eb482cb0f90c9db1e74e216c7cab1baf5c58479e->enter($__internal_4471613584f3a03a9ffe0697eb482cb0f90c9db1e74e216c7cab1baf5c58479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4471613584f3a03a9ffe0697eb482cb0f90c9db1e74e216c7cab1baf5c58479e->leave($__internal_4471613584f3a03a9ffe0697eb482cb0f90c9db1e74e216c7cab1baf5c58479e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_16cd2c72d7d90b8f2c1af2aaf02bf7afe62fad5d0616cf8ed8a1e2aa3e6cd51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cd2c72d7d90b8f2c1af2aaf02bf7afe62fad5d0616cf8ed8a1e2aa3e6cd51b->enter($__internal_16cd2c72d7d90b8f2c1af2aaf02bf7afe62fad5d0616cf8ed8a1e2aa3e6cd51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_16cd2c72d7d90b8f2c1af2aaf02bf7afe62fad5d0616cf8ed8a1e2aa3e6cd51b->leave($__internal_16cd2c72d7d90b8f2c1af2aaf02bf7afe62fad5d0616cf8ed8a1e2aa3e6cd51b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1487c0e651a9e2717530c64a4fcb51cab8bdba7b4e4c23763d89c40876147bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1487c0e651a9e2717530c64a4fcb51cab8bdba7b4e4c23763d89c40876147bef->enter($__internal_1487c0e651a9e2717530c64a4fcb51cab8bdba7b4e4c23763d89c40876147bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1487c0e651a9e2717530c64a4fcb51cab8bdba7b4e4c23763d89c40876147bef->leave($__internal_1487c0e651a9e2717530c64a4fcb51cab8bdba7b4e4c23763d89c40876147bef_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7be8748149cfd9786f8a581abc60eee3fd449d17073c19a19b0314696ccc899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be8748149cfd9786f8a581abc60eee3fd449d17073c19a19b0314696ccc899b->enter($__internal_7be8748149cfd9786f8a581abc60eee3fd449d17073c19a19b0314696ccc899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7be8748149cfd9786f8a581abc60eee3fd449d17073c19a19b0314696ccc899b->leave($__internal_7be8748149cfd9786f8a581abc60eee3fd449d17073c19a19b0314696ccc899b_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
