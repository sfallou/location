<?php

/* document/show.html.twig */
class __TwigTemplate_9805424c9e5e4af00fe1e2533277bbf53200c129b44b8d6d70e98109aef06655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "document/show.html.twig", 1);
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
        $__internal_e5409e0ca4cd8026d5b1d2108fe1305f119f14867ec1a307ab11ea8310b3b18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5409e0ca4cd8026d5b1d2108fe1305f119f14867ec1a307ab11ea8310b3b18f->enter($__internal_e5409e0ca4cd8026d5b1d2108fe1305f119f14867ec1a307ab11ea8310b3b18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5409e0ca4cd8026d5b1d2108fe1305f119f14867ec1a307ab11ea8310b3b18f->leave($__internal_e5409e0ca4cd8026d5b1d2108fe1305f119f14867ec1a307ab11ea8310b3b18f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e4f6e417c3c45f691f15cffb672e9868446e6b22197fe014ad74ed8aa43dbd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f6e417c3c45f691f15cffb672e9868446e6b22197fe014ad74ed8aa43dbd78->enter($__internal_e4f6e417c3c45f691f15cffb672e9868446e6b22197fe014ad74ed8aa43dbd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                                <li><strong>Id Document :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Libelé :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "name", array()), "html", null, true);
        echo "</li>
                                <li><strong>Type Document :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type_document"]) ? $context["type_document"] : $this->getContext($context, "type_document")), "name", array()), "html", null, true);
        echo " </li>
                                 <li><strong>  <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("documents/" . $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "path", array()))), "html", null, true);
        echo "\">View PDF</a> </strong></li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
";
        
        $__internal_e4f6e417c3c45f691f15cffb672e9868446e6b22197fe014ad74ed8aa43dbd78->leave($__internal_e4f6e417c3c45f691f15cffb672e9868446e6b22197fe014ad74ed8aa43dbd78_prof);

    }

    // line 27
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_55b3b5680bb22644eae64ac2c596ba238bf812ee378ef5b826f99fbaac19d0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b3b5680bb22644eae64ac2c596ba238bf812ee378ef5b826f99fbaac19d0a4->enter($__internal_55b3b5680bb22644eae64ac2c596ba238bf812ee378ef5b826f99fbaac19d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Document ";
        
        $__internal_55b3b5680bb22644eae64ac2c596ba238bf812ee378ef5b826f99fbaac19d0a4->leave($__internal_55b3b5680bb22644eae64ac2c596ba238bf812ee378ef5b826f99fbaac19d0a4_prof);

    }

    // line 28
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f4dd100896337bf6535c5c8c6e677c4ad82ff569ce0bd0db8798f892d8c6a860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4dd100896337bf6535c5c8c6e677c4ad82ff569ce0bd0db8798f892d8c6a860->enter($__internal_f4dd100896337bf6535c5c8c6e677c4ad82ff569ce0bd0db8798f892d8c6a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_f4dd100896337bf6535c5c8c6e677c4ad82ff569ce0bd0db8798f892d8c6a860->leave($__internal_f4dd100896337bf6535c5c8c6e677c4ad82ff569ce0bd0db8798f892d8c6a860_prof);

    }

    public function getTemplateName()
    {
        return "document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  82 => 27,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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
                                <li><strong>Id Document :</strong> {{document.id}}</li>
                                <li><strong>Libelé :</strong> {{document.name}}</li>
                                <li><strong>Type Document :</strong> {{type_document.name}} </li>
                                 <li><strong>  <a href=\"{{ asset('documents/' ~ document.path) }}\">View PDF</a> </strong></li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
{% endblock %}

{% block page_title %} Document {% endblock %}
{% block page_subtitle %} show {% endblock %}




", "document/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/document/show.html.twig");
    }
}
