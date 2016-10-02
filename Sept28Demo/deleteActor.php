<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Actor Page</title>
</head>
<body>
<?php
if(!empty($_POST['idToDelete']))
{
    //Step 1 - Connect
    $db = mysqli_connect("localhost","root","inet2005","sakila");

    if(!$db){
        die("Connection error: " . mysqli_connect_error());
    }

    //step 2 - Sql statement (insert)
    $idToDelete = $_POST['idToDelete'];
    $result = mysqli_query($db,"DELETE FROM actor WHERE actor_id = '$idToDelete'");

    //Step 3 - Display whether it worked or not
    if(!$result){
        die("Delete query error: " . mysqli_error($db));
    }else{
        echo "Rows affected: " . mysqli_affected_rows($db);
    }


    //Step 3 or 4 - Close connection
    mysli_close($db);
}else{
    echo "<p>Nothing to do</p>";
}

?>
</body>
</html>