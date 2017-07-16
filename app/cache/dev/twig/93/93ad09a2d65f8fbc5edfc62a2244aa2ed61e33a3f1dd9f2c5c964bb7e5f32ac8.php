<?php

/* :meubleroom:show.html.twig */
class __TwigTemplate_c8f6ab4ffec0cf828a4aebc1d808e3fe18e6e50b0fdb87591f11697696049db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleroom:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ebc995c90d4c3001c4d354abaf237936b357116b1d7820b2e7f63ba0aa996db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebc995c90d4c3001c4d354abaf237936b357116b1d7820b2e7f63ba0aa996db->enter($__internal_2ebc995c90d4c3001c4d354abaf237936b357116b1d7820b2e7f63ba0aa996db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebc995c90d4c3001c4d354abaf237936b357116b1d7820b2e7f63ba0aa996db->leave($__internal_2ebc995c90d4c3001c4d354abaf237936b357116b1d7820b2e7f63ba0aa996db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced929fa79bb4fa75335a364189beb5246f76bc8fa225bbb83fd10c3c9f7e3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced929fa79bb4fa75335a364189beb5246f76bc8fa225bbb83fd10c3c9f7e3ba->enter($__internal_ced929fa79bb4fa75335a364189beb5246f76bc8fa225bbb83fd10c3c9f7e3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleRoom"]) ? $context["meubleRoom"] : $this->getContext($context, "meubleRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleRoom"]) ? $context["meubleRoom"] : $this->getContext($context, "meubleRoom")), "roomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Meubleid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleRoom"]) ? $context["meubleRoom"] : $this->getContext($context, "meubleRoom")), "meubleId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_edit", array("id" => $this->getAttribute((isset($context["meubleRoom"]) ? $context["meubleRoom"] : $this->getContext($context, "meubleRoom")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ced929fa79bb4fa75335a364189beb5246f76bc8fa225bbb83fd10c3c9f7e3ba->leave($__internal_ced929fa79bb4fa75335a364189beb5246f76bc8fa225bbb83fd10c3c9f7e3ba_prof);

    }

    public function getTemplateName()
    {
        return ":meubleroom:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Meubleroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ meubleRoom.id }}</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>{{ meubleRoom.roomId }}</td>
            </tr>
            <tr>
                <th>Meubleid</th>
                <td>{{ meubleRoom.meubleId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('meubleroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('meubleroom_edit', { 'id': meubleRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":meubleroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleroom/show.html.twig");
    }
}
