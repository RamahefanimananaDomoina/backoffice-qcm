<?php

namespace Dex\DexBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Qcm\QcmBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UtilisateursRestController extends Controller
{
  /**
   * 
   * @param type $username
   * 
   * @View(serializerGroups={"Default","Details"})
   */
  public function getUserAction($username){
    $user = $this->getRepository('DexDexBundle:Utilisateurs')->findAll();
    
    if(!is_object($user)){
        throw $this->createNotFoundException();
    }
    
    return $user;
  }
  
  /**
   * 
   * @View(serializerGroups={"Default","Me","Details"})
   */
  public function getMeAction(){
    $this->forwardIfNotAuthenticated();
    return $this->getUser();
  }
  
  /**
   * @return array
   * @View()
   */
  public function getAllQuestionAction(){
    $em = $this->getDoctrine()->getManager();
    //$questionByCategorie  = $em->getRepository('QcmBundle:Question')->getListQuestionByCategories($idCategorie);
    $questionByCategorie  = $em->getRepository('QcmBundle:Question')->findAll();
//    return array("questionParCat"=>$questionByCategorie);
    return $questionByCategorie;
  }
  
   /**
   * @return array
   * @View()
   */
  public function getQuestionByCategorieAction($idCategorie){
     $em = $this->getDoctrine()->getManager();
    $questionByCategorie  = $em->getRepository('QcmBundle:Question')->getListQuestionByCategories($idCategorie);
    return $questionByCategorie;
  }
  /**
   * @param Categories $categorie
   * @return array
   * @View()
   * @ParamConverter("categorie", class="QcmQcmBndle:Question")
   */
  public function getQuestionByCategoriesAction(Categories $categorie){
    return array("categorie"=>$categorie);
  }

  /**
   * @return array
   * @View()
   */
  public function getAllCategorieAction(){
    $em = $this->getDoctrine()->getManager();
    $Categorie  = $em->getRepository('QcmBundle:Categories')->findAll();
     return $Categorie;
  }
  
  /**
   * @return array
   * @View()
   */
  public function getReponseExacteAction(){
    $em = $this->getDoctrine()->getManager();
    $reponseExacte  = $em->getRepository('QcmBundle:ReponseExacte')->findAll();
     return $reponseExacte;
  }
  
  /**
   * @return array
   * @View()
   */
  public function getReponseParQuestionAction($idQuestion){
    $em = $this->getDoctrine()->getManager();
    $reponseParQuestion  = $em->getRepository('QcmBundle:Reponse')->byQuestion($idQuestion);
     return $reponseParQuestion;
  }
  
  /**
   * @return array
   * @View()
   */
  public function getAllReponseAction(){
    $em = $this->getDoctrine()->getManager();
    $reponses  = $em->getRepository('QcmBundle:Reponse')->findAll();
     return $reponses;
  }
  /**
   * @return array
   * @View()
   */
  public function getAllUtilisateurAction(){
    $em = $this->getDoctrine()->getManager();
    $utilisateurs  = $em->getRepository('DexBundle:Utilisateurs')->findAll();
     return $utilisateurs;
  }
  
  /**
   * @return array
   * @View()
   */
  public function getReponseParQuestionParCategorieAction($categorie){
    $em = $this->getDoctrine()->getManager();
    $reponse  = $em->getRepository('QcmBundle:Categories')->getListQuestionByCategories($categorie);
//    $reponse  = $em->getRepository('QcmBundle:Categories')->getListReponseParQuestionParCategorie();
     return $reponse;
  }
  
  /**
   * Shortcut to throw a AccessDeniedException($message) if the user is not authenticated
   * @param String $message The message to display (default:'warn.user.notAuthenticated')
   */
  protected function forwardIfNotAuthenticated($message='warn.user.notAuthenticated'){
    if (!is_object($this->getUser()))
    {
        throw new AccessDeniedException($message);
    }
  }  
}

