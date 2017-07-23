<?php

/* :documentuserroom:index.html.twig */
class __TwigTemplate_f55d92d3250d1abb0fcc14d3fdfc83d5a91361dbf33fd2418170e3a31136cb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":documentuserroom:index.html.twig", 1);
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
        $__internal_0e76d55adcee36cabc83d3078628b8c4dd4e1162619aaded3dfe52ac24606616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e76d55adcee36cabc83d3078628b8c4dd4e1162619aaded3dfe52ac24606616->enter($__internal_0e76d55adcee36cabc83d3078628b8c4dd4e1162619aaded3dfe52ac24606616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":documentuserroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e76d55adcee36cabc83d3078628b8c4dd4e1162619aaded3dfe52ac24606616->leave($__internal_0e76d55adcee36cabc83d3078628b8c4dd4e1162619aaded3dfe52ac24606616_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef3638a7914fb9cd25181d4f88edefe3d964af4e621bf6dc7693ccc0f3cd1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef3638a7914fb9cd25181d4f88edefe3d964af4e621bf6dc7693ccc0f3cd1b6->enter($__internal_7ef3638a7914fb9cd25181d4f88edefe3d964af4e621bf6dc7693ccc0f3cd1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Documentuserrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Userroomid</th>
                <th>Documentid</th>
                <th>Documentdate</th>
                <th>Documentcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentUserRooms"]) ? $context["documentUserRooms"] : $this->getContext($context, "documentUserRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["documentUserRoom"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_show", array("id" => $this->getAttribute($context["documentUserRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentUserRoom"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentUserRoom"], "userRoomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentUserRoom"], "documentId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["documentUserRoom"], "documentDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["documentUserRoom"], "documentDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["documentUserRoom"], "documentComment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_show", array("id" => $this->getAttribute($context["documentUserRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_edit", array("id" => $this->getAttribute($context["documentUserRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentUserRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("documentuserroom_new");
        echo "\">Create a new documentUserRoom</a>
        </li>
    </ul>
";
        
        $__internal_7ef3638a7914fb9cd25181d4f88edefe3d964af4e621bf6dc7693ccc0f3cd1b6->leave($__internal_7ef3638a7914fb9cd25181d4f88edefe3d964af4e621bf6dc7693ccc0f3cd1b6_prof);

    }

    public function getTemplateName()
    {
        return ":documentuserroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  108 => 37,  96 => 31,  90 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Documentuserrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Userroomid</th>
                <th>Documentid</th>
                <th>Documentdate</th>
                <th>Documentcomment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for documentUserRoom in documentUserRooms %}
            <tr>
                <td><a href=\"{{ path('documentuserroom_show', { 'id': documentUserRoom.id }) }}\">{{ documentUserRoom.id }}</a></td>
                <td>{{ documentUserRoom.userRoomId }}</td>
                <td>{{ documentUserRoom.documentId }}</td>
                <td>{% if documentUserRoom.documentDate %}{{ documentUserRoom.documentDate|date('Y-m-d') }}{% endif %}</td>
                <td>{{ documentUserRoom.documentComment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('documentuserroom_show', { 'id': documentUserRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('documentuserroom_edit', { 'id': documentUserRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('documentuserroom_new') }}\">Create a new documentUserRoom</a>
        </li>
    </ul>
{% endblock %}
", ":documentuserroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/documentuserroom/index.html.twig");
    }
}
