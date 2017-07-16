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
        $__internal_de64dfeaa0047e9020fd433c1d2a43484f4eae7f099f7e818ce3b223e2383b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de64dfeaa0047e9020fd433c1d2a43484f4eae7f099f7e818ce3b223e2383b95->enter($__internal_de64dfeaa0047e9020fd433c1d2a43484f4eae7f099f7e818ce3b223e2383b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_de64dfeaa0047e9020fd433c1d2a43484f4eae7f099f7e818ce3b223e2383b95->leave($__internal_de64dfeaa0047e9020fd433c1d2a43484f4eae7f099f7e818ce3b223e2383b95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e560df2c4325a4e1014460fc94acc88776cde809e4160183af259de4438d0d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e560df2c4325a4e1014460fc94acc88776cde809e4160183af259de4438d0d68->enter($__internal_e560df2c4325a4e1014460fc94acc88776cde809e4160183af259de4438d0d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e560df2c4325a4e1014460fc94acc88776cde809e4160183af259de4438d0d68->leave($__internal_e560df2c4325a4e1014460fc94acc88776cde809e4160183af259de4438d0d68_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e5959142dabff95a55fac4d20241594f51bad0edec52865c02c5cee83376686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5959142dabff95a55fac4d20241594f51bad0edec52865c02c5cee83376686->enter($__internal_0e5959142dabff95a55fac4d20241594f51bad0edec52865c02c5cee83376686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e5959142dabff95a55fac4d20241594f51bad0edec52865c02c5cee83376686->leave($__internal_0e5959142dabff95a55fac4d20241594f51bad0edec52865c02c5cee83376686_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50704def17c81bbf6dc2b33c979f57d2653486fd57182851d97fef4fa1fb5512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50704def17c81bbf6dc2b33c979f57d2653486fd57182851d97fef4fa1fb5512->enter($__internal_50704def17c81bbf6dc2b33c979f57d2653486fd57182851d97fef4fa1fb5512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50704def17c81bbf6dc2b33c979f57d2653486fd57182851d97fef4fa1fb5512->leave($__internal_50704def17c81bbf6dc2b33c979f57d2653486fd57182851d97fef4fa1fb5512_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c5ec0114e311de7a8a0d4fab6723dfe35bc889a2757dd8d00e2b1d1284d73b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5ec0114e311de7a8a0d4fab6723dfe35bc889a2757dd8d00e2b1d1284d73b2->enter($__internal_1c5ec0114e311de7a8a0d4fab6723dfe35bc889a2757dd8d00e2b1d1284d73b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c5ec0114e311de7a8a0d4fab6723dfe35bc889a2757dd8d00e2b1d1284d73b2->leave($__internal_1c5ec0114e311de7a8a0d4fab6723dfe35bc889a2757dd8d00e2b1d1284d73b2_prof);

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
