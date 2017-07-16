<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc247bcfd02f7dbd95de823e06ba716c66d549391ee28c824016ff450b4e375e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_69964dad704b0ac958e9555d23685e3e67a02d24eefdb35d08f5b65fb455f19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69964dad704b0ac958e9555d23685e3e67a02d24eefdb35d08f5b65fb455f19a->enter($__internal_69964dad704b0ac958e9555d23685e3e67a02d24eefdb35d08f5b65fb455f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69964dad704b0ac958e9555d23685e3e67a02d24eefdb35d08f5b65fb455f19a->leave($__internal_69964dad704b0ac958e9555d23685e3e67a02d24eefdb35d08f5b65fb455f19a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4243598ca74903eb0ffaa1e387eb42fe41b4f068922c8a63a851eaddfb977b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4243598ca74903eb0ffaa1e387eb42fe41b4f068922c8a63a851eaddfb977b35->enter($__internal_4243598ca74903eb0ffaa1e387eb42fe41b4f068922c8a63a851eaddfb977b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4243598ca74903eb0ffaa1e387eb42fe41b4f068922c8a63a851eaddfb977b35->leave($__internal_4243598ca74903eb0ffaa1e387eb42fe41b4f068922c8a63a851eaddfb977b35_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
