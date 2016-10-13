<?php

    session_start();
    ob_start();

    require_once 'dbConnect.php';
    $db = connectToDB();

    $userName = $_POST['loginName'];
    $userPwd = $_POST['loginPwd'];

    $userName = stripslashes($userName);
    $userPwd = stripslashes($userPwd);
    $userName = mysqli_real_escape_string($db,$userName);
    $userPwd = mysqli_real_escape_string($db,$userPwd);

    $sqlStatement = "SELECT * FROM users WHERE user_name='$userName' and user_pwd='$userPwd'";

    $result = mysqli_query($db,$sqlStatement);

    $count=mysqli_num_rows($result);

    mysqli_close($db);

    if($count==1){
        $_SESSION['loginName'] = $userName;
        header("Location:employeeView.php");
    }else{
        echo "Wrong Username or Password!";
        echo "</br>";
        echo "<a href='userLogin.html'>Try Again</a>";
    }

    ob_end_flush();
?>