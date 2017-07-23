<?php

/* :meubleappartement:index.html.twig */
class __TwigTemplate_cd7e4cc391abcac24ae23eee1fb4bfee77053d7220847e63f91d1c85a7ed8e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleappartement:index.html.twig", 1);
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
        $__internal_d084aa0029d85f60dce766ecf71cc634846dbecc83d157b24f3cc33df43eebe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d084aa0029d85f60dce766ecf71cc634846dbecc83d157b24f3cc33df43eebe1->enter($__internal_d084aa0029d85f60dce766ecf71cc634846dbecc83d157b24f3cc33df43eebe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleappartement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d084aa0029d85f60dce766ecf71cc634846dbecc83d157b24f3cc33df43eebe1->leave($__internal_d084aa0029d85f60dce766ecf71cc634846dbecc83d157b24f3cc33df43eebe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b24561ead87572b206babbd34eae44952816a453293b6647435919543a2f2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24561ead87572b206babbd34eae44952816a453293b6647435919543a2f2a8->enter($__internal_2b24561ead87572b206babbd34eae44952816a453293b6647435919543a2f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Meubleid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubleAppartements"]) ? $context["meubleAppartements"] : $this->getContext($context, "meubleAppartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["meubleAppartement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_show", array("id" => $this->getAttribute($context["meubleAppartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleAppartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleAppartement"], "appartId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleAppartement"], "meubleId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_show", array("id" => $this->getAttribute($context["meubleAppartement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_edit", array("id" => $this->getAttribute($context["meubleAppartement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meubleAppartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_new");
        echo "\">Create a new meubleAppartement</a>
        </li>
    </ul>
";
        
        $__internal_2b24561ead87572b206babbd34eae44952816a453293b6647435919543a2f2a8->leave($__internal_2b24561ead87572b206babbd34eae44952816a453293b6647435919543a2f2a8_prof);

    }

    public function getTemplateName()
    {
        return ":meubleappartement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Meubleappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Meubleid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for meubleAppartement in meubleAppartements %}
            <tr>
                <td><a href=\"{{ path('meubleappartement_show', { 'id': meubleAppartement.id }) }}\">{{ meubleAppartement.id }}</a></td>
                <td>{{ meubleAppartement.appartId }}</td>
                <td>{{ meubleAppartement.meubleId }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('meubleappartement_show', { 'id': meubleAppartement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('meubleappartement_edit', { 'id': meubleAppartement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('meubleappartement_new') }}\">Create a new meubleAppartement</a>
        </li>
    </ul>
{% endblock %}
", ":meubleappartement:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleappartement/index.html.twig");
    }
}
