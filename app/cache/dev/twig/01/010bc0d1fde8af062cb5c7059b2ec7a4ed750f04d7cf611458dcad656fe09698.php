<?php

/* :documentuserroom:show.html.twig */
class __TwigTemplate_ed775ab7f2462ad5cd84b79374285313c00de2edfa324b5a87532008f2224e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentuserroom:show.html.twig", 1);
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
        $__internal_e30e9101f25c95664d1a20ff13799ca86bf0f8bba82e65fd2a6017cd3549285c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30e9101f25c95664d1a20ff13799ca86bf0f8bba82e65fd2a6017cd3549285c->enter($__internal_e30e9101f25c95664d1a20ff13799ca86bf0f8bba82e65fd2a6017cd3549285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentuserroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30e9101f25c95664d1a20ff13799ca86bf0f8bba82e65fd2a6017cd3549285c->leave($__internal_e30e9101f25c95664d1a20ff13799ca86bf0f8bba82e65fd2a6017cd3549285c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1b4a8c0c00834cbf60a3b85783915a8e4b52654f9861a4a9c99b593ed668e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b4a8c0c00834cbf60a3b85783915a8e4b52654f9861a4a9c99b593ed668e81->enter($__internal_c1b4a8c0c00834cbf60a3b85783915a8e4b52654f9861a4a9c99b593ed668e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentuserroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userroomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "userRoomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documentid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "documentId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documentdate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "documentDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "documentDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Documentcomment</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "documentComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_edit", array("id" => $this->getAttribute((isset($context["documentUserRoom"]) ? $context["documentUserRoom"] : $this->getContext($context, "documentUserRoom")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c1b4a8c0c00834cbf60a3b85783915a8e4b52654f9861a4a9c99b593ed668e81->leave($__internal_c1b4a8c0c00834cbf60a3b85783915a8e4b52654f9861a4a9c99b593ed668e81_prof);

    }

    public function getTemplateName()
    {
        return ":documentuserroom:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  94 => 36,  88 => 33,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Documentuserroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ documentUserRoom.id }}</td>
            </tr>
            <tr>
                <th>Userroomid</th>
                <td>{{ documentUserRoom.userRoomId }}</td>
            </tr>
            <tr>
                <th>Documentid</th>
                <td>{{ documentUserRoom.documentId }}</td>
            </tr>
            <tr>
                <th>Documentdate</th>
                <td>{% if documentUserRoom.documentDate %}{{ documentUserRoom.documentDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Documentcomment</th>
                <td>{{ documentUserRoom.documentComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('documentuserroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('documentuserroom_edit', { 'id': documentUserRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":documentuserroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentuserroom/show.html.twig");
    }
}
