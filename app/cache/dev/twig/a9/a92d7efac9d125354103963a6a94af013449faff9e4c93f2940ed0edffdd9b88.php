<?php

/* :contactresidence:show.html.twig */
class __TwigTemplate_7358d2bf31c11c6714380025982f1ae1cf468027d71dd76979a21338750513c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contactresidence:show.html.twig", 1);
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
        $__internal_52ba9612d876b6a1a727d28d701b6b374ae7691fc19ea8ddbbec170b741e8b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ba9612d876b6a1a727d28d701b6b374ae7691fc19ea8ddbbec170b741e8b4d->enter($__internal_52ba9612d876b6a1a727d28d701b6b374ae7691fc19ea8ddbbec170b741e8b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contactresidence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ba9612d876b6a1a727d28d701b6b374ae7691fc19ea8ddbbec170b741e8b4d->leave($__internal_52ba9612d876b6a1a727d28d701b6b374ae7691fc19ea8ddbbec170b741e8b4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_facd03fdaffc367055162c64d3306ef3311fcb81347e583f8af9c719152e4dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facd03fdaffc367055162c64d3306ef3311fcb81347e583f8af9c719152e4dad->enter($__internal_facd03fdaffc367055162c64d3306ef3311fcb81347e583f8af9c719152e4dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contactresidence</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactResidence"]) ? $context["contactResidence"] : $this->getContext($context, "contactResidence")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Residenceid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactResidence"]) ? $context["contactResidence"] : $this->getContext($context, "contactResidence")), "residenceId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactResidence"]) ? $context["contactResidence"] : $this->getContext($context, "contactResidence")), "contactId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactcomment</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactResidence"]) ? $context["contactResidence"] : $this->getContext($context, "contactResidence")), "contactComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactresidence_edit", array("id" => $this->getAttribute((isset($context["contactResidence"]) ? $context["contactResidence"] : $this->getContext($context, "contactResidence")), "id", array()))), "html", null, true);
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
        
        $__internal_facd03fdaffc367055162c64d3306ef3311fcb81347e583f8af9c719152e4dad->leave($__internal_facd03fdaffc367055162c64d3306ef3311fcb81347e583f8af9c719152e4dad_prof);

    }

    public function getTemplateName()
    {
        return ":contactresidence:show.html.twig";
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
    <h1>Contactresidence</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contactResidence.id }}</td>
            </tr>
            <tr>
                <th>Residenceid</th>
                <td>{{ contactResidence.residenceId }}</td>
            </tr>
            <tr>
                <th>Contactid</th>
                <td>{{ contactResidence.contactId }}</td>
            </tr>
            <tr>
                <th>Contactcomment</th>
                <td>{{ contactResidence.contactComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contactresidence_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('contactresidence_edit', { 'id': contactResidence.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contactresidence:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contactresidence/show.html.twig");
    }
}
