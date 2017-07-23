<?php

/* residence/index.html.twig */
class __TwigTemplate_706bb88ca0dbc41af4fc6298d5806dd39875a52f2dd387ca877d819982b6aa10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "residence/index.html.twig", 1);
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
        $__internal_3324d3538b9b5d673ba23aa36899183431c30299b5cd84e4f5b80544876fa572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3324d3538b9b5d673ba23aa36899183431c30299b5cd84e4f5b80544876fa572->enter($__internal_3324d3538b9b5d673ba23aa36899183431c30299b5cd84e4f5b80544876fa572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "residence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3324d3538b9b5d673ba23aa36899183431c30299b5cd84e4f5b80544876fa572->leave($__internal_3324d3538b9b5d673ba23aa36899183431c30299b5cd84e4f5b80544876fa572_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fa4aab67f758d89e301598a36fae79f09b441f693c3464c9c2a217a3fa60d773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4aab67f758d89e301598a36fae79f09b441f693c3464c9c2a217a3fa60d773->enter($__internal_fa4aab67f758d89e301598a36fae79f09b441f693c3464c9c2a217a3fa60d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Contact_gardien</th>
                <th>Contact_syndic</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["residences"]) ? $context["residences"] : $this->getContext($context, "residences")));
        foreach ($context['_seq'] as $context["_key"] => $context["residence"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_show", array("id" => $this->getAttribute($context["residence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["residence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["residence"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["residence"], "contactgardien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["residence"], "contactsyndic", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_show", array("id" => $this->getAttribute($context["residence"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_edit", array("id" => $this->getAttribute($context["residence"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['residence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_new");
        echo "\">Create a new residence</a>
        </li>
    </ul>
";
        
        $__internal_fa4aab67f758d89e301598a36fae79f09b441f693c3464c9c2a217a3fa60d773->leave($__internal_fa4aab67f758d89e301598a36fae79f09b441f693c3464c9c2a217a3fa60d773_prof);

    }

    // line 41
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cd9d2bb2025d405633cf872958da8bd669ad6e8dddffb48e22585ada57083583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9d2bb2025d405633cf872958da8bd669ad6e8dddffb48e22585ada57083583->enter($__internal_cd9d2bb2025d405633cf872958da8bd669ad6e8dddffb48e22585ada57083583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidences ";
        
        $__internal_cd9d2bb2025d405633cf872958da8bd669ad6e8dddffb48e22585ada57083583->leave($__internal_cd9d2bb2025d405633cf872958da8bd669ad6e8dddffb48e22585ada57083583_prof);

    }

    // line 42
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1c3865c95657490f02c23d9d2224166859292623fbc30c106e712cbf3bb64232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3865c95657490f02c23d9d2224166859292623fbc30c106e712cbf3bb64232->enter($__internal_1c3865c95657490f02c23d9d2224166859292623fbc30c106e712cbf3bb64232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste";
        
        $__internal_1c3865c95657490f02c23d9d2224166859292623fbc30c106e712cbf3bb64232->leave($__internal_1c3865c95657490f02c23d9d2224166859292623fbc30c106e712cbf3bb64232_prof);

    }

    public function getTemplateName()
    {
        return "residence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  118 => 41,  107 => 37,  100 => 32,  89 => 27,  85 => 26,  80 => 24,  76 => 23,  72 => 22,  66 => 21,  63 => 20,  59 => 19,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Contact_gardien</th>
                <th>Contact_syndic</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for residence in residences %}
            <tr>
                <td><a href=\"{{ path('residence_show', { 'id': residence.id }) }}\">{{ residence.id }}</a></td>
                <td>{{ residence.name }}</td>
                <td>{{ residence.contactgardien }}</td>
                <td>{{ residence.contactsyndic }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('residence_show', { 'id': residence.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('residence_edit', { 'id': residence.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('residence_new') }}\">Create a new residence</a>
        </li>
    </ul>
{% endblock %}
{% block page_title %} Résidences {% endblock %}
{% block page_subtitle %} liste{% endblock %}", "residence/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/residence/index.html.twig");
    }
}
