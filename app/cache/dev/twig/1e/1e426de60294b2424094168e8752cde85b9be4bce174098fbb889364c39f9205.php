<?php

/* appartement/show.html.twig */
class __TwigTemplate_2e7c351fea6e62363e43d5da15bac9eb7bf2899eeaa2bf19e86dc72b23d67dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "appartement/show.html.twig", 1);
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
        $__internal_e5e9d085ead1a14f7533565b0d68de415827f7a902e8af111d2591be4b1fddd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e9d085ead1a14f7533565b0d68de415827f7a902e8af111d2591be4b1fddd7->enter($__internal_e5e9d085ead1a14f7533565b0d68de415827f7a902e8af111d2591be4b1fddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appartement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e9d085ead1a14f7533565b0d68de415827f7a902e8af111d2591be4b1fddd7->leave($__internal_e5e9d085ead1a14f7533565b0d68de415827f7a902e8af111d2591be4b1fddd7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_29403c9652ac5b8138dc0c38eea003d09af381d670b3d0342f5a109118fb9efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29403c9652ac5b8138dc0c38eea003d09af381d670b3d0342f5a109118fb9efd->enter($__internal_29403c9652ac5b8138dc0c38eea003d09af381d670b3d0342f5a109118fb9efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">

                <div >
                     <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_fix_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-info fa-lg\"></i> Envoyer une info</a>
                            
                    </div>
                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "adresse", array()), "html", null, true);
        echo "</li>
                                <li><strong>Surface :</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Référent :</strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "contactappart", array()), "html", null, true);
        echo "</li>
                                <li><strong>Résidence  :</strong> <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_show", array("id" => $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "name", array()), "html", null, true);
        echo "</a> </li>
                                 <li><strong>Colocataires :</strong>
                                 ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                                  ";
            if ($this->getAttribute($context["user"], "username", array(), "any", true, true)) {
                // line 40
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a> <br>
                                     ";
            }
            // line 42
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                 </li>                            
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Code Wifi :</strong> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "wificode", array()), "html", null, true);
        echo "</li>
                                <li><strong>Phone :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "phone", array()), "html", null, true);
        echo "</li>
                                <li><strong>RIB :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "rib", array()), "html", null, true);
        echo "</li>
                                <li><strong>Chambres :</strong>
                                 ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 53
            echo "                                  ";
            if ($this->getAttribute($context["room"], "id", array(), "any", true, true)) {
                // line 54
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
                echo "\">Room ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
                echo "</a> <br>
                                     ";
            }
            // line 56
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </li>
                            </ul>
                            <br><br>
                    </div>
                    
                </div>
                </div>
                
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des paiements du loyer de l'appartement de l'année 
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>User/Mois</th>
                                <th>Jan</th>
                                <th>Fév</th>
                                <th>Mars</th>
                                <th>Avril</th>
                                <th>Mai</th>
                                <th>Juin</th>
                                <th>Juil</th>
                                <th>Août</th>
                                <th>Sept</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 92
            echo "                            <tr>
                                <td>
                                  ";
            // line 94
            if ($this->getAttribute($context["user"], "username", array(), "any", true, true)) {
                // line 95
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a>
                                  ";
            }
            // line 97
            echo "                                </td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                          </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Liste des charges de l'année
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th></th>
                                <th>Jan</th>
                                <th>Fév</th>
                                <th>Mars</th>
                                <th>Avril</th>
                                <th>Mai</th>
                                <th>Juin</th>
                                <th>Juil</th>
                                <th>Août</th>
                                <th>Sept</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                              </tr>
                          </thead>
                          <tbody>  
                           
                              <tr>
                                <td>Charges Electricités</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Charges Gaz</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Autres charges</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                          </tbody>
                        </table>
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
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 213
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixPriority", array()), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 217
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 218
                echo "                                  Not done
                                  ";
            }
            // line 220
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 221
                echo "                                  Done
                                  ";
            }
            // line 223
            echo "                                </td>
                                <td>";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 226
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 227
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_appart_done", array("id" => $this->getAttribute($context["fix"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
            }
            // line 229
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 230
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_appart_undone", array("id" => $this->getAttribute($context["fix"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
            }
            // line 232
            echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
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
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                                <td>  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                                </td>
                            </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                    
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    
";
        
        $__internal_29403c9652ac5b8138dc0c38eea003d09af381d670b3d0342f5a109118fb9efd->leave($__internal_29403c9652ac5b8138dc0c38eea003d09af381d670b3d0342f5a109118fb9efd_prof);

    }

    // line 273
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3115e806a8b4e385dfa22444a150abc98ed661d58f6d690aecd31b3bca64a966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3115e806a8b4e385dfa22444a150abc98ed661d58f6d690aecd31b3bca64a966->enter($__internal_3115e806a8b4e385dfa22444a150abc98ed661d58f6d690aecd31b3bca64a966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartement ";
        
        $__internal_3115e806a8b4e385dfa22444a150abc98ed661d58f6d690aecd31b3bca64a966->leave($__internal_3115e806a8b4e385dfa22444a150abc98ed661d58f6d690aecd31b3bca64a966_prof);

    }

    // line 274
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7975b989ef6fc1862328db04984acc9e5acd0ebfc405a0d475ee312e7561d887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7975b989ef6fc1862328db04984acc9e5acd0ebfc405a0d475ee312e7561d887->enter($__internal_7975b989ef6fc1862328db04984acc9e5acd0ebfc405a0d475ee312e7561d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_7975b989ef6fc1862328db04984acc9e5acd0ebfc405a0d475ee312e7561d887->leave($__internal_7975b989ef6fc1862328db04984acc9e5acd0ebfc405a0d475ee312e7561d887_prof);

    }

    public function getTemplateName()
    {
        return "appartement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 274,  468 => 273,  453 => 263,  442 => 259,  438 => 258,  431 => 256,  408 => 235,  399 => 232,  393 => 230,  390 => 229,  384 => 227,  382 => 226,  377 => 224,  374 => 223,  370 => 221,  367 => 220,  363 => 218,  361 => 217,  356 => 215,  352 => 214,  348 => 213,  341 => 211,  240 => 112,  220 => 97,  212 => 95,  210 => 94,  206 => 92,  202 => 91,  166 => 57,  160 => 56,  152 => 54,  149 => 53,  145 => 52,  140 => 50,  136 => 49,  132 => 48,  125 => 43,  119 => 42,  111 => 40,  108 => 39,  104 => 38,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  72 => 23,  65 => 19,  58 => 15,  51 => 11,  42 => 4,  36 => 3,  11 => 1,);
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
                            <a class=\"btn btn-success\" href=\"{{ path('add_furniture_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_fix_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_furniture_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_furniture_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-info fa-lg\"></i> Envoyer une info</a>
                            
                    </div>
                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse :</strong> {{appartement.adresse}}</li>
                                <li><strong>Surface :</strong> {{appartement.surface}} </li>
                                <li><strong>Référent :</strong> {{appartement.contactappart}}</li>
                                <li><strong>Résidence  :</strong> <a href=\"{{ path('residence_show', { 'id': residence.id }) }}\">{{ residence.name }}</a> </li>
                                 <li><strong>Colocataires :</strong>
                                 {% for user in users%}
                                  {% if user.username is defined %}
                                     <a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a> <br>
                                     {% endif%}
                                  {% endfor %}
                                 </li>                            
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Code Wifi :</strong> {{appartement.wificode}}</li>
                                <li><strong>Phone :</strong> {{appartement.phone}}</li>
                                <li><strong>RIB :</strong> {{appartement.rib}}</li>
                                <li><strong>Chambres :</strong>
                                 {% for room in rooms%}
                                  {% if room.id is defined %}
                                     <a href=\"{{ path('room_show', { 'id': room.id }) }}\">Room {{ room.id}}</a> <br>
                                     {% endif%}
                                  {% endfor %}
                                </li>
                            </ul>
                            <br><br>
                    </div>
                    
                </div>
                </div>
                
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des paiements du loyer de l'appartement de l'année 
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>User/Mois</th>
                                <th>Jan</th>
                                <th>Fév</th>
                                <th>Mars</th>
                                <th>Avril</th>
                                <th>Mai</th>
                                <th>Juin</th>
                                <th>Juil</th>
                                <th>Août</th>
                                <th>Sept</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                              </tr>
                          </thead>
                          <tbody>
                          {% for user in users %}
                            <tr>
                                <td>
                                  {% if user.username is defined %}
                                     <a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a>
                                  {% endif%}
                                </td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                          {% endfor %}
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Liste des charges de l'année
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th></th>
                                <th>Jan</th>
                                <th>Fév</th>
                                <th>Mars</th>
                                <th>Avril</th>
                                <th>Mai</th>
                                <th>Juin</th>
                                <th>Juil</th>
                                <th>Août</th>
                                <th>Sept</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                              </tr>
                          </thead>
                          <tbody>  
                           
                              <tr>
                                <td>Charges Electricités</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Charges Gaz</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                              <tr>
                                <td>Autres charges</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>x</td>
                              </tr>
                          </tbody>
                        </table>
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
                                <td>{{fix.FixPriority}}</td>
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
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_appart_done', { 'id': fix.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  {% endif %}
                                  {% if fix.FixState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_appart_undone', { 'id': fix.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
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
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          {% for meuble in meubles%}                   
                            <tr>
                                <td>{{meuble.id}}</td>
                                <td>{{meuble.name}}</td>
                                <td>  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                                </td>
                            </tr> 
                            {% endfor %}                    
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    
{% endblock %}

{% block page_title %} Appartement {% endblock %}
{% block page_subtitle %} show {% endblock %}

", "appartement/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/appartement/show.html.twig");
    }
}
