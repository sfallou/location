<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_555b49d674ebc8ba236808c07becd3283897857d43fd5af4f43b23eb4aa3f5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593b184e091afdd8122f611fff40ded141f32ef4a45080d5b141448db8f9d867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593b184e091afdd8122f611fff40ded141f32ef4a45080d5b141448db8f9d867->enter($__internal_593b184e091afdd8122f611fff40ded141f32ef4a45080d5b141448db8f9d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593b184e091afdd8122f611fff40ded141f32ef4a45080d5b141448db8f9d867->leave($__internal_593b184e091afdd8122f611fff40ded141f32ef4a45080d5b141448db8f9d867_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_557c3c2d9ab511c13971b7037150067ac4d40f3c9da24d8351fb70a2fa7d7c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557c3c2d9ab511c13971b7037150067ac4d40f3c9da24d8351fb70a2fa7d7c29->enter($__internal_557c3c2d9ab511c13971b7037150067ac4d40f3c9da24d8351fb70a2fa7d7c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div>
            <div>
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "               
            ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 11
        echo "        </div>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dash");
        echo "\"><b>Créer un compte</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Registration Form</p>
           
            ";
        // line 29
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 29)->display($context);
        // line 30
        echo "

        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_557c3c2d9ab511c13971b7037150067ac4d40f3c9da24d8351fb70a2fa7d7c29->leave($__internal_557c3c2d9ab511c13971b7037150067ac4d40f3c9da24d8351fb70a2fa7d7c29_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  105 => 29,  97 => 24,  91 => 20,  85 => 19,  76 => 16,  71 => 15,  66 => 14,  62 => 13,  58 => 11,  50 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}

{% block page_content %}
    <div>
            <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
               
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}


    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('admin_dash') }}\"><b>Créer un compte</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Registration Form</p>
           
            {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}


        </div><!-- /.login-box-body -->
    </div>
{% endblock %}

", "FOSUserBundle:Registration:register.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
