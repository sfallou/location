<?php

/* contact/new.html.twig */
class __TwigTemplate_d4e89d7f329f0fa20eefc9ab9c57aed76fcc5ff3493050f0b25406fb5c8b6c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "contact/new.html.twig", 1);
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
        $__internal_d082d7a03875964b1a4874946833f1a50452fe7440d641334847cb7f3c42079e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d082d7a03875964b1a4874946833f1a50452fe7440d641334847cb7f3c42079e->enter($__internal_d082d7a03875964b1a4874946833f1a50452fe7440d641334847cb7f3c42079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d082d7a03875964b1a4874946833f1a50452fe7440d641334847cb7f3c42079e->leave($__internal_d082d7a03875964b1a4874946833f1a50452fe7440d641334847cb7f3c42079e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_458b73266b84f6d29f88b9250742d3b741d4b9cdab3ae7afc0e107861b340f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458b73266b84f6d29f88b9250742d3b741d4b9cdab3ae7afc0e107861b340f5d->enter($__internal_458b73266b84f6d29f88b9250742d3b741d4b9cdab3ae7afc0e107861b340f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Choix Type Contact", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
               
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Type Contact</th>
                                    <th>Wording</th>
                                </tr>
                                </thead>
                                <tbody>
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_contacts"]) ? $context["type_contacts"] : $this->getContext($context, "type_contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["typecontact"]) {
            // line 68
            echo "
                                    <tr>
                                        <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typecontact_show", array("id" => $this->getAttribute($context["typecontact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typecontact"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["typecontact"], "name", array()), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typecontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_458b73266b84f6d29f88b9250742d3b741d4b9cdab3ae7afc0e107861b340f5d->leave($__internal_458b73266b84f6d29f88b9250742d3b741d4b9cdab3ae7afc0e107861b340f5d_prof);

    }

    // line 84
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7149fb730ea4d2853d6647fc9bbabfdbc5d1d15527455856e75b9f673605ac4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7149fb730ea4d2853d6647fc9bbabfdbc5d1d15527455856e75b9f673605ac4a->enter($__internal_7149fb730ea4d2853d6647fc9bbabfdbc5d1d15527455856e75b9f673605ac4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contact ";
        
        $__internal_7149fb730ea4d2853d6647fc9bbabfdbc5d1d15527455856e75b9f673605ac4a->leave($__internal_7149fb730ea4d2853d6647fc9bbabfdbc5d1d15527455856e75b9f673605ac4a_prof);

    }

    // line 85
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fe2dc7ad380d41aa76c7d2d10653ea703d5f90791090888efeddf5f354b5eed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2dc7ad380d41aa76c7d2d10653ea703d5f90791090888efeddf5f354b5eed3->enter($__internal_fe2dc7ad380d41aa76c7d2d10653ea703d5f90791090888efeddf5f354b5eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new contact ";
        
        $__internal_fe2dc7ad380d41aa76c7d2d10653ea703d5f90791090888efeddf5f354b5eed3->leave($__internal_fe2dc7ad380d41aa76c7d2d10653ea703d5f90791090888efeddf5f354b5eed3_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
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
                {{ macro.box_header('Choix Type Contact', true, false, 'primary') }}
                <br>
                
               
                    <div>
                        <h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            
                        </h4>
                        
                        <table  class=\"table table-bordered table-striped\">        
                                <thead>
                                <tr>
                                    <th>Id Type Contact</th>
                                    <th>Wording</th>
                                </tr>
                                </thead>
                                <tbody>
                        {%for typecontact in type_contacts%}

                                    <tr>
                                        <td><a href=\"{{ path('typecontact_show', { 'id': typecontact.id }) }}\">{{ typecontact.id }}</a></td>
                                        <td>{{ typecontact.name }}</td>
                                    </tr>
                            {%endfor%}
                                </tbody>
                            </table>
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Contact {% endblock %}
{% block page_subtitle %} add new contact {% endblock %}



", "contact/new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/contact/new.html.twig");
    }
}
