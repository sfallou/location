<?php

/* AvanzuAdminThemeBundle:Default:add_residence.html.twig */
class __TwigTemplate_ad43ef95bcddfc479843608545af75d7727e5f00d85f8d644347c13ceca29bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", 1);
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
        $__internal_9ab5cc0e67b4e36ae82a3b85f0b9fdded4366b5bd6a1566650b5a2eabb1eac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab5cc0e67b4e36ae82a3b85f0b9fdded4366b5bd6a1566650b5a2eabb1eac72->enter($__internal_9ab5cc0e67b4e36ae82a3b85f0b9fdded4366b5bd6a1566650b5a2eabb1eac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:add_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ab5cc0e67b4e36ae82a3b85f0b9fdded4366b5bd6a1566650b5a2eabb1eac72->leave($__internal_9ab5cc0e67b4e36ae82a3b85f0b9fdded4366b5bd6a1566650b5a2eabb1eac72_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_54a8cfc6f47516e15bc025f3cc3816f50076dc3a05514b93be29f835f86979e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a8cfc6f47516e15bc025f3cc3816f50076dc3a05514b93be29f835f86979e7->enter($__internal_54a8cfc6f47516e15bc025f3cc3816f50076dc3a05514b93be29f835f86979e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
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
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Add Residence</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_54a8cfc6f47516e15bc025f3cc3816f50076dc3a05514b93be29f835f86979e7->leave($__internal_54a8cfc6f47516e15bc025f3cc3816f50076dc3a05514b93be29f835f86979e7_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7b50733421fe6ea132a6fb01fc2c98d707ffea67fdb8582f4db08e4cccc273ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b50733421fe6ea132a6fb01fc2c98d707ffea67fdb8582f4db08e4cccc273ed->enter($__internal_7b50733421fe6ea132a6fb01fc2c98d707ffea67fdb8582f4db08e4cccc273ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Formulaire ";
        
        $__internal_7b50733421fe6ea132a6fb01fc2c98d707ffea67fdb8582f4db08e4cccc273ed->leave($__internal_7b50733421fe6ea132a6fb01fc2c98d707ffea67fdb8582f4db08e4cccc273ed_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_511048b080c9c3641322e3bd1bde4b1042fca0af8ce202b5c215e6686e6896a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511048b080c9c3641322e3bd1bde4b1042fca0af8ce202b5c215e6686e6896a6->enter($__internal_511048b080c9c3641322e3bd1bde4b1042fca0af8ce202b5c215e6686e6896a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Résidence ";
        
        $__internal_511048b080c9c3641322e3bd1bde4b1042fca0af8ce202b5c215e6686e6896a6->leave($__internal_511048b080c9c3641322e3bd1bde4b1042fca0af8ce202b5c215e6686e6896a6_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:add_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
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
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Add Residence</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Formulaire {% endblock %}
{% block page_subtitle %} Résidence {% endblock %}", "AvanzuAdminThemeBundle:Default:add_residence.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/add_residence.html.twig");
    }
}
