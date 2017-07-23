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
        $__internal_395b06316559ac0c497d5a43ad40872fe4f383318b03a48c6c9c590b64729893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395b06316559ac0c497d5a43ad40872fe4f383318b03a48c6c9c590b64729893->enter($__internal_395b06316559ac0c497d5a43ad40872fe4f383318b03a48c6c9c590b64729893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395b06316559ac0c497d5a43ad40872fe4f383318b03a48c6c9c590b64729893->leave($__internal_395b06316559ac0c497d5a43ad40872fe4f383318b03a48c6c9c590b64729893_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d68765fd0d307b23139febe007b709515f18b0543e8819768a91da2c563df47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68765fd0d307b23139febe007b709515f18b0543e8819768a91da2c563df47e->enter($__internal_d68765fd0d307b23139febe007b709515f18b0543e8819768a91da2c563df47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_d68765fd0d307b23139febe007b709515f18b0543e8819768a91da2c563df47e->leave($__internal_d68765fd0d307b23139febe007b709515f18b0543e8819768a91da2c563df47e_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5da4482daf3afd31ac304aa78f0e53efbfbce7188e5fc678ac6beb8a747ca0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da4482daf3afd31ac304aa78f0e53efbfbce7188e5fc678ac6beb8a747ca0eb->enter($__internal_5da4482daf3afd31ac304aa78f0e53efbfbce7188e5fc678ac6beb8a747ca0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Liste ";
        
        $__internal_5da4482daf3afd31ac304aa78f0e53efbfbce7188e5fc678ac6beb8a747ca0eb->leave($__internal_5da4482daf3afd31ac304aa78f0e53efbfbce7188e5fc678ac6beb8a747ca0eb_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f9493b806b4184cc686979b35a91c9cb4c4f46849b2908df7cbfe14f52da470e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9493b806b4184cc686979b35a91c9cb4c4f46849b2908df7cbfe14f52da470e->enter($__internal_f9493b806b4184cc686979b35a91c9cb4c4f46849b2908df7cbfe14f52da470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des items ";
        
        $__internal_f9493b806b4184cc686979b35a91c9cb4c4f46849b2908df7cbfe14f52da470e->leave($__internal_f9493b806b4184cc686979b35a91c9cb4c4f46849b2908df7cbfe14f52da470e_prof);

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
