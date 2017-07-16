<?php

/* :documentappartement:index.html.twig */
class __TwigTemplate_ac27d94930edb27c9f94a0f7cfc1f518c752788c2a27674b7f223f63ff998c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentappartement:index.html.twig", 1);
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
        $__internal_d54dc4416679eae956f232e65d8b6dfbe8a21e29395c0f7cb0ffcf83336d005a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54dc4416679eae956f232e65d8b6dfbe8a21e29395c0f7cb0ffcf83336d005a->enter($__internal_d54dc4416679eae956f232e65d8b6dfbe8a21e29395c0f7cb0ffcf83336d005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentappartement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54dc4416679eae956f232e65d8b6dfbe8a21e29395c0f7cb0ffcf83336d005a->leave($__internal_d54dc4416679eae956f232e65d8b6dfbe8a21e29395c0f7cb0ffcf83336d005a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b6535987a2120f9a9e3dedbe24b1fb6d0a9cd599d3134c3f5d37f594f971c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b6535987a2120f9a9e3dedbe24b1fb6d0a9cd599d3134c3f5d37f594f971c5->enter($__internal_f6b6535987a2120f9a9e3dedbe24b1fb6d0a9cd599d3134c3f5d37f594f971c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Documentid</th>
                <th>Documentdate</th>
                <th>Documentcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentAppartements"]) ? $context["documentAppartements"] : $this->getContext($context, "documentAppartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["documentAppartement"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_show", array("id" => $this->getAttribute($context["documentAppartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentAppartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentAppartement"], "appartId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentAppartement"], "documentId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["documentAppartement"], "documentDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["documentAppartement"], "documentDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentAppartement"], "documentComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_show", array("id" => $this->getAttribute($context["documentAppartement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_edit", array("id" => $this->getAttribute($context["documentAppartement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentAppartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_new");
        echo "\">Create a new documentAppartement</a>
        </li>
    </ul>
";
        
        $__internal_f6b6535987a2120f9a9e3dedbe24b1fb6d0a9cd599d3134c3f5d37f594f971c5->leave($__internal_f6b6535987a2120f9a9e3dedbe24b1fb6d0a9cd599d3134c3f5d37f594f971c5_prof);

    }

    public function getTemplateName()
    {
        return ":documentappartement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  108 => 37,  96 => 31,  90 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Documentappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Documentid</th>
                <th>Documentdate</th>
                <th>Documentcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for documentAppartement in documentAppartements %}
            <tr>
                <td><a href=\"{{ path('documentappartement_show', { 'id': documentAppartement.id }) }}\">{{ documentAppartement.id }}</a></td>
                <td>{{ documentAppartement.appartId }}</td>
                <td>{{ documentAppartement.documentId }}</td>
                <td>{% if documentAppartement.documentDate %}{{ documentAppartement.documentDate|date('Y-m-d') }}{% endif %}</td>
                <td>{{ documentAppartement.documentComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('documentappartement_show', { 'id': documentAppartement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('documentappartement_edit', { 'id': documentAppartement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('documentappartement_new') }}\">Create a new documentAppartement</a>
        </li>
    </ul>
{% endblock %}
", ":documentappartement:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentappartement/index.html.twig");
    }
}
