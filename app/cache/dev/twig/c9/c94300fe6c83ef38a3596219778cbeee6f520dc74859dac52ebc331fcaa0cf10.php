<?php

/* :default:show_room.html.twig */
class __TwigTemplate_b3f182eb457c268d4ee7c37980ffc03998c743ecc1bf6972ccdafaa87aea1d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":default:show_room.html.twig", 1);
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
        $__internal_c48fbac0cf501c05dd3a6c054c21eed86ed235b5c7d28eb7316375579c54b57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48fbac0cf501c05dd3a6c054c21eed86ed235b5c7d28eb7316375579c54b57f->enter($__internal_c48fbac0cf501c05dd3a6c054c21eed86ed235b5c7d28eb7316375579c54b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:show_room.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48fbac0cf501c05dd3a6c054c21eed86ed235b5c7d28eb7316375579c54b57f->leave($__internal_c48fbac0cf501c05dd3a6c054c21eed86ed235b5c7d28eb7316375579c54b57f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3710e475910b12c3546a48e2634a3820ee6a705c2ef553c20a133ad797a1b0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3710e475910b12c3546a48e2634a3820ee6a705c2ef553c20a133ad797a1b0d5->enter($__internal_3710e475910b12c3546a48e2634a3820ee6a705c2ef553c20a133ad797a1b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3710e475910b12c3546a48e2634a3820ee6a705c2ef553c20a133ad797a1b0d5->leave($__internal_3710e475910b12c3546a48e2634a3820ee6a705c2ef553c20a133ad797a1b0d5_prof);

    }

    // line 45
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6c4020d5c16aacbd985b562bae49fa42fadd0e17d8aaf6c538b86ccbd2d6ad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4020d5c16aacbd985b562bae49fa42fadd0e17d8aaf6c538b86ccbd2d6ad3b->enter($__internal_6c4020d5c16aacbd985b562bae49fa42fadd0e17d8aaf6c538b86ccbd2d6ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_6c4020d5c16aacbd985b562bae49fa42fadd0e17d8aaf6c538b86ccbd2d6ad3b->leave($__internal_6c4020d5c16aacbd985b562bae49fa42fadd0e17d8aaf6c538b86ccbd2d6ad3b_prof);

    }

    // line 46
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_911207ce7cc0268fb5d62ef901b7da5a52bd7abb91c4f16109eec06c1ce13596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911207ce7cc0268fb5d62ef901b7da5a52bd7abb91c4f16109eec06c1ce13596->enter($__internal_911207ce7cc0268fb5d62ef901b7da5a52bd7abb91c4f16109eec06c1ce13596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " infos room ";
        
        $__internal_911207ce7cc0268fb5d62ef901b7da5a52bd7abb91c4f16109eec06c1ce13596->leave($__internal_911207ce7cc0268fb5d62ef901b7da5a52bd7abb91c4f16109eec06c1ce13596_prof);

    }

    public function getTemplateName()
    {
        return ":default:show_room.html.twig";
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
{% block page_subtitle %} infos room {% endblock %}", ":default:show_room.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/show_room.html.twig");
    }
}
