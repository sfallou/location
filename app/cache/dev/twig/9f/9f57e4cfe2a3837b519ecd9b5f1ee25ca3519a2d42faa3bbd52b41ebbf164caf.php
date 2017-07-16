<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_0a77eb51b9295b7bc715d63b87d74d441aab3ce661eb490b6957059988f6c2dd extends Twig_Template
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
        $__internal_650cf8057ea4840d930de1a01d94fa068dd80ef25bf6efe2fb21bfb8709667cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650cf8057ea4840d930de1a01d94fa068dd80ef25bf6efe2fb21bfb8709667cb->enter($__internal_650cf8057ea4840d930de1a01d94fa068dd80ef25bf6efe2fb21bfb8709667cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650cf8057ea4840d930de1a01d94fa068dd80ef25bf6efe2fb21bfb8709667cb->leave($__internal_650cf8057ea4840d930de1a01d94fa068dd80ef25bf6efe2fb21bfb8709667cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_267d6c507ac7a92e8dad0f5ddf2d2a03f0a281a09ad54a6409299778ec9236e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267d6c507ac7a92e8dad0f5ddf2d2a03f0a281a09ad54a6409299778ec9236e6->enter($__internal_267d6c507ac7a92e8dad0f5ddf2d2a03f0a281a09ad54a6409299778ec9236e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_267d6c507ac7a92e8dad0f5ddf2d2a03f0a281a09ad54a6409299778ec9236e6->leave($__internal_267d6c507ac7a92e8dad0f5ddf2d2a03f0a281a09ad54a6409299778ec9236e6_prof);

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
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
