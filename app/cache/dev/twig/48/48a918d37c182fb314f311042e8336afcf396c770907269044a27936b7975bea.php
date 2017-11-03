<?php

/* UtilisateursBundle:Default:login.html.twig */
class __TwigTemplate_a162b3ac744c6ea7e645fb61e315758843f4039debfd17dc39516d44589e5c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLogin.html.twig", "UtilisateursBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "
    <div class=\"row\">
        <div class=\"col-sm-6 col-sm-offset-3 form-box\">
            <div class=\"form-top\">
                <div class=\"form-top-left\">
                    <h3>Connectez vous</h3>

                </div>
                <div class=\"form-top-right\">

                </div>
            </div>
            <div class=\"form-bottom\">
                ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 23
        echo "                <form role=\"form\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" role=\"form\" action=\"\" method=\"post\" class=\"login-form\">
                    <!--input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo "\" /-->
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant..\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autofocus>
                    </div>
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i  class=\"fa fa-lock\"></i></span>
                        <input onFocus=\"highlightActive(this);
                                activeinput = this\" type=\"password\" class=\"form-control\" placeholder=\"Mot de passe...\" id=\"password\" name=\"_password\" required= \"required\"  data-toggle=\"popover\"  data-original-title=\"Pavé numérique\" data-placement=\"right\" data-container=\"body\"><br/>
                        
                    </div>

                    <a href=\"\">Mot de passe oublié ?</a>
                    <div >
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"btn btn-outline btn-primary btn-lg btn-block\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 38,  66 => 27,  61 => 24,  56 => 23,  50 => 21,  48 => 20,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseLogin.html.twig\" %}



{% block body %}
    {% trans_default_domain 'FOSUserBundle' %}

    <div class=\"row\">
        <div class=\"col-sm-6 col-sm-offset-3 form-box\">
            <div class=\"form-top\">
                <div class=\"form-top-left\">
                    <h3>Connectez vous</h3>

                </div>
                <div class=\"form-top-right\">

                </div>
            </div>
            <div class=\"form-bottom\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <form role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" role=\"form\" action=\"\" method=\"post\" class=\"login-form\">
                    <!--input type=\"hidden\" name=\"_csrf_token\" value=\"{##{csrf_token('authenticate')}#}\" /-->
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant..\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autofocus>
                    </div>
                    <div class=\"form-group input-group\">
                        <span class=\"input-group-addon\"><i  class=\"fa fa-lock\"></i></span>
                        <input onFocus=\"highlightActive(this);
                                activeinput = this\" type=\"password\" class=\"form-control\" placeholder=\"Mot de passe...\" id=\"password\" name=\"_password\" required= \"required\"  data-toggle=\"popover\"  data-original-title=\"Pavé numérique\" data-placement=\"right\" data-container=\"body\"><br/>
                        
                    </div>

                    <a href=\"\">Mot de passe oublié ?</a>
                    <div >
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"  class=\"btn btn-outline btn-primary btn-lg btn-block\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>




{% endblock body %}

", "UtilisateursBundle:Default:login.html.twig", "C:\\wamp\\www\\QCMV2\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/login.html.twig");
    }
}
