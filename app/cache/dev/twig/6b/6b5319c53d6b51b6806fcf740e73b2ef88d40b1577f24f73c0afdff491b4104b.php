<?php

/* :typemeuble:new.html.twig */
class __TwigTemplate_ddbfbd683deeddc304b436a6d24f49f42d3431bf1fb75daba8f4bd97e5b2bb18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typemeuble:new.html.twig", 1);
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
        $__internal_5d8b411c205cf7d7ec878899d4c260f4ddb95a593e778e971ab69c58f6912913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8b411c205cf7d7ec878899d4c260f4ddb95a593e778e971ab69c58f6912913->enter($__internal_5d8b411c205cf7d7ec878899d4c260f4ddb95a593e778e971ab69c58f6912913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typemeuble:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d8b411c205cf7d7ec878899d4c260f4ddb95a593e778e971ab69c58f6912913->leave($__internal_5d8b411c205cf7d7ec878899d4c260f4ddb95a593e778e971ab69c58f6912913_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f6a6cb6598431d7b413f952791a9119fd7cc5bfee50a44dff01495ae3bbf62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a6cb6598431d7b413f952791a9119fd7cc5bfee50a44dff01495ae3bbf62ba->enter($__internal_f6a6cb6598431d7b413f952791a9119fd7cc5bfee50a44dff01495ae3bbf62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/type_meuble.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_f6a6cb6598431d7b413f952791a9119fd7cc5bfee50a44dff01495ae3bbf62ba->leave($__internal_f6a6cb6598431d7b413f952791a9119fd7cc5bfee50a44dff01495ae3bbf62ba_prof);

    }

    // line 61
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0ebb5a604b796b6c91c01b66d9edcf06d907b439c9afa5431c647f3083dab0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebb5a604b796b6c91c01b66d9edcf06d907b439c9afa5431c647f3083dab0b6->enter($__internal_0ebb5a604b796b6c91c01b66d9edcf06d907b439c9afa5431c647f3083dab0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type meuble ";
        
        $__internal_0ebb5a604b796b6c91c01b66d9edcf06d907b439c9afa5431c647f3083dab0b6->leave($__internal_0ebb5a604b796b6c91c01b66d9edcf06d907b439c9afa5431c647f3083dab0b6_prof);

    }

    // line 62
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_53510edf40b494b565922eedef1eb702b2f42bb1eb5afbdaf9150b2b84c6b42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53510edf40b494b565922eedef1eb702b2f42bb1eb5afbdaf9150b2b84c6b42b->enter($__internal_53510edf40b494b565922eedef1eb702b2f42bb1eb5afbdaf9150b2b84c6b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new \"type meuble\" ";
        
        $__internal_53510edf40b494b565922eedef1eb702b2f42bb1eb5afbdaf9150b2b84c6b42b->leave($__internal_53510edf40b494b565922eedef1eb702b2f42bb1eb5afbdaf9150b2b84c6b42b_prof);

    }

    public function getTemplateName()
    {
        return ":typemeuble:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  136 => 61,  121 => 52,  116 => 50,  104 => 41,  93 => 33,  89 => 32,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                {{ macro.box_header('Infos', true, false, 'primary') }}
                <div class=\"box-body\">
                    <img src=\"{{ asset('bundles/app/images/type_meuble.jpg') }}\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Type meuble {% endblock %}
{% block page_subtitle %} add new \"type meuble\" {% endblock %}", ":typemeuble:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/new.html.twig");
    }
}
