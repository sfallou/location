<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_960f6dd17e0b49018f367dc4a26b12d1fd3b51bb7a1af016e9c356f329337ac4 extends Twig_Template
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
        $__internal_57f72c384571dabdbe34f7b396015c52b2b8efdbd311e8325e9b86b281888fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f72c384571dabdbe34f7b396015c52b2b8efdbd311e8325e9b86b281888fb2->enter($__internal_57f72c384571dabdbe34f7b396015c52b2b8efdbd311e8325e9b86b281888fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_57f72c384571dabdbe34f7b396015c52b2b8efdbd311e8325e9b86b281888fb2->leave($__internal_57f72c384571dabdbe34f7b396015c52b2b8efdbd311e8325e9b86b281888fb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
