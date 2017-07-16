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
        $__internal_bd5473c485bae892ee625906cc9a5910649a65de8824262a1290380ffed1cd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5473c485bae892ee625906cc9a5910649a65de8824262a1290380ffed1cd8f->enter($__internal_bd5473c485bae892ee625906cc9a5910649a65de8824262a1290380ffed1cd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5473c485bae892ee625906cc9a5910649a65de8824262a1290380ffed1cd8f->leave($__internal_bd5473c485bae892ee625906cc9a5910649a65de8824262a1290380ffed1cd8f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_59490dd8092e4a9159acb5a75d2d1a0914b2cf4b00e9bcbf8cf4a0d690e0ddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59490dd8092e4a9159acb5a75d2d1a0914b2cf4b00e9bcbf8cf4a0d690e0ddb2->enter($__internal_59490dd8092e4a9159acb5a75d2d1a0914b2cf4b00e9bcbf8cf4a0d690e0ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_59490dd8092e4a9159acb5a75d2d1a0914b2cf4b00e9bcbf8cf4a0d690e0ddb2->leave($__internal_59490dd8092e4a9159acb5a75d2d1a0914b2cf4b00e9bcbf8cf4a0d690e0ddb2_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0c1f1d93a5ddd16a5427e5ac0de7254cd74f42272f82953ed3227ea90ab3302e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1f1d93a5ddd16a5427e5ac0de7254cd74f42272f82953ed3227ea90ab3302e->enter($__internal_0c1f1d93a5ddd16a5427e5ac0de7254cd74f42272f82953ed3227ea90ab3302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_0c1f1d93a5ddd16a5427e5ac0de7254cd74f42272f82953ed3227ea90ab3302e->leave($__internal_0c1f1d93a5ddd16a5427e5ac0de7254cd74f42272f82953ed3227ea90ab3302e_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_87a1428d2dfb0922f4945438e7baad46e3706a3e35fb421f07399f2628986f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a1428d2dfb0922f4945438e7baad46e3706a3e35fb421f07399f2628986f04->enter($__internal_87a1428d2dfb0922f4945438e7baad46e3706a3e35fb421f07399f2628986f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_87a1428d2dfb0922f4945438e7baad46e3706a3e35fb421f07399f2628986f04->leave($__internal_87a1428d2dfb0922f4945438e7baad46e3706a3e35fb421f07399f2628986f04_prof);

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
