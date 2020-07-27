<?php

namespace App\Entity\Bank;

use App\Repository\BankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BankRepository::class)
 */
class Bank
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
    private $name_bank;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNameBank(): ?string
    {
        return $this->name_bank;
    }

    public function setNameBank(string $name_bank): self
    {
        $this->name_bank = $name_bank;

        return $this;
    }
}
