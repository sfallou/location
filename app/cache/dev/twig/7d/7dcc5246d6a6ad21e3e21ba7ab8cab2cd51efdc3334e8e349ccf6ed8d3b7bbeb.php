<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_292b75187e6ebe857c3deac94c8c61a95171b6b94621f329deaa18b23c33fc98 extends Twig_Template
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
        $__internal_79a9eab06542c76a9ffdee35c512a2c47cec76d16dd7e554f4c8d199b3ba1a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a9eab06542c76a9ffdee35c512a2c47cec76d16dd7e554f4c8d199b3ba1a3f->enter($__internal_79a9eab06542c76a9ffdee35c512a2c47cec76d16dd7e554f4c8d199b3ba1a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_79a9eab06542c76a9ffdee35c512a2c47cec76d16dd7e554f4c8d199b3ba1a3f->leave($__internal_79a9eab06542c76a9ffdee35c512a2c47cec76d16dd7e554f4c8d199b3ba1a3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
