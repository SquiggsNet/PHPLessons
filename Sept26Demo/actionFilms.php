<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>New PHP Page</title>
        <style type="text/css">
            table, th, td{
                border: 1px solid rebeccapurple;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>File ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once 'dbConn.php';

                $db = connectToDB();

                $result = mysqli_query($db,"SELECT * FROM film WHERE description LIKE '%action%' ");
                if(!$result)
                {
                    die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
                }
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['film_id']."</td>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "</tr>";
                }

                mysqli_close($db);
            ?>
            </tbody>
        </table>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>