<?php

namespace Qcm\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qcm\QcmBundle\Entity\QuestionRepository")
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_question", type="string", length=255)
     */
    private $contenuQuestion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;


    /**
     *@ORM\ManyToOne(targetEntity="Qcm\QcmBundle\Entity\Categories", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false) 
     */
    
    private $categorie;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenuQuestion
     *
     * @param string $contenuQuestion
     * @return Question
     */
    public function setContenuQuestion($contenuQuestion)
    {
        $this->contenuQuestion = $contenuQuestion;
    
        return $this;
    }

    /**
     * Get contenuQuestion
     *
     * @return string 
     */
    public function getContenuQuestion()
    {
        return $this->contenuQuestion;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Question
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set categorie
     *
     * @param \Qcm\QcmBundle\Entity\Categories $categorie
     * @return Question
     */
    public function setCategorie(\Qcm\QcmBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Qcm\QcmBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}