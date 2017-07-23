<?php

/* association/validation.html.twig */
class __TwigTemplate_064004224ddc77a46c1ad403f3873b3cbb2d14ee15969a66bdc02cce08360dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "association/validation.html.twig", 1);
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
        $__internal_6667ce8250289b69fe9a01f7779f2bac9dfe053d98a7abfd91cebfe19ac8659e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6667ce8250289b69fe9a01f7779f2bac9dfe053d98a7abfd91cebfe19ac8659e->enter($__internal_6667ce8250289b69fe9a01f7779f2bac9dfe053d98a7abfd91cebfe19ac8659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6667ce8250289b69fe9a01f7779f2bac9dfe053d98a7abfd91cebfe19ac8659e->leave($__internal_6667ce8250289b69fe9a01f7779f2bac9dfe053d98a7abfd91cebfe19ac8659e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ecaa62e831efce1aafc2c929aa391a4d9018c4089cb88c482a113b6dd337944e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaa62e831efce1aafc2c929aa391a4d9018c4089cb88c482a113b6dd337944e->enter($__internal_ecaa62e831efce1aafc2c929aa391a4d9018c4089cb88c482a113b6dd337944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_validated", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Validate</a>
                     <a class=\"btn btn-danger\" href=\"\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_ecaa62e831efce1aafc2c929aa391a4d9018c4089cb88c482a113b6dd337944e->leave($__internal_ecaa62e831efce1aafc2c929aa391a4d9018c4089cb88c482a113b6dd337944e_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_17aaef2d9f0744be1e332fcf84f73804d6a1eb8f8d1b6b9a59cc8c03f773136d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aaef2d9f0744be1e332fcf84f73804d6a1eb8f8d1b6b9a59cc8c03f773136d->enter($__internal_17aaef2d9f0744be1e332fcf84f73804d6a1eb8f8d1b6b9a59cc8c03f773136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Invalid Users  ";
        
        $__internal_17aaef2d9f0744be1e332fcf84f73804d6a1eb8f8d1b6b9a59cc8c03f773136d->leave($__internal_17aaef2d9f0744be1e332fcf84f73804d6a1eb8f8d1b6b9a59cc8c03f773136d_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_278d10c56f6c1e49a5089f3d64ebdf860bd6759e28e5f04f70ed9c9d29fbeae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278d10c56f6c1e49a5089f3d64ebdf860bd6759e28e5f04f70ed9c9d29fbeae2->enter($__internal_278d10c56f6c1e49a5089f3d64ebdf860bd6759e28e5f04f70ed9c9d29fbeae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_278d10c56f6c1e49a5089f3d64ebdf860bd6759e28e5f04f70ed9c9d29fbeae2->leave($__internal_278d10c56f6c1e49a5089f3d64ebdf860bd6759e28e5f04f70ed9c9d29fbeae2_prof);

    }

    public function getTemplateName()
    {
        return "association/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  109 => 39,  98 => 34,  91 => 29,  80 => 24,  75 => 22,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('user_validated', { 'id': user.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Validate</a>
                     <a class=\"btn btn-danger\" href=\"\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Invalid Users  {% endblock %}
{% block page_subtitle %} liste {% endblock %}", "association/validation.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/validation.html.twig");
    }
}
