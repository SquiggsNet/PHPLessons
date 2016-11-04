<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Insert Actor</title>
    </head>
    <body>
        <?php
         
            $result = "";

            if(!empty($_POST['firstName']) && !empty($_POST['lastName']))
            {
                require("../Business/Actor.php");

                $updateID = $_POST['actorUpdateID'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];


                $updatedActor = new Actor($firstName,$lastName);


                $result = $updatedActor->update($updateID);
            }
            else
            {
                $result = "Nothing to do!";
            }
            ?>

        <h1><?php echo $result; ?></h1>
        <a href="displayActors.php">Back to Display</a>
    </body>
</html>
