<?php

/* :chargeappartement:index.html.twig */
class __TwigTemplate_f340c4f7f47b7daaca021ac18a6df03d624ea756ae18d3c8e1eb6d2a5cfe7edb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeappartement:index.html.twig", 1);
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
        $__internal_7e3926b49eed3e25244ab26aed0634a006637c3f8e2b27c5e8850fe4a59325f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3926b49eed3e25244ab26aed0634a006637c3f8e2b27c5e8850fe4a59325f5->enter($__internal_7e3926b49eed3e25244ab26aed0634a006637c3f8e2b27c5e8850fe4a59325f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeappartement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3926b49eed3e25244ab26aed0634a006637c3f8e2b27c5e8850fe4a59325f5->leave($__internal_7e3926b49eed3e25244ab26aed0634a006637c3f8e2b27c5e8850fe4a59325f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6d65901e38a76a14cf1a5e117b31b027e7b017995d2563d35d488159a43950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6d65901e38a76a14cf1a5e117b31b027e7b017995d2563d35d488159a43950->enter($__internal_fb6d65901e38a76a14cf1a5e117b31b027e7b017995d2563d35d488159a43950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargeappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["chargeAppartements"]) ? $context["chargeAppartements"] : $this->getContext($context, "chargeAppartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["chargeAppartement"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_show", array("id" => $this->getAttribute($context["chargeAppartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeAppartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeAppartement"], "appartId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeAppartement"], "chargeId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeAppartement"], "chargeAmount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["chargeAppartement"], "chargeDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["chargeAppartement"], "chargeDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["chargeAppartement"], "chargeState", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["chargeAppartement"], "chargeComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_show", array("id" => $this->getAttribute($context["chargeAppartement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_edit", array("id" => $this->getAttribute($context["chargeAppartement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chargeAppartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_new");
        echo "\">Create a new chargeAppartement</a>
        </li>
    </ul>
";
        
        $__internal_fb6d65901e38a76a14cf1a5e117b31b027e7b017995d2563d35d488159a43950->leave($__internal_fb6d65901e38a76a14cf1a5e117b31b027e7b017995d2563d35d488159a43950_prof);

    }

    public function getTemplateName()
    {
        return ":chargeappartement:index.html.twig";
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
    <h1>Chargeappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Chargeid</th>
                <th>Chargeamount</th>
                <th>Chargedate</th>
                <th>Chargestate</th>
                <th>Chargecomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for chargeAppartement in chargeAppartements %}
            <tr>
                <td><a href=\"{{ path('chargeappartement_show', { 'id': chargeAppartement.id }) }}\">{{ chargeAppartement.id }}</a></td>
                <td>{{ chargeAppartement.appartId }}</td>
                <td>{{ chargeAppartement.chargeId }}</td>
                <td>{{ chargeAppartement.chargeAmount }}</td>
                <td>{% if chargeAppartement.chargeDate %}{{ chargeAppartement.chargeDate|date('Y-m-d') }}{% endif %}</td>
                <td>{% if chargeAppartement.chargeState %}Yes{% else %}No{% endif %}</td>
                <td>{{ chargeAppartement.chargeComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('chargeappartement_show', { 'id': chargeAppartement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('chargeappartement_edit', { 'id': chargeAppartement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chargeappartement_new') }}\">Create a new chargeAppartement</a>
        </li>
    </ul>
{% endblock %}
", ":chargeappartement:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeappartement/index.html.twig");
    }
}
