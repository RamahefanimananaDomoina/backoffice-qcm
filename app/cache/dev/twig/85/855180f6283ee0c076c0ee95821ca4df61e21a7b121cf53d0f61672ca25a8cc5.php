<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_91b2a60f5b40e0782fd1755cb4397128a0b9b0f28983fd97d77970a8e5667fe5 extends Twig_Template
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
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe</h4>
                    <em>Compléter le formulaire, un email vous seras envoyé.</br>
                        Il contiendra la procédure à suivre pour récupérer votre mot de passe.
                    </em>
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            <br/>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  43 => 18,  37 => 15,  33 => 14,  19 => 2,);
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
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe</h4>
                    <em>Compléter le formulaire, un email vous seras envoyé.</br>
                        Il contiendra la procédure à suivre pour récupérer votre mot de passe.
                    </em>
                    <div class=\"span4 offset2\">
                        <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            <br/>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
                        </form>
                    </div>
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</div>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
