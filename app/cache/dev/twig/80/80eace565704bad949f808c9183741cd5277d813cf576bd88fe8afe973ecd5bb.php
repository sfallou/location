<?php

/* residence/show.html.twig */
class __TwigTemplate_099d4d34521b1acbc2123059ae3160b155055b6f149095147eefa4c95942986a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "residence/show.html.twig", 1);
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
        $__internal_6a833c594aa2837e7641e26f7267195a3871520810184b3cafd6e72103f583ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a833c594aa2837e7641e26f7267195a3871520810184b3cafd6e72103f583ac->enter($__internal_6a833c594aa2837e7641e26f7267195a3871520810184b3cafd6e72103f583ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "residence/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a833c594aa2837e7641e26f7267195a3871520810184b3cafd6e72103f583ac->leave($__internal_6a833c594aa2837e7641e26f7267195a3871520810184b3cafd6e72103f583ac_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2d87a9283305e0e2c34b4f99c4cab8419abc22f139faca00f02e1041c0589118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d87a9283305e0e2c34b4f99c4cab8419abc22f139faca00f02e1041c0589118->enter($__internal_2d87a9283305e0e2c34b4f99c4cab8419abc22f139faca00f02e1041c0589118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_2d87a9283305e0e2c34b4f99c4cab8419abc22f139faca00f02e1041c0589118->leave($__internal_2d87a9283305e0e2c34b4f99c4cab8419abc22f139faca00f02e1041c0589118_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c887961cf26a0e0a479bd73e1bcbfc419f9e503fe97d26f215d75df5cd43f31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c887961cf26a0e0a479bd73e1bcbfc419f9e503fe97d26f215d75df5cd43f31f->enter($__internal_c887961cf26a0e0a479bd73e1bcbfc419f9e503fe97d26f215d75df5cd43f31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_c887961cf26a0e0a479bd73e1bcbfc419f9e503fe97d26f215d75df5cd43f31f->leave($__internal_c887961cf26a0e0a479bd73e1bcbfc419f9e503fe97d26f215d75df5cd43f31f_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e5bf5c2f772f103cc2acf94330adeb847faaac0efa9cc9864ae503747cd2c24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bf5c2f772f103cc2acf94330adeb847faaac0efa9cc9864ae503747cd2c24e->enter($__internal_e5bf5c2f772f103cc2acf94330adeb847faaac0efa9cc9864ae503747cd2c24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_e5bf5c2f772f103cc2acf94330adeb847faaac0efa9cc9864ae503747cd2c24e->leave($__internal_e5bf5c2f772f103cc2acf94330adeb847faaac0efa9cc9864ae503747cd2c24e_prof);

    }

    public function getTemplateName()
    {
        return "residence/show.html.twig";
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


", "residence/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/residence/show.html.twig");
    }
}
