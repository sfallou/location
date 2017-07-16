<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3b4b5d2a53e8ec0984c01399c6034587e524323c9bb72e47a1d4f68e6864b6ac extends Twig_Template
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
        $__internal_3868b18ab8f574cad7f15c3a08d76d30cc66d3e0d7fc25badb5e3b3a61470407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3868b18ab8f574cad7f15c3a08d76d30cc66d3e0d7fc25badb5e3b3a61470407->enter($__internal_3868b18ab8f574cad7f15c3a08d76d30cc66d3e0d7fc25badb5e3b3a61470407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3868b18ab8f574cad7f15c3a08d76d30cc66d3e0d7fc25badb5e3b3a61470407->leave($__internal_3868b18ab8f574cad7f15c3a08d76d30cc66d3e0d7fc25badb5e3b3a61470407_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
