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
        $__internal_1f5cbf5691145e0002af5e7b9d54b0a567836f8a0b58c525c5e213bf4b07d17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5cbf5691145e0002af5e7b9d54b0a567836f8a0b58c525c5e213bf4b07d17f->enter($__internal_1f5cbf5691145e0002af5e7b9d54b0a567836f8a0b58c525c5e213bf4b07d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typefix/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5cbf5691145e0002af5e7b9d54b0a567836f8a0b58c525c5e213bf4b07d17f->leave($__internal_1f5cbf5691145e0002af5e7b9d54b0a567836f8a0b58c525c5e213bf4b07d17f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b8035c72a93c5da49cece76624f88f0c26050d9421a48ae8d90c1666c5407db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8035c72a93c5da49cece76624f88f0c26050d9421a48ae8d90c1666c5407db2->enter($__internal_b8035c72a93c5da49cece76624f88f0c26050d9421a48ae8d90c1666c5407db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b8035c72a93c5da49cece76624f88f0c26050d9421a48ae8d90c1666c5407db2->leave($__internal_b8035c72a93c5da49cece76624f88f0c26050d9421a48ae8d90c1666c5407db2_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_88cf2e3c6b411a23bdc168c76ee5e353f9e7313689c66d93f4eec9a9afa2384f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cf2e3c6b411a23bdc168c76ee5e353f9e7313689c66d93f4eec9a9afa2384f->enter($__internal_88cf2e3c6b411a23bdc168c76ee5e353f9e7313689c66d93f4eec9a9afa2384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_88cf2e3c6b411a23bdc168c76ee5e353f9e7313689c66d93f4eec9a9afa2384f->leave($__internal_88cf2e3c6b411a23bdc168c76ee5e353f9e7313689c66d93f4eec9a9afa2384f_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c09d5bd3f5443268af7a32dec1187eb634b8ee5b6bfba7d0307d28e826fde461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09d5bd3f5443268af7a32dec1187eb634b8ee5b6bfba7d0307d28e826fde461->enter($__internal_c09d5bd3f5443268af7a32dec1187eb634b8ee5b6bfba7d0307d28e826fde461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_c09d5bd3f5443268af7a32dec1187eb634b8ee5b6bfba7d0307d28e826fde461->leave($__internal_c09d5bd3f5443268af7a32dec1187eb634b8ee5b6bfba7d0307d28e826fde461_prof);

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
