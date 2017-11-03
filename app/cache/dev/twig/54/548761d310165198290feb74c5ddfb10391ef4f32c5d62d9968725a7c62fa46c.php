<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b605e892ab2c7487bcb5d62159bee3ca5e2291fae64e7e16c8f1c1652eb9dee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        // line 12
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Connectez-vous</h3>
                    </div>
                    
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" role=\"form\" action=\"\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <fieldset>
                                <label for=\"username\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Identifiant...\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                                </div>
                                <label for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Mot de passe...\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" >
                                        <label for=\"remember_me\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    </label>
                                </div>
                                
                                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu?</a>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                
                               
                            </fieldset>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  96 => 40,  89 => 36,  79 => 29,  74 => 27,  69 => 25,  64 => 23,  60 => 22,  48 => 12,  46 => 11,  40 => 10,  34 => 8,  32 => 7,  29 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
{% block body %}
    {% trans_default_domain 'FOSUserBundle' %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Connectez-vous</h3>
                    </div>
                    
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" role=\"form\" action=\"\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            <fieldset>
                                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Identifiant...\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
                                </div>
                                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Mot de passe...\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" >
                                        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                    </label>
                                </div>
                                
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu?</a>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
                                
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {% endblock body %}
{% endblock fos_user_content %}

", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
