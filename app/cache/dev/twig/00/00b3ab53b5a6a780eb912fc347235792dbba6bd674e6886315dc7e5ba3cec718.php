<?php

/* :typefix:show.html.twig */
class __TwigTemplate_3d8d881fac0b57686bed03c0b823236ee8715f1d64ab25f0be52526748786a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":typefix:show.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a3e34201384b0b930dbd4e4753e6bc83715f8dea134c026c799e8576f4e6b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3e34201384b0b930dbd4e4753e6bc83715f8dea134c026c799e8576f4e6b7f->enter($__internal_5a3e34201384b0b930dbd4e4753e6bc83715f8dea134c026c799e8576f4e6b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typefix:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3e34201384b0b930dbd4e4753e6bc83715f8dea134c026c799e8576f4e6b7f->leave($__internal_5a3e34201384b0b930dbd4e4753e6bc83715f8dea134c026c799e8576f4e6b7f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_336a75f3db359a2d73ed93a37e4e5fb8f7ebbd150f894b4c471721cbf190195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336a75f3db359a2d73ed93a37e4e5fb8f7ebbd150f894b4c471721cbf190195d->enter($__internal_336a75f3db359a2d73ed93a37e4e5fb8f7ebbd150f894b4c471721cbf190195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeFix"]) ? $context["typeFix"] : $this->getContext($context, "typeFix")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Nom :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeFix"]) ? $context["typeFix"] : $this->getContext($context, "typeFix")), "name", array()), "html", null, true);
        echo "</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
";
        
        $__internal_336a75f3db359a2d73ed93a37e4e5fb8f7ebbd150f894b4c471721cbf190195d->leave($__internal_336a75f3db359a2d73ed93a37e4e5fb8f7ebbd150f894b4c471721cbf190195d_prof);

    }

    // line 26
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_efc7b6188d238b7abb56b92b070febfea8162dcded8d3cfcff91f4732f9c4f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc7b6188d238b7abb56b92b070febfea8162dcded8d3cfcff91f4732f9c4f6f->enter($__internal_efc7b6188d238b7abb56b92b070febfea8162dcded8d3cfcff91f4732f9c4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Type Fix ";
        
        $__internal_efc7b6188d238b7abb56b92b070febfea8162dcded8d3cfcff91f4732f9c4f6f->leave($__internal_efc7b6188d238b7abb56b92b070febfea8162dcded8d3cfcff91f4732f9c4f6f_prof);

    }

    // line 27
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7aa259ac8fb6a322e1d7af9ec16c89139ff8935f0853f38216b20b2d83f43040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa259ac8fb6a322e1d7af9ec16c89139ff8935f0853f38216b20b2d83f43040->enter($__internal_7aa259ac8fb6a322e1d7af9ec16c89139ff8935f0853f38216b20b2d83f43040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_7aa259ac8fb6a322e1d7af9ec16c89139ff8935f0853f38216b20b2d83f43040->leave($__internal_7aa259ac8fb6a322e1d7af9ec16c89139ff8935f0853f38216b20b2d83f43040_prof);

    }

    public function getTemplateName()
    {
        return ":typefix:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  74 => 26,  59 => 16,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID :</strong> {{typeFix.id}}</li>
                                <li><strong>Nom :</strong> {{typeFix.name}}</li>
                            </ul>
                    </div>
                </div>              
        </div>
    </div>
            
{% endblock %}


{% block page_title %} Type Fix {% endblock %}
{% block page_subtitle %} show {% endblock %}
", ":typefix:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/typefix/show.html.twig");
    }
}
