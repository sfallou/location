<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_218b34938a5a514622b76847c24aea1ed3a71148495a873e899edbc769cf1e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6502f925fcfe12c54e112fafe256f576a55287cab742e786bd1a25d0f549f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6502f925fcfe12c54e112fafe256f576a55287cab742e786bd1a25d0f549f83->enter($__internal_a6502f925fcfe12c54e112fafe256f576a55287cab742e786bd1a25d0f549f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6502f925fcfe12c54e112fafe256f576a55287cab742e786bd1a25d0f549f83->leave($__internal_a6502f925fcfe12c54e112fafe256f576a55287cab742e786bd1a25d0f549f83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3bb6b36c58edb564c2b1de18912828b738fe027e4e0a371acb2e38502112000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bb6b36c58edb564c2b1de18912828b738fe027e4e0a371acb2e38502112000->enter($__internal_f3bb6b36c58edb564c2b1de18912828b738fe027e4e0a371acb2e38502112000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3bb6b36c58edb564c2b1de18912828b738fe027e4e0a371acb2e38502112000->leave($__internal_f3bb6b36c58edb564c2b1de18912828b738fe027e4e0a371acb2e38502112000_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa5d1c0ab4d5f44cf35eadd9f1796363c15f93bb9c92bac208e62e7dec2cd08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5d1c0ab4d5f44cf35eadd9f1796363c15f93bb9c92bac208e62e7dec2cd08d->enter($__internal_fa5d1c0ab4d5f44cf35eadd9f1796363c15f93bb9c92bac208e62e7dec2cd08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa5d1c0ab4d5f44cf35eadd9f1796363c15f93bb9c92bac208e62e7dec2cd08d->leave($__internal_fa5d1c0ab4d5f44cf35eadd9f1796363c15f93bb9c92bac208e62e7dec2cd08d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2636289ce27addc57d5a093d2d5d49da47901b18c23756ebf5c423a54f904e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2636289ce27addc57d5a093d2d5d49da47901b18c23756ebf5c423a54f904e51->enter($__internal_2636289ce27addc57d5a093d2d5d49da47901b18c23756ebf5c423a54f904e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2636289ce27addc57d5a093d2d5d49da47901b18c23756ebf5c423a54f904e51->leave($__internal_2636289ce27addc57d5a093d2d5d49da47901b18c23756ebf5c423a54f904e51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
