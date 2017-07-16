<?php

/* :association:validationForm.html.twig */
class __TwigTemplate_0e79c807ab0f57c737af523ead9912d414a3977aa1ae076bbc1dcc16fc51d8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:validationForm.html.twig", 1);
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
        $__internal_a25c0ef0e2c20526d22ea5a6b252975efe4d59d0f1c5dca684df45e15c19f5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25c0ef0e2c20526d22ea5a6b252975efe4d59d0f1c5dca684df45e15c19f5c0->enter($__internal_a25c0ef0e2c20526d22ea5a6b252975efe4d59d0f1c5dca684df45e15c19f5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:validationForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25c0ef0e2c20526d22ea5a6b252975efe4d59d0f1c5dca684df45e15c19f5c0->leave($__internal_a25c0ef0e2c20526d22ea5a6b252975efe4d59d0f1c5dca684df45e15c19f5c0_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cd32289ab9ab4d321b45cf03974ec3e72085ab63cdfffbbbd10fda01c3413992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd32289ab9ab4d321b45cf03974ec3e72085ab63cdfffbbbd10fda01c3413992->enter($__internal_cd32289ab9ab4d321b45cf03974ec3e72085ab63cdfffbbbd10fda01c3413992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_cd32289ab9ab4d321b45cf03974ec3e72085ab63cdfffbbbd10fda01c3413992->leave($__internal_cd32289ab9ab4d321b45cf03974ec3e72085ab63cdfffbbbd10fda01c3413992_prof);

    }

    // line 78
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_57eecd909ec24d0bf282b4c3c68839d401a7718f7708164ea7aac83d5a8599d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eecd909ec24d0bf282b4c3c68839d401a7718f7708164ea7aac83d5a8599d1->enter($__internal_57eecd909ec24d0bf282b4c3c68839d401a7718f7708164ea7aac83d5a8599d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Validate Registration  ";
        
        $__internal_57eecd909ec24d0bf282b4c3c68839d401a7718f7708164ea7aac83d5a8599d1->leave($__internal_57eecd909ec24d0bf282b4c3c68839d401a7718f7708164ea7aac83d5a8599d1_prof);

    }

    // line 79
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_98ccf44358d97d0852f65fd552148f0985f2e5bd55f455fdac7234e33b520ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ccf44358d97d0852f65fd552148f0985f2e5bd55f455fdac7234e33b520ca8->enter($__internal_98ccf44358d97d0852f65fd552148f0985f2e5bd55f455fdac7234e33b520ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " associate new user to room ";
        
        $__internal_98ccf44358d97d0852f65fd552148f0985f2e5bd55f455fdac7234e33b520ca8->leave($__internal_98ccf44358d97d0852f65fd552148f0985f2e5bd55f455fdac7234e33b520ca8_prof);

    }

    public function getTemplateName()
    {
        return ":association:validationForm.html.twig";
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
{% block page_subtitle %} associate new user to room {% endblock %}", ":association:validationForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/validationForm.html.twig");
    }
}
