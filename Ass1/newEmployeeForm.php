<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Employee</title>
    <script src="validForm.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<form id="employeeForm" name="employeeForm" action="createNewEmployee.php"  method="post" onsubmit="return validForm()">
    <p>
        <label>First Name
            <input name="firstName" id="firstName" type="text" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="firstWarning"></span>
        </label>
    </p>
    <p>
        <label>Last Name
            <input name="lastName" id="lastName" type="text" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="lastWarning"></span>
        </label>
    </p>
    <p>
        <label>Birth Date
            <input name="birthDate" id="birthDate" type="text" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="birthWarning"></span>
        </label>
    </p>
    <p>
        <label>Gender
            <input name="gender" id="gender" type="text" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="genderWarning"></span>
        </label>
    </p>
    <p>
        <label>Hire Date
            <input name="hireDate" id="hireDate" type="text" onFocus="hilightItalicText(this.id)" onBlur="normalText(this.id)" required/><span id="hireWarning"></span>
        </label>
    </p>
    <p>
        <input type="submit" name="Submit Search" value="Add New Employee"/>
    </p>
</form>
<p><a href="employeeView.php">List Employees</a></p>
<form name="logOut" action="logOut.php" method="POST">
    <input type="submit" name="logOutButton" value="Log Out" />
</form>
</body>
</html>