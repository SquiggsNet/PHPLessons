<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Assignment 1</title>
        <style type="text/css">
            table, th, td{
                border: 1px solid indigo;
            }
            button{
                font-size: 25px;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            if(!empty($_POST['navigate'])){

                $navigation = $_POST['navigate'];
                $incrementSize = $_POST['navSize'];
                $incrementLocation = $_POST['navLoc'];
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
                }else{
                    $incrementSize = 25;
                    $incrementLocation = 0;
                }

            }else{
                $incrementSize = 25;
                $incrementLocation = 0;
                $userSearch = $_POST['search'];
            }
            if(!empty($_POST['submitSearch'])){
                $incrementLocation = 0;
            }
        ?>
        <form id="search" name="search" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <p>
                <h2>Search First & Last Name From DataBbase:</h2>
                <label>Search:
                    <input name="search" type="text" value="<?php echo $userSearch ?>" />
                    <input type="hidden" name="navSize" value="<?php echo $incrementSize; ?>" />
                    <input type="hidden" name="navLoc" value="<?php echo $incrementLocation; ?>" />
                </label>
            </p>
            <p>
                <input type="submit" name="submitSearch" value="Search"/>
            </p>
        </form>
        <form id="newEmployee" name="newEmployee" action="newEmployeeForm.html"  method="post">
            <p>
                <input type="submit" name="newEmployee" value="New Employee"/>
            </p>
        </form>
        <form id="navigate" name="navigate" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            <button type="submit" name="navigate" value="begining"><i class="fa fa-arrow-circle-left"></i></button>
            <button type="submit" name="navigate" value="previous"><i class="fa fa-arrow-circle-o-left"></i></button>
            <button type="submit" name="navigate" value="next"><i class="fa fa-arrow-circle-o-right"></i></button>
            <input type="hidden" name="navSize" value="<?php echo $incrementSize; ?>" />
            <input type="hidden" name="navLoc" value="<?php echo $incrementLocation; ?>" />
            <input type="hidden" name="search"  value="<?php echo $userSearch ?>" />
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
                    $result = mysqli_query($db,"SELECT * FROM employees LIMIT $incrementLocation, $incrementSize");
                    if(!$result)
                    {
                        die("Query error: " . mysqli_error($db));
                    }
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
                    echo "<td><button type='submit' name='updateEmployee' value='updateEmployee'><i class='fa fa-pencil-square-o'></i></button></td>";
                    echo "<td><button type='submit' name='deleteEmployee' value='deleteEmployee'><i class='	fa fa-remove'></i></button></td>";
                    echo "</tr>";
                }
                mysqli_close($db);
            ?>
            </tbody>
        </table>
    </body>
</html>