<?php

/* :association:meubleAppartForm.html.twig */
class __TwigTemplate_4cbf51d8b1b2d39afa7d972caca25e549a04be85d7d0fbb54cd6d5d95653f459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:meubleAppartForm.html.twig", 1);
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
        $__internal_3a8cbc7c0168251079c3e58b58e3255ce0af8c51315f0ccd814ccbafb02b3100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8cbc7c0168251079c3e58b58e3255ce0af8c51315f0ccd814ccbafb02b3100->enter($__internal_3a8cbc7c0168251079c3e58b58e3255ce0af8c51315f0ccd814ccbafb02b3100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:meubleAppartForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8cbc7c0168251079c3e58b58e3255ce0af8c51315f0ccd814ccbafb02b3100->leave($__internal_3a8cbc7c0168251079c3e58b58e3255ce0af8c51315f0ccd814ccbafb02b3100_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_bac887c59ba1c208b4b86953183dcdc97507251410f1885b35f98be833b57577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac887c59ba1c208b4b86953183dcdc97507251410f1885b35f98be833b57577->enter($__internal_bac887c59ba1c208b4b86953183dcdc97507251410f1885b35f98be833b57577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Meuble", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Meuble</th>
                                    <th>Name</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            // line 57
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meuble_show", array("id" => $this->getAttribute($context["meuble"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_bac887c59ba1c208b4b86953183dcdc97507251410f1885b35f98be833b57577->leave($__internal_bac887c59ba1c208b4b86953183dcdc97507251410f1885b35f98be833b57577_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_61e1a0ac1fe72536848e030dfd72623fc6560b73f6ddb3ea4a9e59943a517a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e1a0ac1fe72536848e030dfd72623fc6560b73f6ddb3ea4a9e59943a517a6c->enter($__internal_61e1a0ac1fe72536848e030dfd72623fc6560b73f6ddb3ea4a9e59943a517a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Appartement  ";
        
        $__internal_61e1a0ac1fe72536848e030dfd72623fc6560b73f6ddb3ea4a9e59943a517a6c->leave($__internal_61e1a0ac1fe72536848e030dfd72623fc6560b73f6ddb3ea4a9e59943a517a6c_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_65e901aa91c5281aa2585829c7a8fce723e117f33b37bb6fdd2b86f1d1529e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e901aa91c5281aa2585829c7a8fce723e117f33b37bb6fdd2b86f1d1529e7c->enter($__internal_65e901aa91c5281aa2585829c7a8fce723e117f33b37bb6fdd2b86f1d1529e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_65e901aa91c5281aa2585829c7a8fce723e117f33b37bb6fdd2b86f1d1529e7c->leave($__internal_65e901aa91c5281aa2585829c7a8fce723e117f33b37bb6fdd2b86f1d1529e7c_prof);

    }

    public function getTemplateName()
    {
        return ":association:meubleAppartForm.html.twig";
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
                {{ macro.box_header('Choix Meuble', true, false, 'primary') }}
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Meuble</th>
                                    <th>Name</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        {%for meuble in meubles%}

                                    <tr>
                                        <td><a href=\"{{ path('meuble_show', { 'id': meuble.id }) }}\">{{ meuble.id }}</a></td>
                                        <td>{{ meuble.name }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Add Furniture in Appartement  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:meubleAppartForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/meubleAppartForm.html.twig");
    }
}
