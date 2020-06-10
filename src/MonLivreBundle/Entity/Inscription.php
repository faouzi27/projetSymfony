<?php

namespace MonLivreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="MonLivreBundle\Repository\InscriptionRepository")
 */
class Inscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var \MonLivreBundle\Entity\Matieremonlivre
     *
     * @ORM\ManyToOne(targetEntity="\MonLivreBundle\Entity\Matieremonlivre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Matieremonlivre", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $matiere;

    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $idUser;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Matieremonlivre
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param Matieremonlivre $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }


}

