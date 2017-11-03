<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_eed96612b5fea9ec56d96fa1d0a0e3ca2dbef50e17159ff997257be8f1b9459a extends Twig_Template
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
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération de mot de passe?</h4>
                    <em>Compléter le formulaire, votre mot de passe sera alors réinitialiser.</br></br>
                        Une fois validé, vous devez utiliser le nouveau mot de passe que vous avez defini.
                    </em>
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset");
        echo "\" method=\"POST\" >
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br/>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  36 => 14,  32 => 13,  19 => 2,);
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
                    <h4>Récupération de mot de passe?</h4>
                    <em>Compléter le formulaire, votre mot de passe sera alors réinitialiser.</br></br>
                        Une fois validé, vous devez utiliser le nouveau mot de passe que vous avez defini.
                    </em>
                    <div class=\"span4 offset2\">
                        <form action=\"{{ path('fos_user_resetting_reset') }}\" method=\"POST\" >
                            {{ form_widget(form) }}
                            <br/>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
