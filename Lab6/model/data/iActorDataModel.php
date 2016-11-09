<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
interface iActorDataModel
{
    public function connectToDB();

    public function closeDB();

    public function selectActors($actorSearch);
    
    public function selectActorById($actorID);

    public function fetchActors();
    
    public function updateActor($actorID,$first_name,$last_name);

    // field access functions
    public function fetchActorID($row);

    public function fetchActorFirstName($row);

    public function fetchActorLastName($row);

    public function insertActor($fName,$lName);

    public function deleteActor($actorID);

}
?>
