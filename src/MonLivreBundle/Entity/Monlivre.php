<?php

namespace MonLivreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;




/**
 * Monlivre
 *
 * @ORM\Table(name="monlivre")
 * Vich\Uploadable
 * @UniqueEntity(fields="NomCour", message="Une Cour existe déjà avec ce nom.")
 * @ORM\Entity
 */
class Monlivre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCour", type="string", length=50, nullable=false)
     */
    private $NomCour;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=false)
     */
    private $video;


    /**
     * @Vich\UploadableField(mapping="Monlivre", size="500000000k", fileNameProperty="video")
     * @var File
     */
    private $imageFile;



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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return File
     */

    /**
     * @return string
     */
    public function getNomCour()
    {
        return $this->NomCour;
    }

    /**
     * @param string $NomCour
     */
    public function setNomCour($NomCour)
    {
        $this->NomCour = $NomCour;
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
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }



}

