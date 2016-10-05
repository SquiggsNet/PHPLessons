<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3 - Actor</title>
    <style type="text/css">
        table, th, td{
            border: 1px solid red;
        }
    </style>
</head>
    <body>
        <table>
            <thead>
                 <tr>
                     <th>ID</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                 </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'dbConnect.php';
                    $db = connectToDB();

                    if(!empty($_POST['firstName']) && !empty($_POST['lastName'])) {

                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];

                        //step 2 - Sql statement (CRUD)
                        $result = mysqli_query($db, "INSERT INTO actor(first_name, last_name) VALUES('$firstName','$lastName')");
                        if (!$result) {
                            die("Query error: " . mysqli_error($db));
                        }else{
                            echo "<p>New Entry!</p>";
                        }
                    }

                    $result = mysqli_query($db,"SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10");
                    if(!$result)
                    {
                        die("Query error: " . mysqli_error($db));
                    }
                    //Step 3 - Display results for select statement
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['actor_id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($db);
                ?>
            </tbody>
        </table>
        <form id="deleteActor" name="deleteActor" action="deleteActor.php"  method="post">
            <p>
                <label>ID to Delete:
                    <input name="actorDeleteID" id="actorDeleteID" type="text"/>
                </label>
            </p>
            <p>
                <input type="submit" name="Delete"/>
            </p>
        </form>
        <form id="updateActor" name="updateActor" action="updateChangeActor.php"  method="post">
            <p>
                <label>ID to Update:
                    <input name="actorUpdateID" id="actorUpdateID" type="text"/>
                </label>
            </p>
            <p>
                <input type="submit" name="Delete"/>
            </p>
        </form>
        <p><a href="actor.php">Actors</a></p>
        <p><a href="films.php">List Movies</a></p>
        <p><a href="films.html">Search Films</a></p>
        <p><a href="actor.html">Record new actor</a></p>
    </body>
</html>