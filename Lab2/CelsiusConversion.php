<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Celsius Conversions</title>
        <style type="text/css">
            table, th, td, tr{
                border: 1px solid black;
            }
            .grey td, th{
                background: grey;
            }
            .white td{
                background: white;
            }
        </style>
    </head>
    <body>
    <a href="FahrenheitConversion.php">Fahrenheit converted</a>
        <table>
            <thead>
                <tr class="grey">
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
                        $remainder = $celsuis%2;
                        if ($remainder ==0)
                        {
                            ?>
                            <tr class="white">
                            <?php
                        }else
                        {
                            ?>
                            <tr class="grey">
                            <?php
                        }
                        ?>
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