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
        $__internal_07bd33aac43247899a644977ec00fb9d798deb50c56df55f02b27d33a5bbfbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bd33aac43247899a644977ec00fb9d798deb50c56df55f02b27d33a5bbfbef->enter($__internal_07bd33aac43247899a644977ec00fb9d798deb50c56df55f02b27d33a5bbfbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07bd33aac43247899a644977ec00fb9d798deb50c56df55f02b27d33a5bbfbef->leave($__internal_07bd33aac43247899a644977ec00fb9d798deb50c56df55f02b27d33a5bbfbef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a2be5dc9e1e52c10c6cf5e56268ad1bef7ed10bd0ed51a13d229f68ba3acdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2be5dc9e1e52c10c6cf5e56268ad1bef7ed10bd0ed51a13d229f68ba3acdd8->enter($__internal_0a2be5dc9e1e52c10c6cf5e56268ad1bef7ed10bd0ed51a13d229f68ba3acdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a2be5dc9e1e52c10c6cf5e56268ad1bef7ed10bd0ed51a13d229f68ba3acdd8->leave($__internal_0a2be5dc9e1e52c10c6cf5e56268ad1bef7ed10bd0ed51a13d229f68ba3acdd8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1623b01fa43d1b69ac500077e485aa7921b7e3c21b045857ce37aabc3955b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1623b01fa43d1b69ac500077e485aa7921b7e3c21b045857ce37aabc3955b1d->enter($__internal_f1623b01fa43d1b69ac500077e485aa7921b7e3c21b045857ce37aabc3955b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1623b01fa43d1b69ac500077e485aa7921b7e3c21b045857ce37aabc3955b1d->leave($__internal_f1623b01fa43d1b69ac500077e485aa7921b7e3c21b045857ce37aabc3955b1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e8dcaea599515f412b31f05c389a327f6215067edf5803562e531713ea83150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8dcaea599515f412b31f05c389a327f6215067edf5803562e531713ea83150->enter($__internal_9e8dcaea599515f412b31f05c389a327f6215067edf5803562e531713ea83150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9e8dcaea599515f412b31f05c389a327f6215067edf5803562e531713ea83150->leave($__internal_9e8dcaea599515f412b31f05c389a327f6215067edf5803562e531713ea83150_prof);

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
