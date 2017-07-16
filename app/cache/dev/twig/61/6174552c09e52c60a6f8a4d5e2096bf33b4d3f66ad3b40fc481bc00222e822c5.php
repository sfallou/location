<?php

/* :association:fixAppartForm.html.twig */
class __TwigTemplate_7e132fdc286d0aa40d33748ce05610eb4c86f17e65877107c62a84f3813412bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:fixAppartForm.html.twig", 1);
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
        $__internal_e76ec9981af234448d2212f466bf732fabfdabf9529c8b0c0af57aec44c5456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76ec9981af234448d2212f466bf732fabfdabf9529c8b0c0af57aec44c5456d->enter($__internal_e76ec9981af234448d2212f466bf732fabfdabf9529c8b0c0af57aec44c5456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:fixAppartForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76ec9981af234448d2212f466bf732fabfdabf9529c8b0c0af57aec44c5456d->leave($__internal_e76ec9981af234448d2212f466bf732fabfdabf9529c8b0c0af57aec44c5456d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_789a19fb0eaae098f3f97dc1cd15d896f3dd69aa5103fd64e4cfc4ffbdf0f214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789a19fb0eaae098f3f97dc1cd15d896f3dd69aa5103fd64e4cfc4ffbdf0f214->enter($__internal_789a19fb0eaae098f3f97dc1cd15d896f3dd69aa5103fd64e4cfc4ffbdf0f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_789a19fb0eaae098f3f97dc1cd15d896f3dd69aa5103fd64e4cfc4ffbdf0f214->leave($__internal_789a19fb0eaae098f3f97dc1cd15d896f3dd69aa5103fd64e4cfc4ffbdf0f214_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3767dfd28914d61aa6bf347aed2cac2f5353db351c9e858d109011264149e455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3767dfd28914d61aa6bf347aed2cac2f5353db351c9e858d109011264149e455->enter($__internal_3767dfd28914d61aa6bf347aed2cac2f5353db351c9e858d109011264149e455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Appartement  ";
        
        $__internal_3767dfd28914d61aa6bf347aed2cac2f5353db351c9e858d109011264149e455->leave($__internal_3767dfd28914d61aa6bf347aed2cac2f5353db351c9e858d109011264149e455_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5728418e4dfd5187a9a73ed1cbfa3ba5c7c2a59aa12998bcddcd407e011ea4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5728418e4dfd5187a9a73ed1cbfa3ba5c7c2a59aa12998bcddcd407e011ea4da->enter($__internal_5728418e4dfd5187a9a73ed1cbfa3ba5c7c2a59aa12998bcddcd407e011ea4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_5728418e4dfd5187a9a73ed1cbfa3ba5c7c2a59aa12998bcddcd407e011ea4da->leave($__internal_5728418e4dfd5187a9a73ed1cbfa3ba5c7c2a59aa12998bcddcd407e011ea4da_prof);

    }

    public function getTemplateName()
    {
        return ":association:fixAppartForm.html.twig";
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

{% block page_title %} Add Furniture in Appartement  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:fixAppartForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/fixAppartForm.html.twig");
    }
}
