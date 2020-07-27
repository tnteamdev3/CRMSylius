<?php

namespace App\Entity\Project;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ProjectInterface extends ResourceInterface
{
	/**
	* @return mixed
	*/
    public function getNameProject();
    /**
	* @param mixed $name_project
	*/
    public function setNameProject(string $name_project);

 	/**
	* @return mixed
	*/
    public function getDateDebut();
    /**
	* @param mixed $date_debut
	*/
    public function setDateDebut(date $date_debut);

    /**
	* @return mixed
	*/
    public function getDateFin();
    /**
	* @param mixed $date_fin
	*/
    public function setDateFin(date $date_fin);
}