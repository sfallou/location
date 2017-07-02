<?php

/* default/liste_residence.html.twig */
class __TwigTemplate_996b68474aa1fcdf5d1fef8cdaa87e4f45763ba48ddfc31c791b39aafd32ac58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/liste_residence.html.twig", 1);
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
        $__internal_6a351b706690403ac60afd22a92b28fb43865bdb39b8353546af1f88cdbf6690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a351b706690403ac60afd22a92b28fb43865bdb39b8353546af1f88cdbf6690->enter($__internal_6a351b706690403ac60afd22a92b28fb43865bdb39b8353546af1f88cdbf6690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a351b706690403ac60afd22a92b28fb43865bdb39b8353546af1f88cdbf6690->leave($__internal_6a351b706690403ac60afd22a92b28fb43865bdb39b8353546af1f88cdbf6690_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_46f0b725f709c73e51f1b03cca46b2ed06bf2258b1b8975d224c15cab258af27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f0b725f709c73e51f1b03cca46b2ed06bf2258b1b8975d224c15cab258af27->enter($__internal_46f0b725f709c73e51f1b03cca46b2ed06bf2258b1b8975d224c15cab258af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Contact Gardien</th>
                  <th>Contact Syndic</th>
                  <!--th>Horaire Gardien</th-->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["residences"]) ? $context["residences"] : $this->getContext($context, "residences")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 22
            echo "                  <tr>
                  <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "contactGardien", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "contactSyndic", array()), "html", null, true);
            echo "</td>
                  <!--td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "horaireGardien", array()), "html", null, true);
            echo "</td-->
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                     <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_residence", array("id" => $this->getAttribute($context["res"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_46f0b725f709c73e51f1b03cca46b2ed06bf2258b1b8975d224c15cab258af27->leave($__internal_46f0b725f709c73e51f1b03cca46b2ed06bf2258b1b8975d224c15cab258af27_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4127fd1223a665889c3c6447129c45af6441767310670ab40412902ca7d26912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4127fd1223a665889c3c6447129c45af6441767310670ab40412902ca7d26912->enter($__internal_4127fd1223a665889c3c6447129c45af6441767310670ab40412902ca7d26912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidences ";
        
        $__internal_4127fd1223a665889c3c6447129c45af6441767310670ab40412902ca7d26912->leave($__internal_4127fd1223a665889c3c6447129c45af6441767310670ab40412902ca7d26912_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_62712fd49235572cd2cb6190b70da064fd9bcbb2fa8b1ab75a5099832a8b6aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62712fd49235572cd2cb6190b70da064fd9bcbb2fa8b1ab75a5099832a8b6aac->enter($__internal_62712fd49235572cd2cb6190b70da064fd9bcbb2fa8b1ab75a5099832a8b6aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des résidences ";
        
        $__internal_62712fd49235572cd2cb6190b70da064fd9bcbb2fa8b1ab75a5099832a8b6aac->leave($__internal_62712fd49235572cd2cb6190b70da064fd9bcbb2fa8b1ab75a5099832a8b6aac_prof);

    }

    public function getTemplateName()
    {
        return "default/liste_residence.html.twig";
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
                  <th>Name</th>
                  <th>Contact Gardien</th>
                  <th>Contact Syndic</th>
                  <!--th>Horaire Gardien</th-->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for res in residences %}
                  <tr>
                  <td> {{res.id}}</td>
                  <td>{{res.name}}</td>
                  <td>{{res.contactGardien}}</td>
                  <td>{{res.contactSyndic}}</td>
                  <!--td>{{res.horaireGardien}}</td-->
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                     <a class=\"btn btn-success\" href=\"{{ path('admin_show_residence', {'id': res.id}) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
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

{% block page_title %} Résidences {% endblock %}
{% block page_subtitle %} Liste des résidences {% endblock %}", "default/liste_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_residence.html.twig");
    }
}
