<?php

/* :fixappartement:show.html.twig */
class __TwigTemplate_36235f09304d2fe659c6f1f7fa83c33022f492140d415a8fd537ef832b565d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixappartement:show.html.twig", 1);
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
        $__internal_2bfb0da231b6f91562b5d320c07576c7eecbb5aa7339cabb5ab3ab7a6a7e79a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfb0da231b6f91562b5d320c07576c7eecbb5aa7339cabb5ab3ab7a6a7e79a9->enter($__internal_2bfb0da231b6f91562b5d320c07576c7eecbb5aa7339cabb5ab3ab7a6a7e79a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixappartement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfb0da231b6f91562b5d320c07576c7eecbb5aa7339cabb5ab3ab7a6a7e79a9->leave($__internal_2bfb0da231b6f91562b5d320c07576c7eecbb5aa7339cabb5ab3ab7a6a7e79a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f31d8177449af9b55b74c203291b638132a6995a1f12bd596d5b31e441db14dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31d8177449af9b55b74c203291b638132a6995a1f12bd596d5b31e441db14dd->enter($__internal_f31d8177449af9b55b74c203291b638132a6995a1f12bd596d5b31e441db14dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "appartId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fixid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fixdate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fixstate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixState", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fixpriority</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixPriority", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fixcomment</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "fixComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixappartement_edit", array("id" => $this->getAttribute((isset($context["fixAppartement"]) ? $context["fixAppartement"] : $this->getContext($context, "fixAppartement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f31d8177449af9b55b74c203291b638132a6995a1f12bd596d5b31e441db14dd->leave($__internal_f31d8177449af9b55b74c203291b638132a6995a1f12bd596d5b31e441db14dd_prof);

    }

    public function getTemplateName()
    {
        return ":fixappartement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  122 => 47,  116 => 44,  110 => 41,  100 => 34,  89 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fixappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fixAppartement.id }}</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>{{ fixAppartement.appartId }}</td>
            </tr>
            <tr>
                <th>Fixid</th>
                <td>{{ fixAppartement.fixId }}</td>
            </tr>
            <tr>
                <th>Fixdate</th>
                <td>{% if fixAppartement.fixDate %}{{ fixAppartement.fixDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fixstate</th>
                <td>{% if fixAppartement.fixState %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Fixpriority</th>
                <td>{% if fixAppartement.fixPriority %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Fixcomment</th>
                <td>{{ fixAppartement.fixComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fixappartement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fixappartement_edit', { 'id': fixAppartement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":fixappartement:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixappartement/show.html.twig");
    }
}
