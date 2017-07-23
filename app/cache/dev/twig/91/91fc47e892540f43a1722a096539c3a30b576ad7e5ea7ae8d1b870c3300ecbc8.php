<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bf23173a4fee8fd904f1852f145fb51a140b03eca021ce85418776fd651711e6 extends Twig_Template
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
        $__internal_0e9a83650bd20ce8f01cdfc94d810386ce5b121a73ceb720ef52e5d8d436c541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9a83650bd20ce8f01cdfc94d810386ce5b121a73ceb720ef52e5d8d436c541->enter($__internal_0e9a83650bd20ce8f01cdfc94d810386ce5b121a73ceb720ef52e5d8d436c541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0e9a83650bd20ce8f01cdfc94d810386ce5b121a73ceb720ef52e5d8d436c541->leave($__internal_0e9a83650bd20ce8f01cdfc94d810386ce5b121a73ceb720ef52e5d8d436c541_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
