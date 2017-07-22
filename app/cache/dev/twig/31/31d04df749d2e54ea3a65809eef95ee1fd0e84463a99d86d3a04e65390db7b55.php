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
        $__internal_5173917a89c366c9bb050a9d92ad422ba99f825a2d0aa99681ecd9d8a425eae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5173917a89c366c9bb050a9d92ad422ba99f825a2d0aa99681ecd9d8a425eae8->enter($__internal_5173917a89c366c9bb050a9d92ad422ba99f825a2d0aa99681ecd9d8a425eae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typefix/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5173917a89c366c9bb050a9d92ad422ba99f825a2d0aa99681ecd9d8a425eae8->leave($__internal_5173917a89c366c9bb050a9d92ad422ba99f825a2d0aa99681ecd9d8a425eae8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_21f8a43e2912617cfa98794e84f5ea7a3614b517a72d8abec50114fb6e17820f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f8a43e2912617cfa98794e84f5ea7a3614b517a72d8abec50114fb6e17820f->enter($__internal_21f8a43e2912617cfa98794e84f5ea7a3614b517a72d8abec50114fb6e17820f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_21f8a43e2912617cfa98794e84f5ea7a3614b517a72d8abec50114fb6e17820f->leave($__internal_21f8a43e2912617cfa98794e84f5ea7a3614b517a72d8abec50114fb6e17820f_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a0c0b5e063d3cf90b60340a1f942b9cd84b518ce5ac015c116b51b34c7b4e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0c0b5e063d3cf90b60340a1f942b9cd84b518ce5ac015c116b51b34c7b4e38->enter($__internal_2a0c0b5e063d3cf90b60340a1f942b9cd84b518ce5ac015c116b51b34c7b4e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_2a0c0b5e063d3cf90b60340a1f942b9cd84b518ce5ac015c116b51b34c7b4e38->leave($__internal_2a0c0b5e063d3cf90b60340a1f942b9cd84b518ce5ac015c116b51b34c7b4e38_prof);

    }

    // line 41
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d1af90bb1a4a52dcf91c6c64eb1cd5a816046f0590b10ada44125e84b4c88cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1af90bb1a4a52dcf91c6c64eb1cd5a816046f0590b10ada44125e84b4c88cbf->enter($__internal_d1af90bb1a4a52dcf91c6c64eb1cd5a816046f0590b10ada44125e84b4c88cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " liste ";
        
        $__internal_d1af90bb1a4a52dcf91c6c64eb1cd5a816046f0590b10ada44125e84b4c88cbf->leave($__internal_d1af90bb1a4a52dcf91c6c64eb1cd5a816046f0590b10ada44125e84b4c88cbf_prof);

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
