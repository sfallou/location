<?php

/* :document:index.html.twig */
class __TwigTemplate_837f9ec5271e85b39b02f33077049c11aef41661cc5ad2f9e1fd56841a89970b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":document:index.html.twig", 1);
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
        $__internal_a71055fa8061deaafeb4309b65b3e47ca5211a5d045293fa6698c770d7442229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71055fa8061deaafeb4309b65b3e47ca5211a5d045293fa6698c770d7442229->enter($__internal_a71055fa8061deaafeb4309b65b3e47ca5211a5d045293fa6698c770d7442229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":document:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71055fa8061deaafeb4309b65b3e47ca5211a5d045293fa6698c770d7442229->leave($__internal_a71055fa8061deaafeb4309b65b3e47ca5211a5d045293fa6698c770d7442229_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_08b8415fb37ea510e0e86ff9229ca32ef61b3c7e72813d754f2e7fbdf3e95f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b8415fb37ea510e0e86ff9229ca32ef61b3c7e72813d754f2e7fbdf3e95f0a->enter($__internal_08b8415fb37ea510e0e86ff9229ca32ef61b3c7e72813d754f2e7fbdf3e95f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
               
                <th>Actions</th>
            </tr>
        </thead>
         ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <!--a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_edit", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a-->
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
        
        $__internal_08b8415fb37ea510e0e86ff9229ca32ef61b3c7e72813d754f2e7fbdf3e95f0a->leave($__internal_08b8415fb37ea510e0e86ff9229ca32ef61b3c7e72813d754f2e7fbdf3e95f0a_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0a9aa8ea6a6a15d63879d3d856712f1fc7978d13da095cb0dba006ccd9478588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9aa8ea6a6a15d63879d3d856712f1fc7978d13da095cb0dba006ccd9478588->enter($__internal_0a9aa8ea6a6a15d63879d3d856712f1fc7978d13da095cb0dba006ccd9478588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Document ";
        
        $__internal_0a9aa8ea6a6a15d63879d3d856712f1fc7978d13da095cb0dba006ccd9478588->leave($__internal_0a9aa8ea6a6a15d63879d3d856712f1fc7978d13da095cb0dba006ccd9478588_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_491380ebd7142a6267554802ab8576df56085a652dca039d98ce0930e903a7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491380ebd7142a6267554802ab8576df56085a652dca039d98ce0930e903a7df->enter($__internal_491380ebd7142a6267554802ab8576df56085a652dca039d98ce0930e903a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_491380ebd7142a6267554802ab8576df56085a652dca039d98ce0930e903a7df->leave($__internal_491380ebd7142a6267554802ab8576df56085a652dca039d98ce0930e903a7df_prof);

    }

    public function getTemplateName()
    {
        return ":document:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  109 => 39,  98 => 34,  91 => 29,  80 => 24,  76 => 23,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Id</th>
                <th>Name</th>
               
                <th>Actions</th>
            </tr>
        </thead>
         {% for document in documents %}
            <tr>
                <td><a href=\"{{ path('document_show', { 'id': document.id }) }}\">{{ document.id }}</a></td>
                <td>{{ document.name }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('document_show', { 'id': document.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <!--a class=\"btn btn-success\" href=\"{{ path('document_edit', { 'id': document.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a-->
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


", ":document:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/document/index.html.twig");
    }
}
