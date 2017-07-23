<?php

/* AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig */
class __TwigTemplate_cffc802ff66bf29e8b6486230b898b4fbee9e7876ec5d712cc955ed58dd4a7d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f30ab38c1e0a4985da09ce041f420d7732a3d33ff7cbe24b6eb66c27afcdbf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30ab38c1e0a4985da09ce041f420d7732a3d33ff7cbe24b6eb66c27afcdbf60->enter($__internal_f30ab38c1e0a4985da09ce041f420d7732a3d33ff7cbe24b6eb66c27afcdbf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
        
        $__internal_f30ab38c1e0a4985da09ce041f420d7732a3d33ff7cbe24b6eb66c27afcdbf60->leave($__internal_f30ab38c1e0a4985da09ce041f420d7732a3d33ff7cbe24b6eb66c27afcdbf60_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    {{ macro.avatar(user.avatar, user.username)  }}
    </div>
    <div class=\"pull-left info\">
        <p>{{ user.name }}</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Sidebar/user-panel.html.twig");
    }
}
