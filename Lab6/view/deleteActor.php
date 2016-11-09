<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Delete Actor</title>
    </head>
    <body>
        <h1>Delete Actor:</h1>
        <form id="formUpdate" name="formUpdate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
            <p>    
            Are you sure you wish to delete <?php echo $currentActor->getFirstName();?> <?php echo $currentActor->getLastName();?> from the actore table?
            </p>
            <input type="hidden" name="deleteActorId" id="deleteActorId" value="<?php echo $currentActor->getID();?>"/>
            <p> 
                <input type="submit" name="DeleteBtn" id="DeleteBtn" value="Delete" onclick="return confirm('Confirm Delete?')"/>
            </p>
        </form>
    </body>
</html>
