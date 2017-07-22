<?php

/* typecharge/new.html.twig */
class __TwigTemplate_ee282f642d0621a3368acbaac3bb5ffbf09d250b12c4178275f7738bae5c60c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typecharge/new.html.twig", 1);
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
        $__internal_b395cede3ab3a7343d11efb7dd97a8f543b9897d7680a565ca2c58c03df2a4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b395cede3ab3a7343d11efb7dd97a8f543b9897d7680a565ca2c58c03df2a4a4->enter($__internal_b395cede3ab3a7343d11efb7dd97a8f543b9897d7680a565ca2c58c03df2a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecharge/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b395cede3ab3a7343d11efb7dd97a8f543b9897d7680a565ca2c58c03df2a4a4->leave($__internal_b395cede3ab3a7343d11efb7dd97a8f543b9897d7680a565ca2c58c03df2a4a4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c1c696ef2b48d4d4eef8d71d6e8a5668cceae62eae430b026282a2537b4a987c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c696ef2b48d4d4eef8d71d6e8a5668cceae62eae430b026282a2537b4a987c->enter($__internal_c1c696ef2b48d4d4eef8d71d6e8a5668cceae62eae430b026282a2537b4a987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_c1c696ef2b48d4d4eef8d71d6e8a5668cceae62eae430b026282a2537b4a987c->leave($__internal_c1c696ef2b48d4d4eef8d71d6e8a5668cceae62eae430b026282a2537b4a987c_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f01564a89dabfb66059b5764e98e64e5b3609e5629ed39c89463ba9dc2cc860f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01564a89dabfb66059b5764e98e64e5b3609e5629ed39c89463ba9dc2cc860f->enter($__internal_f01564a89dabfb66059b5764e98e64e5b3609e5629ed39c89463ba9dc2cc860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Charge ";
        
        $__internal_f01564a89dabfb66059b5764e98e64e5b3609e5629ed39c89463ba9dc2cc860f->leave($__internal_f01564a89dabfb66059b5764e98e64e5b3609e5629ed39c89463ba9dc2cc860f_prof);

    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7b51a4a3718f3d7db75088515d366d9e39f60dbae28aea179ffecf0cd599de5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b51a4a3718f3d7db75088515d366d9e39f60dbae28aea179ffecf0cd599de5d->enter($__internal_7b51a4a3718f3d7db75088515d366d9e39f60dbae28aea179ffecf0cd599de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new \"type charge\" ";
        
        $__internal_7b51a4a3718f3d7db75088515d366d9e39f60dbae28aea179ffecf0cd599de5d->leave($__internal_7b51a4a3718f3d7db75088515d366d9e39f60dbae28aea179ffecf0cd599de5d_prof);

    }

    public function getTemplateName()
    {
        return "typecharge/new.html.twig";
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





", "typecharge/new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typecharge/new.html.twig");
    }
}
