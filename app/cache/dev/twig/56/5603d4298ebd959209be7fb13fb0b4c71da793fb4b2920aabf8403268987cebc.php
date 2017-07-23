<?php

/* meuble/index.html.twig */
class __TwigTemplate_5262841193a2952230c45aa38d73b51ecb93b09204d2e566a325c211d4a7deaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "meuble/index.html.twig", 1);
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
        $__internal_20bfe14be30c98b33ad2484b30229f54afad99dfcf3b0545878b52fa1adaff9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bfe14be30c98b33ad2484b30229f54afad99dfcf3b0545878b52fa1adaff9e->enter($__internal_20bfe14be30c98b33ad2484b30229f54afad99dfcf3b0545878b52fa1adaff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "meuble/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bfe14be30c98b33ad2484b30229f54afad99dfcf3b0545878b52fa1adaff9e->leave($__internal_20bfe14be30c98b33ad2484b30229f54afad99dfcf3b0545878b52fa1adaff9e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7654e1ca6c4fd91e520f932edc6b5bb77504ec78ec932476fc320d2fdd4610a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7654e1ca6c4fd91e520f932edc6b5bb77504ec78ec932476fc320d2fdd4610a7->enter($__internal_7654e1ca6c4fd91e520f932edc6b5bb77504ec78ec932476fc320d2fdd4610a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                     ";
            // line 25
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 26
                echo "                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_edit", array("id" => $this->getAttribute($context["meuble"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    ";
            }
            // line 29
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
 ";
        // line 34
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 35
            echo "    <ul>
        <li>
            <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_new");
            echo "\">Create a new meuble</a>
        </li>
    </ul>
";
        }
        
        $__internal_7654e1ca6c4fd91e520f932edc6b5bb77504ec78ec932476fc320d2fdd4610a7->leave($__internal_7654e1ca6c4fd91e520f932edc6b5bb77504ec78ec932476fc320d2fdd4610a7_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5624c612fdd4555d3f63027a700cd3c22eb8259ee32765999f9567c8dcaf087b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5624c612fdd4555d3f63027a700cd3c22eb8259ee32765999f9567c8dcaf087b->enter($__internal_5624c612fdd4555d3f63027a700cd3c22eb8259ee32765999f9567c8dcaf087b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_5624c612fdd4555d3f63027a700cd3c22eb8259ee32765999f9567c8dcaf087b->leave($__internal_5624c612fdd4555d3f63027a700cd3c22eb8259ee32765999f9567c8dcaf087b_prof);

    }

    // line 44
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1e88db16d7cd14c33e4c93b9d3d63e37a4bdef449762e220300f48cd6577a7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e88db16d7cd14c33e4c93b9d3d63e37a4bdef449762e220300f48cd6577a7e9->enter($__internal_1e88db16d7cd14c33e4c93b9d3d63e37a4bdef449762e220300f48cd6577a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_1e88db16d7cd14c33e4c93b9d3d63e37a4bdef449762e220300f48cd6577a7e9->leave($__internal_1e88db16d7cd14c33e4c93b9d3d63e37a4bdef449762e220300f48cd6577a7e9_prof);

    }

    public function getTemplateName()
    {
        return "meuble/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  123 => 43,  111 => 37,  107 => 35,  105 => 34,  101 => 32,  93 => 29,  86 => 26,  84 => 25,  80 => 24,  75 => 22,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                     {% if not is_granted('ROLE_LOCATAIRE') %}
                    <a class=\"btn btn-success\" href=\"{{ path('meuble_edit', { 'id': meuble.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
 {% if not is_granted('ROLE_LOCATAIRE') %}
    <ul>
        <li>
            <a href=\"{{ path('meuble_new') }}\">Create a new meuble</a>
        </li>
    </ul>
{% endif %}
{% endblock %}

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} liste {% endblock %}

", "meuble/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/index.html.twig");
    }
}
