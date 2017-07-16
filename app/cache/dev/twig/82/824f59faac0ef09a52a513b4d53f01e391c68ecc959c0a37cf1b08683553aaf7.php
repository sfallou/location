<?php

/* :fixappartement:index.html.twig */
class __TwigTemplate_6bc4ea797313f28c009511b88fff5bb56172ca32fbae690828a2303f3f65e973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixappartement:index.html.twig", 1);
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
        $__internal_6594832eaebe5d81230cf991dee5e5c79fd4b927d2c354dd79456880793c4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6594832eaebe5d81230cf991dee5e5c79fd4b927d2c354dd79456880793c4e7f->enter($__internal_6594832eaebe5d81230cf991dee5e5c79fd4b927d2c354dd79456880793c4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixappartement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6594832eaebe5d81230cf991dee5e5c79fd4b927d2c354dd79456880793c4e7f->leave($__internal_6594832eaebe5d81230cf991dee5e5c79fd4b927d2c354dd79456880793c4e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4087740c0b878af4492b66f4f9a2617d91698b77b285c60c0ba3439b6b5aa105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4087740c0b878af4492b66f4f9a2617d91698b77b285c60c0ba3439b6b5aa105->enter($__internal_4087740c0b878af4492b66f4f9a2617d91698b77b285c60c0ba3439b6b5aa105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["fixAppartements"]) ? $context["fixAppartements"] : $this->getContext($context, "fixAppartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["fixAppartement"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_show", array("id" => $this->getAttribute($context["fixAppartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixAppartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixAppartement"], "appartId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixAppartement"], "fixId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["fixAppartement"], "fixDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fixAppartement"], "fixDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["fixAppartement"], "fixState", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["fixAppartement"], "fixPriority", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fixAppartement"], "fixComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_show", array("id" => $this->getAttribute($context["fixAppartement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_edit", array("id" => $this->getAttribute($context["fixAppartement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixAppartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_new");
        echo "\">Create a new fixAppartement</a>
        </li>
    </ul>
";
        
        $__internal_4087740c0b878af4492b66f4f9a2617d91698b77b285c60c0ba3439b6b5aa105->leave($__internal_4087740c0b878af4492b66f4f9a2617d91698b77b285c60c0ba3439b6b5aa105_prof);

    }

    public function getTemplateName()
    {
        return ":fixappartement:index.html.twig";
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
    <h1>Fixappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Fixid</th>
                <th>Fixdate</th>
                <th>Fixstate</th>
                <th>Fixpriority</th>
                <th>Fixcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fixAppartement in fixAppartements %}
            <tr>
                <td><a href=\"{{ path('fixappartement_show', { 'id': fixAppartement.id }) }}\">{{ fixAppartement.id }}</a></td>
                <td>{{ fixAppartement.appartId }}</td>
                <td>{{ fixAppartement.fixId }}</td>
                <td>{% if fixAppartement.fixDate %}{{ fixAppartement.fixDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if fixAppartement.fixState %}Yes{% else %}No{% endif %}</td>
                <td>{% if fixAppartement.fixPriority %}Yes{% else %}No{% endif %}</td>
                <td>{{ fixAppartement.fixComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fixappartement_show', { 'id': fixAppartement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fixappartement_edit', { 'id': fixAppartement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fixappartement_new') }}\">Create a new fixAppartement</a>
        </li>
    </ul>
{% endblock %}
", ":fixappartement:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixappartement/index.html.twig");
    }
}
