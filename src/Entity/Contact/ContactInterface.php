<?php

namespace App\Entity\Contact;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ContactInterface extends ResourceInterface
{
	/**
	* @return mixed
	*/
    public function getfirstNameContact();
    /**
	* @param mixed $firstname_contact
	*/
    public function setfirstNameContact(string $firstname_contact);
	/**
	* @return mixed
	*/
    public function getlastNameContact();
    /**
	* @param mixed $lastname_contact
	*/
    public function setlastNameContact(string $lastname_contact);

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

}