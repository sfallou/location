<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_77b81d9a1e32f610e0bcd8f55102ce5df050cc4395e9a4d3e4d9712ae12d1340 extends Twig_Template
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
        $__internal_db7a65a5303c5f1eb17b096fb89434faff47d36f8df9bc9e0bb07d1f963ad57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7a65a5303c5f1eb17b096fb89434faff47d36f8df9bc9e0bb07d1f963ad57a->enter($__internal_db7a65a5303c5f1eb17b096fb89434faff47d36f8df9bc9e0bb07d1f963ad57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_db7a65a5303c5f1eb17b096fb89434faff47d36f8df9bc9e0bb07d1f963ad57a->leave($__internal_db7a65a5303c5f1eb17b096fb89434faff47d36f8df9bc9e0bb07d1f963ad57a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
