<?php

/* :fixroom:show.html.twig */
class __TwigTemplate_f648537345ffb425809e749d2d4443a3df756c29651f9321a2af07de48aa2a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":fixroom:show.html.twig", 1);
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
        $__internal_971284cf319d223a46e86e96f3c6d89ae17c0ec1d8440c91f55719b30c6429f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971284cf319d223a46e86e96f3c6d89ae17c0ec1d8440c91f55719b30c6429f5->enter($__internal_971284cf319d223a46e86e96f3c6d89ae17c0ec1d8440c91f55719b30c6429f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fixroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971284cf319d223a46e86e96f3c6d89ae17c0ec1d8440c91f55719b30c6429f5->leave($__internal_971284cf319d223a46e86e96f3c6d89ae17c0ec1d8440c91f55719b30c6429f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92b07630886a865ac241008031d6c396c04daf2053de0d947192046e8f82a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92b07630886a865ac241008031d6c396c04daf2053de0d947192046e8f82a37->enter($__internal_e92b07630886a865ac241008031d6c396c04daf2053de0d947192046e8f82a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fixroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "roomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fixid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fixdate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fixstate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixState", array())) {
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
        if ($this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixPriority", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "fixComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fixroom_edit", array("id" => $this->getAttribute((isset($context["fixRoom"]) ? $context["fixRoom"] : $this->getContext($context, "fixRoom")), "id", array()))), "html", null, true);
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
        
        $__internal_e92b07630886a865ac241008031d6c396c04daf2053de0d947192046e8f82a37->leave($__internal_e92b07630886a865ac241008031d6c396c04daf2053de0d947192046e8f82a37_prof);

    }

    public function getTemplateName()
    {
        return ":fixroom:show.html.twig";
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
    <h1>Fixroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fixRoom.id }}</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>{{ fixRoom.roomId }}</td>
            </tr>
            <tr>
                <th>Fixid</th>
                <td>{{ fixRoom.fixId }}</td>
            </tr>
            <tr>
                <th>Fixdate</th>
                <td>{% if fixRoom.fixDate %}{{ fixRoom.fixDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fixstate</th>
                <td>{% if fixRoom.fixState %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Fixpriority</th>
                <td>{% if fixRoom.fixPriority %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Fixcomment</th>
                <td>{{ fixRoom.fixComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fixroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fixroom_edit', { 'id': fixRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":fixroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/fixroom/show.html.twig");
    }
}
