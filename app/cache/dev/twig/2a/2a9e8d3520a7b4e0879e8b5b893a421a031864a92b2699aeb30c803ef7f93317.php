<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_713c3835b482d6c0c7a51ee246640f3fcb8ded823aa09c7c636c2bc186e9950b extends Twig_Template
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
        $__internal_ee2b36cdf89741aab47eebc14945ca885de93a170b2146e5bd6f17ebb1422dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2b36cdf89741aab47eebc14945ca885de93a170b2146e5bd6f17ebb1422dcb->enter($__internal_ee2b36cdf89741aab47eebc14945ca885de93a170b2146e5bd6f17ebb1422dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ee2b36cdf89741aab47eebc14945ca885de93a170b2146e5bd6f17ebb1422dcb->leave($__internal_ee2b36cdf89741aab47eebc14945ca885de93a170b2146e5bd6f17ebb1422dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
