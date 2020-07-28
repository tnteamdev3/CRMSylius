<?php

namespace App\Entity\Task;

use Sylius\Component\Resource\Model\ResourceInterface;

interface TaskInterface extends ResourceInterface
{
	/**
	* @return mixed
	*/
    public function getNameTask();
    /**
	* @param mixed $name_task
	*/
    public function setNameTask(string $name_task);
	/**
	* @return mixed
	*/
    public function getDescription();
    /**
	* @param mixed $description
	*/
    public function setDescription(string $description);

	/**
	* @return mixed
	*/
    public function getStatus();
    /**
	* @param mixed $status
	*/
    public function setStatus(string $status);

	/**
	* @return mixed
	*/
    public function getProject();
    /**
	* @param mixed $projects
	*/
    public function setProject(Project $projects);    

}