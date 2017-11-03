<?php

/* QcmBundle:ReponseExacte:new.html.twig */
class __TwigTemplate_da4c1cfb78f97abc79f5e1bc4a858cc093fefc5147d14c378adae9bac56f68c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QcmBundle:ReponseExacte:new.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Création question par réponse </h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponseexacte");
        echo "\">
            retour à la liste
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "QcmBundle:ReponseExacte:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Création question par réponse </h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('reponseexacte') }}\">
            retour à la liste
        </a>
    </li>
</ul>
{% endblock %}
", "QcmBundle:ReponseExacte:new.html.twig", "C:\\wamp\\www\\QCMV2\\src\\Qcm\\QcmBundle/Resources/views/ReponseExacte/new.html.twig");
    }
}
