<?php

namespace Qcm\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qcm\QcmBundle\Entity\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="contenu_reponse", type="string", length=255)
     */
    private $contenuReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


    /**
     *@ORM\ManyToOne(targetEntity="Qcm\QcmBundle\Entity\Question", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false) 
     */
    
    private $question;
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
     * Set contenuReponse
     *
     * @param string $contenuReponse
     * @return Reponse
     */
    public function setContenuReponse($contenuReponse)
    {
        $this->contenuReponse = $contenuReponse;
    
        return $this;
    }

    /**
     * Get contenuReponse
     *
     * @return string 
     */
    public function getContenuReponse()
    {
        return $this->contenuReponse;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Reponse
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set question
     *
     * @param \Qcm\QcmBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\Qcm\QcmBundle\Entity\Question $question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return \Qcm\QcmBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}