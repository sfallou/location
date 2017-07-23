<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7239f33a1c323318855c0ef238313062e5206a3a15f5cbebf8093b850a181e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_37e8b1dc20b2e95aca9c10c90c46b8d767334ebd8d188e36e596b30904b14f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e8b1dc20b2e95aca9c10c90c46b8d767334ebd8d188e36e596b30904b14f91->enter($__internal_37e8b1dc20b2e95aca9c10c90c46b8d767334ebd8d188e36e596b30904b14f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37e8b1dc20b2e95aca9c10c90c46b8d767334ebd8d188e36e596b30904b14f91->leave($__internal_37e8b1dc20b2e95aca9c10c90c46b8d767334ebd8d188e36e596b30904b14f91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aae9d3f0bd077ec491e738214e9d38b4487f8f3a161fec3fbf5ae293b8db9403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae9d3f0bd077ec491e738214e9d38b4487f8f3a161fec3fbf5ae293b8db9403->enter($__internal_aae9d3f0bd077ec491e738214e9d38b4487f8f3a161fec3fbf5ae293b8db9403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_aae9d3f0bd077ec491e738214e9d38b4487f8f3a161fec3fbf5ae293b8db9403->leave($__internal_aae9d3f0bd077ec491e738214e9d38b4487f8f3a161fec3fbf5ae293b8db9403_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
