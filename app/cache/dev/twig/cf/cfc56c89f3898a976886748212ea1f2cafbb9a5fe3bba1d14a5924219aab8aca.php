<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d999e31d8401b403e63065ce8a6f5103e1e564b8f85f4dfe76e9660c98e78bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1dd9b5d3cf41629b016156da297fe8513ad9264643c30924b953dc2c1079efd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd9b5d3cf41629b016156da297fe8513ad9264643c30924b953dc2c1079efd6->enter($__internal_1dd9b5d3cf41629b016156da297fe8513ad9264643c30924b953dc2c1079efd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd9b5d3cf41629b016156da297fe8513ad9264643c30924b953dc2c1079efd6->leave($__internal_1dd9b5d3cf41629b016156da297fe8513ad9264643c30924b953dc2c1079efd6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_416cc3f9cdacff4357eb8816be05c98ee581e9d2e9f29126b6614f22fc0de7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416cc3f9cdacff4357eb8816be05c98ee581e9d2e9f29126b6614f22fc0de7cb->enter($__internal_416cc3f9cdacff4357eb8816be05c98ee581e9d2e9f29126b6614f22fc0de7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_416cc3f9cdacff4357eb8816be05c98ee581e9d2e9f29126b6614f22fc0de7cb->leave($__internal_416cc3f9cdacff4357eb8816be05c98ee581e9d2e9f29126b6614f22fc0de7cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
