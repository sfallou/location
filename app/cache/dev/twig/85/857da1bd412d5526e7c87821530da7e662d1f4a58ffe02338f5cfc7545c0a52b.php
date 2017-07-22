<?php

/* typecontact/show.html.twig */
class __TwigTemplate_23594c4f346054f99b16d4a2733ab29eefd6b38abc18003f25e39bdff4d2e4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typecontact/show.html.twig", 1);
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
        $__internal_de96ef2445d5e73095d4d7d58e665dce3a0a79b08c61f3784978bd85302edd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de96ef2445d5e73095d4d7d58e665dce3a0a79b08c61f3784978bd85302edd92->enter($__internal_de96ef2445d5e73095d4d7d58e665dce3a0a79b08c61f3784978bd85302edd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecontact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de96ef2445d5e73095d4d7d58e665dce3a0a79b08c61f3784978bd85302edd92->leave($__internal_de96ef2445d5e73095d4d7d58e665dce3a0a79b08c61f3784978bd85302edd92_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b236090d9c4da85c371e07551fdf4e364e012f3eb311a278f25deec2bfc857fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b236090d9c4da85c371e07551fdf4e364e012f3eb311a278f25deec2bfc857fa->enter($__internal_b236090d9c4da85c371e07551fdf4e364e012f3eb311a278f25deec2bfc857fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeContact"]) ? $context["typeContact"] : $this->getContext($context, "typeContact")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Wording :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeContact"]) ? $context["typeContact"] : $this->getContext($context, "typeContact")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_b236090d9c4da85c371e07551fdf4e364e012f3eb311a278f25deec2bfc857fa->leave($__internal_b236090d9c4da85c371e07551fdf4e364e012f3eb311a278f25deec2bfc857fa_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ef5a73a4ab80457a3d2818756006415dcab6185ca0083204a7c3c990bc6eb6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5a73a4ab80457a3d2818756006415dcab6185ca0083204a7c3c990bc6eb6da->enter($__internal_ef5a73a4ab80457a3d2818756006415dcab6185ca0083204a7c3c990bc6eb6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Contact";
        
        $__internal_ef5a73a4ab80457a3d2818756006415dcab6185ca0083204a7c3c990bc6eb6da->leave($__internal_ef5a73a4ab80457a3d2818756006415dcab6185ca0083204a7c3c990bc6eb6da_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_94c3c0989423ff97dcd3f2ddf1d19bb4c2de98d3d0afe1aa36c08a85c7da1005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c3c0989423ff97dcd3f2ddf1d19bb4c2de98d3d0afe1aa36c08a85c7da1005->enter($__internal_94c3c0989423ff97dcd3f2ddf1d19bb4c2de98d3d0afe1aa36c08a85c7da1005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_94c3c0989423ff97dcd3f2ddf1d19bb4c2de98d3d0afe1aa36c08a85c7da1005->leave($__internal_94c3c0989423ff97dcd3f2ddf1d19bb4c2de98d3d0afe1aa36c08a85c7da1005_prof);

    }

    public function getTemplateName()
    {
        return "typecontact/show.html.twig";
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
                                <li><strong>ID :</strong> {{ typeContact.id }}</li>
                                <li><strong>Wording :</strong> {{ typeContact.name }}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Contact{% endblock %}
{% block page_subtitle %} show {% endblock %}
", "typecontact/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecontact/show.html.twig");
    }
}
