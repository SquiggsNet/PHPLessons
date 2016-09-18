<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lab 2 - Part A</title>
</head>
<body>
    <h1>Lab 2 - Part A</h1>
    <h3>Step 1:</h3>
    <?php
        function headingSizes($message, $size)
        {
            if ($size > 0 && $size < 7)
            {
                echo "<h$size>$message</h$size>";
            }else{
                echo"<p>Sorry, the currently selected heading size is not an option.</p>";
            }//end if/else statement
        }//end headingSize function

        for($counter=1;$counter<8;$counter++)
        {
            headingSizes("The currrent heading size is: $counter", $counter);
        }
    ?>
    <h3>Step 2:</h3>
    <?php
        $message = "Hello, World";

        function justAddBlahValue($passByValue)
        {
            $passByValue = "$passByValue...blah";
        }
        function justAddBlahReference(&$passByReference)
        {
            $passByReference = "$passByReference...blah";
        }
        echo "<p>Default Message: $message</p>";
        echo "<p>Message by value: ";
        justAddBlahValue($message);
        echo "$message</p>";
        echo "<p>Message by Reference: ";
        justAddBlahReference($message);
        echo "$message</p>";
    ?>
    <h3>Step: 3</h3>
    <?php
        $ageGlobalVar = 30;
        function ageDisplayGlobal()
        {
            global $ageGlobalVar;
            echo "<h1>You are $ageGlobalVar years old.</h1>";
        }
        ageDisplayGlobal();
    ?>
</body>
</html>