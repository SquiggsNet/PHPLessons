<?php
    function connectToDB()
    {
        $dbConn = mysqli_connect("localhost","root","inet2005","sakila");
        if(!$dbConn)
        {
            die('Could not connect to the Sakila Datase: ' .mysqli_connect_error());
        }

        return $dbConn;
    }
?>