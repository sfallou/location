<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_45100a0e06b69d032169a844e1379c25bea426a71e1bafd78a5236b05ce7f41c extends Twig_Template
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
        $__internal_b9082a7c0a103b4f259b395c7892765dc67bfdcdca7b51fbb5ac2e20128e5783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9082a7c0a103b4f259b395c7892765dc67bfdcdca7b51fbb5ac2e20128e5783->enter($__internal_b9082a7c0a103b4f259b395c7892765dc67bfdcdca7b51fbb5ac2e20128e5783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b9082a7c0a103b4f259b395c7892765dc67bfdcdca7b51fbb5ac2e20128e5783->leave($__internal_b9082a7c0a103b4f259b395c7892765dc67bfdcdca7b51fbb5ac2e20128e5783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
