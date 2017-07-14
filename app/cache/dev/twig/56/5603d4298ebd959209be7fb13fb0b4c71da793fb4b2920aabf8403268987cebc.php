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
        $__internal_66550a6cf9b413f02e6b5e1df8237b52eaeb75277d472e112097fbbb5ccea6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66550a6cf9b413f02e6b5e1df8237b52eaeb75277d472e112097fbbb5ccea6ec->enter($__internal_66550a6cf9b413f02e6b5e1df8237b52eaeb75277d472e112097fbbb5ccea6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "meuble/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66550a6cf9b413f02e6b5e1df8237b52eaeb75277d472e112097fbbb5ccea6ec->leave($__internal_66550a6cf9b413f02e6b5e1df8237b52eaeb75277d472e112097fbbb5ccea6ec_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dcd0a23097b47d22ba50cc5dabeea200ac90472663aacbbd5d39551030b6b888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd0a23097b47d22ba50cc5dabeea200ac90472663aacbbd5d39551030b6b888->enter($__internal_dcd0a23097b47d22ba50cc5dabeea200ac90472663aacbbd5d39551030b6b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_dcd0a23097b47d22ba50cc5dabeea200ac90472663aacbbd5d39551030b6b888->leave($__internal_dcd0a23097b47d22ba50cc5dabeea200ac90472663aacbbd5d39551030b6b888_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_56e9ef96228316152cb48676f423009fa5bf9d81f29e8cf589aa6ef257c9adfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e9ef96228316152cb48676f423009fa5bf9d81f29e8cf589aa6ef257c9adfe->enter($__internal_56e9ef96228316152cb48676f423009fa5bf9d81f29e8cf589aa6ef257c9adfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_56e9ef96228316152cb48676f423009fa5bf9d81f29e8cf589aa6ef257c9adfe->leave($__internal_56e9ef96228316152cb48676f423009fa5bf9d81f29e8cf589aa6ef257c9adfe_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b23385c7a1624e897cbde2ecb0cea9f20bb27f73db36fb552a3357af6331f098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23385c7a1624e897cbde2ecb0cea9f20bb27f73db36fb552a3357af6331f098->enter($__internal_b23385c7a1624e897cbde2ecb0cea9f20bb27f73db36fb552a3357af6331f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_b23385c7a1624e897cbde2ecb0cea9f20bb27f73db36fb552a3357af6331f098->leave($__internal_b23385c7a1624e897cbde2ecb0cea9f20bb27f73db36fb552a3357af6331f098_prof);

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

", "meuble/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/index.html.twig");
    }
}
