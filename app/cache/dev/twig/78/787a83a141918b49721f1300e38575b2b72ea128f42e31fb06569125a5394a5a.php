<?php

/* AvanzuAdminThemeBundle:Default:liste.html.twig */
class __TwigTemplate_4c149df7898bba71cffc79f9874516e79259efcc36d226cb51b978cabe221caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:liste.html.twig", 1);
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
        $__internal_75dee24d9d67a33242ea5d2d2122d2ab1c294fcca47e9fb1acb22f4a06a6eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dee24d9d67a33242ea5d2d2122d2ab1c294fcca47e9fb1acb22f4a06a6eaa9->enter($__internal_75dee24d9d67a33242ea5d2d2122d2ab1c294fcca47e9fb1acb22f4a06a6eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75dee24d9d67a33242ea5d2d2122d2ab1c294fcca47e9fb1acb22f4a06a6eaa9->leave($__internal_75dee24d9d67a33242ea5d2d2122d2ab1c294fcca47e9fb1acb22f4a06a6eaa9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1facecfc2280995f340b4975f5c3c4437fc9eaaedc9bac4669e56bda71b5c34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1facecfc2280995f340b4975f5c3c4437fc9eaaedc9bac4669e56bda71b5c34e->enter($__internal_1facecfc2280995f340b4975f5c3c4437fc9eaaedc9bac4669e56bda71b5c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des locataires</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Téléphone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "                  <tr>
                  <td> 1</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_1facecfc2280995f340b4975f5c3c4437fc9eaaedc9bac4669e56bda71b5c34e->leave($__internal_1facecfc2280995f340b4975f5c3c4437fc9eaaedc9bac4669e56bda71b5c34e_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f42baa811e97c5cb59ed2ad0ecb44ece388c675c916a54c918000714babcb7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42baa811e97c5cb59ed2ad0ecb44ece388c675c916a54c918000714babcb7dd->enter($__internal_f42baa811e97c5cb59ed2ad0ecb44ece388c675c916a54c918000714babcb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Liste ";
        
        $__internal_f42baa811e97c5cb59ed2ad0ecb44ece388c675c916a54c918000714babcb7dd->leave($__internal_f42baa811e97c5cb59ed2ad0ecb44ece388c675c916a54c918000714babcb7dd_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c6a118c8cd8aedfd19752923b1f6f5a17cc0ec54ec12e101ebb320453744a8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a118c8cd8aedfd19752923b1f6f5a17cc0ec54ec12e101ebb320453744a8e6->enter($__internal_c6a118c8cd8aedfd19752923b1f6f5a17cc0ec54ec12e101ebb320453744a8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des items ";
        
        $__internal_c6a118c8cd8aedfd19752923b1f6f5a17cc0ec54ec12e101ebb320453744a8e6->leave($__internal_c6a118c8cd8aedfd19752923b1f6f5a17cc0ec54ec12e101ebb320453744a8e6_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  98 => 45,  83 => 35,  66 => 23,  62 => 22,  42 => 4,  36 => 3,  11 => 1,);
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
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des locataires</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Téléphone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..10 %}
                  <tr>
                  <td> 1</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
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

{% block page_title %} Liste {% endblock %}
{% block page_subtitle %} Liste des items {% endblock %}", "AvanzuAdminThemeBundle:Default:liste.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/liste.html.twig");
    }
}
