<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_105d82510777ee44f6a5c18d547a41d14afab5d5301b59b0e5dad1d079143cc8 extends Twig_Template
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
        $__internal_f51582395c43627f1ba4f8dd12851a3a68dcc2efaf336ab0287b7942b54bbe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51582395c43627f1ba4f8dd12851a3a68dcc2efaf336ab0287b7942b54bbe74->enter($__internal_f51582395c43627f1ba4f8dd12851a3a68dcc2efaf336ab0287b7942b54bbe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f51582395c43627f1ba4f8dd12851a3a68dcc2efaf336ab0287b7942b54bbe74->leave($__internal_f51582395c43627f1ba4f8dd12851a3a68dcc2efaf336ab0287b7942b54bbe74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}