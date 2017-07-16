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
        $__internal_c1da4ed45a72571aceada59ca744961ba71f2ebc43f1378150ecc9ed17e0dcf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1da4ed45a72571aceada59ca744961ba71f2ebc43f1378150ecc9ed17e0dcf8->enter($__internal_c1da4ed45a72571aceada59ca744961ba71f2ebc43f1378150ecc9ed17e0dcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1da4ed45a72571aceada59ca744961ba71f2ebc43f1378150ecc9ed17e0dcf8->leave($__internal_c1da4ed45a72571aceada59ca744961ba71f2ebc43f1378150ecc9ed17e0dcf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8819f8095f648917ed918eecefd891d263d1be43b86c869196c9017daaae7514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8819f8095f648917ed918eecefd891d263d1be43b86c869196c9017daaae7514->enter($__internal_8819f8095f648917ed918eecefd891d263d1be43b86c869196c9017daaae7514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "   <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 9
        echo "   </div>
";
        
        $__internal_8819f8095f648917ed918eecefd891d263d1be43b86c869196c9017daaae7514->leave($__internal_8819f8095f648917ed918eecefd891d263d1be43b86c869196c9017daaae7514_prof);

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
        return array (  55 => 9,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
   </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
