<!DOCTYPE html>
<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Current Employee</title>
</head>
<body>
<?php
require_once 'dbConnect.php';
$db = connectToDB();

if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['birthDate'])
    && !empty($_POST['gender']) && !empty($_POST['hireDate']) && !empty($_POST['employeeUpdateID'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];
    $hireDate = $_POST['hireDate'];
    $employeeID = $_POST['employeeUpdateID'];


    $result = mysqli_query($db,"UPDATE employees SET first_name = '$firstName', last_name = '$lastName' , birth_date = '$birthDate', gender = '$gender', hire_date = '$hireDate' where emp_no = '$updateID'");

    //Step 3 - Display whether it worked or not
    if(!$result){
        die("Update query error: " . mysqli_error($db));
    }else{
        echo "Successfully updated " . mysqli_affected_rows($db) . " record(s).";
    }
}
mysqli_close($db);
?>
<p><a href="employeeView.php">List Employees</a></p>
<form name="logOut" action="logOut.php" method="POST">
    <input type="submit" name="logOutButton" value="Log Out" />
</form>
</body>
</html>