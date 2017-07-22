<?php

/* contact/show.html.twig */
class __TwigTemplate_064a6f549b2efd3e3e4e1c66dd9996c4520a332e93aba4c92fefe73c474df58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "contact/show.html.twig", 1);
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
        $__internal_a921758d44b2615fa007340c6b030bf4de45ede95ad414889d778c75c67636ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a921758d44b2615fa007340c6b030bf4de45ede95ad414889d778c75c67636ab->enter($__internal_a921758d44b2615fa007340c6b030bf4de45ede95ad414889d778c75c67636ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a921758d44b2615fa007340c6b030bf4de45ede95ad414889d778c75c67636ab->leave($__internal_a921758d44b2615fa007340c6b030bf4de45ede95ad414889d778c75c67636ab_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_73e83351d54ccef56312c259fd765948dc6de8577ae61d75e6eca8b9e21bbba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e83351d54ccef56312c259fd765948dc6de8577ae61d75e6eca8b9e21bbba3->enter($__internal_73e83351d54ccef56312c259fd765948dc6de8577ae61d75e6eca8b9e21bbba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>First name :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "firstname", array()), "html", null, true);
        echo "</li>
                                <li><strong>Last name :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastname", array()), "html", null, true);
        echo " </li>
                                <li><strong>Email :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</li>
                                <li><strong>Téléphone :</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "telephone", array()), "html", null, true);
        echo " </li>
                                <li><strong>Genre :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "genre", array()), "html", null, true);
        echo " </li>
                                <li><strong>Type contact : </strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type_contact"]) ? $context["type_contact"] : $this->getContext($context, "type_contact")), "name", array()), "html", null, true);
        echo " </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
";
        
        $__internal_73e83351d54ccef56312c259fd765948dc6de8577ae61d75e6eca8b9e21bbba3->leave($__internal_73e83351d54ccef56312c259fd765948dc6de8577ae61d75e6eca8b9e21bbba3_prof);

    }

    // line 30
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6b8f3b4c667046843dee78bd6ee6eb22825149cfd9160a2bcefc446b2f732d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8f3b4c667046843dee78bd6ee6eb22825149cfd9160a2bcefc446b2f732d5a->enter($__internal_6b8f3b4c667046843dee78bd6ee6eb22825149cfd9160a2bcefc446b2f732d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contact ";
        
        $__internal_6b8f3b4c667046843dee78bd6ee6eb22825149cfd9160a2bcefc446b2f732d5a->leave($__internal_6b8f3b4c667046843dee78bd6ee6eb22825149cfd9160a2bcefc446b2f732d5a_prof);

    }

    // line 31
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5cf7b06191a2714ddd475a6e7f2ebf8075813e1e1b8d32a1d961c4c4aac138da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf7b06191a2714ddd475a6e7f2ebf8075813e1e1b8d32a1d961c4c4aac138da->enter($__internal_5cf7b06191a2714ddd475a6e7f2ebf8075813e1e1b8d32a1d961c4c4aac138da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_5cf7b06191a2714ddd475a6e7f2ebf8075813e1e1b8d32a1d961c4c4aac138da->leave($__internal_5cf7b06191a2714ddd475a6e7f2ebf8075813e1e1b8d32a1d961c4c4aac138da_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  94 => 30,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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
                                <li><strong>ID :</strong> {{ contact.id }}</li>
                                <li><strong>First name :</strong> {{ contact.firstname }}</li>
                                <li><strong>Last name :</strong> {{ contact.lastname }} </li>
                                <li><strong>Email :</strong> {{ contact.email }}</li>
                                <li><strong>Téléphone :</strong> {{ contact.telephone }} </li>
                                <li><strong>Genre :</strong> {{ contact.genre }} </li>
                                <li><strong>Type contact : </strong> {{ type_contact.name }} </li>
                            </ul>
                    </div>
                                 
        </div>
    </div>
            
{% endblock %}

{% block page_title %} Contact {% endblock %}
{% block page_subtitle %} show {% endblock %}

", "contact/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contact/show.html.twig");
    }
}
