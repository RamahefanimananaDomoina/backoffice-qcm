<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_549c44e9b07677c28f715544128b2331196144e061791a99d14414e271f11c90 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"span4\">
        ";
        // line 4
        $this->loadTemplate("::modulesUsed/utilisateursConnecter.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 4)->display($context);
        // line 5
        echo "    </div>
    
    <div class=\"col-md-10\">
        <h2>Modidier mon mot de passe:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                   
                    <form method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                         ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br/>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        
                    </form>
                  </div>
                
               
            </div>
        </div>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 14,  35 => 13,  25 => 5,  23 => 4,  19 => 2,);
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
        {% include '::modulesUsed/utilisateursConnecter.html.twig' %}
    </div>
    
    <div class=\"col-md-10\">
        <h2>Modidier mon mot de passe:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                   
                    <form method=\"POST\" action=\"{{ path('fos_user_change_password')}}\">
                         {{ form_widget(form) }}
                        <br/>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
                        
                    </form>
                  </div>
                
               
            </div>
        </div>

    </div>
</div>

", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword_content.html.twig");
    }
}
