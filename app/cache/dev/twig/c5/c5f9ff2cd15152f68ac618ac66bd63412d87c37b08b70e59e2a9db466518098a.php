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
        $__internal_4aff5e289f2cab515cc660395098680f980503bb3f0f8e1e29b44f7dc86cde3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aff5e289f2cab515cc660395098680f980503bb3f0f8e1e29b44f7dc86cde3f->enter($__internal_4aff5e289f2cab515cc660395098680f980503bb3f0f8e1e29b44f7dc86cde3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4aff5e289f2cab515cc660395098680f980503bb3f0f8e1e29b44f7dc86cde3f->leave($__internal_4aff5e289f2cab515cc660395098680f980503bb3f0f8e1e29b44f7dc86cde3f_prof);

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
