<?php

/* :association:chargeAppartForm.html.twig */
class __TwigTemplate_dd615210e5efa8320f72f72a42bfc2ed0e1ac842f8f52afc3073b0fc50acc26b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:chargeAppartForm.html.twig", 1);
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
        $__internal_e13afdb2a9b3fdc49e372dca288f2efdb24ad0797f4b4ec9467caf6d6ce9a134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13afdb2a9b3fdc49e372dca288f2efdb24ad0797f4b4ec9467caf6d6ce9a134->enter($__internal_e13afdb2a9b3fdc49e372dca288f2efdb24ad0797f4b4ec9467caf6d6ce9a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:chargeAppartForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13afdb2a9b3fdc49e372dca288f2efdb24ad0797f4b4ec9467caf6d6ce9a134->leave($__internal_e13afdb2a9b3fdc49e372dca288f2efdb24ad0797f4b4ec9467caf6d6ce9a134_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a358352d574ff6b7846c5ce6743485a3ddbe57a55f420107ff27c4b14fbc5bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a358352d574ff6b7846c5ce6743485a3ddbe57a55f420107ff27c4b14fbc5bec->enter($__internal_a358352d574ff6b7846c5ce6743485a3ddbe57a55f420107ff27c4b14fbc5bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_a358352d574ff6b7846c5ce6743485a3ddbe57a55f420107ff27c4b14fbc5bec->leave($__internal_a358352d574ff6b7846c5ce6743485a3ddbe57a55f420107ff27c4b14fbc5bec_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e9630ad3d16af6c7eedec3a42127fa855627ed60eeb88a86405b534141da5e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9630ad3d16af6c7eedec3a42127fa855627ed60eeb88a86405b534141da5e22->enter($__internal_e9630ad3d16af6c7eedec3a42127fa855627ed60eeb88a86405b534141da5e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add \"Charge\" in Appartement  ";
        
        $__internal_e9630ad3d16af6c7eedec3a42127fa855627ed60eeb88a86405b534141da5e22->leave($__internal_e9630ad3d16af6c7eedec3a42127fa855627ed60eeb88a86405b534141da5e22_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4b2592f55b1b937c343c44c7f6cce65b3370e7789253d22dcb2bedf10f45b268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2592f55b1b937c343c44c7f6cce65b3370e7789253d22dcb2bedf10f45b268->enter($__internal_4b2592f55b1b937c343c44c7f6cce65b3370e7789253d22dcb2bedf10f45b268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_4b2592f55b1b937c343c44c7f6cce65b3370e7789253d22dcb2bedf10f45b268->leave($__internal_4b2592f55b1b937c343c44c7f6cce65b3370e7789253d22dcb2bedf10f45b268_prof);

    }

    public function getTemplateName()
    {
        return ":association:chargeAppartForm.html.twig";
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

{% block page_title %} Add \"Charge\" in Appartement  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:chargeAppartForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/chargeAppartForm.html.twig");
    }
}
