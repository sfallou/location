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
        $__internal_0dbd8ff92df53b1ae32b14a6bb768f1fcd5be8ea784ae6190efb5bf527de4acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbd8ff92df53b1ae32b14a6bb768f1fcd5be8ea784ae6190efb5bf527de4acb->enter($__internal_0dbd8ff92df53b1ae32b14a6bb768f1fcd5be8ea784ae6190efb5bf527de4acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbd8ff92df53b1ae32b14a6bb768f1fcd5be8ea784ae6190efb5bf527de4acb->leave($__internal_0dbd8ff92df53b1ae32b14a6bb768f1fcd5be8ea784ae6190efb5bf527de4acb_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fbad5f40b2861f9f12c59c8e7f8879a163c0da610b49c3108b058a1f9c52a5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbad5f40b2861f9f12c59c8e7f8879a163c0da610b49c3108b058a1f9c52a5dd->enter($__internal_fbad5f40b2861f9f12c59c8e7f8879a163c0da610b49c3108b058a1f9c52a5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    ";
            // line 29
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 30
                echo "                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_edit", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a>
                    ";
            }
            // line 32
            echo " 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        // line 38
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 39
            echo "    <ul>
        <li>
            <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_new");
            echo "\">Create a new room</a>
        </li>
    </ul>
";
        }
        
        $__internal_fbad5f40b2861f9f12c59c8e7f8879a163c0da610b49c3108b058a1f9c52a5dd->leave($__internal_fbad5f40b2861f9f12c59c8e7f8879a163c0da610b49c3108b058a1f9c52a5dd_prof);

    }

    // line 46
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_56b46c55ad0ec933d802e8c6911a1ea295db0a487e3a5e63c67274233789d4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b46c55ad0ec933d802e8c6911a1ea295db0a487e3a5e63c67274233789d4c8->enter($__internal_56b46c55ad0ec933d802e8c6911a1ea295db0a487e3a5e63c67274233789d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_56b46c55ad0ec933d802e8c6911a1ea295db0a487e3a5e63c67274233789d4c8->leave($__internal_56b46c55ad0ec933d802e8c6911a1ea295db0a487e3a5e63c67274233789d4c8_prof);

    }

    // line 47
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6d2e0393863bd3fb2e75e86e37ff12ced0e335df76499079fa3b261154c75f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e0393863bd3fb2e75e86e37ff12ced0e335df76499079fa3b261154c75f4f->enter($__internal_6d2e0393863bd3fb2e75e86e37ff12ced0e335df76499079fa3b261154c75f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_6d2e0393863bd3fb2e75e86e37ff12ced0e335df76499079fa3b261154c75f4f->leave($__internal_6d2e0393863bd3fb2e75e86e37ff12ced0e335df76499079fa3b261154c75f4f_prof);

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
        return array (  146 => 47,  134 => 46,  122 => 41,  118 => 39,  116 => 38,  112 => 36,  103 => 32,  96 => 30,  94 => 29,  90 => 28,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  67 => 22,  64 => 21,  60 => 20,  42 => 4,  36 => 3,  11 => 1,);
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
                    {% if not is_granted('ROLE_LOCATAIRE') %}
                    <a class=\"btn btn-success\" href=\"{{ path('room_edit', { 'id': room.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
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
            <a href=\"{{ path('room_new') }}\">Create a new room</a>
        </li>
    </ul>
{% endif %}
{% endblock %}
{% block page_title %} Room {% endblock %}
{% block page_subtitle %} liste {% endblock %}", "room/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/room/index.html.twig");
    }
}
