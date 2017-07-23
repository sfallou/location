<?php

/* :contact:index.html.twig */
class __TwigTemplate_fa658000d17678c6af0b55aebf147477517c841ae6b74264210f5e12191cb147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":contact:index.html.twig", 1);
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
        $__internal_76475e628076d3cbf48f3984cd415a477606037472950d1ac95042b2c29f1d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76475e628076d3cbf48f3984cd415a477606037472950d1ac95042b2c29f1d0c->enter($__internal_76475e628076d3cbf48f3984cd415a477606037472950d1ac95042b2c29f1d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76475e628076d3cbf48f3984cd415a477606037472950d1ac95042b2c29f1d0c->leave($__internal_76475e628076d3cbf48f3984cd415a477606037472950d1ac95042b2c29f1d0c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_558e474529d6334eb42c5ba299e3dccca43b8642d2962eba606fa4b62bed9215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558e474529d6334eb42c5ba299e3dccca43b8642d2962eba606fa4b62bed9215->enter($__internal_558e474529d6334eb42c5ba299e3dccca43b8642d2962eba606fa4b62bed9215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        
        <thead>
            <tr>
                <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Actions</th>
            </tr>
        </thead>
         ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_new");
        echo "\">Create a new contact</a>
        </li>
    </ul>
";
        
        $__internal_558e474529d6334eb42c5ba299e3dccca43b8642d2962eba606fa4b62bed9215->leave($__internal_558e474529d6334eb42c5ba299e3dccca43b8642d2962eba606fa4b62bed9215_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4b70bbe2cc6be67e7fb6f57cb58eacd3ed9b8f2643bd77726d0c5d5014fe6da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b70bbe2cc6be67e7fb6f57cb58eacd3ed9b8f2643bd77726d0c5d5014fe6da1->enter($__internal_4b70bbe2cc6be67e7fb6f57cb58eacd3ed9b8f2643bd77726d0c5d5014fe6da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contact ";
        
        $__internal_4b70bbe2cc6be67e7fb6f57cb58eacd3ed9b8f2643bd77726d0c5d5014fe6da1->leave($__internal_4b70bbe2cc6be67e7fb6f57cb58eacd3ed9b8f2643bd77726d0c5d5014fe6da1_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_066965bc1f6b334c23f52dab40819c819465aabd59cc882fe374e61602c96762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066965bc1f6b334c23f52dab40819c819465aabd59cc882fe374e61602c96762->enter($__internal_066965bc1f6b334c23f52dab40819c819465aabd59cc882fe374e61602c96762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_066965bc1f6b334c23f52dab40819c819465aabd59cc882fe374e61602c96762->leave($__internal_066965bc1f6b334c23f52dab40819c819465aabd59cc882fe374e61602c96762_prof);

    }

    public function getTemplateName()
    {
        return ":contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  124 => 45,  113 => 40,  106 => 35,  95 => 30,  91 => 29,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  68 => 23,  65 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
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
        <table  class=\"table table-bordered table-striped\">        
        <thead>
            <tr>
                <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Actions</th>
            </tr>
        </thead>
         {% for contact in contacts %}
            <tr>
                <td><a href=\"{{ path('contact_show', { 'id': contact.id }) }}\">{{ contact.id }}</a></td>
                <td>{{ contact.firstname }}</td>
                <td>{{ contact.lastname }}</td>
                <td>{{ contact.email }}</td>
                <td>{{ contact.telephone }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('contact_show', { 'id': contact.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('contact_edit', { 'id': contact.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contact_new') }}\">Create a new contact</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Contact {% endblock %}
{% block page_subtitle %} liste {% endblock %}

", ":contact:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contact/index.html.twig");
    }
}
