<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43fb879066d0b4de8bf59e4fe10d93efe6b4a2371eb03626e15ad4127043110e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc493681ef3b4e2601bf5be1dd4ac12a832cc011d097e21133849ae153dd51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc493681ef3b4e2601bf5be1dd4ac12a832cc011d097e21133849ae153dd51a->enter($__internal_fcc493681ef3b4e2601bf5be1dd4ac12a832cc011d097e21133849ae153dd51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc493681ef3b4e2601bf5be1dd4ac12a832cc011d097e21133849ae153dd51a->leave($__internal_fcc493681ef3b4e2601bf5be1dd4ac12a832cc011d097e21133849ae153dd51a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_260d0584f3dac346329ac276db911e4daef4fc55b7a8aa1b9bf18c05c6a629dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260d0584f3dac346329ac276db911e4daef4fc55b7a8aa1b9bf18c05c6a629dc->enter($__internal_260d0584f3dac346329ac276db911e4daef4fc55b7a8aa1b9bf18c05c6a629dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_260d0584f3dac346329ac276db911e4daef4fc55b7a8aa1b9bf18c05c6a629dc->leave($__internal_260d0584f3dac346329ac276db911e4daef4fc55b7a8aa1b9bf18c05c6a629dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f93d1ae5e87802b4bfa04967f83ccaafdfaab145a80ab0e4f8fee6f9bd9093f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93d1ae5e87802b4bfa04967f83ccaafdfaab145a80ab0e4f8fee6f9bd9093f2->enter($__internal_f93d1ae5e87802b4bfa04967f83ccaafdfaab145a80ab0e4f8fee6f9bd9093f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f93d1ae5e87802b4bfa04967f83ccaafdfaab145a80ab0e4f8fee6f9bd9093f2->leave($__internal_f93d1ae5e87802b4bfa04967f83ccaafdfaab145a80ab0e4f8fee6f9bd9093f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4aa3a50ab97030d9ce4f4373c8871e10de1d51bc141548217ea8a177446776b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa3a50ab97030d9ce4f4373c8871e10de1d51bc141548217ea8a177446776b5->enter($__internal_4aa3a50ab97030d9ce4f4373c8871e10de1d51bc141548217ea8a177446776b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4aa3a50ab97030d9ce4f4373c8871e10de1d51bc141548217ea8a177446776b5->leave($__internal_4aa3a50ab97030d9ce4f4373c8871e10de1d51bc141548217ea8a177446776b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
