<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_377e6ad36a5bf4e121da0ac8f28deaedd6e85733d38716958ab86851604d06d8 extends Twig_Template
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
        $__internal_5ecb689999327ad14782b5650b8264e0eeac7631a4004d238009b85a3e1ea94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecb689999327ad14782b5650b8264e0eeac7631a4004d238009b85a3e1ea94a->enter($__internal_5ecb689999327ad14782b5650b8264e0eeac7631a4004d238009b85a3e1ea94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecb689999327ad14782b5650b8264e0eeac7631a4004d238009b85a3e1ea94a->leave($__internal_5ecb689999327ad14782b5650b8264e0eeac7631a4004d238009b85a3e1ea94a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17f6ac58900543cdf780dfcd428d2cfe1388be28bdd01a3b1c9ddc1539ff79db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f6ac58900543cdf780dfcd428d2cfe1388be28bdd01a3b1c9ddc1539ff79db->enter($__internal_17f6ac58900543cdf780dfcd428d2cfe1388be28bdd01a3b1c9ddc1539ff79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_17f6ac58900543cdf780dfcd428d2cfe1388be28bdd01a3b1c9ddc1539ff79db->leave($__internal_17f6ac58900543cdf780dfcd428d2cfe1388be28bdd01a3b1c9ddc1539ff79db_prof);

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
