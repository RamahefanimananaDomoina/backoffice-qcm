<?php

namespace Qcm\QcmBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * CategoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriesRepository extends EntityRepository
{
    public function getListQuestionByCategories($categorie) {
//        var_dump($categorie);die();
        $rawSql = "SELECT categories.nomCategorie, question.id as id_question, question.contenu_question, reponse.contenu_reponse FROM categories INNER JOIN question ON categories.id=question.categorie_id INNER JOIN reponse ON question.id=reponse.question_id WHERE categories.nomCategorie='$categorie'";
//        var_dump($rawSql);die();
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        
        $stmt->execute([]);
//        $tabs=$stmt->fetchAll();
//        $reponses = [];
//        for($i=0;$i<count($tabs);$i++){
//            
//          $reponses[$i]=$tabs[$i]["contenu_reponse"];
//         
//            //var_dump($tabs[$i]["contenu_reponse"]);
//        }
//       
//        var_dump($reponses);
//        die();
        

        return $stmt->fetchAll();
    }
    
    public function getListReponseParQuestionParCategorie(){
        //$qb = $this->createQueryBuilder('SELECT categories.nomCategorie, question.contenu_question, reponse.contenu_reponse FROM categories INNER JOIN question ON categories.id=question.categorie_id INNER JOIN reponse ON question.id=reponse.question_id');
          $qb = $this->getEntityManager()
                  ->createQueryBuilder()
                  ->select('categories.nomCategorie, question.contenu_question, reponse.contenu_reponse')
                  ->from('QcmBundle:Categories', 'c')
                  ->innerJoin('c.id', 'cc')
                  ->innerJoin('cc.', $alias);
        return $qb->getQuery()->getResult();
    }

}