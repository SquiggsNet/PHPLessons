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

                    $result = mysqli_query($db,"SELECT * FROM film LIMIT 0, 10");
                    if(!$result)
                    {
                        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
                    }
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                            <tr>
                                <td><?php echo $row['film_id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                            </tr>
                        <?php
                    }//end of while loop

                    mysqli_close($db);
                ?>
            </tbody>
        </table>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>