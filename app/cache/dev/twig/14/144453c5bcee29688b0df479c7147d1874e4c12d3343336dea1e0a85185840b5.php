<?php

/* :typecharge:show.html.twig */
class __TwigTemplate_4ae433e03d1f1c9639a45d2a1cad408e2772d2e6d36d91d2bfb52276416526a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecharge:show.html.twig", 1);
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
        $__internal_c7263ad452c61aaf74adb59c74c2b0936ca4c1334aecffdec3996803bc21df57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7263ad452c61aaf74adb59c74c2b0936ca4c1334aecffdec3996803bc21df57->enter($__internal_c7263ad452c61aaf74adb59c74c2b0936ca4c1334aecffdec3996803bc21df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecharge:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7263ad452c61aaf74adb59c74c2b0936ca4c1334aecffdec3996803bc21df57->leave($__internal_c7263ad452c61aaf74adb59c74c2b0936ca4c1334aecffdec3996803bc21df57_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_97e8466547a5609dc9cc072d4ccc6ebd344452486f6e305ccba915fc1ba58074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e8466547a5609dc9cc072d4ccc6ebd344452486f6e305ccba915fc1ba58074->enter($__internal_97e8466547a5609dc9cc072d4ccc6ebd344452486f6e305ccba915fc1ba58074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_97e8466547a5609dc9cc072d4ccc6ebd344452486f6e305ccba915fc1ba58074->leave($__internal_97e8466547a5609dc9cc072d4ccc6ebd344452486f6e305ccba915fc1ba58074_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dc03454942e9dbe0acf736eb58dc6bfe37751a87a37e13260ae4a7c44921eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc03454942e9dbe0acf736eb58dc6bfe37751a87a37e13260ae4a7c44921eaad->enter($__internal_dc03454942e9dbe0acf736eb58dc6bfe37751a87a37e13260ae4a7c44921eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_dc03454942e9dbe0acf736eb58dc6bfe37751a87a37e13260ae4a7c44921eaad->leave($__internal_dc03454942e9dbe0acf736eb58dc6bfe37751a87a37e13260ae4a7c44921eaad_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b713e636b124c09ba2b4be10ddaae725fd60ab7a75213e30de96ccffef5d563d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b713e636b124c09ba2b4be10ddaae725fd60ab7a75213e30de96ccffef5d563d->enter($__internal_b713e636b124c09ba2b4be10ddaae725fd60ab7a75213e30de96ccffef5d563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_b713e636b124c09ba2b4be10ddaae725fd60ab7a75213e30de96ccffef5d563d->leave($__internal_b713e636b124c09ba2b4be10ddaae725fd60ab7a75213e30de96ccffef5d563d_prof);

    }

    public function getTemplateName()
    {
        return ":typecharge:show.html.twig";
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


", ":typecharge:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/show.html.twig");
    }
}
