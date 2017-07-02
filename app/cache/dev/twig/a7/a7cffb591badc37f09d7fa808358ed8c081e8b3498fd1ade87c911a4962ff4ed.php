<?php

/* default/liste_meuble.html.twig */
class __TwigTemplate_d3f740af5b36e32cb3edd0ec614609242855cf06b937581f1899c82ac8bd82a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/liste_meuble.html.twig", 1);
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
        $__internal_0ca30587e0cd863cf4e835d6664a7af9aa059476f8ea475a8d39e6e75b381d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca30587e0cd863cf4e835d6664a7af9aa059476f8ea475a8d39e6e75b381d24->enter($__internal_0ca30587e0cd863cf4e835d6664a7af9aa059476f8ea475a8d39e6e75b381d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca30587e0cd863cf4e835d6664a7af9aa059476f8ea475a8d39e6e75b381d24->leave($__internal_0ca30587e0cd863cf4e835d6664a7af9aa059476f8ea475a8d39e6e75b381d24_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee9b47f262bbe00778675c2a7b79b486ad8f498394ea85440e0eb1176d8ef4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9b47f262bbe00778675c2a7b79b486ad8f498394ea85440e0eb1176d8ef4eb->enter($__internal_ee9b47f262bbe00778675c2a7b79b486ad8f498394ea85440e0eb1176d8ef4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_ee9b47f262bbe00778675c2a7b79b486ad8f498394ea85440e0eb1176d8ef4eb->leave($__internal_ee9b47f262bbe00778675c2a7b79b486ad8f498394ea85440e0eb1176d8ef4eb_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fb8886018443549c2e2145b1369e5784e906be61f5cf7ce8da5b4fc922f3b14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8886018443549c2e2145b1369e5784e906be61f5cf7ce8da5b4fc922f3b14d->enter($__internal_fb8886018443549c2e2145b1369e5784e906be61f5cf7ce8da5b4fc922f3b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meubles ";
        
        $__internal_fb8886018443549c2e2145b1369e5784e906be61f5cf7ce8da5b4fc922f3b14d->leave($__internal_fb8886018443549c2e2145b1369e5784e906be61f5cf7ce8da5b4fc922f3b14d_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_39662a98d059490f0df92f719f64ef3f89f89484271162ba7156d2e9a49de111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39662a98d059490f0df92f719f64ef3f89f89484271162ba7156d2e9a49de111->enter($__internal_39662a98d059490f0df92f719f64ef3f89f89484271162ba7156d2e9a49de111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des meubles";
        
        $__internal_39662a98d059490f0df92f719f64ef3f89f89484271162ba7156d2e9a49de111->leave($__internal_39662a98d059490f0df92f719f64ef3f89f89484271162ba7156d2e9a49de111_prof);

    }

    public function getTemplateName()
    {
        return "default/liste_meuble.html.twig";
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
{% block page_subtitle %} Liste des meubles{% endblock %}", "default/liste_meuble.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_meuble.html.twig");
    }
}
