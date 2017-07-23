<?php

/* :userroom:show.html.twig */
class __TwigTemplate_47b13437d6a768711cb690a2a9c35a66730e9fc623ebee12b1be4e9623498842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userroom:show.html.twig", 1);
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
        $__internal_50e973fc28965ad7648df2fb6ad5d6af2ece7eba10fdc2c0d78571423b0c5c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e973fc28965ad7648df2fb6ad5d6af2ece7eba10fdc2c0d78571423b0c5c6b->enter($__internal_50e973fc28965ad7648df2fb6ad5d6af2ece7eba10fdc2c0d78571423b0c5c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userroom:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e973fc28965ad7648df2fb6ad5d6af2ece7eba10fdc2c0d78571423b0c5c6b->leave($__internal_50e973fc28965ad7648df2fb6ad5d6af2ece7eba10fdc2c0d78571423b0c5c6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f99eb32fc167cdeb7006638d998a2a6b7435096fe95c7fcc48a03e46269ddf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99eb32fc167cdeb7006638d998a2a6b7435096fe95c7fcc48a03e46269ddf94->enter($__internal_f99eb32fc167cdeb7006638d998a2a6b7435096fe95c7fcc48a03e46269ddf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Userid</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "roomId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userroomdatein</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomDateIn", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomDateIn", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Userroomdateout</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomDateOut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomDateOut", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Userroomrent</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomRent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userroomguarantee</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "userRoomGuarantee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_edit", array("id" => $this->getAttribute((isset($context["userRoom"]) ? $context["userRoom"] : $this->getContext($context, "userRoom")), "id", array()))), "html", null, true);
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
        
        $__internal_f99eb32fc167cdeb7006638d998a2a6b7435096fe95c7fcc48a03e46269ddf94->leave($__internal_f99eb32fc167cdeb7006638d998a2a6b7435096fe95c7fcc48a03e46269ddf94_prof);

    }

    public function getTemplateName()
    {
        return ":userroom:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 47,  110 => 44,  104 => 41,  94 => 34,  87 => 30,  80 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userroom</h1>

    <table>
        <tbody>
            <tr>
                <th>Userid</th>
                <td>{{ userRoom.userId }}</td>
            </tr>
            <tr>
                <th>Roomid</th>
                <td>{{ userRoom.roomId }}</td>
            </tr>
            <tr>
                <th>Userroomdatein</th>
                <td>{% if userRoom.userRoomDateIn %}{{ userRoom.userRoomDateIn|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Userroomdateout</th>
                <td>{% if userRoom.userRoomDateOut %}{{ userRoom.userRoomDateOut|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Userroomrent</th>
                <td>{{ userRoom.userRoomRent }}</td>
            </tr>
            <tr>
                <th>Userroomguarantee</th>
                <td>{{ userRoom.userRoomGuarantee }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ userRoom.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('userroom_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('userroom_edit', { 'id': userRoom.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}

", ":userroom:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/userroom/show.html.twig");
    }
}
