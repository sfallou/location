<?php

/* document/index.html.twig */
class __TwigTemplate_600f8aa96dcd6499e1b1aaa5babf42db3f906683cb04919737daeace9edbd627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "document/index.html.twig", 1);
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
        $__internal_cbeaa29d7f7866756ad0300a3e8c14f8e8357b74d8e454f17dc13b101d6f84c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbeaa29d7f7866756ad0300a3e8c14f8e8357b74d8e454f17dc13b101d6f84c6->enter($__internal_cbeaa29d7f7866756ad0300a3e8c14f8e8357b74d8e454f17dc13b101d6f84c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbeaa29d7f7866756ad0300a3e8c14f8e8357b74d8e454f17dc13b101d6f84c6->leave($__internal_cbeaa29d7f7866756ad0300a3e8c14f8e8357b74d8e454f17dc13b101d6f84c6_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ac2ba1123e0a5f067bd3112d7c26ee305c57368ab199b7a7ca6b4fb6c9ec8f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2ba1123e0a5f067bd3112d7c26ee305c57368ab199b7a7ca6b4fb6c9ec8f8b->enter($__internal_ac2ba1123e0a5f067bd3112d7c26ee305c57368ab199b7a7ca6b4fb6c9ec8f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
         ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "idtype", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "path", array()), "html", null, true);
            echo "</td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_edit", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_new");
        echo "\">Create a new meuble</a>
        </li>
    </ul>
";
        
        $__internal_ac2ba1123e0a5f067bd3112d7c26ee305c57368ab199b7a7ca6b4fb6c9ec8f8b->leave($__internal_ac2ba1123e0a5f067bd3112d7c26ee305c57368ab199b7a7ca6b4fb6c9ec8f8b_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ab7b243e0903012ff3ad4f27c96b53206ae60a082e892581eb3a94458e13cfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7b243e0903012ff3ad4f27c96b53206ae60a082e892581eb3a94458e13cfa4->enter($__internal_ab7b243e0903012ff3ad4f27c96b53206ae60a082e892581eb3a94458e13cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Document ";
        
        $__internal_ab7b243e0903012ff3ad4f27c96b53206ae60a082e892581eb3a94458e13cfa4->leave($__internal_ab7b243e0903012ff3ad4f27c96b53206ae60a082e892581eb3a94458e13cfa4_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fc3101427151ff91b5bc629112849539a7815eca2133ad03dabecb78ee56508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3101427151ff91b5bc629112849539a7815eca2133ad03dabecb78ee56508a->enter($__internal_fc3101427151ff91b5bc629112849539a7815eca2133ad03dabecb78ee56508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_fc3101427151ff91b5bc629112849539a7815eca2133ad03dabecb78ee56508a->leave($__internal_fc3101427151ff91b5bc629112849539a7815eca2133ad03dabecb78ee56508a_prof);

    }

    public function getTemplateName()
    {
        return "document/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  115 => 39,  104 => 34,  97 => 29,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  64 => 19,  61 => 18,  57 => 17,  42 => 4,  36 => 3,  11 => 1,);
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
         {% for document in documents %}
            <tr>
                <td><a href=\"{{ path('document_show', { 'id': document.id }) }}\">{{ document.id }}</a></td>
                <td>{{ document.name }}</td>
                <td>{{ document.idtype }}</td>
                <td>{{ document.path }}</td>
                    <a class=\"btn btn-primary\" href=\"{{ path('document_show', { 'id': document.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('document_edit', { 'id': document.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
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

{% block page_title %} Document {% endblock %}
{% block page_subtitle %} liste {% endblock %}


", "document/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/document/index.html.twig");
    }
}
