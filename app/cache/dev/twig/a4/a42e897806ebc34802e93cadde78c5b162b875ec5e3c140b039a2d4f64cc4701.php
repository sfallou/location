<?php

/* room/index.html.twig */
class __TwigTemplate_09452e5342aa397f74d80bc2758de2270087298d2636a1a3f06cd37086308610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "room/index.html.twig", 1);
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
        $__internal_dbb77aedf6cc5bc9d2df049b4f02f54773af2c880cc66dc216e08a53fad7e905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb77aedf6cc5bc9d2df049b4f02f54773af2c880cc66dc216e08a53fad7e905->enter($__internal_dbb77aedf6cc5bc9d2df049b4f02f54773af2c880cc66dc216e08a53fad7e905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb77aedf6cc5bc9d2df049b4f02f54773af2c880cc66dc216e08a53fad7e905->leave($__internal_dbb77aedf6cc5bc9d2df049b4f02f54773af2c880cc66dc216e08a53fad7e905_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2ee082df440dbf4f69f824a84a865cb4d3a8df165fa9aaf3810b9639f60dba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee082df440dbf4f69f824a84a865cb4d3a8df165fa9aaf3810b9639f60dba9d->enter($__internal_2ee082df440dbf4f69f824a84a865cb4d3a8df165fa9aaf3810b9639f60dba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Surface</th>
                <th>Rent</th>
                <th>Guarantee</th>
                <th>Id_appart</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "surface", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "rent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "guarantee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "idappart", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_edit", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_new");
        echo "\">Create a new room</a>
        </li>
    </ul>
";
        
        $__internal_2ee082df440dbf4f69f824a84a865cb4d3a8df165fa9aaf3810b9639f60dba9d->leave($__internal_2ee082df440dbf4f69f824a84a865cb4d3a8df165fa9aaf3810b9639f60dba9d_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b536397dff760365b896945feeb43b41c8b31258a402c309daca268b1057cbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b536397dff760365b896945feeb43b41c8b31258a402c309daca268b1057cbc4->enter($__internal_b536397dff760365b896945feeb43b41c8b31258a402c309daca268b1057cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_b536397dff760365b896945feeb43b41c8b31258a402c309daca268b1057cbc4->leave($__internal_b536397dff760365b896945feeb43b41c8b31258a402c309daca268b1057cbc4_prof);

    }

    // line 44
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fa7f264d3fdd64d4054cbdd7078b0f3f345ba79340f1116ebc3ab1a2aea3b20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f264d3fdd64d4054cbdd7078b0f3f345ba79340f1116ebc3ab1a2aea3b20e->enter($__internal_fa7f264d3fdd64d4054cbdd7078b0f3f345ba79340f1116ebc3ab1a2aea3b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_fa7f264d3fdd64d4054cbdd7078b0f3f345ba79340f1116ebc3ab1a2aea3b20e->leave($__internal_fa7f264d3fdd64d4054cbdd7078b0f3f345ba79340f1116ebc3ab1a2aea3b20e_prof);

    }

    public function getTemplateName()
    {
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  123 => 43,  112 => 39,  105 => 34,  94 => 29,  90 => 28,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  67 => 22,  64 => 21,  60 => 20,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Surface</th>
                <th>Rent</th>
                <th>Guarantee</th>
                <th>Id_appart</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>
                <td><a href=\"{{ path('room_show', { 'id': room.id }) }}\">{{ room.id }}</a></td>
                <td>{{ room.surface }}</td>
                <td>{{ room.rent }}</td>
                <td>{{ room.guarantee }}</td>
                <td>{{ room.idappart }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('room_show', { 'id': room.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('room_edit', { 'id': room.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('room_new') }}\">Create a new room</a>
        </li>
    </ul>
{% endblock %}
{% block page_title %} Room {% endblock %}
{% block page_subtitle %} liste {% endblock %}", "room/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/room/index.html.twig");
    }
}
