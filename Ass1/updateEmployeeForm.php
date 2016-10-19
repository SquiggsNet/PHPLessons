<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Current Employee</title>
    <script src="validForm.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<form id="employeeForm" name="employeeForm" action="executeEmployeeUpdate.php"  method="post" onsubmit="return validForm()">
    <p>
        <?php
        require_once 'dbConnect.php';
        $db = connectToDB();

        if(!empty($_POST['updateEmployeeID'])) {

            $id = $_POST['updateEmployeeID'];

            //step 2 - Sql statement (CRUD)
            $result = mysqli_query($db, "SELECT * FROM employees WHERE emp_no = $id ");
            if (!$result) {
                die("Query error: " . mysqli_error($db));
            }
            $employee = mysqli_fetch_assoc($result);
            mysqli_close($db);
        }
        ?>
        <label>First Name
            <input name="firstName" id="firstName" type="text" value="<?php echo $employee['first_name'] ?>" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="firstWarning"></span>
        </label>
    </p>
    <p>
        <label>Last Name
            <input name="lastName" id="lastName" type="text" value="<?php echo $employee['last_name'] ?>" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="lastWarning"></span>
        </label>
    </p>
    <p>
        <label>Birth Date
            <input name="birthDate" id="birthDate" type="text" value="<?php echo $employee['birth_date'] ?>" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="birthWarning"></span>
        </label>
    </p>
    <p>
        <label>Gender
            <input name="gender" id="gender" type="text" value="<?php echo $employee['gender'] ?>" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="genderWarning"></span>
        </label>
    </p>
    <p>
        <label>Hire Date
            <input name="hireDate" id="hireDate" type="text" value="<?php echo $employee['hire_date'] ?>" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="hireWarning"></span>
        </label>
    </p>
    <input name="employeeUpdateID" id="employeeUpdateID" type="hidden" value="<?php echo $employee['emp_no'] ?>"/>
    <p>
        <input type="submit" name="epdateEmployeeFormSubmit" value="Update Employee"/>
    </p>
</form>
<p><a href="employeeView.php">List Employees</a></p>
<form name="logOut" action="logOut.php" method="POST">
    <input type="submit" name="logOutButton" value="Log Out" />
</form>
</body>
</html>