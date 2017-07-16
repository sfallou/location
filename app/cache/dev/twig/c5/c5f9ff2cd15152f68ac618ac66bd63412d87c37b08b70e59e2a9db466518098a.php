<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ab24df1ce2fae89146d66ef8ca88c0463554c3666562ae89ede6f89426b58960 extends Twig_Template
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
        $__internal_c41f50aa5fa59aaa7b34d78c0b0532d001ed8ac79f055110631ad1faae3a435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41f50aa5fa59aaa7b34d78c0b0532d001ed8ac79f055110631ad1faae3a435f->enter($__internal_c41f50aa5fa59aaa7b34d78c0b0532d001ed8ac79f055110631ad1faae3a435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c41f50aa5fa59aaa7b34d78c0b0532d001ed8ac79f055110631ad1faae3a435f->leave($__internal_c41f50aa5fa59aaa7b34d78c0b0532d001ed8ac79f055110631ad1faae3a435f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/sfallou/Sites/kokou/location/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
