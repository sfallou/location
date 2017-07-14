<?php

/* typemeuble/show.html.twig */
class __TwigTemplate_a9dbe4859bede73301d41f0886c2f478452806a379c68909221cb96df16633ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typemeuble/show.html.twig", 1);
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
        $__internal_6f870d5d4428f14b85706637d3842fa1d5531b2cc39934dc5e0a6640521de72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f870d5d4428f14b85706637d3842fa1d5531b2cc39934dc5e0a6640521de72d->enter($__internal_6f870d5d4428f14b85706637d3842fa1d5531b2cc39934dc5e0a6640521de72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typemeuble/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f870d5d4428f14b85706637d3842fa1d5531b2cc39934dc5e0a6640521de72d->leave($__internal_6f870d5d4428f14b85706637d3842fa1d5531b2cc39934dc5e0a6640521de72d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f1bce8aa3ff947e965b5d260784495a70570a19e1c98962f936dbfe5147a9bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bce8aa3ff947e965b5d260784495a70570a19e1c98962f936dbfe5147a9bdb->enter($__internal_f1bce8aa3ff947e965b5d260784495a70570a19e1c98962f936dbfe5147a9bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_f1bce8aa3ff947e965b5d260784495a70570a19e1c98962f936dbfe5147a9bdb->leave($__internal_f1bce8aa3ff947e965b5d260784495a70570a19e1c98962f936dbfe5147a9bdb_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b030a6c5dc8e22c3ff8916704ac64a2d16b9897da1cbc64659a934d72c7ef3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b030a6c5dc8e22c3ff8916704ac64a2d16b9897da1cbc64659a934d72c7ef3ca->enter($__internal_b030a6c5dc8e22c3ff8916704ac64a2d16b9897da1cbc64659a934d72c7ef3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Meuble ";
        
        $__internal_b030a6c5dc8e22c3ff8916704ac64a2d16b9897da1cbc64659a934d72c7ef3ca->leave($__internal_b030a6c5dc8e22c3ff8916704ac64a2d16b9897da1cbc64659a934d72c7ef3ca_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4105fc30970eec870891f098dfd278f9440ba9703f047da145afe5118c781da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4105fc30970eec870891f098dfd278f9440ba9703f047da145afe5118c781da5->enter($__internal_4105fc30970eec870891f098dfd278f9440ba9703f047da145afe5118c781da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_4105fc30970eec870891f098dfd278f9440ba9703f047da145afe5118c781da5->leave($__internal_4105fc30970eec870891f098dfd278f9440ba9703f047da145afe5118c781da5_prof);

    }

    public function getTemplateName()
    {
        return "typemeuble/show.html.twig";
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
                                <li><strong>ID :</strong> {{typemeuble.id}}</li>
                                <li><strong>Nom :</strong> {{typemeuble.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Meuble {% endblock %}
{% block page_subtitle %} show {% endblock %}", "typemeuble/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/show.html.twig");
    }
}
