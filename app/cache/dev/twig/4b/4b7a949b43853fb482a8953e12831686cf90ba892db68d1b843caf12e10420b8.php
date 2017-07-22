<?php

/* typecontact/index.html.twig */
class __TwigTemplate_2da757bc93169d01d7c524f3dea6a2ce5e8707460ce02c21df6522d2073952b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typecontact/index.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a45e3be87cea84ca79bf5d9d5587bf085f35d16a5639bcef4c78cac7a9207b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a45e3be87cea84ca79bf5d9d5587bf085f35d16a5639bcef4c78cac7a9207b->enter($__internal_b1a45e3be87cea84ca79bf5d9d5587bf085f35d16a5639bcef4c78cac7a9207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecontact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a45e3be87cea84ca79bf5d9d5587bf085f35d16a5639bcef4c78cac7a9207b->leave($__internal_b1a45e3be87cea84ca79bf5d9d5587bf085f35d16a5639bcef4c78cac7a9207b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6a3c3a616875d9ebd0e2061c829090013c5f29cff8c8cc76ec641db3d6f51d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3c3a616875d9ebd0e2061c829090013c5f29cff8c8cc76ec641db3d6f51d3f->enter($__internal_6a3c3a616875d9ebd0e2061c829090013c5f29cff8c8cc76ec641db3d6f51d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
        <thead>
            <tr>
                <th>Id</th>
                <th>Wording</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeContacts"]) ? $context["typeContacts"] : $this->getContext($context, "typeContacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeContact"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecontact_show", array("id" => $this->getAttribute($context["typeContact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeContact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeContact"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                     <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecontact_show", array("id" => $this->getAttribute($context["typeContact"], "id", array()))), "html", null, true);
            echo "\"\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecontact_edit", array("id" => $this->getAttribute($context["typeContact"], "id", array()))), "html", null, true);
            echo "><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeContact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecontact_new");
        echo "\">Create a new typeContact</a>
        </li>
    </ul>
";
        
        $__internal_6a3c3a616875d9ebd0e2061c829090013c5f29cff8c8cc76ec641db3d6f51d3f->leave($__internal_6a3c3a616875d9ebd0e2061c829090013c5f29cff8c8cc76ec641db3d6f51d3f_prof);

    }

    public function getTemplateName()
    {
        return "typecontact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  89 => 29,  78 => 24,  74 => 23,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
        <thead>
            <tr>
                <th>Id</th>
                <th>Wording</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeContact in typeContacts %}
            <tr>
                <td><a href=\"{{ path('typecontact_show', { 'id': typeContact.id }) }}\">{{ typeContact.id }}</a></td>
                <td>{{ typeContact.name }}</td>
                <td>
                     <a class=\"btn btn-primary\" href=\"{{ path('typecontact_show', { 'id': typeContact.id }) }}\"\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('typecontact_edit', { 'id': typeContact.id }) }}><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typecontact_new') }}\">Create a new typeContact</a>
        </li>
    </ul>
{% endblock %}
", "typecontact/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecontact/index.html.twig");
    }
}
