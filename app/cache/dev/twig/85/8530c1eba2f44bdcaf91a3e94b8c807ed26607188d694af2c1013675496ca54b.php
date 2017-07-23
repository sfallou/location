<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_2d2180b991de427187b66f61f06283b3025b12621206908b1d7a005cf50a245d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a61093a5e240432814967bde2c7727ddc8384be4854ef53bf4cb7081613afa51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61093a5e240432814967bde2c7727ddc8384be4854ef53bf4cb7081613afa51->enter($__internal_a61093a5e240432814967bde2c7727ddc8384be4854ef53bf4cb7081613afa51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a61093a5e240432814967bde2c7727ddc8384be4854ef53bf4cb7081613afa51->leave($__internal_a61093a5e240432814967bde2c7727ddc8384be4854ef53bf4cb7081613afa51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de5b4ed05568c48bfbbc7d7adf2ff6038d9aa19ea1f443b592432b977ee170a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5b4ed05568c48bfbbc7d7adf2ff6038d9aa19ea1f443b592432b977ee170a3->enter($__internal_de5b4ed05568c48bfbbc7d7adf2ff6038d9aa19ea1f443b592432b977ee170a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_de5b4ed05568c48bfbbc7d7adf2ff6038d9aa19ea1f443b592432b977ee170a3->leave($__internal_de5b4ed05568c48bfbbc7d7adf2ff6038d9aa19ea1f443b592432b977ee170a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
