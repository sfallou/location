<?php

/* typefix/new.html.twig */
class __TwigTemplate_bddeb7ec65613a1bc8774e0bacd7716324bdd4b676fce53d8e3a2bc601e10732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "typefix/new.html.twig", 1);
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
        $__internal_77ec80f2a62eda955f075f408f976bcd38400e26b5080c9356c47d40b4f08392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ec80f2a62eda955f075f408f976bcd38400e26b5080c9356c47d40b4f08392->enter($__internal_77ec80f2a62eda955f075f408f976bcd38400e26b5080c9356c47d40b4f08392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typefix/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ec80f2a62eda955f075f408f976bcd38400e26b5080c9356c47d40b4f08392->leave($__internal_77ec80f2a62eda955f075f408f976bcd38400e26b5080c9356c47d40b4f08392_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_80f4a246a84f4f8e2870c35a4d3d29878a858bd3d01be28b32092720b6144c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f4a246a84f4f8e2870c35a4d3d29878a858bd3d01be28b32092720b6144c70->enter($__internal_80f4a246a84f4f8e2870c35a4d3d29878a858bd3d01be28b32092720b6144c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/fix.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_80f4a246a84f4f8e2870c35a4d3d29878a858bd3d01be28b32092720b6144c70->leave($__internal_80f4a246a84f4f8e2870c35a4d3d29878a858bd3d01be28b32092720b6144c70_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b3c94999c6e28a8212d0eb6866eb0f20c797fdaac0fe9d22b25826483c8bbb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c94999c6e28a8212d0eb6866eb0f20c797fdaac0fe9d22b25826483c8bbb4f->enter($__internal_b3c94999c6e28a8212d0eb6866eb0f20c797fdaac0fe9d22b25826483c8bbb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_b3c94999c6e28a8212d0eb6866eb0f20c797fdaac0fe9d22b25826483c8bbb4f->leave($__internal_b3c94999c6e28a8212d0eb6866eb0f20c797fdaac0fe9d22b25826483c8bbb4f_prof);

    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bb5a55cbd7456ed0bac1b4c464761abeb1a01f8aebb9c06fd74ba90cdbd224fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5a55cbd7456ed0bac1b4c464761abeb1a01f8aebb9c06fd74ba90cdbd224fe->enter($__internal_bb5a55cbd7456ed0bac1b4c464761abeb1a01f8aebb9c06fd74ba90cdbd224fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new \"type fix\" ";
        
        $__internal_bb5a55cbd7456ed0bac1b4c464761abeb1a01f8aebb9c06fd74ba90cdbd224fe->leave($__internal_bb5a55cbd7456ed0bac1b4c464761abeb1a01f8aebb9c06fd74ba90cdbd224fe_prof);

    }

    public function getTemplateName()
    {
        return "typefix/new.html.twig";
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
                <div class=\"box-footer clearfix\">

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
                    <img src=\"{{ asset('bundles/app/images/fix.jpg') }}\" width=\"100%\" height=\"100%\">
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Type Fix {% endblock %}
{% block page_subtitle %} add new \"type fix\" {% endblock %}

", "typefix/new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/new.html.twig");
    }
}
