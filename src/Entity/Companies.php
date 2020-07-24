<?php

namespace App\Entity;

use App\Repository\CompaniesRepository;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;
/**
 * @ORM\Entity(repositoryClass=CompaniesRepository::class)
 */
class Companies implements CompaniesInterface
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
    private $name_entreprise;
    
    /**
     * @ORM\Column(type="string", length=180, unique=true)
    */
    private $email;

    /**
     * @ORM\Column(type="int")
    */
    private $phone;

    /**
     * @ORM\Column(type="date")
    */
    private $date_creation;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEntreprise(): ?string
    {
        return $this->name_entreprise;
    }

    public function setNameEntreprise(string $name_entreprise): self
    {
        $this->name_entreprise = $name_entreprise;

        return $this;
    }

   public function getEmail(): ?string
        {
           return $this->email;
       }
     
    public function setEmail(string $email): self
        {
         $this->email = $email;

        return $this;
        }
    public function getPhone(): ?int
        {
           return $this->phone;
        }
      
     
    public function setPhone(string $phone): self
        {
         $this->phone = $phone;

        return $this;
        }

    public function getDateCreation(): ?date
    {
           return $this->date_creation;
       }
     
    public function setDateCreation(string $date_creation): self
        {
         $this->date_creation = $date_creation;

        return $this;
        }
    public function __toString(){
                                
        return $this->name_entreprise;
                                
          }


    }