<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4dc3c2af535864b20be0734015c322f605484842a9deb4181f8952096c8a0f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0983bf0fd01906a49ae955aba14558dcdd1ac74ccafe354c97d6e456c5f63fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0983bf0fd01906a49ae955aba14558dcdd1ac74ccafe354c97d6e456c5f63fbd->enter($__internal_0983bf0fd01906a49ae955aba14558dcdd1ac74ccafe354c97d6e456c5f63fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0983bf0fd01906a49ae955aba14558dcdd1ac74ccafe354c97d6e456c5f63fbd->leave($__internal_0983bf0fd01906a49ae955aba14558dcdd1ac74ccafe354c97d6e456c5f63fbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b02b0f7cc6033f7afc37e89de8efe12e6895115f5744c1996f74cf002d2bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b02b0f7cc6033f7afc37e89de8efe12e6895115f5744c1996f74cf002d2bae->enter($__internal_20b02b0f7cc6033f7afc37e89de8efe12e6895115f5744c1996f74cf002d2bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "               
            ";
        } else {
            // line 8
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 10
        echo "        </div>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        <div>
            ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "        </div>
";
        
        $__internal_20b02b0f7cc6033f7afc37e89de8efe12e6895115f5744c1996f74cf002d2bae->leave($__internal_20b02b0f7cc6033f7afc37e89de8efe12e6895115f5744c1996f74cf002d2bae_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b35a1aedb4ca64ff19941cde20d96987731ddb7be3e75a421665aa1814c85d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35a1aedb4ca64ff19941cde20d96987731ddb7be3e75a421665aa1814c85d13->enter($__internal_b35a1aedb4ca64ff19941cde20d96987731ddb7be3e75a421665aa1814c85d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "            ";
        
        $__internal_b35a1aedb4ca64ff19941cde20d96987731ddb7be3e75a421665aa1814c85d13->leave($__internal_b35a1aedb4ca64ff19941cde20d96987731ddb7be3e75a421665aa1814c85d13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 22,  105 => 21,  97 => 23,  95 => 21,  91 => 19,  85 => 18,  76 => 15,  71 => 14,  66 => 13,  62 => 12,  58 => 10,  50 => 8,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}

{% block body%}
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
               
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
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
