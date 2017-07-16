<?php

/* typecharge/index.html.twig */
class __TwigTemplate_fee8d891ccca3d274338ee72061a25b189b6b95065117f06750c470660ff06bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typecharge/index.html.twig", 1);
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
        $__internal_f2c5e2c85f2b7cf2fbadadfc4ab162ea1cd41b0566cae17073c9d8edd0f35538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c5e2c85f2b7cf2fbadadfc4ab162ea1cd41b0566cae17073c9d8edd0f35538->enter($__internal_f2c5e2c85f2b7cf2fbadadfc4ab162ea1cd41b0566cae17073c9d8edd0f35538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecharge/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c5e2c85f2b7cf2fbadadfc4ab162ea1cd41b0566cae17073c9d8edd0f35538->leave($__internal_f2c5e2c85f2b7cf2fbadadfc4ab162ea1cd41b0566cae17073c9d8edd0f35538_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6ca9585da7f4f6428ad94d5dfa13fb29ccf17159dcb131198c283c789325ac55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca9585da7f4f6428ad94d5dfa13fb29ccf17159dcb131198c283c789325ac55->enter($__internal_6ca9585da7f4f6428ad94d5dfa13fb29ccf17159dcb131198c283c789325ac55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6ca9585da7f4f6428ad94d5dfa13fb29ccf17159dcb131198c283c789325ac55->leave($__internal_6ca9585da7f4f6428ad94d5dfa13fb29ccf17159dcb131198c283c789325ac55_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f8ae36367d2f7284e3b98ae2efb268326e2381ba71478417f0cd3336f15d0931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ae36367d2f7284e3b98ae2efb268326e2381ba71478417f0cd3336f15d0931->enter($__internal_f8ae36367d2f7284e3b98ae2efb268326e2381ba71478417f0cd3336f15d0931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_f8ae36367d2f7284e3b98ae2efb268326e2381ba71478417f0cd3336f15d0931->leave($__internal_f8ae36367d2f7284e3b98ae2efb268326e2381ba71478417f0cd3336f15d0931_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bde9b3e5d21ccdebaa9add5d3b8e4dd79387404f2c97e8d8d63b72be0742d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde9b3e5d21ccdebaa9add5d3b8e4dd79387404f2c97e8d8d63b72be0742d9a5->enter($__internal_bde9b3e5d21ccdebaa9add5d3b8e4dd79387404f2c97e8d8d63b72be0742d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_bde9b3e5d21ccdebaa9add5d3b8e4dd79387404f2c97e8d8d63b72be0742d9a5->leave($__internal_bde9b3e5d21ccdebaa9add5d3b8e4dd79387404f2c97e8d8d63b72be0742d9a5_prof);

    }

    public function getTemplateName()
    {
        return "typecharge/index.html.twig";
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


", "typecharge/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/index.html.twig");
    }
}
