<h1>converter</h1>
<?php
    function celsiusConverter($degree)
    {
        return $degree = ($degree - 32) * (5/9);
    }


    for($Fahrenheit=0; $Fahrenheit<=50; $Fahrenheit++)
    {
        $celsius = number_format(celsiusConverter($Fahrenheit));        //number formatting found at http://php.net/manual/en/function.number-format.php
        echo "<p>$Fahrenheit degree(s) fahrenheit equals $celsius degrees Celsius.</p>";
    }
?>