<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1d853ffb10e0129554267117a5b645f693a03fcdac0b12832825f171792d2d46 extends Twig_Template
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
        $__internal_39564ef58eba7eeb5f4a2fbf9cfecda12b6bd950783eaa8d997377650372e6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39564ef58eba7eeb5f4a2fbf9cfecda12b6bd950783eaa8d997377650372e6f8->enter($__internal_39564ef58eba7eeb5f4a2fbf9cfecda12b6bd950783eaa8d997377650372e6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_39564ef58eba7eeb5f4a2fbf9cfecda12b6bd950783eaa8d997377650372e6f8->leave($__internal_39564ef58eba7eeb5f4a2fbf9cfecda12b6bd950783eaa8d997377650372e6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
