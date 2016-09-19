<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fahrenheit Conversions</title>
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
        <a href="CelsiusConversion.php">Celsius converted</a>
        <table>
            <thead>
                <tr class="grey">
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
                        $remainder = $Fahrenheit%2;
                        if ($remainder==0)
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