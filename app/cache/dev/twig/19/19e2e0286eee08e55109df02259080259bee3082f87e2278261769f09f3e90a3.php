<?php

/* :default:show_residence.html.twig */
class __TwigTemplate_c11fb4b147d62aed8b8244ea789e9cdffc0c069c194fb66738d82cd555f43418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:show_residence.html.twig", 1);
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
        $__internal_4b54daf40d840860a08f5cb145e3ff7ae193f25941215b2700c2c8c47139ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b54daf40d840860a08f5cb145e3ff7ae193f25941215b2700c2c8c47139ce2d->enter($__internal_4b54daf40d840860a08f5cb145e3ff7ae193f25941215b2700c2c8c47139ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:show_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b54daf40d840860a08f5cb145e3ff7ae193f25941215b2700c2c8c47139ce2d->leave($__internal_4b54daf40d840860a08f5cb145e3ff7ae193f25941215b2700c2c8c47139ce2d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5fd7f6ac41727082cea0aef323ecc3d44b8d876ba88d7cb8a414502453c5f848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd7f6ac41727082cea0aef323ecc3d44b8d876ba88d7cb8a414502453c5f848->enter($__internal_5fd7f6ac41727082cea0aef323ecc3d44b8d876ba88d7cb8a414502453c5f848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-circle\"></i>Nom résidence </a> : 
                <a class=\"btn btn-app  margin\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "name", array()), "html", null, true);
        echo "</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-mobile\"></i>Contact Gardien </a> :<a class=\"btn btn-app  margin\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactGardien", array()), "html", null, true);
        echo "</a>  
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-calendar\"></i>Horaire Gardien </a> :
                <a class=\"btn btn-app  margin\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "horaireGardien", array()), "html", null, true);
        echo "</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-phone\"></i>Contact Syndic </a> : 
                <a class=\"btn btn-app  margin\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactSyndic", array()), "html", null, true);
        echo "</a> 
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-home\"></i>Appartements </a> :
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apparts"]) ? $context["apparts"] : $this->getContext($context, "apparts")));
        foreach ($context['_seq'] as $context["_key"] => $context["appart"]) {
            // line 27
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_appart", array("id" => $this->getAttribute($context["appart"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-app  margin\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appart"], "adresse", array()), "html", null, true);
            echo "</a> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_5fd7f6ac41727082cea0aef323ecc3d44b8d876ba88d7cb8a414502453c5f848->leave($__internal_5fd7f6ac41727082cea0aef323ecc3d44b8d876ba88d7cb8a414502453c5f848_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0dffb35ee8f752d875082e94dcfb1fc16fa4f3be3a431c1a658c46ac59a15e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dffb35ee8f752d875082e94dcfb1fc16fa4f3be3a431c1a658c46ac59a15e62->enter($__internal_0dffb35ee8f752d875082e94dcfb1fc16fa4f3be3a431c1a658c46ac59a15e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_0dffb35ee8f752d875082e94dcfb1fc16fa4f3be3a431c1a658c46ac59a15e62->leave($__internal_0dffb35ee8f752d875082e94dcfb1fc16fa4f3be3a431c1a658c46ac59a15e62_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_98616c5f543696648f8a6ded75447c1e4329cb8dbf492c40b18d8532205e5473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98616c5f543696648f8a6ded75447c1e4329cb8dbf492c40b18d8532205e5473->enter($__internal_98616c5f543696648f8a6ded75447c1e4329cb8dbf492c40b18d8532205e5473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " infos résidence ";
        
        $__internal_98616c5f543696648f8a6ded75447c1e4329cb8dbf492c40b18d8532205e5473->leave($__internal_98616c5f543696648f8a6ded75447c1e4329cb8dbf492c40b18d8532205e5473_prof);

    }

    public function getTemplateName()
    {
        return ":default:show_residence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  108 => 39,  93 => 29,  82 => 27,  78 => 26,  71 => 22,  64 => 18,  57 => 14,  51 => 11,  42 => 4,  36 => 3,  11 => 1,);
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
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-circle\"></i>Nom résidence </a> : 
                <a class=\"btn btn-app  margin\">{{residence.name}}</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-mobile\"></i>Contact Gardien </a> :<a class=\"btn btn-app  margin\">{{residence.contactGardien}}</a>  
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-calendar\"></i>Horaire Gardien </a> :
                <a class=\"btn btn-app  margin\">{{residence.horaireGardien}}</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-phone\"></i>Contact Syndic </a> : 
                <a class=\"btn btn-app  margin\">{{residence.contactSyndic}}</a> 
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-home\"></i>Appartements </a> :
                {% for appart in apparts%}
                  <a href=\"{{ path('admin_show_appart', {'id': appart.id}) }}\" class=\"btn btn-app  margin\">{{appart.adresse}}</a> 
                {%endfor%}
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


{% endblock %}

{% block page_title %} Résidence {% endblock %}
{% block page_subtitle %} infos résidence {% endblock %}", ":default:show_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/show_residence.html.twig");
    }
}
