<?php

/* association/documentAppartForm.html.twig */
class __TwigTemplate_695d2d9056c5608ff3a40c3a681534a6d525dacfd38cb5654d8c6e10d9d08eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "association/documentAppartForm.html.twig", 1);
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
        $__internal_ecd780989baa5c2da7d759cd4816157fc5e3871d07aadb700b4ad0b35e05d7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd780989baa5c2da7d759cd4816157fc5e3871d07aadb700b4ad0b35e05d7b2->enter($__internal_ecd780989baa5c2da7d759cd4816157fc5e3871d07aadb700b4ad0b35e05d7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association/documentAppartForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd780989baa5c2da7d759cd4816157fc5e3871d07aadb700b4ad0b35e05d7b2->leave($__internal_ecd780989baa5c2da7d759cd4816157fc5e3871d07aadb700b4ad0b35e05d7b2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e3630dbc38cd534225ec690f67d8b648a98d03387b622d71bcb02c36fed9fd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3630dbc38cd534225ec690f67d8b648a98d03387b622d71bcb02c36fed9fd08->enter($__internal_e3630dbc38cd534225ec690f67d8b648a98d03387b622d71bcb02c36fed9fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Document", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Document</th>
                                    <th>Name</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 57
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_e3630dbc38cd534225ec690f67d8b648a98d03387b622d71bcb02c36fed9fd08->leave($__internal_e3630dbc38cd534225ec690f67d8b648a98d03387b622d71bcb02c36fed9fd08_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9936c2414765d3dd9ff0e2f59b9006671edc4c95a7b8d830e9be073ad40121f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9936c2414765d3dd9ff0e2f59b9006671edc4c95a7b8d830e9be073ad40121f8->enter($__internal_9936c2414765d3dd9ff0e2f59b9006671edc4c95a7b8d830e9be073ad40121f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Appartement  ";
        
        $__internal_9936c2414765d3dd9ff0e2f59b9006671edc4c95a7b8d830e9be073ad40121f8->leave($__internal_9936c2414765d3dd9ff0e2f59b9006671edc4c95a7b8d830e9be073ad40121f8_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b70c70153347722d8c67ae5a7c4d9e9d7393776df98ab9e7b15806c168f71836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70c70153347722d8c67ae5a7c4d9e9d7393776df98ab9e7b15806c168f71836->enter($__internal_b70c70153347722d8c67ae5a7c4d9e9d7393776df98ab9e7b15806c168f71836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_b70c70153347722d8c67ae5a7c4d9e9d7393776df98ab9e7b15806c168f71836->leave($__internal_b70c70153347722d8c67ae5a7c4d9e9d7393776df98ab9e7b15806c168f71836_prof);

    }

    public function getTemplateName()
    {
        return "association/documentAppartForm.html.twig";
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
                {{ macro.box_header('Choix Document', true, false, 'primary') }}
                <br>
                
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Document</th>
                                    <th>Name</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                        {%for document in documents%}

                                    <tr>
                                        <td><a href=\"{{ path('document_show', { 'id': document.id }) }}\">{{ document.id }}</a></td>
                                        <td>{{ document.name }}</td>
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
{% block page_subtitle %} form {% endblock %}", "association/documentAppartForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/documentAppartForm.html.twig");
    }
}
