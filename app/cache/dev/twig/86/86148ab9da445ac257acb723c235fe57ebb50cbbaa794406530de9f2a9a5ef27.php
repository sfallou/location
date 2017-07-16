<?php

/* :user:index.html.twig */
class __TwigTemplate_57fb82e7cf1ba14a962cb618f89d16188b2fe3d1673caac7227024cf151f3e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":user:index.html.twig", 1);
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
        $__internal_c1c45387d832db289ebc053282bc45172592f347309bd6ae1ab5026df70fcd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c45387d832db289ebc053282bc45172592f347309bd6ae1ab5026df70fcd56->enter($__internal_c1c45387d832db289ebc053282bc45172592f347309bd6ae1ab5026df70fcd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c45387d832db289ebc053282bc45172592f347309bd6ae1ab5026df70fcd56->leave($__internal_c1c45387d832db289ebc053282bc45172592f347309bd6ae1ab5026df70fcd56_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e274dd3743767ca25a134063d19b039740c9ed826b310a9281743da86fb0c3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e274dd3743767ca25a134063d19b039740c9ed826b310a9281743da86fb0c3a8->enter($__internal_e274dd3743767ca25a134063d19b039740c9ed826b310a9281743da86fb0c3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <a class=\"btn btn-primary\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_e274dd3743767ca25a134063d19b039740c9ed826b310a9281743da86fb0c3a8->leave($__internal_e274dd3743767ca25a134063d19b039740c9ed826b310a9281743da86fb0c3a8_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cffa45843fb4f7709b61029243eafd772b90605eae141d305037c70e2513e213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffa45843fb4f7709b61029243eafd772b90605eae141d305037c70e2513e213->enter($__internal_cffa45843fb4f7709b61029243eafd772b90605eae141d305037c70e2513e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Users ";
        
        $__internal_cffa45843fb4f7709b61029243eafd772b90605eae141d305037c70e2513e213->leave($__internal_cffa45843fb4f7709b61029243eafd772b90605eae141d305037c70e2513e213_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_16fef18fe57beb95d34573ab65344f0af636cc5d2fcc0aa70c3674ba681a197b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fef18fe57beb95d34573ab65344f0af636cc5d2fcc0aa70c3674ba681a197b->enter($__internal_16fef18fe57beb95d34573ab65344f0af636cc5d2fcc0aa70c3674ba681a197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_16fef18fe57beb95d34573ab65344f0af636cc5d2fcc0aa70c3674ba681a197b->leave($__internal_16fef18fe57beb95d34573ab65344f0af636cc5d2fcc0aa70c3674ba681a197b_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  113 => 40,  102 => 35,  95 => 30,  84 => 25,  80 => 24,  75 => 22,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                    <a class=\"btn btn-primary\" href=\"{{ path('user_show', { 'id': user.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('user_edit', { 'id': user.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
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

{% block page_title %} Users {% endblock %}
{% block page_subtitle %} liste {% endblock %}", ":user:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/index.html.twig");
    }
}
