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
        $__internal_949505b73395a36b31ee0be433d5db600cc862796e16c59149e1351b1d5b4deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949505b73395a36b31ee0be433d5db600cc862796e16c59149e1351b1d5b4deb->enter($__internal_949505b73395a36b31ee0be433d5db600cc862796e16c59149e1351b1d5b4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedocument:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949505b73395a36b31ee0be433d5db600cc862796e16c59149e1351b1d5b4deb->leave($__internal_949505b73395a36b31ee0be433d5db600cc862796e16c59149e1351b1d5b4deb_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_467be38fd7603cfcd6269157d052015006ea66f73033dc97191d900e64630f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467be38fd7603cfcd6269157d052015006ea66f73033dc97191d900e64630f76->enter($__internal_467be38fd7603cfcd6269157d052015006ea66f73033dc97191d900e64630f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_467be38fd7603cfcd6269157d052015006ea66f73033dc97191d900e64630f76->leave($__internal_467be38fd7603cfcd6269157d052015006ea66f73033dc97191d900e64630f76_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0f6317380c84d41defc9f332c1948a17da72eed3fd3418a179347d2731968b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6317380c84d41defc9f332c1948a17da72eed3fd3418a179347d2731968b01->enter($__internal_0f6317380c84d41defc9f332c1948a17da72eed3fd3418a179347d2731968b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_0f6317380c84d41defc9f332c1948a17da72eed3fd3418a179347d2731968b01->leave($__internal_0f6317380c84d41defc9f332c1948a17da72eed3fd3418a179347d2731968b01_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_88c4a4c167bd9a5d062f16d176099340b57e2d9d455b4658b3856c4a55bc7a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c4a4c167bd9a5d062f16d176099340b57e2d9d455b4658b3856c4a55bc7a19->enter($__internal_88c4a4c167bd9a5d062f16d176099340b57e2d9d455b4658b3856c4a55bc7a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_88c4a4c167bd9a5d062f16d176099340b57e2d9d455b4658b3856c4a55bc7a19->leave($__internal_88c4a4c167bd9a5d062f16d176099340b57e2d9d455b4658b3856c4a55bc7a19_prof);

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
