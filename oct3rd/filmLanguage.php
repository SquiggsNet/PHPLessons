<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Language</th>
            </tr>
        <?php
            $db = mysqli_connect("localhost","root", "inet2005","sakila");
            if (!$db)
            {    
                    die('Could not connect to the Sakila Database: ' . mysqli_error($db));
            }


            $sqlStatement = "SELECT film.title,film.description,language.name";
            $sqlStatement .= " FROM film INNER JOIN language";
            $sqlStatement .= " ON film.language_id=language.language_id";
            $sqlStatement .= " LIMIT 0,10;";

            $result = mysqli_query($db,$sqlStatement);
            if(!$result)
            {
                    die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
            }
            while ($row = mysqli_fetch_assoc($result))
            {
                    echo "<tr>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>". $row['description'] . "</td>";
                    echo "<td>". $row['name'] . "</td>";
                    echo "</tr>";
            }

            mysqli_close($db);
        ?>
        </table>
    </body>
</html>
