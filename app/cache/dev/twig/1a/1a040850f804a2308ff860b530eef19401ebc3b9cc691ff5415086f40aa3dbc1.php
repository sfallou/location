<?php

/* :default:new_type_meuble.html.twig */
class __TwigTemplate_92ddc840aa8dab777173d2f30e62a0033e2569be5876e3281a93f3e86abaddc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:new_type_meuble.html.twig", 1);
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
        $__internal_d45a84e12f3d8a888ebff2977b20fbcb8192ac0f54ae9b4cd0cad9a4e23cfead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45a84e12f3d8a888ebff2977b20fbcb8192ac0f54ae9b4cd0cad9a4e23cfead->enter($__internal_d45a84e12f3d8a888ebff2977b20fbcb8192ac0f54ae9b4cd0cad9a4e23cfead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new_type_meuble.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45a84e12f3d8a888ebff2977b20fbcb8192ac0f54ae9b4cd0cad9a4e23cfead->leave($__internal_d45a84e12f3d8a888ebff2977b20fbcb8192ac0f54ae9b4cd0cad9a4e23cfead_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2ba452edfa58d7cd794473745fe73ef0c9f2f6e8f11b578a152e24bf811712a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba452edfa58d7cd794473745fe73ef0c9f2f6e8f11b578a152e24bf811712a1->enter($__internal_2ba452edfa58d7cd794473745fe73ef0c9f2f6e8f11b578a152e24bf811712a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
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
        
        $__internal_2ba452edfa58d7cd794473745fe73ef0c9f2f6e8f11b578a152e24bf811712a1->leave($__internal_2ba452edfa58d7cd794473745fe73ef0c9f2f6e8f11b578a152e24bf811712a1_prof);

    }

    // line 61
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_730e46bfe26f9ddc41b6c4e49ea9c06ae974d87a6c8ec83de7a40a1c9ef570b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730e46bfe26f9ddc41b6c4e49ea9c06ae974d87a6c8ec83de7a40a1c9ef570b2->enter($__internal_730e46bfe26f9ddc41b6c4e49ea9c06ae974d87a6c8ec83de7a40a1c9ef570b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Meuble ";
        
        $__internal_730e46bfe26f9ddc41b6c4e49ea9c06ae974d87a6c8ec83de7a40a1c9ef570b2->leave($__internal_730e46bfe26f9ddc41b6c4e49ea9c06ae974d87a6c8ec83de7a40a1c9ef570b2_prof);

    }

    // line 62
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e4dc2b722e30fc126760bf7249e5d574af1a9ac52cfd27c1d377abc2ed1e9b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dc2b722e30fc126760bf7249e5d574af1a9ac52cfd27c1d377abc2ed1e9b75->enter($__internal_e4dc2b722e30fc126760bf7249e5d574af1a9ac52cfd27c1d377abc2ed1e9b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new furniture type";
        
        $__internal_e4dc2b722e30fc126760bf7249e5d574af1a9ac52cfd27c1d377abc2ed1e9b75->leave($__internal_e4dc2b722e30fc126760bf7249e5d574af1a9ac52cfd27c1d377abc2ed1e9b75_prof);

    }

    public function getTemplateName()
    {
        return ":default:new_type_meuble.html.twig";
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
                    {{ form_row(form.name) }}
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

{% block page_title %} Type Meuble {% endblock %}
{% block page_subtitle %} add new furniture type{% endblock %}", ":default:new_type_meuble.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/new_type_meuble.html.twig");
    }
}
