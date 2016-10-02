<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New PHP Page</title>
    <style type="text/css">
        table, th, td{
            border: 1px solid olivedrab;
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Step 1 - Connect
            $db = mysqli_connect("localhost","root","inet2005","sakila");

            if(!$db){
                die("Connection error: " . mysqli_connect_error());
            }

            //step 2 - Sql statement (CRUD)
            $result = mysqli_query($db,"SELECT * FROM actor LIMIT 0,10");
            if(!$result){
                die("Query error: " . mysqli_error($db));
            }

            //Step 3 - Display results for select statement
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "</tr>";
            }

            //Step 3 or 4 - Close connection
            mysli_close($db);
            ?>
        </tbody>
    </table>
</body>
</html>