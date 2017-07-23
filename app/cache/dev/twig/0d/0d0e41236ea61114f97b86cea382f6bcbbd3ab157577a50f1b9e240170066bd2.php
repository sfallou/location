<?php

/* :meuble:new.html.twig */
class __TwigTemplate_a4511453dfa2ba5ae48b298dc6cd5388b86ed9d4e595f6d620b040392e75294a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":meuble:new.html.twig", 1);
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
        $__internal_27f1f98f5fd138547b2adb22ccf768c430a970ea58711f520c30c3a222723e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f1f98f5fd138547b2adb22ccf768c430a970ea58711f520c30c3a222723e4f->enter($__internal_27f1f98f5fd138547b2adb22ccf768c430a970ea58711f520c30c3a222723e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f1f98f5fd138547b2adb22ccf768c430a970ea58711f520c30c3a222723e4f->leave($__internal_27f1f98f5fd138547b2adb22ccf768c430a970ea58711f520c30c3a222723e4f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9d2d4484203923a52c4075e407f0aded9c504632cbc3c633b658639130639e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2d4484203923a52c4075e407f0aded9c504632cbc3c633b658639130639e28->enter($__internal_9d2d4484203923a52c4075e407f0aded9c504632cbc3c633b658639130639e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 6
            echo "        <div class=\"alert alert-success\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    ";
        }
        // line 12
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
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <!--button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button-->
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                </div>
            </div>

        </div>
       <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Type Meuble", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
               
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Type Meuble</th>
                                    <th>Nom</th>
                                </tr>
                                </thead>
                                <tbody>
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_meubles"]) ? $context["type_meubles"] : $this->getContext($context, "type_meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["typemeuble"]) {
            // line 68
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typemeuble_show", array("id" => $this->getAttribute($context["typemeuble"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typemeuble"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["typemeuble"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typemeuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_9d2d4484203923a52c4075e407f0aded9c504632cbc3c633b658639130639e28->leave($__internal_9d2d4484203923a52c4075e407f0aded9c504632cbc3c633b658639130639e28_prof);

    }

    // line 84
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5eaf8284355a4c4d34a5cf70dc1784fb7a450b8c1e798143a43e152e06d57898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaf8284355a4c4d34a5cf70dc1784fb7a450b8c1e798143a43e152e06d57898->enter($__internal_5eaf8284355a4c4d34a5cf70dc1784fb7a450b8c1e798143a43e152e06d57898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_5eaf8284355a4c4d34a5cf70dc1784fb7a450b8c1e798143a43e152e06d57898->leave($__internal_5eaf8284355a4c4d34a5cf70dc1784fb7a450b8c1e798143a43e152e06d57898_prof);

    }

    // line 85
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fbe78ef1b51585b6c7b5f5294dfd47ffa862ee8d7190bdea6f1621d9f88eb99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe78ef1b51585b6c7b5f5294dfd47ffa862ee8d7190bdea6f1621d9f88eb99e->enter($__internal_fbe78ef1b51585b6c7b5f5294dfd47ffa862ee8d7190bdea6f1621d9f88eb99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new meuble ";
        
        $__internal_fbe78ef1b51585b6c7b5f5294dfd47ffa862ee8d7190bdea6f1621d9f88eb99e->leave($__internal_fbe78ef1b51585b6c7b5f5294dfd47ffa862ee8d7190bdea6f1621d9f88eb99e_prof);

    }

    public function getTemplateName()
    {
        return ":meuble:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 85,  174 => 84,  159 => 74,  150 => 71,  144 => 70,  140 => 68,  136 => 67,  116 => 50,  104 => 41,  93 => 33,  89 => 32,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

    {% if app.session.flashBag.has('success') %}
        <div class=\"alert alert-success\">
            {% for msg in app.session.flashBag.get('success') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}

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

                        <!--button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button-->
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        {{ form_end(form) }}


                </div>
            </div>

        </div>
       <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('Choix Type Meuble', true, false, 'primary') }}
                <br>
                
               
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Type Meuble</th>
                                    <th>Nom</th>
                                </tr>
                                </thead>
                                <tbody>
                        {%for typemeuble in type_meubles%}

                                    <tr>
                                        <td><a href=\"{{ path('typemeuble_show', { 'id': typemeuble.id }) }}\">{{ typemeuble.id }}</a></td>
                                        <td>{{ typemeuble.name }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} add new meuble {% endblock %}

", ":meuble:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/new.html.twig");
    }
}
