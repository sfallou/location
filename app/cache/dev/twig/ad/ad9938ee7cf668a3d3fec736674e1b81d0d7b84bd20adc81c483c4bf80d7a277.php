<?php

/* AvanzuAdminThemeBundle:Default:chat.html.twig */
class __TwigTemplate_a98cf56db98fe316991e9d2beba3e9aa950643cb7955db627e0ff5a9a33732e0 extends Twig_Template
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
        $__internal_89968f7181f3ddbdaeea80cfa3aabe20bd78027410e291b25c7a459d73a06d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89968f7181f3ddbdaeea80cfa3aabe20bd78027410e291b25c7a459d73a06d20->enter($__internal_89968f7181f3ddbdaeea80cfa3aabe20bd78027410e291b25c7a459d73a06d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89968f7181f3ddbdaeea80cfa3aabe20bd78027410e291b25c7a459d73a06d20->leave($__internal_89968f7181f3ddbdaeea80cfa3aabe20bd78027410e291b25c7a459d73a06d20_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_81f4bf0a6acb3b0c0c8bc297539ae7721cae52f8b6afc53ae5d99e7814491245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f4bf0a6acb3b0c0c8bc297539ae7721cae52f8b6afc53ae5d99e7814491245->enter($__internal_81f4bf0a6acb3b0c0c8bc297539ae7721cae52f8b6afc53ae5d99e7814491245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_81f4bf0a6acb3b0c0c8bc297539ae7721cae52f8b6afc53ae5d99e7814491245->leave($__internal_81f4bf0a6acb3b0c0c8bc297539ae7721cae52f8b6afc53ae5d99e7814491245_prof);

    }

    // line 77
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_32d2899d6154c9ac862a5083f98231bf2f239aa3b3c66996b8c45a5427c5cd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d2899d6154c9ac862a5083f98231bf2f239aa3b3c66996b8c45a5427c5cd2c->enter($__internal_32d2899d6154c9ac862a5083f98231bf2f239aa3b3c66996b8c45a5427c5cd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Chat  ";
        
        $__internal_32d2899d6154c9ac862a5083f98231bf2f239aa3b3c66996b8c45a5427c5cd2c->leave($__internal_32d2899d6154c9ac862a5083f98231bf2f239aa3b3c66996b8c45a5427c5cd2c_prof);

    }

    // line 78
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0efabde914d1e10d72f0add3bf7727d31138af9f297e4eb26511c92074aedebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efabde914d1e10d72f0add3bf7727d31138af9f297e4eb26511c92074aedebe->enter($__internal_0efabde914d1e10d72f0add3bf7727d31138af9f297e4eb26511c92074aedebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " chatbox ";
        
        $__internal_0efabde914d1e10d72f0add3bf7727d31138af9f297e4eb26511c92074aedebe->leave($__internal_0efabde914d1e10d72f0add3bf7727d31138af9f297e4eb26511c92074aedebe_prof);

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
