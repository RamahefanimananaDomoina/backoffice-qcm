<?php

/* QcmBundle:Default:index.html.twig */
class __TwigTemplate_7de2611471880f1e55983dc3cd0c37cb6bc2ab2cfeda3106df8e86d5f4769896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QcmBundle:Default:index.html.twig", 1);
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

    // line 2
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">

                </form>

            </div>
        </div>
    </nav>


    <div class=\"col-md-2\">
        <div class=\"well\">
            <ul class=\"nav nav-list\">

               
                <li>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"><i class=\"glyphicon glyphicon-cog\"></i>&nbsp;Parametre</a>
                </li>
                 <li>
                     <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;Se deconnecter</a>
                </li>
                <li>
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i>&nbsp;Mon Profile</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class=\"col-md-10\">
        
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-5\">
                <div class=\"form-group\">
                    
                    <select class=\"form-control\" id=\"select\">
                        <option >Sélectionner une categorie</option>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 54
            echo "                            
                            <option >";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["categories"], "nomCategorie", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </select>
                </div>
                <form name=\"forsec\">

                    <input class=\"input-sm\" type=\"text\" size=\"3\" name=\"secb\"> minute(s)
                    <input class=\"input-sm\" type=\"text\" size=\"3\" name=\"seca\"> secondes
                    <input type=\"hidden\" size=\"3\" name=\"secc\">


                    <input  id=\"demarre\" class=\" btn btn-success\" type=\"button\" value=\"Demarré\" onclick=\"chrono()\"> 
                    <input id=\"pause\" class=\" btn btn-primary\" type=\"button\" value=\"pause\" onclick=\"clearTimeout(compte)\">
                </form>
            </div>
                    
          
            <div class=\"col-md-offset-2 col-md-7\" id=\"question\">
                <h2 class=\"title\">Choisissez la bonne réponse</h2>
                
                <div class=\"form-group\" id=\"input1\"><!-- Quel est le type de retour de web service-->
                    Question : <label for=\"quest\" id=\"questionEncours\"></label><br/>    
                    <div id=\"reponseParQuestion\"></div>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) ? $context["reponses"] : $this->getContext($context, "reponses")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 79
            echo "                        <div class=\"radio\" >
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </div>
                

            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question2\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                ";
        // line 90
        if (((isset($context["requete"]) ? $context["requete"] : $this->getContext($context, "requete")) == null)) {
            // line 91
            echo "                ";
        } else {
            echo "<div>";
            echo twig_escape_filter($this->env, (isset($context["requete"]) ? $context["requete"] : $this->getContext($context, "requete")), "html", null, true);
            echo "</div>
                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questionReponse"]) ? $context["questionReponse"] : $this->getContext($context, "questionReponse")));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 93
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reponse"], "reponse", array()), "contenuReponse", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
        }
        // line 96
        echo "                <div class=\"form-group\" id=\"input2\">
                    <label for=\"quest\">Question : ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question2"]) ? $context["question2"] : $this->getContext($context, "question2")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses2"]) ? $context["reponses2"] : $this->getContext($context, "reponses2")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 99
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\" id=\"question3\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input3\">
                    <label for=\"quest\">Question : ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question3"]) ? $context["question3"] : $this->getContext($context, "question3")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses3"]) ? $context["reponses3"] : $this->getContext($context, "reponses3")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 111
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                </div>


            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question4\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input4\">
                    <label for=\"quest\">Question : ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question4"]) ? $context["question4"] : $this->getContext($context, "question4")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses4"]) ? $context["reponses4"] : $this->getContext($context, "reponses4")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 125
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question5\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input5\">
                    <label for=\"quest\">Question : ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question5"]) ? $context["question5"] : $this->getContext($context, "question5")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses5"]) ? $context["reponses5"] : $this->getContext($context, "reponses5")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 137
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </div>
            </div>

            <div class=\"col-md-offset-2 col-md-7\"id=\"question6\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input6\">
                    <label for=\"quest\">Question :";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question6"]) ? $context["question6"] : $this->getContext($context, "question6")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses6"]) ? $context["reponses6"] : $this->getContext($context, "reponses6")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 150
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question7\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input7\">
                    <label for=\"quest\">Question : ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question7"]) ? $context["question7"] : $this->getContext($context, "question7")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses7"]) ? $context["reponses7"] : $this->getContext($context, "reponses7")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 162
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question8\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\"  id=\"input8\">
                    <label for=\"quest\">Question : ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question8"]) ? $context["question8"] : $this->getContext($context, "question8")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses8"]) ? $context["reponses8"] : $this->getContext($context, "reponses8")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 174
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question9\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input9\">
                    <label for=\"quest\">Question : ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question9"]) ? $context["question9"] : $this->getContext($context, "question9")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses9"]) ? $context["reponses9"] : $this->getContext($context, "reponses9")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 186
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question10\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input10\">
                    <label for=\"quest\">Question : ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question10"]) ? $context["question10"] : $this->getContext($context, "question10")));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["questions"], "contenuQuestion", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </label><br/>    
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses10"]) ? $context["reponses10"] : $this->getContext($context, "reponses10")));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 198
            echo "                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "contenuReponse", array()), "html", null, true);
            echo "</label>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"note\">
                ";
        // line 206
        if (((isset($context["random"]) ? $context["random"] : $this->getContext($context, "random")) >= 5)) {
            // line 207
            echo "                    <div class=\"alert alert-success\">
                        Félicitation, vous avez eu la moyenne<a href=\"#\" class=\"alert-link\"><i class=\"fa fa-thumbs-o-up\"></i></a>.
                    </div>
                ";
        } else {
            // line 211
            echo "                    <div class=\"alert alert-danger\">
                        Attention! Vous êtes au-dessous de la moyenne <a href=\"#\" class=\"fa fa-thumbs-o-down\"></a>.
                    </div>
                ";
        }
        // line 215
        echo "                <h3 class=\"title\">Votre note est :  ";
        echo twig_escape_filter($this->env, (isset($context["random"]) ? $context["random"] : $this->getContext($context, "random")), "html", null, true);
        echo "/ 10 </h3>
                <div class=\"form-group\" id=\"input2\">

                </div>
            </div>
        </div>
    </div>   
</div>




";
    }

    public function getTemplateName()
    {
        return "QcmBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 215,  538 => 211,  532 => 207,  530 => 206,  525 => 203,  513 => 199,  510 => 198,  506 => 197,  494 => 196,  487 => 191,  475 => 187,  472 => 186,  468 => 185,  456 => 184,  449 => 179,  437 => 175,  434 => 174,  430 => 173,  418 => 172,  411 => 167,  399 => 163,  396 => 162,  392 => 161,  380 => 160,  373 => 155,  361 => 151,  358 => 150,  354 => 149,  342 => 148,  334 => 142,  322 => 138,  319 => 137,  315 => 136,  303 => 135,  296 => 130,  284 => 126,  281 => 125,  277 => 124,  265 => 123,  256 => 116,  244 => 112,  241 => 111,  237 => 110,  225 => 109,  218 => 104,  206 => 100,  203 => 99,  199 => 98,  187 => 97,  184 => 96,  181 => 95,  172 => 93,  168 => 92,  161 => 91,  159 => 90,  151 => 84,  139 => 80,  136 => 79,  132 => 78,  109 => 57,  101 => 55,  98 => 54,  94 => 53,  77 => 39,  71 => 36,  65 => 33,  40 => 11,  31 => 4,  28 => 2,  11 => 1,);
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

    <nav class=\"navbar navbar-default navbar-static-top\" style=\"background-color: #222\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path('qcm_homepage')}}\" style=\"color: #FEFEFE\">QCM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">

                </form>

            </div>
        </div>
    </nav>


    <div class=\"col-md-2\">
        <div class=\"well\">
            <ul class=\"nav nav-list\">

               
                <li>
                    <a href=\"{{path('fos_user_registration_register')}}\"><i class=\"glyphicon glyphicon-cog\"></i>&nbsp;Parametre</a>
                </li>
                 <li>
                     <a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;Se deconnecter</a>
                </li>
                <li>
                    <a href=\"{{path('fos_user_profile_show')}}\"><i class=\"glyphicon glyphicon-user\"></i>&nbsp;Mon Profile</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class=\"col-md-10\">
        
        <div class=\"row\">
            <div class=\"col-md-offset-1 col-md-5\">
                <div class=\"form-group\">
                    
                    <select class=\"form-control\" id=\"select\">
                        <option >Sélectionner une categorie</option>
                        {% for categories in categorie %}
                            
                            <option >{{categories.nomCategorie}}</option>
                        {% endfor %}
                    </select>
                </div>
                <form name=\"forsec\">

                    <input class=\"input-sm\" type=\"text\" size=\"3\" name=\"secb\"> minute(s)
                    <input class=\"input-sm\" type=\"text\" size=\"3\" name=\"seca\"> secondes
                    <input type=\"hidden\" size=\"3\" name=\"secc\">


                    <input  id=\"demarre\" class=\" btn btn-success\" type=\"button\" value=\"Demarré\" onclick=\"chrono()\"> 
                    <input id=\"pause\" class=\" btn btn-primary\" type=\"button\" value=\"pause\" onclick=\"clearTimeout(compte)\">
                </form>
            </div>
                    
          
            <div class=\"col-md-offset-2 col-md-7\" id=\"question\">
                <h2 class=\"title\">Choisissez la bonne réponse</h2>
                
                <div class=\"form-group\" id=\"input1\"><!-- Quel est le type de retour de web service-->
                    Question : <label for=\"quest\" id=\"questionEncours\"></label><br/>    
                    <div id=\"reponseParQuestion\"></div>
                    {% for reponse in reponses %}
                        <div class=\"radio\" >
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
                

            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question2\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                {%if requete == null %}
                {%else%}<div>{{requete}}</div>
                    {% for reponse in questionReponse %}
                    {{ reponse.reponse.contenuReponse }}
                {% endfor %}
                {%endif%}
                <div class=\"form-group\" id=\"input2\">
                    <label for=\"quest\">Question : {% for questions in question2 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses2 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\" id=\"question3\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input3\">
                    <label for=\"quest\">Question : {% for questions in question3 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses3 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>


            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question4\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input4\">
                    <label for=\"quest\">Question : {% for questions in question4 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses4 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question5\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input5\">
                    <label for=\"quest\">Question : {% for questions in question5 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses5 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>

            <div class=\"col-md-offset-2 col-md-7\"id=\"question6\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input6\">
                    <label for=\"quest\">Question :{% for questions in question6 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses6 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question7\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input7\">
                    <label for=\"quest\">Question : {% for questions in question7 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses7 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question8\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\"  id=\"input8\">
                    <label for=\"quest\">Question : {% for questions in question8 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses8 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question9\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input9\">
                    <label for=\"quest\">Question : {% for questions in question9 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses9 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\" >{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"question10\">
                <h3 class=\"title\">Choisissez la bonne réponse</h3>
                <div class=\"form-group\" id=\"input10\">
                    <label for=\"quest\">Question : {% for questions in question10 %}{{questions.contenuQuestion}} {% endfor %} </label><br/>    
                    {% for reponse in reponses10 %}
                        <div class=\"radio\">
                            <label><input type=\"radio\" name=\"reponse\" value=\"{{ reponse.contenuReponse }}\">{{ reponse.contenuReponse }}</label>
                        </div>

                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-offset-2 col-md-7\"id=\"note\">
                {% if random >= 5 %}
                    <div class=\"alert alert-success\">
                        Félicitation, vous avez eu la moyenne<a href=\"#\" class=\"alert-link\"><i class=\"fa fa-thumbs-o-up\"></i></a>.
                    </div>
                {%else%}
                    <div class=\"alert alert-danger\">
                        Attention! Vous êtes au-dessous de la moyenne <a href=\"#\" class=\"fa fa-thumbs-o-down\"></a>.
                    </div>
                {%endif%}
                <h3 class=\"title\">Votre note est :  {{ random }}/ 10 </h3>
                <div class=\"form-group\" id=\"input2\">

                </div>
            </div>
        </div>
    </div>   
</div>




{% endblock %}", "QcmBundle:Default:index.html.twig", "C:\\wamp\\www\\QCMV2\\src\\Qcm\\QcmBundle/Resources/views/Default/index.html.twig");
    }
}
