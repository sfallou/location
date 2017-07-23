<?php

/* :contactresidence:index.html.twig */
class __TwigTemplate_c84b3f4e7ab004ffc443e5be3a77520f77fd1785fbee38949bde584d662f0a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactresidence:index.html.twig", 1);
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
        $__internal_50753ea4a46863074d227f44676e4c704a72f0be6bf3fb837802adba858431e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50753ea4a46863074d227f44676e4c704a72f0be6bf3fb837802adba858431e8->enter($__internal_50753ea4a46863074d227f44676e4c704a72f0be6bf3fb837802adba858431e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactresidence:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50753ea4a46863074d227f44676e4c704a72f0be6bf3fb837802adba858431e8->leave($__internal_50753ea4a46863074d227f44676e4c704a72f0be6bf3fb837802adba858431e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2d2aefc3ab337197abf9d845727ceea112491331745a488ab7c9bf647419288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d2aefc3ab337197abf9d845727ceea112491331745a488ab7c9bf647419288->enter($__internal_c2d2aefc3ab337197abf9d845727ceea112491331745a488ab7c9bf647419288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactresidences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Residenceid</th>
                <th>Contactid</th>
                <th>Contactcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactResidences"]) ? $context["contactResidences"] : $this->getContext($context, "contactResidences")));
        foreach ($context['_seq'] as $context["_key"] => $context["contactResidence"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_show", array("id" => $this->getAttribute($context["contactResidence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactResidence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactResidence"], "residenceId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactResidence"], "contactId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactResidence"], "contactComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_show", array("id" => $this->getAttribute($context["contactResidence"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_edit", array("id" => $this->getAttribute($context["contactResidence"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactResidence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_new");
        echo "\">Create a new contactResidence</a>
        </li>
    </ul>
";
        
        $__internal_c2d2aefc3ab337197abf9d845727ceea112491331745a488ab7c9bf647419288->leave($__internal_c2d2aefc3ab337197abf9d845727ceea112491331745a488ab7c9bf647419288_prof);

    }

    public function getTemplateName()
    {
        return ":contactresidence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contactresidences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Residenceid</th>
                <th>Contactid</th>
                <th>Contactcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contactResidence in contactResidences %}
            <tr>
                <td><a href=\"{{ path('contactresidence_show', { 'id': contactResidence.id }) }}\">{{ contactResidence.id }}</a></td>
                <td>{{ contactResidence.residenceId }}</td>
                <td>{{ contactResidence.contactId }}</td>
                <td>{{ contactResidence.contactComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('contactresidence_show', { 'id': contactResidence.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('contactresidence_edit', { 'id': contactResidence.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contactresidence_new') }}\">Create a new contactResidence</a>
        </li>
    </ul>
{% endblock %}
", ":contactresidence:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactresidence/index.html.twig");
    }
}
