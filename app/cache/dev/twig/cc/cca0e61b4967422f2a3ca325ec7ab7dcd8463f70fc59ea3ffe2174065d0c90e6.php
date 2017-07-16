<?php

/* :typecharge:new.html.twig */
class __TwigTemplate_e892fa4679bcb63f217a0819a81e55f931c49e43f2046209e3e2a478bffdd6fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typecharge:new.html.twig", 1);
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
        $__internal_ecc8e356eb34b841909e63b5d0a4710487f4d021c145632fbb6d8cbec13582d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc8e356eb34b841909e63b5d0a4710487f4d021c145632fbb6d8cbec13582d3->enter($__internal_ecc8e356eb34b841909e63b5d0a4710487f4d021c145632fbb6d8cbec13582d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typecharge:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc8e356eb34b841909e63b5d0a4710487f4d021c145632fbb6d8cbec13582d3->leave($__internal_ecc8e356eb34b841909e63b5d0a4710487f4d021c145632fbb6d8cbec13582d3_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1f977f85c3696a1a999dbffc6774d2089b7a8d9a213fd8efe51c19e428ce47ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f977f85c3696a1a999dbffc6774d2089b7a8d9a213fd8efe51c19e428ce47ff->enter($__internal_1f977f85c3696a1a999dbffc6774d2089b7a8d9a213fd8efe51c19e428ce47ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <div class=\"box-footer clearcharge\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/charge.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_1f977f85c3696a1a999dbffc6774d2089b7a8d9a213fd8efe51c19e428ce47ff->leave($__internal_1f977f85c3696a1a999dbffc6774d2089b7a8d9a213fd8efe51c19e428ce47ff_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c7ba6fedf92dc9c96f61f5b1ed18726c5a85893d9460453b85bf6b47f3975cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ba6fedf92dc9c96f61f5b1ed18726c5a85893d9460453b85bf6b47f3975cce->enter($__internal_c7ba6fedf92dc9c96f61f5b1ed18726c5a85893d9460453b85bf6b47f3975cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_c7ba6fedf92dc9c96f61f5b1ed18726c5a85893d9460453b85bf6b47f3975cce->leave($__internal_c7ba6fedf92dc9c96f61f5b1ed18726c5a85893d9460453b85bf6b47f3975cce_prof);

    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ffd40710c8bf3deca2051a7ae8e51962e9119a00bc7bc462d58b15941749a926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd40710c8bf3deca2051a7ae8e51962e9119a00bc7bc462d58b15941749a926->enter($__internal_ffd40710c8bf3deca2051a7ae8e51962e9119a00bc7bc462d58b15941749a926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new \"type charge\" ";
        
        $__internal_ffd40710c8bf3deca2051a7ae8e51962e9119a00bc7bc462d58b15941749a926->leave($__internal_ffd40710c8bf3deca2051a7ae8e51962e9119a00bc7bc462d58b15941749a926_prof);

    }

    public function getTemplateName()
    {
        return ":typecharge:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  135 => 60,  120 => 51,  115 => 49,  103 => 40,  93 => 33,  89 => 32,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                <div class=\"box-footer clearcharge\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        {{ form_end(form) }}


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('Infos', true, false, 'primary') }}
                <div class=\"box-body\">
                    <img src=\"{{ asset('bundles/app/images/charge.jpg') }}\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Type Charge {% endblock %}
{% block page_subtitle %} add new \"type charge\" {% endblock %}





", ":typecharge:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/new.html.twig");
    }
}
