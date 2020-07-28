<?php

namespace App\Entity\Companies;

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
     * @ORM\Column(type="integer")
    */
    private $phone;

    /**
     * @ORM\Column(type="date")
    */
    private $date_creation;

       /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contact\Contact", mappedBy="company")
     * 
     */
    private $contacts;


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
       
     
    public function setPhone(int $phone): self
        {
         $this->phone = $phone;

        return $this;
       }


    public function getDateCreation()
    {
        return $this->date_creation;
    }

    public function setDateCreation($date_creation): void
    {
        $this->date_creation = $date_creation;
    }
   

    /**
     * @return Collection|Contact[]
     */
    public function getContact(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contacts): self
    {
        if (!$this->contacts->contains($contacts)) {
            $this->contacts[] = $contacts;
            $contacts->setCompany($this);
        }

        return $this;
    }

    public function removeContact(Contact $contacts): self
    {
        if ($this->contacts->contains($contacts)) {
            $this->contacts->removeElement($contacts);
            // set the owning side to null (unless already changed)
            if ($contacts->getCompany() === $this) {
                $contacts->setCompany(null);
            }
        }

        return $this;
    }

    public function __toString(){
                                
        return $this->name_entreprise;
                                
          }


    }