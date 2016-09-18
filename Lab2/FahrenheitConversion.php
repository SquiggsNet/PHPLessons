<h1>converter</h1>
<table border="solid black">
    <thead>
        <tr>
            <th>Ferenheight</th>
            <th>Celsuis</th>
        </tr>
        </thead>

        <?php
        function celsiusConverter($degree)
        {
            return $degree = ($degree - 32) * (5/9);
        }


        for($Fahrenheit=0; $Fahrenheit<=100; $Fahrenheit++)
        {
            $celsius = number_format(celsiusConverter($Fahrenheit));        //number formatting found at http://php.net/manual/en/function.number-format.php
            echo "<tr><th>$Fahrenheit</th><th>$celsius</th></tr>";
        }
        ?>

</table>
