<?php

/* default/show_residence.html.twig */
class __TwigTemplate_042072625fc086fffb3231f231aab20c34b3faad9ae66667e4cd6ff720d7a7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/show_residence.html.twig", 1);
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
        $__internal_b268b6dbca81b2e35754ee694b2d92d97853ebb1ea316fd6a9bbbc19dd64d745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268b6dbca81b2e35754ee694b2d92d97853ebb1ea316fd6a9bbbc19dd64d745->enter($__internal_b268b6dbca81b2e35754ee694b2d92d97853ebb1ea316fd6a9bbbc19dd64d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show_residence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b268b6dbca81b2e35754ee694b2d92d97853ebb1ea316fd6a9bbbc19dd64d745->leave($__internal_b268b6dbca81b2e35754ee694b2d92d97853ebb1ea316fd6a9bbbc19dd64d745_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6d74af4d6e6d6e337746164dbd3bb3d98bfcaa46e2bfe8d92dd16fe78a3eff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d74af4d6e6d6e337746164dbd3bb3d98bfcaa46e2bfe8d92dd16fe78a3eff4c->enter($__internal_6d74af4d6e6d6e337746164dbd3bb3d98bfcaa46e2bfe8d92dd16fe78a3eff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6d74af4d6e6d6e337746164dbd3bb3d98bfcaa46e2bfe8d92dd16fe78a3eff4c->leave($__internal_6d74af4d6e6d6e337746164dbd3bb3d98bfcaa46e2bfe8d92dd16fe78a3eff4c_prof);

    }

    // line 39
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_881b3cae8672c03749970428373859f7eac5e3e34c148598fbe5d73202211b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881b3cae8672c03749970428373859f7eac5e3e34c148598fbe5d73202211b87->enter($__internal_881b3cae8672c03749970428373859f7eac5e3e34c148598fbe5d73202211b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Résidence ";
        
        $__internal_881b3cae8672c03749970428373859f7eac5e3e34c148598fbe5d73202211b87->leave($__internal_881b3cae8672c03749970428373859f7eac5e3e34c148598fbe5d73202211b87_prof);

    }

    // line 40
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cd84450458989f0382be51a298538ab037356a20b8a784e57d7007aa7073c250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd84450458989f0382be51a298538ab037356a20b8a784e57d7007aa7073c250->enter($__internal_cd84450458989f0382be51a298538ab037356a20b8a784e57d7007aa7073c250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " infos résidence ";
        
        $__internal_cd84450458989f0382be51a298538ab037356a20b8a784e57d7007aa7073c250->leave($__internal_cd84450458989f0382be51a298538ab037356a20b8a784e57d7007aa7073c250_prof);

    }

    public function getTemplateName()
    {
        return "default/show_residence.html.twig";
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
{% block page_subtitle %} infos résidence {% endblock %}", "default/show_residence.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/show_residence.html.twig");
    }
}
