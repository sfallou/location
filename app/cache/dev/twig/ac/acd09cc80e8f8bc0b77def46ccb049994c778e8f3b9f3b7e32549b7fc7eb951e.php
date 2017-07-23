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
        $__internal_8fa3ce6be55de368bea0c7e3780f0d417888c0f855d66dbf46a118542e09d35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa3ce6be55de368bea0c7e3780f0d417888c0f855d66dbf46a118542e09d35c->enter($__internal_8fa3ce6be55de368bea0c7e3780f0d417888c0f855d66dbf46a118542e09d35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8fa3ce6be55de368bea0c7e3780f0d417888c0f855d66dbf46a118542e09d35c->leave($__internal_8fa3ce6be55de368bea0c7e3780f0d417888c0f855d66dbf46a118542e09d35c_prof);

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
