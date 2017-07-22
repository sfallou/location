<?php

/* contact/index.html.twig */
class __TwigTemplate_93e6d8c442fd2ccbe2629eeee263cd60dc0d7825887e54989cdba6d99fccf1cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "contact/index.html.twig", 1);
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
        $__internal_221ab6d91b0bb3bce37a48e525dccbd3fb3860269336372579f928879d7e13be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221ab6d91b0bb3bce37a48e525dccbd3fb3860269336372579f928879d7e13be->enter($__internal_221ab6d91b0bb3bce37a48e525dccbd3fb3860269336372579f928879d7e13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221ab6d91b0bb3bce37a48e525dccbd3fb3860269336372579f928879d7e13be->leave($__internal_221ab6d91b0bb3bce37a48e525dccbd3fb3860269336372579f928879d7e13be_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4710acc1890a02d6abfca8503671bcfe1c936a82b63218d1bc9d4273ca8424bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4710acc1890a02d6abfca8503671bcfe1c936a82b63218d1bc9d4273ca8424bd->enter($__internal_4710acc1890a02d6abfca8503671bcfe1c936a82b63218d1bc9d4273ca8424bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_4710acc1890a02d6abfca8503671bcfe1c936a82b63218d1bc9d4273ca8424bd->leave($__internal_4710acc1890a02d6abfca8503671bcfe1c936a82b63218d1bc9d4273ca8424bd_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ef052da8325da0af1c4e5447dd95bf142531c4f10fb807a12ea96c17ff57c905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef052da8325da0af1c4e5447dd95bf142531c4f10fb807a12ea96c17ff57c905->enter($__internal_ef052da8325da0af1c4e5447dd95bf142531c4f10fb807a12ea96c17ff57c905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contact ";
        
        $__internal_ef052da8325da0af1c4e5447dd95bf142531c4f10fb807a12ea96c17ff57c905->leave($__internal_ef052da8325da0af1c4e5447dd95bf142531c4f10fb807a12ea96c17ff57c905_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_507ec97b4d2b5c9ab4564c9d5522c538692cdfbf71c758c9a2fe1201a47bce21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507ec97b4d2b5c9ab4564c9d5522c538692cdfbf71c758c9a2fe1201a47bce21->enter($__internal_507ec97b4d2b5c9ab4564c9d5522c538692cdfbf71c758c9a2fe1201a47bce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_507ec97b4d2b5c9ab4564c9d5522c538692cdfbf71c758c9a2fe1201a47bce21->leave($__internal_507ec97b4d2b5c9ab4564c9d5522c538692cdfbf71c758c9a2fe1201a47bce21_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
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

", "contact/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contact/index.html.twig");
    }
}
