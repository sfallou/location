<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e7d70a100698a45cbe0296a06dce81b5f65b56cfd7dbb063d049870fe38a4f74 extends Twig_Template
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
        $__internal_c6581a5d50740ad9df16c3a9fbe51a00888a44b55d0cf0b5af54e6d45941511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6581a5d50740ad9df16c3a9fbe51a00888a44b55d0cf0b5af54e6d45941511b->enter($__internal_c6581a5d50740ad9df16c3a9fbe51a00888a44b55d0cf0b5af54e6d45941511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6581a5d50740ad9df16c3a9fbe51a00888a44b55d0cf0b5af54e6d45941511b->leave($__internal_c6581a5d50740ad9df16c3a9fbe51a00888a44b55d0cf0b5af54e6d45941511b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc606b4e33d02ca260ce472c704d1f75eb871c11826c069d4d1af37f668e84b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc606b4e33d02ca260ce472c704d1f75eb871c11826c069d4d1af37f668e84b3->enter($__internal_bc606b4e33d02ca260ce472c704d1f75eb871c11826c069d4d1af37f668e84b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bc606b4e33d02ca260ce472c704d1f75eb871c11826c069d4d1af37f668e84b3->leave($__internal_bc606b4e33d02ca260ce472c704d1f75eb871c11826c069d4d1af37f668e84b3_prof);

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
", "FOSUserBundle:Registration:checkEmail.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
