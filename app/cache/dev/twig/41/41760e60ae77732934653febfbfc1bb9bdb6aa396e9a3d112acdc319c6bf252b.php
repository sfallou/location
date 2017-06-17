<?php

/* AvanzuAdminThemeBundle:Default:liste.html.twig */
class __TwigTemplate_18a6c2629fac360748bcefc325f4247b38e9cf7cf8bdf499e76750d7f6c3a583 extends Twig_Template
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
        $__internal_c3de374ce10b4849ac3653c25151ff39c66d77f76a6834f7adf59a38562d745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3de374ce10b4849ac3653c25151ff39c66d77f76a6834f7adf59a38562d745e->enter($__internal_c3de374ce10b4849ac3653c25151ff39c66d77f76a6834f7adf59a38562d745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3de374ce10b4849ac3653c25151ff39c66d77f76a6834f7adf59a38562d745e->leave($__internal_c3de374ce10b4849ac3653c25151ff39c66d77f76a6834f7adf59a38562d745e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4bc8540c640da3ebcffe7a0619a192a720278d1c4b1ffdd562047da544b96046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc8540c640da3ebcffe7a0619a192a720278d1c4b1ffdd562047da544b96046->enter($__internal_4bc8540c640da3ebcffe7a0619a192a720278d1c4b1ffdd562047da544b96046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <tr>
                  <td> 1</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-plus fa-lg\"></i> Details</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                <tr>
                  <td> 2</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-plus fa-lg\"></i> Details</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_4bc8540c640da3ebcffe7a0619a192a720278d1c4b1ffdd562047da544b96046->leave($__internal_4bc8540c640da3ebcffe7a0619a192a720278d1c4b1ffdd562047da544b96046_prof);

    }

    // line 54
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_653d1ff20c41c9ee47d2c47a2f9faa412584e6b149e1f6ba0e75843663a277e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d1ff20c41c9ee47d2c47a2f9faa412584e6b149e1f6ba0e75843663a277e6->enter($__internal_653d1ff20c41c9ee47d2c47a2f9faa412584e6b149e1f6ba0e75843663a277e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Liste ";
        
        $__internal_653d1ff20c41c9ee47d2c47a2f9faa412584e6b149e1f6ba0e75843663a277e6->leave($__internal_653d1ff20c41c9ee47d2c47a2f9faa412584e6b149e1f6ba0e75843663a277e6_prof);

    }

    // line 55
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_18d510f2e6efd3ce013d047550e25110db6b2a0af6f497488ef315d9bae8b7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d510f2e6efd3ce013d047550e25110db6b2a0af6f497488ef315d9bae8b7e9->enter($__internal_18d510f2e6efd3ce013d047550e25110db6b2a0af6f497488ef315d9bae8b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des items ";
        
        $__internal_18d510f2e6efd3ce013d047550e25110db6b2a0af6f497488ef315d9bae8b7e9->leave($__internal_18d510f2e6efd3ce013d047550e25110db6b2a0af6f497488ef315d9bae8b7e9_prof);

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
        return array (  109 => 55,  97 => 54,  42 => 4,  36 => 3,  11 => 1,);
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
                <tr>
                  <td> 1</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-plus fa-lg\"></i> Details</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                <tr>
                  <td> 2</td>
                  <td>Ndiaye</td>
                  <td>Serigne Fallou</td>
                  <td>0617765442</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"#\"><i class=\"fa fa-plus fa-lg\"></i> Details</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
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
