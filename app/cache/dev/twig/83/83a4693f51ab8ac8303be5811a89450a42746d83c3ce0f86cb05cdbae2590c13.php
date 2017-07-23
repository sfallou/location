<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_817afc2fa003c995b033a3feaa3e4f282aa1a020d4ed828040596fc3daefb01a extends Twig_Template
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
        $__internal_7e5efe8de445ca5e8900e9757db16524ba95d9c1b522b88e5998ab16ac2f84c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5efe8de445ca5e8900e9757db16524ba95d9c1b522b88e5998ab16ac2f84c1->enter($__internal_7e5efe8de445ca5e8900e9757db16524ba95d9c1b522b88e5998ab16ac2f84c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7e5efe8de445ca5e8900e9757db16524ba95d9c1b522b88e5998ab16ac2f84c1->leave($__internal_7e5efe8de445ca5e8900e9757db16524ba95d9c1b522b88e5998ab16ac2f84c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
