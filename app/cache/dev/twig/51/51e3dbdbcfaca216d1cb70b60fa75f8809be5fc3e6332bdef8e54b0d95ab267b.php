<?php

/* default/start.html.twig */
class __TwigTemplate_bc44bdb60ea71e54b011947fc5810b004f7cc8587c10e5421b956d8803215ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e29a4cc6d4bca7d90d4a068e71c3e6bcd23443a232e00917ff78612b4eae0304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29a4cc6d4bca7d90d4a068e71c3e6bcd23443a232e00917ff78612b4eae0304->enter($__internal_e29a4cc6d4bca7d90d4a068e71c3e6bcd23443a232e00917ff78612b4eae0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/start.html.twig"));

        // line 2
        echo "<h3>You did it! You registered!</h3>

Hi ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! You're successfully registered.

";
        // line 7
        echo "To login, go to: <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">...</a>.

Thanks!

";
        
        $__internal_e29a4cc6d4bca7d90d4a068e71c3e6bcd23443a232e00917ff78612b4eae0304->leave($__internal_e29a4cc6d4bca7d90d4a068e71c3e6bcd23443a232e00917ff78612b4eae0304_prof);

    }

    public function getTemplateName()
    {
        return "default/start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Emails/registration.html.twig #}
<h3>You did it! You registered!</h3>

Hi {{ name }}! You're successfully registered.

{# example, assuming you have a route named \"login\" #}
To login, go to: <a href=\"{{ url('login') }}\">...</a>.

Thanks!

", "default/start.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/start.html.twig");
    }
}
