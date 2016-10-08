<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3 - Films</title>
    <style type="text/css">
        table, th, td{
            border: 4px solid indigo;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Film</th>
                <th>Description</th>
            </tr>
        </thead>
    <tbody>
        <?php
            require_once 'dbConnect.php';
            $db = connectToDB();

            if (isset($_POST['search'])){
                $userSearch = $_POST['search'];

                //step 2 - Sql statement (CRUD)
                $result = mysqli_query($db,"SELECT * FROM film WHERE description LIKE '%$userSearch%' LIMIT 0,10");
                if(!$result){
                    die("Query error: " . mysqli_error($db));
                }
            }else{
                $result = mysqli_query($db,"SELECT * FROM film LIMIT 0, 10");
                if(!$result)
                {
                    die("Query error: " . mysqli_error($db));
                }
            }
            //Step 3 - Display results for select statement
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "</tr>";
            }
            mysqli_close($db);
        ?>
        </tbody>
    </table>
    <p><a href="films.php">List Movies</a></p>
    <p><a href="films.html">Search Films</a></p>
    <p><a href="actor.php">Actors</a></p>
    <p><a href="actor.html">Record new actor</a></p>
</body>
</html>