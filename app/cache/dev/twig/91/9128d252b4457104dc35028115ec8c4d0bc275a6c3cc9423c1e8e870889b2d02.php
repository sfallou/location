<?php

/* :typecontact:index.html.twig */
class __TwigTemplate_d19e138c57e4a349da4cbcdf2eea9fa476a81448088a124cf5bf8ad8543afd1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecontact:index.html.twig", 1);
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
        $__internal_6bd6be5c77e6e6634660fa14091165981b742fb25be14ab0d2ba85086abd7db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd6be5c77e6e6634660fa14091165981b742fb25be14ab0d2ba85086abd7db4->enter($__internal_6bd6be5c77e6e6634660fa14091165981b742fb25be14ab0d2ba85086abd7db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecontact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd6be5c77e6e6634660fa14091165981b742fb25be14ab0d2ba85086abd7db4->leave($__internal_6bd6be5c77e6e6634660fa14091165981b742fb25be14ab0d2ba85086abd7db4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b8cb22f1cdfe539b07f8f1990893b2cd16e9f4b2a7f5e4b617d10edfbfcbbe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cb22f1cdfe539b07f8f1990893b2cd16e9f4b2a7f5e4b617d10edfbfcbbe58->enter($__internal_b8cb22f1cdfe539b07f8f1990893b2cd16e9f4b2a7f5e4b617d10edfbfcbbe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b8cb22f1cdfe539b07f8f1990893b2cd16e9f4b2a7f5e4b617d10edfbfcbbe58->leave($__internal_b8cb22f1cdfe539b07f8f1990893b2cd16e9f4b2a7f5e4b617d10edfbfcbbe58_prof);

    }

    public function getTemplateName()
    {
        return ":typecontact:index.html.twig";
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
", ":typecontact:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecontact/index.html.twig");
    }
}
