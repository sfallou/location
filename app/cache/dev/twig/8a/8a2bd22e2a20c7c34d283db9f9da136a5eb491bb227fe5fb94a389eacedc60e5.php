<?php

/* :contactappartement:show.html.twig */
class __TwigTemplate_91836646f00b088a26395c6afb6a4f5513cb389fb02e76bcc96e778074fd735e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactappartement:show.html.twig", 1);
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
        $__internal_4fc5f023a6d4eb67f5e1c1bdba79eb8676aee6fd56bf812ce9061dd984b85c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc5f023a6d4eb67f5e1c1bdba79eb8676aee6fd56bf812ce9061dd984b85c46->enter($__internal_4fc5f023a6d4eb67f5e1c1bdba79eb8676aee6fd56bf812ce9061dd984b85c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactappartement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc5f023a6d4eb67f5e1c1bdba79eb8676aee6fd56bf812ce9061dd984b85c46->leave($__internal_4fc5f023a6d4eb67f5e1c1bdba79eb8676aee6fd56bf812ce9061dd984b85c46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6020e579f6b2d08a8be43bbdbed94e885de790e6145ff147b4a60123728551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6020e579f6b2d08a8be43bbdbed94e885de790e6145ff147b4a60123728551->enter($__internal_ca6020e579f6b2d08a8be43bbdbed94e885de790e6145ff147b4a60123728551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactAppartement"]) ? $context["contactAppartement"] : $this->getContext($context, "contactAppartement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactAppartement"]) ? $context["contactAppartement"] : $this->getContext($context, "contactAppartement")), "appartId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactAppartement"]) ? $context["contactAppartement"] : $this->getContext($context, "contactAppartement")), "contactId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactcomment</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactAppartement"]) ? $context["contactAppartement"] : $this->getContext($context, "contactAppartement")), "contactComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactappartement_edit", array("id" => $this->getAttribute((isset($context["contactAppartement"]) ? $context["contactAppartement"] : $this->getContext($context, "contactAppartement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ca6020e579f6b2d08a8be43bbdbed94e885de790e6145ff147b4a60123728551->leave($__internal_ca6020e579f6b2d08a8be43bbdbed94e885de790e6145ff147b4a60123728551_prof);

    }

    public function getTemplateName()
    {
        return ":contactappartement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Contactappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contactAppartement.id }}</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>{{ contactAppartement.appartId }}</td>
            </tr>
            <tr>
                <th>Contactid</th>
                <td>{{ contactAppartement.contactId }}</td>
            </tr>
            <tr>
                <th>Contactcomment</th>
                <td>{{ contactAppartement.contactComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contactappartement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('contactappartement_edit', { 'id': contactAppartement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contactappartement:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactappartement/show.html.twig");
    }
}
