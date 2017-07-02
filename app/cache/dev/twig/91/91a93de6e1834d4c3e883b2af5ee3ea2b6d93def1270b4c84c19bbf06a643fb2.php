<?php

/* default/show_appart.html.twig */
class __TwigTemplate_cae38035cc075e560e23c4b4d0d75f8116adf03fad0486cdac77b8b71d4bdced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "default/show_appart.html.twig", 1);
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
        $__internal_3923c5e94b74a1008e474cf7ef678f151d36491d3313c9b8619756f028520aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3923c5e94b74a1008e474cf7ef678f151d36491d3313c9b8619756f028520aac->enter($__internal_3923c5e94b74a1008e474cf7ef678f151d36491d3313c9b8619756f028520aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show_appart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3923c5e94b74a1008e474cf7ef678f151d36491d3313c9b8619756f028520aac->leave($__internal_3923c5e94b74a1008e474cf7ef678f151d36491d3313c9b8619756f028520aac_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dcfb40f5794885db50ef637705cae6d9c122461b13e354a046bb6f0ccec10c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfb40f5794885db50ef637705cae6d9c122461b13e354a046bb6f0ccec10c30->enter($__internal_dcfb40f5794885db50ef637705cae6d9c122461b13e354a046bb6f0ccec10c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"box\">
            <div class=\"box-header\">
             <a class=\"btn btn-success\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new_meuble_appart", array("id" => $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-plus fa-lg\"></i> New Furniture</a>
            </div>


            <!-- /.box-header -->
            <div class=\"box-body\">
              <div style=\"text-align: center\">
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-map\"></i> Adresse </a> 
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-user\"></i> Référent </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-wifi\"></i> Wifi </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-phone\"> </i> Phone </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-home\"> </i> Surface </a> 
                <a class=\"btn  bg-navy margin\"><i class=\"fa fa-money\"> </i> RIB </a>
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>
                     Adresse 
                  </th>
                  <th>
                    Référent
                  </th>
                  <th>
                    Wifi
                  </th>
                  <th>
                    Phone
                  </th>
                  <th>
                    Surface
                  </th>
                  <th>
                   RIB
                  </th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo " </td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "contactAppart", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "wifiCode", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "phone", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "surface", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "rib", array()), "html", null, true);
        echo "</td>
                  </tr>
                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-bed\"></i>Chambres </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>surface</th>
                  <th>rent</th>
                  <th>guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 69
            echo "                  <tr>
                  <td> Room ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "surface", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "rent", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "guarantee", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-users\"></i>Colocataires </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>surface</th>
                  <th>rent</th>
                  <th>guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 96
            echo "                  <tr>
                  <td> Room ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "surface", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "rent", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "guarantee", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </tbody>
              </table>
              </div>

              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-tv\"></i>Meubles </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>id Type Meuble</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 123
            echo "                  <tr>
                  <td> ";
            // line 124
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                  <td>Lit double</td>
                  <td>Lit</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-building\"></i>Charges </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type Charges</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 148
            echo "                  <tr>
                  <td> ";
            // line 149
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                  <td>eau</td>
                  <td>annuelle</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-wrench\"></i>Réparations </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type Réparation</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 173
            echo "                  <tr>
                  <td> ";
            // line 174
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                  <td>salle de bain</td>
                  <td>plomberie</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                </tbody>
              </table>
              </div>
             
             <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Mensualités </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Mois</th>
                  <th>Année</th>
                  <th>Statut</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 199
            echo "                  <tr>
                  <td> ";
            // line 200
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                  <td>Janvier</td>
                  <td>2017</td>
                  <td>
                    Payé
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                </tbody>
              </table>
              </div>

              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-file\"></i>Documents </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type de document</th>
                 
                </tr>
                </thead>
                <tbody>
                ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 225
            echo "                  <tr>
                  <td> ";
            // line 226
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                  <td>Bail individuel</td>
                  <td>Bail</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


";
        
        $__internal_dcfb40f5794885db50ef637705cae6d9c122461b13e354a046bb6f0ccec10c30->leave($__internal_dcfb40f5794885db50ef637705cae6d9c122461b13e354a046bb6f0ccec10c30_prof);

    }

    // line 242
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_18e60ed0dc22df51cf8d290b024d7c40ef9f6c84dfcfc4b742f1f22015c873db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e60ed0dc22df51cf8d290b024d7c40ef9f6c84dfcfc4b742f1f22015c873db->enter($__internal_18e60ed0dc22df51cf8d290b024d7c40ef9f6c84dfcfc4b742f1f22015c873db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Appartement ";
        
        $__internal_18e60ed0dc22df51cf8d290b024d7c40ef9f6c84dfcfc4b742f1f22015c873db->leave($__internal_18e60ed0dc22df51cf8d290b024d7c40ef9f6c84dfcfc4b742f1f22015c873db_prof);

    }

    // line 243
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_165aed15cfcc055bff044e723481ae21e1723abf948cbda79da410ab1bbf1a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165aed15cfcc055bff044e723481ae21e1723abf948cbda79da410ab1bbf1a88->enter($__internal_165aed15cfcc055bff044e723481ae21e1723abf948cbda79da410ab1bbf1a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " infos appart ";
        
        $__internal_165aed15cfcc055bff044e723481ae21e1723abf948cbda79da410ab1bbf1a88->leave($__internal_165aed15cfcc055bff044e723481ae21e1723abf948cbda79da410ab1bbf1a88_prof);

    }

    public function getTemplateName()
    {
        return "default/show_appart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 243,  415 => 242,  399 => 231,  388 => 226,  385 => 225,  381 => 224,  363 => 208,  349 => 200,  346 => 199,  342 => 198,  324 => 182,  310 => 174,  307 => 173,  303 => 172,  286 => 157,  272 => 149,  269 => 148,  265 => 147,  248 => 132,  234 => 124,  231 => 123,  227 => 122,  209 => 106,  197 => 100,  193 => 99,  189 => 98,  185 => 97,  182 => 96,  178 => 95,  160 => 79,  148 => 73,  144 => 72,  140 => 71,  136 => 70,  133 => 69,  129 => 68,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  92 => 46,  88 => 45,  47 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
            <div class=\"box-header\">
             <a class=\"btn btn-success\" href=\"{{ path('admin_new_meuble_appart', {'id': appart.id}) }}\"><i class=\"fa fa-plus fa-lg\"></i> New Furniture</a>
            </div>


            <!-- /.box-header -->
            <div class=\"box-body\">
              <div style=\"text-align: center\">
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-map\"></i> Adresse </a> 
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-user\"></i> Référent </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-wifi\"></i> Wifi </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-phone\"> </i> Phone </a>
               <a class=\"btn  bg-navy margin\"><i class=\"fa fa-home\"> </i> Surface </a> 
                <a class=\"btn  bg-navy margin\"><i class=\"fa fa-money\"> </i> RIB </a>
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>
                     Adresse 
                  </th>
                  <th>
                    Référent
                  </th>
                  <th>
                    Wifi
                  </th>
                  <th>
                    Phone
                  </th>
                  <th>
                    Surface
                  </th>
                  <th>
                   RIB
                  </th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> {{appart.adresse}} </td>
                    <td>{{appart.contactAppart}}</td>
                    <td>{{appart.wifiCode}}</td>
                    <td>{{appart.phone}}</td>
                    <td>{{appart.surface}}</td>
                    <td>{{appart.rib}}</td>
                  </tr>
                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-bed\"></i>Chambres </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>surface</th>
                  <th>rent</th>
                  <th>guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for room in rooms%}
                  <tr>
                  <td> Room {{room.id}}</td>
                  <td>{{room.surface}}</td>
                  <td>{{room.rent}}</td>
                  <td>{{room.guarantee}}</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-users\"></i>Colocataires </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>surface</th>
                  <th>rent</th>
                  <th>guarantee</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for room in rooms%}
                  <tr>
                  <td> Room {{room.id}}</td>
                  <td>{{room.surface}}</td>
                  <td>{{room.rent}}</td>
                  <td>{{room.guarantee}}</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>

              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-tv\"></i>Meubles </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>id Type Meuble</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..3 %}
                  <tr>
                  <td> {{i}}</td>
                  <td>Lit double</td>
                  <td>Lit</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-building\"></i>Charges </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type Charges</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..3 %}
                  <tr>
                  <td> {{i}}</td>
                  <td>eau</td>
                  <td>annuelle</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>
              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-wrench\"></i>Réparations </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type Réparation</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..3 %}
                  <tr>
                  <td> {{i}}</td>
                  <td>salle de bain</td>
                  <td>plomberie</td>
                  <td>
                    <a class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-trash-o fa-lg\"></i> Delete</a> 
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>
             
             <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-money\"></i>Mensualités </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Mois</th>
                  <th>Année</th>
                  <th>Statut</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..3 %}
                  <tr>
                  <td> {{i}}</td>
                  <td>Janvier</td>
                  <td>2017</td>
                  <td>
                    Payé
                  </td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>

              <div style=\"text-align: center\">
                <a class=\"btn btn-app bg-navy margin\"><i class=\"fa fa-file\"></i>Documents </a> 
                <table  class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Wording</th>
                  <th>Type de document</th>
                 
                </tr>
                </thead>
                <tbody>
                {% for i in 1..3 %}
                  <tr>
                  <td> {{i}}</td>
                  <td>Bail individuel</td>
                  <td>Bail</td>
                </tr>
                {% endfor %}
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


{% endblock %}

{% block page_title %} Appartement {% endblock %}
{% block page_subtitle %} infos appart {% endblock %}", "default/show_appart.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/default/show_appart.html.twig");
    }
}
