<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_297c23d54808235baa555f57864b39df372cda974f35c8a3f9377c26b1418af3 extends Twig_Template
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
        $__internal_ab83c73d8fb4a0459787b1c4733dc94ce12cfd3794bcd2ed1f830628577fb8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab83c73d8fb4a0459787b1c4733dc94ce12cfd3794bcd2ed1f830628577fb8c5->enter($__internal_ab83c73d8fb4a0459787b1c4733dc94ce12cfd3794bcd2ed1f830628577fb8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ab83c73d8fb4a0459787b1c4733dc94ce12cfd3794bcd2ed1f830628577fb8c5->leave($__internal_ab83c73d8fb4a0459787b1c4733dc94ce12cfd3794bcd2ed1f830628577fb8c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
