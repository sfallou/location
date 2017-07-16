<?php

/* :association:meubleRoomForm.html.twig */
class __TwigTemplate_b2f868d1735874540aabb033b1131f2a457dae4a8822dc93145fa1614f214fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:meubleRoomForm.html.twig", 1);
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
        $__internal_ae7b0413c4e035ae17cb7998bd7d163a33539f77f7d426ae926a2e6e7e8f72da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7b0413c4e035ae17cb7998bd7d163a33539f77f7d426ae926a2e6e7e8f72da->enter($__internal_ae7b0413c4e035ae17cb7998bd7d163a33539f77f7d426ae926a2e6e7e8f72da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:meubleRoomForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7b0413c4e035ae17cb7998bd7d163a33539f77f7d426ae926a2e6e7e8f72da->leave($__internal_ae7b0413c4e035ae17cb7998bd7d163a33539f77f7d426ae926a2e6e7e8f72da_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_db63ce714fbe4a38ec8378116eeddc6dc2e3667de0fb881c28a3f1f914b3d9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db63ce714fbe4a38ec8378116eeddc6dc2e3667de0fb881c28a3f1f914b3d9ed->enter($__internal_db63ce714fbe4a38ec8378116eeddc6dc2e3667de0fb881c28a3f1f914b3d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_db63ce714fbe4a38ec8378116eeddc6dc2e3667de0fb881c28a3f1f914b3d9ed->leave($__internal_db63ce714fbe4a38ec8378116eeddc6dc2e3667de0fb881c28a3f1f914b3d9ed_prof);

    }

    // line 73
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ede50c80e0059d5198386b8bdd4c667cd1a6eebc6f2d99ab65a66c6bb2fc9e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede50c80e0059d5198386b8bdd4c667cd1a6eebc6f2d99ab65a66c6bb2fc9e79->enter($__internal_ede50c80e0059d5198386b8bdd4c667cd1a6eebc6f2d99ab65a66c6bb2fc9e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Add Furniture in Room  ";
        
        $__internal_ede50c80e0059d5198386b8bdd4c667cd1a6eebc6f2d99ab65a66c6bb2fc9e79->leave($__internal_ede50c80e0059d5198386b8bdd4c667cd1a6eebc6f2d99ab65a66c6bb2fc9e79_prof);

    }

    // line 74
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8d3e7827eae2aa381499f423acbbfccd7a4a4993bcce9d23f07ade92f2303a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3e7827eae2aa381499f423acbbfccd7a4a4993bcce9d23f07ade92f2303a7a->enter($__internal_8d3e7827eae2aa381499f423acbbfccd7a4a4993bcce9d23f07ade92f2303a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_8d3e7827eae2aa381499f423acbbfccd7a4a4993bcce9d23f07ade92f2303a7a->leave($__internal_8d3e7827eae2aa381499f423acbbfccd7a4a4993bcce9d23f07ade92f2303a7a_prof);

    }

    public function getTemplateName()
    {
        return ":association:meubleRoomForm.html.twig";
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

{% block page_title %} Add Furniture in Room  {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:meubleRoomForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/meubleRoomForm.html.twig");
    }
}
