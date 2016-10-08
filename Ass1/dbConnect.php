<?php
    function connectToDB()
    {
        $dbConn = mysqli_connect("localhost","root","inet2005","employees");
        if(!$dbConn)
        {
            die('Could not connect to the Employee Datase: ' .mysqli_connect_error());
        }

        return $dbConn;
    }
?>

