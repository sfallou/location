<?php

/* :fixroom:index.html.twig */
class __TwigTemplate_947356c3553d484d39d5d38284e7feee1d7d59eb4fa3098197e6f7f681b03b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixroom:index.html.twig", 1);
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
        $__internal_498d86f14df4bc86f23cf801b4ae807be9a9c348bc5f79f4fb2053d71c2cc6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498d86f14df4bc86f23cf801b4ae807be9a9c348bc5f79f4fb2053d71c2cc6c5->enter($__internal_498d86f14df4bc86f23cf801b4ae807be9a9c348bc5f79f4fb2053d71c2cc6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498d86f14df4bc86f23cf801b4ae807be9a9c348bc5f79f4fb2053d71c2cc6c5->leave($__internal_498d86f14df4bc86f23cf801b4ae807be9a9c348bc5f79f4fb2053d71c2cc6c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9997d38b6ce69dab397b9283cedb4b2e91c8e7b7a9faee39dd3752ba29580f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9997d38b6ce69dab397b9283cedb4b2e91c8e7b7a9faee39dd3752ba29580f->enter($__internal_7d9997d38b6ce69dab397b9283cedb4b2e91c8e7b7a9faee39dd3752ba29580f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Fixid</th>
                <th>Fixdate</th>
                <th>Fixstate</th>
                <th>Fixpriority</th>
                <th>Fixcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixRooms"]) ? $context["fixRooms"] : $this->getContext($context, "fixRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["fixRoom"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_show", array("id" => $this->getAttribute($context["fixRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixRoom"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixRoom"], "roomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixRoom"], "fixId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["fixRoom"], "fixDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fixRoom"], "fixDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["fixRoom"], "fixState", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["fixRoom"], "fixPriority", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixRoom"], "fixComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_show", array("id" => $this->getAttribute($context["fixRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_edit", array("id" => $this->getAttribute($context["fixRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_new");
        echo "\">Create a new fixRoom</a>
        </li>
    </ul>
";
        
        $__internal_7d9997d38b6ce69dab397b9283cedb4b2e91c8e7b7a9faee39dd3752ba29580f->leave($__internal_7d9997d38b6ce69dab397b9283cedb4b2e91c8e7b7a9faee39dd3752ba29580f_prof);

    }

    public function getTemplateName()
    {
        return ":fixroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  126 => 41,  114 => 35,  108 => 32,  101 => 28,  93 => 27,  85 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fixrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Fixid</th>
                <th>Fixdate</th>
                <th>Fixstate</th>
                <th>Fixpriority</th>
                <th>Fixcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fixRoom in fixRooms %}
            <tr>
                <td><a href=\"{{ path('fixroom_show', { 'id': fixRoom.id }) }}\">{{ fixRoom.id }}</a></td>
                <td>{{ fixRoom.roomId }}</td>
                <td>{{ fixRoom.fixId }}</td>
                <td>{% if fixRoom.fixDate %}{{ fixRoom.fixDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if fixRoom.fixState %}Yes{% else %}No{% endif %}</td>
                <td>{% if fixRoom.fixPriority %}Yes{% else %}No{% endif %}</td>
                <td>{{ fixRoom.fixComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fixroom_show', { 'id': fixRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fixroom_edit', { 'id': fixRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fixroom_new') }}\">Create a new fixRoom</a>
        </li>
    </ul>
{% endblock %}
", ":fixroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixroom/index.html.twig");
    }
}
