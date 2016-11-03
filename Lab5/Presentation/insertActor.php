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
                
                $newActor = new Actor($_POST['firstName'],$_POST['lastName']);
                
                $result = $newActor->save();
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
