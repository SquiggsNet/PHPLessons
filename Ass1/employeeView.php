<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employees</title>
        <style type="text/css">
            table, th, td{
                border: 1px solid indigo;
            }
            button{
                font-size: 25px;
            }
            form {display: inline}
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <?php

            $direction = $_POST['direction'];


            if(!empty($_POST['changeOrder'])){
                if($_POST['changeOrder']=="ASC"){
                    $direction="DESC";
                }else{
                    $direction="ASC";
                }
            }

            if($direction == ""){
                $direction="ASC";
            }

            if($direction=="ASC"){
                if(!empty($_POST['navigate'])){

                    $navigation = $_POST['navigate'];
                    $incrementSize = $_POST['navSize'];
                    $incrementLocation = $_POST['navLoc'];
                    $count = $_POST['count'];
                    if(!empty($_POST['search'])){
                        $userSearch = $_POST['search'];
                    }

                    if($navigation=='previous'){
                        $incrementLocation -= $incrementSize;
                        if($incrementLocation<0){
                            $incrementLocation=0;
                        }
                    }else if($navigation=='next'){
                        $incrementLocation += $incrementSize;
                        if($incrementLocation>($count - $incrementSize)){
                            $incrementLocation = $count - $incrementSize;
                        }
                    }else if($navigation=='beginning'){
                        $incrementLocation = 0;
                    }else{
                        $incrementLocation = $count - $incrementSize;
                    }

                }else{
                    $incrementSize = 25;
                    $incrementLocation = 0;
                    $userSearch = $_POST['search'];
                }
            }else{          //if DESC
                if(!empty($_POST['navigate'])){

                    $navigation = $_POST['navigate'];
                    $incrementSize = $_POST['navSize'];
                    $incrementLocation = $_POST['navLoc'];
                    $count = $_POST['count'];
                    if(!empty($_POST['search'])){
                        $userSearch = $_POST['search'];
                    }
                    if($navigation=='previous'){
                        $incrementLocation += $incrementSize;
                        if($incrementLocation>($count - $incrementSize)){
                            $incrementLocation = $count - $incrementSize;
                        }
                    }else if($navigation=='next'){
                        $incrementLocation -= $incrementSize;
                        if($incrementLocation<0){
                            $incrementLocation=0;
                        }
                    }else if($navigation=='end'){
                        $incrementLocation = 0;
                    }else{
                        $incrementLocation = $count - $incrementSize;
                    }

                }else{
                    $incrementSize = 25;
                    $incrementLocation = 0;
                    $userSearch = $_POST['search'];
                }
            }


            if(!empty($_POST['submitSearch'])){
                $incrementLocation = 0;
            }
        ?>
        <form id="search" name="search" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <p>
                <h3>Search First & Last Name From DataBbase:</h3>
                <label>Search:
                    <input name="search" type="text" value="<?php echo $userSearch ?>" />
                </label>
                <input type="hidden" name="navSize" value="<?php echo $incrementSize; ?>" />
                <input type="hidden" name="navLoc" value="<?php echo $incrementLocation; ?>" />

                <input type="submit" name="submitSearch" value="Search"/>
            </p>
        </form>
        <form id="newEmployee" name="newEmployee" action="newEmployeeForm.html"  method="post">
            <p>
                <input type="submit" name="newEmployee" value="New Employee"/>
            </p>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Emp. Number</th>
                    <th>Birth Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Hire Date</th>
                </tr>
            </thead>
        <tbody>
            <?php
                require_once 'dbConnect.php';
                $db = connectToDB();

                if($userSearch!=''){
                    $result = mysqli_query($db,"SELECT * FROM employees WHERE first_name LIKE '%$userSearch%' OR last_name LIKE '%$userSearch%' LIMIT $incrementLocation,$incrementSize");
                    if(!$result){
                        die("Query error: " . mysqli_error($db));
                    }
                }else{

                    $result = mysqli_query($db,"SELECT * FROM employees ORDER BY emp_no $direction LIMIT $incrementLocation, $incrementSize");
                    if(!$result)
                    {
                        die("Query error: " . mysqli_error($db));
                    }
                    $countResult = mysqli_query($db,"SELECT * FROM employees");
                    if(!$countResult)
                    {
                        die("Query error: " . mysqli_error($db));
                    }
                    $count = mysqli_num_rows($countResult);
                }


                //Step 3 - Display results for select statement
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['emp_no'] . "</td>";
                    echo "<td>" . $row['birth_date'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['hire_date'] . "</td>";
                    echo "<form id='updateEmployee' name='updateEmployee' action='updateEmployeeForm.php'  method='post'>";
                    echo "<td><button type='submit' name='updateEmployeeID' value=".$row['emp_no']."><i class='fa fa-pencil-square-o'></i></button></td>";
                    echo "</form>";
                    echo "<form id='deleteEmployee' name='deleteEmployee' action='executeDeleteEmployee.php'  method='post'>";
                    echo "<td><button type='submit' name='deleteEmployeeID' value=".$row['emp_no']."><i class='	fa fa-remove'></i></button></td>";
                    echo "</form>";
                    echo "</tr>";
                }
                mysqli_close($db);
            ?>
            </tbody>
        </table>
        <form id="navigate" name="navigate" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            <button type="submit" name="navigate" value="beginning"><i class="fa fa-caret-square-o-left"></i></button>
            <button type="submit" name="navigate" value="previous"><i class="fa fa-arrow-circle-o-left"></i></button>
            <input name="navSize" type="text" value="<?php echo $incrementSize ?>" />
            <button type="submit" name="navigate" value="next"><i class="fa fa-arrow-circle-o-right"></i></button>
            <button type="submit" name="navigate" value="end"><i class="fa fa-caret-square-o-right"></i></button>
<!--            <input type="hidden" name="navSize" value="--><?php //echo $incrementSize; ?><!--" />-->
            <input type="hidden" name="navLoc" value="<?php echo $incrementLocation; ?>" />
            <input type="hidden" name="search"  value="<?php echo $userSearch ?>" />
            <input type="hidden" name="direction"  value="<?php echo $direction ?>" />
            <input type="hidden" name="count"  value="<?php echo $count ?>" />
        </form>
        <form id="order" name="order" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            <button type="submit" name="changeOrder" value="<?php echo $direction ?>"><i class="fa fa-sort"></i></button>
        </form>
    </body>
</html>