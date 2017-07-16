<?php

/* ::base.html.twig */
class __TwigTemplate_48f3c02fdc4fd85bff6825389d5e8ad1680ecf5c4ae3a8fa394571f39033e1b1 extends Twig_Template
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
        $__internal_16cdab90c74860e91eb2febf1e9e7b7908cb72b116fd489de797b5a28b16444c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cdab90c74860e91eb2febf1e9e7b7908cb72b116fd489de797b5a28b16444c->enter($__internal_16cdab90c74860e91eb2febf1e9e7b7908cb72b116fd489de797b5a28b16444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_16cdab90c74860e91eb2febf1e9e7b7908cb72b116fd489de797b5a28b16444c->leave($__internal_16cdab90c74860e91eb2febf1e9e7b7908cb72b116fd489de797b5a28b16444c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e3c16a07aa2ad1bfc3634d02c141051b99026e009a859c52c5d2be53668224e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3c16a07aa2ad1bfc3634d02c141051b99026e009a859c52c5d2be53668224e->enter($__internal_0e3c16a07aa2ad1bfc3634d02c141051b99026e009a859c52c5d2be53668224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0e3c16a07aa2ad1bfc3634d02c141051b99026e009a859c52c5d2be53668224e->leave($__internal_0e3c16a07aa2ad1bfc3634d02c141051b99026e009a859c52c5d2be53668224e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdbeff8fb3eb17d9987c25639ed1709be514b5c0f19a4087534882bd96c2e355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbeff8fb3eb17d9987c25639ed1709be514b5c0f19a4087534882bd96c2e355->enter($__internal_cdbeff8fb3eb17d9987c25639ed1709be514b5c0f19a4087534882bd96c2e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cdbeff8fb3eb17d9987c25639ed1709be514b5c0f19a4087534882bd96c2e355->leave($__internal_cdbeff8fb3eb17d9987c25639ed1709be514b5c0f19a4087534882bd96c2e355_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a942296ba93a7e3d245471c987ab46cc9f8056ba8b45b7c3bd782826f1c4655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a942296ba93a7e3d245471c987ab46cc9f8056ba8b45b7c3bd782826f1c4655->enter($__internal_6a942296ba93a7e3d245471c987ab46cc9f8056ba8b45b7c3bd782826f1c4655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a942296ba93a7e3d245471c987ab46cc9f8056ba8b45b7c3bd782826f1c4655->leave($__internal_6a942296ba93a7e3d245471c987ab46cc9f8056ba8b45b7c3bd782826f1c4655_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_565d00398db70e69faf2759574ee14b131fc6e5ff18a00fea3d5949b703c33d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565d00398db70e69faf2759574ee14b131fc6e5ff18a00fea3d5949b703c33d1->enter($__internal_565d00398db70e69faf2759574ee14b131fc6e5ff18a00fea3d5949b703c33d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_565d00398db70e69faf2759574ee14b131fc6e5ff18a00fea3d5949b703c33d1->leave($__internal_565d00398db70e69faf2759574ee14b131fc6e5ff18a00fea3d5949b703c33d1_prof);

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
