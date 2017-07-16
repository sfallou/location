<?php

/* :association:fixRoomForm.html.twig */
class __TwigTemplate_040de8fa6f99654b8eba8350321bb9ef13bc6d0f8d1fe1aa5490e21d0d2dfccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:fixRoomForm.html.twig", 1);
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
        $__internal_b2ac3b69434afff413f92bca7e09ebcb6f4f3b725a6fd3e0c2f5b6f07416f2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ac3b69434afff413f92bca7e09ebcb6f4f3b725a6fd3e0c2f5b6f07416f2af->enter($__internal_b2ac3b69434afff413f92bca7e09ebcb6f4f3b725a6fd3e0c2f5b6f07416f2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:fixRoomForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ac3b69434afff413f92bca7e09ebcb6f4f3b725a6fd3e0c2f5b6f07416f2af->leave($__internal_b2ac3b69434afff413f92bca7e09ebcb6f4f3b725a6fd3e0c2f5b6f07416f2af_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4bf4d9c1f42f669c44b454bda7578fc0d08dcb6f19adfcd1d4b8d543aa77ce59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf4d9c1f42f669c44b454bda7578fc0d08dcb6f19adfcd1d4b8d543aa77ce59->enter($__internal_4bf4d9c1f42f669c44b454bda7578fc0d08dcb6f19adfcd1d4b8d543aa77ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-body\">
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>

                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Fix Type", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id </th>
                                    <th>Type</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixType"]) ? $context["fixType"] : $this->getContext($context, "fixType")));
        foreach ($context['_seq'] as $context["_key"] => $context["fix"]) {
            // line 57
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typefix_show", array("id" => $this->getAttribute($context["fix"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_4bf4d9c1f42f669c44b454bda7578fc0d08dcb6f19adfcd1d4b8d543aa77ce59->leave($__internal_4bf4d9c1f42f669c44b454bda7578fc0d08dcb6f19adfcd1d4b8d543aa77ce59_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085829d13263eb24c8b8e96d748bb70e5067333f3e90feb9687e5291e0162abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085829d13263eb24c8b8e96d748bb70e5067333f3e90feb9687e5291e0162abb->enter($__internal_085829d13263eb24c8b8e96d748bb70e5067333f3e90feb9687e5291e0162abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Room  ";
        
        $__internal_085829d13263eb24c8b8e96d748bb70e5067333f3e90feb9687e5291e0162abb->leave($__internal_085829d13263eb24c8b8e96d748bb70e5067333f3e90feb9687e5291e0162abb_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9b1e144320872cfcb0990c1e2f8bab49f4be19f9ba21e3bec401545e2ba08586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1e144320872cfcb0990c1e2f8bab49f4be19f9ba21e3bec401545e2ba08586->enter($__internal_9b1e144320872cfcb0990c1e2f8bab49f4be19f9ba21e3bec401545e2ba08586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_9b1e144320872cfcb0990c1e2f8bab49f4be19f9ba21e3bec401545e2ba08586->leave($__internal_9b1e144320872cfcb0990c1e2f8bab49f4be19f9ba21e3bec401545e2ba08586_prof);

    }

    public function getTemplateName()
    {
        return ":association:fixRoomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 74,  146 => 73,  131 => 63,  122 => 60,  116 => 59,  112 => 57,  108 => 56,  88 => 39,  78 => 32,  67 => 24,  63 => 23,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-body\">
                {{ form_start(form) }}
                        {{ form_widget(form) }}
                    
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>

                        {{ form_end(form) }}
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('Choix Fix Type', true, false, 'primary') }}
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id </th>
                                    <th>Type</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        {%for fix in fixType%}

                                    <tr>
                                        <td><a href=\"{{ path('typefix_show', { 'id': fix.id }) }}\">{{ fix.id }}</a></td>
                                        <td>{{ fix.name }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Add Furniture in Room  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:fixRoomForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/fixRoomForm.html.twig");
    }
}
