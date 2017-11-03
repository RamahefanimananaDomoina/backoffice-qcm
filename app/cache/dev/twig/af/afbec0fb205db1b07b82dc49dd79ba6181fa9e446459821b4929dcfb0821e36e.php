<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8e23d5dc00f7ce5a31e915878eba8d5b46d50b614145e6e5893d45dd5f9d5b7c extends Twig_Template
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
    <div class=\"col-md-12\">
        <h2>Connexion:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit</h4>
                    <em>nous vous invitons  à remplir le formulaire ci-dessous</br>
                    </em>
                    </br></br>
                    
                </div>
                
                <div class=\"span4 offset2\">
                    <h2>Inscription</h2>
                    <form method=\"POST\"action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"fos_user_registration_register\">
                         
                         ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                         <div class=\"row\" style=\"margin-top: 5px\">
                             <div class=\"form-group\">
                                 ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Adresse e-mail *", "label_attr" => array("class" => "col-lg-4", "style" => "color:#8A8D98!important;")));
        // line 25
        echo "
                                 <div class=\"col-lg-6\">
                                     ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-sm form-control")));
        echo "

                                 </div>
                             </div>
                         </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d utilisateur", "label_attr" => array("class" => "col-lg-4", "style" => "color:#8A8D98!important;")));
        // line 37
        echo "
                                <div class=\"col-lg-6\">
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "input-sm form-control")));
        echo "

                                </div>
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe", "label_attr" => array("class" => "col-lg-4", "style" => "color:#8A8D98!important;")));
        // line 49
        echo "
                                <div class=\"col-lg-6\">
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input-sm form-control")));
        echo "

                                </div>
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Mot de passe", "label_attr" => array("class" => "col-lg-4", "style" => "color:#8A8D98!important;")));
        // line 61
        echo "
                                <div class=\"col-lg-6\">
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input-sm form-control")));
        echo "

                                </div>
                            </div>
                        </div>
                         
                        <br/>
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 72,  115 => 71,  111 => 70,  101 => 63,  97 => 61,  95 => 58,  85 => 51,  81 => 49,  79 => 46,  69 => 39,  65 => 37,  63 => 34,  53 => 27,  49 => 25,  47 => 22,  41 => 19,  36 => 17,  19 => 2,);
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
    <div class=\"col-md-12\">
        <h2>Connexion:</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit</h4>
                    <em>nous vous invitons  à remplir le formulaire ci-dessous</br>
                    </em>
                    </br></br>
                    
                </div>
                
                <div class=\"span4 offset2\">
                    <h2>Inscription</h2>
                    <form method=\"POST\"action=\"{{ path('fos_user_registration_register')}}\" class=\"fos_user_registration_register\">
                         
                         {{ form_start(form) }}
                         <div class=\"row\" style=\"margin-top: 5px\">
                             <div class=\"form-group\">
                                 {{ form_label(form.email, null, {
\t\t\t\t\t\t'label': 'Adresse e-mail *',
\t\t\t\t\t\t'label_attr': {'class': 'col-lg-4', 'style': 'color:#8A8D98!important;'}}) 
                                 }}
                                 <div class=\"col-lg-6\">
                                     {{ form_widget(form.email,{ 'attr' :{'class': 'input-sm form-control'}}) }}

                                 </div>
                             </div>
                         </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                {{ form_label(form.username, null, {
                                   'label': 'Nom d utilisateur',
                                   'label_attr': {'class': 'col-lg-4', 'style': 'color:#8A8D98!important;'}}) 
                                }}
                                <div class=\"col-lg-6\">
                                    {{ form_widget(form.username,{ 'attr' :{'class': 'input-sm form-control'}}) }}

                                </div>
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                {{ form_label(form.plainPassword.first, null, {
                       'label': 'Mot de passe',
                       'label_attr': {'class': 'col-lg-4', 'style': 'color:#8A8D98!important;'}}) 
                                }}
                                <div class=\"col-lg-6\">
                                    {{ form_widget(form.plainPassword.first,{ 'attr' :{'class': 'input-sm form-control'}}) }}

                                </div>
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 5px\">
                            <div class=\"form-group\">
                                {{ form_label(form.plainPassword.second, null, {
                        'label': 'Mot de passe',
                        'label_attr': {'class': 'col-lg-4', 'style': 'color:#8A8D98!important;'}}) 
                                }}
                                <div class=\"col-lg-6\">
                                    {{ form_widget(form.plainPassword.second,{ 'attr' :{'class': 'input-sm form-control'}}) }}

                                </div>
                            </div>
                        </div>
                         
                        <br/>
                        {{ form_widget(form) }}
                        <input class=\"btn btn-success\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                        {{ form_end(form) }}
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
