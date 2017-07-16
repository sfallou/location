<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_47c1dbf3e850da521a087159d05804a49a8ad69fba83224e07cf7e90a8043e57 extends Twig_Template
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
        $__internal_0ca30c6e50ee9facd7934abaaac5e40dedf53fca77883718867de4cdc2d8a518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca30c6e50ee9facd7934abaaac5e40dedf53fca77883718867de4cdc2d8a518->enter($__internal_0ca30c6e50ee9facd7934abaaac5e40dedf53fca77883718867de4cdc2d8a518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0ca30c6e50ee9facd7934abaaac5e40dedf53fca77883718867de4cdc2d8a518->leave($__internal_0ca30c6e50ee9facd7934abaaac5e40dedf53fca77883718867de4cdc2d8a518_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
