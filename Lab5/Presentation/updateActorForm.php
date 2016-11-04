<!DOCTYPE html>
<html>
    <head>
        <title>Update Actor Information</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>

        <?php
        require("../Business/Actor.php");

        if(!empty($_POST['actorUpdateID'])){
            $id = $_POST['actorUpdateID'];

            $actor = Actor::retrieveOne($id);
        }
        ?>

        <form id="form2" name="form2" method="post" action="updateActor.php">
            <p>
                <label>First Name: <input type="text" name="firstName" id="firstName"  value="<?php echo $actor->getFirstName()?>"/> </label>
            </p>
            <p>
                <label>Last Name:<input type="text" name="lastName" id="lastName"  value="<?php echo $actor->getLastName()?>"/></label>
            </p>
            <input name="actorUpdateID" id="actorUpdateID" type="hidden" value="<?php echo $actor->getID(); ?>">
            <p>
                <input type="submit" name="submit" id="submit" value="Submit" />
            </p>
    </form>
    </body>
</html>

