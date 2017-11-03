<?php

namespace Qcm\QcmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        if($this->container->get('security.context')->getToken()->getUser() == NULL ){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $bareme=0;
        $em = $this->getDoctrine()->getManager();
        $key = rand(1, 10);$key2 = rand(1, 10);$key3 = rand(1, 10);$key4 = rand(1, 10);$key5 = rand(1, 10);$key6 = rand(1, 10);$key7 = rand(1, 10);$key8 = rand(1, 10);$key9 = rand(1, 10);$key10 = rand(1, 10);
        $random = rand(1, 10);
        $requete = $request->request->get('reponse');
        $cat = $request->request->get('categorie');
        $questionByCategorie  = $em->getRepository('QcmBundle:Question')->getListQuestionByCategories($cat);
        $categorie  = $em->getRepository('QcmBundle:Categories')->findAll();
        $taille_question=count($questionByCategorie);
        $cle = rand(1, 10);
        if(isset($cat)){
            echo 'voila categorie '.$cat;
        }
//        while($i<$taille_question){
//            $questions  = $em->getRepository('QcmBundle:Question')->byQuestion($cle);
//            $reponses  = $em->getRepository('QcmBundle:Reponse')->byQuestion($cle);
            $questionReponse = $em->getRepository('QcmBundle:ReponseExacte')->byQuestionReponse($cle);
            //$result=$questionReponse->getReponse()->getContenuReponse();
            $resultatQuestion=null;
            if(isset($requete)){
                echo 'voila '.$requete.' result'.$result.' categorie '.$cat;
                foreach ($questionByCategorie as $questionByCategories){
                    $resultatQuestion = $questionByCategories->getContenuQuestion();
                    echo $questionByCategories->getContenuQuestion();
                }
                
                if($result == $requete){
                    $bareme = $bareme +1;
                    echo 'note '.$bareme;
                }
                else{
                    echo 'note 0';
                }
                
            }
        
        
        $reponses  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key);$questions  = $em->getRepository('QcmBundle:Question')->byQuestion($key);
        $reponses2  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key3);$question2  = $em->getRepository('QcmBundle:Question')->byQuestion($key3);
        $reponses3  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key2);$question3  = $em->getRepository('QcmBundle:Question')->byQuestion($key2);
        $reponses4  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key4);$question4  = $em->getRepository('QcmBundle:Question')->byQuestion($key4);
        $reponses5  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key5);$question5  = $em->getRepository('QcmBundle:Question')->byQuestion($key5);
        $reponses6  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key6);$question6  = $em->getRepository('QcmBundle:Question')->byQuestion($key6);
        $reponses7  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key7);$question7  = $em->getRepository('QcmBundle:Question')->byQuestion($key7);
        $reponses8  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key8);$question8  = $em->getRepository('QcmBundle:Question')->byQuestion($key8);
        $reponses9  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key9);$question9  = $em->getRepository('QcmBundle:Question')->byQuestion($key9);
        $reponses10  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key10);$question10  = $em->getRepository('QcmBundle:Question')->byQuestion($key10);
       
            return $this->render('QcmBundle:Default:index.html.twig', array(
            'reponses' => $reponses, 'question' => $questions,
            'reponses2' => $reponses2, 'question2' => $question2,
            'reponses3' => $reponses3, 'question3' => $question3,
            'reponses4' => $reponses4, 'question4' => $question4,
            'reponses5' => $reponses5, 'question5' => $question5,
            'reponses6' => $reponses6, 'question6' => $question6,
            'reponses7' => $reponses7, 'question7' => $question7,
            'reponses8' => $reponses8, 'question8' => $question8,
            'reponses9' => $reponses9, 'question9' => $question9,
            'reponses10' => $reponses10, 'question10' => $question10,
            'categorie'=>$categorie,'questionReponse'=>$questionReponse,
            'questionByCategorie' =>$questionByCategorie,'cat'=>$cat,
            'resultatQuestion'=>$resultatQuestion,
            'random' => $random, 'requete' => $requete, 'bareme' => $bareme
            ));
//       
    }
    
    public function apiAction() {
        $response = new Response();
        $date = new \DateTime();

        $response->setContent(json_encode([
            'id' => uniqid(),
            'time' => $date->format("Y-m-d")
        ]));

        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    public function CategorieAction($idCategorie){
        
        $bareme=0;
        $em = $this->getDoctrine()->getManager();
        $questionByCategorie  = $em->getRepository('QcmBundle:Categories')->getListQuestionByCategories($idCategorie);
        $taille_question=count($questionByCategorie);
        $key = rand(1, $taille_question);
        for($i = 1 ; i<$taille_question;$i++){
            $questions  = $em->getRepository('QcmBundle:Question')->byQuestion($key);
            $reponses  = $em->getRepository('QcmBundle:Reponse')->byQuestion($key);
        }
         return $this->render('QcmBundle:Default:index.html.twig',array(
            'reponses' => $reponses
        ));
    }
    
    /*
     * 
     * - get = para que ele parametra solo pueda, pasarse por GET
     * - Question (sin "s") = para generar la ruta "/questions/PARAM
     * - Action = estandar de symfony2
     */
    public function webServiceAction($idCategorie){
        $em = $this->getDoctrine()->getManager();
        //$questionByCategorie  = $em->getRepository('QcmBundle:Question')->getListQuestionByCategories($idCategorie);
        $questionByCategorie  = $em->getRepository('QcmBundle:Question')->findAll();
        
//        var_dump($reponse);die();
        return array('questions'=>$questionByCategorie);
    }
}
