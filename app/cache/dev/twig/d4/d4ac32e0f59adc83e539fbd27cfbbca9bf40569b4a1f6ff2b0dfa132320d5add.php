<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_14dc8b89d917c91c9ea858a56af9e064505dbf969a92a59a0e8de4f170256dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3e5b8a3da539258f2a4353b0f8ed365c60160d01ede232b7995cf0ef7d915951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5b8a3da539258f2a4353b0f8ed365c60160d01ede232b7995cf0ef7d915951->enter($__internal_3e5b8a3da539258f2a4353b0f8ed365c60160d01ede232b7995cf0ef7d915951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5b8a3da539258f2a4353b0f8ed365c60160d01ede232b7995cf0ef7d915951->leave($__internal_3e5b8a3da539258f2a4353b0f8ed365c60160d01ede232b7995cf0ef7d915951_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f31fc88759a862b0369c4f78b9e602eec829a4d6b26fbdce5f1f02e4566f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f31fc88759a862b0369c4f78b9e602eec829a4d6b26fbdce5f1f02e4566f51a->enter($__internal_9f31fc88759a862b0369c4f78b9e602eec829a4d6b26fbdce5f1f02e4566f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "   <div>
   \t\t<p>
   \t\t\tAn email will be sent to you when the account is validated by the admin
   \t\t</p>
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "            
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 12
        echo "   </div>
";
        
        $__internal_9f31fc88759a862b0369c4f78b9e602eec829a4d6b26fbdce5f1f02e4566f51a->leave($__internal_9f31fc88759a862b0369c4f78b9e602eec829a4d6b26fbdce5f1f02e4566f51a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
   <div>
   \t\t<p>
   \t\t\tAn email will be sent to you when the account is validated by the admin
   \t\t</p>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            
                <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
   </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
