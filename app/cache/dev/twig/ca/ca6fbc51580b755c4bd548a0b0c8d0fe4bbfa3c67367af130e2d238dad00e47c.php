<?php

/* association/rentUserRoomPDF.html.twig */
class __TwigTemplate_106adf3b37c23b1cc39273441f17dea920f4b2138424a56b5b63842feb7c25f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "association/rentUserRoomPDF.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34d2d5ab0ced0121b4d3cbca533ebdb68f4ec26119911fca1f0199a5360ab3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34d2d5ab0ced0121b4d3cbca533ebdb68f4ec26119911fca1f0199a5360ab3c->enter($__internal_c34d2d5ab0ced0121b4d3cbca533ebdb68f4ec26119911fca1f0199a5360ab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association/rentUserRoomPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34d2d5ab0ced0121b4d3cbca533ebdb68f4ec26119911fca1f0199a5360ab3c->leave($__internal_c34d2d5ab0ced0121b4d3cbca533ebdb68f4ec26119911fca1f0199a5360ab3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_630b5657251a3ecbc64f2e3976c8f06ce27cabbda0bf96003c76070a7e0ac1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630b5657251a3ecbc64f2e3976c8f06ce27cabbda0bf96003c76070a7e0ac1e4->enter($__internal_630b5657251a3ecbc64f2e3976c8f06ce27cabbda0bf96003c76070a7e0ac1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div>
            <h4>ATTESTATION DE PAIEMENT DE LOYER</h4>
            Je soussign&eacute;, <b>M. KPOTIVI Kokou</b>.<br><br>Demeurant au : <br>
            6 Rue du Bel Air <br>
            91000 - Evry.<br><br>
            Propri&eacute;taire d’un appartement situ&eacute; au :<br> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo " <br><br>
            Loue &agrave; <b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</b>. <br><br>
            Atteste que le loyer du : <b>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate1", array()), "d M Y"), "html", null, true);
        echo "</b> au <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate2", array()), "d M Y"), "html", null, true);
        echo "</b> a &eacute;t&eacute; r&eacute;gl&eacute; le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate", array()), "d M Y"), "html", null, true);
        echo " </b>par le locataire.<br><br>
            Soit la somme de : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentAmount", array()), "html", null, true);
        echo " euros.
            <br><br>
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/signatureKokou.png"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\">
        </div>
        --------------------------------------------------------------------------
        -----------------------------------------------------------------
         <div>
            <h4>ATTESTATION DE PAIEMENT DE LOYER</h4>
            Je soussign&eacute;, <b>M. KPOTIVI Kokou</b>.<br><br>Demeurant au : <br>
            6 Rue du Bel Air <br>
            91000 - Evry.<br><br>
            Propri&eacute;taire d’un appartement situ&eacute; au :<br> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appart"]) ? $context["appart"] : $this->getContext($context, "appart")), "adresse", array()), "html", null, true);
        echo " <br><br>
            Loue &agrave; <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</b>. <br><br>
            Atteste que le loyer du : <b>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate1", array()), "d M Y"), "html", null, true);
        echo "</b> au <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate2", array()), "d M Y"), "html", null, true);
        echo "</b> a &eacute;t&eacute; r&eacute;gl&eacute; le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentDate", array()), "d M Y"), "html", null, true);
        echo " </b>par le locataire.<br><br>
            Soit la somme de : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rent"]) ? $context["rent"] : $this->getContext($context, "rent")), "rentAmount", array()), "html", null, true);
        echo " euros.
            <br><br>
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/signatureKokou.png"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\">
        </div>
";
        
        $__internal_630b5657251a3ecbc64f2e3976c8f06ce27cabbda0bf96003c76070a7e0ac1e4->leave($__internal_630b5657251a3ecbc64f2e3976c8f06ce27cabbda0bf96003c76070a7e0ac1e4_prof);

    }

    public function getTemplateName()
    {
        return "association/rentUserRoomPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  96 => 26,  88 => 25,  84 => 24,  80 => 23,  68 => 14,  63 => 12,  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}

{% block body%}
        <div>
            <h4>ATTESTATION DE PAIEMENT DE LOYER</h4>
            Je soussign&eacute;, <b>M. KPOTIVI Kokou</b>.<br><br>Demeurant au : <br>
            6 Rue du Bel Air <br>
            91000 - Evry.<br><br>
            Propri&eacute;taire d’un appartement situ&eacute; au :<br> {{appart.adresse}} <br><br>
            Loue &agrave; <b>{{user.username}}</b>. <br><br>
            Atteste que le loyer du : <b>{{rent.rentDate1|date('d M Y')}}</b> au <b>{{rent.rentDate2|date('d M Y')}}</b> a &eacute;t&eacute; r&eacute;gl&eacute; le <b>{{rent.rentDate|date('d M Y')}} </b>par le locataire.<br><br>
            Soit la somme de : {{rent.rentAmount}} euros.
            <br><br>
            <img src=\"{{ asset('bundles/app/images/signatureKokou.png') }}\" width=\"100px\" height=\"100px\">
        </div>
        --------------------------------------------------------------------------
        -----------------------------------------------------------------
         <div>
            <h4>ATTESTATION DE PAIEMENT DE LOYER</h4>
            Je soussign&eacute;, <b>M. KPOTIVI Kokou</b>.<br><br>Demeurant au : <br>
            6 Rue du Bel Air <br>
            91000 - Evry.<br><br>
            Propri&eacute;taire d’un appartement situ&eacute; au :<br> {{appart.adresse}} <br><br>
            Loue &agrave; <b>{{user.username}}</b>. <br><br>
            Atteste que le loyer du : <b>{{rent.rentDate1|date('d M Y')}}</b> au <b>{{rent.rentDate2|date('d M Y')}}</b> a &eacute;t&eacute; r&eacute;gl&eacute; le <b>{{rent.rentDate|date('d M Y')}} </b>par le locataire.<br><br>
            Soit la somme de : {{rent.rentAmount}} euros.
            <br><br>
            <img src=\"{{ asset('bundles/app/images/signatureKokou.png') }}\" width=\"100px\" height=\"100px\">
        </div>
{% endblock %}", "association/rentUserRoomPDF.html.twig", "/Users/sfallou/Sites/kokou/location/app/Resources/views/association/rentUserRoomPDF.html.twig");
    }
}
