<?php

/* :contactappartement:index.html.twig */
class __TwigTemplate_976fc5645537e1a1738635a9db6db6d549c687876bafc46ff0c4d0d8777998a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactappartement:index.html.twig", 1);
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
        $__internal_627a75a60163dbdaa8f45b280f5a8fbfa903bb6d1acc397d9be4df3c6f29e636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627a75a60163dbdaa8f45b280f5a8fbfa903bb6d1acc397d9be4df3c6f29e636->enter($__internal_627a75a60163dbdaa8f45b280f5a8fbfa903bb6d1acc397d9be4df3c6f29e636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactappartement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627a75a60163dbdaa8f45b280f5a8fbfa903bb6d1acc397d9be4df3c6f29e636->leave($__internal_627a75a60163dbdaa8f45b280f5a8fbfa903bb6d1acc397d9be4df3c6f29e636_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e132cc0fe1ecb218b672c4f933b4233059cbc506227f652e7f37d759ffdaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e132cc0fe1ecb218b672c4f933b4233059cbc506227f652e7f37d759ffdaaa->enter($__internal_62e132cc0fe1ecb218b672c4f933b4233059cbc506227f652e7f37d759ffdaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Contactid</th>
                <th>Contactcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactAppartements"]) ? $context["contactAppartements"] : $this->getContext($context, "contactAppartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["contactAppartement"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_show", array("id" => $this->getAttribute($context["contactAppartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactAppartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactAppartement"], "appartId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactAppartement"], "contactId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactAppartement"], "contactComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_show", array("id" => $this->getAttribute($context["contactAppartement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_edit", array("id" => $this->getAttribute($context["contactAppartement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactAppartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_new");
        echo "\">Create a new contactAppartement</a>
        </li>
    </ul>
";
        
        $__internal_62e132cc0fe1ecb218b672c4f933b4233059cbc506227f652e7f37d759ffdaaa->leave($__internal_62e132cc0fe1ecb218b672c4f933b4233059cbc506227f652e7f37d759ffdaaa_prof);

    }

    public function getTemplateName()
    {
        return ":contactappartement:index.html.twig";
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
    <h1>Contactappartements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Appartid</th>
                <th>Contactid</th>
                <th>Contactcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contactAppartement in contactAppartements %}
            <tr>
                <td><a href=\"{{ path('contactappartement_show', { 'id': contactAppartement.id }) }}\">{{ contactAppartement.id }}</a></td>
                <td>{{ contactAppartement.appartId }}</td>
                <td>{{ contactAppartement.contactId }}</td>
                <td>{{ contactAppartement.contactComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('contactappartement_show', { 'id': contactAppartement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('contactappartement_edit', { 'id': contactAppartement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contactappartement_new') }}\">Create a new contactAppartement</a>
        </li>
    </ul>
{% endblock %}
", ":contactappartement:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactappartement/index.html.twig");
    }
}
