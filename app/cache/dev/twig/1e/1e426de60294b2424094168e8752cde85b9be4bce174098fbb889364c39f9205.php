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
        $__internal_a98e30131dba7b79cb3483339175dfdd65a4e96183e8e8701165060ad7a5d32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98e30131dba7b79cb3483339175dfdd65a4e96183e8e8701165060ad7a5d32b->enter($__internal_a98e30131dba7b79cb3483339175dfdd65a4e96183e8e8701165060ad7a5d32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appartement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98e30131dba7b79cb3483339175dfdd65a4e96183e8e8701165060ad7a5d32b->leave($__internal_a98e30131dba7b79cb3483339175dfdd65a4e96183e8e8701165060ad7a5d32b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ca2103b221421089a9308b3b05f80dc776d082317ede439e8fd7877112e8f1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2103b221421089a9308b3b05f80dc776d082317ede439e8fd7877112e8f1fc->enter($__internal_ca2103b221421089a9308b3b05f80dc776d082317ede439e8fd7877112e8f1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
            echo "                   
                     <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_furniture_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                      
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_fix_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_charge_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_doc_appart", array("id" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
              ";
        }
        // line 29
        echo "                    <br><br>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4>
                    </div>
                    <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse :</strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "adresse", array()), "html", null, true);
        echo "</li>
                                <li><strong>Surface :</strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Référent :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "contactappart", array()), "html", null, true);
        echo "</li>
                                <li><strong>Résidence  :</strong> <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("residence_show", array("id" => $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "name", array()), "html", null, true);
        echo "</a> </li>
                                 <li><strong>Colocataires :</strong>
                                 ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "                                  ";
            if ($this->getAttribute($context["user"], "username", array(), "any", true, true)) {
                // line 43
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a> <br>
                                     ";
            }
            // line 45
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                 </li>                            
                            </ul>
                    </div>
                    <div class=\"col-md-5\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Code Wifi :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "wificode", array()), "html", null, true);
        echo "</li>
                                <li><strong>Phone :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "phone", array()), "html", null, true);
        echo "</li>
                                <li><strong>RIB :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "rib", array()), "html", null, true);
        echo "</li>
                                <li><strong>Chambres :</strong>
                                 ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 56
            echo "                                  ";
            if ($this->getAttribute($context["room"], "id", array(), "any", true, true)) {
                // line 57
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
                echo "\">Room ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
                echo "</a> <br>
                                     ";
            }
            // line 59
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                </li>
                            </ul>
                            <br><br>
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 93
            echo "                            <tr>
                                <td>
                                  ";
            // line 95
            if ($this->getAttribute($context["user"], "username", array(), "any", true, true)) {
                // line 96
                echo "                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a>
                                  ";
            }
            // line 98
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
        // line 113
        echo "                          </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                             Liste des charges
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type charge</th>
                                <th>Date charge</th>
                                <th>Montant</th>
                                <th>État</th>
                                <th>Commentaires</th>
                                ";
        // line 133
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 134
            echo "                                 <th>Actions</th>
                                 ";
        }
        // line 136
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges")));
        foreach ($context['_seq'] as $context["typeCharge"] => $context["charge"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 141
            echo twig_escape_filter($this->env, $context["typeCharge"], "html", null, true);
            echo "</td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["charge"], "ChargeDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeAmount", array()), "html", null, true);
            echo " euros</td>
                                <td>
                                  ";
            // line 145
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                // line 146
                echo "                                  Not paid
                                  ";
            }
            // line 148
            echo "                                  ";
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                // line 149
                echo "                                  Paid
                                  ";
            }
            // line 151
            echo "                                </td>
                                <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeComment", array()), "html", null, true);
            echo "</td>
                                ";
            // line 153
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 154
                echo "                                <td>
                                  ";
                // line 155
                if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                    // line 156
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_appart_paid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idAppart" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  ";
                }
                // line 158
                echo "                                  ";
                if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                    // line 159
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_appart_unpaid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idAppart" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
                                  ";
                }
                // line 161
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             ";
            }
            // line 164
            echo "                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeCharge'], $context['charge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                   
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
                                ";
        // line 185
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 186
            echo "                                 <th>Actions</th>
                                ";
        }
        // line 188
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 193
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 196
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == false)) {
                // line 197
                echo "                                  0
                                  ";
            }
            // line 199
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == true)) {
                // line 200
                echo "                                  1
                                  ";
            }
            // line 202
            echo "                                </td>
                                <td>
                                  ";
            // line 204
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 205
                echo "                                  Not done
                                  ";
            }
            // line 207
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 208
                echo "                                  Done
                                  ";
            }
            // line 210
            echo "                                </td>
                                <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                                ";
            // line 212
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 213
                echo "                                <td>
                                  ";
                // line 214
                if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                    // line 215
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_appart_done", array("id" => $this->getAttribute($context["fix"], "id", array()), "idAppart" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
                }
                // line 217
                echo "                                  ";
                if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                    // line 218
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_appart_undone", array("id" => $this->getAttribute($context["fix"], "id", array()), "idAppart" => $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
                }
                // line 220
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             ";
            }
            // line 223
            echo "                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
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
                                ";
        // line 241
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 242
            echo "                                <th>Actions</th>
                                ";
        }
        // line 244
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meubles"]) ? $context["meubles"] : $this->getContext($context, "meubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["meuble"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["meuble"], "name", array()), "html", null, true);
            echo "</td>
                                ";
            // line 251
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 252
                echo "                                <td>  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                                </td>
                                ";
            }
            // line 255
            echo "                            </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meuble'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
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
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["typeDoc"] => $context["doc"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 281
            echo twig_escape_filter($this->env, $context["typeDoc"], "html", null, true);
            echo "</td>
                                <td>";
            // line 282
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["doc"], "DocumentDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "DocumentComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["doc"], "documentId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                  ";
            // line 286
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 287
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                                  ";
            }
            // line 289
            echo "                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeDoc'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                   
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    
";
        
        $__internal_ca2103b221421089a9308b3b05f80dc776d082317ede439e8fd7877112e8f1fc->leave($__internal_ca2103b221421089a9308b3b05f80dc776d082317ede439e8fd7877112e8f1fc_prof);

    }

    // line 301
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3572612931cf0dc87460db2806328dc0f5502e19fd7bc76d9a6a31d415341aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3572612931cf0dc87460db2806328dc0f5502e19fd7bc76d9a6a31d415341aa3->enter($__internal_3572612931cf0dc87460db2806328dc0f5502e19fd7bc76d9a6a31d415341aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartement ";
        
        $__internal_3572612931cf0dc87460db2806328dc0f5502e19fd7bc76d9a6a31d415341aa3->leave($__internal_3572612931cf0dc87460db2806328dc0f5502e19fd7bc76d9a6a31d415341aa3_prof);

    }

    // line 302
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cd46ac755101f5752e4027fbb74db86fb919c5b5acf6e29f373dd432fdd5e916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd46ac755101f5752e4027fbb74db86fb919c5b5acf6e29f373dd432fdd5e916->enter($__internal_cd46ac755101f5752e4027fbb74db86fb919c5b5acf6e29f373dd432fdd5e916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_cd46ac755101f5752e4027fbb74db86fb919c5b5acf6e29f373dd432fdd5e916->leave($__internal_cd46ac755101f5752e4027fbb74db86fb919c5b5acf6e29f373dd432fdd5e916_prof);

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
        return array (  622 => 302,  610 => 301,  595 => 291,  587 => 289,  583 => 287,  581 => 286,  577 => 285,  572 => 283,  568 => 282,  564 => 281,  557 => 279,  532 => 256,  525 => 255,  520 => 252,  518 => 251,  514 => 250,  510 => 249,  503 => 247,  498 => 244,  494 => 242,  492 => 241,  473 => 224,  466 => 223,  461 => 220,  455 => 218,  452 => 217,  446 => 215,  444 => 214,  441 => 213,  439 => 212,  435 => 211,  432 => 210,  428 => 208,  425 => 207,  421 => 205,  419 => 204,  415 => 202,  411 => 200,  408 => 199,  404 => 197,  402 => 196,  397 => 194,  393 => 193,  386 => 191,  381 => 188,  377 => 186,  375 => 185,  353 => 165,  346 => 164,  341 => 161,  335 => 159,  332 => 158,  326 => 156,  324 => 155,  321 => 154,  319 => 153,  315 => 152,  312 => 151,  308 => 149,  305 => 148,  301 => 146,  299 => 145,  294 => 143,  290 => 142,  286 => 141,  279 => 139,  274 => 136,  270 => 134,  268 => 133,  246 => 113,  226 => 98,  218 => 96,  216 => 95,  212 => 93,  208 => 92,  174 => 60,  168 => 59,  160 => 57,  157 => 56,  153 => 55,  148 => 53,  144 => 52,  140 => 51,  133 => 46,  127 => 45,  119 => 43,  116 => 42,  112 => 41,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  84 => 29,  77 => 25,  70 => 21,  63 => 17,  55 => 12,  51 => 10,  49 => 9,  42 => 4,  36 => 3,  11 => 1,);
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
                            <a class=\"btn btn-success\" href=\"{{ path('add_furniture_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-tv fa-lg\"></i> Ajouter Meuble</a>
                            <br><br>
                      
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_fix_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_charge_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                    </div>
                    <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_doc_appart', { 'id': appartement.id }) }}\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
              {% endif %}
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
                             Liste des charges
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Type charge</th>
                                <th>Date charge</th>
                                <th>Montant</th>
                                <th>État</th>
                                <th>Commentaires</th>
                                {% if not is_granted('ROLE_LOCATAIRE') %}
                                 <th>Actions</th>
                                 {% endif %}
                              </tr>
                          </thead>
                          <tbody>
                          {%for typeCharge,charge in charges%}                   
                            <tr>
                                <td>{{typeCharge}}</td>
                                <td>{{charge.ChargeDate|date(\"m/d/Y\")}}</td>
                                <td>{{charge.ChargeAmount}} euros</td>
                                <td>
                                  {% if charge.ChargeState == false %}
                                  Not paid
                                  {% endif %}
                                  {% if charge.ChargeState == true %}
                                  Paid
                                  {% endif %}
                                </td>
                                <td>{{charge.ChargeComment}}</td>
                                {% if not is_granted('ROLE_LOCATAIRE') %}
                                <td>
                                  {% if charge.ChargeState == false %}
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_appart_paid', { 'id': charge.id, 'idAppart':appartement.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  {% endif %}
                                  {% if charge.ChargeState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_appart_unpaid', { 'id': charge.id, 'idAppart':appartement.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
                                  {% endif %}
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             {% endif %}
                            </tr>
                          {%endfor%}                   
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
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_appart_done', { 'id': fix.id, 'idAppart':appartement.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  {% endif %}
                                  {% if fix.FixState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('fix_appart_undone', { 'id': fix.id, 'idAppart':appartement.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  {% endif %}
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             {% endif %}
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
                                {% if not is_granted('ROLE_LOCATAIRE') %}
                                <th>Actions</th>
                                {% endif %}
                              </tr>
                          </thead>
                          <tbody>
                          {% for meuble in meubles%}                   
                            <tr>
                                <td>{{meuble.id}}</td>
                                <td>{{meuble.name}}</td>
                                {% if not is_granted('ROLE_LOCATAIRE') %}
                                <td>  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
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
                            </tr>
                          {%endfor%}                   
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
