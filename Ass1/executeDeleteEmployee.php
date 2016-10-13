<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Employee</title>
</head>
<body>
<?php
require_once 'dbConnect.php';
$db = connectToDB();

if (!empty($_POST['deleteEmployeeID'])){
    $deleteID = $_POST['deleteEmployeeID'];
    $result = mysqli_query($db,"DELETE FROM employees WHERE emp_no = '$deleteID'");

    //Step 3 - Display whether it worked or not
    if(!$result){
        die("Delete query error: " . mysqli_error($db));
    }else{
        echo "Successfully deleted " . mysqli_affected_rows($db) . " record(s).";
    }
}
mysqli_close($db);
?>
<p><a href="employeeView.php">List Employees</a></p>
</body>
</html>