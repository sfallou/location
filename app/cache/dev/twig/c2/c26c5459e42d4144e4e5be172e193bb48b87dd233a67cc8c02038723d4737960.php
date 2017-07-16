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
        $__internal_fc9b809780681d3bf19762d4e797d24d9e77e30a0c0e34d157f4654701d94475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9b809780681d3bf19762d4e797d24d9e77e30a0c0e34d157f4654701d94475->enter($__internal_fc9b809780681d3bf19762d4e797d24d9e77e30a0c0e34d157f4654701d94475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc9b809780681d3bf19762d4e797d24d9e77e30a0c0e34d157f4654701d94475->leave($__internal_fc9b809780681d3bf19762d4e797d24d9e77e30a0c0e34d157f4654701d94475_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_338b28283ab13e6eb1aa2cc3d5f25e07c6458fd9c90c396efd76c881c451325b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338b28283ab13e6eb1aa2cc3d5f25e07c6458fd9c90c396efd76c881c451325b->enter($__internal_338b28283ab13e6eb1aa2cc3d5f25e07c6458fd9c90c396efd76c881c451325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_338b28283ab13e6eb1aa2cc3d5f25e07c6458fd9c90c396efd76c881c451325b->leave($__internal_338b28283ab13e6eb1aa2cc3d5f25e07c6458fd9c90c396efd76c881c451325b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aaf8756a0958a87ba29be083a1ed7ecbb43de527ef7ef69e2a07fccd8e4094e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf8756a0958a87ba29be083a1ed7ecbb43de527ef7ef69e2a07fccd8e4094e2->enter($__internal_aaf8756a0958a87ba29be083a1ed7ecbb43de527ef7ef69e2a07fccd8e4094e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aaf8756a0958a87ba29be083a1ed7ecbb43de527ef7ef69e2a07fccd8e4094e2->leave($__internal_aaf8756a0958a87ba29be083a1ed7ecbb43de527ef7ef69e2a07fccd8e4094e2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4fa01bab99a54395671ab9c7a307045ee264de0ed65ec1efca9f921c02901cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa01bab99a54395671ab9c7a307045ee264de0ed65ec1efca9f921c02901cc8->enter($__internal_4fa01bab99a54395671ab9c7a307045ee264de0ed65ec1efca9f921c02901cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4fa01bab99a54395671ab9c7a307045ee264de0ed65ec1efca9f921c02901cc8->leave($__internal_4fa01bab99a54395671ab9c7a307045ee264de0ed65ec1efca9f921c02901cc8_prof);

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
