<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Varify Delete</title>
</head>
<body>
    <?php
        require_once 'dbConnect.php';
        $db = connectToDB();

        if (!empty($_POST['deleteEmployeeID'])){
            $deleteID = $_POST['deleteEmployeeID'];
            $result = mysqli_query($db,"SELECT * FROM employees WHERE emp_no = '$deleteID'");

            if(!$result){
                die("Select query error: " . mysqli_error($db));
            }
            $employee = mysqli_fetch_assoc($result);
            mysqli_close($db);
            }
    ?>
    <p>Would you like to delete <?php echo $employee['first_name'] . " " . $employee['last_name'] ?> </p>

    <form id='deleteEmployee' name='deleteEmployee' action='executeDeleteEmployee.php'  method='post'>
        <input type="submit" name="submitDelete" value="Delete" />
        <input type="hidden" name="deleteEmployeeID" value="<?php echo $employee['emp_no']?>" />
    </form>

        <p> Back to <a href="employeeView.php">Employees</a></p>


<form name="logOut" action="logOut.php" method="POST">
    <input type="submit" name="logOutButton" value="Log Out" />
</form>
</body>
</html>