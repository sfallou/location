<?php

/* :rentuserroom:show.html.twig */
class __TwigTemplate_b399622b2e131a917f1568a65c479a98c3ef35d84a6ca2922e929f55f2ccc583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rentuserroom:show.html.twig", 1);
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
        $__internal_50c59e59bd77a11ffc75d106b86012fd9362f22b11949eb592d333a4b6ef331d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c59e59bd77a11ffc75d106b86012fd9362f22b11949eb592d333a4b6ef331d->enter($__internal_50c59e59bd77a11ffc75d106b86012fd9362f22b11949eb592d333a4b6ef331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rentuserroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c59e59bd77a11ffc75d106b86012fd9362f22b11949eb592d333a4b6ef331d->leave($__internal_50c59e59bd77a11ffc75d106b86012fd9362f22b11949eb592d333a4b6ef331d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_740beafb5b754a1fa3288ff3f4612f4152d66d589a9695cde17720ec2a51a91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740beafb5b754a1fa3288ff3f4612f4152d66d589a9695cde17720ec2a51a91a->enter($__internal_740beafb5b754a1fa3288ff3f4612f4152d66d589a9695cde17720ec2a51a91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rentuserroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userroomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "userRoomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rentamount</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentAmount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rentdate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Rentdate1</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate1", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate1", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Rentdate2</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate2", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "rentDate2", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rentuserroom_edit", array("id" => $this->getAttribute((isset($context["rentUserRoom"]) ? $context["rentUserRoom"] : $this->getContext($context, "rentUserRoom")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_740beafb5b754a1fa3288ff3f4612f4152d66d589a9695cde17720ec2a51a91a->leave($__internal_740beafb5b754a1fa3288ff3f4612f4152d66d589a9695cde17720ec2a51a91a_prof);

    }

    public function getTemplateName()
    {
        return ":rentuserroom:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  111 => 43,  105 => 40,  99 => 37,  87 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Rentuserroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ rentUserRoom.id }}</td>
            </tr>
            <tr>
                <th>Userroomid</th>
                <td>{{ rentUserRoom.userRoomId }}</td>
            </tr>
            <tr>
                <th>Rentamount</th>
                <td>{{ rentUserRoom.rentAmount }}</td>
            </tr>
            <tr>
                <th>Rentdate</th>
                <td>{% if rentUserRoom.rentDate %}{{ rentUserRoom.rentDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Rentdate1</th>
                <td>{% if rentUserRoom.rentDate1 %}{{ rentUserRoom.rentDate1|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Rentdate2</th>
                <td>{% if rentUserRoom.rentDate2 %}{{ rentUserRoom.rentDate2|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rentuserroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rentuserroom_edit', { 'id': rentUserRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rentuserroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/rentuserroom/show.html.twig");
    }
}
