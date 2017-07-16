<?php

/* :typemeuble:index.html.twig */
class __TwigTemplate_6ad4f0bd6ac8e7a5726997e2222f96aecf3ab3d0d18b61649168fd1d310ea23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typemeuble:index.html.twig", 1);
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
        $__internal_7215fcd26c715d65a04b6c902c3766d76015fbd9edbbaf3e315fbcdcfbdeac22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7215fcd26c715d65a04b6c902c3766d76015fbd9edbbaf3e315fbcdcfbdeac22->enter($__internal_7215fcd26c715d65a04b6c902c3766d76015fbd9edbbaf3e315fbcdcfbdeac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typemeuble:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7215fcd26c715d65a04b6c902c3766d76015fbd9edbbaf3e315fbcdcfbdeac22->leave($__internal_7215fcd26c715d65a04b6c902c3766d76015fbd9edbbaf3e315fbcdcfbdeac22_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_92833e55f1e21ec4cf767ea3cbd76eb1ae68ebedeb9017a779baf1a3470e334c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92833e55f1e21ec4cf767ea3cbd76eb1ae68ebedeb9017a779baf1a3470e334c->enter($__internal_92833e55f1e21ec4cf767ea3cbd76eb1ae68ebedeb9017a779baf1a3470e334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_edit", array("id" => $this->getAttribute($context["typeMeuble"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeMeuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_new");
        echo "\">Create a new \"type meuble\"</a>
        </li>
    </ul>
";
        
        $__internal_92833e55f1e21ec4cf767ea3cbd76eb1ae68ebedeb9017a779baf1a3470e334c->leave($__internal_92833e55f1e21ec4cf767ea3cbd76eb1ae68ebedeb9017a779baf1a3470e334c_prof);

    }

    // line 38
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7b86e03b42e9139526b3d9a64de6307f92cc74a3e04e5de5ac55542ebd5bfa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b86e03b42e9139526b3d9a64de6307f92cc74a3e04e5de5ac55542ebd5bfa9d->enter($__internal_7b86e03b42e9139526b3d9a64de6307f92cc74a3e04e5de5ac55542ebd5bfa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type meuble ";
        
        $__internal_7b86e03b42e9139526b3d9a64de6307f92cc74a3e04e5de5ac55542ebd5bfa9d->leave($__internal_7b86e03b42e9139526b3d9a64de6307f92cc74a3e04e5de5ac55542ebd5bfa9d_prof);

    }

    // line 39
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_602316308f7626dfac151fed32912c08e79622d445fe570e13d99893e26708d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602316308f7626dfac151fed32912c08e79622d445fe570e13d99893e26708d3->enter($__internal_602316308f7626dfac151fed32912c08e79622d445fe570e13d99893e26708d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_602316308f7626dfac151fed32912c08e79622d445fe570e13d99893e26708d3->leave($__internal_602316308f7626dfac151fed32912c08e79622d445fe570e13d99893e26708d3_prof);

    }

    public function getTemplateName()
    {
        return ":typemeuble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  108 => 38,  97 => 33,  90 => 28,  79 => 23,  75 => 22,  70 => 20,  64 => 19,  61 => 18,  57 => 17,  42 => 4,  36 => 3,  11 => 1,);
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
                    <a class=\"btn btn-success\" href=\"{{ path('typemeuble_edit', { 'id': typeMeuble.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
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
{% block page_subtitle %} liste {% endblock %}", ":typemeuble:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/index.html.twig");
    }
}
