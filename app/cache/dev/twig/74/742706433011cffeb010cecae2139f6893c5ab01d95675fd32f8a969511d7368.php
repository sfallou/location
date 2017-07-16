<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7dbcc72ed0ceb32d1cde6f6109ab8c792ee246cc133833a133cae1ecc1081116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_46e0a89c66e9b28efe5f0bf84e00199b76893fe42a892a85654bdc313cd1e55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e0a89c66e9b28efe5f0bf84e00199b76893fe42a892a85654bdc313cd1e55f->enter($__internal_46e0a89c66e9b28efe5f0bf84e00199b76893fe42a892a85654bdc313cd1e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e0a89c66e9b28efe5f0bf84e00199b76893fe42a892a85654bdc313cd1e55f->leave($__internal_46e0a89c66e9b28efe5f0bf84e00199b76893fe42a892a85654bdc313cd1e55f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9b7bbc6a86ca07beb94ade88f4734245ff0ac884c84cc09fa8a8425606543b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b7bbc6a86ca07beb94ade88f4734245ff0ac884c84cc09fa8a8425606543b6->enter($__internal_c9b7bbc6a86ca07beb94ade88f4734245ff0ac884c84cc09fa8a8425606543b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c9b7bbc6a86ca07beb94ade88f4734245ff0ac884c84cc09fa8a8425606543b6->leave($__internal_c9b7bbc6a86ca07beb94ade88f4734245ff0ac884c84cc09fa8a8425606543b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
