<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Actor Page</title>
</head>
<body>
    <?php
        if(!empty($_POST['firstName']) && !empty($_POST['lastName']))
        {
            //Step 1 - Connect
            $db = mysqli_connect("localhost","root","inet2005","sakila");

            if(!$db){
                die("Connection error: " . mysqli_connect_error());
            }

            //step 2 - Sql statement (insert)
            $first_name = $_POST['firstName'];
            $last_name = $_POST['lastName'];
            $result = mysqli_query($db,"INSERT INTO actor(first_name, last_name) VALUES('$first_name','$last_name')");

            //Step 3 - Display whether it worked or not
            if(!$result){
                die("Insert query error: " . mysqli_error($db));
            }else{
                echo "<p>Record inserted!</p>";
            }


            //Step 3 or 4 - Close connection
            mysli_close($db);
        }else{
            echo "<p>Nothing to do</p>";
        }

    ?>
</body>
</html>