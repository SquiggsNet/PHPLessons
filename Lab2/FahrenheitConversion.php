<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>New PHP Page</title>
        <style type="text/css">
            table, th, td, tr{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Ferenheight</th>
                    <th>Celsuis</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    function celsiusConverter($degree)
                    {
                        return $degree = ($degree - 32) * (5/9);
                    }

                    for($Fahrenheit=0; $Fahrenheit<=100; $Fahrenheit++)
                    {
                        $celsius = number_format(celsiusConverter($Fahrenheit));        //number formatting found at http://php.net/manual/en/function.number-format.php
                        ?>
                        <tr>
                            <td><?php echo $Fahrenheit ?></td>
                            <td><?php echo $celsius ?></td>
                        </tr>
                        <?php
                    } //end of for loop for row repeat
                ?>
            </tbody>
        </table>
    </body>
</html>