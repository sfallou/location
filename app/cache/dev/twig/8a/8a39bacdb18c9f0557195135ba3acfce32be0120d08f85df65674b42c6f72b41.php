<?php

/* :documentappartement:show.html.twig */
class __TwigTemplate_777bb4346b90ff25c3c9dfdf2be9bbbad9329d886495dc1fde4f63c2176bda52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentappartement:show.html.twig", 1);
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
        $__internal_7fe3f55a42240301e96c70a3ff41e2e1f871f14c3bf9e917d10ce116e7d4d6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe3f55a42240301e96c70a3ff41e2e1f871f14c3bf9e917d10ce116e7d4d6e9->enter($__internal_7fe3f55a42240301e96c70a3ff41e2e1f871f14c3bf9e917d10ce116e7d4d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentappartement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe3f55a42240301e96c70a3ff41e2e1f871f14c3bf9e917d10ce116e7d4d6e9->leave($__internal_7fe3f55a42240301e96c70a3ff41e2e1f871f14c3bf9e917d10ce116e7d4d6e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7bad4c5e7794947685cb0a57b4ee8539c60cca6f183f3577ed2b5538d950ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bad4c5e7794947685cb0a57b4ee8539c60cca6f183f3577ed2b5538d950ecc->enter($__internal_b7bad4c5e7794947685cb0a57b4ee8539c60cca6f183f3577ed2b5538d950ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "appartId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documentid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "documentId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documentdate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "documentDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "documentDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Documentcomment</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "documentComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentappartement_edit", array("id" => $this->getAttribute((isset($context["documentAppartement"]) ? $context["documentAppartement"] : $this->getContext($context, "documentAppartement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b7bad4c5e7794947685cb0a57b4ee8539c60cca6f183f3577ed2b5538d950ecc->leave($__internal_b7bad4c5e7794947685cb0a57b4ee8539c60cca6f183f3577ed2b5538d950ecc_prof);

    }

    public function getTemplateName()
    {
        return ":documentappartement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  94 => 36,  88 => 33,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Documentappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ documentAppartement.id }}</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>{{ documentAppartement.appartId }}</td>
            </tr>
            <tr>
                <th>Documentid</th>
                <td>{{ documentAppartement.documentId }}</td>
            </tr>
            <tr>
                <th>Documentdate</th>
                <td>{% if documentAppartement.documentDate %}{{ documentAppartement.documentDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Documentcomment</th>
                <td>{{ documentAppartement.documentComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('documentappartement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('documentappartement_edit', { 'id': documentAppartement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":documentappartement:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentappartement/show.html.twig");
    }
}
