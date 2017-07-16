<?php

/* typecharge/show.html.twig */
class __TwigTemplate_261825a3f05d172ccceee91c04beb6d59975d9cb4ab3b581fed0f16751f958f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typecharge/show.html.twig", 1);
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
        $__internal_110d0f479649b890794e3b3dcd9e61b878013e040010306d70314aaf27b51609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110d0f479649b890794e3b3dcd9e61b878013e040010306d70314aaf27b51609->enter($__internal_110d0f479649b890794e3b3dcd9e61b878013e040010306d70314aaf27b51609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecharge/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110d0f479649b890794e3b3dcd9e61b878013e040010306d70314aaf27b51609->leave($__internal_110d0f479649b890794e3b3dcd9e61b878013e040010306d70314aaf27b51609_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4439328dc47ab3de04361dba37375d39144021dab136203fddf9571be41cfcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4439328dc47ab3de04361dba37375d39144021dab136203fddf9571be41cfcb7->enter($__internal_4439328dc47ab3de04361dba37375d39144021dab136203fddf9571be41cfcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeCharge"]) ? $context["typeCharge"] : $this->getContext($context, "typeCharge")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeCharge"]) ? $context["typeCharge"] : $this->getContext($context, "typeCharge")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_4439328dc47ab3de04361dba37375d39144021dab136203fddf9571be41cfcb7->leave($__internal_4439328dc47ab3de04361dba37375d39144021dab136203fddf9571be41cfcb7_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b37181131421a541e33462117aa73a314ec09fb93cdcb8a33657bcadbf5edf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37181131421a541e33462117aa73a314ec09fb93cdcb8a33657bcadbf5edf9c->enter($__internal_b37181131421a541e33462117aa73a314ec09fb93cdcb8a33657bcadbf5edf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_b37181131421a541e33462117aa73a314ec09fb93cdcb8a33657bcadbf5edf9c->leave($__internal_b37181131421a541e33462117aa73a314ec09fb93cdcb8a33657bcadbf5edf9c_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6c395790c3629654ea8656074d6343cad59155574a91802eddd3b2e3213d9208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c395790c3629654ea8656074d6343cad59155574a91802eddd3b2e3213d9208->enter($__internal_6c395790c3629654ea8656074d6343cad59155574a91802eddd3b2e3213d9208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_6c395790c3629654ea8656074d6343cad59155574a91802eddd3b2e3213d9208->leave($__internal_6c395790c3629654ea8656074d6343cad59155574a91802eddd3b2e3213d9208_prof);

    }

    public function getTemplateName()
    {
        return "typecharge/show.html.twig";
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
                                <li><strong>ID :</strong> {{typeCharge.id}}</li>
                                <li><strong>Nom :</strong> {{typeCharge.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Charge {% endblock %}
{% block page_subtitle %} show {% endblock %}


", "typecharge/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/show.html.twig");
    }
}
