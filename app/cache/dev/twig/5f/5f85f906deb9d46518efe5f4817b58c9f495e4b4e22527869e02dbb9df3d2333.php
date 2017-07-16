<?php

/* :typecharge:index.html.twig */
class __TwigTemplate_0f95f0a040c48ac5d8449e2841abb61fef6db47fc92f9eb682834768a8b0b651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecharge:index.html.twig", 1);
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
        $__internal_1d70e88957b99417e8ac59ae033409ab4e273de3af81de8f3697aeb947390244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d70e88957b99417e8ac59ae033409ab4e273de3af81de8f3697aeb947390244->enter($__internal_1d70e88957b99417e8ac59ae033409ab4e273de3af81de8f3697aeb947390244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecharge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d70e88957b99417e8ac59ae033409ab4e273de3af81de8f3697aeb947390244->leave($__internal_1d70e88957b99417e8ac59ae033409ab4e273de3af81de8f3697aeb947390244_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2eba31960af0f75cf2c68eebd86083808b1ee45c797594785a83be5a1716ecc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eba31960af0f75cf2c68eebd86083808b1ee45c797594785a83be5a1716ecc8->enter($__internal_2eba31960af0f75cf2c68eebd86083808b1ee45c797594785a83be5a1716ecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
        <!-- /.box-header -->
        <div class=\"box-body\">
        <table  class=\"table table-bordered table-striped\">        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
         ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeCharges"]) ? $context["typeCharges"] : $this->getContext($context, "typeCharges")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeCharge"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecharge_show", array("id" => $this->getAttribute($context["typeCharge"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeCharge"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeCharge"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecharge_show", array("id" => $this->getAttribute($context["typeCharge"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecharge_edit", array("id" => $this->getAttribute($context["typeCharge"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeCharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecharge_new");
        echo "\">Create a new typeCharge</a>
        </li>
    </ul>
";
        
        $__internal_2eba31960af0f75cf2c68eebd86083808b1ee45c797594785a83be5a1716ecc8->leave($__internal_2eba31960af0f75cf2c68eebd86083808b1ee45c797594785a83be5a1716ecc8_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b4107e6f4c72ac8c2d985ec19b0a69183243e3c495eb553359ea1abc22736098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4107e6f4c72ac8c2d985ec19b0a69183243e3c495eb553359ea1abc22736098->enter($__internal_b4107e6f4c72ac8c2d985ec19b0a69183243e3c495eb553359ea1abc22736098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_b4107e6f4c72ac8c2d985ec19b0a69183243e3c495eb553359ea1abc22736098->leave($__internal_b4107e6f4c72ac8c2d985ec19b0a69183243e3c495eb553359ea1abc22736098_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_772d23a8b4237d5395fff6142df8d8968bb4c18a0fa4e4b00148503fcdf8e24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772d23a8b4237d5395fff6142df8d8968bb4c18a0fa4e4b00148503fcdf8e24b->enter($__internal_772d23a8b4237d5395fff6142df8d8968bb4c18a0fa4e4b00148503fcdf8e24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_772d23a8b4237d5395fff6142df8d8968bb4c18a0fa4e4b00148503fcdf8e24b->leave($__internal_772d23a8b4237d5395fff6142df8d8968bb4c18a0fa4e4b00148503fcdf8e24b_prof);

    }

    public function getTemplateName()
    {
        return ":typecharge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  110 => 40,  99 => 35,  92 => 30,  79 => 23,  75 => 22,  70 => 20,  64 => 19,  61 => 18,  57 => 17,  42 => 4,  36 => 3,  11 => 1,);
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
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
         {% for typeCharge in typeCharges %}
            <tr>
                <td><a href=\"{{ path('typecharge_show', { 'id': typeCharge.id }) }}\">{{ typeCharge.id }}</a></td>
                <td>{{ typeCharge.name }}</td>
                <td>
                <a class=\"btn btn-primary\" href=\"{{ path('typecharge_show', { 'id': typeCharge.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('typecharge_edit', { 'id': typeCharge.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"{{ path('typecharge_new') }}\">Create a new typeCharge</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Type Charge {% endblock %}
{% block page_subtitle %} liste {% endblock %}


", ":typecharge:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/index.html.twig");
    }
}
