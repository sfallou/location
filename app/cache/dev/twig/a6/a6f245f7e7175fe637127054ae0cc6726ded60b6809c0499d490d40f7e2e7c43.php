<?php

/* :contact:show.html.twig */
class __TwigTemplate_5ce84eb4674ccf82f4527734cf7733fc7b3ba97d9bb6de7785958fe81a0bd578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":contact:show.html.twig", 1);
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
        $__internal_f7fb53115fe7ee773298c162e965b70e0d80a561b6d2944bf5f3f4b1cf72b84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fb53115fe7ee773298c162e965b70e0d80a561b6d2944bf5f3f4b1cf72b84f->enter($__internal_f7fb53115fe7ee773298c162e965b70e0d80a561b6d2944bf5f3f4b1cf72b84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fb53115fe7ee773298c162e965b70e0d80a561b6d2944bf5f3f4b1cf72b84f->leave($__internal_f7fb53115fe7ee773298c162e965b70e0d80a561b6d2944bf5f3f4b1cf72b84f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_72a049bce613a19bd5f01b6c83a4bc55b535ae844b0efa2aa06b90a226fe215c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a049bce613a19bd5f01b6c83a4bc55b535ae844b0efa2aa06b90a226fe215c->enter($__internal_72a049bce613a19bd5f01b6c83a4bc55b535ae844b0efa2aa06b90a226fe215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_72a049bce613a19bd5f01b6c83a4bc55b535ae844b0efa2aa06b90a226fe215c->leave($__internal_72a049bce613a19bd5f01b6c83a4bc55b535ae844b0efa2aa06b90a226fe215c_prof);

    }

    // line 30
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4c804b8799e63a0bc001a62b8ff5ef9ef6f0975479f72ac3ffc9df50811b44d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c804b8799e63a0bc001a62b8ff5ef9ef6f0975479f72ac3ffc9df50811b44d3->enter($__internal_4c804b8799e63a0bc001a62b8ff5ef9ef6f0975479f72ac3ffc9df50811b44d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contact ";
        
        $__internal_4c804b8799e63a0bc001a62b8ff5ef9ef6f0975479f72ac3ffc9df50811b44d3->leave($__internal_4c804b8799e63a0bc001a62b8ff5ef9ef6f0975479f72ac3ffc9df50811b44d3_prof);

    }

    // line 31
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a1122832c1392aca27aaf6155fc7abbdbf8c017ec4c0fb03807e339817dc5214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1122832c1392aca27aaf6155fc7abbdbf8c017ec4c0fb03807e339817dc5214->enter($__internal_a1122832c1392aca27aaf6155fc7abbdbf8c017ec4c0fb03807e339817dc5214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_a1122832c1392aca27aaf6155fc7abbdbf8c017ec4c0fb03807e339817dc5214->leave($__internal_a1122832c1392aca27aaf6155fc7abbdbf8c017ec4c0fb03807e339817dc5214_prof);

    }

    public function getTemplateName()
    {
        return ":contact:show.html.twig";
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

", ":contact:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contact/show.html.twig");
    }
}
