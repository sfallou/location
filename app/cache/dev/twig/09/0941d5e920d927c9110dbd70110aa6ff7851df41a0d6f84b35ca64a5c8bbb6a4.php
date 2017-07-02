<?php

/* default/liste_room.html.twig */
class __TwigTemplate_fd595f150f80dc8dab73bfc68a762ad9a727cb0f64755ee05b793954afb98e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/liste_room.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0ed3fb3e3ba54ef3cb43ef1e071edb6e586f0fd5ef49039fe675629d26f4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0ed3fb3e3ba54ef3cb43ef1e071edb6e586f0fd5ef49039fe675629d26f4e8->enter($__internal_5f0ed3fb3e3ba54ef3cb43ef1e071edb6e586f0fd5ef49039fe675629d26f4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0ed3fb3e3ba54ef3cb43ef1e071edb6e586f0fd5ef49039fe675629d26f4e8->leave($__internal_5f0ed3fb3e3ba54ef3cb43ef1e071edb6e586f0fd5ef49039fe675629d26f4e8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_eba9c3213165a505810820244c4750699309bc6f27da1de9c336a4bf7b42ce15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba9c3213165a505810820244c4750699309bc6f27da1de9c336a4bf7b42ce15->enter($__internal_eba9c3213165a505810820244c4750699309bc6f27da1de9c336a4bf7b42ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>id Appart</th>
                  <th>Surface</th>
                  <th>Rent</th>
                  <th>Guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 22
            echo "                  <tr>
                  <td> Room ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "idAppart", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "surface", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "rent", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "guarantee", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_room", array("id" => $this->getAttribute($context["el"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_eba9c3213165a505810820244c4750699309bc6f27da1de9c336a4bf7b42ce15->leave($__internal_eba9c3213165a505810820244c4750699309bc6f27da1de9c336a4bf7b42ce15_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a6f89ae83ea98e2a398d1e4417f11ecbab33869cdd9292bc01e5f417eefe897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6f89ae83ea98e2a398d1e4417f11ecbab33869cdd9292bc01e5f417eefe897->enter($__internal_2a6f89ae83ea98e2a398d1e4417f11ecbab33869cdd9292bc01e5f417eefe897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Chambres ";
        
        $__internal_2a6f89ae83ea98e2a398d1e4417f11ecbab33869cdd9292bc01e5f417eefe897->leave($__internal_2a6f89ae83ea98e2a398d1e4417f11ecbab33869cdd9292bc01e5f417eefe897_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c4a38c297904a76ae107aefcbe696392116d4c6d4e935b858c544921adc53663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a38c297904a76ae107aefcbe696392116d4c6d4e935b858c544921adc53663->enter($__internal_c4a38c297904a76ae107aefcbe696392116d4c6d4e935b858c544921adc53663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Liste des chambres ";
        
        $__internal_c4a38c297904a76ae107aefcbe696392116d4c6d4e935b858c544921adc53663->leave($__internal_c4a38c297904a76ae107aefcbe696392116d4c6d4e935b858c544921adc53663_prof);

    }

    public function getTemplateName()
    {
        return "default/liste_room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  116 => 45,  101 => 35,  90 => 30,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  65 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>id Appart</th>
                  <th>Surface</th>
                  <th>Rent</th>
                  <th>Guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for el in rooms %}
                  <tr>
                  <td> Room {{el.id}}</td>
                  <td>{{el.idAppart}}</td>
                  <td>{{el.surface}}</td>
                  <td>{{el.rent}}</td>
                  <td>{{el.guarantee}}</td>
                  <td>
                    <a class=\"btn btn-primary\" href=\"#\"><i class=\"fa fa-pencil fa-lg\"></i> Edit</a>
                    <a class=\"btn btn-success\" href=\"{{ path('admin_show_room', {'id': el.id}) }}\"><i class=\"fa fa-eye fa-lg\"></i> Show</a>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


{% endblock %}

{% block page_title %} Chambres {% endblock %}
{% block page_subtitle %} Liste des chambres {% endblock %}", "default/liste_room.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/liste_room.html.twig");
    }
}
