<?php

/* AvanzuAdminThemeBundle:Default:dash.html.twig */
class __TwigTemplate_2c8323665c5b9b7a52f42626f337069a3d88957f9e6c0dbfe44f158564bd96e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:dash.html.twig", 1);
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
        $__internal_64a3a0a918e49972c1a4e6924934d3c79986bb909a17bd1635bdb1b2ac88e6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a3a0a918e49972c1a4e6924934d3c79986bb909a17bd1635bdb1b2ac88e6c7->enter($__internal_64a3a0a918e49972c1a4e6924934d3c79986bb909a17bd1635bdb1b2ac88e6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a3a0a918e49972c1a4e6924934d3c79986bb909a17bd1635bdb1b2ac88e6c7->leave($__internal_64a3a0a918e49972c1a4e6924934d3c79986bb909a17bd1635bdb1b2ac88e6c7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cd1576a4c70b44f11528a27b4a481d8ff6f5e424124a9f5d1aa33e5ad7f3a9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1576a4c70b44f11528a27b4a481d8ff6f5e424124a9f5d1aa33e5ad7f3a9be->enter($__internal_cd1576a4c70b44f11528a27b4a481d8ff6f5e424124a9f5d1aa33e5ad7f3a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "  
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">État des paiements du mois</h3>

            <!-- /.box-header -->
            <div class=\"box-body\">
              <div class=\"row\">
                <div class=\"col-md-8\">
                  <p class=\"text-center\">
                    <strong>Période: 1 Janvier 2017 - 1 Février 2015</strong>
                  </p>

                </div>
                <!-- /.col -->
                <div class=\"col-md-8\">
                  <p class=\"text-center\">
                    <strong>Nombre de loyers payés</strong>
                  </p>

                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Évry</span>
                    <span class=\"progress-number\"><b>3</b>/4</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-aqua\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Grigny</span>
                    <span class=\"progress-number\"><b>1</b>/5</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-red\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Bras de Fer</span>
                    <span class=\"progress-number\"><b>2</b>/6</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-green\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Juvisy</span>
                    <span class=\"progress-number\"><b>10</b>/20</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class=\"box-footer\">
              <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 17%</span>
                    <h5 class=\"description-header\">\$35,210.43</h5>
                    <span class=\"description-text\">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-yellow\"><i class=\"fa fa-caret-left\"></i> 0%</span>
                    <h5 class=\"description-header\">\$10,390.90</h5>
                    <span class=\"description-text\">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 20%</span>
                    <h5 class=\"description-header\">\$24,813.53</h5>
                    <span class=\"description-text\">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block\">
                    <span class=\"description-percentage text-red\"><i class=\"fa fa-caret-down\"></i> 18%</span>
                    <h5 class=\"description-header\">1200</h5>
                    <span class=\"description-text\">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
";
        
        $__internal_cd1576a4c70b44f11528a27b4a481d8ff6f5e424124a9f5d1aa33e5ad7f3a9be->leave($__internal_cd1576a4c70b44f11528a27b4a481d8ff6f5e424124a9f5d1aa33e5ad7f3a9be_prof);

    }

    // line 117
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_553991c5c5fb77019d8da66b0097d73125dcc63d3ed92c30c99051c3553b34ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553991c5c5fb77019d8da66b0097d73125dcc63d3ed92c30c99051c3553b34ae->enter($__internal_553991c5c5fb77019d8da66b0097d73125dcc63d3ed92c30c99051c3553b34ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Vue global des paiements";
        
        $__internal_553991c5c5fb77019d8da66b0097d73125dcc63d3ed92c30c99051c3553b34ae->leave($__internal_553991c5c5fb77019d8da66b0097d73125dcc63d3ed92c30c99051c3553b34ae_prof);

    }

    // line 118
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9b91dcbe8dfe92098d154d3454674267fcde437720d96158efa34d7d93e34977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b91dcbe8dfe92098d154d3454674267fcde437720d96158efa34d7d93e34977->enter($__internal_9b91dcbe8dfe92098d154d3454674267fcde437720d96158efa34d7d93e34977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " mensualité ";
        
        $__internal_9b91dcbe8dfe92098d154d3454674267fcde437720d96158efa34d7d93e34977->leave($__internal_9b91dcbe8dfe92098d154d3454674267fcde437720d96158efa34d7d93e34977_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 118,  160 => 117,  42 => 4,  36 => 3,  11 => 1,);
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
        <div class=\"col-md-12\">
          <div class=\"box\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">État des paiements du mois</h3>

            <!-- /.box-header -->
            <div class=\"box-body\">
              <div class=\"row\">
                <div class=\"col-md-8\">
                  <p class=\"text-center\">
                    <strong>Période: 1 Janvier 2017 - 1 Février 2015</strong>
                  </p>

                </div>
                <!-- /.col -->
                <div class=\"col-md-8\">
                  <p class=\"text-center\">
                    <strong>Nombre de loyers payés</strong>
                  </p>

                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Évry</span>
                    <span class=\"progress-number\"><b>3</b>/4</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-aqua\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Grigny</span>
                    <span class=\"progress-number\"><b>1</b>/5</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-red\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Bras de Fer</span>
                    <span class=\"progress-number\"><b>2</b>/6</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-green\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class=\"progress-group\">
                    <span class=\"progress-text\">Appartement Juvisy</span>
                    <span class=\"progress-number\"><b>10</b>/20</span>

                    <div class=\"progress sm\">
                      <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class=\"box-footer\">
              <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 17%</span>
                    <h5 class=\"description-header\">\$35,210.43</h5>
                    <span class=\"description-text\">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-yellow\"><i class=\"fa fa-caret-left\"></i> 0%</span>
                    <h5 class=\"description-header\">\$10,390.90</h5>
                    <span class=\"description-text\">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block border-right\">
                    <span class=\"description-percentage text-green\"><i class=\"fa fa-caret-up\"></i> 20%</span>
                    <h5 class=\"description-header\">\$24,813.53</h5>
                    <span class=\"description-text\">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class=\"col-sm-3 col-xs-6\">
                  <div class=\"description-block\">
                    <span class=\"description-percentage text-red\"><i class=\"fa fa-caret-down\"></i> 18%</span>
                    <h5 class=\"description-header\">1200</h5>
                    <span class=\"description-text\">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
{% endblock %}

{% block page_title %} Vue global des paiements{% endblock %}
{% block page_subtitle %} mensualité {% endblock %}", "AvanzuAdminThemeBundle:Default:dash.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/dash.html.twig");
    }
}
