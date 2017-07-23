<?php

/* user/show.html.twig */
class __TwigTemplate_3ba3188834111ff7eeebb80f4ecf330ed1ad8a7b08c75e1f869a96ec10b21d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "user/show.html.twig", 1);
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
        $__internal_4c17c6ce70f82c215e10a6b3d318b2e85f2558bb792c72c5a88ca77d21373c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c17c6ce70f82c215e10a6b3d318b2e85f2558bb792c72c5a88ca77d21373c6a->enter($__internal_4c17c6ce70f82c215e10a6b3d318b2e85f2558bb792c72c5a88ca77d21373c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c17c6ce70f82c215e10a6b3d318b2e85f2558bb792c72c5a88ca77d21373c6a->leave($__internal_4c17c6ce70f82c215e10a6b3d318b2e85f2558bb792c72c5a88ca77d21373c6a_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0b3043d8da92379662319ff9f06ec958899dedc6549fb628c0c0ff7da085ff1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3043d8da92379662319ff9f06ec958899dedc6549fb628c0c0ff7da085ff1e->enter($__internal_0b3043d8da92379662319ff9f06ec958899dedc6549fb628c0c0ff7da085ff1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
             ";
        // line 8
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 9
            echo "                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_charge_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                </div>
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_rent_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()), "idUser" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userId", array()), "idRoom" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "roomId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-money fa-lg\"></i> Editer quittance</a>
                            
                </div>
              ";
        }
        // line 18
        echo "               ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 19
            echo "                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_fix_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_doc_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                    ";
        }
        // line 28
        echo "                <br><br>
                
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4></div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID User:</strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Profil :</strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "</li>
                                <li><strong>Username :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
                                <li><strong>Prénom :</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " </li>
                                <li><strong>Nom :</strong> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo " </li>               
                                <li><strong>Email :</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</li>
                                <li><strong>Téléphone :</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</li>
                                <li><strong>Contact Garant :</strong> </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <div class=\"pull-left image\">
                                <img src=\"/bundles/avanzuadmintheme/img/avatar.png\" class=\"img-circle\" alt=\"Demo User\" width=150/>
                                <br><br>
                            </div> 

                        </div>
                        <a class=\"btn btn-success\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-edit fa-lg\"></i> Modifier informations</a>
                        <div class=\"page-header\">-*-</div>
                        <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations sur la colocation
                        </h4>
                        </div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse Appartement :</strong> <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Appartement :</strong> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "surface", array()), "html", null, true);
        echo "</li>
                                <li><strong>Responsable Coloc :</strong> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "contactAppart", array()), "html", null, true);
        echo "</li>
                                <li><strong>Contact Gardien :</strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactGardien", array()), "html", null, true);
        echo "</li>
                                <li><strong>Horaire Gardien :</strong> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "horaireGardien", array()), "html", null, true);
        echo " </li>
                                <li><strong>Contact Syndic :</strong> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactSyndic", array()), "html", null, true);
        echo " </li>
                            </ul>
                          <div class=\"col-md-3\">
                    
                            
                </div>
                        </div>
                        <div class=\"col-md-5 \">
                            <ul class=\"list-unstyled\">
                                <li><strong>N° Chambre :</strong> <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Chambre :</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Date d'entrée :</strong> ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateIn", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Date de sortie :</strong> ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateOut", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Prix Loyer :</strong> ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros </li>
                                <li><strong>Caution :</strong> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</li>               
                            </ul>
                             <br><br>
                        </div>
                </div>
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des paiements du loyer de l'appartement de l'année ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Locataire</th>
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
                                <td> 
                                 <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a>   
                                </td>
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rents"]) ? $context["rents"] : $this->getContext($context, "rents")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 116
            echo "                                  <td>Ok <br>
                                    ";
            // line 117
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 118
                echo "                                     <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_rent_user_room", array("id" => $this->getAttribute($context["val"], "id", array()), "idUser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a>
                                     ";
            }
            // line 120
            echo "                                  </td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                              </tr>                
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
                                 ";
        // line 142
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
            // line 143
            echo "                                 <th>Actions</th>
                                 ";
        }
        // line 145
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges")));
        foreach ($context['_seq'] as $context["typeCharge"] => $context["charge"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 150
            echo twig_escape_filter($this->env, $context["typeCharge"], "html", null, true);
            echo "</td>
                                <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["charge"], "ChargeDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeAmount", array()), "html", null, true);
            echo " euros</td>
                                <td>
                                  ";
            // line 154
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                // line 155
                echo "                                  Not paid
                                  ";
            }
            // line 157
            echo "                                  ";
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                // line 158
                echo "                                  Paid
                                  ";
            }
            // line 160
            echo "                                </td>
                                <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeComment", array()), "html", null, true);
            echo "</td>
                                 ";
            // line 162
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 163
                echo "                                <td>
                                  ";
                // line 164
                if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                    // line 165
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_room_paid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idRoom" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  ";
                }
                // line 167
                echo "                                  ";
                if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                    // line 168
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_room_unpaid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idRoom" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
                                  ";
                }
                // line 170
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             ";
            }
            // line 173
            echo "                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeCharge'], $context['charge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
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
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["typeDoc"] => $context["doc"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 198
            echo twig_escape_filter($this->env, $context["typeDoc"], "html", null, true);
            echo "</td>
                                <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["doc"], "DocumentDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "DocumentComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["doc"], "documentId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                   ";
            // line 203
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LOCATAIRE")) {
                // line 204
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                                  ";
            }
            // line 206
            echo "                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeDoc'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                   
                          </tbody>
                        </table>
                    </div>
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Les quittances de loyer
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Date Quittance</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quittances"]) ? $context["quittances"] : $this->getContext($context, "quittances")));
        foreach ($context['_seq'] as $context["_key"] => $context["quittance"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quittance"], "rentDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quittance", array("id" => $this->getAttribute($context["quittance"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quittance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
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
        // line 252
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 253
            echo "                                 <th>Actions</th>
                                 ";
        }
        // line 255
        echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fixs"]) ? $context["fixs"] : $this->getContext($context, "fixs")));
        foreach ($context['_seq'] as $context["typeFix"] => $context["fix"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 260
            echo twig_escape_filter($this->env, $context["typeFix"], "html", null, true);
            echo "</td>
                                <td>";
            // line 261
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fix"], "FixDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 263
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == false)) {
                // line 264
                echo "                                  0
                                  ";
            }
            // line 266
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixPriority", array()) == true)) {
                // line 267
                echo "                                  1
                                  ";
            }
            // line 269
            echo "                                </td>
                                <td>
                                  ";
            // line 271
            if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                // line 272
                echo "                                  Not done
                                  ";
            }
            // line 274
            echo "                                  ";
            if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                // line 275
                echo "                                  Done
                                  ";
            }
            // line 277
            echo "                                </td>
                                <td>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($context["fix"], "FixComment", array()), "html", null, true);
            echo "</td>
                                ";
            // line 279
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
                // line 280
                echo "                                <td>
                                  ";
                // line 281
                if (($this->getAttribute($context["fix"], "FixState", array()) == false)) {
                    // line 282
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_done", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-check fa-lg\"></i> Done</a>
                                  ";
                }
                // line 284
                echo "                                  ";
                if (($this->getAttribute($context["fix"], "FixState", array()) == true)) {
                    // line 285
                    echo "                                  <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fix_room_undone", array("id" => $this->getAttribute($context["fix"], "id", array()), "idRoom" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-times fa-lg\"></i> Undone</a>
                                  ";
                }
                // line 287
                echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                             ";
            }
            // line 290
            echo "                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeFix'], $context['fix'], $context['_parent'], $context['loop']);
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
        
        $__internal_0b3043d8da92379662319ff9f06ec958899dedc6549fb628c0c0ff7da085ff1e->leave($__internal_0b3043d8da92379662319ff9f06ec958899dedc6549fb628c0c0ff7da085ff1e_prof);

    }

    // line 301
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_503e61312b60f2402fa8c4cf1e4a9049814bbdc919179926c6c0e3eb05c1b588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503e61312b60f2402fa8c4cf1e4a9049814bbdc919179926c6c0e3eb05c1b588->enter($__internal_503e61312b60f2402fa8c4cf1e4a9049814bbdc919179926c6c0e3eb05c1b588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Users ";
        
        $__internal_503e61312b60f2402fa8c4cf1e4a9049814bbdc919179926c6c0e3eb05c1b588->leave($__internal_503e61312b60f2402fa8c4cf1e4a9049814bbdc919179926c6c0e3eb05c1b588_prof);

    }

    // line 302
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_85ab9bc1e155ab4f84108e52f9dc8b3467b138d5722ee635edf1761a889ef7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ab9bc1e155ab4f84108e52f9dc8b3467b138d5722ee635edf1761a889ef7e8->enter($__internal_85ab9bc1e155ab4f84108e52f9dc8b3467b138d5722ee635edf1761a889ef7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_85ab9bc1e155ab4f84108e52f9dc8b3467b138d5722ee635edf1761a889ef7e8->leave($__internal_85ab9bc1e155ab4f84108e52f9dc8b3467b138d5722ee635edf1761a889ef7e8_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 302,  615 => 301,  600 => 291,  593 => 290,  588 => 287,  582 => 285,  579 => 284,  573 => 282,  571 => 281,  568 => 280,  566 => 279,  562 => 278,  559 => 277,  555 => 275,  552 => 274,  548 => 272,  546 => 271,  542 => 269,  538 => 267,  535 => 266,  531 => 264,  529 => 263,  524 => 261,  520 => 260,  513 => 258,  508 => 255,  504 => 253,  502 => 252,  480 => 232,  470 => 229,  465 => 227,  458 => 225,  439 => 208,  431 => 206,  427 => 204,  425 => 203,  421 => 202,  416 => 200,  412 => 199,  408 => 198,  401 => 196,  377 => 174,  370 => 173,  365 => 170,  359 => 168,  356 => 167,  350 => 165,  348 => 164,  345 => 163,  343 => 162,  339 => 161,  336 => 160,  332 => 158,  329 => 157,  325 => 155,  323 => 154,  318 => 152,  314 => 151,  310 => 150,  303 => 148,  298 => 145,  294 => 143,  292 => 142,  270 => 122,  263 => 120,  257 => 118,  255 => 117,  252 => 116,  248 => 115,  241 => 113,  213 => 88,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  180 => 75,  168 => 66,  164 => 65,  160 => 64,  156 => 63,  152 => 62,  146 => 61,  135 => 53,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  87 => 28,  80 => 24,  73 => 20,  70 => 19,  67 => 18,  60 => 14,  53 => 10,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
             {% if not is_granted('ROLE_LOCATAIRE') %}
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"{{ path('add_charge_room', { 'id': room.id }) }}\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                </div>
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"{{ path('add_rent_user_room', { 'id': user_room.id,'idUser': user_room.userId,'idRoom': user_room.roomId }) }}\"><i class=\"fa fa-money fa-lg\"></i> Editer quittance</a>
                            
                </div>
              {% endif %}
               {% if app.user.id == user.id %}
                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_fix_room', { 'id': room.id }) }}\"><i class=\"fa fa-wrench fa-lg\"></i> Signaler Réparation</a>
                            <br><br>
                    </div>
                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_doc_user_room', { 'id': user_room.id }) }}\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                    {% endif  %}
                <br><br>
                
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4></div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID User:</strong> {{user.id}}</li>
                                <li><strong>Profil :</strong> {{user.roles[0]}}</li>
                                <li><strong>Username :</strong> {{user.username}}</li>
                                <li><strong>Prénom :</strong> {{user.firstName}} </li>
                                <li><strong>Nom :</strong> {{user.lastName}} </li>               
                                <li><strong>Email :</strong> {{user.email}}</li>
                                <li><strong>Téléphone :</strong> {{user.phone}}</li>
                                <li><strong>Contact Garant :</strong> </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <div class=\"pull-left image\">
                                <img src=\"/bundles/avanzuadmintheme/img/avatar.png\" class=\"img-circle\" alt=\"Demo User\" width=150/>
                                <br><br>
                            </div> 

                        </div>
                        <a class=\"btn btn-success\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-edit fa-lg\"></i> Modifier informations</a>
                        <div class=\"page-header\">-*-</div>
                        <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations sur la colocation
                        </h4>
                        </div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse Appartement :</strong> <a href=\"{{ path('appartement_show', { 'id': appart.id }) }}\">{{ appart.adresse }}</a></li>
                                <li><strong>Surface Appartement :</strong> {{appart.surface}}</li>
                                <li><strong>Responsable Coloc :</strong> {{appart.contactAppart}}</li>
                                <li><strong>Contact Gardien :</strong> {{residence.contactGardien}}</li>
                                <li><strong>Horaire Gardien :</strong> {{residence.horaireGardien}} </li>
                                <li><strong>Contact Syndic :</strong> {{residence.contactSyndic}} </li>
                            </ul>
                          <div class=\"col-md-3\">
                    
                            
                </div>
                        </div>
                        <div class=\"col-md-5 \">
                            <ul class=\"list-unstyled\">
                                <li><strong>N° Chambre :</strong> <a href=\"{{ path('room_show', { 'id': room.id }) }}\">{{ room.id }}</a></li>
                                <li><strong>Surface Chambre :</strong> {{room.surface}} </li>
                                <li><strong>Date d'entrée :</strong> {{user_room.userRoomDateIn|date('d-m-Y')}}</li>
                                <li><strong>Date de sortie :</strong> {{user_room.userRoomDateOut|date('d-m-Y')}}</li>
                                <li><strong>Prix Loyer :</strong> {{room.rent}} euros </li>
                                <li><strong>Caution :</strong> {{room.guarantee}} euros</li>               
                            </ul>
                             <br><br>
                        </div>
                </div>
                 <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des paiements du loyer de l'appartement de l'année {{year}}
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Locataire</th>
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
                                <td> 
                                 <a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a>   
                                </td>
                                {% for key,val in rents  %}
                                  <td>Ok <br>
                                    {% if not is_granted('ROLE_LOCATAIRE') %}
                                     <a class=\"btn btn-danger\" href=\"{{ path('delete_rent_user_room', { 'id': val.id, 'idUser':user.id }) }}\"><i class=\"fa fa-trash fa-lg\"></i></a>
                                     {% endif %}
                                  </td>
                                {% endfor %}
                              </tr>                
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
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_room_paid', { 'id': charge.id, 'idRoom':user.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  {% endif %}
                                  {% if charge.ChargeState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_room_unpaid', { 'id': charge.id, 'idRoom':user.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
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
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Les quittances de loyer
                        </h4>
                    </div>
                    <div >
                          <table  class=\"table table-bordered table-striped\">
                            <thead>
                              <tr>
                                <th>Date Quittance</th>
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          {%for quittance in quittances%}                   
                            <tr>
                                <td>{{quittance.rentDate|date('d-m-Y')}}</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"{{ path('quittance', { 'id': quittance.id }) }}\"><i class=\"fa fa-eye fa-lg\"></i> View</a> 
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
                                 {% if app.user.id == user.id %}
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
                                {% if app.user.id == user.id %}
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
                          {%endfor%}                   
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
{% endblock %}

{% block page_title %} Users {% endblock %}
{% block page_subtitle %} show {% endblock %}
", "user/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/show.html.twig");
    }
}
