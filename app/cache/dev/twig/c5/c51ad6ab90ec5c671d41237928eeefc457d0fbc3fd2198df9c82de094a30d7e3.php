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
        $__internal_30d474dc6045473430a51b145245e9d97b45ccd27c694ccbadd0e537ec067ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d474dc6045473430a51b145245e9d97b45ccd27c694ccbadd0e537ec067ca4->enter($__internal_30d474dc6045473430a51b145245e9d97b45ccd27c694ccbadd0e537ec067ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedocument:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d474dc6045473430a51b145245e9d97b45ccd27c694ccbadd0e537ec067ca4->leave($__internal_30d474dc6045473430a51b145245e9d97b45ccd27c694ccbadd0e537ec067ca4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dc64b73e6b23e427fb439113bfb11ee6036e033b297de5decf99ea77445bced6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc64b73e6b23e427fb439113bfb11ee6036e033b297de5decf99ea77445bced6->enter($__internal_dc64b73e6b23e427fb439113bfb11ee6036e033b297de5decf99ea77445bced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_dc64b73e6b23e427fb439113bfb11ee6036e033b297de5decf99ea77445bced6->leave($__internal_dc64b73e6b23e427fb439113bfb11ee6036e033b297de5decf99ea77445bced6_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9d4dbb05466f645b1cf015f4dc308904ea4a1367cac64014de606e8c42b2877f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4dbb05466f645b1cf015f4dc308904ea4a1367cac64014de606e8c42b2877f->enter($__internal_9d4dbb05466f645b1cf015f4dc308904ea4a1367cac64014de606e8c42b2877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_9d4dbb05466f645b1cf015f4dc308904ea4a1367cac64014de606e8c42b2877f->leave($__internal_9d4dbb05466f645b1cf015f4dc308904ea4a1367cac64014de606e8c42b2877f_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ced3518fe165d57d0d59f162be0fcdf9127837d26aa025ebf8b1ed20d3a30052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced3518fe165d57d0d59f162be0fcdf9127837d26aa025ebf8b1ed20d3a30052->enter($__internal_ced3518fe165d57d0d59f162be0fcdf9127837d26aa025ebf8b1ed20d3a30052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_ced3518fe165d57d0d59f162be0fcdf9127837d26aa025ebf8b1ed20d3a30052->leave($__internal_ced3518fe165d57d0d59f162be0fcdf9127837d26aa025ebf8b1ed20d3a30052_prof);

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
