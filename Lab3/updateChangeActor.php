<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 3 - Actor</title>
        <script src="validForm.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="updateActor" name="updateActor" action="updateActor.php"  method="post" onsubmit="return validForm()">
            <p>
                <?php
                    require_once 'dbConnect.php';
                    $db = connectToDB();

                    if(!empty($_POST['actorUpdateID'])) {

                        $id = $_POST['actorUpdateID'];

                        //step 2 - Sql statement (CRUD)
                        $result = mysqli_query($db, "SELECT * FROM actor WHERE actor_id = $id ");
                        if (!$result) {
                            die("Query error: " . mysqli_error($db));
                        }
                        $actor = mysqli_fetch_assoc($result);
                        mysqli_close($db);
                    }
                ?>
                <label>First Name:
                    <input name="firstName" id="firstName" type="text" value="<?php echo $actor['first_name'] ?>"/>
                </label>
            </p>
            <p>
                <label>Last Name:
                    <input name="lastName" id="lastName" type="text" value="<?php echo $actor['last_name'] ?>"/>
                </label>
            </p>
                <input name="actorUpdateID" id="actorUpdateID" type="hidden" value="<?php echo $actor['actor_id'] ?>"></input>
            <p>
                <input type="submit" name="Update"/>
            </p>
        </form>
        <p><a href="actor.php">Back to Actor List</a></p>
    </body>
</html>
