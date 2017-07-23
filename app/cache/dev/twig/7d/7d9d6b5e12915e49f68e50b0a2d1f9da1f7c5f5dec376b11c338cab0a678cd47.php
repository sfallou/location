<?php

/* meuble/show.html.twig */
class __TwigTemplate_a673119edfc21d9f6cbf6efd8a08601c508d9a84a9a99ccfbb356b21a0c0a0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "meuble/show.html.twig", 1);
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
        $__internal_9d64793e5a7e0745c1bf4d51a865eeff0226d5dbc827a1265d1c828c9aace5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d64793e5a7e0745c1bf4d51a865eeff0226d5dbc827a1265d1c828c9aace5e9->enter($__internal_9d64793e5a7e0745c1bf4d51a865eeff0226d5dbc827a1265d1c828c9aace5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "meuble/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d64793e5a7e0745c1bf4d51a865eeff0226d5dbc827a1265d1c828c9aace5e9->leave($__internal_9d64793e5a7e0745c1bf4d51a865eeff0226d5dbc827a1265d1c828c9aace5e9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_050f866101951cd0e3670e0c7789ce865319bb3cf71bcbce248c335f09795ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050f866101951cd0e3670e0c7789ce865319bb3cf71bcbce248c335f09795ad5->enter($__internal_050f866101951cd0e3670e0c7789ce865319bb3cf71bcbce248c335f09795ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                                <li><strong>ID meuble :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meuble"]) ? $context["meuble"] : $this->getContext($context, "meuble")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Wording :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meuble"]) ? $context["meuble"] : $this->getContext($context, "meuble")), "name", array()), "html", null, true);
        echo "</li>
                                <li><strong>Type Meuble :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type_meuble"]) ? $context["type_meuble"] : $this->getContext($context, "type_meuble")), "name", array()), "html", null, true);
        echo " </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
";
        
        $__internal_050f866101951cd0e3670e0c7789ce865319bb3cf71bcbce248c335f09795ad5->leave($__internal_050f866101951cd0e3670e0c7789ce865319bb3cf71bcbce248c335f09795ad5_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b1c14c23679801f774436586e9e4f0c1b115dca8dac691813520d5fe9c6123dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c14c23679801f774436586e9e4f0c1b115dca8dac691813520d5fe9c6123dc->enter($__internal_b1c14c23679801f774436586e9e4f0c1b115dca8dac691813520d5fe9c6123dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_b1c14c23679801f774436586e9e4f0c1b115dca8dac691813520d5fe9c6123dc->leave($__internal_b1c14c23679801f774436586e9e4f0c1b115dca8dac691813520d5fe9c6123dc_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a876100736c5d848ead1a43260884e3167cbaa6b7d702b5bf97028f54b679258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a876100736c5d848ead1a43260884e3167cbaa6b7d702b5bf97028f54b679258->enter($__internal_a876100736c5d848ead1a43260884e3167cbaa6b7d702b5bf97028f54b679258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_a876100736c5d848ead1a43260884e3167cbaa6b7d702b5bf97028f54b679258->leave($__internal_a876100736c5d848ead1a43260884e3167cbaa6b7d702b5bf97028f54b679258_prof);

    }

    public function getTemplateName()
    {
        return "meuble/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  78 => 26,  63 => 17,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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
                                <li><strong>ID meuble :</strong> {{meuble.id}}</li>
                                <li><strong>Wording :</strong> {{meuble.name}}</li>
                                <li><strong>Type Meuble :</strong> {{type_meuble.name}} </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
{% endblock %}

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} show {% endblock %}



", "meuble/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/show.html.twig");
    }
}
