<?php

namespace App\Entity\Companies;

use Sylius\Component\Resource\Model\ResourceInterface;

interface CompaniesInterface extends ResourceInterface
{
	/**
	* @return mixed
	*/
    public function getNameEntreprise();
    /**
	* @param mixed $name_entreprise
	*/
    public function setNameEntreprise(string $name_entreprise);
	/**
	* @return mixed
	*/
    public function getEmail();
    /**
	* @param mixed $email
	*/
    public function setEmail(string $email);

	/**
	* @return mixed
	*/
    public function getPhone();
    /**
	* @param mixed $phone
	*/
    public function setPhone(int $phone);

 	/**
	* @return mixed
	*/
    public function getDateCreation();
    /**
	* @param mixed $date_creation
	*/
    public function setDateCreation(date $date_creation);
}