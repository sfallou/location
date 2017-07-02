<?php

/* default/show_room.html.twig */
class __TwigTemplate_4ebc37c1c52bdd2f571b7e0ddb8174da546a22e07604a19076587b72faf54e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/show_room.html.twig", 1);
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
        $__internal_5b853b918420c3b772dc357a40036679e6f905c1ac3c5846d3917d4d10283608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b853b918420c3b772dc357a40036679e6f905c1ac3c5846d3917d4d10283608->enter($__internal_5b853b918420c3b772dc357a40036679e6f905c1ac3c5846d3917d4d10283608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b853b918420c3b772dc357a40036679e6f905c1ac3c5846d3917d4d10283608->leave($__internal_5b853b918420c3b772dc357a40036679e6f905c1ac3c5846d3917d4d10283608_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7db21b5248ed8c4e90bf4ce426c2f0eb602e1951e007f35a6566f75b971c67fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db21b5248ed8c4e90bf4ce426c2f0eb602e1951e007f35a6566f75b971c67fc->enter($__internal_7db21b5248ed8c4e90bf4ce426c2f0eb602e1951e007f35a6566f75b971c67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            
            <!-- /.box-header -->
            <div class=\"box-body\">
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-home\"></i>Surface </a> :  
                <a class=\"btn btn-app  margin\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo "</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-user\"></i>Ocupant </a> :
                <a class=\"btn btn-app  margin\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo "</a>    
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Rent </a> :
                <a class=\"btn btn-app  margin\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros</a>  
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Guarantee </a> :
                <a class=\"btn btn-app  margin\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</a>  
              </div>
               <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-tv\"></i>Meubles </a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-wrench\"></i>Réparations</a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Mensualités </a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-file\"></i>Documents </a> :
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_7db21b5248ed8c4e90bf4ce426c2f0eb602e1951e007f35a6566f75b971c67fc->leave($__internal_7db21b5248ed8c4e90bf4ce426c2f0eb602e1951e007f35a6566f75b971c67fc_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5ed8cad05c08f5b7a8f09ce37ef8591f0c2161618717a17a88497a67b50a5d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed8cad05c08f5b7a8f09ce37ef8591f0c2161618717a17a88497a67b50a5d13->enter($__internal_5ed8cad05c08f5b7a8f09ce37ef8591f0c2161618717a17a88497a67b50a5d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_5ed8cad05c08f5b7a8f09ce37ef8591f0c2161618717a17a88497a67b50a5d13->leave($__internal_5ed8cad05c08f5b7a8f09ce37ef8591f0c2161618717a17a88497a67b50a5d13_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_018f0c4fa60f69301be962fa518adb7317bf6b82825bedd181cc836a0e20da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018f0c4fa60f69301be962fa518adb7317bf6b82825bedd181cc836a0e20da83->enter($__internal_018f0c4fa60f69301be962fa518adb7317bf6b82825bedd181cc836a0e20da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " infos room ";
        
        $__internal_018f0c4fa60f69301be962fa518adb7317bf6b82825bedd181cc836a0e20da83->leave($__internal_018f0c4fa60f69301be962fa518adb7317bf6b82825bedd181cc836a0e20da83_prof);

    }

    public function getTemplateName()
    {
        return "default/show_room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  100 => 45,  72 => 23,  65 => 19,  58 => 15,  51 => 11,  42 => 4,  36 => 3,  11 => 1,);
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
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-home\"></i>Surface </a> :  
                <a class=\"btn btn-app  margin\">{{room.surface}}</a>
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-user\"></i>Ocupant </a> :
                <a class=\"btn btn-app  margin\">{{room.surface}}</a>    
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Rent </a> :
                <a class=\"btn btn-app  margin\">{{room.rent}} euros</a>  
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Guarantee </a> :
                <a class=\"btn btn-app  margin\">{{room.guarantee}} euros</a>  
              </div>
               <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-tv\"></i>Meubles </a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-wrench\"></i>Réparations</a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Mensualités </a> :
              </div>
              <div>
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-file\"></i>Documents </a> :
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


{% endblock %}

{% block page_title %} Room {% endblock %}
{% block page_subtitle %} infos room {% endblock %}", "default/show_room.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/show_room.html.twig");
    }
}
