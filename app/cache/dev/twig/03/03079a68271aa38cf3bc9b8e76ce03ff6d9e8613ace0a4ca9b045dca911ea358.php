<?php

/* :meuble:edit.html.twig */
class __TwigTemplate_45ed6c89a5105b9fed5052e530f237f384c76675530f4714542234d0102980be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":meuble:edit.html.twig", 1);
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
        $__internal_f245bc5c176cfe87af7f55a054d62c6dfd19b7467b77737f42000f62be5427b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f245bc5c176cfe87af7f55a054d62c6dfd19b7467b77737f42000f62be5427b8->enter($__internal_f245bc5c176cfe87af7f55a054d62c6dfd19b7467b77737f42000f62be5427b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":meuble:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f245bc5c176cfe87af7f55a054d62c6dfd19b7467b77737f42000f62be5427b8->leave($__internal_f245bc5c176cfe87af7f55a054d62c6dfd19b7467b77737f42000f62be5427b8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a8a184d5d6651b2e56e3522bcee41f41624fa716cf07dea2b3fef24eb144702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a184d5d6651b2e56e3522bcee41f41624fa716cf07dea2b3fef24eb144702a->enter($__internal_a8a184d5d6651b2e56e3522bcee41f41624fa716cf07dea2b3fef24eb144702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/appartement.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_a8a184d5d6651b2e56e3522bcee41f41624fa716cf07dea2b3fef24eb144702a->leave($__internal_a8a184d5d6651b2e56e3522bcee41f41624fa716cf07dea2b3fef24eb144702a_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3f8c4a758e187a787c5f23c5f00c10f7f5bc6590103210580634fd77f2830dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8c4a758e187a787c5f23c5f00c10f7f5bc6590103210580634fd77f2830dee->enter($__internal_3f8c4a758e187a787c5f23c5f00c10f7f5bc6590103210580634fd77f2830dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Meuble ";
        
        $__internal_3f8c4a758e187a787c5f23c5f00c10f7f5bc6590103210580634fd77f2830dee->leave($__internal_3f8c4a758e187a787c5f23c5f00c10f7f5bc6590103210580634fd77f2830dee_prof);

    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_762cb72cedbf41e91e79f8851964920fc775c2f3fb5d07b5d9f2a73c7565d97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762cb72cedbf41e91e79f8851964920fc775c2f3fb5d07b5d9f2a73c7565d97f->enter($__internal_762cb72cedbf41e91e79f8851964920fc775c2f3fb5d07b5d9f2a73c7565d97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " meuble edit";
        
        $__internal_762cb72cedbf41e91e79f8851964920fc775c2f3fb5d07b5d9f2a73c7565d97f->leave($__internal_762cb72cedbf41e91e79f8851964920fc775c2f3fb5d07b5d9f2a73c7565d97f_prof);

    }

    public function getTemplateName()
    {
        return ":meuble:edit.html.twig";
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
                    {{ form_start(edit_form) }}
                        {{ form_widget(edit_form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        {{ form_end(edit_form) }}


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

{% block page_title %} Meuble {% endblock %}
{% block page_subtitle %} meuble edit{% endblock %}

", ":meuble:edit.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/meuble/edit.html.twig");
    }
}
