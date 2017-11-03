<?php

/* QcmBundle:ReponseExacte:index.html.twig */
class __TwigTemplate_686bdd0bfaae9a553c7142b096595e27bbb35b2bc3a4cfce829ab81439e0380c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseLogin.html.twig", "QcmBundle:ReponseExacte:index.html.twig", 2);
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
               
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><i class=\"fa fa-gears\"></i>&nbsp;&nbsp;Paramètre</a></li>
                <li style=\"float: right\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;&nbsp;Déconnexion</a></li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">
                    
                </form>

            </div>
        </div>
    </nav>
    <h4>Categories</h4>
    <div class=\"col-sm-3 sidenav\" id=\"list_categorie\">
        
      <br>
     
    </div>

    <div class=\"col-sm-5\">
        <h4>Questions</h4>           
        <p><strong>Note:</strong> Vous pouvez modifier ou bien supprimé les questions et les réponses.</p>
        <div id=\"notificationQuestion\"></div>
      <div class=\"bs-example\" id=\"dom_accordion\" ></div>
      <button id=\"prev\">prev 5</button>
      <button id=\"next\">next 5</button>
    </div>
    <div class=\"col-sm-4\" >
      <h4><small>Remplir les champs suivants</small></h4>
      <div id=\"notification\"></div>
      <button type=\"submit\" class=\"btn btn-success\" style=\"float:right\" id=\"save\">Enregistrer</button>
      <label for=\"inputdefault\">Catégorie:  <a id=\"add_form_field_category\" class=\"glyphicon glyphicon-plus\" style=\"color:bleu\"></a></label> 
      <div class=\"form-group\" id=\"container2\" >
       
        
       
      </div>

      <div class=\"form-group\">

        <label for=\"inputdefault\">Question: </label>
        <textarea class=\"form-control\" id=\"question\" type=\"text\"></textarea>
        
      </div>

      <div class=\"form-group\" id=\"container1\">
       
        <label for=\"inputdefault\">Réponses:  <a id=\"add_form_field_reponse\" class=\"glyphicon glyphicon-plus\"></a></label>
        
        <input class=\"form-control\" id=\"reponse1\" type=\"text\"> 
           
        <label>
          <input type=\"checkbox\" id=\"isTrue1\"> isTrue
        </label>  
      </div>
    </div>
    
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier une réponse</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Nouvelle réponse</label>
                            <input class=\"form-control\" id=\"input_edit_answer\" />
                            <p class=\"help-block\">Noter : entrer dans ce zone de texte la nouvelle réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_edit_answer\">Modifier</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

    <div class=\"modal fade\" id=\"modalSupprimer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Supprimer une réponse</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                           Voulez-vous vraiment supprimer cette réponse.
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"delete_answer\">Supprimer</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

      <div class=\"modal fade\" id=\"modalSupprimerQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Supprimer une question</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                           Voulez-vous vraiment supprimer cette question.
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"delete_question\">Supprimer</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <div class=\"modal fade\" id=\"myModalEditerQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier une question</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Nouvelle question</label>
                            <input class=\"form-control\" id=\"input_edit_question\" />
                            <p class=\"help-block\">Noter : entrer dans ce zone de texte la nouvelle réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_edit_question\">Modifier</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

      <div class=\"modal fade\" id=\"myModalAjouterReponseByQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter une autre réponse du question : <a id=\"question_title\"></a> </h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Une autre réponse</label>
                            <input class=\"form-control\" id=\"input_add_answer_byQuestion\" />
                            <p class=\"help-block\">Noter : entrer dans cet zone de texte une autre réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_add_answer_byQuestion\">Ajouter</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

";
    }

    public function getTemplateName()
    {
        return "QcmBundle:ReponseExacte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::baseLogin.html.twig' %}
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
               
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><i class=\"fa fa-gears\"></i>&nbsp;&nbsp;Paramètre</a></li>
                <li style=\"float: right\"><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-out\"></i>&nbsp;&nbsp;Déconnexion</a></li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\"
                 id=\"bs-example-navbar-collapse-1\">

                <form class=\"navbar-form navbar-left\">
                    
                </form>

            </div>
        </div>
    </nav>
    <h4>Categories</h4>
    <div class=\"col-sm-3 sidenav\" id=\"list_categorie\">
        
      <br>
     
    </div>

    <div class=\"col-sm-5\">
        <h4>Questions</h4>           
        <p><strong>Note:</strong> Vous pouvez modifier ou bien supprimé les questions et les réponses.</p>
        <div id=\"notificationQuestion\"></div>
      <div class=\"bs-example\" id=\"dom_accordion\" ></div>
      <button id=\"prev\">prev 5</button>
      <button id=\"next\">next 5</button>
    </div>
    <div class=\"col-sm-4\" >
      <h4><small>Remplir les champs suivants</small></h4>
      <div id=\"notification\"></div>
      <button type=\"submit\" class=\"btn btn-success\" style=\"float:right\" id=\"save\">Enregistrer</button>
      <label for=\"inputdefault\">Catégorie:  <a id=\"add_form_field_category\" class=\"glyphicon glyphicon-plus\" style=\"color:bleu\"></a></label> 
      <div class=\"form-group\" id=\"container2\" >
       
        
       
      </div>

      <div class=\"form-group\">

        <label for=\"inputdefault\">Question: </label>
        <textarea class=\"form-control\" id=\"question\" type=\"text\"></textarea>
        
      </div>

      <div class=\"form-group\" id=\"container1\">
       
        <label for=\"inputdefault\">Réponses:  <a id=\"add_form_field_reponse\" class=\"glyphicon glyphicon-plus\"></a></label>
        
        <input class=\"form-control\" id=\"reponse1\" type=\"text\"> 
           
        <label>
          <input type=\"checkbox\" id=\"isTrue1\"> isTrue
        </label>  
      </div>
    </div>
    
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier une réponse</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Nouvelle réponse</label>
                            <input class=\"form-control\" id=\"input_edit_answer\" />
                            <p class=\"help-block\">Noter : entrer dans ce zone de texte la nouvelle réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_edit_answer\">Modifier</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

    <div class=\"modal fade\" id=\"modalSupprimer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Supprimer une réponse</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                           Voulez-vous vraiment supprimer cette réponse.
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"delete_answer\">Supprimer</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

      <div class=\"modal fade\" id=\"modalSupprimerQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Supprimer une question</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                           Voulez-vous vraiment supprimer cette question.
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"delete_question\">Supprimer</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <div class=\"modal fade\" id=\"myModalEditerQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier une question</h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Nouvelle question</label>
                            <input class=\"form-control\" id=\"input_edit_question\" />
                            <p class=\"help-block\">Noter : entrer dans ce zone de texte la nouvelle réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_edit_question\">Modifier</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

      <div class=\"modal fade\" id=\"myModalAjouterReponseByQuestion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter une autre réponse du question : <a id=\"question_title\"></a> </h4>
                  </div>
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                            <label>Une autre réponse</label>
                            <input class=\"form-control\" id=\"input_add_answer_byQuestion\" />
                            <p class=\"help-block\">Noter : entrer dans cet zone de texte une autre réponse.</p>
                        </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                      <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"button_add_answer_byQuestion\">Ajouter</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

{% endblock %}
", "QcmBundle:ReponseExacte:index.html.twig", "C:\\wamp\\www\\QCMV2\\src\\Qcm\\QcmBundle/Resources/views/ReponseExacte/index.html.twig");
    }
}
