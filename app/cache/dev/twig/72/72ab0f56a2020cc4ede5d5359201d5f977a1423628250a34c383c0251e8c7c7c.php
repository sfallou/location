<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6db544a44a1e7fe85db96869a4c3205867d5e1fadf964f3e7802d5a93a0e6549 extends Twig_Template
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
        $__internal_8a5f97f7da2dff12566e87d5340ed4714c85af8b344a540035ef12d9a0328bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5f97f7da2dff12566e87d5340ed4714c85af8b344a540035ef12d9a0328bfa->enter($__internal_8a5f97f7da2dff12566e87d5340ed4714c85af8b344a540035ef12d9a0328bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8a5f97f7da2dff12566e87d5340ed4714c85af8b344a540035ef12d9a0328bfa->leave($__internal_8a5f97f7da2dff12566e87d5340ed4714c85af8b344a540035ef12d9a0328bfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
