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
        $__internal_496a3a6b43662bebd18aad35dd766f146726a741f93047babbe073ffba2e5c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496a3a6b43662bebd18aad35dd766f146726a741f93047babbe073ffba2e5c95->enter($__internal_496a3a6b43662bebd18aad35dd766f146726a741f93047babbe073ffba2e5c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496a3a6b43662bebd18aad35dd766f146726a741f93047babbe073ffba2e5c95->leave($__internal_496a3a6b43662bebd18aad35dd766f146726a741f93047babbe073ffba2e5c95_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dbb6c8cd7934b544f16b2bd97df8d98c7b2ed01a71b38e8f47434c9638fa5628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb6c8cd7934b544f16b2bd97df8d98c7b2ed01a71b38e8f47434c9638fa5628->enter($__internal_dbb6c8cd7934b544f16b2bd97df8d98c7b2ed01a71b38e8f47434c9638fa5628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Informations générales
                        </h4></div>
                        <div class=\"col-md-7\">
                            <ul class=\"list-unstyled\">
                                <li><strong>ID User:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</li>
                                <li><strong>Profil :</strong> </li>
                                <li><strong>Username :</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</li>
                                <li><strong>Prénom :</strong> </li>
                                <li><strong>Nom :</strong> </li>               
                                <li><strong>Email :</strong> ";
        // line 19
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
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartement_show", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Appartement :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "surface", array()), "html", null, true);
        echo "</li>
                                <li><strong>Responsable Coloc :</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "contactAppart", array()), "html", null, true);
        echo "</li>
                                <li><strong>Contact Gardien :</strong> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactGardien", array()), "html", null, true);
        echo "</li>
                                <li><strong>Horaire Gardien :</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "horaireGardien", array()), "html", null, true);
        echo " </li>
                                <li><strong>Contact Syndic :</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["residence"]) ? $context["residence"] : $this->getContext($context, "residence")), "contactSyndic", array()), "html", null, true);
        echo " </li>
                            </ul>
                        </div>
                        <div class=\"col-md-5 \">
                            <ul class=\"list-unstyled\">
                                <li><strong>N° Chambre :</strong> <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_show", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</a></li>
                                <li><strong>Surface Chambre :</strong> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "surface", array()), "html", null, true);
        echo " </li>
                                <li><strong>Date d'entrée :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateIn", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Date de sortie :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user_room"]) ? $context["user_room"] : $this->getContext($context, "user_room")), "userRoomDateOut", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                                <li><strong>Prix Loyer :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "rent", array()), "html", null, true);
        echo " euros </li>
                                <li><strong>Caution :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "guarantee", array()), "html", null, true);
        echo " euros</li>               
                            </ul>
                             <br><br>
                        </div>
                </div>
                <div class=\"page-header\">-*-</div>
                <div >
                    <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            États des paiements du loyer de l'année 2017
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
                                <td>Loyer</td>
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
                                <td>Charges EDF</td>
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
                                <td>Charge Eau</td>
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
                                <td>Autres charge</td>
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
                        <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Documents à télécharger
                        </h4>
                        </div>
                        <div class=\"col-md-7 \">
                            <ul class=\"list-unstyled\">
                                <a><li><strong>Bail :</strong> </li></a>
                                <a><li><strong>Quittances de loyers :</strong> </li></a>   
                                <a><li><strong>Facture Téléphone :</strong> </li></a>
                                <a><li><strong>Facture d'éléctricité :</strong> </li></a>
                                        
                            </ul>
                        </div>
            </div>
        </div>
            
";
        
        $__internal_dbb6c8cd7934b544f16b2bd97df8d98c7b2ed01a71b38e8f47434c9638fa5628->leave($__internal_dbb6c8cd7934b544f16b2bd97df8d98c7b2ed01a71b38e8f47434c9638fa5628_prof);

    }

    // line 166
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d707d879a682790e3803cc8fe582923fc0b54c569d8004014717255c0facad3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d707d879a682790e3803cc8fe582923fc0b54c569d8004014717255c0facad3a->enter($__internal_d707d879a682790e3803cc8fe582923fc0b54c569d8004014717255c0facad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Users ";
        
        $__internal_d707d879a682790e3803cc8fe582923fc0b54c569d8004014717255c0facad3a->leave($__internal_d707d879a682790e3803cc8fe582923fc0b54c569d8004014717255c0facad3a_prof);

    }

    // line 167
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b702140b202396e603c652584d5ce47c449d4600915244eb7fbc08ca73799563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b702140b202396e603c652584d5ce47c449d4600915244eb7fbc08ca73799563->enter($__internal_b702140b202396e603c652584d5ce47c449d4600915244eb7fbc08ca73799563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " show ";
        
        $__internal_b702140b202396e603c652584d5ce47c449d4600915244eb7fbc08ca73799563->leave($__internal_b702140b202396e603c652584d5ce47c449d4600915244eb7fbc08ca73799563_prof);

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
        return array (  270 => 167,  258 => 166,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  122 => 48,  116 => 47,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  86 => 37,  65 => 19,  59 => 16,  54 => 14,  42 => 4,  36 => 3,  11 => 1,);
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
                            États des paiements du loyer de l'année 2017
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
                                <td>Loyer</td>
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
                                <td>Charges EDF</td>
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
                                <td>Charge Eau</td>
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
                                <td>Autres charge</td>
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
                        <div class=\"page-header\"><h4 style=\"background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;\">
                            Documents à télécharger
                        </h4>
                        </div>
                        <div class=\"col-md-7 \">
                            <ul class=\"list-unstyled\">
                                <a><li><strong>Bail :</strong> </li></a>
                                <a><li><strong>Quittances de loyers :</strong> </li></a>   
                                <a><li><strong>Facture Téléphone :</strong> </li></a>
                                <a><li><strong>Facture d'éléctricité :</strong> </li></a>
                                        
                            </ul>
                        </div>
            </div>
        </div>
            
{% endblock %}

{% block page_title %} Users {% endblock %}
{% block page_subtitle %} show {% endblock %}
", "user/show.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/user/show.html.twig");
    }
}
