<?php

/* :residence:show.html.twig */
class __TwigTemplate_f8c68207c869009a67f19d757467732a42ba2974d7b2c6f89426c72fdc2fa683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":residence:show.html.twig", 1);
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
        $__internal_f67b1a24194954a1fac7acfb6d0fda27c8d26c4d426d21fa37936f20248ab8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67b1a24194954a1fac7acfb6d0fda27c8d26c4d426d21fa37936f20248ab8e2->enter($__internal_f67b1a24194954a1fac7acfb6d0fda27c8d26c4d426d21fa37936f20248ab8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":residence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67b1a24194954a1fac7acfb6d0fda27c8d26c4d426d21fa37936f20248ab8e2->leave($__internal_f67b1a24194954a1fac7acfb6d0fda27c8d26c4d426d21fa37936f20248ab8e2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f8a2dfc77470a1cf00cd1074ed9dee1b74e47fbabea677b0e3ccd814face499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a2dfc77470a1cf00cd1074ed9dee1b74e47fbabea677b0e3ccd814face499f->enter($__internal_f8a2dfc77470a1cf00cd1074ed9dee1b74e47fbabea677b0e3ccd814face499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "name", array()), "html", null, true);
        echo "</li>
                                <li><strong>Contact Gardien :</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactgardien", array()), "html", null, true);
        echo " </li>
                                <li><strong>Horaire Gardien :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "horairegardien", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                        <ul class=\"list-unstyled\">
                            <li><strong>Contact Syndic :</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactsyndic", array()), "html", null, true);
        echo "</li>
                                <li><strong>Appartements :</strong>
                                 ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apparts"]) ? $context["apparts"] : $this->getContext($context, "apparts")));
        foreach ($context['_seq'] as $context["_key"] => $context["appart"]) {
            // line 26
            echo "                                  ";
            if ($this->getAttribute($context["appart"], "id", array(), "any", true, true)) {
                // line 27
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute($context["appart"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["appart"], "adresse", array()), "html", null, true);
                echo "</a> <br>
                                     ";
            }
            // line 29
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                                </li> 
                          </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_f8a2dfc77470a1cf00cd1074ed9dee1b74e47fbabea677b0e3ccd814face499f->leave($__internal_f8a2dfc77470a1cf00cd1074ed9dee1b74e47fbabea677b0e3ccd814face499f_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7e89946051a7a88a56d2aa38029b454427baf924e28bff7f6666a2756dda7ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e89946051a7a88a56d2aa38029b454427baf924e28bff7f6666a2756dda7ec6->enter($__internal_7e89946051a7a88a56d2aa38029b454427baf924e28bff7f6666a2756dda7ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_7e89946051a7a88a56d2aa38029b454427baf924e28bff7f6666a2756dda7ec6->leave($__internal_7e89946051a7a88a56d2aa38029b454427baf924e28bff7f6666a2756dda7ec6_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_57fd8513f48e60d2d8f1ae638975697d9a05f283d1fbdad12d2ef1e5491ef49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fd8513f48e60d2d8f1ae638975697d9a05f283d1fbdad12d2ef1e5491ef49a->enter($__internal_57fd8513f48e60d2d8f1ae638975697d9a05f283d1fbdad12d2ef1e5491ef49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_57fd8513f48e60d2d8f1ae638975697d9a05f283d1fbdad12d2ef1e5491ef49a->leave($__internal_57fd8513f48e60d2d8f1ae638975697d9a05f283d1fbdad12d2ef1e5491ef49a_prof);

    }

    public function getTemplateName()
    {
        return ":residence:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  115 => 39,  101 => 30,  95 => 29,  87 => 27,  84 => 26,  80 => 25,  75 => 23,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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
                                <li><strong>ID :</strong> {{residence.id}}</li>
                                <li><strong>Nom :</strong> {{residence.name}}</li>
                                <li><strong>Contact Gardien :</strong> {{residence.contactgardien}} </li>
                                <li><strong>Horaire Gardien :</strong> {{residence.horairegardien}}</li>
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                        <ul class=\"list-unstyled\">
                            <li><strong>Contact Syndic :</strong> {{residence.contactsyndic}}</li>
                                <li><strong>Appartements :</strong>
                                 {% for appart in apparts%}
                                  {% if appart.id is defined %}
                                     <a href=\"{{ path('appartement_show', { 'id': appart.id }) }}\">{{appart.adresse}}</a> <br>
                                     {% endif%}
                                  {% endfor %}
                                </li> 
                          </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}

{% block page_title %} Résidence {% endblock %}
{% block page_subtitle %} show {% endblock %}


", ":residence:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/residence/show.html.twig");
    }
}
