<?php

/* AvanzuAdminThemeBundle:Default:login.html.twig */
class __TwigTemplate_ee91038c41a186d0394fb290b94c11a4baf2efc77386eadef26bbcd7cac2a72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "AvanzuAdminThemeBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072d66de35eb19b77becfac9fa742c3585d4bdc2f2bf2f2c35ade0a93f2a101f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072d66de35eb19b77becfac9fa742c3585d4bdc2f2bf2f2c35ade0a93f2a101f->enter($__internal_072d66de35eb19b77becfac9fa742c3585d4bdc2f2bf2f2c35ade0a93f2a101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072d66de35eb19b77becfac9fa742c3585d4bdc2f2bf2f2c35ade0a93f2a101f->leave($__internal_072d66de35eb19b77becfac9fa742c3585d4bdc2f2bf2f2c35ade0a93f2a101f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6368778da1d89126095c697fdd4a8c382feff06d449a097d42a175da4ae307d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6368778da1d89126095c697fdd4a8c382feff06d449a097d42a175da4ae307d4->enter($__internal_6368778da1d89126095c697fdd4a8c382feff06d449a097d42a175da4ae307d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_6368778da1d89126095c697fdd4a8c382feff06d449a097d42a175da4ae307d4->leave($__internal_6368778da1d89126095c697fdd4a8c382feff06d449a097d42a175da4ae307d4_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}

{% block page_content %}
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "AvanzuAdminThemeBundle:Default:login.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/login.html.twig");
    }
}