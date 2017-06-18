<?php

/* AvanzuAdminThemeBundle:Default:chat.html.twig */
class __TwigTemplate_8b8138cd18a42f4bcdcf54e065cb82dd38bcf9c25d124152bc1f35ff3c2673a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:chat.html.twig", 1);
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
        $__internal_bae7e7cd777c023372ca280d3e9e1005d23596d96962c082408ad2d66abef208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae7e7cd777c023372ca280d3e9e1005d23596d96962c082408ad2d66abef208->enter($__internal_bae7e7cd777c023372ca280d3e9e1005d23596d96962c082408ad2d66abef208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae7e7cd777c023372ca280d3e9e1005d23596d96962c082408ad2d66abef208->leave($__internal_bae7e7cd777c023372ca280d3e9e1005d23596d96962c082408ad2d66abef208_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4bdcbced2cf0055cfcf00456eb89f5af82ddca0f5bc4d32a1f3a2814ec36ccab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdcbced2cf0055cfcf00456eb89f5af82ddca0f5bc4d32a1f3a2814ec36ccab->enter($__internal_4bdcbced2cf0055cfcf00456eb89f5af82ddca0f5bc4d32a1f3a2814ec36ccab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "     <!-- Construct the box with style you want. Here we are using box-danger -->
      <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
      <!-- The contextual class should match the box, so we are using direct-chat-danger -->
      <div class=\"box box-danger direct-chat direct-chat-primary\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Direct Chat</h3>
          <div class=\"box-tools pull-right\">
            <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge bg-red\">3</span>
            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
            <!-- In box-tools add this button if you intend to use the contacts pane -->
            <button class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\"><i class=\"fa fa-comments\"></i></button>
            <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
          <!-- Conversations are loaded here -->
          <div class=\"direct-chat-messages\">
            <!-- Message. Default to the left -->
            <div class=\"direct-chat-msg\">
              <div class=\"direct-chat-info clearfix\">
                <span class=\"direct-chat-name pull-left\">Sfallou </span>
                <span class=\"direct-chat-timestamp pull-right\">23 Jan 2:00 pm</span>
              </div><!-- /.direct-chat-info -->
              <!--img class=\"direct-chat-img\" src=\"../dist/img/user1-128x128.jpg\" alt=\"message user image\"--><!-- /.direct-chat-img -->
              <div class=\"direct-chat-text\">
                Hello les gars ! Ça  se passe comment à la coloc?
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class=\"direct-chat-msg right\">
              <div class=\"direct-chat-info clearfix\">
                <span class=\"direct-chat-name pull-right\">Kokou </span>
                <span class=\"direct-chat-timestamp pull-left\">23 Jan 2:05 pm</span>
              </div><!-- /.direct-chat-info -->
              <!--img class=\"direct-chat-img\" src=\"../dist/img/user3-128x128.jpg\" alt=\"message user image\"--><!-- /.direct-chat-img -->
              <div class=\"direct-chat-text\">
                Hyper bien mon gars!
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->
          </div><!--/.direct-chat-messages-->

          <!-- Contacts are loaded here -->
          <div class=\"direct-chat-contacts\">
            <ul class=\"contacts-list\">
              <li>
                <a href=\"#\">
                  <img class=\"contacts-list-img\" src=\"../dist/img/user1-128x128.jpg\" alt=\"Contact Avatar\">
                  <div class=\"contacts-list-info\">
                    <span class=\"contacts-list-name\">
                      Count Dracula
                      <small class=\"contacts-list-date pull-right\">2/28/2015</small>
                    </span>
                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                  </div><!-- /.contacts-list-info -->
                </a>
              </li><!-- End Contact Item -->
            </ul><!-- /.contatcts-list -->
          </div><!-- /.direct-chat-pane -->
        </div><!-- /.box-body -->
        <div class=\"box-footer\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-danger btn-flat\">Send</button>
            </span>
          </div>
        </div><!-- /.box-footer-->
      </div><!--/.direct-chat -->
      

";
        
        $__internal_4bdcbced2cf0055cfcf00456eb89f5af82ddca0f5bc4d32a1f3a2814ec36ccab->leave($__internal_4bdcbced2cf0055cfcf00456eb89f5af82ddca0f5bc4d32a1f3a2814ec36ccab_prof);

    }

    // line 77
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2dc31f13c859b8fc55192b8a613f0025e7fb1152bbe6fcc7d164ff16e54c4d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc31f13c859b8fc55192b8a613f0025e7fb1152bbe6fcc7d164ff16e54c4d3a->enter($__internal_2dc31f13c859b8fc55192b8a613f0025e7fb1152bbe6fcc7d164ff16e54c4d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Chat  ";
        
        $__internal_2dc31f13c859b8fc55192b8a613f0025e7fb1152bbe6fcc7d164ff16e54c4d3a->leave($__internal_2dc31f13c859b8fc55192b8a613f0025e7fb1152bbe6fcc7d164ff16e54c4d3a_prof);

    }

    // line 78
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b58a774941b9841f11c5f30a2aa005bedfd7f534ad730115e20c1fa5be51f573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58a774941b9841f11c5f30a2aa005bedfd7f534ad730115e20c1fa5be51f573->enter($__internal_b58a774941b9841f11c5f30a2aa005bedfd7f534ad730115e20c1fa5be51f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " chatbox ";
        
        $__internal_b58a774941b9841f11c5f30a2aa005bedfd7f534ad730115e20c1fa5be51f573->leave($__internal_b58a774941b9841f11c5f30a2aa005bedfd7f534ad730115e20c1fa5be51f573_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 78,  120 => 77,  42 => 4,  36 => 3,  11 => 1,);
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
     <!-- Construct the box with style you want. Here we are using box-danger -->
      <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
      <!-- The contextual class should match the box, so we are using direct-chat-danger -->
      <div class=\"box box-danger direct-chat direct-chat-primary\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Direct Chat</h3>
          <div class=\"box-tools pull-right\">
            <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge bg-red\">3</span>
            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
            <!-- In box-tools add this button if you intend to use the contacts pane -->
            <button class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\"><i class=\"fa fa-comments\"></i></button>
            <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
          <!-- Conversations are loaded here -->
          <div class=\"direct-chat-messages\">
            <!-- Message. Default to the left -->
            <div class=\"direct-chat-msg\">
              <div class=\"direct-chat-info clearfix\">
                <span class=\"direct-chat-name pull-left\">Sfallou </span>
                <span class=\"direct-chat-timestamp pull-right\">23 Jan 2:00 pm</span>
              </div><!-- /.direct-chat-info -->
              <!--img class=\"direct-chat-img\" src=\"../dist/img/user1-128x128.jpg\" alt=\"message user image\"--><!-- /.direct-chat-img -->
              <div class=\"direct-chat-text\">
                Hello les gars ! Ça  se passe comment à la coloc?
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class=\"direct-chat-msg right\">
              <div class=\"direct-chat-info clearfix\">
                <span class=\"direct-chat-name pull-right\">Kokou </span>
                <span class=\"direct-chat-timestamp pull-left\">23 Jan 2:05 pm</span>
              </div><!-- /.direct-chat-info -->
              <!--img class=\"direct-chat-img\" src=\"../dist/img/user3-128x128.jpg\" alt=\"message user image\"--><!-- /.direct-chat-img -->
              <div class=\"direct-chat-text\">
                Hyper bien mon gars!
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->
          </div><!--/.direct-chat-messages-->

          <!-- Contacts are loaded here -->
          <div class=\"direct-chat-contacts\">
            <ul class=\"contacts-list\">
              <li>
                <a href=\"#\">
                  <img class=\"contacts-list-img\" src=\"../dist/img/user1-128x128.jpg\" alt=\"Contact Avatar\">
                  <div class=\"contacts-list-info\">
                    <span class=\"contacts-list-name\">
                      Count Dracula
                      <small class=\"contacts-list-date pull-right\">2/28/2015</small>
                    </span>
                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                  </div><!-- /.contacts-list-info -->
                </a>
              </li><!-- End Contact Item -->
            </ul><!-- /.contatcts-list -->
          </div><!-- /.direct-chat-pane -->
        </div><!-- /.box-body -->
        <div class=\"box-footer\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-danger btn-flat\">Send</button>
            </span>
          </div>
        </div><!-- /.box-footer-->
      </div><!--/.direct-chat -->
      

{% endblock %}

{% block page_title %} Chat  {% endblock %}
{% block page_subtitle %} chatbox {% endblock %}", "AvanzuAdminThemeBundle:Default:chat.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Default/chat.html.twig");
    }
}
