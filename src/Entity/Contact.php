<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact implements ContactInterface
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
    private $firstname_contact;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname_contact;
 
   /**
     * @ORM\Column(type="string", length=180, unique=true)
    */
    private $email;
    /**
     * @ORM\Column(type="int")
    */
    private $phone;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getfirstNameContact(): ?string
    {
        return $this->firstname_contact;
    }

    public function setfirstNameContact(string $firstname_contact): self
    {
        $this->firstname_contact = $firstname_contact;

        return $this;
    }


    public function getlastNameContact(): ?string
    {
        return $this->lastname_contact;
    }

    public function setlastNameContact(string $lastname_contact): self
    {
        $this->lastname_contact = $lastname_contact;

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
       
     
    public function setPhone(int $phone): self
        {
         $this->phone = $phone;

        return $this;
       }

    public function __toString(){
                                
        return $this->firstname_contact;
                                
          }


    }