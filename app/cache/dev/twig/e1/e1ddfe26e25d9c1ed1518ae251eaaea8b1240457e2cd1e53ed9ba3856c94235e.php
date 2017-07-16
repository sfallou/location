<?php

/* :meubleroom:index.html.twig */
class __TwigTemplate_7a9129652ed73ad0109560347bcf90841ccc60ec9353ccda257ef29a06428a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":meubleroom:index.html.twig", 1);
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
        $__internal_ee547a0da47e7a7cc7d20f1e7aa75bcaf37bdb98b10692d1d94fd67ee6d95832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee547a0da47e7a7cc7d20f1e7aa75bcaf37bdb98b10692d1d94fd67ee6d95832->enter($__internal_ee547a0da47e7a7cc7d20f1e7aa75bcaf37bdb98b10692d1d94fd67ee6d95832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meubleroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee547a0da47e7a7cc7d20f1e7aa75bcaf37bdb98b10692d1d94fd67ee6d95832->leave($__internal_ee547a0da47e7a7cc7d20f1e7aa75bcaf37bdb98b10692d1d94fd67ee6d95832_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca534fa3c4d5d7ecfd31723ab75205b87590c2fc28d3b5e3c231fb0ac87dddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca534fa3c4d5d7ecfd31723ab75205b87590c2fc28d3b5e3c231fb0ac87dddd->enter($__internal_1ca534fa3c4d5d7ecfd31723ab75205b87590c2fc28d3b5e3c231fb0ac87dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Meublerooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Meubleid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubleRooms"]) ? $context["meubleRooms"] : $this->getContext($context, "meubleRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["meubleRoom"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_show", array("id" => $this->getAttribute($context["meubleRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleRoom"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleRoom"], "roomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["meubleRoom"], "meubleId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_show", array("id" => $this->getAttribute($context["meubleRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_edit", array("id" => $this->getAttribute($context["meubleRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meubleRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meubleroom_new");
        echo "\">Create a new meubleRoom</a>
        </li>
    </ul>
";
        
        $__internal_1ca534fa3c4d5d7ecfd31723ab75205b87590c2fc28d3b5e3c231fb0ac87dddd->leave($__internal_1ca534fa3c4d5d7ecfd31723ab75205b87590c2fc28d3b5e3c231fb0ac87dddd_prof);

    }

    public function getTemplateName()
    {
        return ":meubleroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Meublerooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Roomid</th>
                <th>Meubleid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for meubleRoom in meubleRooms %}
            <tr>
                <td><a href=\"{{ path('meubleroom_show', { 'id': meubleRoom.id }) }}\">{{ meubleRoom.id }}</a></td>
                <td>{{ meubleRoom.roomId }}</td>
                <td>{{ meubleRoom.meubleId }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('meubleroom_show', { 'id': meubleRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('meubleroom_edit', { 'id': meubleRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('meubleroom_new') }}\">Create a new meubleRoom</a>
        </li>
    </ul>
{% endblock %}
", ":meubleroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meubleroom/index.html.twig");
    }
}
