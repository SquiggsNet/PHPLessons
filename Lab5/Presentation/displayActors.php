<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Actors</title>
        <style type="text/css">
            table
            {
               border: 2px solid purple;
            }
            th, td
            {
               border: 1px solid indigo;
            }
        </style>
    </head>
    <body>
    <?php
        if(!empty($_POST)) {
            $userSearch = $_POST['search'];
        }else{
            $userSearch = "";
        }
    ?>
        <form id="search" name="search" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <p>
            <h3>Search First & Last Name From DataBase:</h3>
            <label>Search:
                <input name="search" type="text" value="<?php echo $userSearch ?>" />
            </label>
            <input type="submit" name="submitSearch" value="Search"/>
            </p>
        </form>
        <h2>Current Actors:</h2>
        <table>
            <thead>
                <tr>
                    <td>Actor ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("../Business/Actor.php");

                    $arrayOfActors = Actor::retrieveSome(0,10,$userSearch);

                    foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr>
                            <td><?php echo $actor->getID(); ?></td>
                            <td><?php echo $actor->getFirstName(); ?></td>
                            <td><?php echo $actor->getLastName(); ?></td>
                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
        </table>
        <form id="deleteActor" name="deleteActor" action="deleteActor.php"  method="post">
            <p>
                <label>ID to Delete:
                    <input name="actorDeleteID" id="actorDeleteID" type="text"/>
                </label>
            </p>
            <p>
                <input type="submit" name="Delete"/>
            </p>
        </form>
        <form id="updateActor" name="updateActor" action="updateActorForm.php"  method="post">
            <p>
                <label>ID to Update:
                    <input name="actorUpdateID" id="actorUpdateID" type="text"/>
                </label>
            </p>
            <p>
                <input type="submit" name="Delete"/>
            </p>
        </form>

        <a href="newActorForm.html">Add an Actor/Actress</a>
    </body>
</html>
