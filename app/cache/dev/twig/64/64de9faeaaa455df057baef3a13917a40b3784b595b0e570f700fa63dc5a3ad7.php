<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d1c97c40559f6ba953f7fe8f872774266b95d6e809f04014fb6b9e25da92eee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f75709647008a29b7949a2e193f2d77fd3fb87555ade7e638cc7089c95254ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75709647008a29b7949a2e193f2d77fd3fb87555ade7e638cc7089c95254ce1->enter($__internal_f75709647008a29b7949a2e193f2d77fd3fb87555ade7e638cc7089c95254ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75709647008a29b7949a2e193f2d77fd3fb87555ade7e638cc7089c95254ce1->leave($__internal_f75709647008a29b7949a2e193f2d77fd3fb87555ade7e638cc7089c95254ce1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dbaaa00da1ec2767706a88a22bae2dfcf0deadc0fb47066d26655b978f2e594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbaaa00da1ec2767706a88a22bae2dfcf0deadc0fb47066d26655b978f2e594->enter($__internal_5dbaaa00da1ec2767706a88a22bae2dfcf0deadc0fb47066d26655b978f2e594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5dbaaa00da1ec2767706a88a22bae2dfcf0deadc0fb47066d26655b978f2e594->leave($__internal_5dbaaa00da1ec2767706a88a22bae2dfcf0deadc0fb47066d26655b978f2e594_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
