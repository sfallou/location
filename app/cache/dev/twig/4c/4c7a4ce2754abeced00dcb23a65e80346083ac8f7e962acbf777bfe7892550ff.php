<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fc8e36e0f492e27f7355502a5d9c5e5e7cd76ba6b4d927e0a01b8b66fbfea574 extends Twig_Template
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
        $__internal_2dc8fff8ed6af6900ce8f6cc3942ae59ea80a4a0ad55b7b2faff168bbe6b2974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc8fff8ed6af6900ce8f6cc3942ae59ea80a4a0ad55b7b2faff168bbe6b2974->enter($__internal_2dc8fff8ed6af6900ce8f6cc3942ae59ea80a4a0ad55b7b2faff168bbe6b2974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2dc8fff8ed6af6900ce8f6cc3942ae59ea80a4a0ad55b7b2faff168bbe6b2974->leave($__internal_2dc8fff8ed6af6900ce8f6cc3942ae59ea80a4a0ad55b7b2faff168bbe6b2974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
