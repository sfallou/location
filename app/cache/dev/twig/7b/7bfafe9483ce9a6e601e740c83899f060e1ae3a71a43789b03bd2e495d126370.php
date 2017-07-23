<?php

/* :meuble:index.html.twig */
class __TwigTemplate_7ae9826e7902427781d785cdb49d7c7747a8ddb8ac0ed7281e5b2816f8f4f4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":meuble:index.html.twig", 1);
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
        $__internal_ad1683c03fd7e444114c9f65c5ad2c9ff569fde2b1e527157c4526fc9bd2d5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1683c03fd7e444114c9f65c5ad2c9ff569fde2b1e527157c4526fc9bd2d5c7->enter($__internal_ad1683c03fd7e444114c9f65c5ad2c9ff569fde2b1e527157c4526fc9bd2d5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1683c03fd7e444114c9f65c5ad2c9ff569fde2b1e527157c4526fc9bd2d5c7->leave($__internal_ad1683c03fd7e444114c9f65c5ad2c9ff569fde2b1e527157c4526fc9bd2d5c7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7de5a0e104e5f9a54132fc09f7cdf0d8715f8fc4215629969445b32eed8b3954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de5a0e104e5f9a54132fc09f7cdf0d8715f8fc4215629969445b32eed8b3954->enter($__internal_7de5a0e104e5f9a54132fc09f7cdf0d8715f8fc4215629969445b32eed8b3954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Id_type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_show", array("id" => $this->getAttribute($context["meuble"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "idtype", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_show", array("id" => $this->getAttribute($context["meuble"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_edit", array("id" => $this->getAttribute($context["meuble"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_new");
        echo "\">Create a new meuble</a>
        </li>
    </ul>
";
        
        $__internal_7de5a0e104e5f9a54132fc09f7cdf0d8715f8fc4215629969445b32eed8b3954->leave($__internal_7de5a0e104e5f9a54132fc09f7cdf0d8715f8fc4215629969445b32eed8b3954_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f356a97fdb38342a8ed59fbb98e3308955188a6bfc46d1816370d76b1921e188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f356a97fdb38342a8ed59fbb98e3308955188a6bfc46d1816370d76b1921e188->enter($__internal_f356a97fdb38342a8ed59fbb98e3308955188a6bfc46d1816370d76b1921e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_f356a97fdb38342a8ed59fbb98e3308955188a6bfc46d1816370d76b1921e188->leave($__internal_f356a97fdb38342a8ed59fbb98e3308955188a6bfc46d1816370d76b1921e188_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0333bb85f05ee1f2b1e5754f2a30273954f8957ca1242c3976d74e673d47b5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0333bb85f05ee1f2b1e5754f2a30273954f8957ca1242c3976d74e673d47b5ef->enter($__internal_0333bb85f05ee1f2b1e5754f2a30273954f8957ca1242c3976d74e673d47b5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_0333bb85f05ee1f2b1e5754f2a30273954f8957ca1242c3976d74e673d47b5ef->leave($__internal_0333bb85f05ee1f2b1e5754f2a30273954f8957ca1242c3976d74e673d47b5ef_prof);

    }

    public function getTemplateName()
    {
        return ":meuble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  113 => 40,  102 => 35,  95 => 30,  84 => 25,  80 => 24,  75 => 22,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Id_type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for meuble in meubles %}
            <tr>
                <td><a href=\"{{ path('meuble_show', { 'id': meuble.id }) }}\">{{ meuble.id }}</a></td>
                <td>{{ meuble.name }}</td>
                <td>{{ meuble.idtype }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('meuble_show', { 'id': meuble.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('meuble_edit', { 'id': meuble.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('meuble_new') }}\">Create a new meuble</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} liste {% endblock %}

", ":meuble:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/index.html.twig");
    }
}
