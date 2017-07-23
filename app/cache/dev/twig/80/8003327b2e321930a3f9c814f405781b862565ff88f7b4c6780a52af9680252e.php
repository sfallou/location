<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_4f6e0cdfd7e3097d2e9034b7e827a12e9e14d59a53f55bfdefe42750681f1ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2e418eb3e9bee4751c11e928e60a6c80b03fd3424baad882d7a33f7273d755d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e418eb3e9bee4751c11e928e60a6c80b03fd3424baad882d7a33f7273d755d7->enter($__internal_2e418eb3e9bee4751c11e928e60a6c80b03fd3424baad882d7a33f7273d755d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e418eb3e9bee4751c11e928e60a6c80b03fd3424baad882d7a33f7273d755d7->leave($__internal_2e418eb3e9bee4751c11e928e60a6c80b03fd3424baad882d7a33f7273d755d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e63dbbcb96c18e40a56b626d5374d5ab4ce8a90f914022494522bc46e0633fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63dbbcb96c18e40a56b626d5374d5ab4ce8a90f914022494522bc46e0633fcb->enter($__internal_e63dbbcb96c18e40a56b626d5374d5ab4ce8a90f914022494522bc46e0633fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e63dbbcb96c18e40a56b626d5374d5ab4ce8a90f914022494522bc46e0633fcb->leave($__internal_e63dbbcb96c18e40a56b626d5374d5ab4ce8a90f914022494522bc46e0633fcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
