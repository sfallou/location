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
        $__internal_1c0b0633cafd62bd536ec69527a765a7e636fff9bb232d95ca44687ca8c9a573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0b0633cafd62bd536ec69527a765a7e636fff9bb232d95ca44687ca8c9a573->enter($__internal_1c0b0633cafd62bd536ec69527a765a7e636fff9bb232d95ca44687ca8c9a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c0b0633cafd62bd536ec69527a765a7e636fff9bb232d95ca44687ca8c9a573->leave($__internal_1c0b0633cafd62bd536ec69527a765a7e636fff9bb232d95ca44687ca8c9a573_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a5c3638253a0ccdc98e890e6d1ce3798dca24c77cab4de3754ca43b5ba12a322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c3638253a0ccdc98e890e6d1ce3798dca24c77cab4de3754ca43b5ba12a322->enter($__internal_a5c3638253a0ccdc98e890e6d1ce3798dca24c77cab4de3754ca43b5ba12a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                ";
        // line 9
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 10
            echo "                  <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_fix_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_doc_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                   
                    <br><br>
                    ";
        }
        // line 25
        echo "                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID Chambre :</strong> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Surface :</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Occupant :</strong>
                                  ";
        // line 34
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) {
            // line 35
            echo "                                     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a>
                                     ";
        }
        // line 37
        echo "                                  </li>
                                
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rent :</strong> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Guarantee :</strong> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</li>
                                <li><strong>Appartement  :</strong> <a href=\"";
        // line 45
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
                                ";
        // line 67
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 68
            echo "                                 <th>Actions</th>
                                ";
        }
        // line 70
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 78
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == false)) {
                // line 79
                echo "                                  0
                                  ";
            }
            // line 81
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == true)) {
                // line 82
                echo "                                  1
                                  ";
            }
            // line 84
            echo "                                </td>
                                <td>
                                  ";
            // line 86
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 87
                echo "                                  Not done
                                  ";
            }
            // line 89
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 90
                echo "                                  Done
                                  ";
            }
            // line 92
            echo "                                </td>
                                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                              ";
            // line 94
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 95
                echo "                                <td>
                                  ";
                // line 96
                if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                    // line 97
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_done", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
                }
                // line 99
                echo "                                  ";
                if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                    // line 100
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_undone", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
                }
                // line 102
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             ";
            }
            // line 105
            echo "                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                            </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["typeDoc"] => $context["doc"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 155
            echo twig_escape_filter($this->env, $context["typeDoc"], "html", null, true);
            echo "</td>
                                <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["doc"], "DocumentDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "DocumentComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["doc"], "documentId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                  ";
            // line 160
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 161
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a>
                                  ";
            }
            // line 162
            echo " 
                             </td>
                            </tr-->
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeDoc'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                   
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
            
";
        
        $__internal_a5c3638253a0ccdc98e890e6d1ce3798dca24c77cab4de3754ca43b5ba12a322->leave($__internal_a5c3638253a0ccdc98e890e6d1ce3798dca24c77cab4de3754ca43b5ba12a322_prof);

    }

    // line 174
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f5c1fe28766f5bb7d99a3c9aa233d16164c0f6c6af3b22153342d9de02f8be19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c1fe28766f5bb7d99a3c9aa233d16164c0f6c6af3b22153342d9de02f8be19->enter($__internal_f5c1fe28766f5bb7d99a3c9aa233d16164c0f6c6af3b22153342d9de02f8be19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Room ";
        
        $__internal_f5c1fe28766f5bb7d99a3c9aa233d16164c0f6c6af3b22153342d9de02f8be19->leave($__internal_f5c1fe28766f5bb7d99a3c9aa233d16164c0f6c6af3b22153342d9de02f8be19_prof);

    }

    // line 175
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cb7094ccbd14478c3645b251b54f1bc495e2cc6de374a73a93887267be741c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7094ccbd14478c3645b251b54f1bc495e2cc6de374a73a93887267be741c52->enter($__internal_cb7094ccbd14478c3645b251b54f1bc495e2cc6de374a73a93887267be741c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_cb7094ccbd14478c3645b251b54f1bc495e2cc6de374a73a93887267be741c52->leave($__internal_cb7094ccbd14478c3645b251b54f1bc495e2cc6de374a73a93887267be741c52_prof);

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
        return array (  377 => 175,  365 => 174,  350 => 165,  341 => 162,  337 => 161,  335 => 160,  331 => 159,  326 => 157,  322 => 156,  318 => 155,  311 => 153,  287 => 131,  278 => 129,  274 => 128,  267 => 126,  245 => 106,  238 => 105,  233 => 102,  227 => 100,  224 => 99,  218 => 97,  216 => 96,  213 => 95,  211 => 94,  207 => 93,  204 => 92,  200 => 90,  197 => 89,  193 => 87,  191 => 86,  187 => 84,  183 => 82,  180 => 81,  176 => 79,  174 => 78,  169 => 76,  165 => 75,  158 => 73,  153 => 70,  149 => 68,  147 => 67,  120 => 45,  116 => 44,  112 => 43,  104 => 37,  96 => 35,  94 => 34,  89 => 32,  85 => 31,  77 => 25,  68 => 19,  61 => 15,  54 => 11,  51 => 10,  49 => 9,  42 => 4,  36 => 3,  11 => 1,);
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
                {% if not is_granted('ROLE_LOCATAIRE') %}
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
                    {% endif %}
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
                                {% if not is_granted('ROLE_LOCATAIRE') %}
                                 <th>Actions</th>
                                {% endif %}
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
                              {% if not is_granted('ROLE_LOCATAIRE') %}
                                <td>
                                  {% if fix.FixState == false %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_room_done', { 'id': fix.id, 'idRoom':room.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  {% endif %}
                                  {% if fix.FixState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_room_undone', { 'id': fix.id, 'idRoom':room.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  {% endif %}
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             {% endif %}
                            </tr>
                          {% endfor %}                   
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
                                  {% if not is_granted('ROLE_LOCATAIRE') %}
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a>
                                  {% endif %} 
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
