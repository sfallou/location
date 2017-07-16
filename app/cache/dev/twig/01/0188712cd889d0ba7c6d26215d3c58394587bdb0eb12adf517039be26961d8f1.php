<?php

/* :default:liste_meuble.html.twig */
class __TwigTemplate_99ca94e504ea3ff270c4b6d2ffc8da6673c2d6943d51c87253c039d6a08a753c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:liste_meuble.html.twig", 1);
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
        $__internal_d041bbe9a939020ecb3bd25cbed1e526714c7a558f96b3e226dfd566a6b313af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d041bbe9a939020ecb3bd25cbed1e526714c7a558f96b3e226dfd566a6b313af->enter($__internal_d041bbe9a939020ecb3bd25cbed1e526714c7a558f96b3e226dfd566a6b313af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liste_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d041bbe9a939020ecb3bd25cbed1e526714c7a558f96b3e226dfd566a6b313af->leave($__internal_d041bbe9a939020ecb3bd25cbed1e526714c7a558f96b3e226dfd566a6b313af_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ccef54baefef540ae3349dac5d29532efdf0405434406569d7f6d04d785cdb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccef54baefef540ae3349dac5d29532efdf0405434406569d7f6d04d785cdb19->enter($__internal_ccef54baefef540ae3349dac5d29532efdf0405434406569d7f6d04d785cdb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>id Type Meuble</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 20
            echo "                  <tr>
                  <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "idType", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_ccef54baefef540ae3349dac5d29532efdf0405434406569d7f6d04d785cdb19->leave($__internal_ccef54baefef540ae3349dac5d29532efdf0405434406569d7f6d04d785cdb19_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fccc48ee9311d960154423413d638216012837d848b43078d93c1823da6c1cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccc48ee9311d960154423413d638216012837d848b43078d93c1823da6c1cae->enter($__internal_fccc48ee9311d960154423413d638216012837d848b43078d93c1823da6c1cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meubles ";
        
        $__internal_fccc48ee9311d960154423413d638216012837d848b43078d93c1823da6c1cae->leave($__internal_fccc48ee9311d960154423413d638216012837d848b43078d93c1823da6c1cae_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ba1dd710c328e1a77242bb4f917a035572a556a8d94f10b254b61dd829049451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1dd710c328e1a77242bb4f917a035572a556a8d94f10b254b61dd829049451->enter($__internal_ba1dd710c328e1a77242bb4f917a035572a556a8d94f10b254b61dd829049451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des meubles";
        
        $__internal_ba1dd710c328e1a77242bb4f917a035572a556a8d94f10b254b61dd829049451->leave($__internal_ba1dd710c328e1a77242bb4f917a035572a556a8d94f10b254b61dd829049451_prof);

    }

    public function getTemplateName()
    {
        return ":default:liste_meuble.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  102 => 40,  87 => 30,  74 => 23,  70 => 22,  66 => 21,  63 => 20,  59 => 19,  42 => 4,  36 => 3,  11 => 1,);
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
                  <th>Wording</th>
                  <th>id Type Meuble</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for el in meubles %}
                  <tr>
                  <td> {{el.id}}</td>
                  <td>{{el.name}}</td>
                  <td>{{el.idType}}</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
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

{% block page_title %} Meubles {% endblock %}
{% block page_subtitle %} Liste des meubles{% endblock %}", ":default:liste_meuble.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_meuble.html.twig");
    }
}
