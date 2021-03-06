<?php

/* association/validationForm.html.twig */
class __TwigTemplate_20b164c5cc5cb8be1a31972ff0dc5b0a8447e4e563f3afc45c22757c9b135cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "association/validationForm.html.twig", 1);
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
        $__internal_703d984c5939d1e7dcd48b526842b06414ce44d627d3617b286bfd664a9adea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703d984c5939d1e7dcd48b526842b06414ce44d627d3617b286bfd664a9adea0->enter($__internal_703d984c5939d1e7dcd48b526842b06414ce44d627d3617b286bfd664a9adea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association/validationForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_703d984c5939d1e7dcd48b526842b06414ce44d627d3617b286bfd664a9adea0->leave($__internal_703d984c5939d1e7dcd48b526842b06414ce44d627d3617b286bfd664a9adea0_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7096737336722ce5487371d24b0c83f967b9daa42664fa8cf766fb997fa573da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7096737336722ce5487371d24b0c83f967b9daa42664fa8cf766fb997fa573da->enter($__internal_7096737336722ce5487371d24b0c83f967b9daa42664fa8cf766fb997fa573da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix chambre", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apparts_rooms"]) ? $context["apparts_rooms"] : $this->getContext($context, "apparts_rooms")));
        foreach ($context['_seq'] as $context["appart"] => $context["rooms"]) {
            // line 43
            echo "                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $context["appart"], "html", null, true);
            echo "
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Room</th>
                                    <th>Surface</th>
                                    <th>Rent</th>
                                    <th>Guarantee</th>
                                </tr>
                                </thead>
                                <tbody>
                        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["rooms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 59
                echo "
                                    <tr>
                                        <td><a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
                echo "</a></td>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "surface", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "rent", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "guarantee", array()), "html", null, true);
                echo "</td>
                                    </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                </tbody>
                            </table>
                    </div>           
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['appart'], $context['rooms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_7096737336722ce5487371d24b0c83f967b9daa42664fa8cf766fb997fa573da->leave($__internal_7096737336722ce5487371d24b0c83f967b9daa42664fa8cf766fb997fa573da_prof);

    }

    // line 78
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cadae74dff653572b61fed1b94f30f82460091bb96b9e2a6842f81789de25140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadae74dff653572b61fed1b94f30f82460091bb96b9e2a6842f81789de25140->enter($__internal_cadae74dff653572b61fed1b94f30f82460091bb96b9e2a6842f81789de25140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Validate Registration  ";
        
        $__internal_cadae74dff653572b61fed1b94f30f82460091bb96b9e2a6842f81789de25140->leave($__internal_cadae74dff653572b61fed1b94f30f82460091bb96b9e2a6842f81789de25140_prof);

    }

    // line 79
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_97135ce9fd76bed46f51beb37d773ed3510cfbe1529508e01107e3b3de8980af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97135ce9fd76bed46f51beb37d773ed3510cfbe1529508e01107e3b3de8980af->enter($__internal_97135ce9fd76bed46f51beb37d773ed3510cfbe1529508e01107e3b3de8980af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " associate new user to room ";
        
        $__internal_97135ce9fd76bed46f51beb37d773ed3510cfbe1529508e01107e3b3de8980af->leave($__internal_97135ce9fd76bed46f51beb37d773ed3510cfbe1529508e01107e3b3de8980af_prof);

    }

    public function getTemplateName()
    {
        return "association/validationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 79,  170 => 78,  158 => 71,  149 => 67,  140 => 64,  136 => 63,  132 => 62,  126 => 61,  122 => 59,  118 => 58,  102 => 45,  98 => 43,  94 => 42,  88 => 39,  78 => 32,  67 => 24,  63 => 23,  42 => 4,  36 => 3,  11 => 1,);
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
                {{ macro.box_header('Choix chambre', true, false, 'primary') }}
                <br>
                
                {%for appart,rooms in apparts_rooms%}
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            {{appart}}
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Room</th>
                                    <th>Surface</th>
                                    <th>Rent</th>
                                    <th>Guarantee</th>
                                </tr>
                                </thead>
                                <tbody>
                        {%for room in rooms%}

                                    <tr>
                                        <td><a href=\"{{ path('room_show', { 'id': room.id }) }}\">{{ room.id }}</a></td>
                                        <td>{{ room.surface }}</td>
                                        <td>{{ room.rent }}</td>
                                        <td>{{ room.guarantee }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
                {%endfor%}
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Validate Registration  {% endblock %}
{% block page_subtitle %} associate new user to room {% endblock %}", "association/validationForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/validationForm.html.twig");
    }
}
