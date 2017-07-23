<?php

/* user/index.html.twig */
class __TwigTemplate_d9208e447e2eec38839aeb0743b5352f8d015665a92dc4add2ad6a1142ff9ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "user/index.html.twig", 1);
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
        $__internal_67494561aeb3bc8dcb552d280cfe060d795e10748de307db0a771bd9f94e07f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67494561aeb3bc8dcb552d280cfe060d795e10748de307db0a771bd9f94e07f9->enter($__internal_67494561aeb3bc8dcb552d280cfe060d795e10748de307db0a771bd9f94e07f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67494561aeb3bc8dcb552d280cfe060d795e10748de307db0a771bd9f94e07f9->leave($__internal_67494561aeb3bc8dcb552d280cfe060d795e10748de307db0a771bd9f94e07f9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_46dbc30ba998925a20081044a5b1c3d835eb9438b75fb69413038abe38e3eb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dbc30ba998925a20081044a5b1c3d835eb9438b75fb69413038abe38e3eb98->enter($__internal_46dbc30ba998925a20081044a5b1c3d835eb9438b75fb69413038abe38e3eb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                     ";
            // line 25
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 26
                echo "                    <a class=\"btn btn-success\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
                echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    ";
            }
            // line 29
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_46dbc30ba998925a20081044a5b1c3d835eb9438b75fb69413038abe38e3eb98->leave($__internal_46dbc30ba998925a20081044a5b1c3d835eb9438b75fb69413038abe38e3eb98_prof);

    }

    // line 42
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3a15383c59349eeb18336574b391384561eb0b8a2efc17d6224cca21a3c40d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a15383c59349eeb18336574b391384561eb0b8a2efc17d6224cca21a3c40d30->enter($__internal_3a15383c59349eeb18336574b391384561eb0b8a2efc17d6224cca21a3c40d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Users ";
        
        $__internal_3a15383c59349eeb18336574b391384561eb0b8a2efc17d6224cca21a3c40d30->leave($__internal_3a15383c59349eeb18336574b391384561eb0b8a2efc17d6224cca21a3c40d30_prof);

    }

    // line 43
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6e4568c07c66f8a8bae14e37ca34486dd614ff273ab666ee831a4ae1948d1b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4568c07c66f8a8bae14e37ca34486dd614ff273ab666ee831a4ae1948d1b7c->enter($__internal_6e4568c07c66f8a8bae14e37ca34486dd614ff273ab666ee831a4ae1948d1b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_6e4568c07c66f8a8bae14e37ca34486dd614ff273ab666ee831a4ae1948d1b7c->leave($__internal_6e4568c07c66f8a8bae14e37ca34486dd614ff273ab666ee831a4ae1948d1b7c_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  119 => 42,  108 => 37,  101 => 32,  93 => 29,  86 => 26,  84 => 25,  80 => 24,  75 => 22,  71 => 21,  65 => 20,  62 => 19,  58 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
                     {% if not is_granted('ROLE_LOCATAIRE') %}
                    <a class=\"btn btn-success\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                    {% endif %}
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
{% block page_subtitle %} liste {% endblock %}", "user/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/index.html.twig");
    }
}
