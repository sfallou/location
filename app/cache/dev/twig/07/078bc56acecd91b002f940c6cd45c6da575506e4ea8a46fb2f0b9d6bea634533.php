<?php

/* :typefix:index.html.twig */
class __TwigTemplate_237e42abb933d3fe51b7e952c2e5550e1cf6e9ebfdb3febd75b71b0e36fec957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typefix:index.html.twig", 1);
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
        $__internal_f65d1ef62f9cc930fdced610843c2f6e3b9fa341dff4c7c03932f1b002760b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65d1ef62f9cc930fdced610843c2f6e3b9fa341dff4c7c03932f1b002760b83->enter($__internal_f65d1ef62f9cc930fdced610843c2f6e3b9fa341dff4c7c03932f1b002760b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typefix:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65d1ef62f9cc930fdced610843c2f6e3b9fa341dff4c7c03932f1b002760b83->leave($__internal_f65d1ef62f9cc930fdced610843c2f6e3b9fa341dff4c7c03932f1b002760b83_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_63f9b49f2478f9d91ea1d48627d9c10be186b6831b352c525e1abe327a6b8f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f9b49f2478f9d91ea1d48627d9c10be186b6831b352c525e1abe327a6b8f23->enter($__internal_63f9b49f2478f9d91ea1d48627d9c10be186b6831b352c525e1abe327a6b8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_63f9b49f2478f9d91ea1d48627d9c10be186b6831b352c525e1abe327a6b8f23->leave($__internal_63f9b49f2478f9d91ea1d48627d9c10be186b6831b352c525e1abe327a6b8f23_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c20de803df5f2eb5dab5b2fe04899987e5bfa88de19cb89f676e99ecf48c647e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20de803df5f2eb5dab5b2fe04899987e5bfa88de19cb89f676e99ecf48c647e->enter($__internal_c20de803df5f2eb5dab5b2fe04899987e5bfa88de19cb89f676e99ecf48c647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_c20de803df5f2eb5dab5b2fe04899987e5bfa88de19cb89f676e99ecf48c647e->leave($__internal_c20de803df5f2eb5dab5b2fe04899987e5bfa88de19cb89f676e99ecf48c647e_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_15d94559061d2055810856fc496094077b3a99a05e604607f1df9ff5010aff45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d94559061d2055810856fc496094077b3a99a05e604607f1df9ff5010aff45->enter($__internal_15d94559061d2055810856fc496094077b3a99a05e604607f1df9ff5010aff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_15d94559061d2055810856fc496094077b3a99a05e604607f1df9ff5010aff45->leave($__internal_15d94559061d2055810856fc496094077b3a99a05e604607f1df9ff5010aff45_prof);

    }

    public function getTemplateName()
    {
        return ":typefix:index.html.twig";
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
", ":typefix:index.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/index.html.twig");
    }
}
