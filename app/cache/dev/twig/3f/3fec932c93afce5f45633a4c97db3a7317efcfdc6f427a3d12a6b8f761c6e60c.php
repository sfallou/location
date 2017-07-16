<?php

/* :association:documentAppartForm.html.twig */
class __TwigTemplate_1ed7268e8625e3ff71e12db4ecb2d1901d68269418f31fa5ca88759244998767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:documentAppartForm.html.twig", 1);
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
        $__internal_38e36d62358dafe0d527e7c952fcd7eea5f0eb39e0104b980cd323d0c6389e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e36d62358dafe0d527e7c952fcd7eea5f0eb39e0104b980cd323d0c6389e0a->enter($__internal_38e36d62358dafe0d527e7c952fcd7eea5f0eb39e0104b980cd323d0c6389e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:documentAppartForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e36d62358dafe0d527e7c952fcd7eea5f0eb39e0104b980cd323d0c6389e0a->leave($__internal_38e36d62358dafe0d527e7c952fcd7eea5f0eb39e0104b980cd323d0c6389e0a_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_699d960c75a2434124a3e90804efad8eeaac0172bb20b913362b9de60a93a27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699d960c75a2434124a3e90804efad8eeaac0172bb20b913362b9de60a93a27c->enter($__internal_699d960c75a2434124a3e90804efad8eeaac0172bb20b913362b9de60a93a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_699d960c75a2434124a3e90804efad8eeaac0172bb20b913362b9de60a93a27c->leave($__internal_699d960c75a2434124a3e90804efad8eeaac0172bb20b913362b9de60a93a27c_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_229149e88440998f51c33c7582692f862e7856aa879a7af4f38b21147b948b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229149e88440998f51c33c7582692f862e7856aa879a7af4f38b21147b948b32->enter($__internal_229149e88440998f51c33c7582692f862e7856aa879a7af4f38b21147b948b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Appartement  ";
        
        $__internal_229149e88440998f51c33c7582692f862e7856aa879a7af4f38b21147b948b32->leave($__internal_229149e88440998f51c33c7582692f862e7856aa879a7af4f38b21147b948b32_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9fb7b0e21d6bafd45e871cdfce9faff48a29689951360c5ee8c361adaf341c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb7b0e21d6bafd45e871cdfce9faff48a29689951360c5ee8c361adaf341c09->enter($__internal_9fb7b0e21d6bafd45e871cdfce9faff48a29689951360c5ee8c361adaf341c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_9fb7b0e21d6bafd45e871cdfce9faff48a29689951360c5ee8c361adaf341c09->leave($__internal_9fb7b0e21d6bafd45e871cdfce9faff48a29689951360c5ee8c361adaf341c09_prof);

    }

    public function getTemplateName()
    {
        return ":association:documentAppartForm.html.twig";
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
{% block page_subtitle %} form {% endblock %}", ":association:documentAppartForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/documentAppartForm.html.twig");
    }
}
