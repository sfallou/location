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
        $__internal_0984616ec8a72d2004f4c45d5b8d7a82b9ac7b198ceb62a28e6f54534348466c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0984616ec8a72d2004f4c45d5b8d7a82b9ac7b198ceb62a28e6f54534348466c->enter($__internal_0984616ec8a72d2004f4c45d5b8d7a82b9ac7b198ceb62a28e6f54534348466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":residence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0984616ec8a72d2004f4c45d5b8d7a82b9ac7b198ceb62a28e6f54534348466c->leave($__internal_0984616ec8a72d2004f4c45d5b8d7a82b9ac7b198ceb62a28e6f54534348466c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_85295ccecb5e4222e632d6adb2603c039cc5cd62d93dc61ab9dac97d9a38006a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85295ccecb5e4222e632d6adb2603c039cc5cd62d93dc61ab9dac97d9a38006a->enter($__internal_85295ccecb5e4222e632d6adb2603c039cc5cd62d93dc61ab9dac97d9a38006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_85295ccecb5e4222e632d6adb2603c039cc5cd62d93dc61ab9dac97d9a38006a->leave($__internal_85295ccecb5e4222e632d6adb2603c039cc5cd62d93dc61ab9dac97d9a38006a_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_45b2514efd8d34ce42c978c486a2e281e403c2d400038d7c657a0a785b4d60a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b2514efd8d34ce42c978c486a2e281e403c2d400038d7c657a0a785b4d60a7->enter($__internal_45b2514efd8d34ce42c978c486a2e281e403c2d400038d7c657a0a785b4d60a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_45b2514efd8d34ce42c978c486a2e281e403c2d400038d7c657a0a785b4d60a7->leave($__internal_45b2514efd8d34ce42c978c486a2e281e403c2d400038d7c657a0a785b4d60a7_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_83f66879f48d94666409232de7d579b9b27538ece78d97d748d616b4e4cbc5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f66879f48d94666409232de7d579b9b27538ece78d97d748d616b4e4cbc5ea->enter($__internal_83f66879f48d94666409232de7d579b9b27538ece78d97d748d616b4e4cbc5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_83f66879f48d94666409232de7d579b9b27538ece78d97d748d616b4e4cbc5ea->leave($__internal_83f66879f48d94666409232de7d579b9b27538ece78d97d748d616b4e4cbc5ea_prof);

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
