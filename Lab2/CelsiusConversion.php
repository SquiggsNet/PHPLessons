<h1>converter</h1>
<table border="solid black">
    <thead>
    <tr>
        <th>Celsuis</th>
        <th>Ferenheight</th>
    </tr>
    </thead>

    <?php
    function fahrenheitConverter($degree)
    {
        return $degree = ($degree * (9/5)) + 32;
    }

    for($celsuis=0; $celsuis<=100; $celsuis++)
    {
        $fahrenheit = number_format(fahrenheitConverter($celsuis));        //number formatting found at http://php.net/manual/en/function.number-format.php
        echo "<tr><th>$celsuis</th><th>$fahrenheit</th></tr>";
    }
    ?>

</table>
