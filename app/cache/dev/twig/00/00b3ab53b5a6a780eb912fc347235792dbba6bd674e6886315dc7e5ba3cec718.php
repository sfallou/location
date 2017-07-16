<?php

/* :typefix:show.html.twig */
class __TwigTemplate_3d8d881fac0b57686bed03c0b823236ee8715f1d64ab25f0be52526748786a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typefix:show.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d32d91a0ed70a53ca288903d68187016f985febbc43a992c650c6fd92f9caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d32d91a0ed70a53ca288903d68187016f985febbc43a992c650c6fd92f9caf->enter($__internal_c3d32d91a0ed70a53ca288903d68187016f985febbc43a992c650c6fd92f9caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typefix:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d32d91a0ed70a53ca288903d68187016f985febbc43a992c650c6fd92f9caf->leave($__internal_c3d32d91a0ed70a53ca288903d68187016f985febbc43a992c650c6fd92f9caf_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_500c8bd35cc1700c19d95080a3af935d4d64b420417e941428e2916232b6ea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500c8bd35cc1700c19d95080a3af935d4d64b420417e941428e2916232b6ea3c->enter($__internal_500c8bd35cc1700c19d95080a3af935d4d64b420417e941428e2916232b6ea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeFix"]) ? $context["typeFix"] : $this->getContext($context, "typeFix")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeFix"]) ? $context["typeFix"] : $this->getContext($context, "typeFix")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_500c8bd35cc1700c19d95080a3af935d4d64b420417e941428e2916232b6ea3c->leave($__internal_500c8bd35cc1700c19d95080a3af935d4d64b420417e941428e2916232b6ea3c_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e7e5154f36e8ec01567004e819f281aef0e21ce4aaa4ba000aa8cc1cee85edd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e5154f36e8ec01567004e819f281aef0e21ce4aaa4ba000aa8cc1cee85edd7->enter($__internal_e7e5154f36e8ec01567004e819f281aef0e21ce4aaa4ba000aa8cc1cee85edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_e7e5154f36e8ec01567004e819f281aef0e21ce4aaa4ba000aa8cc1cee85edd7->leave($__internal_e7e5154f36e8ec01567004e819f281aef0e21ce4aaa4ba000aa8cc1cee85edd7_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fb8c86430ea1b135cdb96eb65fef701a95029757a596705da739724fb4b58796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8c86430ea1b135cdb96eb65fef701a95029757a596705da739724fb4b58796->enter($__internal_fb8c86430ea1b135cdb96eb65fef701a95029757a596705da739724fb4b58796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_fb8c86430ea1b135cdb96eb65fef701a95029757a596705da739724fb4b58796->leave($__internal_fb8c86430ea1b135cdb96eb65fef701a95029757a596705da739724fb4b58796_prof);

    }

    public function getTemplateName()
    {
        return ":typefix:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  74 => 26,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> {{typeFix.id}}</li>
                                <li><strong>Nom :</strong> {{typeFix.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Fix {% endblock %}
{% block page_subtitle %} show {% endblock %}
", ":typefix:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/show.html.twig");
    }
}
