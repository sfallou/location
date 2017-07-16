<?php

/* :typemeuble:show.html.twig */
class __TwigTemplate_4718826cd0b60b65f3cea0b21a1dce70879e10ba527f2aa9fe7cf8a0f8b34385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typemeuble:show.html.twig", 1);
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
        $__internal_983b951ddad5772d856249218835ffe85177578a5736f91a5a7ee8bc6866390e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983b951ddad5772d856249218835ffe85177578a5736f91a5a7ee8bc6866390e->enter($__internal_983b951ddad5772d856249218835ffe85177578a5736f91a5a7ee8bc6866390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typemeuble:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_983b951ddad5772d856249218835ffe85177578a5736f91a5a7ee8bc6866390e->leave($__internal_983b951ddad5772d856249218835ffe85177578a5736f91a5a7ee8bc6866390e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1a1311c88a3afa3c803d5a57d191800e632e76cbd38a22c0afbcb7ff8946a33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1311c88a3afa3c803d5a57d191800e632e76cbd38a22c0afbcb7ff8946a33f->enter($__internal_1a1311c88a3afa3c803d5a57d191800e632e76cbd38a22c0afbcb7ff8946a33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typemeuble"]) ? $context["typemeuble"] : $this->getContext($context, "typemeuble")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_1a1311c88a3afa3c803d5a57d191800e632e76cbd38a22c0afbcb7ff8946a33f->leave($__internal_1a1311c88a3afa3c803d5a57d191800e632e76cbd38a22c0afbcb7ff8946a33f_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ef36deff23f479ac0b3989ec85584361cd906c892e48e273615c22f4cab6eb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef36deff23f479ac0b3989ec85584361cd906c892e48e273615c22f4cab6eb4d->enter($__internal_ef36deff23f479ac0b3989ec85584361cd906c892e48e273615c22f4cab6eb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Meuble ";
        
        $__internal_ef36deff23f479ac0b3989ec85584361cd906c892e48e273615c22f4cab6eb4d->leave($__internal_ef36deff23f479ac0b3989ec85584361cd906c892e48e273615c22f4cab6eb4d_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fe6d986867df029e4e8125980e4686ffa7c087d168b750e0e413174f5749069f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6d986867df029e4e8125980e4686ffa7c087d168b750e0e413174f5749069f->enter($__internal_fe6d986867df029e4e8125980e4686ffa7c087d168b750e0e413174f5749069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_fe6d986867df029e4e8125980e4686ffa7c087d168b750e0e413174f5749069f->leave($__internal_fe6d986867df029e4e8125980e4686ffa7c087d168b750e0e413174f5749069f_prof);

    }

    public function getTemplateName()
    {
        return ":typemeuble:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  74 => 26,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> {{typemeuble.id}}</li>
                                <li><strong>Nom :</strong> {{typemeuble.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Meuble {% endblock %}
{% block page_subtitle %} show {% endblock %}", ":typemeuble:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typemeuble/show.html.twig");
    }
}
