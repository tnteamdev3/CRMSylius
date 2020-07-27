<?php

namespace App\Entity\Project;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project implements ProjectInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_project;

    /**
     * @ORM\Column(type="date")
    */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
    */
    private $date_fin;



    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNameProject(): ?string
    {
        return $this->name_project;
    }

    public function setNameProject(string $name_project): self
    {
        $this->name_project = $name_project;

        return $this;
    }


    public function getDateDebut(): ?date
    {
           return $this->date_debut;
       }
     
    public function setDateDebut(date $date_debut): self
        {
         $this->date_debut = $date_debut;

        return $this;
        }

    public function getDateFin(): ?date
    {
           return $this->date_fin;
       }
     
    public function setDateFin(date $date_fin): self
        {
         $this->date_fin = $date_fin;

        return $this;
        }


    public function __toString(){
                                
        return $this->name_entreprise;
                                
          }

}
