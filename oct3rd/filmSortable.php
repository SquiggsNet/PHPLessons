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
                <th><a href="filmSortable.php?order_by=name">Title</a></th>
                <th><a href="filmSortable.php?order_by=desc">Description</a></th>
                <th><a href="filmSortable.php?order_by=rate">Rental Rate</a></th>
            </tr>
        <?php
            $db = mysqli_connect("localhost","root", "inet2005","sakila");
            if (!$db)
            {    
                    die('Could not connect to the Sakila Database: ' . mysqli_error($db));
            }


            $sqlStatement = "SELECT * FROM film";
            if(!empty($_GET['order_by']))
            {
                switch($_GET['order_by'])
                {
                    case 'name':
                        $sqlStatement .= " ORDER BY title ASC";
                         break;
                    case 'desc':
                        $sqlStatement .= " ORDER BY description ASC";
                         break;
                    case 'rate':
                        $sqlStatement .= " ORDER BY rental_rate ASC";
                         break;
                    default:
                        $sqlStatement .= " ORDER BY film_id ASC";
                         break;
                }
            }
            $sqlStatement .= " LIMIT 0,50;";

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
                    echo "<td>". $row['rental_rate'] . "</td>";
                    echo "</tr>";
            }

            mysqli_close($db);
        ?>
        </table>
    </body>
</html>
