<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2f694345bd93c564dabcb2d22bf07d3c3b52a2ed48850516fcb44736d36f5f4e extends Twig_Template
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
        // line 2
        echo "
<div class=\"row\">
    <div class=\"span4\">
        ";
        // line 5
        $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
         <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
         </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  34 => 12,  26 => 6,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"span4\">
        {% include '::base.html.twig' %}
    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
         <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
                    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                </div>
            </div>
         </div>
    </div>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
