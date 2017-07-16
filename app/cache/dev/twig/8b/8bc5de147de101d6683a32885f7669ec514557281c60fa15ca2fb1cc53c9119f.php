<?php

/* :chargeroom:show.html.twig */
class __TwigTemplate_b746663ade462b0ca96a98c6baea8dac2e7dfb6d4edf0071c13ee1dd8be76da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeroom:show.html.twig", 1);
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
        $__internal_435a6dc7ac5bcee1a97123d2ffc324f13f732da5bbda9f925d2c355867ab67c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435a6dc7ac5bcee1a97123d2ffc324f13f732da5bbda9f925d2c355867ab67c9->enter($__internal_435a6dc7ac5bcee1a97123d2ffc324f13f732da5bbda9f925d2c355867ab67c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435a6dc7ac5bcee1a97123d2ffc324f13f732da5bbda9f925d2c355867ab67c9->leave($__internal_435a6dc7ac5bcee1a97123d2ffc324f13f732da5bbda9f925d2c355867ab67c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e89e75ff46a16f54f19b8aef143f5d4e33d2aaf5af692488b6c52da76b8ebc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89e75ff46a16f54f19b8aef143f5d4e33d2aaf5af692488b6c52da76b8ebc60->enter($__internal_e89e75ff46a16f54f19b8aef143f5d4e33d2aaf5af692488b6c52da76b8ebc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargeroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "roomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargeid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargeamount</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeAmount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargedate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Chargestate</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeState", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Chargecomment</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "chargeComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeroom_edit", array("id" => $this->getAttribute((isset($context["chargeRoom"]) ? $context["chargeRoom"] : $this->getContext($context, "chargeRoom")), "id", array()))), "html", null, true);
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
        
        $__internal_e89e75ff46a16f54f19b8aef143f5d4e33d2aaf5af692488b6c52da76b8ebc60->leave($__internal_e89e75ff46a16f54f19b8aef143f5d4e33d2aaf5af692488b6c52da76b8ebc60_prof);

    }

    public function getTemplateName()
    {
        return ":chargeroom:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  96 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Chargeroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chargeRoom.id }}</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>{{ chargeRoom.roomId }}</td>
            </tr>
            <tr>
                <th>Chargeid</th>
                <td>{{ chargeRoom.chargeId }}</td>
            </tr>
            <tr>
                <th>Chargeamount</th>
                <td>{{ chargeRoom.chargeAmount }}</td>
            </tr>
            <tr>
                <th>Chargedate</th>
                <td>{% if chargeRoom.chargeDate %}{{ chargeRoom.chargeDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Chargestate</th>
                <td>{% if chargeRoom.chargeState %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Chargecomment</th>
                <td>{{ chargeRoom.chargeComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chargeroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('chargeroom_edit', { 'id': chargeRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":chargeroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeroom/show.html.twig");
    }
}
