<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a2294be2357aa287c504787e43db17ff0f137f463511f66f63d0fc11b38c4c13 extends Twig_Template
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
        $__internal_bc39de23d162fe4fa2b41f09bf0eee2173400b4f66004b24cf103950f5d03ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc39de23d162fe4fa2b41f09bf0eee2173400b4f66004b24cf103950f5d03ab9->enter($__internal_bc39de23d162fe4fa2b41f09bf0eee2173400b4f66004b24cf103950f5d03ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bc39de23d162fe4fa2b41f09bf0eee2173400b4f66004b24cf103950f5d03ab9->leave($__internal_bc39de23d162fe4fa2b41f09bf0eee2173400b4f66004b24cf103950f5d03ab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
