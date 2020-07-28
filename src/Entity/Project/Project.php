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


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Task\Task", mappedBy="projects")
     * 
     */
    private $tasks;


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


    /**
     * @return Collection|Task[]
     */
    public function getTask(): Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $tasks): self
    {
        if (!$this->tasks->contains($tasks)) {
            $this->tasks[] = $tasks;
            $tasks->setProject($this);
        }

        return $this;
    }

    public function removeTask(Task $tasks): self
    {
        if ($this->tasks->contains($tasks)) {
            $this->tasks->removeElement($tasks);
            // set the owning side to null (unless already changed)
            if ($tasks->getProject() === $this) {
                $tasks->setProject(null);
            }
        }

        return $this;
    }


    public function __toString(){
                                
        return $this->name_entreprise;
                                
          }

}
