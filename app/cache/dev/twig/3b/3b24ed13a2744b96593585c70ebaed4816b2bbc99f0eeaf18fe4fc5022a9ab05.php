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
        $__internal_3a118874ceac0dc632182a7781d89a67e33f03ccd00311f5e4037c64373ce7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a118874ceac0dc632182a7781d89a67e33f03ccd00311f5e4037c64373ce7c7->enter($__internal_3a118874ceac0dc632182a7781d89a67e33f03ccd00311f5e4037c64373ce7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a118874ceac0dc632182a7781d89a67e33f03ccd00311f5e4037c64373ce7c7->leave($__internal_3a118874ceac0dc632182a7781d89a67e33f03ccd00311f5e4037c64373ce7c7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b38fcf53ed3c4eb4e09e3ccf8eb0224495adc4d60328015381f89065bb29ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38fcf53ed3c4eb4e09e3ccf8eb0224495adc4d60328015381f89065bb29ec5b->enter($__internal_b38fcf53ed3c4eb4e09e3ccf8eb0224495adc4d60328015381f89065bb29ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_doc_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                   
                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID Chambre :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Surface :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Occupant :</strong>
                                  ";
        // line 32
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) {
            // line 33
            echo "                                     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a>
                                     ";
        }
        // line 35
        echo "                                  </li>
                                
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rent :</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Guarantee :</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Appartement  :</strong> <a href=\"";
        // line 43
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 71
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 74
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == false)) {
                // line 75
                echo "                                  0
                                  ";
            }
            // line 77
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == true)) {
                // line 78
                echo "                                  1
                                  ";
            }
            // line 80
            echo "                                </td>
                                <td>
                                  ";
            // line 82
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 83
                echo "                                  Not done
                                  ";
            }
            // line 85
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 86
                echo "                                  Done
                                  ";
            }
            // line 88
            echo "                                </td>
                                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 91
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 92
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_done", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
            }
            // line 94
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 95
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_undone", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
            }
            // line 97
            echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                            </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    
                          </tbody>
                        </table>
                    </div>
                </div>
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Les documents
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type document</th>
                                <th>Date </th>
                                <th>Commentaires</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["typeDoc"] => $context["doc"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 149
            echo twig_escape_filter($this->env, $context["typeDoc"], "html", null, true);
            echo "</td>
                                <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["doc"], "DocumentDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "DocumentComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["doc"], "documentId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr-->
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeDoc'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                   
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
            
";
        
        $__internal_b38fcf53ed3c4eb4e09e3ccf8eb0224495adc4d60328015381f89065bb29ec5b->leave($__internal_b38fcf53ed3c4eb4e09e3ccf8eb0224495adc4d60328015381f89065bb29ec5b_prof);

    }

    // line 166
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f063cf8606ca3028b15daafd807e2e2e89c2c8f0e0283316f5e0e2a3604684ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f063cf8606ca3028b15daafd807e2e2e89c2c8f0e0283316f5e0e2a3604684ae->enter($__internal_f063cf8606ca3028b15daafd807e2e2e89c2c8f0e0283316f5e0e2a3604684ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_f063cf8606ca3028b15daafd807e2e2e89c2c8f0e0283316f5e0e2a3604684ae->leave($__internal_f063cf8606ca3028b15daafd807e2e2e89c2c8f0e0283316f5e0e2a3604684ae_prof);

    }

    // line 167
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8f5a87b45e345747658a5cb6d01805eb7e6d2be6968be8fa0ca5b7f4733ee9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5a87b45e345747658a5cb6d01805eb7e6d2be6968be8fa0ca5b7f4733ee9d4->enter($__internal_8f5a87b45e345747658a5cb6d01805eb7e6d2be6968be8fa0ca5b7f4733ee9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_8f5a87b45e345747658a5cb6d01805eb7e6d2be6968be8fa0ca5b7f4733ee9d4->leave($__internal_8f5a87b45e345747658a5cb6d01805eb7e6d2be6968be8fa0ca5b7f4733ee9d4_prof);

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
        return array (  348 => 167,  336 => 166,  321 => 157,  310 => 153,  305 => 151,  301 => 150,  297 => 149,  290 => 147,  266 => 125,  257 => 123,  253 => 122,  246 => 120,  224 => 100,  215 => 97,  209 => 95,  206 => 94,  200 => 92,  198 => 91,  193 => 89,  190 => 88,  186 => 86,  183 => 85,  179 => 83,  177 => 82,  173 => 80,  169 => 78,  166 => 77,  162 => 75,  160 => 74,  155 => 72,  151 => 71,  144 => 69,  113 => 43,  109 => 42,  105 => 41,  97 => 35,  89 => 33,  87 => 32,  82 => 30,  78 => 29,  64 => 18,  57 => 14,  50 => 10,  42 => 4,  36 => 3,  11 => 1,);
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
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_doc_user_room', { 'id': user_room.id }) }}\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
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
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Les documents
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type document</th>
                                <th>Date </th>
                                <th>Commentaires</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          {%for typeDoc,doc in documents%}                   
                            <tr>
                                <td>{{typeDoc}}</td>
                                <td>{{doc.DocumentDate|date(\"m/d/Y\")}}</td>
                                <td>{{doc.DocumentComment}}</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"{{ path('document_show', { 'id': doc.documentId }) }}\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr-->
                          {%endfor%}                   
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
