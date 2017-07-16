<?php

/* :default:liste_room.html.twig */
class __TwigTemplate_96ee39a571c52410cb08b47133e32d1aa208b651d5c31ca49c729367e763dea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:liste_room.html.twig", 1);
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
        $__internal_38c272d96b92599f7589c99f2a85beb9fe7cf6755561188303a62f3480d09552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c272d96b92599f7589c99f2a85beb9fe7cf6755561188303a62f3480d09552->enter($__internal_38c272d96b92599f7589c99f2a85beb9fe7cf6755561188303a62f3480d09552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liste_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c272d96b92599f7589c99f2a85beb9fe7cf6755561188303a62f3480d09552->leave($__internal_38c272d96b92599f7589c99f2a85beb9fe7cf6755561188303a62f3480d09552_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c278be8a678641a5cfc266baa72f0675417ad3aa253a9d062269d930e33888ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c278be8a678641a5cfc266baa72f0675417ad3aa253a9d062269d930e33888ac->enter($__internal_c278be8a678641a5cfc266baa72f0675417ad3aa253a9d062269d930e33888ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>id Appart</th>
                  <th>Surface</th>
                  <th>Rent</th>
                  <th>Guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 22
            echo "                  <tr>
                  <td> Room ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "idAppart", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "surface", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "rent", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "guarantee", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_room", array("id" => $this->getAttribute($context["el"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_c278be8a678641a5cfc266baa72f0675417ad3aa253a9d062269d930e33888ac->leave($__internal_c278be8a678641a5cfc266baa72f0675417ad3aa253a9d062269d930e33888ac_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_db8e762eb06c3e391f74ab2e50160739f789e8eba7ec29e96cbab302cd2dc37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8e762eb06c3e391f74ab2e50160739f789e8eba7ec29e96cbab302cd2dc37a->enter($__internal_db8e762eb06c3e391f74ab2e50160739f789e8eba7ec29e96cbab302cd2dc37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Chambres ";
        
        $__internal_db8e762eb06c3e391f74ab2e50160739f789e8eba7ec29e96cbab302cd2dc37a->leave($__internal_db8e762eb06c3e391f74ab2e50160739f789e8eba7ec29e96cbab302cd2dc37a_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ae7c1c7543fb93e87629f45714fd580d1121e1e9c60ab114cae8ed018441c288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7c1c7543fb93e87629f45714fd580d1121e1e9c60ab114cae8ed018441c288->enter($__internal_ae7c1c7543fb93e87629f45714fd580d1121e1e9c60ab114cae8ed018441c288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des chambres ";
        
        $__internal_ae7c1c7543fb93e87629f45714fd580d1121e1e9c60ab114cae8ed018441c288->leave($__internal_ae7c1c7543fb93e87629f45714fd580d1121e1e9c60ab114cae8ed018441c288_prof);

    }

    public function getTemplateName()
    {
        return ":default:liste_room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  116 => 45,  101 => 35,  90 => 30,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  65 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
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
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>id Appart</th>
                  <th>Surface</th>
                  <th>Rent</th>
                  <th>Guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for el in rooms %}
                  <tr>
                  <td> Room {{el.id}}</td>
                  <td>{{el.idAppart}}</td>
                  <td>{{el.surface}}</td>
                  <td>{{el.rent}}</td>
                  <td>{{el.guarantee}}</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"{{ path('admin_show_room', {'id': el.id}) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


{% endblock %}

{% block page_title %} Chambres {% endblock %}
{% block page_subtitle %} Liste des chambres {% endblock %}", ":default:liste_room.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_room.html.twig");
    }
}
