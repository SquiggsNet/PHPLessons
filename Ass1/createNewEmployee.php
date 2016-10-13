<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Employee</title>
    <style type="text/css">
        table, th, td{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <?php
    require_once 'dbConnect.php';
    $db = connectToDB();

    if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['birthDate'])
        && !empty($_POST['gender']) && !empty($_POST['hireDate'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $hireDate = $_POST['hireDate'];

        //step 2 - Sql statement (CRUD)
        $result = mysqli_query($db, "INSERT INTO employees(first_name, last_name, birth_date,
        gender, hire_date) VALUES('$firstName','$lastName','$birthDate','$gender','$hireDate')");
        if (!$result) {
            die("Query error: " . mysqli_error($db));
        }else{
            echo "<p>Successfully created " . mysqli_affected_rows($db) . " employee(s).</p>";
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