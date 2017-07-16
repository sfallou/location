<?php

/* :residence:index.html.twig */
class __TwigTemplate_e68a4ee8b5f807eac2acf3a920ccda80bedc596c65281c7bf0d7d43514b33573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":residence:index.html.twig", 1);
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
        $__internal_cd0f4228b67a8856afa1686374ca3a0f9a571f4b0d50032268f8288a1fa60ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0f4228b67a8856afa1686374ca3a0f9a571f4b0d50032268f8288a1fa60ca1->enter($__internal_cd0f4228b67a8856afa1686374ca3a0f9a571f4b0d50032268f8288a1fa60ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":residence:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0f4228b67a8856afa1686374ca3a0f9a571f4b0d50032268f8288a1fa60ca1->leave($__internal_cd0f4228b67a8856afa1686374ca3a0f9a571f4b0d50032268f8288a1fa60ca1_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0a3ffc840eaf6502e5f7e162fcb44bcacbbf887f13db9635deba0cb1d53d4c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3ffc840eaf6502e5f7e162fcb44bcacbbf887f13db9635deba0cb1d53d4c3e->enter($__internal_0a3ffc840eaf6502e5f7e162fcb44bcacbbf887f13db9635deba0cb1d53d4c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0a3ffc840eaf6502e5f7e162fcb44bcacbbf887f13db9635deba0cb1d53d4c3e->leave($__internal_0a3ffc840eaf6502e5f7e162fcb44bcacbbf887f13db9635deba0cb1d53d4c3e_prof);

    }

    // line 41
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9727d807e54ea8830080c8ba3b385d338f4ba7e376123eb87833f013bde3274b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9727d807e54ea8830080c8ba3b385d338f4ba7e376123eb87833f013bde3274b->enter($__internal_9727d807e54ea8830080c8ba3b385d338f4ba7e376123eb87833f013bde3274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidences ";
        
        $__internal_9727d807e54ea8830080c8ba3b385d338f4ba7e376123eb87833f013bde3274b->leave($__internal_9727d807e54ea8830080c8ba3b385d338f4ba7e376123eb87833f013bde3274b_prof);

    }

    // line 42
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7b919693cf2b974a09c0edc00491f0537174d677e52b74f024834fab11b1a67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b919693cf2b974a09c0edc00491f0537174d677e52b74f024834fab11b1a67e->enter($__internal_7b919693cf2b974a09c0edc00491f0537174d677e52b74f024834fab11b1a67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste";
        
        $__internal_7b919693cf2b974a09c0edc00491f0537174d677e52b74f024834fab11b1a67e->leave($__internal_7b919693cf2b974a09c0edc00491f0537174d677e52b74f024834fab11b1a67e_prof);

    }

    public function getTemplateName()
    {
        return ":residence:index.html.twig";
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
{% block page_subtitle %} liste{% endblock %}", ":residence:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/residence/index.html.twig");
    }
}
