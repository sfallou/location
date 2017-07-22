<?php

/* appartement/index.html.twig */
class __TwigTemplate_da9197a57b6e3a6b4cde72350629b8377a21d03b19afc27c77943daceac75532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "appartement/index.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be1de227fa6735187744b115fbc0317c1a30e0e6e981be70a11cb9b940385b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1de227fa6735187744b115fbc0317c1a30e0e6e981be70a11cb9b940385b14->enter($__internal_be1de227fa6735187744b115fbc0317c1a30e0e6e981be70a11cb9b940385b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appartement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1de227fa6735187744b115fbc0317c1a30e0e6e981be70a11cb9b940385b14->leave($__internal_be1de227fa6735187744b115fbc0317c1a30e0e6e981be70a11cb9b940385b14_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_871dac56a851d3a99277b24cfd3659182b937b77e6603d18bab9b5d73c03133e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871dac56a851d3a99277b24cfd3659182b937b77e6603d18bab9b5d73c03133e->enter($__internal_871dac56a851d3a99277b24cfd3659182b937b77e6603d18bab9b5d73c03133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Surface</th>
                <th>Wifi</th>
                <th>Référent</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appartements"]) ? $context["appartements"] : $this->getContext($context, "appartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute($context["appartement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "surface", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "wificode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "contactappart", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute($context["appartement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_edit", array("id" => $this->getAttribute($context["appartement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_new");
        echo "\">Create a new appartement</a>
        </li>
    </ul>
";
        
        $__internal_871dac56a851d3a99277b24cfd3659182b937b77e6603d18bab9b5d73c03133e->leave($__internal_871dac56a851d3a99277b24cfd3659182b937b77e6603d18bab9b5d73c03133e_prof);

    }

    // line 43
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_80301c50e1bbfa957d18d80cbe0bbc8c7c85003fae2c5ec474b8927fb8362d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80301c50e1bbfa957d18d80cbe0bbc8c7c85003fae2c5ec474b8927fb8362d2e->enter($__internal_80301c50e1bbfa957d18d80cbe0bbc8c7c85003fae2c5ec474b8927fb8362d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartements ";
        
        $__internal_80301c50e1bbfa957d18d80cbe0bbc8c7c85003fae2c5ec474b8927fb8362d2e->leave($__internal_80301c50e1bbfa957d18d80cbe0bbc8c7c85003fae2c5ec474b8927fb8362d2e_prof);

    }

    // line 44
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c345f23b138d6338d870e787d445f1b20fccdf057e9025aed0a7f56a8caf0e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c345f23b138d6338d870e787d445f1b20fccdf057e9025aed0a7f56a8caf0e0d->enter($__internal_c345f23b138d6338d870e787d445f1b20fccdf057e9025aed0a7f56a8caf0e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_c345f23b138d6338d870e787d445f1b20fccdf057e9025aed0a7f56a8caf0e0d->leave($__internal_c345f23b138d6338d870e787d445f1b20fccdf057e9025aed0a7f56a8caf0e0d_prof);

    }

    public function getTemplateName()
    {
        return "appartement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  123 => 43,  112 => 39,  105 => 34,  94 => 29,  90 => 28,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  67 => 22,  64 => 21,  60 => 20,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Surface</th>
                <th>Wifi</th>
                <th>Référent</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for appartement in appartements %}
            <tr>
                <td><a href=\"{{ path('appartement_show', { 'id': appartement.id }) }}\">{{ appartement.id }}</a></td>
                <td>{{ appartement.adresse }}</td>
                <td>{{ appartement.surface }}</td>
                <td>{{ appartement.wificode }}</td>
                <td>{{ appartement.contactappart }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('appartement_show', { 'id': appartement.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('appartement_edit', { 'id': appartement.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('appartement_new') }}\">Create a new appartement</a>
        </li>
    </ul>
{% endblock %}
{% block page_title %} Appartements {% endblock %}
{% block page_subtitle %} liste {% endblock %}
", "appartement/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/appartement/index.html.twig");
    }
}
