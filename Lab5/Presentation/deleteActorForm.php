<!DOCTYPE html>
<html>
    <head>
        <title>Update Actor Information</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>

        <?php
        require("../Business/Actor.php");

        if(!empty($_POST['actorDeleteID'])){
            $id = $_POST['actorDeleteID'];

            $actor = Actor::retrieveOne($id);
        }
        ?>
            <p>Would you like to delete <?php echo $actor->getFirstName() . " " . $actor->getLastName() ?> </p>

        <form id='deleteActor' name='deleteActor' action='deleteActor.php'  method='post'>
            <input type="submit" name="submitDelete" value="Delete" />
            <input type="hidden" name="deleteActorID" value="<?php echo $actor->getID(); ?>">
        </form>
    </body>
</html>

