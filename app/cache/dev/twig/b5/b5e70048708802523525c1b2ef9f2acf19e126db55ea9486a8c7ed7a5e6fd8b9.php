<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dc60b2385ce1191afb805c3fba16edd89b119ef2768f0ad542dc157ba66f1ee3 extends Twig_Template
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
        $__internal_c1de46d8c3c1b9148b88f5691f2e514d112e0fd1f12706c2524bb29a258ee6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1de46d8c3c1b9148b88f5691f2e514d112e0fd1f12706c2524bb29a258ee6eb->enter($__internal_c1de46d8c3c1b9148b88f5691f2e514d112e0fd1f12706c2524bb29a258ee6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c1de46d8c3c1b9148b88f5691f2e514d112e0fd1f12706c2524bb29a258ee6eb->leave($__internal_c1de46d8c3c1b9148b88f5691f2e514d112e0fd1f12706c2524bb29a258ee6eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
