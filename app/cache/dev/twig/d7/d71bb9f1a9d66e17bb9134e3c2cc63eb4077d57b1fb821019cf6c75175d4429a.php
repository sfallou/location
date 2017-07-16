<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ea70091369155c9cfd72b94a29b2b826b8849eff667026f75d717d48d5efebfa extends Twig_Template
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
        $__internal_3a23bfb5667347dd4f2cc4805f1a77acb7d24aa916119bffcddbac6d333fd0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a23bfb5667347dd4f2cc4805f1a77acb7d24aa916119bffcddbac6d333fd0d8->enter($__internal_3a23bfb5667347dd4f2cc4805f1a77acb7d24aa916119bffcddbac6d333fd0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a23bfb5667347dd4f2cc4805f1a77acb7d24aa916119bffcddbac6d333fd0d8->leave($__internal_3a23bfb5667347dd4f2cc4805f1a77acb7d24aa916119bffcddbac6d333fd0d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d69d1789d2eda1fd29b0b91129d8be5fe3664264840b6c58eeadeeb1d27582f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69d1789d2eda1fd29b0b91129d8be5fe3664264840b6c58eeadeeb1d27582f9->enter($__internal_d69d1789d2eda1fd29b0b91129d8be5fe3664264840b6c58eeadeeb1d27582f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d69d1789d2eda1fd29b0b91129d8be5fe3664264840b6c58eeadeeb1d27582f9->leave($__internal_d69d1789d2eda1fd29b0b91129d8be5fe3664264840b6c58eeadeeb1d27582f9_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
