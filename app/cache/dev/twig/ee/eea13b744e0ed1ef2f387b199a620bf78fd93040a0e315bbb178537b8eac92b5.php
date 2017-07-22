<?php

/* ::base.html.twig */
class __TwigTemplate_2914c7278f539b7b8f442108ef749fbdbe1ad93fab00ea325b08fbc3fe5a548e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a65aad3e845dacf9ddc8a9322d688139cfaf4481aa82a8ee66c2d7f10e6cb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a65aad3e845dacf9ddc8a9322d688139cfaf4481aa82a8ee66c2d7f10e6cb53->enter($__internal_6a65aad3e845dacf9ddc8a9322d688139cfaf4481aa82a8ee66c2d7f10e6cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a65aad3e845dacf9ddc8a9322d688139cfaf4481aa82a8ee66c2d7f10e6cb53->leave($__internal_6a65aad3e845dacf9ddc8a9322d688139cfaf4481aa82a8ee66c2d7f10e6cb53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58741ffc546f334306d52c6f84f9365e8c6c6b3311ea83ea12de7df152dd600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58741ffc546f334306d52c6f84f9365e8c6c6b3311ea83ea12de7df152dd600c->enter($__internal_58741ffc546f334306d52c6f84f9365e8c6c6b3311ea83ea12de7df152dd600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58741ffc546f334306d52c6f84f9365e8c6c6b3311ea83ea12de7df152dd600c->leave($__internal_58741ffc546f334306d52c6f84f9365e8c6c6b3311ea83ea12de7df152dd600c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdd316f6bbbd8a8e46c8cb05ddf0a734b08ef240fc9c25d26b5b71d3bff074ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd316f6bbbd8a8e46c8cb05ddf0a734b08ef240fc9c25d26b5b71d3bff074ed->enter($__internal_fdd316f6bbbd8a8e46c8cb05ddf0a734b08ef240fc9c25d26b5b71d3bff074ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fdd316f6bbbd8a8e46c8cb05ddf0a734b08ef240fc9c25d26b5b71d3bff074ed->leave($__internal_fdd316f6bbbd8a8e46c8cb05ddf0a734b08ef240fc9c25d26b5b71d3bff074ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0885287057bc02ed10725167f21bbee782474310e0d519913b07572e4698f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0885287057bc02ed10725167f21bbee782474310e0d519913b07572e4698f37->enter($__internal_c0885287057bc02ed10725167f21bbee782474310e0d519913b07572e4698f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0885287057bc02ed10725167f21bbee782474310e0d519913b07572e4698f37->leave($__internal_c0885287057bc02ed10725167f21bbee782474310e0d519913b07572e4698f37_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8204d0076cfd2e881986db351fb11e1c3b286ab33a069f67dd036dc43064f61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8204d0076cfd2e881986db351fb11e1c3b286ab33a069f67dd036dc43064f61b->enter($__internal_8204d0076cfd2e881986db351fb11e1c3b286ab33a069f67dd036dc43064f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8204d0076cfd2e881986db351fb11e1c3b286ab33a069f67dd036dc43064f61b->leave($__internal_8204d0076cfd2e881986db351fb11e1c3b286ab33a069f67dd036dc43064f61b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/base.html.twig");
    }
}
