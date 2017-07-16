<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2d6f72250e9e3dc0dac317ba7973fbd0733df6b45d039d6338bf60b71019830d extends Twig_Template
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
        $__internal_fb8123b983063b77bc3441ee22723f7245153b182b2d50f8fbac7a6aaaa10e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8123b983063b77bc3441ee22723f7245153b182b2d50f8fbac7a6aaaa10e87->enter($__internal_fb8123b983063b77bc3441ee22723f7245153b182b2d50f8fbac7a6aaaa10e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fb8123b983063b77bc3441ee22723f7245153b182b2d50f8fbac7a6aaaa10e87->leave($__internal_fb8123b983063b77bc3441ee22723f7245153b182b2d50f8fbac7a6aaaa10e87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
