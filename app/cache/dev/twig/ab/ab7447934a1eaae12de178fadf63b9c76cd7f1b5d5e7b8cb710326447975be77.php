<?php

/* :default:new_residence.html.twig */
class __TwigTemplate_b303c7d30ce11f93565750dfecfb1126a52b93b8f6a27d357ab4deaf0a9519a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:new_residence.html.twig", 1);
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
        $__internal_02aad54d525aeb79b5460c0a0bf489977a3c75be52fa91c0283e1fed0c53d4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aad54d525aeb79b5460c0a0bf489977a3c75be52fa91c0283e1fed0c53d4ad->enter($__internal_02aad54d525aeb79b5460c0a0bf489977a3c75be52fa91c0283e1fed0c53d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02aad54d525aeb79b5460c0a0bf489977a3c75be52fa91c0283e1fed0c53d4ad->leave($__internal_02aad54d525aeb79b5460c0a0bf489977a3c75be52fa91c0283e1fed0c53d4ad_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b35d4a783aab05f8d433bed402603a47d8dd22cd8de2d2fc822dab46199c8446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35d4a783aab05f8d433bed402603a47d8dd22cd8de2d2fc822dab46199c8446->enter($__internal_b35d4a783aab05f8d433bed402603a47d8dd22cd8de2d2fc822dab46199c8446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_gardien", array()), 'row');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaire_gardien", array()), 'row');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_syndic", array()), 'row');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>

                        <!--button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button-->
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i>Submit</button>
                        ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Infos", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/img_appart.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_b35d4a783aab05f8d433bed402603a47d8dd22cd8de2d2fc822dab46199c8446->leave($__internal_b35d4a783aab05f8d433bed402603a47d8dd22cd8de2d2fc822dab46199c8446_prof);

    }

    // line 64
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_36e8185dbb466815d5aac13d82d40c8997a6d9b86d7f95d5c9169d3e7449c5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e8185dbb466815d5aac13d82d40c8997a6d9b86d7f95d5c9169d3e7449c5c4->enter($__internal_36e8185dbb466815d5aac13d82d40c8997a6d9b86d7f95d5c9169d3e7449c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Residences ";
        
        $__internal_36e8185dbb466815d5aac13d82d40c8997a6d9b86d7f95d5c9169d3e7449c5c4->leave($__internal_36e8185dbb466815d5aac13d82d40c8997a6d9b86d7f95d5c9169d3e7449c5c4_prof);

    }

    // line 65
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_96df6619fee1fc24ea9f70e3d0b9c842f88dc944f6d5df8c14c0015c2ad5e4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96df6619fee1fc24ea9f70e3d0b9c842f88dc944f6d5df8c14c0015c2ad5e4f7->enter($__internal_96df6619fee1fc24ea9f70e3d0b9c842f88dc944f6d5df8c14c0015c2ad5e4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new residence ";
        
        $__internal_96df6619fee1fc24ea9f70e3d0b9c842f88dc944f6d5df8c14c0015c2ad5e4f7->leave($__internal_96df6619fee1fc24ea9f70e3d0b9c842f88dc944f6d5df8c14c0015c2ad5e4f7_prof);

    }

    public function getTemplateName()
    {
        return ":default:new_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  148 => 64,  133 => 55,  128 => 53,  116 => 44,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                    {{ form_row(form.contact_gardien) }}
                    {{ form_row(form.horaire_gardien) }}
                    {{ form_row(form.contact_syndic) }}
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
                    <img src=\"{{ asset('bundles/app/images/img_appart.jpg') }}\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Residences {% endblock %}
{% block page_subtitle %} add new residence {% endblock %}", ":default:new_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/new_residence.html.twig");
    }
}
