<?php

/* :default:liste_appart.html.twig */
class __TwigTemplate_b8a38a0d4d0fc63b55183e5a4f48953176865e59c884d9fc70c45be3863a60c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:liste_appart.html.twig", 1);
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
        $__internal_51bca77e9a925164392c31d9ce2f1c104497c1ae602cfe2e0a06e381e5d0e11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bca77e9a925164392c31d9ce2f1c104497c1ae602cfe2e0a06e381e5d0e11b->enter($__internal_51bca77e9a925164392c31d9ce2f1c104497c1ae602cfe2e0a06e381e5d0e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liste_appart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51bca77e9a925164392c31d9ce2f1c104497c1ae602cfe2e0a06e381e5d0e11b->leave($__internal_51bca77e9a925164392c31d9ce2f1c104497c1ae602cfe2e0a06e381e5d0e11b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dc713a0ebbfd0fd7d6e3d8ceb80e4970f2a028da06545a91b250c014138d37bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc713a0ebbfd0fd7d6e3d8ceb80e4970f2a028da06545a91b250c014138d37bd->enter($__internal_dc713a0ebbfd0fd7d6e3d8ceb80e4970f2a028da06545a91b250c014138d37bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Adresse</th>
                  <th>Réferent</th>
                  <th>Code Wifi</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apparts"]) ? $context["apparts"] : $this->getContext($context, "apparts")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 22
            echo "                  <tr>
                  <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "adresse", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "contactAppart", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "wifiCode", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "phone", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_appart", array("id" => $this->getAttribute($context["el"], "id", array()))), "html", null, true);
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
        
        $__internal_dc713a0ebbfd0fd7d6e3d8ceb80e4970f2a028da06545a91b250c014138d37bd->leave($__internal_dc713a0ebbfd0fd7d6e3d8ceb80e4970f2a028da06545a91b250c014138d37bd_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_49b960694736d752e6f592dbddcece55e9a334e8fdf2cacfa6b3cfedd8b6ba4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b960694736d752e6f592dbddcece55e9a334e8fdf2cacfa6b3cfedd8b6ba4d->enter($__internal_49b960694736d752e6f592dbddcece55e9a334e8fdf2cacfa6b3cfedd8b6ba4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartements ";
        
        $__internal_49b960694736d752e6f592dbddcece55e9a334e8fdf2cacfa6b3cfedd8b6ba4d->leave($__internal_49b960694736d752e6f592dbddcece55e9a334e8fdf2cacfa6b3cfedd8b6ba4d_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d69224962845d6d000ed83afc73d31939c5e5fa9fa74cfaa6f43edb5a53cb629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69224962845d6d000ed83afc73d31939c5e5fa9fa74cfaa6f43edb5a53cb629->enter($__internal_d69224962845d6d000ed83afc73d31939c5e5fa9fa74cfaa6f43edb5a53cb629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des appartements ";
        
        $__internal_d69224962845d6d000ed83afc73d31939c5e5fa9fa74cfaa6f43edb5a53cb629->leave($__internal_d69224962845d6d000ed83afc73d31939c5e5fa9fa74cfaa6f43edb5a53cb629_prof);

    }

    public function getTemplateName()
    {
        return ":default:liste_appart.html.twig";
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
                  <th>Adresse</th>
                  <th>Réferent</th>
                  <th>Code Wifi</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for el in apparts %}
                  <tr>
                  <td> {{el.id}}</td>
                  <td>{{el.adresse}}</td>
                  <td>{{el.contactAppart}}</td>
                  <td>{{el.wifiCode}}</td>
                  <td>{{el.phone}}</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"{{ path('admin_show_appart', {'id': el.id}) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
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

{% block page_title %} Appartements {% endblock %}
{% block page_subtitle %} Liste des appartements {% endblock %}", ":default:liste_appart.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_appart.html.twig");
    }
}
