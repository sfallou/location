<?php

/* AvanzuAdminThemeBundle:Default:liste_residence.html.twig */
class __TwigTemplate_57422eb8f72972e60fd7c7b9909d9d31605c2799f7d7f29f4727cd7afb960ef9 extends Twig_Template
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
        $__internal_fd25dc8fd98264c39e21277a14d6969a2d77f21d14c1215ef55b8823284729df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd25dc8fd98264c39e21277a14d6969a2d77f21d14c1215ef55b8823284729df->enter($__internal_fd25dc8fd98264c39e21277a14d6969a2d77f21d14c1215ef55b8823284729df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:liste_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd25dc8fd98264c39e21277a14d6969a2d77f21d14c1215ef55b8823284729df->leave($__internal_fd25dc8fd98264c39e21277a14d6969a2d77f21d14c1215ef55b8823284729df_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_241052f13ce764fe27dd2306bc7c10b371501d6b7920888de0a75904c9b8dcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241052f13ce764fe27dd2306bc7c10b371501d6b7920888de0a75904c9b8dcd4->enter($__internal_241052f13ce764fe27dd2306bc7c10b371501d6b7920888de0a75904c9b8dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_241052f13ce764fe27dd2306bc7c10b371501d6b7920888de0a75904c9b8dcd4->leave($__internal_241052f13ce764fe27dd2306bc7c10b371501d6b7920888de0a75904c9b8dcd4_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cbab50824441637b3b666d51d17116483ffe2f51b1d100e3cf2215a80cdc9261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbab50824441637b3b666d51d17116483ffe2f51b1d100e3cf2215a80cdc9261->enter($__internal_cbab50824441637b3b666d51d17116483ffe2f51b1d100e3cf2215a80cdc9261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Liste ";
        
        $__internal_cbab50824441637b3b666d51d17116483ffe2f51b1d100e3cf2215a80cdc9261->leave($__internal_cbab50824441637b3b666d51d17116483ffe2f51b1d100e3cf2215a80cdc9261_prof);

    }

    // line 44
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bcfafc7769bf331ede5a8ed0cc13c9b5b21b997a618f395c12361d323f5c9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfafc7769bf331ede5a8ed0cc13c9b5b21b997a618f395c12361d323f5c9853->enter($__internal_bcfafc7769bf331ede5a8ed0cc13c9b5b21b997a618f395c12361d323f5c9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des items ";
        
        $__internal_bcfafc7769bf331ede5a8ed0cc13c9b5b21b997a618f395c12361d323f5c9853->leave($__internal_bcfafc7769bf331ede5a8ed0cc13c9b5b21b997a618f395c12361d323f5c9853_prof);

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
