<?php

/* :typedocument:show.html.twig */
class __TwigTemplate_7643c1e38337dc3ea2e70458cae297b86138a4012526436caea8cce4e109f632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typedocument:show.html.twig", 1);
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
        $__internal_fca217fae32d89b3e120bb9c71fce5a789ea11a98d0a809bd5120997474f4058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca217fae32d89b3e120bb9c71fce5a789ea11a98d0a809bd5120997474f4058->enter($__internal_fca217fae32d89b3e120bb9c71fce5a789ea11a98d0a809bd5120997474f4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedocument:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca217fae32d89b3e120bb9c71fce5a789ea11a98d0a809bd5120997474f4058->leave($__internal_fca217fae32d89b3e120bb9c71fce5a789ea11a98d0a809bd5120997474f4058_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2e2d9f862db45fe23fcdf56e9ecd9764ba6807d864dd3ad1ccaead68cb4f7c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2d9f862db45fe23fcdf56e9ecd9764ba6807d864dd3ad1ccaead68cb4f7c7e->enter($__internal_2e2d9f862db45fe23fcdf56e9ecd9764ba6807d864dd3ad1ccaead68cb4f7c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeDocument"]) ? $context["typeDocument"] : $this->getContext($context, "typeDocument")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeDocument"]) ? $context["typeDocument"] : $this->getContext($context, "typeDocument")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_2e2d9f862db45fe23fcdf56e9ecd9764ba6807d864dd3ad1ccaead68cb4f7c7e->leave($__internal_2e2d9f862db45fe23fcdf56e9ecd9764ba6807d864dd3ad1ccaead68cb4f7c7e_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ebacf019e418d2f90a92ca446fbd627b244005fc0f8bac53f2de935e3c4bc9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebacf019e418d2f90a92ca446fbd627b244005fc0f8bac53f2de935e3c4bc9ba->enter($__internal_ebacf019e418d2f90a92ca446fbd627b244005fc0f8bac53f2de935e3c4bc9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_ebacf019e418d2f90a92ca446fbd627b244005fc0f8bac53f2de935e3c4bc9ba->leave($__internal_ebacf019e418d2f90a92ca446fbd627b244005fc0f8bac53f2de935e3c4bc9ba_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_44145b13d4c0060822f8c5693e193daacc3ad85bf3732ca6767816565fba3521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44145b13d4c0060822f8c5693e193daacc3ad85bf3732ca6767816565fba3521->enter($__internal_44145b13d4c0060822f8c5693e193daacc3ad85bf3732ca6767816565fba3521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_44145b13d4c0060822f8c5693e193daacc3ad85bf3732ca6767816565fba3521->leave($__internal_44145b13d4c0060822f8c5693e193daacc3ad85bf3732ca6767816565fba3521_prof);

    }

    public function getTemplateName()
    {
        return ":typedocument:show.html.twig";
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
                                <li><strong>ID :</strong> {{ typeDocument.id }}</li>
                                <li><strong>Nom :</strong> {{ typeDocument.name }}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Charge {% endblock %}
{% block page_subtitle %} show {% endblock %}
", ":typedocument:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typedocument/show.html.twig");
    }
}
