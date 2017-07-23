<?php

/* AvanzuAdminThemeBundle:Default:liste_residence.html.twig */
class __TwigTemplate_06f1daaf588996607fa6bcb7d5cf16d999ce64ec54823f5cf5d0e127fd5c0157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:liste_residence.html.twig", 1);
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
        $__internal_e3d9ba1b44e53945e99cab84a4febc0381ffa8c74ffd259cfbccdff39f905aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d9ba1b44e53945e99cab84a4febc0381ffa8c74ffd259cfbccdff39f905aed->enter($__internal_e3d9ba1b44e53945e99cab84a4febc0381ffa8c74ffd259cfbccdff39f905aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:liste_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d9ba1b44e53945e99cab84a4febc0381ffa8c74ffd259cfbccdff39f905aed->leave($__internal_e3d9ba1b44e53945e99cab84a4febc0381ffa8c74ffd259cfbccdff39f905aed_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b30e55b6b071179cf6f3a5510edd668c69f89ad44872c40a9e915038a792c8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30e55b6b071179cf6f3a5510edd668c69f89ad44872c40a9e915038a792c8d2->enter($__internal_b30e55b6b071179cf6f3a5510edd668c69f89ad44872c40a9e915038a792c8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des résidences</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                  <tr>
                  <td> 1</td>
                  <td>Résidence la Bruyère</td>
                  <td>M.Pierre Gollack</td>
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
        // line 33
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_b30e55b6b071179cf6f3a5510edd668c69f89ad44872c40a9e915038a792c8d2->leave($__internal_b30e55b6b071179cf6f3a5510edd668c69f89ad44872c40a9e915038a792c8d2_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a35666807ca5dff40d69ad0fae6870f1870abe711e4e6aed3c46ed62cd8b4357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35666807ca5dff40d69ad0fae6870f1870abe711e4e6aed3c46ed62cd8b4357->enter($__internal_a35666807ca5dff40d69ad0fae6870f1870abe711e4e6aed3c46ed62cd8b4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Liste ";
        
        $__internal_a35666807ca5dff40d69ad0fae6870f1870abe711e4e6aed3c46ed62cd8b4357->leave($__internal_a35666807ca5dff40d69ad0fae6870f1870abe711e4e6aed3c46ed62cd8b4357_prof);

    }

    // line 44
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0413ebc8e5b5ccb896710a927f0c95c25fb1054dac9d104a3bfc979fc451b296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0413ebc8e5b5ccb896710a927f0c95c25fb1054dac9d104a3bfc979fc451b296->enter($__internal_0413ebc8e5b5ccb896710a927f0c95c25fb1054dac9d104a3bfc979fc451b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des items ";
        
        $__internal_0413ebc8e5b5ccb896710a927f0c95c25fb1054dac9d104a3bfc979fc451b296->leave($__internal_0413ebc8e5b5ccb896710a927f0c95c25fb1054dac9d104a3bfc979fc451b296_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:liste_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  96 => 43,  81 => 33,  65 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
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
              <h3 class=\"box-title\">Liste des résidences</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..5 %}
                  <tr>
                  <td> 1</td>
                  <td>Résidence la Bruyère</td>
                  <td>M.Pierre Gollack</td>
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
{% block page_subtitle %} Liste des items {% endblock %}", "AvanzuAdminThemeBundle:Default:liste_residence.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/liste_residence.html.twig");
    }
}
