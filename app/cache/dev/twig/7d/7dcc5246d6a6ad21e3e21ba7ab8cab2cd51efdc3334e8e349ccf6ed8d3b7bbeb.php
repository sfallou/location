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
        $__internal_670b8c2a0bf2c43d952d27c3126da567f56e9de04d014466ad1951d532e52d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670b8c2a0bf2c43d952d27c3126da567f56e9de04d014466ad1951d532e52d1f->enter($__internal_670b8c2a0bf2c43d952d27c3126da567f56e9de04d014466ad1951d532e52d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_670b8c2a0bf2c43d952d27c3126da567f56e9de04d014466ad1951d532e52d1f->leave($__internal_670b8c2a0bf2c43d952d27c3126da567f56e9de04d014466ad1951d532e52d1f_prof);

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