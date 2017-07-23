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
        $__internal_4e6c4c7b5213f413c2619a1baef5b21683e5917d7c63ff032f408131e524aa9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6c4c7b5213f413c2619a1baef5b21683e5917d7c63ff032f408131e524aa9f->enter($__internal_4e6c4c7b5213f413c2619a1baef5b21683e5917d7c63ff032f408131e524aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4e6c4c7b5213f413c2619a1baef5b21683e5917d7c63ff032f408131e524aa9f->leave($__internal_4e6c4c7b5213f413c2619a1baef5b21683e5917d7c63ff032f408131e524aa9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_626bfe5f8c0b2f4da1bb91e00101e69ff703769d1aa6e49ec303132b09fc5db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626bfe5f8c0b2f4da1bb91e00101e69ff703769d1aa6e49ec303132b09fc5db2->enter($__internal_626bfe5f8c0b2f4da1bb91e00101e69ff703769d1aa6e49ec303132b09fc5db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_626bfe5f8c0b2f4da1bb91e00101e69ff703769d1aa6e49ec303132b09fc5db2->leave($__internal_626bfe5f8c0b2f4da1bb91e00101e69ff703769d1aa6e49ec303132b09fc5db2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b27a49c6cbd364f86383ed77384473964e8d5c64939358011c510446e33400b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b27a49c6cbd364f86383ed77384473964e8d5c64939358011c510446e33400b->enter($__internal_8b27a49c6cbd364f86383ed77384473964e8d5c64939358011c510446e33400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b27a49c6cbd364f86383ed77384473964e8d5c64939358011c510446e33400b->leave($__internal_8b27a49c6cbd364f86383ed77384473964e8d5c64939358011c510446e33400b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32e1a846dbb97c0ff4dbc399d4ec09476d2320c091df8d9a9d0acf60defc7a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e1a846dbb97c0ff4dbc399d4ec09476d2320c091df8d9a9d0acf60defc7a22->enter($__internal_32e1a846dbb97c0ff4dbc399d4ec09476d2320c091df8d9a9d0acf60defc7a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32e1a846dbb97c0ff4dbc399d4ec09476d2320c091df8d9a9d0acf60defc7a22->leave($__internal_32e1a846dbb97c0ff4dbc399d4ec09476d2320c091df8d9a9d0acf60defc7a22_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_661083244afcfb2f712c2fcdfd2d1f40543c6479235a62732db894db7809bce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661083244afcfb2f712c2fcdfd2d1f40543c6479235a62732db894db7809bce5->enter($__internal_661083244afcfb2f712c2fcdfd2d1f40543c6479235a62732db894db7809bce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_661083244afcfb2f712c2fcdfd2d1f40543c6479235a62732db894db7809bce5->leave($__internal_661083244afcfb2f712c2fcdfd2d1f40543c6479235a62732db894db7809bce5_prof);

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
