<?php

/* :association:chargeRoomForm.html.twig */
class __TwigTemplate_c0e88fc3d69018fcab978d27c695d81afab0d831ad2d0af051a6fb2f5ecd2747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:chargeRoomForm.html.twig", 1);
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
        $__internal_b5d5562b8803a6d5c4caa9ca70501bc6efd8b8e1dd86d3a091add5de254ab802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d5562b8803a6d5c4caa9ca70501bc6efd8b8e1dd86d3a091add5de254ab802->enter($__internal_b5d5562b8803a6d5c4caa9ca70501bc6efd8b8e1dd86d3a091add5de254ab802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:chargeRoomForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d5562b8803a6d5c4caa9ca70501bc6efd8b8e1dd86d3a091add5de254ab802->leave($__internal_b5d5562b8803a6d5c4caa9ca70501bc6efd8b8e1dd86d3a091add5de254ab802_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_42a1fbc58514ab3fcd04b409d06c9448be37f9dec221cf76d6e8edc9ed58c4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a1fbc58514ab3fcd04b409d06c9448be37f9dec221cf76d6e8edc9ed58c4bf->enter($__internal_42a1fbc58514ab3fcd04b409d06c9448be37f9dec221cf76d6e8edc9ed58c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Charge Type", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["chargeType"]) ? $context["chargeType"] : $this->getContext($context, "chargeType")));
        foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
            // line 57
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecharge_show", array("id" => $this->getAttribute($context["charge"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_42a1fbc58514ab3fcd04b409d06c9448be37f9dec221cf76d6e8edc9ed58c4bf->leave($__internal_42a1fbc58514ab3fcd04b409d06c9448be37f9dec221cf76d6e8edc9ed58c4bf_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f40adcfc8627ed620c784eb36c116571cfe86af8d4f90e9cf72527432ad997a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40adcfc8627ed620c784eb36c116571cfe86af8d4f90e9cf72527432ad997a6->enter($__internal_f40adcfc8627ed620c784eb36c116571cfe86af8d4f90e9cf72527432ad997a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add \"Charge\" in Room  ";
        
        $__internal_f40adcfc8627ed620c784eb36c116571cfe86af8d4f90e9cf72527432ad997a6->leave($__internal_f40adcfc8627ed620c784eb36c116571cfe86af8d4f90e9cf72527432ad997a6_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5d1b5f69d53b41895cc924d51102f03163d5c5386faedcccb63f39f7cfafcb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1b5f69d53b41895cc924d51102f03163d5c5386faedcccb63f39f7cfafcb60->enter($__internal_5d1b5f69d53b41895cc924d51102f03163d5c5386faedcccb63f39f7cfafcb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_5d1b5f69d53b41895cc924d51102f03163d5c5386faedcccb63f39f7cfafcb60->leave($__internal_5d1b5f69d53b41895cc924d51102f03163d5c5386faedcccb63f39f7cfafcb60_prof);

    }

    public function getTemplateName()
    {
        return ":association:chargeRoomForm.html.twig";
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
                {{ macro.box_header('Choix Charge Type', true, false, 'primary') }}
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
                        {%for charge in chargeType%}

                                    <tr>
                                        <td><a href=\"{{ path('typecharge_show', { 'id': charge.id }) }}\">{{ charge.id }}</a></td>
                                        <td>{{ charge.name }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Add \"Charge\" in Room  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:chargeRoomForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/chargeRoomForm.html.twig");
    }
}
