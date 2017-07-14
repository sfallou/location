<?php

/* typefix/show.html.twig */
class __TwigTemplate_5d0ca994284387e950679acd788abf08c36d003dde3cc469f0cae90b4b728431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typefix/show.html.twig", 1);
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
        $__internal_fbdc92f20d4c8d34eafe6a3dbe1c8eaaa651fd644e78e4a0f037c5dbc757eefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdc92f20d4c8d34eafe6a3dbe1c8eaaa651fd644e78e4a0f037c5dbc757eefc->enter($__internal_fbdc92f20d4c8d34eafe6a3dbe1c8eaaa651fd644e78e4a0f037c5dbc757eefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typefix/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbdc92f20d4c8d34eafe6a3dbe1c8eaaa651fd644e78e4a0f037c5dbc757eefc->leave($__internal_fbdc92f20d4c8d34eafe6a3dbe1c8eaaa651fd644e78e4a0f037c5dbc757eefc_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3b88ff94d37593591fd9a38ec82a25b0f78b809b79779fa163836049ad1261cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b88ff94d37593591fd9a38ec82a25b0f78b809b79779fa163836049ad1261cd->enter($__internal_3b88ff94d37593591fd9a38ec82a25b0f78b809b79779fa163836049ad1261cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3b88ff94d37593591fd9a38ec82a25b0f78b809b79779fa163836049ad1261cd->leave($__internal_3b88ff94d37593591fd9a38ec82a25b0f78b809b79779fa163836049ad1261cd_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3605f24377bc89a6fcbf920ef89dc4d87ab5ca5af82fa91391778ea80dfc6cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3605f24377bc89a6fcbf920ef89dc4d87ab5ca5af82fa91391778ea80dfc6cb7->enter($__internal_3605f24377bc89a6fcbf920ef89dc4d87ab5ca5af82fa91391778ea80dfc6cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_3605f24377bc89a6fcbf920ef89dc4d87ab5ca5af82fa91391778ea80dfc6cb7->leave($__internal_3605f24377bc89a6fcbf920ef89dc4d87ab5ca5af82fa91391778ea80dfc6cb7_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_de0a9da37f59556b160edbaf107439ad4700ce55b0be0a08f9958ac2393ddce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0a9da37f59556b160edbaf107439ad4700ce55b0be0a08f9958ac2393ddce8->enter($__internal_de0a9da37f59556b160edbaf107439ad4700ce55b0be0a08f9958ac2393ddce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_de0a9da37f59556b160edbaf107439ad4700ce55b0be0a08f9958ac2393ddce8->leave($__internal_de0a9da37f59556b160edbaf107439ad4700ce55b0be0a08f9958ac2393ddce8_prof);

    }

    public function getTemplateName()
    {
        return "typefix/show.html.twig";
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
", "typefix/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/show.html.twig");
    }
}
