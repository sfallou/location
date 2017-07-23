<?php

/* typefix/index.html.twig */
class __TwigTemplate_b1019f7095cb3b2bc2876846c46669e9a68d0af11dff7ae0c6a80ff94cfb17fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typefix/index.html.twig", 1);
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
        $__internal_1878e192c499d309c8f5f0e488c25cf2aa6789edd6db340fbbe1b4a45be89cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1878e192c499d309c8f5f0e488c25cf2aa6789edd6db340fbbe1b4a45be89cb8->enter($__internal_1878e192c499d309c8f5f0e488c25cf2aa6789edd6db340fbbe1b4a45be89cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typefix/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1878e192c499d309c8f5f0e488c25cf2aa6789edd6db340fbbe1b4a45be89cb8->leave($__internal_1878e192c499d309c8f5f0e488c25cf2aa6789edd6db340fbbe1b4a45be89cb8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cf5a1e741bb70c53486c18acd1684c1cdd7a475ba2a4038f10b04d006a328556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5a1e741bb70c53486c18acd1684c1cdd7a475ba2a4038f10b04d006a328556->enter($__internal_cf5a1e741bb70c53486c18acd1684c1cdd7a475ba2a4038f10b04d006a328556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["typeFixes"]) ? $context["typeFixes"] : $this->getContext($context, "typeFixes")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeFix"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typefix_show", array("id" => $this->getAttribute($context["typeFix"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeFix"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeFix"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typefix_show", array("id" => $this->getAttribute($context["typeFix"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typefix_edit", array("id" => $this->getAttribute($context["typeFix"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeFix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typefix_new");
        echo "\">Create a new typeFix</a>
        </li>
    </ul>
";
        
        $__internal_cf5a1e741bb70c53486c18acd1684c1cdd7a475ba2a4038f10b04d006a328556->leave($__internal_cf5a1e741bb70c53486c18acd1684c1cdd7a475ba2a4038f10b04d006a328556_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1fa21f92376c757b496516e8f10acd90e1f42d87d4e2bdc29d3d234744f91af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa21f92376c757b496516e8f10acd90e1f42d87d4e2bdc29d3d234744f91af3->enter($__internal_1fa21f92376c757b496516e8f10acd90e1f42d87d4e2bdc29d3d234744f91af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_1fa21f92376c757b496516e8f10acd90e1f42d87d4e2bdc29d3d234744f91af3->leave($__internal_1fa21f92376c757b496516e8f10acd90e1f42d87d4e2bdc29d3d234744f91af3_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a4bcdd9cc94bc68a537da42153c7c5feaa1f19a33e2df650afa9efe38aa5eb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bcdd9cc94bc68a537da42153c7c5feaa1f19a33e2df650afa9efe38aa5eb17->enter($__internal_a4bcdd9cc94bc68a537da42153c7c5feaa1f19a33e2df650afa9efe38aa5eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_a4bcdd9cc94bc68a537da42153c7c5feaa1f19a33e2df650afa9efe38aa5eb17->leave($__internal_a4bcdd9cc94bc68a537da42153c7c5feaa1f19a33e2df650afa9efe38aa5eb17_prof);

    }

    public function getTemplateName()
    {
        return "typefix/index.html.twig";
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
         {% for typeFix in typeFixes %}
            <tr>
                <td><a href=\"{{ path('typefix_show', { 'id': typeFix.id }) }}\">{{ typeFix.id }}</a></td>
                <td>{{ typeFix.name }}</td>
                <td>
                <a class=\"btn btn-primary\" href=\"{{ path('typefix_show', { 'id': typeFix.id }) }}\"><i class=\"fa fa-pencil fa-lg\"></i> Show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('typefix_edit', { 'id': typeFix.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 

                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
           <a href=\"{{ path('typefix_new') }}\">Create a new typeFix</a>
        </li>
    </ul>
{% endblock %}

{% block page_title %} Type Fix {% endblock %}
{% block page_subtitle %} liste {% endblock %}
", "typefix/index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/index.html.twig");
    }
}
