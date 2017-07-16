<?php

/* :chargeroom:index.html.twig */
class __TwigTemplate_b41e09d30518198fc9c76eedb44189e25e05dfc82a65aaeff4addd26976f6c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeroom:index.html.twig", 1);
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
        $__internal_e608c5dba07a3b9599496735df3479d54ee457ae47efa9b9adf831bd5032e4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e608c5dba07a3b9599496735df3479d54ee457ae47efa9b9adf831bd5032e4e7->enter($__internal_e608c5dba07a3b9599496735df3479d54ee457ae47efa9b9adf831bd5032e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e608c5dba07a3b9599496735df3479d54ee457ae47efa9b9adf831bd5032e4e7->leave($__internal_e608c5dba07a3b9599496735df3479d54ee457ae47efa9b9adf831bd5032e4e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46cbbe50cd46b30387869dbd90b827e9b18f5f8d8a2a692257b869938acff87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46cbbe50cd46b30387869dbd90b827e9b18f5f8d8a2a692257b869938acff87->enter($__internal_f46cbbe50cd46b30387869dbd90b827e9b18f5f8d8a2a692257b869938acff87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargerooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Chargeid</th>
                <th>Chargeamount</th>
                <th>Chargedate</th>
                <th>Chargestate</th>
                <th>Chargecomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chargeRooms"]) ? $context["chargeRooms"] : $this->getContext($context, "chargeRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["chargeRoom"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_show", array("id" => $this->getAttribute($context["chargeRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeRoom"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeRoom"], "roomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeRoom"], "chargeId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeRoom"], "chargeAmount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["chargeRoom"], "chargeDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["chargeRoom"], "chargeDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["chargeRoom"], "chargeState", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeRoom"], "chargeComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_show", array("id" => $this->getAttribute($context["chargeRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_edit", array("id" => $this->getAttribute($context["chargeRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chargeRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_new");
        echo "\">Create a new chargeRoom</a>
        </li>
    </ul>
";
        
        $__internal_f46cbbe50cd46b30387869dbd90b827e9b18f5f8d8a2a692257b869938acff87->leave($__internal_f46cbbe50cd46b30387869dbd90b827e9b18f5f8d8a2a692257b869938acff87_prof);

    }

    public function getTemplateName()
    {
        return ":chargeroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  122 => 41,  110 => 35,  104 => 32,  97 => 28,  89 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Chargerooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Chargeid</th>
                <th>Chargeamount</th>
                <th>Chargedate</th>
                <th>Chargestate</th>
                <th>Chargecomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for chargeRoom in chargeRooms %}
            <tr>
                <td><a href=\"{{ path('chargeroom_show', { 'id': chargeRoom.id }) }}\">{{ chargeRoom.id }}</a></td>
                <td>{{ chargeRoom.roomId }}</td>
                <td>{{ chargeRoom.chargeId }}</td>
                <td>{{ chargeRoom.chargeAmount }}</td>
                <td>{% if chargeRoom.chargeDate %}{{ chargeRoom.chargeDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if chargeRoom.chargeState %}Yes{% else %}No{% endif %}</td>
                <td>{{ chargeRoom.chargeComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('chargeroom_show', { 'id': chargeRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('chargeroom_edit', { 'id': chargeRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chargeroom_new') }}\">Create a new chargeRoom</a>
        </li>
    </ul>
{% endblock %}
", ":chargeroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeroom/index.html.twig");
    }
}
