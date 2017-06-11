<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c90f2062f1da5af83120cc5b2b97cc064f45b446f0551fcaa4623c7e93a31250 extends Twig_Template
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
        $__internal_7871b2829a6bfec673e48d1be146ec899d6ef01bdb08aa1eb0191072a896c85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7871b2829a6bfec673e48d1be146ec899d6ef01bdb08aa1eb0191072a896c85b->enter($__internal_7871b2829a6bfec673e48d1be146ec899d6ef01bdb08aa1eb0191072a896c85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7871b2829a6bfec673e48d1be146ec899d6ef01bdb08aa1eb0191072a896c85b->leave($__internal_7871b2829a6bfec673e48d1be146ec899d6ef01bdb08aa1eb0191072a896c85b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
