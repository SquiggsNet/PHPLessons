<?php

require_once '../controller/ActorController.php';

$actController = new ActorController();

if(isset($_GET['idUpdate']))
{
    $actController->updateAction($_GET['idUpdate']);
}
elseif (isset($_POST['UpdateBtn']))
{
    $actController->commitUpdateAction($_POST['editActorId'],$_POST['firstName'],$_POST['lastName']);
}
else
{
    $actController->displayAction();
}

?>