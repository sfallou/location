<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2f3aae4d6bc54a61b157196fe4dc03e1ea0a3ff907697b2ce95cc812a1be1d35 extends Twig_Template
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
        $__internal_26100aabccb57358caa9b5d4605543061669c39c50be06c6cda251dc3867f8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26100aabccb57358caa9b5d4605543061669c39c50be06c6cda251dc3867f8d0->enter($__internal_26100aabccb57358caa9b5d4605543061669c39c50be06c6cda251dc3867f8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_26100aabccb57358caa9b5d4605543061669c39c50be06c6cda251dc3867f8d0->leave($__internal_26100aabccb57358caa9b5d4605543061669c39c50be06c6cda251dc3867f8d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
