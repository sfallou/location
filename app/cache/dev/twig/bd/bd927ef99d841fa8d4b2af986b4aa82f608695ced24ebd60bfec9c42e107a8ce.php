<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_13fe1603baf8992082eef95f43df0a3c1628f3c77b85c43ffd4aad17c481bdd3 extends Twig_Template
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
        $__internal_5bf002240ff7a4b3c6e55397731425dbeef0a87563939d84832347d63a4eb464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf002240ff7a4b3c6e55397731425dbeef0a87563939d84832347d63a4eb464->enter($__internal_5bf002240ff7a4b3c6e55397731425dbeef0a87563939d84832347d63a4eb464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5bf002240ff7a4b3c6e55397731425dbeef0a87563939d84832347d63a4eb464->leave($__internal_5bf002240ff7a4b3c6e55397731425dbeef0a87563939d84832347d63a4eb464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
