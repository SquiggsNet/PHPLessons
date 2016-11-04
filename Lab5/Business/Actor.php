<?php

require_once '../Business/iBusinessObject.php';         //dgdfgdfggdfg
require_once '../Data/aDataAccess.php';                 //dgdfgdfggdfg

class Actor implements iBusinessObject
{
    private $actorId;
    private $firstName;
    private $lastName;


    public function __construct($in_fname,$in_lname)
    {
        $this->firstName = $in_fname;
        $this->lastName = $in_lname;
    }

    public function getID()
    {
        return ($this->actorId);
    }

    public function getFirstName()
    {
        return ($this->firstName);
    }

    public function getLastName()
    {
        return ($this->lastName);
    }

    public static function retrieveSome($start,$count, $search)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectActors($start,$count, $search);

        while($row = $myDataAccess->fetchActors())
        {
            $currentActor = new self($myDataAccess->fetchActorFirstName($row),
                $myDataAccess->fetchActorLastName($row));
            $currentActor->actorId = $myDataAccess->fetchActorID($row);
            $arrayOfActorObjects[] = $currentActor;
        }

        $myDataAccess->closeDB();

        return $arrayOfActorObjects;
    }

    public static function retrieveOne($id)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $myDataAccess->selectOneActor($id);

        $actor = $myDataAccess->fetchActors();

        $actorObject = new self($myDataAccess->fetchActorFirstName($actor), $myDataAccess->fetchActorLastName($actor));
        $actorObject->actorId = $myDataAccess->fetchActorID($actor);

        $myDataAccess->closeDB();

        return $actorObject;
    }

    public function save()
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $recordsAffected = $myDataAccess->insertActor($this->firstName,$this->lastName);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";

    }

    public function update($id)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $this->actorId = $id;

        $recordsAffected = $myDataAccess->updateActor($this->actorId,$this->firstName,$this->lastName);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";

    }

    public function delete($id)
    {
        $myDataAccess = aDataAccess::getInstance();
        $myDataAccess->connectToDB();

        $this->actorId = $id;

        $recordsAffected = $myDataAccess->deleteActor($this->actorId);

        $myDataAccess->closeDB();

        return "$recordsAffected row(s) affected!";

    }
}

?>
