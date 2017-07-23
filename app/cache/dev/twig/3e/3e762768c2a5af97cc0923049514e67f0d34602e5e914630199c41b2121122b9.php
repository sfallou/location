<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2af112b1b5c7fbc1d34fbc1fd7813f69882bc37700ce02a2b9d432496a508c3d extends Twig_Template
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
        $__internal_5c1cddb636343859d3ac3d7ddb0daaedd718c6e316eaaec4d58c11f6dc6fc2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1cddb636343859d3ac3d7ddb0daaedd718c6e316eaaec4d58c11f6dc6fc2e0->enter($__internal_5c1cddb636343859d3ac3d7ddb0daaedd718c6e316eaaec4d58c11f6dc6fc2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5c1cddb636343859d3ac3d7ddb0daaedd718c6e316eaaec4d58c11f6dc6fc2e0->leave($__internal_5c1cddb636343859d3ac3d7ddb0daaedd718c6e316eaaec4d58c11f6dc6fc2e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
