<?php

/* AvanzuAdminThemeBundle:Default:add_residence.html.twig */
class __TwigTemplate_ad43ef95bcddfc479843608545af75d7727e5f00d85f8d644347c13ceca29bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", 1);
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
        $__internal_dc84cd28ded008958f29cbcc392287f981048eabb5a5dc6dfff72838c986cb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc84cd28ded008958f29cbcc392287f981048eabb5a5dc6dfff72838c986cb69->enter($__internal_dc84cd28ded008958f29cbcc392287f981048eabb5a5dc6dfff72838c986cb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc84cd28ded008958f29cbcc392287f981048eabb5a5dc6dfff72838c986cb69->leave($__internal_dc84cd28ded008958f29cbcc392287f981048eabb5a5dc6dfff72838c986cb69_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0d33846d3176802b7507120565ded3517e70081a0fd3c742abb5b52a9f550783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d33846d3176802b7507120565ded3517e70081a0fd3c742abb5b52a9f550783->enter($__internal_0d33846d3176802b7507120565ded3517e70081a0fd3c742abb5b52a9f550783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Add Residence</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_0d33846d3176802b7507120565ded3517e70081a0fd3c742abb5b52a9f550783->leave($__internal_0d33846d3176802b7507120565ded3517e70081a0fd3c742abb5b52a9f550783_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ae04134ccef0fc27d93ff6aba62223d79d7debe74d1ba8e3b9f614ac5b36acd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae04134ccef0fc27d93ff6aba62223d79d7debe74d1ba8e3b9f614ac5b36acd1->enter($__internal_ae04134ccef0fc27d93ff6aba62223d79d7debe74d1ba8e3b9f614ac5b36acd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Formulaire ";
        
        $__internal_ae04134ccef0fc27d93ff6aba62223d79d7debe74d1ba8e3b9f614ac5b36acd1->leave($__internal_ae04134ccef0fc27d93ff6aba62223d79d7debe74d1ba8e3b9f614ac5b36acd1_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_71b992d8c487199dd65cd88a4f48057b66804f4f94282d78161427f01fe923a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b992d8c487199dd65cd88a4f48057b66804f4f94282d78161427f01fe923a9->enter($__internal_71b992d8c487199dd65cd88a4f48057b66804f4f94282d78161427f01fe923a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Résidence ";
        
        $__internal_71b992d8c487199dd65cd88a4f48057b66804f4f94282d78161427f01fe923a9->leave($__internal_71b992d8c487199dd65cd88a4f48057b66804f4f94282d78161427f01fe923a9_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Add Residence</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Formulaire {% endblock %}
{% block page_subtitle %} Résidence {% endblock %}", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_residence.html.twig");
    }
}
