<?php

/* :association:validation.html.twig */
class __TwigTemplate_f05a3d09ff68408cf6961bd79dd150fa1ab7effb12b4f66e7af737c3e7434666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:validation.html.twig", 1);
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
        $__internal_c52550d919cf3f5df731e698ba8b87f17637f4d05eb5d07580867b5df049ea79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52550d919cf3f5df731e698ba8b87f17637f4d05eb5d07580867b5df049ea79->enter($__internal_c52550d919cf3f5df731e698ba8b87f17637f4d05eb5d07580867b5df049ea79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c52550d919cf3f5df731e698ba8b87f17637f4d05eb5d07580867b5df049ea79->leave($__internal_c52550d919cf3f5df731e698ba8b87f17637f4d05eb5d07580867b5df049ea79_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cfe1d8b329ee215777d4727a85f2a49215494ae7e44b33316acf59b6c5455eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe1d8b329ee215777d4727a85f2a49215494ae7e44b33316acf59b6c5455eec->enter($__internal_cfe1d8b329ee215777d4727a85f2a49215494ae7e44b33316acf59b6c5455eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
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
        
        $__internal_cfe1d8b329ee215777d4727a85f2a49215494ae7e44b33316acf59b6c5455eec->leave($__internal_cfe1d8b329ee215777d4727a85f2a49215494ae7e44b33316acf59b6c5455eec_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_10cf596c4e84efaeef35fcb85396cccfdec6f0e86c095a2320df78f42017e19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cf596c4e84efaeef35fcb85396cccfdec6f0e86c095a2320df78f42017e19f->enter($__internal_10cf596c4e84efaeef35fcb85396cccfdec6f0e86c095a2320df78f42017e19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Invalid Users  ";
        
        $__internal_10cf596c4e84efaeef35fcb85396cccfdec6f0e86c095a2320df78f42017e19f->leave($__internal_10cf596c4e84efaeef35fcb85396cccfdec6f0e86c095a2320df78f42017e19f_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7e2a0e0fabf12967d42aeb2da9e11193c2ca096f14fd342cfcee830d456263fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2a0e0fabf12967d42aeb2da9e11193c2ca096f14fd342cfcee830d456263fc->enter($__internal_7e2a0e0fabf12967d42aeb2da9e11193c2ca096f14fd342cfcee830d456263fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_7e2a0e0fabf12967d42aeb2da9e11193c2ca096f14fd342cfcee830d456263fc->leave($__internal_7e2a0e0fabf12967d42aeb2da9e11193c2ca096f14fd342cfcee830d456263fc_prof);

    }

    public function getTemplateName()
    {
        return ":association:validation.html.twig";
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
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
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
{% block page_subtitle %} liste {% endblock %}", ":association:validation.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/validation.html.twig");
    }
}
