<?php

/* AvanzuAdminThemeBundle:Sidebar:search-form.html.twig */
class __TwigTemplate_de4f6334710689fe78467cb6147f868c27c7caf1b0715251eaf44058e77642c1 extends Twig_Template
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
        $__internal_e984f5e6c6599cc322022d17ce320c5558cf4a8e34e4cc84f1f964ab0a722a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e984f5e6c6599cc322022d17ce320c5558cf4a8e34e4cc84f1f964ab0a722a39->enter($__internal_e984f5e6c6599cc322022d17ce320c5558cf4a8e34e4cc84f1f964ab0a722a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

        // line 1
        echo "<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->";
        
        $__internal_e984f5e6c6599cc322022d17ce320c5558cf4a8e34e4cc84f1f964ab0a722a39->leave($__internal_e984f5e6c6599cc322022d17ce320c5558cf4a8e34e4cc84f1f964ab0a722a39_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig";
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
        return new Twig_Source("<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Sidebar/search-form.html.twig");
    }
}
