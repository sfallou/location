<?php

/* :chargeappartement:show.html.twig */
class __TwigTemplate_d1a707cb3c9674bd03536edd9c9300a762e56539f61a54b209f0746961e1661c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chargeappartement:show.html.twig", 1);
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
        $__internal_d1971b85bd0bc093c7d69d4b124123a20e890ecefea05ac4fd97767100203a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1971b85bd0bc093c7d69d4b124123a20e890ecefea05ac4fd97767100203a48->enter($__internal_d1971b85bd0bc093c7d69d4b124123a20e890ecefea05ac4fd97767100203a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chargeappartement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1971b85bd0bc093c7d69d4b124123a20e890ecefea05ac4fd97767100203a48->leave($__internal_d1971b85bd0bc093c7d69d4b124123a20e890ecefea05ac4fd97767100203a48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a581b1345194faa6f9ff9b5e975cedcbe7d35a556958983eaf98da0e404d0c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a581b1345194faa6f9ff9b5e975cedcbe7d35a556958983eaf98da0e404d0c5b->enter($__internal_a581b1345194faa6f9ff9b5e975cedcbe7d35a556958983eaf98da0e404d0c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chargeappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "appartId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargeid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargeamount</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeAmount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chargedate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Chargestate</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeState", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "chargeComment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargeappartement_edit", array("id" => $this->getAttribute((isset($context["chargeAppartement"]) ? $context["chargeAppartement"] : $this->getContext($context, "chargeAppartement")), "id", array()))), "html", null, true);
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
        
        $__internal_a581b1345194faa6f9ff9b5e975cedcbe7d35a556958983eaf98da0e404d0c5b->leave($__internal_a581b1345194faa6f9ff9b5e975cedcbe7d35a556958983eaf98da0e404d0c5b_prof);

    }

    public function getTemplateName()
    {
        return ":chargeappartement:show.html.twig";
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
    <h1>Chargeappartement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chargeAppartement.id }}</td>
            </tr>
            <tr>
                <th>Appartid</th>
                <td>{{ chargeAppartement.appartId }}</td>
            </tr>
            <tr>
                <th>Chargeid</th>
                <td>{{ chargeAppartement.chargeId }}</td>
            </tr>
            <tr>
                <th>Chargeamount</th>
                <td>{{ chargeAppartement.chargeAmount }}</td>
            </tr>
            <tr>
                <th>Chargedate</th>
                <td>{% if chargeAppartement.chargeDate %}{{ chargeAppartement.chargeDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Chargestate</th>
                <td>{% if chargeAppartement.chargeState %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Chargecomment</th>
                <td>{{ chargeAppartement.chargeComment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chargeappartement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('chargeappartement_edit', { 'id': chargeAppartement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":chargeappartement:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/chargeappartement/show.html.twig");
    }
}