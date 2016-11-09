<?php

require_once('../model/ActorModel.php');

class ActorController
{
    public $model;
    
    public function __construct()
    {
        $this->model = new ActorModel();
    }
    
    public function displayAction($actorSearch)
    {
        $arrayOfActors = $this->model->getAllActors($actorSearch);

        include '../view/displayActors.php';
    }

    public function updateAction($actorID)
    {
        $currentActor = $this->model->getActor($actorID);

        include '../view/editActor.php';
    }

    public function commitUpdateAction($actorID,$fName,$lName)
    {
        $lastOperationResults = "";

        $currentActor = $this->model->getActor($actorID);

        $currentActor->setFirstName($fName);
        $currentActor->setLastName($lName);

        $lastOperationResults = $this->model->updateActor($currentActor);

        $arrayOfActors = $this->model->getAllActors("");

        include '../view/displayActors.php';
    }

    public function insertAction()
    {
        include '../view/insertActor.php';
    }

    public function commitInsertAction($fName,$lName)
    {
        $lastOperationResults = "";

        $lastOperationResults = $this->model->insertActor($fName,$lName);

        $arrayOfActors = $this->model->getAllActors("");

        include '../view/displayActors.php';
    }
}

?>
