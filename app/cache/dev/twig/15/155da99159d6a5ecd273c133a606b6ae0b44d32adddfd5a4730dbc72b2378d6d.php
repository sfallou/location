<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_387c2aaa3aeca3176c25367098fddcd13131b1fa1e6a475dba2fdb3e0a3bb3d8 extends Twig_Template
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
        $__internal_9f933bb30c25bb22ac4c1efe1c157e21b90114799af4698d4710c1e53e97b60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f933bb30c25bb22ac4c1efe1c157e21b90114799af4698d4710c1e53e97b60e->enter($__internal_9f933bb30c25bb22ac4c1efe1c157e21b90114799af4698d4710c1e53e97b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9f933bb30c25bb22ac4c1efe1c157e21b90114799af4698d4710c1e53e97b60e->leave($__internal_9f933bb30c25bb22ac4c1efe1c157e21b90114799af4698d4710c1e53e97b60e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
