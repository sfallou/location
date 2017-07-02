<?php

/* default/liste_type_meuble.html.twig */
class __TwigTemplate_10308b8011d212131bc9d04f92a175cd2ff7256bf7eee31ced307b35315d8691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/liste_type_meuble.html.twig", 1);
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
        $__internal_a68254931377161d75eeda0a6677af822216350c54b7809a7c7e65db1cfbb69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68254931377161d75eeda0a6677af822216350c54b7809a7c7e65db1cfbb69f->enter($__internal_a68254931377161d75eeda0a6677af822216350c54b7809a7c7e65db1cfbb69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste_type_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68254931377161d75eeda0a6677af822216350c54b7809a7c7e65db1cfbb69f->leave($__internal_a68254931377161d75eeda0a6677af822216350c54b7809a7c7e65db1cfbb69f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_721c3fad9bd2eddb81f573a37b8015255205c8d61ae66281cb54b212e860d603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721c3fad9bd2eddb81f573a37b8015255205c8d61ae66281cb54b212e860d603->enter($__internal_721c3fad9bd2eddb81f573a37b8015255205c8d61ae66281cb54b212e860d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_meubles"]) ? $context["type_meubles"] : $this->getContext($context, "type_meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 19
            echo "                  <tr>
                  <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "name", array()), "html", null, true);
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
        // line 28
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_721c3fad9bd2eddb81f573a37b8015255205c8d61ae66281cb54b212e860d603->leave($__internal_721c3fad9bd2eddb81f573a37b8015255205c8d61ae66281cb54b212e860d603_prof);

    }

    // line 38
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_50c23ff37f953b99de08d4c8b29face3dbc09ce042beb1ed03d126a8c4501d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c23ff37f953b99de08d4c8b29face3dbc09ce042beb1ed03d126a8c4501d88->enter($__internal_50c23ff37f953b99de08d4c8b29face3dbc09ce042beb1ed03d126a8c4501d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type de Meubles ";
        
        $__internal_50c23ff37f953b99de08d4c8b29face3dbc09ce042beb1ed03d126a8c4501d88->leave($__internal_50c23ff37f953b99de08d4c8b29face3dbc09ce042beb1ed03d126a8c4501d88_prof);

    }

    // line 39
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a55c3d2cf0ae8824f4df82c5ae116830806cf4d7e11b7157c9bc162d04b2689c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55c3d2cf0ae8824f4df82c5ae116830806cf4d7e11b7157c9bc162d04b2689c->enter($__internal_a55c3d2cf0ae8824f4df82c5ae116830806cf4d7e11b7157c9bc162d04b2689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des types de meubles";
        
        $__internal_a55c3d2cf0ae8824f4df82c5ae116830806cf4d7e11b7157c9bc162d04b2689c->leave($__internal_a55c3d2cf0ae8824f4df82c5ae116830806cf4d7e11b7157c9bc162d04b2689c_prof);

    }

    public function getTemplateName()
    {
        return "default/liste_type_meuble.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  97 => 38,  82 => 28,  69 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for el in type_meubles %}
                  <tr>
                  <td> {{el.id}}</td>
                  <td>{{el.name}}</td>
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

{% block page_title %} Type de Meubles {% endblock %}
{% block page_subtitle %} Liste des types de meubles{% endblock %}", "default/liste_type_meuble.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_type_meuble.html.twig");
    }
}
