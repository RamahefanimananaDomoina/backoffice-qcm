<?php

/* ::baseLogin.html.twig */
class __TwigTemplate_2dd4f4d7ef1bed7f4fd02060917191db48083708af0039ccda3dd62f20f9a6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        echo "  
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("dist/css/menu.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/angular.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script src=\"https://www.gstatic.com/firebasejs/4.1.3/firebase.js\"></script>
    <script>
// Initialize Firebase
        var config = {
            apiKey: \"AIzaSyCivjrQFNOfG34OastuCXJ48r30oj-Me7s\",
            authDomain: \"qcmapp-4d7b3.firebaseapp.com\",
            databaseURL: \"https://qcmapp-4d7b3.firebaseio.com\",
            projectId: \"qcmapp-4d7b3\",
            storageBucket: \"qcmapp-4d7b3.appspot.com\",
            messagingSenderId: \"337461332108\"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '130561684208371',
                autoLogAppEvents: true,
                cookie: true,
                status: true,
                xfbml: true,
                version: 'v2.9'
            });
             
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    console.log(\"qsdf\");
                    console.log(response.status);
                    var uid = response.authResponse.userID;
                    var accessToken = response.authResponse.accessToken;
                } else if (response.status === 'not_authorized') {
                    console.log(response.status);
                   

                } else {

                }
            });


            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>
           
            \$(document).ready(function() {
                var max_fields      = 5;
                var wrapper         = \$(\"#container1\");
                var wrapper1         = \$(\"#container2\");
                var add_button      = \$(\"#add_form_field_reponse\");
                var add_category    = \$(\"#add_form_field_category\");
                var button_save     = document.getElementById(\"save\");
                var x = 1;
                
                
                \$(add_category).click(function(e){
                      e.preventDefault();
                      if(x < max_fields){
                        x++;
                        \$(wrapper1).append('<div class=\"padding\"><input class=\"form-control\" id=\"category\" type=\"text\"><a href=\"#\" id=\"enregistrer\" class=\"btn btn-primary btn-sm\">ajouter</a></div>'); //add input box
                      }
                });
                \$(add_button).click(function(e){
                    e.preventDefault();
                    if(x < max_fields){
                        x++;
                        console.log('valeur de x ' + x);
                        \$(wrapper).append('<div><input class=\"form-control \" id=\"reponse'+x+'\" type=\"text\"><label> <input type=\"checkbox\" id=\"isTrue'+x+'\"> isTrue</label> <a href=\"#\" id=\"delete\" class=\"btn btn-danger btn-sm\">Supprimer</a></div>'); //add input box
                    }
                  else
                  {
                  alert('5 est la limite')
                  }
                });
               
                \$(wrapper).on(\"click\",\"#delete\", function(e){
                    e.preventDefault(); \$(this).parent('div').remove(); x--;
                })
                \$(wrapper1).on(\"click\",\"#enregistrer\", function(e){
                    var category= document.getElementById('category').value;
                    var refCat = firebase.database().ref('category');
                    refCat.push({
                        category
                    });
                    e.preventDefault(); \$(this).parent('div').remove(); x--;
                    console.log('ajout category avec succès');


                });
                function insertAnswer(){
                    console.log('fonction insertAnswer ' + x);
                    var tabReponse = [];
                    for(var i = 1 ; i<= x; i++){
                         console.log(\"e f fjf jke fjuccesful\" + x);
                        tabReponse.push({
                            question : document.getElementById('reponse' + i).value,
                            isTrue : document.getElementById('isTrue' + i).checked
                        });                        
                        
                    }
                    
                };
                
                button_save.onclick = function(){
                    var choice_category = document.getElementById(\"categori\").value;
                    var question = document.getElementById('question').value;
                    getCategoryId(choice_category).then(function(id) {
                        addQuestion(id, question);
                         getQuestionId(question).then(function(id) {
                            console.log(\"id question \" + id);
                            var tabReponse = [];
                            for(var i = 1 ; i<= x; i++){
                                tabReponse.push({
                                    question : document.getElementById('reponse' + i).value,
                                    isTrue : document.getElementById('isTrue' + i).checked
                                });                        
                                
                            }
                            var refRep= firebase.database().ref('reponse');
                            for(var k = 0; k < tabReponse.length; k++){
                                refRep.push({
                                   questId :  id,
                                   value :  tabReponse[k].question,
                                   isTrue : tabReponse[k].isTrue
                                });
                            }
                            
                            
                        });
                     });
                    console.log(\"save succesful\" + x);
                    document.onload();
                }
                
                
            });

           

          const refCat = firebase.database().ref('category');

          refCat.on('value', function (data) {
            const resp = data.val();
            var cats = [];
            var i = 0;
            for(var prop in resp){
                cats[i] = resp[prop].name;
                i++;
                
            }
            //console.log('cats : ' + typeof cats);
            var result = cats.toString();
            //console.log('toString : ' + result);
            var categories = result.split(',');
            //console.log('voila : ' +  categories.length);
            
             
             \$(\"#container2\").append(generateOptions(categories));
             \$(\"#list_categorie\").append(generateUl(categories));
             var s = document.getElementById(\"categori\").value;
             var allQuestion = [];
             var allReponse = [];
            function getReponsesByQuestionId(questId){
               return new Promise(function(resolve, reject) {

                   var refRep = firebase.database().ref('reponse');
                    const ret = {};
                    refRep.orderByChild('questId').equalTo(questId).on('value', function (resp) {
                    var data = resp.val();

                    if (!data) {
                      resolve({});
                      return;
                    }
                    
                    const keys = Object.keys(data);
                    const reponses = keys.reduce((acc, key) => {
                      acc.push({
                        valeur: data[key].value,
                        isTrue: data[key].isTrue
                      });
                      return acc;
                    }, []);

                    ret[questId] = reponses;


                     });
                     return resolve(ret);
                });
            };
            function getReponsesByQuestionIds(questionList){
                console.log('zefef + ' + questionList);
                return Promise.all(questionList.map(function(question){
                    //
                    return getReponsesByQuestionId(question.id)
                }));
            };
            getCategoryId('DOTNET').then(function(id) {
                getQuestionByCategory(id).then(function(value){
                    console.log(\"rZFZEFJZE ZR ZRJ KFJAK¨J KJ KZDFJÄ KFJZHJZDC \");

                    if (value.length) {
                        for(var i = 0; i < value.length; i++){
                            var questionList = value[i].id;
                            var content_value = value[i].value;
                            console.log(\"reto n question \" + value);
                            var demo = getReponsesByQuestionIds(value);
                            console.log(\"test \" + demo);
                            getReponsesByQuestionIds(value).then(function(responseList){
                                
                                console.log(responseList);
                                
                                    const resp = responseList.reduce((acc, rep) => {
                                        const key = Object.keys(rep)[0];
                                        const arr = rep[key];

                                        acc[key] = arr;
                                        return acc;
                                      }, {});
                                      var mydata2 = {};
                                      mydata2.questions = [];
                                        console.log(resp);
                                      value.map((question) => {
                                        const dataQuestion = {};
                                        
                                        dataQuestion.value = question.value;
                                        dataQuestion.responses = resp[question.id];
                                        mydata2.questions.push(dataQuestion);
                                      });
                                      
                                    allQuestion.push({
                                        idQuestion : questionList,
                                        question : content_value

                                    });
                                console.log(allQuestion);
                                console.log(mydata2);
                                //\$(\"#dom_accordion\").append(generateAccordion(allQuestion));
                            });
                        }
                    }
                });
            });
             
             //
            
             var question = document.getElementById('question').value;             
            
          });
          function getQuestionId(question){
            var refQuestion = firebase.database().ref('question');
            return new Promise(function(resolve, reject){
               refQuestion.orderByChild('value').equalTo(question).on('value', function(data){
                   var ret;
                   for(var prop in data.val()){
                       ret = prop;
                   }
                   return resolve(ret);
               });
            });
          }
          function getCategoryId(name) {
            var refCat = firebase.database().ref('category');

            return new Promise(function(resolve, reject) {
                refCat.orderByChild('name').equalTo(name).on('value', function (data) {
                    var ret;
                    for (var prop in data.val()) {
                         ret = prop;
                    }
                    resolve(ret);
                });
            });
          }
          function getQuestionIds(questId) {
            var refQuestion= firebase.database().ref('question');

            return new Promise(function(resolve, reject) {
                refQuestion.orderByChild('categoryId').equalTo(questId).on('value', function (data) {
                    var ret = data.val();
                    var keys =[];

                    for (var key in data.val()) {
                         keys.push(key);
                    }
                    resolve(keys);
                });
            });
          }
         function generateOptions(array){
            var result = \"<select class='form-control' id='categori'>\";
            for(var j=0; j<array.length; j++){
                result += \"<option>\"+ array[j] + \"</option>\";
            }
             
            return result + \"</select>\";
         }
         function generateUl(array){
            var content = \"<ul class='nav nav-pills nav-stacked'>\";
            for(var j=0; j<array.length; j++){
                content += \" <li><a class='list-group-item'>\"+ array[j] + \"</a></li>\";
            }
             
            return content + \"</ul>\";
         }
         function generateAccordion(array){
            var content = \" \";
            var reponse_content = \"\";
            for(var j=0; j<array.length; j++){
                content += \"<div class='panel-group' id='accordion\"+j+\"'><div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion\"+j+\"' href='#collapseOne\"+j+\"'><span class='glyphicon glyphicon-plus'></span> \"+ array[j].question + \"</a></div> <div id='collapseOne\"+j+\"' class='panel-collapse collapse'> <div class='panel-body'> <p>\"+ array[j].question + \"</a></p> </div></div></div></div>\";
            }
             
            return content;
         }
         function getQuestionByCategory(categoryId){
            var refQuestion = firebase.database().ref('question');
           const questionList = [];
                return new Promise(function(resolve, reject) {
                    refQuestion.orderByChild('categoryId').equalTo(categoryId).on('value', function (resp) {
                const data = resp.val();

                for (const prop in data) {
                  questionList.push({
                    id: prop,
                    value: data[prop].value
                  });
                }
                resolve(questionList);
                });
                
              
                
              });
              
        }
        </script>
        <script type=\"text/javascript\">
               \$(document).ready(function(){
                // Add minus icon for collapse element which is open by default
                \$(\".collapse.in\").each(function(){
                    \$(this).siblings(\".panel-heading\").find(\".glyphicon\").addClass(\"glyphicon-minus\").removeClass(\"glyphicon-plus\");
                });
                
                // Toggle plus minus icon on show hide of collapse element
                \$(\".collapse\").on('show.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-plus\").addClass(\"glyphicon-minus\");
                }).on('hide.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-minus\").addClass(\"glyphicon-plus\");
                });
            });
        </script>
        ";
        // line 390
        $this->displayBlock('javascripts', $context, $blocks);
        // line 391
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " QCM | Connection";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "            
        ";
    }

    // line 390
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baseLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 390,  481 => 18,  478 => 17,  473 => 13,  467 => 6,  462 => 5,  456 => 391,  454 => 390,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  70 => 20,  68 => 17,  61 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        {% block head %}{% endblock head%}  
        <title>{% block title %} QCM | Connection{% endblock %}</title>
        
        <link rel=\"stylesheet\"  href=\"{{ asset('dist/css/menu.css')}}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('bower_components/metisMenu/dist/metisMenu.min.css')}}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('dist/css/sb-admin-2.css')}}\" />
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            
        {% endblock %}
        
        <script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/angular.min.js') }}\"></script>
        <script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script src=\"https://www.gstatic.com/firebasejs/4.1.3/firebase.js\"></script>
    <script>
// Initialize Firebase
        var config = {
            apiKey: \"AIzaSyCivjrQFNOfG34OastuCXJ48r30oj-Me7s\",
            authDomain: \"qcmapp-4d7b3.firebaseapp.com\",
            databaseURL: \"https://qcmapp-4d7b3.firebaseio.com\",
            projectId: \"qcmapp-4d7b3\",
            storageBucket: \"qcmapp-4d7b3.appspot.com\",
            messagingSenderId: \"337461332108\"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '130561684208371',
                autoLogAppEvents: true,
                cookie: true,
                status: true,
                xfbml: true,
                version: 'v2.9'
            });
             
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    console.log(\"qsdf\");
                    console.log(response.status);
                    var uid = response.authResponse.userID;
                    var accessToken = response.authResponse.accessToken;
                } else if (response.status === 'not_authorized') {
                    console.log(response.status);
                   

                } else {

                }
            });


            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>
           
            \$(document).ready(function() {
                var max_fields      = 5;
                var wrapper         = \$(\"#container1\");
                var wrapper1         = \$(\"#container2\");
                var add_button      = \$(\"#add_form_field_reponse\");
                var add_category    = \$(\"#add_form_field_category\");
                var button_save     = document.getElementById(\"save\");
                var x = 1;
                
                
                \$(add_category).click(function(e){
                      e.preventDefault();
                      if(x < max_fields){
                        x++;
                        \$(wrapper1).append('<div class=\"padding\"><input class=\"form-control\" id=\"category\" type=\"text\"><a href=\"#\" id=\"enregistrer\" class=\"btn btn-primary btn-sm\">ajouter</a></div>'); //add input box
                      }
                });
                \$(add_button).click(function(e){
                    e.preventDefault();
                    if(x < max_fields){
                        x++;
                        console.log('valeur de x ' + x);
                        \$(wrapper).append('<div><input class=\"form-control \" id=\"reponse'+x+'\" type=\"text\"><label> <input type=\"checkbox\" id=\"isTrue'+x+'\"> isTrue</label> <a href=\"#\" id=\"delete\" class=\"btn btn-danger btn-sm\">Supprimer</a></div>'); //add input box
                    }
                  else
                  {
                  alert('5 est la limite')
                  }
                });
               
                \$(wrapper).on(\"click\",\"#delete\", function(e){
                    e.preventDefault(); \$(this).parent('div').remove(); x--;
                })
                \$(wrapper1).on(\"click\",\"#enregistrer\", function(e){
                    var category= document.getElementById('category').value;
                    var refCat = firebase.database().ref('category');
                    refCat.push({
                        category
                    });
                    e.preventDefault(); \$(this).parent('div').remove(); x--;
                    console.log('ajout category avec succès');


                });
                function insertAnswer(){
                    console.log('fonction insertAnswer ' + x);
                    var tabReponse = [];
                    for(var i = 1 ; i<= x; i++){
                         console.log(\"e f fjf jke fjuccesful\" + x);
                        tabReponse.push({
                            question : document.getElementById('reponse' + i).value,
                            isTrue : document.getElementById('isTrue' + i).checked
                        });                        
                        
                    }
                    
                };
                
                button_save.onclick = function(){
                    var choice_category = document.getElementById(\"categori\").value;
                    var question = document.getElementById('question').value;
                    getCategoryId(choice_category).then(function(id) {
                        addQuestion(id, question);
                         getQuestionId(question).then(function(id) {
                            console.log(\"id question \" + id);
                            var tabReponse = [];
                            for(var i = 1 ; i<= x; i++){
                                tabReponse.push({
                                    question : document.getElementById('reponse' + i).value,
                                    isTrue : document.getElementById('isTrue' + i).checked
                                });                        
                                
                            }
                            var refRep= firebase.database().ref('reponse');
                            for(var k = 0; k < tabReponse.length; k++){
                                refRep.push({
                                   questId :  id,
                                   value :  tabReponse[k].question,
                                   isTrue : tabReponse[k].isTrue
                                });
                            }
                            
                            
                        });
                     });
                    console.log(\"save succesful\" + x);
                    document.onload();
                }
                
                
            });

           

          const refCat = firebase.database().ref('category');

          refCat.on('value', function (data) {
            const resp = data.val();
            var cats = [];
            var i = 0;
            for(var prop in resp){
                cats[i] = resp[prop].name;
                i++;
                
            }
            //console.log('cats : ' + typeof cats);
            var result = cats.toString();
            //console.log('toString : ' + result);
            var categories = result.split(',');
            //console.log('voila : ' +  categories.length);
            
             
             \$(\"#container2\").append(generateOptions(categories));
             \$(\"#list_categorie\").append(generateUl(categories));
             var s = document.getElementById(\"categori\").value;
             var allQuestion = [];
             var allReponse = [];
            function getReponsesByQuestionId(questId){
               return new Promise(function(resolve, reject) {

                   var refRep = firebase.database().ref('reponse');
                    const ret = {};
                    refRep.orderByChild('questId').equalTo(questId).on('value', function (resp) {
                    var data = resp.val();

                    if (!data) {
                      resolve({});
                      return;
                    }
                    
                    const keys = Object.keys(data);
                    const reponses = keys.reduce((acc, key) => {
                      acc.push({
                        valeur: data[key].value,
                        isTrue: data[key].isTrue
                      });
                      return acc;
                    }, []);

                    ret[questId] = reponses;


                     });
                     return resolve(ret);
                });
            };
            function getReponsesByQuestionIds(questionList){
                console.log('zefef + ' + questionList);
                return Promise.all(questionList.map(function(question){
                    //
                    return getReponsesByQuestionId(question.id)
                }));
            };
            getCategoryId('DOTNET').then(function(id) {
                getQuestionByCategory(id).then(function(value){
                    console.log(\"rZFZEFJZE ZR ZRJ KFJAK¨J KJ KZDFJÄ KFJZHJZDC \");

                    if (value.length) {
                        for(var i = 0; i < value.length; i++){
                            var questionList = value[i].id;
                            var content_value = value[i].value;
                            console.log(\"reto n question \" + value);
                            var demo = getReponsesByQuestionIds(value);
                            console.log(\"test \" + demo);
                            getReponsesByQuestionIds(value).then(function(responseList){
                                
                                console.log(responseList);
                                
                                    const resp = responseList.reduce((acc, rep) => {
                                        const key = Object.keys(rep)[0];
                                        const arr = rep[key];

                                        acc[key] = arr;
                                        return acc;
                                      }, {});
                                      var mydata2 = {};
                                      mydata2.questions = [];
                                        console.log(resp);
                                      value.map((question) => {
                                        const dataQuestion = {};
                                        
                                        dataQuestion.value = question.value;
                                        dataQuestion.responses = resp[question.id];
                                        mydata2.questions.push(dataQuestion);
                                      });
                                      
                                    allQuestion.push({
                                        idQuestion : questionList,
                                        question : content_value

                                    });
                                console.log(allQuestion);
                                console.log(mydata2);
                                //\$(\"#dom_accordion\").append(generateAccordion(allQuestion));
                            });
                        }
                    }
                });
            });
             
             //
            
             var question = document.getElementById('question').value;             
            
          });
          function getQuestionId(question){
            var refQuestion = firebase.database().ref('question');
            return new Promise(function(resolve, reject){
               refQuestion.orderByChild('value').equalTo(question).on('value', function(data){
                   var ret;
                   for(var prop in data.val()){
                       ret = prop;
                   }
                   return resolve(ret);
               });
            });
          }
          function getCategoryId(name) {
            var refCat = firebase.database().ref('category');

            return new Promise(function(resolve, reject) {
                refCat.orderByChild('name').equalTo(name).on('value', function (data) {
                    var ret;
                    for (var prop in data.val()) {
                         ret = prop;
                    }
                    resolve(ret);
                });
            });
          }
          function getQuestionIds(questId) {
            var refQuestion= firebase.database().ref('question');

            return new Promise(function(resolve, reject) {
                refQuestion.orderByChild('categoryId').equalTo(questId).on('value', function (data) {
                    var ret = data.val();
                    var keys =[];

                    for (var key in data.val()) {
                         keys.push(key);
                    }
                    resolve(keys);
                });
            });
          }
         function generateOptions(array){
            var result = \"<select class='form-control' id='categori'>\";
            for(var j=0; j<array.length; j++){
                result += \"<option>\"+ array[j] + \"</option>\";
            }
             
            return result + \"</select>\";
         }
         function generateUl(array){
            var content = \"<ul class='nav nav-pills nav-stacked'>\";
            for(var j=0; j<array.length; j++){
                content += \" <li><a class='list-group-item'>\"+ array[j] + \"</a></li>\";
            }
             
            return content + \"</ul>\";
         }
         function generateAccordion(array){
            var content = \" \";
            var reponse_content = \"\";
            for(var j=0; j<array.length; j++){
                content += \"<div class='panel-group' id='accordion\"+j+\"'><div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion\"+j+\"' href='#collapseOne\"+j+\"'><span class='glyphicon glyphicon-plus'></span> \"+ array[j].question + \"</a></div> <div id='collapseOne\"+j+\"' class='panel-collapse collapse'> <div class='panel-body'> <p>\"+ array[j].question + \"</a></p> </div></div></div></div>\";
            }
             
            return content;
         }
         function getQuestionByCategory(categoryId){
            var refQuestion = firebase.database().ref('question');
           const questionList = [];
                return new Promise(function(resolve, reject) {
                    refQuestion.orderByChild('categoryId').equalTo(categoryId).on('value', function (resp) {
                const data = resp.val();

                for (const prop in data) {
                  questionList.push({
                    id: prop,
                    value: data[prop].value
                  });
                }
                resolve(questionList);
                });
                
              
                
              });
              
        }
        </script>
        <script type=\"text/javascript\">
               \$(document).ready(function(){
                // Add minus icon for collapse element which is open by default
                \$(\".collapse.in\").each(function(){
                    \$(this).siblings(\".panel-heading\").find(\".glyphicon\").addClass(\"glyphicon-minus\").removeClass(\"glyphicon-plus\");
                });
                
                // Toggle plus minus icon on show hide of collapse element
                \$(\".collapse\").on('show.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-plus\").addClass(\"glyphicon-minus\");
                }).on('hide.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-minus\").addClass(\"glyphicon-plus\");
                });
            });
        </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::baseLogin.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources\\views/baseLogin.html.twig");
    }
}
