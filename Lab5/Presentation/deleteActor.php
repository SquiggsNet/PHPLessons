<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Delete Actor</title>
    </head>
    <body>
        <?php
         
            $result = "";

            if(!empty($_POST['deleteActorID']))
            {
                require("../Business/Actor.php");

                $deleteID = $_POST['deleteActorID'];

                $deleteActor = new Actor('','');

                $result = $deleteActor->update($deleteID);
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
