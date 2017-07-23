<?php

/* :typecontact:show.html.twig */
class __TwigTemplate_47d3d9412e5e973a389afc4c1d40d0e3609f1f656accfa0a41a0f0282fd24bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecontact:show.html.twig", 1);
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
        $__internal_7bb50d27c1e9b52237e40c39ce0223512216fcbb96fa13be427d856ca91b5186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb50d27c1e9b52237e40c39ce0223512216fcbb96fa13be427d856ca91b5186->enter($__internal_7bb50d27c1e9b52237e40c39ce0223512216fcbb96fa13be427d856ca91b5186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecontact:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb50d27c1e9b52237e40c39ce0223512216fcbb96fa13be427d856ca91b5186->leave($__internal_7bb50d27c1e9b52237e40c39ce0223512216fcbb96fa13be427d856ca91b5186_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_129a3511860331cee097d5a428a6a6b72f427fb13b00dd9351572007e26d145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129a3511860331cee097d5a428a6a6b72f427fb13b00dd9351572007e26d145e->enter($__internal_129a3511860331cee097d5a428a6a6b72f427fb13b00dd9351572007e26d145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_129a3511860331cee097d5a428a6a6b72f427fb13b00dd9351572007e26d145e->leave($__internal_129a3511860331cee097d5a428a6a6b72f427fb13b00dd9351572007e26d145e_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0239815d70d12ebe6b2de45dbea2cec3d6150e739b43d0b053a0bf362d811e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0239815d70d12ebe6b2de45dbea2cec3d6150e739b43d0b053a0bf362d811e8f->enter($__internal_0239815d70d12ebe6b2de45dbea2cec3d6150e739b43d0b053a0bf362d811e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Contact";
        
        $__internal_0239815d70d12ebe6b2de45dbea2cec3d6150e739b43d0b053a0bf362d811e8f->leave($__internal_0239815d70d12ebe6b2de45dbea2cec3d6150e739b43d0b053a0bf362d811e8f_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ff4d62f889f59b1dc21f809545eada2592bc650a5f1400fe3c15029c1c681105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4d62f889f59b1dc21f809545eada2592bc650a5f1400fe3c15029c1c681105->enter($__internal_ff4d62f889f59b1dc21f809545eada2592bc650a5f1400fe3c15029c1c681105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_ff4d62f889f59b1dc21f809545eada2592bc650a5f1400fe3c15029c1c681105->leave($__internal_ff4d62f889f59b1dc21f809545eada2592bc650a5f1400fe3c15029c1c681105_prof);

    }

    public function getTemplateName()
    {
        return ":typecontact:show.html.twig";
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
", ":typecontact:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecontact/show.html.twig");
    }
}
