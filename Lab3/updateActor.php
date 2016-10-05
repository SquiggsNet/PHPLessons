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

            if(!empty($_POST['firstName']) && !empty($_POST['lastName'])) {
                $updateID = $_POST['actorUpdateID'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];

                $result = mysqli_query($db,"UPDATE actor SET first_name = '$firstName', last_name = '$lastName' where actor_id = '$updateID'");

                //Step 3 - Display whether it worked or not
                if(!$result){
                    die("Update query error: " . mysqli_error($db));
                }else{
                    echo "Successfully updated " . mysqli_affected_rows($db) . " record(s).";
                }
            }
            mysqli_close($db);
        ?>
        <p><a href="actor.php">Back to Actor List</a></p>
    </body>
</html>