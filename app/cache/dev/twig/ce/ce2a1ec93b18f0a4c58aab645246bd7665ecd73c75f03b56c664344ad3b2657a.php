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
        $__internal_fd2df130a2a758f1c9ed37df77e7e965b2e8b20896550023230320b6b8193586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2df130a2a758f1c9ed37df77e7e965b2e8b20896550023230320b6b8193586->enter($__internal_fd2df130a2a758f1c9ed37df77e7e965b2e8b20896550023230320b6b8193586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":residence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2df130a2a758f1c9ed37df77e7e965b2e8b20896550023230320b6b8193586->leave($__internal_fd2df130a2a758f1c9ed37df77e7e965b2e8b20896550023230320b6b8193586_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2336c225a384fffa9ba06a1c7a3c5754ba18b97bb9713f191143e4103b110596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336c225a384fffa9ba06a1c7a3c5754ba18b97bb9713f191143e4103b110596->enter($__internal_2336c225a384fffa9ba06a1c7a3c5754ba18b97bb9713f191143e4103b110596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_2336c225a384fffa9ba06a1c7a3c5754ba18b97bb9713f191143e4103b110596->leave($__internal_2336c225a384fffa9ba06a1c7a3c5754ba18b97bb9713f191143e4103b110596_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ed13a1e2bb34081e6e37a777ff8a8aa5999cce9cda9329d3b636f541d8c8b7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed13a1e2bb34081e6e37a777ff8a8aa5999cce9cda9329d3b636f541d8c8b7dd->enter($__internal_ed13a1e2bb34081e6e37a777ff8a8aa5999cce9cda9329d3b636f541d8c8b7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_ed13a1e2bb34081e6e37a777ff8a8aa5999cce9cda9329d3b636f541d8c8b7dd->leave($__internal_ed13a1e2bb34081e6e37a777ff8a8aa5999cce9cda9329d3b636f541d8c8b7dd_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_543ca2b7b9560e28e51ce2d6e80c62de78effc24f35e83fbcacabd97b662986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543ca2b7b9560e28e51ce2d6e80c62de78effc24f35e83fbcacabd97b662986f->enter($__internal_543ca2b7b9560e28e51ce2d6e80c62de78effc24f35e83fbcacabd97b662986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_543ca2b7b9560e28e51ce2d6e80c62de78effc24f35e83fbcacabd97b662986f->leave($__internal_543ca2b7b9560e28e51ce2d6e80c62de78effc24f35e83fbcacabd97b662986f_prof);

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
