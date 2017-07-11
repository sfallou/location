<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_25ae0569e44d2ab736d8d3f6a0e13aafcb6db134774116cb212587b06cdb4478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
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
        $__internal_51dfbedf1b1045a8341261ee632c98bead4d2bbfcaa908a6a63062923b63e04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dfbedf1b1045a8341261ee632c98bead4d2bbfcaa908a6a63062923b63e04f->enter($__internal_51dfbedf1b1045a8341261ee632c98bead4d2bbfcaa908a6a63062923b63e04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51dfbedf1b1045a8341261ee632c98bead4d2bbfcaa908a6a63062923b63e04f->leave($__internal_51dfbedf1b1045a8341261ee632c98bead4d2bbfcaa908a6a63062923b63e04f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5fd8acc8eb6c40ec2a9c4f1683e8fd765d936af172afb00cb5a2c04d34629bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd8acc8eb6c40ec2a9c4f1683e8fd765d936af172afb00cb5a2c04d34629bb2->enter($__internal_5fd8acc8eb6c40ec2a9c4f1683e8fd765d936af172afb00cb5a2c04d34629bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <form action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    \t\t\t\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   \t\t\t\t \t<div>
       \t\t\t\t \t<input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    \t\t\t\t</div>
\t\t\t\t\t</form>
                </div>
               
            </div>

        </div>
       
    </div>


";
        
        $__internal_5fd8acc8eb6c40ec2a9c4f1683e8fd765d936af172afb00cb5a2c04d34629bb2->leave($__internal_5fd8acc8eb6c40ec2a9c4f1683e8fd765d936af172afb00cb5a2c04d34629bb2_prof);

    }

    // line 48
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bab1f5eb520ec3b7c6956fae6e4f8234fca75dffa42d0569e77d90ee11cbd50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab1f5eb520ec3b7c6956fae6e4f8234fca75dffa42d0569e77d90ee11cbd50f->enter($__internal_bab1f5eb520ec3b7c6956fae6e4f8234fca75dffa42d0569e77d90ee11cbd50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Registration ";
        
        $__internal_bab1f5eb520ec3b7c6956fae6e4f8234fca75dffa42d0569e77d90ee11cbd50f->leave($__internal_bab1f5eb520ec3b7c6956fae6e4f8234fca75dffa42d0569e77d90ee11cbd50f_prof);

    }

    // line 49
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4650b5e26d44b4ff99104a77b1d4ea1e9f413f4ac14f5d3d21793ac595d74227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4650b5e26d44b4ff99104a77b1d4ea1e9f413f4ac14f5d3d21793ac595d74227->enter($__internal_4650b5e26d44b4ff99104a77b1d4ea1e9f413f4ac14f5d3d21793ac595d74227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " add new user ";
        
        $__internal_4650b5e26d44b4ff99104a77b1d4ea1e9f413f4ac14f5d3d21793ac595d74227->leave($__internal_4650b5e26d44b4ff99104a77b1d4ea1e9f413f4ac14f5d3d21793ac595d74227_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  119 => 48,  99 => 34,  94 => 32,  88 => 31,  67 => 12,  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                    <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
    \t\t\t\t{{ form_widget(form) }}
   \t\t\t\t \t<div>
       \t\t\t\t \t<input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" />
    \t\t\t\t</div>
\t\t\t\t\t</form>
                </div>
               
            </div>

        </div>
       
    </div>


{% endblock %}

{% block page_title %} Registration {% endblock %}
{% block page_subtitle %} add new user {% endblock %}


", "FOSUserBundle:Registration:register_content.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
