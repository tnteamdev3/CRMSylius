<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task implements TaskInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name_task;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @var ENUM
     *
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('Not Started Yet', 'In Process', 'Done')")
     */
    private $status;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTask(): ?string
    {
        return $this->name_task;
    }

    public function setNameTask(string $name_task): self
    {
        $this->name_task = $name_task;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

      public function __toString(){
               
        return (string)$this->name_task;
                                               
      }
      
    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
  
}
