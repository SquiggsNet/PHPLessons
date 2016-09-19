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
                    <th>Celsuis</th>
                    <th>Ferenheight</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    function fahrenheitConverter($degree)
                    {
                        return $degree = ($degree * (9/5)) + 32;
                    }

                    for($celsuis=0; $celsuis<=100; $celsuis++)
                    {
                        $fahrenheit = number_format(fahrenheitConverter($celsuis));        //number formatting found at http://php.net/manual/en/function.number-format.php
                        ?>
                        <tr>
                            <td><?php echo $celsuis ?></td>
                            <td><?php echo $fahrenheit ?></td>
                        </tr>
                        <?php
                    }//end of for loop for row repeat
                ?>
            </tbody>
        </table>
    </body>
</html>
