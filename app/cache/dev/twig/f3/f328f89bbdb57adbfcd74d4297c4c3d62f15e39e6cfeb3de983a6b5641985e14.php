<?php

/* :meubleappartement:show.html.twig */
class __TwigTemplate_795a4ebe5178e3b923e3997adcdcf600e278986064f833e52800226f1248cb13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleappartement:show.html.twig", 1);
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
        $__internal_1f1c9b7e0dba11edc2ee29b873e14f48b78b88464ae2bd1901fd7faae31847aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1c9b7e0dba11edc2ee29b873e14f48b78b88464ae2bd1901fd7faae31847aa->enter($__internal_1f1c9b7e0dba11edc2ee29b873e14f48b78b88464ae2bd1901fd7faae31847aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleappartement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f1c9b7e0dba11edc2ee29b873e14f48b78b88464ae2bd1901fd7faae31847aa->leave($__internal_1f1c9b7e0dba11edc2ee29b873e14f48b78b88464ae2bd1901fd7faae31847aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a1b5d957a7cfeb15db35f4658a4beb016809adcef7a46725d160c9866cd824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a1b5d957a7cfeb15db35f4658a4beb016809adcef7a46725d160c9866cd824->enter($__internal_f3a1b5d957a7cfeb15db35f4658a4beb016809adcef7a46725d160c9866cd824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meubleappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleAppartement"]) ? $context["meubleAppartement"] : $this->getContext($context, "meubleAppartement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleAppartement"]) ? $context["meubleAppartement"] : $this->getContext($context, "meubleAppartement")), "appartId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Meubleid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meubleAppartement"]) ? $context["meubleAppartement"] : $this->getContext($context, "meubleAppartement")), "meubleId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleappartement_edit", array("id" => $this->getAttribute((isset($context["meubleAppartement"]) ? $context["meubleAppartement"] : $this->getContext($context, "meubleAppartement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f3a1b5d957a7cfeb15db35f4658a4beb016809adcef7a46725d160c9866cd824->leave($__internal_f3a1b5d957a7cfeb15db35f4658a4beb016809adcef7a46725d160c9866cd824_prof);

    }

    public function getTemplateName()
    {
        return ":meubleappartement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Meubleappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ meubleAppartement.id }}</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>{{ meubleAppartement.appartId }}</td>
            </tr>
            <tr>
                <th>Meubleid</th>
                <td>{{ meubleAppartement.meubleId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('meubleappartement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('meubleappartement_edit', { 'id': meubleAppartement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":meubleappartement:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleappartement/show.html.twig");
    }
}
