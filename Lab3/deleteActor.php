<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 3 - Actor</title>
    </head>
    <body>
        <?php
            require_once 'dbConnect.php';
            $db = connectToDB();

            if (!empty($_POST['actorDeleteID'])){
                $deleteID = $_POST['actorDeleteID'];
                $result = mysqli_query($db,"DELETE FROM actor WHERE actor_id = '$deleteID'");

                //Step 3 - Display whether it worked or not
                if(!$result){
                    die("Delete query error: " . mysqli_error($db));
                }else{
                    echo "Successfully deleted " . mysqli_affected_rows($db) . " record(s).";
                }
            }
            mysqli_close($db);
            ?>
        <p><a href="actor.php">Back to Actor List</a></p>
    </body>
</html>