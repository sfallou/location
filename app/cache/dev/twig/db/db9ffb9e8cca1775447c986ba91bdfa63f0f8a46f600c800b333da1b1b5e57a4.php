<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e62c0654015efdda94025fef90dc8e0dea034616de40f9b218ccd593646d2072 extends Twig_Template
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
        $__internal_67f73dce019ef62c81dec6c5267378fdecdb84d4b6061bcaddf09e1eaffdb59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f73dce019ef62c81dec6c5267378fdecdb84d4b6061bcaddf09e1eaffdb59c->enter($__internal_67f73dce019ef62c81dec6c5267378fdecdb84d4b6061bcaddf09e1eaffdb59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_67f73dce019ef62c81dec6c5267378fdecdb84d4b6061bcaddf09e1eaffdb59c->leave($__internal_67f73dce019ef62c81dec6c5267378fdecdb84d4b6061bcaddf09e1eaffdb59c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
