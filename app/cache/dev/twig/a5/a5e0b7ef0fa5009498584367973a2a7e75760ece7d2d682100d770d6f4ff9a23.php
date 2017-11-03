<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_700e52b00ab238a93d6d57dc9eece4d1624bbc6e21b58b3091710e7bf3f23304 extends Twig_Template
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
        $this->loadTemplate("::modulesUsed/utilisateursConnecter.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    
    <div class=\"col-md-10\">
        <h2>Mes informations:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                   
                    <form method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" >
                         ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br/>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  40 => 15,  36 => 14,  26 => 6,  24 => 5,  19 => 2,);
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
        <h2>Mes informations:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                   
                    <form method=\"POST\" action=\"{{ path('fos_user_profile_edit')}}\" >
                         {{ form_widget(form) }}
                        <br/>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
                        
                    </form>
                  </div>
                
               
            </div>
        </div>

    </div>
</div>

", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
