<?php

/* :userroom:index.html.twig */
class __TwigTemplate_03633f7216b3d36e8c01ffe4fb9b257fd4094a140f6acadfcfa7874ac5667a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userroom:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21232be356685c6aa4f638c16a3585689b9077e534969ee2c42d6d85f13191c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21232be356685c6aa4f638c16a3585689b9077e534969ee2c42d6d85f13191c5->enter($__internal_21232be356685c6aa4f638c16a3585689b9077e534969ee2c42d6d85f13191c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userroom:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21232be356685c6aa4f638c16a3585689b9077e534969ee2c42d6d85f13191c5->leave($__internal_21232be356685c6aa4f638c16a3585689b9077e534969ee2c42d6d85f13191c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2c419d789cd3553e9731738f7f2bd45c00a62becb9c16608badf9ecc086297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2c419d789cd3553e9731738f7f2bd45c00a62becb9c16608badf9ecc086297->enter($__internal_ea2c419d789cd3553e9731738f7f2bd45c00a62becb9c16608badf9ecc086297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Userid</th>
                <th>Roomid</th>
                <th>Userroomdatein</th>
                <th>Userroomdateout</th>
                <th>Userroomrent</th>
                <th>Userroomguarantee</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userRooms"]) ? $context["userRooms"] : $this->getContext($context, "userRooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["userRoom"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_show", array("id" => $this->getAttribute($context["userRoom"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userRoom"], "userId", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["userRoom"], "roomId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["userRoom"], "userRoomDateIn", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userRoom"], "userRoomDateIn", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["userRoom"], "userRoomDateOut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userRoom"], "userRoomDateOut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["userRoom"], "userRoomRent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["userRoom"], "userRoomGuarantee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["userRoom"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_show", array("id" => $this->getAttribute($context["userRoom"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_edit", array("id" => $this->getAttribute($context["userRoom"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_new");
        echo "\">Create a new userRoom</a>
        </li>
    </ul>
";
        
        $__internal_ea2c419d789cd3553e9731738f7f2bd45c00a62becb9c16608badf9ecc086297->leave($__internal_ea2c419d789cd3553e9731738f7f2bd45c00a62becb9c16608badf9ecc086297_prof);

    }

    // line 50
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c8fe4ba5151644108c121df12f74bbbff55afc2d55b16ee77a4a4a43e1db3e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fe4ba5151644108c121df12f74bbbff55afc2d55b16ee77a4a4a43e1db3e0e->enter($__internal_c8fe4ba5151644108c121df12f74bbbff55afc2d55b16ee77a4a4a43e1db3e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " User Room ";
        
        $__internal_c8fe4ba5151644108c121df12f74bbbff55afc2d55b16ee77a4a4a43e1db3e0e->leave($__internal_c8fe4ba5151644108c121df12f74bbbff55afc2d55b16ee77a4a4a43e1db3e0e_prof);

    }

    // line 51
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4d0ae5b46c3ca9c1786cfedc67b436245c2f1b8562f424be5efbdf7c21718698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0ae5b46c3ca9c1786cfedc67b436245c2f1b8562f424be5efbdf7c21718698->enter($__internal_4d0ae5b46c3ca9c1786cfedc67b436245c2f1b8562f424be5efbdf7c21718698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_4d0ae5b46c3ca9c1786cfedc67b436245c2f1b8562f424be5efbdf7c21718698->leave($__internal_4d0ae5b46c3ca9c1786cfedc67b436245c2f1b8562f424be5efbdf7c21718698_prof);

    }

    public function getTemplateName()
    {
        return ":userroom:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  140 => 50,  129 => 46,  122 => 41,  110 => 35,  104 => 32,  97 => 28,  93 => 27,  89 => 26,  83 => 25,  77 => 24,  73 => 23,  67 => 22,  64 => 21,  60 => 20,  42 => 4,  36 => 3,  11 => 1,);
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
    <h1>Userrooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Userid</th>
                <th>Roomid</th>
                <th>Userroomdatein</th>
                <th>Userroomdateout</th>
                <th>Userroomrent</th>
                <th>Userroomguarantee</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for userRoom in userRooms %}
            <tr>
                <td><a href=\"{{ path('userroom_show', { 'id': userRoom.id }) }}\">{{ userRoom.userId }}</a></td>
                <td>{{ userRoom.roomId }}</td>
                <td>{% if userRoom.userRoomDateIn %}{{ userRoom.userRoomDateIn|date('Y-m-d') }}{% endif %}</td>
                <td>{% if userRoom.userRoomDateOut %}{{ userRoom.userRoomDateOut|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ userRoom.userRoomRent }}</td>
                <td>{{ userRoom.userRoomGuarantee }}</td>
                <td>{{ userRoom.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('userroom_show', { 'id': userRoom.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('userroom_edit', { 'id': userRoom.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('userroom_new') }}\">Create a new userRoom</a>
        </li>
    </ul>
{% endblock %}
{% block page_title %} User Room {% endblock %}
{% block page_subtitle %} liste {% endblock %}
", ":userroom:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/userroom/index.html.twig");
    }
}