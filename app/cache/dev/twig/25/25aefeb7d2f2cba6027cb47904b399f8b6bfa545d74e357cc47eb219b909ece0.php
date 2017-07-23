<?php

/* :document:show.html.twig */
class __TwigTemplate_dd82ef80ba433bc5421a001ae8f636d321b6a473aafe30cd9d317f609511e8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":document:show.html.twig", 1);
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
        $__internal_32cd297c3b212bf4d9d0be16a517210e7ee8507d1b4e07341df3a4d68aefa629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cd297c3b212bf4d9d0be16a517210e7ee8507d1b4e07341df3a4d68aefa629->enter($__internal_32cd297c3b212bf4d9d0be16a517210e7ee8507d1b4e07341df3a4d68aefa629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":document:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cd297c3b212bf4d9d0be16a517210e7ee8507d1b4e07341df3a4d68aefa629->leave($__internal_32cd297c3b212bf4d9d0be16a517210e7ee8507d1b4e07341df3a4d68aefa629_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_43e9da2a33e7a94bc2e6b11f0280796f11a19dd5c13eec377a698bbb7c0d52cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e9da2a33e7a94bc2e6b11f0280796f11a19dd5c13eec377a698bbb7c0d52cc->enter($__internal_43e9da2a33e7a94bc2e6b11f0280796f11a19dd5c13eec377a698bbb7c0d52cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_43e9da2a33e7a94bc2e6b11f0280796f11a19dd5c13eec377a698bbb7c0d52cc->leave($__internal_43e9da2a33e7a94bc2e6b11f0280796f11a19dd5c13eec377a698bbb7c0d52cc_prof);

    }

    // line 27
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_52fff457a142585278bf63645b0fbc648ae4b70b538faddd0874a3e92dfae884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fff457a142585278bf63645b0fbc648ae4b70b538faddd0874a3e92dfae884->enter($__internal_52fff457a142585278bf63645b0fbc648ae4b70b538faddd0874a3e92dfae884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Document ";
        
        $__internal_52fff457a142585278bf63645b0fbc648ae4b70b538faddd0874a3e92dfae884->leave($__internal_52fff457a142585278bf63645b0fbc648ae4b70b538faddd0874a3e92dfae884_prof);

    }

    // line 28
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_819dfbeba4ca6ed1fb849349d69518a30706fdf23890c17648c4299eb6fc538e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819dfbeba4ca6ed1fb849349d69518a30706fdf23890c17648c4299eb6fc538e->enter($__internal_819dfbeba4ca6ed1fb849349d69518a30706fdf23890c17648c4299eb6fc538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_819dfbeba4ca6ed1fb849349d69518a30706fdf23890c17648c4299eb6fc538e->leave($__internal_819dfbeba4ca6ed1fb849349d69518a30706fdf23890c17648c4299eb6fc538e_prof);

    }

    public function getTemplateName()
    {
        return ":document:show.html.twig";
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




", ":document:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/document/show.html.twig");
    }
}
