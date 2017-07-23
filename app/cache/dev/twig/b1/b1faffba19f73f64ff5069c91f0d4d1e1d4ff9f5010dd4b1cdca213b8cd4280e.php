<?php

/* :association:rentUserRoomForm.html.twig */
class __TwigTemplate_2eac92fd998499743084c070bd3500eb51f5d618839575124aa6d9e13e3be996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":association:rentUserRoomForm.html.twig", 1);
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
        $__internal_781df81975d9232f185bcc1775813d218d0a0306e187af38d7ae9c0cb2e39b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781df81975d9232f185bcc1775813d218d0a0306e187af38d7ae9c0cb2e39b76->enter($__internal_781df81975d9232f185bcc1775813d218d0a0306e187af38d7ae9c0cb2e39b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":association:rentUserRoomForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781df81975d9232f185bcc1775813d218d0a0306e187af38d7ae9c0cb2e39b76->leave($__internal_781df81975d9232f185bcc1775813d218d0a0306e187af38d7ae9c0cb2e39b76_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d03be0c9973cb11e0062cbb6c9f7e289ce27fdfe27d7da194a969f973d4af8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03be0c9973cb11e0062cbb6c9f7e289ce27fdfe27d7da194a969f973d4af8e6->enter($__internal_d03be0c9973cb11e0062cbb6c9f7e289ce27fdfe27d7da194a969f973d4af8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-body\">
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>

                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "Informations", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <br>
                
                    <div>
                       
                            <ul class=\"list-unstyled\">
                                <li><strong>User Room ID:</strong> ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</li>
                                <li><strong>User:</strong> <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\"> <strong>Room : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</a> </strong> </li>
                                <li><strong> Appart:</strong><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\">  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo "</a>  </li>
                                
                            </ul>
                        
                    </div>           
            </div>
        </div>
    </div>


";
        
        $__internal_d03be0c9973cb11e0062cbb6c9f7e289ce27fdfe27d7da194a969f973d4af8e6->leave($__internal_d03be0c9973cb11e0062cbb6c9f7e289ce27fdfe27d7da194a969f973d4af8e6_prof);

    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7f4486cedee46856392ac66fd7b52dba250285adcdae44fd782c983452c94ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4486cedee46856392ac66fd7b52dba250285adcdae44fd782c983452c94ec2->enter($__internal_7f4486cedee46856392ac66fd7b52dba250285adcdae44fd782c983452c94ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Editer Quittance ";
        
        $__internal_7f4486cedee46856392ac66fd7b52dba250285adcdae44fd782c983452c94ec2->leave($__internal_7f4486cedee46856392ac66fd7b52dba250285adcdae44fd782c983452c94ec2_prof);

    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bb81dc7b5410be024b95f6fe8459058f5be10b688090ff3f2115a883318d7e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb81dc7b5410be024b95f6fe8459058f5be10b688090ff3f2115a883318d7e29->enter($__internal_bb81dc7b5410be024b95f6fe8459058f5be10b688090ff3f2115a883318d7e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " form ";
        
        $__internal_bb81dc7b5410be024b95f6fe8459058f5be10b688090ff3f2115a883318d7e29->leave($__internal_bb81dc7b5410be024b95f6fe8459058f5be10b688090ff3f2115a883318d7e29_prof);

    }

    public function getTemplateName()
    {
        return ":association:rentUserRoomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  133 => 60,  113 => 48,  107 => 47,  101 => 46,  97 => 45,  88 => 39,  78 => 32,  67 => 24,  63 => 23,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-body\">
                {{ form_start(form) }}
                        {{ form_widget(form) }}
                    
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>

                        {{ form_end(form) }}
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('Informations', true, false, 'primary') }}
                <br>
                
                    <div>
                       
                            <ul class=\"list-unstyled\">
                                <li><strong>User Room ID:</strong> {{id}}</li>
                                <li><strong>User:</strong> <a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a></li>
                                <li><a href=\"{{ path('room_show', { 'id': room.id }) }}\"> <strong>Room : {{ room.id }}</a> </strong> </li>
                                <li><strong> Appart:</strong><a href=\"{{ path('appartement_show', { 'id': appart.id }) }}\">  {{ appart.adresse }}</a>  </li>
                                
                            </ul>
                        
                    </div>           
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Editer Quittance {% endblock %}
{% block page_subtitle %} form {% endblock %}", ":association:rentUserRoomForm.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/rentUserRoomForm.html.twig");
    }
}
