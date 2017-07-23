<?php

/* typemeuble/index.html.twig */
class __TwigTemplate_5b7c78925a71816b4099b377f120d94706a26725318cea873f06c7c0b68a477e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typemeuble/index.html.twig", 1);
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
        $__internal_dc5f72fa4b19b5b4c764a93d2684e22f45a79c9ffb6e5a000dfeb0edf24415f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5f72fa4b19b5b4c764a93d2684e22f45a79c9ffb6e5a000dfeb0edf24415f7->enter($__internal_dc5f72fa4b19b5b4c764a93d2684e22f45a79c9ffb6e5a000dfeb0edf24415f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typemeuble/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5f72fa4b19b5b4c764a93d2684e22f45a79c9ffb6e5a000dfeb0edf24415f7->leave($__internal_dc5f72fa4b19b5b4c764a93d2684e22f45a79c9ffb6e5a000dfeb0edf24415f7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3b1dadfb01656e7b3b3f9a379905fbbd7e53be2affaa42b541ed037b9c7dd1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1dadfb01656e7b3b3f9a379905fbbd7e53be2affaa42b541ed037b9c7dd1ed->enter($__internal_3b1dadfb01656e7b3b3f9a379905fbbd7e53be2affaa42b541ed037b9c7dd1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["typeMeubles"]) ? $context["typeMeubles"] : $this->getContext($context, "typeMeubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeMeuble"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_show", array("id" => $this->getAttribute($context["typeMeuble"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeMeuble"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeMeuble"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_show", array("id" => $this->getAttribute($context["typeMeuble"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                     ";
            // line 23
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 24
                echo "                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_edit", array("id" => $this->getAttribute($context["typeMeuble"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    ";
            }
            // line 27
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeMeuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_new");
        echo "\">Create a new \"type meuble\"</a>
        </li>
    </ul>
";
        
        $__internal_3b1dadfb01656e7b3b3f9a379905fbbd7e53be2affaa42b541ed037b9c7dd1ed->leave($__internal_3b1dadfb01656e7b3b3f9a379905fbbd7e53be2affaa42b541ed037b9c7dd1ed_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_22b69b30332153bd886d5e716a6bf722fe61a00623416f1197e62ed97abc28ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b69b30332153bd886d5e716a6bf722fe61a00623416f1197e62ed97abc28ca->enter($__internal_22b69b30332153bd886d5e716a6bf722fe61a00623416f1197e62ed97abc28ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type meuble ";
        
        $__internal_22b69b30332153bd886d5e716a6bf722fe61a00623416f1197e62ed97abc28ca->leave($__internal_22b69b30332153bd886d5e716a6bf722fe61a00623416f1197e62ed97abc28ca_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5c72e7d22433b98908c9eb7e7cfb7e194b39097ef75e5655f2ab485bc02c5ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c72e7d22433b98908c9eb7e7cfb7e194b39097ef75e5655f2ab485bc02c5ba8->enter($__internal_5c72e7d22433b98908c9eb7e7cfb7e194b39097ef75e5655f2ab485bc02c5ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_5c72e7d22433b98908c9eb7e7cfb7e194b39097ef75e5655f2ab485bc02c5ba8->leave($__internal_5c72e7d22433b98908c9eb7e7cfb7e194b39097ef75e5655f2ab485bc02c5ba8_prof);

    }

    public function getTemplateName()
    {
        return "typemeuble/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  114 => 40,  103 => 35,  96 => 30,  88 => 27,  81 => 24,  79 => 23,  75 => 22,  70 => 20,  64 => 19,  61 => 18,  57 => 17,  42 => 4,  36 => 3,  11 => 1,);
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
        {% for typeMeuble in typeMeubles %}
            <tr>
                <td><a href=\"{{ path('typemeuble_show', { 'id': typeMeuble.id }) }}\">{{ typeMeuble.id }}</a></td>
                <td>{{ typeMeuble.name }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('typemeuble_show', { 'id': typeMeuble.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                     {% if not is_granted('ROLE_LOCATAIRE') %}
                    <a class=\"btn btn-success\" href=\"{{ path('typemeuble_edit', { 'id': typeMeuble.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typemeuble_new') }}\">Create a new \"type meuble\"</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Type meuble {% endblock %}
{% block page_subtitle %} liste {% endblock %}", "typemeuble/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/index.html.twig");
    }
}
