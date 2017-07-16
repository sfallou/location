<?php

/* room/show.html.twig */
class __TwigTemplate_9f690c2df1a57c0c7c335d928d38f0775771706808fccb177d709730a53169f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "room/show.html.twig", 1);
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
        $__internal_a3d14589fb4b7fd797498f357b0d73b4d4837644d0fb59d356937a42a41d2a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d14589fb4b7fd797498f357b0d73b4d4837644d0fb59d356937a42a41d2a36->enter($__internal_a3d14589fb4b7fd797498f357b0d73b4d4837644d0fb59d356937a42a41d2a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d14589fb4b7fd797498f357b0d73b4d4837644d0fb59d356937a42a41d2a36->leave($__internal_a3d14589fb4b7fd797498f357b0d73b4d4837644d0fb59d356937a42a41d2a36_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1922836fb5241852f9c42fd055242ab48261d657c0c936d2188dfdddc26b36b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1922836fb5241852f9c42fd055242ab48261d657c0c936d2188dfdddc26b36b4->enter($__internal_1922836fb5241852f9c42fd055242ab48261d657c0c936d2188dfdddc26b36b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                  <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_fix_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    
                   
                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID Chambre :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Surface :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Occupant :</strong>
                                  ";
        // line 29
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) {
            // line 30
            echo "                                     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a>
                                     ";
        }
        // line 32
        echo "                                  </li>
                                
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rent :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Guarantee :</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Appartement  :</strong> <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo "</a> </li>
                            </ul>
                            <br><br>
                    </div>
                </div>
                </div>
                
                  <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des réparations
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type réparations</th>
                                <th>Date signalée</th>
                                <th>Priorité</th>
                                <th>État</th>
                                <th>Commentaires</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 71
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == false)) {
                // line 72
                echo "                                  0
                                  ";
            }
            // line 74
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == true)) {
                // line 75
                echo "                                  1
                                  ";
            }
            // line 77
            echo "                                </td>
                                <td>
                                  ";
            // line 79
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 80
                echo "                                  Not done
                                  ";
            }
            // line 82
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 83
                echo "                                  Done
                                  ";
            }
            // line 85
            echo "                                </td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 88
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 89
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_done", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
            }
            // line 91
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 92
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_undone", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
            }
            // line 94
            echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                   
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Liste des meubles
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Id Meuble</th>
                                <th>Nom</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                            </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                    
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
            
";
        
        $__internal_1922836fb5241852f9c42fd055242ab48261d657c0c936d2188dfdddc26b36b4->leave($__internal_1922836fb5241852f9c42fd055242ab48261d657c0c936d2188dfdddc26b36b4_prof);

    }

    // line 131
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a481c80c790475f6e495ba933b9fcf5f1ec3869a85d0ce96cc65b5e76d9543f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a481c80c790475f6e495ba933b9fcf5f1ec3869a85d0ce96cc65b5e76d9543f6->enter($__internal_a481c80c790475f6e495ba933b9fcf5f1ec3869a85d0ce96cc65b5e76d9543f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_a481c80c790475f6e495ba933b9fcf5f1ec3869a85d0ce96cc65b5e76d9543f6->leave($__internal_a481c80c790475f6e495ba933b9fcf5f1ec3869a85d0ce96cc65b5e76d9543f6_prof);

    }

    // line 132
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b0d69c8486bfe95fbfebc8928d09edb657fc3166ddcc2f9990c7e64e78957f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d69c8486bfe95fbfebc8928d09edb657fc3166ddcc2f9990c7e64e78957f40->enter($__internal_b0d69c8486bfe95fbfebc8928d09edb657fc3166ddcc2f9990c7e64e78957f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_b0d69c8486bfe95fbfebc8928d09edb657fc3166ddcc2f9990c7e64e78957f40->leave($__internal_b0d69c8486bfe95fbfebc8928d09edb657fc3166ddcc2f9990c7e64e78957f40_prof);

    }

    public function getTemplateName()
    {
        return "room/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 132,  275 => 131,  260 => 122,  251 => 120,  247 => 119,  240 => 117,  218 => 97,  209 => 94,  203 => 92,  200 => 91,  194 => 89,  192 => 88,  187 => 86,  184 => 85,  180 => 83,  177 => 82,  173 => 80,  171 => 79,  167 => 77,  163 => 75,  160 => 74,  156 => 72,  154 => 71,  149 => 69,  145 => 68,  138 => 66,  107 => 40,  103 => 39,  99 => 38,  91 => 32,  83 => 30,  81 => 29,  76 => 27,  72 => 26,  57 => 14,  50 => 10,  42 => 4,  36 => 3,  11 => 1,);
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
                <div >
                  <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_furniture_room', { 'id': room.id }) }}\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_fix_room', { 'id': room.id }) }}\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    
                   
                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID Chambre :</strong> {{room.id}}</li>
                                <li><strong>Surface :</strong> {{room.surface}} </li>
                                <li><strong>Occupant :</strong>
                                  {% if user.username is defined %}
                                     <a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a>
                                     {% endif%}
                                  </li>
                                
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rent :</strong> {{room.rent}} euros</li>
                                <li><strong>Guarantee :</strong> {{room.guarantee}} euros</li>
                                <li><strong>Appartement  :</strong> <a href=\"{{ path('appartement_show', { 'id': appart.id }) }}\">{{ appart.adresse }}</a> </li>
                            </ul>
                            <br><br>
                    </div>
                </div>
                </div>
                
                  <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des réparations
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type réparations</th>
                                <th>Date signalée</th>
                                <th>Priorité</th>
                                <th>État</th>
                                <th>Commentaires</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          {%for typeFix,fix in fixs%}                   
                            <tr>
                                <td>{{typeFix}}</td>
                                <td>{{fix.FixDate|date(\"m/d/Y\")}}</td>
                                <td>
                                  {% if fix.FixPriority == false %}
                                  0
                                  {% endif %}
                                  {% if fix.FixPriority == true %}
                                  1
                                  {% endif %}
                                </td>
                                <td>
                                  {% if fix.FixState == false %}
                                  Not done
                                  {% endif %}
                                  {% if fix.FixState == true %}
                                  Done
                                  {% endif %}
                                </td>
                                <td>{{fix.FixComment}}</td>
                                <td>
                                  {% if fix.FixState == false %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_room_done', { 'id': fix.id, 'idRoom':room.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  {% endif %}
                                  {% if fix.FixState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_room_undone', { 'id': fix.id, 'idRoom':room.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  {% endif %}
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          {%endfor%}                   
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Liste des meubles
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Id Meuble</th>
                                <th>Nom</th>
                              </tr>
                          </thead>
                          <tbody>
                          {% for meuble in meubles%}                   
                            <tr>
                                <td>{{meuble.id}}</td>
                                <td>{{meuble.name}}</td>
                            </tr> 
                            {% endfor %}                    
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
            
{% endblock %}
{% block page_title %} Room {% endblock %}
{% block page_subtitle %} show {% endblock %}
", "room/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/room/show.html.twig");
    }
}
