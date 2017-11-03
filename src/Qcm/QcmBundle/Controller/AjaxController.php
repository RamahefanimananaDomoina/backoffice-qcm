<?php

namespace Qcm\QcmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends Controller {

    public function indexAction(Request $request) {
        $requete = $request->request->get('reponse');
//        $reponse=$requete;
//        var_dump($reponse);
        var_dump($requete);
        die();
            if(isset($request)){
                //$val= $request->request->get('reponse');
                echo $request;
                
            }
            else {
                echo 'ca marche pas';
            }
             return $requete;
    }
    
    public function  reponseAction(){
        
    }

}
