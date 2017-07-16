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
        $__internal_32ffa755a1268c86beffb3d1c3ca0291ff63bf311bf569eb4ebade9f3bf35161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ffa755a1268c86beffb3d1c3ca0291ff63bf311bf569eb4ebade9f3bf35161->enter($__internal_32ffa755a1268c86beffb3d1c3ca0291ff63bf311bf569eb4ebade9f3bf35161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32ffa755a1268c86beffb3d1c3ca0291ff63bf311bf569eb4ebade9f3bf35161->leave($__internal_32ffa755a1268c86beffb3d1c3ca0291ff63bf311bf569eb4ebade9f3bf35161_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1dde9664608d33848c577b0db6fe5523e745e7403e1c61720cdce01e5ca0937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dde9664608d33848c577b0db6fe5523e745e7403e1c61720cdce01e5ca0937->enter($__internal_c1dde9664608d33848c577b0db6fe5523e745e7403e1c61720cdce01e5ca0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c1dde9664608d33848c577b0db6fe5523e745e7403e1c61720cdce01e5ca0937->leave($__internal_c1dde9664608d33848c577b0db6fe5523e745e7403e1c61720cdce01e5ca0937_prof);

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
