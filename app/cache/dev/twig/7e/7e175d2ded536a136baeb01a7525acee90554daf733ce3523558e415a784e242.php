<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c2f3cd7588d75204055b80397572e337da05292c1411d3cbe548603494ceaa42 extends Twig_Template
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
        $__internal_a3039ca55a592b2c710eb74a0f1856ab4238f7450f41b0f658fc46d19a6bbe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3039ca55a592b2c710eb74a0f1856ab4238f7450f41b0f658fc46d19a6bbe84->enter($__internal_a3039ca55a592b2c710eb74a0f1856ab4238f7450f41b0f658fc46d19a6bbe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a3039ca55a592b2c710eb74a0f1856ab4238f7450f41b0f658fc46d19a6bbe84->leave($__internal_a3039ca55a592b2c710eb74a0f1856ab4238f7450f41b0f658fc46d19a6bbe84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
