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
}else if(isset($_GET['insertActor']))
{
    $actController->insertAction();
}
elseif (isset($_POST['InsertBtn']))
{
    $actController->commitInsertAction($_POST['firstName'],$_POST['lastName']);
}
elseif(isset($_GET['idDelete']))
{
    $actController->deleteAction($_GET['idDelete']);
}
elseif (isset($_POST['DeleteBtn']))
{
    $actController->commitDeleteAction($_POST['deleteActorId']);
}
else
{

    if(!empty($_POST['search'])) {
        $userSearch = $_POST['search'];
    }else{
        $userSearch = "";
    }

    $actController->displayAction($userSearch);
}

?>