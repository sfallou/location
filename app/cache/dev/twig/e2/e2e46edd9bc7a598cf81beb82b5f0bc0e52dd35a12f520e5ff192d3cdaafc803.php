<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0825ee448a98ace62827bb76e82a524e9a60af1a2b03d2476461c308f8814e3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c7b6a4179fddf664b266286922ce9e82433a5b103188d885b2d7c38f333c1dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b6a4179fddf664b266286922ce9e82433a5b103188d885b2d7c38f333c1dc8->enter($__internal_c7b6a4179fddf664b266286922ce9e82433a5b103188d885b2d7c38f333c1dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b6a4179fddf664b266286922ce9e82433a5b103188d885b2d7c38f333c1dc8->leave($__internal_c7b6a4179fddf664b266286922ce9e82433a5b103188d885b2d7c38f333c1dc8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fa7c90bddd9d8c91f9a5063cf8a5862e1b8adb56f9d273cc793d63927c46042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7c90bddd9d8c91f9a5063cf8a5862e1b8adb56f9d273cc793d63927c46042d->enter($__internal_fa7c90bddd9d8c91f9a5063cf8a5862e1b8adb56f9d273cc793d63927c46042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                <div>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                    Continuer
                </a>
                </div>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "        </div>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <div>
    ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 30
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 32
        echo "

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dash");
        echo "\"><b>Connexion</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  class=\"form-control\" placeholder=\"Username\"/>
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <!--div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div--><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new User</a>

        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_fa7c90bddd9d8c91f9a5063cf8a5862e1b8adb56f9d273cc793d63927c46042d->leave($__internal_fa7c90bddd9d8c91f9a5063cf8a5862e1b8adb56f9d273cc793d63927c46042d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  162 => 59,  143 => 43,  138 => 41,  134 => 40,  127 => 36,  121 => 32,  115 => 30,  113 => 29,  109 => 27,  103 => 26,  94 => 23,  89 => 22,  84 => 21,  80 => 20,  76 => 18,  68 => 16,  60 => 11,  54 => 8,  50 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                <div>
                <a href=\"{{ path('user_show',{'id':app.user.id}) }}\">
                    Continuer
                </a>
                </div>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

    <div>
    {% if error %}
        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}


    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('admin_dash') }}\"><b>Connexion</b></a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"  class=\"form-control\" placeholder=\"Username\"/>
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <!--div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div--><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"{{ path(\"fos_user_registration_register\") }}\" class=\"text-center\">Register a new User</a>

        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "FOSUserBundle:Security:login.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
