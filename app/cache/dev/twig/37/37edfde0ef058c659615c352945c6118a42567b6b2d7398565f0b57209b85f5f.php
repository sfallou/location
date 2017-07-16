<?php

/* :default:new_appart.html.twig */
class __TwigTemplate_8d6c9595cd61751effae834d2c8dc9acee1da15ff20a3ba9ace378fd629fe477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:new_appart.html.twig", 1);
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
        $__internal_af6139ca703a1d81a8ac680695a39ae8341bd6bc069349b5e54f8efe90c32f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6139ca703a1d81a8ac680695a39ae8341bd6bc069349b5e54f8efe90c32f56->enter($__internal_af6139ca703a1d81a8ac680695a39ae8341bd6bc069349b5e54f8efe90c32f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new_appart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af6139ca703a1d81a8ac680695a39ae8341bd6bc069349b5e54f8efe90c32f56->leave($__internal_af6139ca703a1d81a8ac680695a39ae8341bd6bc069349b5e54f8efe90c32f56_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8f03daff2d60415bb1ccc68c12a44bbd8cd54c3ee2aaaaedfd975d44570e3bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f03daff2d60415bb1ccc68c12a44bbd8cd54c3ee2aaaaedfd975d44570e3bb3->enter($__internal_8f03daff2d60415bb1ccc68c12a44bbd8cd54c3ee2aaaaedfd975d44570e3bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'row');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wifi_code", array()), 'row');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rib", array()), 'row');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_appart", array()), 'row');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_residence", array()), 'row');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <!--button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button-->
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/appartement.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_8f03daff2d60415bb1ccc68c12a44bbd8cd54c3ee2aaaaedfd975d44570e3bb3->leave($__internal_8f03daff2d60415bb1ccc68c12a44bbd8cd54c3ee2aaaaedfd975d44570e3bb3_prof);

    }

    // line 67
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0eef4b3b8d3e0348ca2963ed77a964ed0dc16a93d07c2d17ca17e1fa814d6ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eef4b3b8d3e0348ca2963ed77a964ed0dc16a93d07c2d17ca17e1fa814d6ed1->enter($__internal_0eef4b3b8d3e0348ca2963ed77a964ed0dc16a93d07c2d17ca17e1fa814d6ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartment ";
        
        $__internal_0eef4b3b8d3e0348ca2963ed77a964ed0dc16a93d07c2d17ca17e1fa814d6ed1->leave($__internal_0eef4b3b8d3e0348ca2963ed77a964ed0dc16a93d07c2d17ca17e1fa814d6ed1_prof);

    }

    // line 68
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cb73428799e295febc64832522aafa23d5cac7e374499c8bd3e0d9186881b98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb73428799e295febc64832522aafa23d5cac7e374499c8bd3e0d9186881b98f->enter($__internal_cb73428799e295febc64832522aafa23d5cac7e374499c8bd3e0d9186881b98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new appartement ";
        
        $__internal_cb73428799e295febc64832522aafa23d5cac7e374499c8bd3e0d9186881b98f->leave($__internal_cb73428799e295febc64832522aafa23d5cac7e374499c8bd3e0d9186881b98f_prof);

    }

    public function getTemplateName()
    {
        return ":default:new_appart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  160 => 67,  145 => 58,  140 => 56,  128 => 47,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                    {{ form_row(form.adresse) }}
                    {{ form_row(form.surface) }}
                    {{ form_row(form.wifi_code) }}
                    {{ form_row(form.rib) }}
                    {{ form_row(form.phone) }}
                    {{ form_row(form.contact_appart) }}
                    {{ form_row(form.id_residence) }}
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
                {{ macro.box_header('Infos', true, false, 'primary') }}
                <div class=\"box-body\">
                    <img src=\"{{ asset('bundles/app/images/appartement.jpg') }}\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Appartment {% endblock %}
{% block page_subtitle %} add new appartement {% endblock %}", ":default:new_appart.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/new_appart.html.twig");
    }
}
