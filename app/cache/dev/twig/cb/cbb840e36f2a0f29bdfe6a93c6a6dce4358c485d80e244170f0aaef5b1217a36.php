<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d3050a1d9649284a3116b9f05fcdb08137f52f187fcf4cc39dba25e89fe5d709 extends Twig_Template
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
        $__internal_5a1ba3f45ce512d68195e95714bc753c7424b67cd6434602ab1b8d8c8bd4f9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ba3f45ce512d68195e95714bc753c7424b67cd6434602ab1b8d8c8bd4f9b0->enter($__internal_5a1ba3f45ce512d68195e95714bc753c7424b67cd6434602ab1b8d8c8bd4f9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5a1ba3f45ce512d68195e95714bc753c7424b67cd6434602ab1b8d8c8bd4f9b0->leave($__internal_5a1ba3f45ce512d68195e95714bc753c7424b67cd6434602ab1b8d8c8bd4f9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
