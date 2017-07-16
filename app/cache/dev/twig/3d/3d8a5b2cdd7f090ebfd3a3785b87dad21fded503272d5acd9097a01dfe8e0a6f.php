<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e089aade680c155b08447a5439bf798f62520096344dc18b411411f676096412 extends Twig_Template
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
        $__internal_e73de77a47f13bea34bd7242de17f36d85fc5d5a07bd47ad6d4bc3f53fe48bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73de77a47f13bea34bd7242de17f36d85fc5d5a07bd47ad6d4bc3f53fe48bcb->enter($__internal_e73de77a47f13bea34bd7242de17f36d85fc5d5a07bd47ad6d4bc3f53fe48bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73de77a47f13bea34bd7242de17f36d85fc5d5a07bd47ad6d4bc3f53fe48bcb->leave($__internal_e73de77a47f13bea34bd7242de17f36d85fc5d5a07bd47ad6d4bc3f53fe48bcb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_587d70179d7bb551e443b65bc28ce185a936370da05d738e1d17e77a3e2e1c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587d70179d7bb551e443b65bc28ce185a936370da05d738e1d17e77a3e2e1c35->enter($__internal_587d70179d7bb551e443b65bc28ce185a936370da05d738e1d17e77a3e2e1c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_587d70179d7bb551e443b65bc28ce185a936370da05d738e1d17e77a3e2e1c35->leave($__internal_587d70179d7bb551e443b65bc28ce185a936370da05d738e1d17e77a3e2e1c35_prof);

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
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
