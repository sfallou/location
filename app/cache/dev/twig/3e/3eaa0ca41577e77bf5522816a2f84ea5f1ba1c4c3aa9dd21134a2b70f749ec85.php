<?php

/* :user:show.html.twig */
class __TwigTemplate_1ad1bed90e44fb718b8733ddbdd76a5cb6b3e582e74cefb4f90b5462c2911da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", ":user:show.html.twig", 1);
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
        $__internal_de64a29ad7c64b532863c11bbde27573cf180cda7a5da97f2dcc167b8eda6a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de64a29ad7c64b532863c11bbde27573cf180cda7a5da97f2dcc167b8eda6a5c->enter($__internal_de64a29ad7c64b532863c11bbde27573cf180cda7a5da97f2dcc167b8eda6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de64a29ad7c64b532863c11bbde27573cf180cda7a5da97f2dcc167b8eda6a5c->leave($__internal_de64a29ad7c64b532863c11bbde27573cf180cda7a5da97f2dcc167b8eda6a5c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1e715fe674c3d7d20ed624bcc0f02357d37290498eb74fee2c2aef0ae3094146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e715fe674c3d7d20ed624bcc0f02357d37290498eb74fee2c2aef0ae3094146->enter($__internal_1e715fe674c3d7d20ed624bcc0f02357d37290498eb74fee2c2aef0ae3094146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_charge_room", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                </div>
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_rent_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()), "idUser" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userId", array()), "idRoom" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "roomId", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-money fa-lg\"></i> Editer quittance</a>
                            
                </div>
                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_doc_user_room", array("id" => $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                <br><br>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4></div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID User:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Profil :</strong> </li>
                                <li><strong>Username :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
                                <li><strong>Prénom :</strong> </li>
                                <li><strong>Nom :</strong> </li>               
                                <li><strong>Email :</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</li>
                                <li><strong>Téléphone :</strong> </li>
                                <li><strong>Contact Garant :</strong> </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <div class=\"pull-left image\">
                                <img src=\"/bundles/avanzuadmintheme/img/avatar.png\" class=\"img-circle\" alt=\"Demo User\" width=150/>
                                <br><br>
                            </div>           
                        </div>
                        <div class=\"page-header\">-*-</div>
                        <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations sur la colocation
                        </h4>
                        </div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Adresse Appartement :</strong> <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Appartement :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "surface", array()), "html", null, true);
        echo "</li>
                                <li><strong>Responsable Coloc :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "contactAppart", array()), "html", null, true);
        echo "</li>
                                <li><strong>Contact Gardien :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactGardien", array()), "html", null, true);
        echo "</li>
                                <li><strong>Horaire Gardien :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "horaireGardien", array()), "html", null, true);
        echo " </li>
                                <li><strong>Contact Syndic :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactSyndic", array()), "html", null, true);
        echo " </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <ul class=\"list-unstyled\">
                                <li><strong>N° Chambre :</strong> <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Chambre :</strong> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Date d'entrée :</strong> ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateIn", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Date de sortie :</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateOut", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Prix Loyer :</strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros </li>
                                <li><strong>Caution :</strong> ";
        // line 65
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
        // line 73
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a>   
                                </td>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rents"]) ? $context["rents"] : $this->getContext($context, "rents")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 101
            echo "                                  <td>Ok <br>
                                     <a class=\"btn btn-danger\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_rent_user_room", array("id" => $this->getAttribute($context["val"], "id", array()), "idUser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash fa-lg\"></i></a>
                                  </td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
                                 <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges")));
        foreach ($context['_seq'] as $context["typeCharge"] => $context["charge"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $context["typeCharge"], "html", null, true);
            echo "</td>
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["charge"], "ChargeDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeAmount", array()), "html", null, true);
            echo " euros</td>
                                <td>
                                  ";
            // line 135
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                // line 136
                echo "                                  Not paid
                                  ";
            }
            // line 138
            echo "                                  ";
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                // line 139
                echo "                                  Paid
                                  ";
            }
            // line 141
            echo "                                </td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["charge"], "ChargeComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  ";
            // line 144
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == false)) {
                // line 145
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_room_paid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idRoom" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  ";
            }
            // line 147
            echo "                                  ";
            if (($this->getAttribute($context["charge"], "ChargeState", array()) == true)) {
                // line 148
                echo "                                  <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_room_unpaid", array("id" => $this->getAttribute($context["charge"], "id", array()), "idRoom" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
                                  ";
            }
            // line 150
            echo "                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeCharge'], $context['charge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
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
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["typeDoc"] => $context["doc"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 177
            echo twig_escape_filter($this->env, $context["typeDoc"], "html", null, true);
            echo "</td>
                                <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["doc"], "DocumentDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "DocumentComment", array()), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("document_show", array("id" => $this->getAttribute($context["doc"], "documentId", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a>
                                  <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeDoc'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
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
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quittances"]) ? $context["quittances"] : $this->getContext($context, "quittances")));
        foreach ($context['_seq'] as $context["_key"] => $context["quittance"]) {
            echo "                   
                            <tr>
                                <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quittance"], "rentDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>
                                  <a class=\"btn btn-success\" href=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quittance", array("id" => $this->getAttribute($context["quittance"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-lg\"></i> View</a> 
                             </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quittance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                   
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
";
        
        $__internal_1e715fe674c3d7d20ed624bcc0f02357d37290498eb74fee2c2aef0ae3094146->leave($__internal_1e715fe674c3d7d20ed624bcc0f02357d37290498eb74fee2c2aef0ae3094146_prof);

    }

    // line 219
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ecc1c5bd7793604698f21c348aa5f892f316fcaf6bfc114d1d60245b68a25b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc1c5bd7793604698f21c348aa5f892f316fcaf6bfc114d1d60245b68a25b5e->enter($__internal_ecc1c5bd7793604698f21c348aa5f892f316fcaf6bfc114d1d60245b68a25b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Users ";
        
        $__internal_ecc1c5bd7793604698f21c348aa5f892f316fcaf6bfc114d1d60245b68a25b5e->leave($__internal_ecc1c5bd7793604698f21c348aa5f892f316fcaf6bfc114d1d60245b68a25b5e_prof);

    }

    // line 220
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_703782ca13698a0f46cfc92972054cd7d785bdf3c96cfde42e6331845d388377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703782ca13698a0f46cfc92972054cd7d785bdf3c96cfde42e6331845d388377->enter($__internal_703782ca13698a0f46cfc92972054cd7d785bdf3c96cfde42e6331845d388377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_703782ca13698a0f46cfc92972054cd7d785bdf3c96cfde42e6331845d388377->leave($__internal_703782ca13698a0f46cfc92972054cd7d785bdf3c96cfde42e6331845d388377_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 220,  426 => 219,  411 => 209,  401 => 206,  396 => 204,  389 => 202,  370 => 185,  359 => 181,  354 => 179,  350 => 178,  346 => 177,  339 => 175,  315 => 153,  306 => 150,  300 => 148,  297 => 147,  291 => 145,  289 => 144,  284 => 142,  281 => 141,  277 => 139,  274 => 138,  270 => 136,  268 => 135,  263 => 133,  259 => 132,  255 => 131,  248 => 129,  222 => 105,  213 => 102,  210 => 101,  206 => 100,  199 => 98,  171 => 73,  160 => 65,  156 => 64,  152 => 63,  148 => 62,  144 => 61,  138 => 60,  130 => 55,  126 => 54,  122 => 53,  118 => 52,  114 => 51,  108 => 50,  87 => 32,  81 => 29,  76 => 27,  63 => 17,  56 => 13,  49 => 9,  42 => 4,  36 => 3,  11 => 1,);
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
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"{{ path('add_charge_room', { 'id': room.id }) }}\"><i class=\"fa fa-money fa-lg\"></i> Ajouter Charge</a>
                            
                </div>
                <div class=\"col-md-3\">
                    <a class=\"btn btn-success\" href=\"{{ path('add_rent_user_room', { 'id': user_room.id,'idUser': user_room.userId,'idRoom': user_room.roomId }) }}\"><i class=\"fa fa-money fa-lg\"></i> Editer quittance</a>
                            
                </div>
                 <div class=\"col-md-3\">
                            <a class=\"btn btn-success\" href=\"{{ path('add_doc_user_room', { 'id': user_room.id }) }}\"><i class=\"fa fa-file fa-lg\"></i> Ajouter Document</a>
                            
                    </div>
                <br><br>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4></div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID User:</strong> {{user.id}}</li>
                                <li><strong>Profil :</strong> </li>
                                <li><strong>Username :</strong> {{user.username}}</li>
                                <li><strong>Prénom :</strong> </li>
                                <li><strong>Nom :</strong> </li>               
                                <li><strong>Email :</strong> {{user.email}}</li>
                                <li><strong>Téléphone :</strong> </li>
                                <li><strong>Contact Garant :</strong> </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <div class=\"pull-left image\">
                                <img src=\"/bundles/avanzuadmintheme/img/avatar.png\" class=\"img-circle\" alt=\"Demo User\" width=150/>
                                <br><br>
                            </div>           
                        </div>
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
                                     <a class=\"btn btn-danger\" href=\"{{ path('delete_rent_user_room', { 'id': val.id, 'idUser':user.id }) }}\"><i class=\"fa fa-trash fa-lg\"></i></a>
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
                                 <th>Actions</th>
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
                                <td>
                                  {% if charge.ChargeState == false %}
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_room_paid', { 'id': charge.id, 'idRoom':user.id }) }}\"><i class=\"fa fa-check fa-lg\"></i> Paid</a>
                                  {% endif %}
                                  {% if charge.ChargeState == true %}
                                  <a class=\"btn btn-success\" href=\"{{ path('charge_room_unpaid', { 'id': charge.id, 'idRoom':user.id }) }}\"><i class=\"fa fa-times fa-lg\"></i> Unpaid</a>
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
            </div>
        </div>
            
{% endblock %}

{% block page_title %} Users {% endblock %}
{% block page_subtitle %} show {% endblock %}
", ":user:show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/show.html.twig");
    }
}
