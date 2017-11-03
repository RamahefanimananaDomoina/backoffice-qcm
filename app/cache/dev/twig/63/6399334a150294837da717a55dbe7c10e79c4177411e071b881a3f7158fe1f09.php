<?php

/* QcmBundle:Reponse:index.html.twig */
class __TwigTemplate_8945b4a2b0a785b7eecc841f09d07fefb37a7943da5601a368352a8723bf5319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLogin.html.twig", "QcmBundle:Reponse:index.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<nav class=\"navbar navbar-default navbar-static-top\" style=\"background-color: #222\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qcm_homepage");
        echo "\" style=\"color: #FEFEFE\">QCM</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponseexacte");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse");
        echo "\">Question</a></li>
                <li class=\"active\"><a>Réponse</a></li> 
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><i class=\"fa fa-gears\"></i>&nbsp;&nbsp;Parametre</a></li>
                <li style=\"float: right\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;&nbsp;Déconnxion</a></li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">
                    
                </form>

            </div>
        </div>
    </nav>
    <div class=\"container\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Liste des réponses
                </div>

                <div class=\"panel-body\">
                    <div class=\"dataTable_wrapper\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Contenu réponse</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contenuReponse", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-zoom-in\"></span></a>

                                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse_new");
        echo "\">
            <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;Ajouter à nouveau</a>
    </div>



";
    }

    public function getTemplateName()
    {
        return "QcmBundle:Reponse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  131 => 65,  120 => 60,  115 => 58,  110 => 56,  106 => 55,  100 => 54,  97 => 53,  93 => 52,  58 => 20,  50 => 15,  46 => 14,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::baseLogin.html.twig' %}

{% block body -%}
    <nav class=\"navbar navbar-default navbar-static-top\" style=\"background-color: #222\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path('qcm_homepage')}}\" style=\"color: #FEFEFE\">QCM</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{path('reponseexacte')}}\">Accueil</a></li>
                <li><a href=\"{{path('reponse')}}\">Question</a></li>
                <li class=\"active\"><a>Réponse</a></li> 
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><i class=\"fa fa-gears\"></i>&nbsp;&nbsp;Parametre</a></li>
                <li style=\"float: right\"><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;&nbsp;Déconnxion</a></li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">
                    
                </form>

            </div>
        </div>
    </nav>
    <div class=\"container\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Liste des réponses
                </div>

                <div class=\"panel-body\">
                    <div class=\"dataTable_wrapper\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Contenu réponse</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for entity in entities %}
                                    <tr>
                                        <td><a href=\"{{ path('reponse_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                                        <td>{{ entity.contenuReponse }}</td>
                                        <td>{{ entity.etat }}</td>
                                        <td>
                                            <a href=\"{{ path('reponse_show', { 'id': entity.id }) }}\"class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-zoom-in\"></span></a>

                                            <a href=\"{{ path('reponse_edit', { 'id': entity.id }) }}\"class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href=\"{{ path('reponse_new') }}\">
            <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;Ajouter à nouveau</a>
    </div>



{% endblock %}
", "QcmBundle:Reponse:index.html.twig", "C:\\wamp\\www\\QCMV2\\src\\Qcm\\QcmBundle/Resources/views/Reponse/index.html.twig");
    }
}
