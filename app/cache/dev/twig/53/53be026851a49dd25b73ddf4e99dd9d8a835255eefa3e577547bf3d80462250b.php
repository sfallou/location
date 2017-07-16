<?php

/* :default:liste_residence.html.twig */
class __TwigTemplate_321cd40905e04f8f48772f00e50fdb8a491d106d6bb3f5ca1e9911862a6897fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:liste_residence.html.twig", 1);
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
        $__internal_78c5f792e5abec3b0aa48528117a3b8223cac490fe172874dca217f0ceb279c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c5f792e5abec3b0aa48528117a3b8223cac490fe172874dca217f0ceb279c9->enter($__internal_78c5f792e5abec3b0aa48528117a3b8223cac490fe172874dca217f0ceb279c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liste_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c5f792e5abec3b0aa48528117a3b8223cac490fe172874dca217f0ceb279c9->leave($__internal_78c5f792e5abec3b0aa48528117a3b8223cac490fe172874dca217f0ceb279c9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cccaa2f84cf04fac0a8e185b07512eda1fc11469eff580b03a9dffe9d287a7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccaa2f84cf04fac0a8e185b07512eda1fc11469eff580b03a9dffe9d287a7e4->enter($__internal_cccaa2f84cf04fac0a8e185b07512eda1fc11469eff580b03a9dffe9d287a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_cccaa2f84cf04fac0a8e185b07512eda1fc11469eff580b03a9dffe9d287a7e4->leave($__internal_cccaa2f84cf04fac0a8e185b07512eda1fc11469eff580b03a9dffe9d287a7e4_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9e43c1144696c65097e16096976a09877e6f875c1ac850f8ee3ae8a857b99122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e43c1144696c65097e16096976a09877e6f875c1ac850f8ee3ae8a857b99122->enter($__internal_9e43c1144696c65097e16096976a09877e6f875c1ac850f8ee3ae8a857b99122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidences ";
        
        $__internal_9e43c1144696c65097e16096976a09877e6f875c1ac850f8ee3ae8a857b99122->leave($__internal_9e43c1144696c65097e16096976a09877e6f875c1ac850f8ee3ae8a857b99122_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_479056430a2cfda73abf3835eb55a3b76963a3916b63db37ae3754a52bde53cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479056430a2cfda73abf3835eb55a3b76963a3916b63db37ae3754a52bde53cf->enter($__internal_479056430a2cfda73abf3835eb55a3b76963a3916b63db37ae3754a52bde53cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des résidences ";
        
        $__internal_479056430a2cfda73abf3835eb55a3b76963a3916b63db37ae3754a52bde53cf->leave($__internal_479056430a2cfda73abf3835eb55a3b76963a3916b63db37ae3754a52bde53cf_prof);

    }

    public function getTemplateName()
    {
        return ":default:liste_residence.html.twig";
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
{% block page_subtitle %} Liste des résidences {% endblock %}", ":default:liste_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_residence.html.twig");
    }
}
