<?php

/* :typedocument:index.html.twig */
class __TwigTemplate_2de25a3835b398bd31036122f57253c349994fa677f962b209c76700991e3385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typedocument:index.html.twig", 1);
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
        $__internal_f89dde43671d48aac8e5f5fb7d95e69d32c0b871607b1088054a046b4e3e3a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89dde43671d48aac8e5f5fb7d95e69d32c0b871607b1088054a046b4e3e3a10->enter($__internal_f89dde43671d48aac8e5f5fb7d95e69d32c0b871607b1088054a046b4e3e3a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedocument:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89dde43671d48aac8e5f5fb7d95e69d32c0b871607b1088054a046b4e3e3a10->leave($__internal_f89dde43671d48aac8e5f5fb7d95e69d32c0b871607b1088054a046b4e3e3a10_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ae1654dd310a13f236f73d2eb61841c82d63a89df5a983232fd0a81d8e9cea66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1654dd310a13f236f73d2eb61841c82d63a89df5a983232fd0a81d8e9cea66->enter($__internal_ae1654dd310a13f236f73d2eb61841c82d63a89df5a983232fd0a81d8e9cea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeDocuments"]) ? $context["typeDocuments"] : $this->getContext($context, "typeDocuments")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeDocument"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedocument_show", array("id" => $this->getAttribute($context["typeDocument"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeDocument"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeDocument"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedocument_show", array("id" => $this->getAttribute($context["typeDocument"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedocument_edit", array("id" => $this->getAttribute($context["typeDocument"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedocument_new");
        echo "\">Create a new typeDocument</a>
        </li>
    </ul>
";
        
        $__internal_ae1654dd310a13f236f73d2eb61841c82d63a89df5a983232fd0a81d8e9cea66->leave($__internal_ae1654dd310a13f236f73d2eb61841c82d63a89df5a983232fd0a81d8e9cea66_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e2571c3de884a41d3221555a6eb640a8fc7e4464ad26dc337a8e318c551f1724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2571c3de884a41d3221555a6eb640a8fc7e4464ad26dc337a8e318c551f1724->enter($__internal_e2571c3de884a41d3221555a6eb640a8fc7e4464ad26dc337a8e318c551f1724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Document ";
        
        $__internal_e2571c3de884a41d3221555a6eb640a8fc7e4464ad26dc337a8e318c551f1724->leave($__internal_e2571c3de884a41d3221555a6eb640a8fc7e4464ad26dc337a8e318c551f1724_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fce63822181a51da1d5e7c8b6307e3f9bed2487c0b53a0e8f760d5603b797073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce63822181a51da1d5e7c8b6307e3f9bed2487c0b53a0e8f760d5603b797073->enter($__internal_fce63822181a51da1d5e7c8b6307e3f9bed2487c0b53a0e8f760d5603b797073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_fce63822181a51da1d5e7c8b6307e3f9bed2487c0b53a0e8f760d5603b797073->leave($__internal_fce63822181a51da1d5e7c8b6307e3f9bed2487c0b53a0e8f760d5603b797073_prof);

    }

    public function getTemplateName()
    {
        return ":typedocument:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  110 => 40,  99 => 35,  92 => 30,  79 => 23,  75 => 22,  70 => 20,  64 => 19,  61 => 18,  57 => 17,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeDocument in typeDocuments %}
            <tr>
                <td><a href=\"{{ path('typedocument_show', { 'id': typeDocument.id }) }}\">{{ typeDocument.id }}</a></td>
                <td>{{ typeDocument.name }}</td>
                <td>
                <a class=\"btn btn-primary\" href=\"{{ path('typedocument_show', { 'id': typeDocument.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('typedocument_edit', { 'id': typeDocument.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"{{ path('typedocument_new') }}\">Create a new typeDocument</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Type Document {% endblock %}
{% block page_subtitle %} liste {% endblock %}
", ":typedocument:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typedocument/index.html.twig");
    }
}
