<?php

/* :userroom:new.html.twig */
class __TwigTemplate_406f803b71618f37c2b79995f3760e6373f2f08a2454ba0142f2e8447d43b597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userroom:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb90dc83a4e3331199daf55da879df902bb8db263ef6bd7aeaf087c3d31bac8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb90dc83a4e3331199daf55da879df902bb8db263ef6bd7aeaf087c3d31bac8a->enter($__internal_cb90dc83a4e3331199daf55da879df902bb8db263ef6bd7aeaf087c3d31bac8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userroom:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb90dc83a4e3331199daf55da879df902bb8db263ef6bd7aeaf087c3d31bac8a->leave($__internal_cb90dc83a4e3331199daf55da879df902bb8db263ef6bd7aeaf087c3d31bac8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b2438dd8a90dfe5db9a5416ba6520132ada214dde25360a0a767bd164a7a35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2438dd8a90dfe5db9a5416ba6520132ada214dde25360a0a767bd164a7a35b->enter($__internal_2b2438dd8a90dfe5db9a5416ba6520132ada214dde25360a0a767bd164a7a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userroom creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userroom_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2b2438dd8a90dfe5db9a5416ba6520132ada214dde25360a0a767bd164a7a35b->leave($__internal_2b2438dd8a90dfe5db9a5416ba6520132ada214dde25360a0a767bd164a7a35b_prof);

    }

    public function getTemplateName()
    {
        return ":userroom:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Userroom creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('userroom_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":userroom:new.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/userroom/new.html.twig");
    }
}
