<?php

/* :rentuserroom:index.html.twig */
class __TwigTemplate_d5bb0f8f1854dc3f83f0d02705e89b1d7b835ef94b6d4abf59184af3669a0dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rentuserroom:index.html.twig", 1);
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
        $__internal_9de9b952ec631e09c533d3522ed0ecbcb9a5655389e508fb3da10853d533b418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de9b952ec631e09c533d3522ed0ecbcb9a5655389e508fb3da10853d533b418->enter($__internal_9de9b952ec631e09c533d3522ed0ecbcb9a5655389e508fb3da10853d533b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rentuserroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de9b952ec631e09c533d3522ed0ecbcb9a5655389e508fb3da10853d533b418->leave($__internal_9de9b952ec631e09c533d3522ed0ecbcb9a5655389e508fb3da10853d533b418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da224702cd51292c11422343cc3ff4e367661576c1ad660651fab7fe319614a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da224702cd51292c11422343cc3ff4e367661576c1ad660651fab7fe319614a->enter($__internal_3da224702cd51292c11422343cc3ff4e367661576c1ad660651fab7fe319614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rentuserrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Userroomid</th>
                <th>Rentamount</th>
                <th>Rentdate</th>
                <th>Rentdate1</th>
                <th>Rentdate2</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentUserRooms"]) ? $context["rentUserRooms"] : $this->getContext($context, "rentUserRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["rentUserRoom"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_show", array("id" => $this->getAttribute($context["rentUserRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rentUserRoom"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["rentUserRoom"], "userRoomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["rentUserRoom"], "rentAmount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["rentUserRoom"], "rentDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rentUserRoom"], "rentDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["rentUserRoom"], "rentDate1", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rentUserRoom"], "rentDate1", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["rentUserRoom"], "rentDate2", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rentUserRoom"], "rentDate2", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_show", array("id" => $this->getAttribute($context["rentUserRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_edit", array("id" => $this->getAttribute($context["rentUserRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rentUserRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_new");
        echo "\">Create a new rentUserRoom</a>
        </li>
    </ul>
";
        
        $__internal_3da224702cd51292c11422343cc3ff4e367661576c1ad660651fab7fe319614a->leave($__internal_3da224702cd51292c11422343cc3ff4e367661576c1ad660651fab7fe319614a_prof);

    }

    public function getTemplateName()
    {
        return ":rentuserroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  117 => 39,  105 => 33,  99 => 30,  90 => 26,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Rentuserrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Userroomid</th>
                <th>Rentamount</th>
                <th>Rentdate</th>
                <th>Rentdate1</th>
                <th>Rentdate2</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rentUserRoom in rentUserRooms %}
            <tr>
                <td><a href=\"{{ path('rentuserroom_show', { 'id': rentUserRoom.id }) }}\">{{ rentUserRoom.id }}</a></td>
                <td>{{ rentUserRoom.userRoomId }}</td>
                <td>{{ rentUserRoom.rentAmount }}</td>
                <td>{% if rentUserRoom.rentDate %}{{ rentUserRoom.rentDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if rentUserRoom.rentDate1 %}{{ rentUserRoom.rentDate1|date('Y-m-d') }}{% endif %}</td>
                <td>{% if rentUserRoom.rentDate2 %}{{ rentUserRoom.rentDate2|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rentuserroom_show', { 'id': rentUserRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rentuserroom_edit', { 'id': rentUserRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rentuserroom_new') }}\">Create a new rentUserRoom</a>
        </li>
    </ul>
{% endblock %}
", ":rentuserroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/rentuserroom/index.html.twig");
    }
}
