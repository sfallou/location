<?php

/* AvanzuAdminThemeBundle:Sidebar:menu.html.twig */
class __TwigTemplate_f101e6bc3b273898252521e1f8525a8558d7864336e8e94440e255fe662a0eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_797fc9d05fec0eddb79ea2522263d1b67a1e5daf1dffa8a611952bf0667b96f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797fc9d05fec0eddb79ea2522263d1b67a1e5daf1dffa8a611952bf0667b96f7->enter($__internal_797fc9d05fec0eddb79ea2522263d1b67a1e5daf1dffa8a611952bf0667b96f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", 2);
        // line 4
        echo "<ul class=\"sidebar-menu\">
    ";
        // line 6
        echo "    \t";
        // line 7
        echo "    \t\t";
        // line 8
        echo "        \t\t";
        // line 9
        echo "        \t";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 12
        echo "</ul>

<ul class=\"sidebar-menu\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "    \t
        \t\t";
            // line 17
            echo $context["macro"]->getmenu_item($context["item"]);
            echo "
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>";
        
        $__internal_797fc9d05fec0eddb79ea2522263d1b67a1e5daf1dffa8a611952bf0667b96f7->leave($__internal_797fc9d05fec0eddb79ea2522263d1b67a1e5daf1dffa8a611952bf0667b96f7_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  54 => 17,  51 => 16,  47 => 15,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  27 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- sidebar menu: : style can be found in sidebar.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{#{dump(menu)}#}
<ul class=\"sidebar-menu\">
    {#% for item in menu %#}
    \t{#% if is_granted('ROLE_LOCATAIRE')  %#}
    \t\t{#% if item.identifier != \"divers\" %#}
        \t\t{#{ dump(macro.menu_item(item)) }#}
        \t{#% endif %#}
        {#% endif %#}
    {#% endfor %#}
</ul>

<ul class=\"sidebar-menu\">
    {% for item in menu %}
    \t
        \t\t{{ macro.menu_item(item)}}
        
    {% endfor %}
</ul>", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", "/Users/sfallou/Sites/kokou/location/vendor/avanzu/admin-theme-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
