<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/data/iActorDataModel.php';
class PDOMySQLActorDataModel implements iActorDataModel
{

    private $dbConnection;
    private $result;
    private $stmt;

    // iCustomerDataAccess methods
    public function connectToDB()
    {
        try
        {
            $this->dbConnection = new PDO("mysql:host=localhost;dbname=sakila","root","inet2005");
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex)
        {
            die('Could not connect to the Sakila Database via PDO: ' . $ex->getMessage());
        }
    }

    public function closeDB()
    {
        // set a PDO connection object to null to close it
        $this->dbConnection = null;
    }

    public function selectActors($actorSearch)
    {
        // hard-coding for first ten rows
        $start = 0;
        $count = 10;

        $selectStatement = "SELECT * FROM actor";
        if($actorSearch!=null){
            $selectStatement .= " WHERE first_name LIKE :search OR last_name LIKE :search";
        }
        $selectStatement .= " LIMIT :start,:count;";

        try
        {
            $this->stmt = $this->dbConnection->prepare($selectStatement );
            $this->stmt->bindParam(':start', $start, PDO::PARAM_INT);
            $this->stmt->bindParam(':count', $count, PDO::PARAM_INT);
            if($actorSearch!=null){
                $this->stmt->bindParam(':search', $actorSearch, PDO::PARAM_STR);
            }
            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
        }

    }
    
    public function selectActorById($actorID)
    {
        $selectStatement = "SELECT * FROM actor";
        $selectStatement .= " WHERE actor.actor_id = :actorID;";

        try
        {
            $this->stmt = $this->dbConnection->prepare($selectStatement);
            $this->stmt->bindParam(':actorID', $actorID, PDO::PARAM_INT);

            $this->stmt->execute();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
        }
    }
    

    public function fetchActors()
    {
        try
        {
            $this->result = $this->stmt->fetch(PDO::FETCH_ASSOC);
            return $this->result;
        }
        catch(PDOException $ex)
        {
            die('Could not retrieve from Sakila Database via PDO: ' . $ex->getMessage());
        }
    }
    
    public function updateActor($actorID, $first_name, $last_name)
    {
        $updateStatement = "UPDATE actor";
        $updateStatement .= " SET first_name = :firstName,last_name=:lastName";
        $updateStatement .= " WHERE actor_id = :actorID;";

        try
        {
            $this->stmt = $this->dbConnection->prepare($updateStatement);
            $this->stmt->bindParam(':firstName', $first_name, PDO::PARAM_STR);
            $this->stmt->bindParam(':lastName', $last_name, PDO::PARAM_STR);
            $this->stmt->bindParam(':actorID', $actorID, PDO::PARAM_INT);

            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
        }
    }
    
    public function fetchActorID($row)
    {
       return $row['actor_id'];
    }

    public function fetchActorFirstName($row)
    {
       return $row['first_name'];
    }

    public function fetchActorLastName($row)
    {
       return $row['last_name'];
    }

    public function insertActor($fName, $lName)
    {

        $insertStatement = "INSERT INTO actor";
        $insertStatement .= " (first_name,last_name) VALUES(:firstName, :lastName)";
        try
        {
            $this->stmt = $this->dbConnection->prepare($insertStatement);
            $this->stmt->bindParam(':firstName', $fName, PDO::PARAM_STR);
            $this->stmt->bindParam(':lastName', $lName, PDO::PARAM_STR);

            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not insert record into Sakila Database via PDO: ' . $ex->getMessage());
        }
    }

    public function deleteActor($actorID){

        $deleteStatement = "DELETE FROM actor";
        $deleteStatement .= " WHERE actor_id = :id";
        try
        {
            $this->stmt = $this->dbConnection->prepare($deleteStatement);
            $this->stmt->bindParam(':id', $actorID, PDO::PARAM_INT);

            $this->stmt->execute();

            return $this->stmt->rowCount();
        }
        catch(PDOException $ex)
        {
            die('Could not delete record into Sakila Database via PDO: ' . $ex->getMessage());
        }

    }

}

?>
